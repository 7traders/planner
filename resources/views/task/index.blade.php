{{-- @foreach ($tasks as $task)
  <a href="{{route('task.edit',[$task])}}">{{$task->task_name}} {{$task->task_description}} {{$task->deadline}} {{$task->taskStatus->status_name}}</a>
  <form method="POST" action="{{route('task.destroy', [$task])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach --}}


@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Task List</div>

               <div class="card-body">


                  @foreach ($tasks as $task)
                    <a href="{{route('task.edit',[$task])}}">{{$task->task_name}} {{$task->task_description}} {{$task->deadline}} {{$task->taskStatus->status_name}}</a>
                    <form method="POST" action="{{route('task.destroy', [$task])}}">
                    @csrf
                    <button type="submit">DELETE</button>
                    </form>
                    <br>
                  @endforeach


               </div>
           </div>
       </div>
   </div>
</div>
@endsection
