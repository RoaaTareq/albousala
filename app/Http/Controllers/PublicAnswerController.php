<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\Question;
use App\Models\SurveyResponse;
use App\Models\UserAnswer;
use App\Models\Party;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PublicAnswerController extends Controller
{
    public function showForm()
    {
        $questions = Question::with('options')->get();
        return view('survay.create', compact('questions'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'answers' => 'required|array',
            'answers.*.question_id' => 'required|exists:questions,id',
            'answers.*.option_id' => 'required|exists:options,id',
        ]);

        if (!$request->session()->has('session_id')) {
            $sessionId = Str::uuid();
            $request->session()->put('session_id', $sessionId);
        } else {
            $sessionId = $request->session()->get('session_id');
        }

        $surveyResponse = SurveyResponse::firstOrCreate(
            ['session_id' => $sessionId]
        );

        $totalValue = 0;
        $uniqueValues = [];
        $allZeros = true;
        $allSameValue = true;
        $firstValue = null;

        foreach ($request->input('answers') as $answer) {
            $option = Option::find($answer['option_id']);
            $value = $option->value ?? 0;

            if ($value != 0) {
                $allZeros = false;
            }

            if ($firstValue === null) {
                $firstValue = $value;
            } elseif ($value != $firstValue) {
                $allSameValue = false;
            }

            $uniqueValues[$value] = true;
            $totalValue += $value;

            UserAnswer::create([
                'session_id' => $sessionId,
                'question_id' => $answer['question_id'],
                'option_id' => $answer['option_id'],
                'score' => $value,
            ]);
        }

        if ($allZeros) {
            $totalScore = 0;
        }  else {
            $maxValue = 100;

            if ($maxValue == 0) {
                $totalScore = 100;
            } else {
                $totalScore = abs ($totalValue );
                // dd($totalScore);
                $totalScore = max($totalScore, 0);
            }
        }

        $surveyResponse->update(['total_score' => $totalScore]);

        // Calculate and update party scores
        // $this->updatePartyScores();

        return redirect()->route('survay.thankyou')
            ->with('total_score', $totalScore)
            ->with('success', 'Survey submitted successfully.');
    }

    protected function updatePartyScores()
    {
        $parties = Party::all();

        foreach ($parties as $party) {
            // Placeholder for your actual scoring logic
            $totalScore = DB::table('user_answers')
                ->join('options', 'user_answers.option_id', '=', 'options.id')
                ->join('questions', 'user_answers.question_id', '=', 'questions.id')
                // Example criteria, adjust according to your logic
                // ->where('questions.some_column', $party->some_column)
                ->sum('user_answers.score');

            Party::where('id', $party->id)
                ->update(['total_score' => $totalScore]);
        }
    }

    public function showThankYouPage()
    {
        // Fetch all parties with their scores
        $parties = Party::all();
 // Calculate the difference from 100 for the total score
 $differencess = abs(100 - session('total_score'));

 // Return the view and pass the parties and differencess variable
 return view('survay.thankyou', compact('parties', 'differencess'));
    
}
}