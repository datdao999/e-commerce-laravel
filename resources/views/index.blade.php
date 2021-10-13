<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoreFood</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
    
<body>
  <div class="header">
    <div class="row">
      <div class="col-9">
        <nav class="navbar navbar-expand-sm">
          <!-- Brand/logo -->
          <img src="{{asset('image/logo.jpg')}}" width="125px">
          
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
          <form class="form-inline" action="/search" method = 'GET'>
            <input class="form-control mr-sm-2" type="text" placeholder="Search" name = "search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </nav>
      </div>
      <div class="col-1">
        <div class="nav-right">
          <div class="cart-icon">
            <a class="fas fa-shopping-cart"></a>
          </div>
          <div class="cart-hover">
            <div class="select-items" id="change-item-cart">
                
            </div>
            
        </div>
        </div>
        <!-- <ul class="nav-right" >
          <li class="heart-icon"><a href="#">
                  <i class="fas fa-shopping-cart"></i>
          </li>
        </ul> -->
      </div>
    </div>
  </div>
 
  <div class="row">
    @yield('type_product')
    <div class="col-2">
        <h1 class="text-center mt-5">Mang thức ăn từ trang trại đến bàn ăn của bạn</h1>
    </div>
    <div class="col-2">
        <img src="{{asset('image/food.jpg')}}" >
    </div>
  </div>
    
  <!-- feature product -->
  <div class="container mt-5">
    <h1>Chào mừng đến với của hàng</h1>
    <p>Thực phẩm do chính S-Foods sản xuất đảm bảo chất lượng và uy tín. 
      Với kỹ năng và kinh nghiệm nhiều năm chúng tôi đảm bảo chất lượng một cách tuyệt đối. 
      S-Foods với hệ thống trải dài toàn quốc có thể giao và nhận hàng rất nhanh. 
      Hãy đến với chúng tôi với sản phẩm hấp dẫn, uy tín và chất lượng.</p>
      
      @yield('product')
      @yield('search')
  </div>

  <button class="open-button" onclick="openForm()">Chat</button>
  <div class="chat-popup" id="myForm">
    <div id='show_message'>

    </div>
    
    <form class="form-container">
      @csrf
      <h1>Chat</h1>
      
      <label for="msg"><b>Message</b></label>
      <input type='text' name='message' id='message'>

      <button type="submit" class="btn">Send</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  function addCart(id){
    $.ajax({
      url:'/add-cart/'+id,
      type:'GET',
    }).done(function(response){
      $('#select-items').empty()
      $('#change-item-cart').html(response)
    });
  }

  $('#change-item-cart').on("click", ".si-close i", function(){
    console.log($(this).data('id'))

    $.ajax({
      url:'/delete-item-cart/'+$(this).data('id'),
      type:'GET',
    }).done(function(response){
      $('#select-items').empty()
      $('#change-item-cart').html(response)
    });
  });

  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
    $(document).on('submit', '#myForm', function(e){
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: '/chat',
        data: {
          message:$('#message').val(),
          user:'guest',
          // csrfmiddlewaretoken:$('input[name=csrfmiddlewaretoken]').val(),
        },
        
      }).done(function(response){
        $("#show_message").append(response)
      });
      document.getElementById('message').value = ""
    });
  
</script> 
</html>