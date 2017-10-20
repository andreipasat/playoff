@extends('layouts.app')

@section('title', 'Competitions')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Competitions
        </div>
        <div class="panel-body">
            <a href="{{ route('competitions.create') }}" class="btn btn-primary">Create</a>

            @if (!empty($competitions))
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($competitions as $competition)
                            <tr>
                                <td>{{ $competition->id }}</td>
                                <td>{{ $competition->name }}</td>
                                <td>
                                    <a href="{{ route('competitions.edit',['id' => $competition->id]) }}" class="btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('competitions.manage',['id' => $competition->id]) }}" class="btn-sm btn-primary">Manage</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            @endif

        </div>
    </div>

@endsection