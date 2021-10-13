<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Document</title>
    <style>
        .vertical-menu{
            position: sticky;
            top:0;
            background-color: #04AA6D;
        }
        .vertical-menu a{
            display: block;
        }
        
    </style>
</head>
<body>
    <div class='row'>
    <div class="col-9">
        <nav class="navbar navbar-expand-sm">
          <!-- Brand/logo -->
          <img src="{{asset('image/logo.jpg')}}" width="125px">
          
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item pr-5">
              <a class="nav-link" href="#">Hoa don</a>
            </li>
            <li class="nav-item pr-5">
              <a class="nav-link" href="#">San Pham</a>
            </li>
            <li class="nav-item pr-5">
              <a class="nav-link" href="/chat_admin">Chat</a>
            </li>
          </ul>
          
        </nav>
      </div>
    </div>
    
    <div>
        
        <table style='width: 90%;' border="soild" >
        @foreach($invoices as $invoice)
            <tr>
                <th>
                    {{$invoice -> id}}
                </th>
                <th>
                    {{$invoice -> name_customer}}
                </th>
                <th>
                    {{$invoice ->address}}
                </th>
                <th>
                    {{$invoice ->phone_number}}
                </th>
                <th>
                    {{$invoice ->date_create_at}}
                </th>
                <th><a href="/get_detail_invoice/{{$invoice -> id}}">Xem chi tiet</a></th>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>