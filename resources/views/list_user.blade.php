<h1>List of Users</h1>

<table border='3'>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Age</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}} </td>
            <td>{{$user->name}} </td>
            <td>{{$user->phone}} </td>
            <td> {{$user->email}}</td>
            <td>{{$user->age}}</td>
            <td><a href="edit/{{$user->id}}">Edit</a></td>
            <td><a href="delete/{{$user->id}}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
