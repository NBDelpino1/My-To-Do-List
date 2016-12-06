@extends('layout')
@section('title', 'Index > TODO')

@section('content')
    <h1>Hello Tasks</h1>
    @foreach($tasks as $task)
    {{$task->task}}<br>
    @endforeach
@endsection
{{--test--}}