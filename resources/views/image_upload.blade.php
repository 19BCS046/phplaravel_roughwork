<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Image uploader</h1>
    <form method="POST" enctype="multipart/form-data" action="/">
        @csrf
        <input type="file" name="image" class="form-control">
        <button type="submit">Upload</button>

        @if (count($errors) > 0)
            <h2>Whoops! There are some problems</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        @if ($message = session('success'))
            <strong>{{ $message }}</strong>
            <img src="{{ ('image/' . session('imageName')) }}" width="300" height="200" alt="">
        @endif
    </form>


</body>
</html>
