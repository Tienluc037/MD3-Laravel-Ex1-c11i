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
<form action="/discount" method="post">
    @csrf
    <h1>Product Discount Calculator</h1>
    <table>
        <tr>
            <td>Mô tả sản phẩm:</td>
            <td><textarea name="detail"></textarea></td>
        </tr>
        <tr>
            <td> List Proce:</td>
            <td> <input type="number" name="price" placeholder="Giá niêm yết sản phẩm"></td>
        </tr>
        <tr>
            <td>  Discount Percent: </td>
            <td>  <input type="number" name="discount"  placeholder="Tỷ lệ chiết khấu %"></td>
        </tr>
        <tr>
            <td><button>Submit</button></td>
        </tr>

    </table>
</form>
</body>
</html>
