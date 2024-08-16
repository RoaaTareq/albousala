<!-- resources/views/parties/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Parties') }}</div>

                <div class="card-body">
                    <a href="{{ route('parties.create') }}" class="btn btn-primary mb-3">Create Party</a>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Location</th>
                            <th>Phone</th>
                            <th>About</th>
                            <th>Image</th>
                            <th>Score</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($parties as $party)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $party->name_parties }}</td>
                            <td>{{ $party->username }}</td>
                            <td>{{ $party->location }}</td>
                            <td>{{ $party->phone }}</td>
                            <td>{{ $party->about }}</td>
                            <td>{{ $party->total_score }}</td>
                            <td><img src="/images/{{ $party->image }}" width="100px"></td>
                            <td>
                                <form action="{{ route('parties.destroy', $party->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('parties.show', $party->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('parties.edit', $party->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    {!! $parties->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
