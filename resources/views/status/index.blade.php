{{-- @foreach ($statuses as $status)
  <a href="{{route('status.edit',[$status])}}">{{$status->status_name}} </a>
  <form method="POST" action="{{route('status.destroy', [$status])}}">
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
               <div class="card-header">Status List</div>

               <div class="card-body">


                  @foreach ($statuses as $status)
                    <a href="{{route('status.edit',[$status])}}">{{$status->status_name}} </a>
                    <form method="POST" action="{{route('status.destroy', [$status])}}">
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