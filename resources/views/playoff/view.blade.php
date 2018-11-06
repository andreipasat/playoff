@extends('layouts.app')

@section('title','Edit playoff')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            {{ $playOff->competition->name }} - {{ config('custom.sex')[$playOff->sex] }} - {{ $playOff->rule->name }} - {{ $playOff->age_from }} - {{ $playOff->age_to }}
        </div>
        <div class="panel-body">
            {{--<a class="btn btn-primary" href="{{ route('playoff.edit',['id' => $playOff->competition->id,'pl' => $playOff->id]) }}">Редактировать</a>--}}
            {{--<br>--}}
            {{--<br>--}}
            <ul class="list-group">
                @if (!empty($playOff->participants))
                    @foreach($playOff->participants as $value)
                        <li class="list-group-item">{{ $value->player->name }}</li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>

@endsection