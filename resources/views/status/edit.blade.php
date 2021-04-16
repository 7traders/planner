<form method="POST" action="{{route('status.update',[$status->id])}}">
   Status Name: <input type="text" name="status_name" value="{{$status->status_name}}">
   @csrf
   <button type="submit">EDIT</button>
</form>
