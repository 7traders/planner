@foreach ($tasks as $task)
  <a href="{{route('task.edit',[$task])}}">{{$task->task_name}} {{$task->task_description}} {{$task->add_date}} {{$task->completed_date}} {{$task->taskStatus->status_name}}</a>
  <form method="POST" action="{{route('task.destroy', [$task])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach



