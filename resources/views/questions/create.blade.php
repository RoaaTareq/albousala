@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Question') }}</div>

                <div class="card-body">
                    <form action="{{ route('questions.store') }}" method="POST">
                        @csrf

                       

                        <div class="form-group">
                            <label for="body">Body:</label>
                            <textarea class="form-control" style="height:150px" name="content" placeholder="Body"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
