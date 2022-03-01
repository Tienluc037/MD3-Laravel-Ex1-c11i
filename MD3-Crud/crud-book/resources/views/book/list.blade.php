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
<a href="{{route('logout')}}">Logout</a>
<a href="{{route('showFormCreate')}}">Create</a>
<table border="3px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th colspan="3" style="text-align: center">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
    <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->content}}</td>
        <td><a href="{{route('book.detail',$book->id)}}">Detail</a></td>
        <td><a onclick="return confirm('Bạn có muốn xóa?')" href="{{route('book.delete',$book->id)}}">Delete</a></td>
        <td><a href="{{route('book.edit',$book->id)}}">Update</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
