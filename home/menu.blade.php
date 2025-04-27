<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Food Menu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .custom-heading {
      text-align: center;
      margin-top: 20px;
      font-size: 2rem;
      font-weight: bold;
    }
    .menu-wrap {
      background: #fff;
      padding: 15px;
      border-radius: 10px;
      box-shadow: black;
      margin-bottom: 30px;
    }
    .menu-img {
      background-size: cover;
      background-position: center;
      border-radius: 10px;
    }
  </style>
</head>
<body>
    <section class="ftco-menu py-5">
        <div class="container">
          <h1 class="custom-heading">FOOD ITEMS</h1>

          <div style="display: flex; justify-content: center; align-items: center; height: 20vh;">
            <div style="text-align: center; padding-bottom: 30px;">
                <form action="{{url('menu_search') }}" method="GET">
                  @csrf
                    <input type="text" style="color: black;" name="search" placeholder="Search something" value="{{ request()->input('search') }}">
                    <input type="submit" value="Search" class="btn btn-outline-primary" />
                </form>
            </div>
        </div>
        
          
          <div class="col-lg-12 ftco-animate p-md-5">
            <div class="row">
              @foreach($menu as $item)
                <div class="col-md-6 mb-4">
                  <div class="menu-wrap d-flex align-items-center p-3 border rounded" style="gap: 20px;">
                    <div class="img-box" style="flex: 1;">
                      <img src="menu/{{$item->image}}" alt="{{$item->title}}" class="img-fluid rounded" style="max-height: 150px; object-fit: cover;">
                    </div>
                    <div class="text" style="flex: 2;">
                      <h3 class="font-weight-bold"><a href="#" style="color: black;">{{$item->title}}</a></h3>
                    
                      @if($item->discount_price != null)
                      <h5 style="color: red;">Discount Price <br> 
                          ৳{{$item->discount_price}}
                      </h5>
                      <h5 style="color: blue; text-decoration: line-through;">Regular Price <br> 
                          ৳{{$item->price}}
                      </h5>
                  @else
                      <h5>Regular Price <br>
                          ৳{{$item->price}}
                      </h5>
                  @endif
                  
                      
                    
        
                    
                         
                  <a href="{{url('menu_details',$item->id)}}" class="btn btn-outline-primary font-weight-bold" style="color: black; border-color:#0d6efd; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                    Menu Details
                  </a>
                  
                  <form action="{{url('add_cart',$item->id)}}" method="Post">
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
                  
                  
                  
                  
                  
                    </div>
                  </div>
                </div>
              @endforeach

             {!!$menu->withQueryString()->links('pagination::bootstrap-5')!!}
            </div>
          </div>
        </div>
      </section>
      
      <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>   

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
