@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Question') }}</div>

                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('options.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="existing_question">Select Existing Question:</label>
                            <select name="existing_question_id" class="form-control" required>
                                <option value="">-- Select an Existing Question --</option>
                                @foreach($questions as $question)
                                    <option value="{{ $question->id }}">{{ $question->content }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div id="options-container">
                            <h5>Options:</h5>
                            <div class="form-group">
                                <input type="text" name="options[0][option_text]" class="form-control" placeholder="Option 1" required>
                                <input type="number" name="options[0][value]" class="form-control" placeholder="Value 1" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="options[1][option_text]" class="form-control" placeholder="Option 2" required>
                                <input type="number" name="options[1][value]" class="form-control" placeholder="Value 2" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="options[2][option_text]" class="form-control" placeholder="Option 3" required>
                                <input type="number" name="options[2][value]" class="form-control" placeholder="Value 3" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="options[3][option_text]" class="form-control" placeholder="Option 4" required>
                                <input type="number" name="options[3][value]" class="form-control" placeholder="Value 4" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="options[4][option_text]" class="form-control" placeholder="Option 5" required>
                                <input type="number" name="options[4][value]" class="form-control" placeholder="Value 5" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
