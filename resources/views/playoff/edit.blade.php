@extends('layouts.app')

@section('title','Edit playoff')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit playoff  - {{ $playOff->sex }} - {{ $playOff->rule->name }}
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="{{ route('playoff.post.update',['id' => $playOff->competition_id,'pl' => $playOff->id]) }}">
                {{ csrf_field() }}

                <div class="form-group {{ $errors->has('sex') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="name">Select sex</label>
                    <div class="col-md-9">
                        <input type="radio" checked name="sex" value="m"> Man
                        <input type="radio" name="sex" value="w"> Woman
                        @if ($errors->has('sex'))
                            <span class="help-block"><strong>{{ $errors->first('sex') }}</strong></span>
                        @endif
                    </div>
                </div>


                <div class="form-group {{ $errors->has('rule') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="rule">Select rule</label>
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
                    <div class="col-md-12">
                        <button class="btn btn-primary">Save</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

@endsection