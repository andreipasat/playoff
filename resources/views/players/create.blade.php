@extends('layouts.app')

@section('title| Create player')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create player
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="{{ route('players.post.create') }}">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="name">Name</label>
                    <div class="col-md-9">
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('sex') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="name">Sex</label>
                    <div class="col-md-9">
                        <input type="radio" checked name="sex" value="m"> Man
                        <input type="radio" name="sex" value="w"> Woman
                        @if ($errors->has('sex'))
                            <span class="help-block"><strong>{{ $errors->first('sex') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('birthday') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="birthday">Birthday</label>
                    <div class="col-md-9">
                        <input type="text" data-date-format="dd/mm/yyyy" data-provide="datepicker" class="datepicker form-control" name="birthday" value="{{ old('birthday') }}">
                        @if ($errors->has('birthday'))
                            <span class="help-block"><strong>{{ $errors->first('birthday') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('weight') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="weight">Weight</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="weight" value="{{ old('weight') }}">
                        @if ($errors->has('weight'))
                            <span class="help-block"><strong>{{ $errors->first('weight') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('club_id') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="club_id">Club</label>
                    <div class="col-md-9">
                        <select name="club_id" class="form-control">
                            @foreach(\App\Clubs::all() as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('club_id'))
                            <span class="help-block"><strong>{{ $errors->first('club_id') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('coach') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="coach">Coach</label>
                    <div class="col-md-9">
                        <input type="text" name="coach" class="form-control" value="{{ old('coach') }}">
                        @if ($errors->has('coach'))
                            <span class="help-block"><strong>{{ $errors->first('coach') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('wins') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="wins">Wins</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="{{ old('wins') }}">
                        @if ($errors->has('wins'))
                            <span class="help-block"><strong>{{ $errors->first('wins') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('loses') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="loses">Loses</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="{{ old('loses') }}">
                        @if ($errors->has('loses'))
                            <span class="help-block"><strong>{{ $errors->first('loses') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('equality') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="equality">Equality</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="{{ old('equality') }}">
                        @if ($errors->has('equality'))
                            <span class="help-block"><strong>{{ $errors->first('equality') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <button class="btn btn-primary">Save</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

@endsection