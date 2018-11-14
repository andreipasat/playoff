@extends('layouts.app')

@section('title| Manage competition')
@section('menu')
    <div class="col-md-3">
        @include('includes.menu')
    </div>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Соревнования - {{ $competition->name }}
        </div>
        <div class="panel-body">
            <a href="{{ route('playoff.create',['id' => $competition->id]) }}" class="btn btn-primary">Создать раздел</a>

            @if (!empty($competition->playoffs))
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Пол</th>
                    <th>Правило</th>
                    <th>#</th>
                    </thead>
                    <tbody>
                    @foreach($competition->playoffs as $playoff)
                        <tr>
                            <td>{{ $playoff->id }}</td>
                            <td>{{ config('custom.sex.' .$playoff->sex) }}</td>
                            <td>{{ $playoff->rule->name }}</td>
                            <td>
                                <a href="{{ route('playoff.view',['id' => $competition->id,'pl' => $playoff->id]) }}" class="btn-sm btn-primary">Смотреть</a>
                                <a href="{{ route('playoff.edit',['id' => $competition->id,'pl' => $playoff->id]) }}" class="btn-sm btn-primary">Управлять</a>
                                <a href="{{ route('playoff.delete',['id' => $competition->id,'pl' => $playoff->id]) }}" class="btn-sm btn-danger">Удалить</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            @endif
        </div>

    </div>

@endsection
