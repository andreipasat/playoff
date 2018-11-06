@extends('layouts.app')

@section('title','Edit playoff')

@section('menu')
    <div class="col-md-3">
        @include('includes.menu')
    </div>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Управлять разделом - {{ $playOff->rule->name }} - {{ config('custom.sex')[$playOff->sex] }}
        </div>
        <div class="panel-body">
            <form id="edit_playoff" class="form-horizontal" method="post" action="{{ route('playoff.post.update',['id' => $playOff->competition_id,'pl' => $playOff->id]) }}">
                {{ csrf_field() }}
                <input type="hidden" name="playoff_id" id="playoff_id" value="{{ $playOff->id }}">

                <div class="form-group {{ $errors->has('sex') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="name">Выберите пол</label>
                    <div class="col-md-9">
                        <input type="radio" checked name="sex" value="m"> Мужчины
                        <input type="radio" name="sex" value="w"> Женщины
                        @if ($errors->has('sex'))
                            <span class="help-block"><strong>{{ $errors->first('sex') }}</strong></span>
                        @endif
                    </div>
                </div>


                <div class="form-group {{ $errors->has('rule') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="rule">Выберите правило</label>
                    <div class="col-md-9">
                        <select name="rule" class="form-control">
                            @foreach($playOff->competition->rules as $rule)
                                <option {{ ($rule->id == $playOff->rule_id) }} value="{{ $rule->id }}">{{ $rule->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('rule'))
                            <span class="help-block"><strong>{{ $errors->first('rule') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="rule">Возраст</label>
                    <div class="col-md-9">
                        <div class="btn-group age_chose list-group" role="group" aria-label="Basic example">
                            <button age="13-14" type="button" class="list-group-item list-group-item-action">Юноши 13-14</button>
                            <button age="15-16" type="button" class="list-group-item list-group-item-action">Юноши 15-16</button>
                            <button age="17-18" type="button" class="list-group-item list-group-item-action">Юниоры 17-18</button>
                            <button age="18-50" type="button" class="list-group-item list-group-item-action">Мужчины</button>
                            <input type="hidden" name="age" id="age" value="{{ $playOff->age_from . '-' . $playOff->age_to }}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="rule">Вес</label>
                    <div class="col-md-9">
                        <div id="kg" class="btn-group" role="group" aria-label="Basic example">

                        </div>
                        <input type="hidden" name="kg_from" id="kg_from" value="{{ $playOff->kg_from }}">
                        <input type="hidden" name="kg_to" id="kg_to" value="{{ $playOff->kg_to }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="rule">Игроки</label>
                    <div class="col-md-9">
                        <div id="players" class="btn-group" role="group" aria-label="Basic example">

                        </div>
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
