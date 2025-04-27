<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Menu Details</title>
    <base href="/public">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('home/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('home/images/favicon.ico') }}" type="image/x-icon">
  </head>
  <body>

    <!-- Header -->
    <div class="hero_area">
      @include('home.header')
  <!-- Menu Detail Section -->
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="menu-wrap d-flex align-items-center p-3 border rounded shadow-sm" style="gap: 20px; background-color:white;">
          <div class="img-box" style="flex: 1;">
            <img src="{{ asset('menu/'.$menu->image) }}" alt="{{ $menu->title }}" class="img-fluid rounded" style="max-height: 150px; object-fit: cover;">
          </div>
          <div class="text" style="flex: 2;">
            <h3 class="font-weight-bold text-dark">{{ $menu->title }}</h3>
            <div class="text-center">
                @if($menu->discount_price != null)
<h5 style="color: red;">Discount Price <br> 
    ৳{{$menu->discount_price}}
</h5>
<h5 style="color: blue; text-decoration: line-through;">Regular Price <br> 
    ৳{{$menu->price}}
</h5>
@else
<h5 style="color: black; font-weight: bold;">
  Regular Price <br>
  ৳{{$menu->price}}
</h5>


@endif
<h5 class="text-dark" style="font-weight: bold;">Menu Category: {{ $menu->category }}</h5>
<h5 class="text-dark" style="font-weight: bold;">Menu Details: {{ $menu->description }}</h5>
<h5 class="text-dark" style="font-weight: bold;">Menu Quantity: {{ $menu->quantity }}</h5>


            </div>
            <div class="text-center mt-4">
              <form action="{{url('add_cart',$menu->id)}}" method="Post">
                @csrf
                <div class="row">
                  <div class="col-md-4" style="margin-right: 15px;">
                    <input type="number" name="quantity" value="1" min="1" style="width: 100px">
                  </div>

                  <div class="col-md-4">
                    <input type="submit" value="Add to cart" class="btn btn-outline-primary font-weight-bold" style="color: black; border-color: #0d6efd; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                  </div>
                </div>
              </form>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



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

      <!-- Loader -->
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
    </div>
  </body>
</html>
