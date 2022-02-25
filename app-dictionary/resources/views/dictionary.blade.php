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
<form action="/dictionary" method="post">
    @csrf
    <input type="text" placeholder="Nhập từ khóa" name="newWord">
    <button>Search</button>
</form>
<?php
if(isset($abv)) {
    echo "result: ".$abv;
}else if(isset($none)) {
    echo "result: ".$none;
}else if(isset($nono)){
    echo "result: ".$nono;
}
?>
</body>
</html>
