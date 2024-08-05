<!-- resources/views/parties/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Party Details') }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $party->name_parties }}
                    </div>

                    <div class="form-group">
                        <strong>Username:</strong>
                        {{ $party->username }}
                    </div>

                    <div class="form-group">
                        <strong>Location:</strong>
                        {{ $party->location }}
                    </div>

                    <div class="form-group">
                        <strong>Phone:</strong>
                        {{ $party->phone }}
                    </div>

                    <div class="form-group">
                        <strong>About:</strong>
                        {{ $party->about }}
                    </div>

                    <div class="form-group">
                        <strong>Image:</strong>
                        <img src="/images/{{ $party->image }}" width="100px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
