@extends('layout')
@section('title', 'Index > TODO')

@section('content')
    <h1>Hello Tasks</h1>
    @foreach($tasks as $task)
        @if($task->completed == 1)
            <span class="glyphicon glyphicon-check "></span>
         @else
            <span class="glyphicon glyphicon-pencil"></span>
         @endif
    {{$task->task}}<br>
     {{--takes two parameters (see route list); (tasks.destroy , $task->id--}}
     <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
         {{method_field('DELETE')}}
         {{csrf_field()}}
         <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Delete</button>
     </form>
    @endforeach
@endsection
