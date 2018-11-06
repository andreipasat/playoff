@extends('layouts.app')

@section('title', 'Competitions')

@section('menu')
    <div class="col-md-3">
        @include('includes.menu')
    </div>
@endsection


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Соревнования
        </div>
        <div class="panel-body">
            <a href="{{ route('competitions.create') }}" class="btn btn-primary">Создайте</a>

            @if (!empty($competitions))
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Название</th>
                        <th>Правила</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($competitions as $competition)
                            <tr>
                                <td>{{ $competition->id }}</td>
                                <td>{{ $competition->name }}</td>
                                <td>
                                    @foreach($competition->rules as $rule)
                                        {{ $rule->name }} <br>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('competitions.edit',['id' => $competition->id]) }}" class="btn-sm btn-primary">редактировать</a>
                                    <a href="{{ route('competitions.manage',['id' => $competition->id]) }}" class="btn-sm btn-primary">управлять</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            @endif

        </div>
    </div>

@endsection
