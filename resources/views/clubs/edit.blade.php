@extends('layouts.app')

@section('title| Edit club')

@section('menu')
    <div class="col-md-3">
        @include('includes.menu')
    </div>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Редактировать спортивный клуб
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="{{ route('clubs.update',['id' => $club->id]) }}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="name">Имя</label>
                    <div class="col-md-9">
                        <input type="text" name="name" class="form-control" value="{{ $club->name }}">
                        @if ($errors->has('name'))
                            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('country_id') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="rules">Страна</label>
                    <div class="col-md-9">
                        <select name="country_id" class="form-control">
                            @foreach(\App\Countries::all() as $country)
                                <option {{ ($club->country->id == $country->id) ? 'selected' : '' }} value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('country_id'))
                            <span class="help-block"><strong>{{ $errors->first('country_id') }}</strong></span>
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
