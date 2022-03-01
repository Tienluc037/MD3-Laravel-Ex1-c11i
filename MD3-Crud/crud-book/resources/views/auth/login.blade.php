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
 @if(\Illuminate\Support\Facades\Session::has('mgs'))
     <h4 style="color: red">{{\Illuminate\Support\Facades\Session::get('mgs')}}</h4>
 @endif
<form action="{{route('login')}}" method="post">
    @csrf
    <input type="text" name="email" placeholder="Nhập email">
    <input type="password" name="password" placeholder="Nhập password">
    <button>Login</button>
</form>
</body>
</html>
