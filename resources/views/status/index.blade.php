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
               <div class="card-header">
               <h2>Status List</h2>

                <div class="card-body">
                    <a href="{{route('status.index')}}">Default</a>
                    <a href="{{route('status.index', ['sort' => 'status_name'])}}">Sort by Name</a>
                  </div>
                </div>

<div class="card-body">
                 <ul class="list-group">


               {{-- <div class="card-body">
                  @foreach ($statuses as $status)
                    <a href="{{route('status.edit',[$status])}}">{{$status->status_name}} </a>
                    <form method="POST" action="{{route('status.destroy', [$status])}}">
                    @csrf
                    <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                    <br>
                  @endforeach
               </div> --}}


                  @foreach ($statuses as $status)
                 <li class="list-group-item list-line">
                        <div class="list-line__tasks">
                          <div class="list-line__tasks__name">
                            {{$status->status_name}}
                          </div>
                        </div>
                        <div class="list-line__buttons">
                          <a href="{{route('status.edit',[$status])}}" class="btn btn-primary">EDIT</a>
                          <form method="POST" action="{{route('status.destroy', [$status])}}">
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