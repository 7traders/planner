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
                <div class="card-header">
                  <h2>Task List</h2>

                    <div class="card-body">
                      <a href="{{route('task.index')}}">Default</a>
                      <a href="{{route('task.index', ['sort' => 'deadline'])}}">Sort by Deadline's Date</a>
                    </div>
                </div>


               <div class="card-body">
                 <ul class="list-group">

                  {{-- @foreach ($tasks as $task) --}}
                    {{-- <a href="{{route('task.edit',[$task])}}">{{$task->task_name}} {{$task->task_description}} {{$task->deadline}} {{$task->taskStatus->status_name}}</a> --}}
                    {{-- <form method="POST" action="{{route('task.destroy', [$task])}}"> --}}
                    {{-- @csrf
                    <button type="submit" class="btn btn-danger">DELETE</button> --}}
                    {{-- </form> --}}
                    {{-- <br>
                  @endforeach --}}


                  @foreach ($tasks as $task)
                 <li class="list-group-item list-line">
                        <div class="list-line__tasks">
                          <div class="list-line__tasks__name">
                            {{$task->task_name}}
                          </div>
                          <div class="list-line__tasks__description">
                            Description: {{$task->task_description}}
                          </div>
                          <div class="list-line__tasks__deadline">
                            Status: {{$task->taskStatus->status_name}}
                          </div>
                          <div class="list-line__tasks__name">
                            Deadline: {{$task->deadline}}
                          </div>
                        </div>
                        <div class="list-line__buttons">
                          <a href="{{route('task.edit',[$task])}}" class="btn btn-primary">EDIT</a>
                          <form method="POST" action="{{route('task.destroy', [$task])}}">
                            @csrf
                            <button type="submit" class="btn btn-danger">DELETE</button>
                          </form>
                        </div>
                        <br>
                  </li>
                  @endforeach


                  </ul>
               </div>

           </div>
       </div>
   </div>
</div>
@endsection
