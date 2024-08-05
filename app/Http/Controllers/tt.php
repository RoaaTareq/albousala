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

    // Calculate the sum of selected option values
    foreach ($request->input('answers') as $answer) {
        $option = Option::find($answer['option_id']);
        $value = $option->value; // Assuming the Option model has a `value` attribute

        $totalValue += $value; // Sum all option values
    }

    // Define the maximum possible value
    // Adjust this according to your system’s maximum possible value.
    $maxValue = 100; // Set to your system's maximum possible value

    // Calculate the score
    if ($maxValue == 0) {
        $percentageScore = 100; // If maxValue is zero, the score should be 100 by default
    } else {
        $percentageScore = 100 - ($totalValue / $maxValue * 100);
        // dd($percentageScore);
        $percentageScore = max($percentageScore, 0); // Ensure the percentage does not go below 0%
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
                'score' => $percentageScore // Store the calculated score
            ]
        );
    }

    // Update the party with the adjusted total score
    Party::where('id', $partyId)->update(['total_score' => $percentageScore]);

    return redirect()->route('parties.index')->with('success', 'Answers saved successfully.');
}
