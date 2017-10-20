@extends('layouts.app')

@section('title','Edit competition')

@section('title| Create competition')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit competition - {{ $competition->name }}
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="{{ route('competitions.post.update',['id' => $competition->id]) }}">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="name">Name</label>
                    <div class="col-md-9">
                        <input type="text" name="name" class="form-control" value="{{ $competition->name }}">
                        @if ($errors->has('name'))
                            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                        @endif
                    </div>

                </div>

                <div class="form-group {{ $errors->has('rules') ? 'has-error' : '' }}">
                    <label class="control-label col-md-3" for="rules">Rules</label>
                    <div class="col-md-9">
                        @foreach(\App\Rules::where('art_id',1)->get() as $rule)
                            <input type="checkbox" {{ (in_array($rule->id,$savedRules)) ? 'checked' : '' }} name="rules[]" value="{{ $rule->id }}"> {{ $rule->name }} <br>
                        @endforeach
                        @if ($errors->has('rules'))
                            <span class="help-block"><strong>You must chose minimum one rule</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

@endsection
@endsection