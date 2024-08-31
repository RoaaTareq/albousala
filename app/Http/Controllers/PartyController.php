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
    public function index()
    {
        $parties = Party::latest()->paginate(10);
        return view('parties.index', compact('parties'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('parties.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_parties' => 'required',
            'username' => 'required|unique:parties',
            'location' => 'required',
            'phone' => 'required',
            'about' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Party::create($input);

        return redirect()->route('parties.index')->with('success', 'Party created successfully.');
    }

    public function show(Party $party)
    {
        return view('parties.show', compact('party'));
    }

    public function edit(Party $party)
    {
        return view('parties.edit', compact('party'));
    }

    public function update(Request $request, Party $party)
    {
        $request->validate([
            'name_parties' => 'required',
            'username' => 'required|unique:parties,username,' . $party->id,
            'location' => 'required',
            'phone' => 'required',
            'about' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $party->update($input);

        return redirect()->route('parties.index')->with('success', 'Party updated successfully.');
    }

    public function destroy(Party $party)
    {
        if ($party->image) {
            Storage::delete('images/' . $party->image);
        }
        $party->delete();

        return redirect()->route('parties.index')->with('success', 'Party deleted successfully.');
    }
    public function showAnswersForm($partyId)
    {
        $party = Party::findOrFail($partyId);
        $questions = Question::with('options')->get();
    
        // Assuming you have a way to get the `score` for each user, for simplicity let's say it's stored in the user's session
        $userScore = session('user_score', 0); // Replace with actual user score logic
    
        foreach ($party->answers as $answer) {
            $answer->difference = abs($userScore )- $party->total_score;
        }
    
        return view('parties.answers_form', compact('party', 'questions'));
    }
    

    public function storeAnswers(Request $request, $partyId)
    {
        $party = Party::findOrFail($partyId);
        $data = $request->validate([
            'answers.*' => 'required|integer|exists:options,id',
        ]);

        foreach ($data['answers'] as $questionId => $optionId) {
            Answer::updateOrCreate(
                ['party_id' => $party->id, 'question_id' => $questionId],
                ['option_id' => $optionId]
            );
        }

        return redirect()->route('party.answers.create', $party->id)->with('success', 'Answers saved successfully.');
    }
}
