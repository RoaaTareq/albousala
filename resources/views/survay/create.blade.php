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
input[type="radio"] {
  accent-color: #007bff;
  border: 2px solid #ccc;
  width: 20px;
  height: 20px;
  cursor: pointer;
}
input[type="radio"]:checked {
  border-color: #007bff;
  background-color: #007bff;
}
input[type="radio"]:checked + label {
  color: #007bff;
  font-weight: bold;
}
.input-container{
  margin: 10px;
}
</style>

@section('content')
    <h1 class="text-center">شارك لتعرف الحزب المناسب لك</h1>
    <form action="{{ route('survay.store') }}" method="POST">
        @csrf

        @foreach ($questions as $question)
            <div class="style">
                <label>{{ $question->content }}</label>
                @foreach ($question->options as $option)
                    <div class="input-container">
                        <input type="radio" name="answers[{{ $loop->parent->index }}][option_id]" value="{{ $option->id }}" id="option{{ $option->id }}" class="text-center">
                        <label for="option{{ $option->id }}">{{ $option->option_text }}</label>
                    </div>
                @endforeach
                <input type="hidden" name="answers[{{ $loop->index }}][question_id]" value="{{ $question->id }}">
            </div>
        @endforeach

        <button type="submit" class='btn btn-primary d-flex m-auto'>تسليم الإجابة</button>
    </form>
@endsection
