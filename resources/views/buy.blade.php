<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
   <form action="/add-invoice" method="POST">
        @csrf
       <label>Tên khách hàng:</label>
       <input type='text' name="name_customer"><br>
       <label>Địa chỉ:</label>
       <input type="text" name="address"><br>
       <label>SĐT:</label>
       <input type="text" name="phone_number"><br>
       <input type="submit" value="Submit">
   </form>
</body>
</html>