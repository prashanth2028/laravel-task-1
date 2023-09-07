<h1>Edit the users</h1>

<form action="{{url('update/'.$user->id)}}" method="POST">
    @csrf
    <label>Name : </label><input name="name" type="text" value="{{$user->name}}"/><br/>
    <label>Phone : </label><input name="phone" type="text" value="{{$user->phone}}"/><br/>
    <label>Email : </label><input name="email" type="text" value="{{$user->email}}"/><br/>
    <label>Age : </label><input name="age" type="number" value="{{$user->age}}"/><br/>
    <input name="submit" type="submit" value="Update"/>

</form>
