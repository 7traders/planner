{{-- <form method="POST" action="{{route('status.store')}}">
   Status Name: <input type="text" name="status_name">
   @csrf
   <button type="submit">ADD</button>
</form> --}}

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Create New Status</div>

               <div class="card-body">


                  <form method="POST" action="{{route('status.store')}}">
                     {{-- Status Name: <input type="text" name="status_name"> --}}
                     <div class="form-group">
                        <label>Status Name: </label>
                        <input type="text" class="form-control" name="status_name">
                        <small class="form-text text-muted">Enter Status Name</small>
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