<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View the list of interns in database</title>
</head>
<body>
    <table border='3'>
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>

        @foreach ($interns as $intern)
        <tr >
            <td>{{$intern->id}}</td>
            <td>{{$intern->name}} </td>
            <td><a href="edit/{{$intern->id}}">Edit</a></td>
            <td><a href="delete/{{$intern->id}}">Delete</a></td>
        </tr>

        @endforeach
    </table>
    <a href="/">go back</a>
    <a href="delete_all">Delete the recordes</a>

</body>
</html>
