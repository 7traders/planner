<form method="POST" action="{{route('task.update',[$task])}}">
       Task Name: <input type="text" name="task_name" value="{{$task->task_name}}">
       Task Description: <textarea name="task_description">{{$task->task_description}}</textarea>
       Deadline: <input type="date" name="deadline" value="{{$task->deadline}}">
       <select name="status_id">
           @foreach ($statuses as $status)
               <option value="{{$status->id}}" @if($status->id == $task->status_id) selected @endif>
                   {{$status->status_name}}
               </option>
           @endforeach
</select>
       @csrf
       <button type="submit">EDIT</button>
</form>
