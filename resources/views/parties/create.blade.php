<!-- resources/views/parties/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Party') }}</div>

                <div class="card-body">
                    <form action="{{ route('parties.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name_parties">Name:</label>
                            <input type="text" name="name_parties" class="form-control" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <label for="location">Location:</label>
                            <input type="text" name="location" class="form-control" placeholder="Location">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone">
                        </div>

                        <div class="form-group">
                            <label for="about">About:</label>
                            <textarea name="about" class="form-control" placeholder="About"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
