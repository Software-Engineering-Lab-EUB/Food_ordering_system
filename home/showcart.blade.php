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
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
      
        body, html {
          height: 100%;
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          background-color: #f8f9fa;
        }
      
        .wrapper {
          min-height: 100%;
          display: flex;
          flex-direction: column;
        }
      
        .content {
          flex: 1;
          display: flex;
          justify-content: center;
          align-items: center;
          padding: 40px 20px;
        }
      
        table {
          width: 60%;
          border-collapse: collapse;
          background-color: #ffffff;
          box-shadow: 0 4px 12px rgba(0,0,0,0.1);
          border-radius: 10px;
          overflow: hidden;
        }
      
        th, td {
          padding: 16px 20px;
          text-align: left;
          vertical-align: middle;
        }
      
        th {
          background-color: #343a40;
          color: lightblue;
          width: 30%;
          font-weight: bold;
        }
      
        td {
          background-color: #58a2d6;
          color: #000;
        }
      
        tr:not(:last-child) td, 
        tr:not(:last-child) th {
          border-bottom: 1px solid #1d64ab;
        }
      
        .img_deg {
          width: 80px;
          height: 80px;
          object-fit: cover;
          border-radius: 5px;
        }
      
        .remove-btn {
          color: #dc3545;
          text-decoration: none;
          font-weight: bold;
          transition: color 0.3s ease;
        }
      
        .remove-btn:hover {
          color: #bd2130;
        }
      
        footer {
          background-color: #333;
          color: #fff;
          padding: 20px 0;
          text-align: center;
        }
      </style>
      
      
      
  </head>

  <body>
    @include('home.header')

    <!-- Spacing between header and footer -->
<div class="wrapper">
  <div class="content">
    @if(session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
            </div>
            @endif
            
      @php $totalprice = 0; @endphp

      <table>
          <tr>
              <th>Menu Title</th>
              <th>Quantity</th>
              <th>Price (৳)</th>
              <th>Image</th>
              <th>Action</th>
          </tr>

          @foreach ($cart as $item)
              <tr>
                  <td>{{ $item->menu_title }}</td>
                  <td>{{ $item->quantity }}</td>
                  <td>{{ $item->price }}</td>
                  <td><img class="img_deg" src="/menu/{{ $item->image }}" alt="Menu Image"></td>
                  <td>
                    <a class="btn btn-danger"  onclick="return confirm('Are you sure to remove this?') "href="{{ url('/remove_cart', $item->id) }}">Remove</a>
                </td>
                
                  
              
                  
              </tr>
              @php $totalprice += $item->price; @endphp
          @endforeach
      </table>
  </div>

  <!-- Add this inside <head> if not already included -->


       <!-- Then this will work -->
<div style="position: relative; top: 30px; text-align: center; margin-bottom: 20px;">
  <h1 style="font-size: 20px; font-weight: bold; color: black; display: inline-block;">Proceed To Order</h1>
</div>

<div class="d-flex gap-3 mt-3 justify-content-center">
  <a href="{{url('cash_order')}}" class="btn btn-success">Cash On Delivery</a>
  <a href="{{ url('stripe', $totalprice) }}" class="btn btn-primary">Pay Using Card</a>

</div>


     
    
  </div>
</div>
<div style="position: relative; top: -90px; text-align: center;">
  <h1 style="font-weight: bold; color: black; display: inline-block;">Total Price: ৳{{ $totalprice }}</h1>
</div>





    
    
    
    
    
    <!-- Adds vertical margin (you can change my-5 to my-4 or my-3 if needed) -->

   

    <!-- Footer -->
    <footer class="ftco-footer ftco-section img" style="background-color: #333;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 text-white">Have a Question?</h2>
              <ul class="list-unstyled">
                <li><span class="icon icon-map-marker text-white"></span><span class="text-white">Ashulia, Savar, Dhaka</span></li>
                <li><a href="tel:01766579850"><span class="icon icon-phone text-white"></span><span class="text-white">01766579850</span></a></li>
                <li><a href="mailto:puspita@gmail.com"><span class="icon icon-envelope text-white"></span><span class="text-white">puspita@gmail.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="text-white">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-white">Puspita Helal</a></p>
        </div>
      </div>
    </footer>
    
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
      </svg>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('home/js/jquery.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('home/js/popper.min.js') }}"></script>
    <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('home/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('home/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('home/js/aos.js') }}"></script>
    <script src="{{ asset('home/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('home/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('home/js/scrollax.min.js') }}"></script>
    <script src="{{ asset('home/js/main.js') }}"></script>
  </body>
</html>
