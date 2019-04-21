@extends('layouts.app')

@section('content')
    <a class="btn btn-secondary" href="/">Go back</a>
    <h1><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h1>
    <div class="badge badge-danger">{{$todo->due}}</div>
    <p>{{ $todo->body }}</p>
    <hr>
@endsection