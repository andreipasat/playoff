@extends('layouts.app')

@section('title| Manage competition')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Manage competition - {{ $competition->name }}
        </div>
        <div class="panel-body">
            <a href="{{ route('playoff.create',['id' => $competition->id]) }}" class="btn btn-primary">Create playoff</a>

            @if (!empty($competition->playoffs))
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Sex</th>
                    <th>Rule</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($competition->playoffs as $playoff)
                        <tr>
                            <td>{{ $playoff->id }}</td>
                            <td>{{ $playoff->sex }}</td>
                            <td>{{ $playoff->rule->name }}</td>
                            <td>
                                <a href="{{ route('playoff.edit',['id' => $competition->id,'pl' => $playoff->id]) }}" class="btn-sm btn-primary">Edit</a>
                                <a href="{{ route('playoff.delete',['id' => $competition->id,'pl' => $playoff->id]) }}" class="btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            @endif
        </div>



    </div>

@endsection