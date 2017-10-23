@extends('layouts.app')

@section('title','Create playoff')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
             Create playoff for competition - {{ $competition->name }}
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="{{ route('playoff.post.create',['id' => $competition->id]) }}">
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


                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="name">Select rule</label>
                    <div class="col-md-9">
                        <select name="rule" class="form-control">
                            @foreach($competition->rules as $rule)
                                <option value="{{ $rule->id }}">{{ $rule->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('name'))
                            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
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