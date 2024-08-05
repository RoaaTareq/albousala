<!-- resources/views/options/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Option Details') }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $option->option_text }}
                    </div>

                    <div class="form-group">
                        <strong>Value:</strong>
                        {{ $option->value }}
                    </div>

                    <div class="form-group">
                        <strong>Description:</strong>
                        {{ $option->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
