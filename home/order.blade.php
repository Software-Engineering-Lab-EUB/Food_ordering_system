<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="home/fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="home/fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="home/fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
    
    <link rel="stylesheet" href="home/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="home/css/animate.css">
    
    <link rel="stylesheet" href="home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="home/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="home/css/magnific-popup.css">
    
    <link rel="stylesheet" href="home/css/aos.css">
    
    <link rel="stylesheet" href="home/css/ionicons.min.css">
    
    <link rel="stylesheet" href="home/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="home/css/jquery.timepicker.css">
    
    <link rel="stylesheet" href="home/css/flaticon.css">
    <link rel="stylesheet" href="home/css/icomoon.css">
    <link rel="stylesheet" href="home/css/style.css">
	<style>
          .img_deg {
          width: 80px;
          height: 80px;
          object-fit: cover;
          border-radius: 5px;
        }
        </style>
    
  </head>
  <body>
    <div class="hero_area">
  @include('home.header')




  <div style="padding: 20px; background-color:white
  ; ">
    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; text-align: left; color: white; border-color: #444;">
        <thead>
            <tr style="background-color: #7e57c2;">
                <th>Menu Title</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Payment Status</th>
                <th>Delivery Status</th>
                <th>Image</th>
                <th>Cancel Order</th>
            </tr>
        </thead>
        <tbody>

            @foreach($order as $order)
            <tr style="background-color: #4a3d6d; font-weight: bold; color: rgb(243, 229, 229);">
                <td>{{ $order->menu_title }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{$order->price }}</td>
                <td>{{ $order->payment_status }}</td>
                <td>{{ $order->delivery_status }}</td>
                
                    <td><img class="img_deg" src="menu/{{ $order->image }}" ></td>

                    <td>
                        @if($order->delivery_status=='processing')
                        <a onclick="return confirm('are you sure to cancel this order?')" class="btn btn-danger" href="{{url('/cancel_order',$order->id)}}">Cancel order</a>
                    </td>
                    @else
                    <p style="color: rgb(7, 26, 191)"> Not Allowed </p>
                    @endif
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>




    </div>
 
  
 
  


   


    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="home/js/jquery.min.js"></script>
<script src="home/js/jquery-migrate-3.0.1.min.js"></script>
<script src="home/js/popper.min.js"></script>
<script src="home/js/bootstrap.min.js"></script>
<script src="home/js/jquery.easing.1.3.js"></script>
<script src="home/js/jquery.waypoints.min.js"></script>
<script src="home/js/jquery.stellar.min.js"></script>
<script src="home/js/owl.carousel.min.js"></script>
<script src="home/js/jquery.magnific-popup.min.js"></script>
<script src="home/js/aos.js"></script>
<script src="home/js/jquery.animateNumber.min.js"></script>
<script src="home/js/bootstrap-datepicker.js"></script>
<script src="home/js/jquery.timepicker.min.js"></script>
<script src="home/js/scrollax.min.js"></script>
<script src="home/js/main.js"></script>

    
  </body>
</html>