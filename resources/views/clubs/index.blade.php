@extends('layouts.app')

@section('title| Clubs')

@section('menu')
    <div class="col-md-3">
        @include('includes.menu')
    </div>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Спортивные клубы
        </div>
        <div class="panel-body">
            <a href="{{ route('clubs.create') }}" class="btn btn-primary">Создайте</a>

            @if (!empty($clubs))
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Название</th>
                    <th>Страна</th>
                    <th></th>
                    </thead>
                    <tbody>
                    @foreach($clubs as $club)
                        <tr>
                            <td>{{ $club->id }}</td>
                            <td>{{ $club->name }}</td>
                            <td>{{ $club->country->name }}</td>
                            <td>
                                <a href="{{ route('clubs.edit',['id' => $club->id]) }}" class="btn-sm btn-primary">Редактировать</a>
                                <form class="pull-right" method="POST" action="{{ route('clubs.destroy',['id' => $club->id]) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn-sm btn-danger">Удалить</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            @endif

        </div>
    </div>
@endsection
