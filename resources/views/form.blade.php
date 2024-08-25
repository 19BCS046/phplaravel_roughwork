<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Shortener</h1>
@if(Session::has('errors'))
<h3 class="error">{{$errors->first('link')}}</h3>
@endif
@if(Session::has('messagw'))
<h3 class="error">{{Session::get('message')}}</h3>
@endif
@if(Session::has('link'))
<h3 class="error"><a href="{{url(Session::get('link'))}}">{{url(Session::get('link'))}}</a>is your short url</h3>
@endif
    <form action="{{url('/')}}" method="POST">
        <input type="text" name="link"  placeholder="Insert your url and paste">
        @csrf
    </form>

</body>
</html>
