@extends('layouts.app')

@section('title', 'Players')

@section('menu')
    <div class="col-md-3">
        @include('includes.menu')
    </div>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Участники
        </div>
        <div class="panel-body">
            <a href="{{ route('players.create') }}" class="btn btn-primary">Создать участника</a>

            @if (!empty($players))
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Имя</th>
                    <th>Пол</th>
                    <th>Дата рождения</th>
                    <th>Возраст</th>
                    <th>Вес</th>
                    <th>Клуб</th>
                    <th>Тренер</th>
                    <th>Достжения</th>
                    <th></th>
                    </thead>
                    <tbody>
                    @foreach($players as $player)
                        <tr>
                            <td>{{ $player->id }}</td>
                            <td>{{ $player->name }}</td>
                            <td>{{ config('custom.sex')[$player->sex] }}</td>
                            <td> {{ $player->birthday }} </td>
                            <td> {{ $player->age }} </td>
                            <td> {{ $player->weight }} </td>
                            <td> {{ $player->club->name }} </td>
                            <td> {{ $player->coach }} </td>
                            <td> </td>
                            <td>
                                <a href="{{ route('player.edit',['id' => $player->id]) }}" class="btn-sm btn-primary">Редактировать</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            @endif

        </div>
    </div>

@endsection
