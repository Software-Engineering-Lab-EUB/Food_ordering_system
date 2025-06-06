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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
	
    
  </head>
  <body>
  @include('home.header')
  @include('home.slider')
  
 
  


    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>01766579850</h3>
	    						<p>Healthy food refers to food that contains the right amount of nutrients to keep our body fit</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>Charabag, Ashulia</h3>
                             <p>Savar,Bangladesh</p>

	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Saturday-Wednesday</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
			<h2 class="mb-4">Welcome to <span class="bold-text">Friends Zone</span></h2>


			
        </div>
        <div>
			<p><strong>Why Healthy Food Matters:</strong>
				<br><br>
				<strong>Nutrient-Rich:</strong> Healthy food provides essential nutrients, vitamins, and minerals that our bodies need to function properly, support growth, and maintain good health. 
				<br><br>
				<strong>Disease Prevention:</strong> A balanced diet can help reduce the risk of chronic diseases like heart disease, type 2 diabetes, and some cancers. 
				<br><br>
				<strong>Energy and Vitality:</strong> Healthy foods provide sustained energy levels, boosting physical and mental performance. 
				<br><br>
				<strong>Improved Mood and Well-being:</strong> Eating a variety of nutritious foods can positively impact mood, reduce stress, and improve overall well-being.
			</p>
			
  			</div>
    	</div>
    </section>

	
    

<!---Price--->



<!---End price-->


@include('home.menu')

{{-- <div class="container mt-5">
    <h2 class="text-center">Comments</h2>
    <form action="{{ url('add_comment') }}" method="POST">
        @csrf
        <textarea name="comment" class="form-control mb-3" placeholder="Write your comment here" required></textarea>
        <input type="submit" class="btn btn-primary" value="Comment">
    </form>

    <h3 class="mt-5">All Comments</h3>
    @foreach ($comment as $comment)
        <div class="mb-3">
            <b>{{ $comment->name }}</b>
            <p>{{ $comment->comment }}</p>
            <a href="javascript:void(0);" class="text-primary" onclick="showReplyForm(this)">Reply</a>
        </div>
    @endforeach

    <div class="replyDiv d-none" style="text-align: center;">
        <form>
            <textarea class="form-control mb-2" placeholder="Write something here"></textarea>
            <a href="#" class="btn btn-primary">Reply</a>
        </form>
    </div>
  </div>

  <script>
    function showReplyForm(link) {
      const replyDiv = document.querySelector('.replyDiv');
      replyDiv.classList.toggle('d-none');
      link.after(replyDiv);
    }
  </script>




Comment and reply system ends here --}}

<section class="ftco-section ftco-services">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Our Services</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
            <span class="flaticon-diet"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Healthy Foods</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
            <span class="flaticon-bicycle"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Fastest Delivery</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
          <div class="media-body">
            <h3 class="heading">Original Recipes</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>    
      </div>
    </div>
  </div>
</section>



<!---Photo gallery-->
	<section class="ftco-gallery">
		<div class="flex justify-center">
			<h2 class="mb-4 text-center font-bold text-4xl capitalize">OUR PHOTO GALLERY</h2>
		  </div>
		  
		  
		<div class="container-wrap">
		  <div class="row no-gutters">
			<div class="col-md-3 ftco-animate">
				
					
				
				  

			  <a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
				<div class="icon mb-4 d-flex align-items-center justify-content-center">
				  <span class="icon-search"></span>
				</div>
			  </a>
			</div>
			<div class="col-md-3 ftco-animate">
			  <a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
				<div class="icon mb-4 d-flex align-items-center justify-content-center">
				  <span class="icon-search"></span>
				</div>
			  </a>
			</div>
			<div class="col-md-3 ftco-animate">
			  <a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
				<div class="icon mb-4 d-flex align-items-center justify-content-center">
				  <span class="icon-search"></span>
				</div>
			  </a>
			</div>
			<div class="col-md-3 ftco-animate">
			  <a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
				<div class="icon mb-4 d-flex align-items-center justify-content-center">
				  <span class="icon-search"></span>
				</div>
			  </a>
			</div>
		  </div>
		</div>
	  </section>
	  

		<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-pizza-1"></span></div>
		              	<strong class="number" data-number="15">0</strong>
		              	<span> Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-medal"></span></div>
		              	<strong class="number" data-number="8">0</strong>
		              	<span>Number of Awards</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-laugh"></span></div>
		              	<strong class="number" data-number="250">0</strong>
		              	<span>Happy Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-chef"></span></div>
		              	<strong class="number" data-number="80">0</strong>
		              	<span>Staff</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
		<div class="container">
		  <div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
			  <h2 class="mb-4" style="color: black; font-weight: bold;">Recent from blog</h2>
			  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		  </div>
		  <div class="row d-flex">
			<div class="col-md-4 d-flex ftco-animate">
			  <div class="blog-entry align-self-stretch">
				<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
				</a>
				<div class="text py-4 d-block">
				  <div class="meta">
					<div><a href="#">April 5,2025</a></div>
					<div><a href="#">Admin</a></div>
					<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
				  </div>
				  <h3 class="heading mt-2"><a href="#" style="color: black; font-weight: bold;">The Delicious Pizza</a></h3>
				  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
				</div>
			  </div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
			  <div class="blog-entry align-self-stretch">
				<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
				</a>
				<div class="text py-4 d-block">
				  <div class="meta">
					<div><a href="#">April 5,2025</a></div>
					<div><a href="#">Admin</a></div>
					<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
				  </div>
				  <h3 class="heading mt-2"><a href="#" style="color: black; font-weight: bold;">The Delicious Pizza</a></h3>
				  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
				</div>
			  </div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
			  <div class="blog-entry align-self-stretch">
				<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
				</a>
				<div class="text py-4 d-block">
				  <div class="meta">
					<div><a href="#">April 5,2025</a></div>
					<div><a href="#">Admin</a></div>
					<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
				  </div>
				  <h3 class="heading mt-2"><a href="#" style="color: black; font-weight: bold;">The Delicious Pizza</a></h3>
				  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
	  

    

		
		<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<div id="map"></div>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Contact Us</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name">
		    				</div>
	    				</div>
	    				<div class="d-me-flex">
	    					<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Last Name">
		    				</div>
	    				</div>
	    				<div class="form-group">
	              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
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
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> April 5,2025</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span>April 5,2025</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Cooked</a></li>
                <li><a href="#" class="py-2 d-block">Deliver</a></li>
                <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
                <li><a href="#" class="py-2 d-block">Mixed</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Ashulia,Savar,Dhaka</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">01766579850</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">puspita@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Puspita Helal</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

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