<!-- resources/views/parties/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Party') }}</div>

                <div class="card-body">
                    <form action="{{ route('parties.update', $party->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name_parties">Name:</label>
                            <input type="text" name="name_parties" class="form-control" value="{{ $party->name_parties }}">
                        </div>

                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" class="form-control" value="{{ $party->username }}">
                        </div>

                        <div class="form-group">
                            <label for="location">Location:</label>
                            <input type="text" name="location" class="form-control" value="{{ $party->location }}">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" name="phone" class="form-control" value="{{ $party->phone }}">
                        </div>

                        <div class="form-group">
                            <label for="about">About:</label>
                            <textarea name="about" class="form-control">{{ $party->about }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" name="image" class="form-control">
                            <img src="/images/{{ $party->image }}" width="100px">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
