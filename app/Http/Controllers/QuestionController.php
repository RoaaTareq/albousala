<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    //     $questions = Question::paginate(10);
    // return view('questions.index', compact('questions'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           
            'content' => 'required',
        ]);

        Question::create($request->all());

        return redirect()->route('questions.index')
                         ->with('success', 'Question created successfully.');
    }

    public function show(Question $question)
    {
        return view('questions.show', compact('question'));
    }

    public function edit(Question $question)
    {
        return view('questions.edit', compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $question->update($request->all());

        return redirect()->route('questions.index')
                         ->with('success', 'Question updated successfully.');
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->route('questions.index')
                         ->with('success', 'Question deleted successfully.');
    }
}
