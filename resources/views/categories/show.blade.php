<!-- resources/views/categories/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Category Details') }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $category->name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
