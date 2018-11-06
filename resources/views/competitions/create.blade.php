@extends('layouts.app')

@section('title| Create competition')
@section('menu')
    <div class="col-md-3">
        @include('includes.menu')
    </div>
@endsection


@section('content')

        <div class="panel panel-default">
            <div class="panel-heading">
                Создать соревнования
            </div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" action="{{ route('competitions.post.create') }}">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label class="control-label col-md-3" for="name">Имя</label>
                        <div class="col-md-9">
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('rules') ? 'has-error' : '' }}">
                        <label class="control-label col-md-3" for="rules">Правила</label>
                        <div class="col-md-9">
                          @foreach(\App\Rules::where('art_id',1)->get() as $rule)
                              <input type="checkbox" name="rules[]" value="{{ $rule->id }}"> {{ $rule->name }} <br>
                            @endforeach
                          @if ($errors->has('rules'))
                              <span class="help-block"><strong>You must chose minimum one rule</strong></span>
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
