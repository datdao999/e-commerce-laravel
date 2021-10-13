<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/create" enctype="multipart/form-data" method="post">
        @csrf
        <label>Tên:</label>
        <input type="text" name="name_product" ><br>
        <label>Giá:</label> 
        <input type="text" name="price" ><br>
        <label>Miêu tả:</label>
        <input type="text" name="description"><br>
        <label>Giảm giá:</label>
        <input type="text" name="discount"><br>
        <label>Hình ảnh:</label>
        <input type="file" name="image"><br>
        <label>Đơn vị:</label>
        <input type="text" name="unit"><br>
        <label>Số lượng</label>
        <input type="text" name="discount"><br>
        <label>Loại thực phẩm:</label>
        <select>
        @foreach($type_products as $type_product)
            <option value="{{$type_product->id}}">{{$type_product->name_type_product}}</option>
        @endforeach
        </select>
        <input type="submit" value="submit">
    </form>
    
</body>
</html>