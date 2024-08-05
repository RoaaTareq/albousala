@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Questions') }}</div>

                <div class="card-body">
                    <a href="{{ route('questions.create') }}" class="btn btn-primary mb-3">Create Question</a>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Question</th>
                         
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($questions as $question)
                        <tr>
                            
                           <td>{{$question->id}}</td>
                            <td>{{ $question->content }}</td>
                            <td>
                                <form action="{{ route('questions.destroy', $question->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('questions.show', $question->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('questions.edit', $question->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
