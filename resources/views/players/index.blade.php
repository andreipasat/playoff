@extends('layouts.app')

@section('title', 'Players')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Players
        </div>
        <div class="panel-body">
            <a href="{{ route('players.create') }}" class="btn btn-primary">Create Player</a>

            @if (!empty($players))
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($players as $player)
                        <tr>
                            <td>{{ $player->id }}</td>
                            <td>{{ $player->name }}</td>
                            <td>
                                <a href="{{ route('player.edit',['id' => $player->id]) }}" class="btn-sm btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            @endif

        </div>
    </div>

@endsection