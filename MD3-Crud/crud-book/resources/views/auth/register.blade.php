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
<form action="{{route('register')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhập tên">
    <input type="email" name="email" placeholder="Nhập email">
    <input type="password" name="password" placeholder="Nhập password">
    <input type="password" name="confirmPassword" placeholder="Nhập lại password">
    @if(\Illuminate\Support\Facades\Session::has('message'))
        <p style="color:red;">{{\Illuminate\Support\Facades\Session::get('message')}}</p>
    @endif
    <button>Register</button>
</form>
</body>
</html>
