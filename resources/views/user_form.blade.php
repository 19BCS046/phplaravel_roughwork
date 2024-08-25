<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User Insert Id</h1>
    <form action="/userform" method="post">
        <input type="text" name="name" placeholder="enter your name">
        <input type="submit" name="submit" value="create userid">
        @csrf

    </form>
    @if ($insert_id=Session::get('insert_id'))
    <p>The userid is {{$insert_id}}</p>
    @endif
    <a href="{{url('useform')}}">Delete the public image</a>
</body>
</html>
