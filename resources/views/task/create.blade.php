{{-- <form method="POST" action="{{route('task.store')}}">
   Task Name: <input type="text" name="task_name">
   Task Description: <textarea name="task_description"></textarea>
   Deadline: <input type="date" name="deadline">
   <select name="status_id">
       @foreach ($statuses as $status)
           <option value="{{$status->id}}">{{$status->status_name}} </option>
       @endforeach
   </select>
   @csrf
   <button type="submit">ADD</button>
</form> --}}

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Create New Task</div>

               <div class="card-body">


                    <form method="POST" action="{{route('task.store')}}">
                        {{-- Task Name: <input type="text" name="task_name"> --}}
                        <div class="form-group">
                            <label>Task Name: </label>
                            <input type="text" class="form-control" name="task_name">
                            <small class="form-text text-muted">Enter Task Name</small>
                        </div>

                        {{-- Task Description: <textarea name="task_description"></textarea> --}}
                        <div class="form-group">
                                <label>Task Description: </label>
                                <textarea name="task_description" id="summernote"></textarea>
                                <small class="form-text text-muted">Enter Task Description</small>
                        </div>

                        {{-- Deadline: <input type="date" name="deadline"> --}}
                        <div class="form-group">
                            <label>Deadline: </label>
                            <input type="date" class="form-control" name="deadline">
                            <small class="form-text text-muted">Enter Task's Deadline</small>
                        </div>

                        {{-- <select name="status_id"> --}}
                        <div class="form-group">
                            <label>Status: </label>
                            <select name="status_id">
                                @foreach ($statuses as $status)
                                    <option value="{{$status->id}}">{{$status->status_name}} </option>
                                        {{$status->status_name}}
                                    </option>                        
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Select Status</small>
                        </div>



                        @csrf
                        <button type="submit" class="btn btn-success">ADD</button>
                    </form>


               </div>
           </div>
       </div>
   </div>
</div>
<script>
$(document).ready(function() {
   $('#summernote').summernote();
 });
</script>
@endsection