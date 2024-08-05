@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Option') }}</div>

                <div class="card-body">
                    <form action="{{ route('options.update', $option->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="option_text" class="form-control" value="{{ $option->option_text }}" required>
                        </div>

                        <div class="form-group">
                            <label for="value">Value:</label>
                            <input type="number" name="value" class="form-control" value="{{ $option->value }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
