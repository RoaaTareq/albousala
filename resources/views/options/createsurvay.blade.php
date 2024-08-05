<!-- resources/views/options/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Options') }}</div>

                <div class="card-body">
                    <a href="{{ route('options.create') }}" class="btn btn-primary mb-3">Create Option</a>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Value</th>
                            <th>Description</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($options as $option)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $option->option_text }}</td>
                            <td>{{ $option->value }}</td>
                            <td>{{ $option->description }}</td>
                            <td>
                                <form action="{{ route('options.destroy', $option->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('options.show', $option->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('options.edit', $option->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    {!! $options->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
