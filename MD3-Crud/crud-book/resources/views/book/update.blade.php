<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('book.update',$book->id)}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="title" value="{{$book->title}}">
    <input type="text" name="content" placeholder="content" value="{{$book->content}}">
    <button>Update</button>
</form>
</body>
</html>
