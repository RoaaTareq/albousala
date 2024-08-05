<?php

namespace App\Http\Controllers;
use App\Models\Party;
use App\Models\Option;
use App\Models\Question;
use App\Models\Answer;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    
    public function create(Party $party)
    {
        $questions = Question::with('options')->get();
        return view('answers.create', compact('party', 'questions'));
    }
    
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'party_id' => 'required|exists:parties,id',
            'answers' => 'required|array',
            'answers.*.question_id' => 'required|exists:questions,id',
            'answers.*.option_id' => 'required|exists:options,id',
        ]);
    
        $partyId = $request->input('party_id');
        $totalValue = 0;
        $allSameValue = true;
        $firstValue = null;
        $allZeros = true;
    
        // Calculate the sum of selected option values
        foreach ($request->input('answers') as $answer) {
            $option = Option::find($answer['option_id']);
            $value = $option->value; // Assuming the Option model has a `value` attribute
    
            if ($firstValue === null) {
                $firstValue = $value;
            } elseif ($value != $firstValue) {
                $allSameValue = false;
            }
    
            if ($value != 0) {
                $allZeros = false;
            }
    
            $totalValue += $value; // Sum all option values
           
        }
    
        // Calculate the score
        if ($allZeros) {
            $totalScore = 0; // If all values are 0, set total score to 0
            // dd($totalScore);
        }  else {
            // Define the maximum possible value
            // Adjust this according to your system’s maximum possible value.
            $maxValue = 100; // Set to your system's maximum possible value
    
            // Calculate the score
            if ($maxValue == 0) {
                $totalScore = 100; // If maxValue is zero, the score should be 100 by default
            } else {
                $totalScore = abs($totalValue );
                //  dd($totalScore);
                
                $totalScore = max($totalScore, 0); // Ensure the percentage does not go below 0%
                // dd($totalScore);
            }
        }
    
        // Update or create answers with the calculated score
        foreach ($request->input('answers') as $answer) {
            Answer::updateOrCreate(
                [
                    'party_id' => $partyId,
                    'question_id' => $answer['question_id']
                ],
                [
                    'option_id' => $answer['option_id'],
                    'score' => $totalValue // Store the sum of option values
                ]
            );
        }
    
        // Update the party with the adjusted total score
        Party::where('id', $partyId)->update(['total_score' => $totalScore]);
    
        return redirect()->route('parties.index')->with('success', 'Answers saved successfully.');
    }
    
    

    
    
    

    

    
}
