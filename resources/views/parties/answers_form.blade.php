@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Questions for {{ $party->name_parties }}</h1>
    <form action="{{ route('party.answers.store', $party->id) }}" method="POST">
        @csrf
        @foreach ($questions as $question)
            <div class="mb-3">
                <label class="form-label">{{ $question->question_text }}</label>
                @foreach ($question->options as $option)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" id="option{{ $option->id }}" value="{{ $option->id }}">
                        <label class="form-check-label" for="option{{ $option->id }}">
                            {{ $option->option_text }}
                        </label>
                    </div>
                @endforeach
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
