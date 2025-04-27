<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us - Friends Zone</title>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>

  <body>
    @include('home.header')

    <section class="ftco-appointment">
      <div class="overlay"></div>
      <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
          <div class="col-md-6 appointment ftco-animate">
            <h3 class="mb-3">Contact Us</h3>

            @if(session('message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
              </div>
            @endif

            @if ($errors->any())
              <div class="alert alert-danger">
                <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <form action="{{ url('/contact-submit') }}" method="POST" class="appointment-form">
              @csrf

              @auth
                <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                <input type="hidden" name="email" value="{{ Auth::user()->email }}">
              @endauth

             

              <div class="form-group">
                <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Your Message" required></textarea>
              </div>

              <div class="form-group">
                <input type="submit" value="Send" class="btn btn-primary py-3 px-4">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section img">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script>
              All rights reserved | Made with <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Puspita Helal</a>
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
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
