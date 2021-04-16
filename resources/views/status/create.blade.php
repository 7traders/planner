<form method="POST" action="{{route('status.store')}}">
   Name: <input type="text" name="status_name">
   @csrf
   <button type="submit">ADD</button>
</form>
