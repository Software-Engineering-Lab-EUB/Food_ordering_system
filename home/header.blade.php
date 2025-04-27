<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- Include Font Awesome for the search icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Ensure the search icon appears in the correct position */
    .navbar .navbar-nav {
      display: flex;
      align-items: center;
    }
    .navbar .nav-item .btn {
      display: flex;
      align-items: center;
      padding: 0; /* Remove padding around the button */
      background: none; /* Remove button background */
      border: black; /* Remove button border */
    }
    .navbar .nav-item .form-inline {
      margin-bottom: 0;
    }
    .navbar .nav-item button i {
      vertical-align: middle;
      color: #f8f9fa; /* Icon color (light) */
      font-size: 14px; /* Smaller icon size */
    }
    /* Remove focus/active styles */
    .navbar .nav-item button:focus, 
    .navbar .nav-item button:active {
      outline: none; /* Remove focus outline */
      background: none; /* Remove background color */
      color: #f8f9fa; /* Keep the icon color as white */
      box-shadow: none; /* Remove box-shadow */
    }
    /* Adjust the position of the search bar */
    .navbar .nav-item.search-item {
      margin-left: auto; /* This will push the search bar to the far right */
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="logo.png" alt="Food Corner Logo" style="height: 40px;"/>
        <strong>Friends</strong><br>  <small style="font-size: 15px; color: yellow;">Zone</small>
      </a>
        
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-2"><a href="{{url('/')}}" class="nav-link">Home</a></li>
          <li class="nav-item mx-2"><a href="{{url('menus')}}" class="nav-link">Menu</a></li>
          <li class="nav-item mx-2"><a href="{{ url('/services') }}" class="nav-link">Services</a></li>
<li class="nav-item mx-2"><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>

          <li class="nav-item mx-2"><a href="{{ url('/about') }}" class="nav-link">About</a></li>
          <li class="nav-item mx-2"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
          

          <li class="nav-item mx-2"><a href="{{url('show_cart')}}" class="nav-link">Cart</a></li>
          <li class="nav-item mx-2"><a href="{{url('show_order')}}" class="nav-link">Order</a></li>


          
          @if (Route::has('login'))
            @auth
              <li class="nav-item">
                <x-app-layout>
                </x-app-layout>
              <!-- Logout form to ensure proper logout -->
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            @else
              <li class="nav-item"><a href="{{ route('login') }}" class="nav-link" style="margin-right: 10px;">Login</a></li>
              <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
            @endauth
          @endif

        
        
        


        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
</body>
</html>
