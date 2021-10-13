<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <!-- Brand/logo -->
        <img src="logo.jpg" width="125px">
        
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item pr-5">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item pr-5">
            <a class="nav-link" href="#">Product</a>
          </li>
          <li class="nav-item pr-5">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item pr-5">
            <a class="nav-link" href="#">Contract</a>
          </li>
          <li class="nav-item pr-5">
            <a class="nav-link" href="#">Account</a>
          </li>
        </ul>
    </nav>

    <div class="row">
        <div class="col-2">
          <div class="vertical-menu">
            <a href="#">Thịt</a>
            <a href="#">Rau</a>
            <a href="#">Sữa</a>
            <a href="#">Gia vị</a>
          </div>  
        </div>
        
        <div class="col-2">
            <h1 class="text-center mt-5">Mang thức ăn từ trang trại đến bàn ăn của bạn</h1>
        </div>
        <div class="col-2">
            <img src="food.jpg" >
        </div>
      </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-2">
                <img src="ca_rot.png" width="200px">
            </div>
            <div class="col-7 ml-5">
                <h3>Cà rốt</h3>
                <p>Giá:15.000</p>
                <p>Tình trạng: Còn hàng</p>
                <h4>Số lượng:</h4>
                <input type="text" class="form_control" value="1" min="1" maxlength="10">
                <button type="button" class="btn btn-primary">Giỏ hàng</button>
            </div>
        </div>
        <div class="row">
            <h4>Miêu tả</h4>
        </div>
        <div class="row">
            <div class="col-8">
                <p>Cà rốt Đà Lạt là loại rau củ sạch dồi dào dinh dưỡng, mang lại nhiều lợi ích thần kỳ cho vóc dáng, làn da, giúp bảo vệ cơ thể khỏi một số căn bệnh phiền toái. Tuy tác dụng tuyệt vời là vậy nhưng lại ít người biết phương pháp chế biến 
                    và ăn cà rốt Đà Lạt đúng cách để cơ thể hấp thu hết các dưỡng chất thiết yếu. </p>
            </div>
        </div>
        <div class="row">
            <h2>Sản phẩm liên quan</h2>
        </div>
    </div>
</body>
<footer class="bg-light text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #3b5998;"
          href="#!"
          role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #55acee;"
          href="#!"
          role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #dd4b39;"
          href="#!"
          role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #ac2bac;"
          href="#!"
          role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #0082ca;"
          href="#!"
          role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
        <!-- Github -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #333333;"
          href="#!"
          role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
</html>