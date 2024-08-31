<?php

namespace App\Http\Controllers;

use App\Models\Party;
use App\Models\Question;
use App\Models\Option;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartyController extends Controller
{
    // Other methods...

    public function storeAnswers(Request $request, $partyId)
    {
        $party = Party::findOrFail($partyId);
        $data = $request->validate([
            'answers.*' => 'required|integer|exists:options,id',
        ]);

        $totalScore = 0;

        foreach ($data['answers'] as $questionId => $optionId) {
            // Assuming the option value is stored in the options table
            $option = Option::findOrFail($optionId);
            $totalScore += $option->value;  // Assuming 'value' is the column storing the option's score

            Answer::updateOrCreate(
                ['party_id' => $party->id, 'question_id' => $questionId],
                ['option_id' => $optionId, 'score' => $option->value]
            );
        }

        // Store the total score in the session to use it in the view
        session(['total_score' => $totalScore]);

        // Subtracting the party score from the user's total score
        $parties = Party::all();
        foreach ($parties as $party) {
            $differenceFrom100 = 100 - $party->total_score;
            $party->calculated_difference = abs($differenceFrom100 - $totalScore);
            $party->save();
        }

        return redirect()->route('party.answers.create', $party->id)->with('success', 'Answers saved successfully.');
    }

    public function showAnswersForm($partyId)
    {
        $party = Party::findOrFail($partyId);
        $questions = Question::with('options')->get();
        $parties = Party::all();

        return view('parties.answers_form', compact('party', 'questions', 'parties'));
    }
}
