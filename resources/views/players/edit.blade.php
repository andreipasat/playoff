@extends('layouts.app')

@section('title| Edit player')

@section('menu')
    <div class="col-md-3">
        @include('includes.menu')
    </div>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Изменить участника
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="{{ route('players.post.update',['id' => $player->id]) }}">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="name">имя</label>
                    <div class="col-md-9">
                        <input type="text" name="name" class="form-control" value="{{ $player->name }}">
                        @if ($errors->has('name'))
                            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('sex') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="name">пол</label>
                    <div class="col-md-9">
                        <input type="radio" {{ ($player->sex == 'm') ? 'checked' : '' }} name="sex" value="m"> мужчина
                        <input type="radio" {{ ($player->sex == 'w') ? 'checked' : '' }} name="sex" value="w"> Женщина
                        @if ($errors->has('sex'))
                            <span class="help-block"><strong>{{ $errors->first('sex') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('birthday') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="birthday">день рождения</label>
                    <div class="col-md-9">
                        <input type="text" data-provide="datepicker" data-date-format="dd/mm/yyyy" class="datepicker form-control" name="birthday" value="{{ date('d/m/Y',strtotime($player->birthday)) }}">
                        @if ($errors->has('birthday'))
                            <span class="help-block"><strong>{{ $errors->first('birthday') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('weight') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="weight">вес</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="weight" value="{{ $player->weight }}">
                        @if ($errors->has('weight'))
                            <span class="help-block"><strong>{{ $errors->first('weight') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('club_id') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="club_id">Клуб</label>
                    <div class="col-md-9">
                        <select name="club_id" class="form-control">
                            @foreach(\App\Clubs::all() as $value)
                                <option {{ ($value->id == $player->club->id) ? 'selected' : '' }} value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('club_id'))
                            <span class="help-block"><strong>{{ $errors->first('club_id') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('coach') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="coach">Тренер</label>
                    <div class="col-md-9">
                        <input type="text" name="coach" class="form-control" value="{{ $player->coach }}">
                        @if ($errors->has('coach'))
                            <span class="help-block"><strong>{{ $errors->first('coach') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('wins') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="wins">Выигрыши</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="wins" value="{{ $player->wins }}">
                        @if ($errors->has('wins'))
                            <span class="help-block"><strong>{{ $errors->first('wins') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('loses') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="loses">поражение</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="loses" value="{{ $player->loses }}">
                        @if ($errors->has('loses'))
                            <span class="help-block"><strong>{{ $errors->first('loses') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('equality') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="equality">ничья</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="equality" value="{{ $player->equality }}">
                        @if ($errors->has('equality'))
                            <span class="help-block"><strong>{{ $errors->first('equality') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <button class="btn btn-primary">Сохранить</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

@endsection
