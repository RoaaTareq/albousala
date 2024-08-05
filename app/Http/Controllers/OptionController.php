<?php
namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OptionController extends Controller
{
    public function index()
    {
        $options = Option::latest()->paginate(10);
        return view('options.index', compact('options'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        // Fetch all questions to populate the dropdown
        $questions = Question::all();
        return view('options.create', compact('questions'));
    }

    public function store(Request $request)
    {
        // Debugging: Log the request data to ensure it's being received correctly
        Log::info($request->all());

        // Validate the incoming request
        $request->validate([
            'existing_question_id' => 'required|exists:questions,id',
            'options.*.option_text' => 'required|string',
            'options.*.value' => 'required|integer',
        ]);

        try {
            // Retrieve the question ID from the request
            $questionId = $request->input('existing_question_id');

            // Loop through the options and create them
            $options = $request->input('options', []);
            foreach ($options as $optionData) {
                Option::create([
                    'question_id' => $questionId,
                    'option_text' => $optionData['option_text'],
                    'value' => $optionData['value'],
                ]);
            }

            return redirect()->route('options.index')->with('success', 'Options created successfully.');
        } catch (\Exception $e) {
            // Log the error message
            Log::error('Error storing options: ' . $e->getMessage());

            // Redirect back with an error message
            return redirect()->back()->with('error', 'There was an error storing the options.');
        }
    }

    public function show(Option $option)
    {
        return view('options.show', compact('option'));
    }

    public function edit(Option $option)
    {
        return view('options.edit', compact('option'));
    }

    public function update(Request $request, Option $option)
    {
        $request->validate([
            'option_text' => 'required',
            'value' => 'required|integer',
        ]);

        $option->update($request->all());

        return redirect()->route('options.index')->with('success', 'Option updated successfully.');
    }

    public function destroy(Option $option)
    {
        $option->delete();

        return redirect()->route('options.index')->with('success', 'Option deleted successfully.');
    }
}

?>