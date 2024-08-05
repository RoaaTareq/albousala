@extends('layouts.app')
<style>
  .style{
    background: #b0afab;
    padding: 12px;
    border-radius: 12px;
    margin: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 500px;
    margin: 12px auto;
}
/* Base style for all radio buttons */
input[type="radio"] {
  accent-color: #007bff; /* Modern browsers support this for color */
  border: 2px solid #ccc;
  width: 20px;
  height: 20px;
  cursor: pointer;
}

/* Style for radio button when checked */
input[type="radio"]:checked {
  border-color: #007bff;
  background-color: #007bff;
}

/* Style for label when associated radio button is checked */
input[type="radio"]:checked + label {
  color: #007bff;
  font-weight: bold;
}

</style>
@section('content')
    <h1 class='text-center'> اجابات الاحزاب</h1>
    <form action="{{ route('answers.store') }}" method="POST">
        @csrf

        <!-- Hidden input to pass party_id -->
        <input type="hidden" name="party_id" value="{{ $party->id }}">

        @foreach ($questions as $question)
            <div class="style">
                <label>{{ $question->content }}</label>
                @foreach ($question->options as $option)
                    <div>
                        <input type="radio"  name="answers[{{ $loop->parent->index }}][option_id]" value="{{ $option->id }}" id="option{{ $option->id }}" class="mt-2">
                        <label for="option{{ $option->id }}">{{ $option->option_text }}</label>
                    </div>
                @endforeach
                <input type="hidden" name="answers[{{ $loop->index }}][question_id]" value="{{ $question->id }}">
            </div>
        @endforeach

        <button type="submit" class='btn btn-primary d-flex m-auto'>تسليم الاجابات</button>
    </form>
@endsection
