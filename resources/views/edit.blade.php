<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit page</title>
</head>
<body>
    <form action="/edit/{{$intern[0]->id}}" method="POST">
        @csrf
      <input value='{{$intern[0]->name}}' name="name" type="text"/>

      <input type="submit" value="update">

    </form>

</body>
</html>
