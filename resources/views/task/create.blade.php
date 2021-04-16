<form method="POST" action="{{route('task.store')}}">
   Task Name: <input type="text" name="task_name">
   Task Description: <textarea name="task_description"></textarea>
   <select name="status_id">
       @foreach ($statuses as $status)
           <option value="{{$status->id}}">{{$status->status_name}} </option>
       @endforeach
   </select>
   @csrf
   <button type="submit">ADD</button>
</form>
