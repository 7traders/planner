@foreach ($statuses as $status)
  <a href="{{route('status.edit',[$status])}}">{{$status->status_name}} </a>
  <form method="POST" action="{{route('status.destroy', [$status])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach
