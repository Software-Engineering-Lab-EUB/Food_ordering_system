<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/public">
    <title>Admin Dashboard</title>
    @include('admin.css')
    <style type="text/css">
        /* Ensuring the body and html cover the full viewport height */
        html, body {
          height: 100%;
          margin: 0;
        }

        .div_center {
  font-size: 50px; /* Change this to any size you want */
  font-weight: bold;
  text-align: center;
   /* Center the text */
}

.font_size
{
    font-size: 30px;
    padding-bottom: 40px;
}
.text_color
{
    color: black;
    padding-bottom: 40px;
}
label{
  display: inline-block;
  width: 200px;
}
.div_design
{
  padding-bottom: 20px;
}
      
    </style>
  </head>
  <body class="bg-gradient-to-r from-blue-100 via-purple-100 to-pink-100 font-sans leading-normal tracking-normal">
    <div class="container-scroller flex">
      <!-- Sidebar -->
      @include('admin.sidebar')

      <div class="main-panel">
        <div class="content-wrapper">
          <div style="text-align: center;">

            @if(session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
            </div>
            @endif
            
            <h1 class="font_size" style="margin-bottom: 20px; text-align: center;">Update Menu</h1>

            <form action="{{ url('update_menu_confirm',$menu->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
          
              <div class="div_design">
                  <label>Menu Title:</label>
                  <input class="text_color" type="text" name="title" placeholder="Write a title" required ="" value="{{ $menu->title }}">
              </div>
          
              <div class="div_design">
                <label>Menu Description:</label>
                <input class="text_color" type="text" name="description" placeholder="Write Description" required value="{{ $menu->description }}">
            </div>
            
            <div class="div_design">
                <label>Menu Price:</label>
                <input class="text_color" type="number" name="price" placeholder="Write price" required value="{{ $menu->price }}">
            </div>
            
            <div class="div_design">
                <label>Discount Price:</label>
                <input class="text_color" type="number" min="0" name="discount_price" placeholder="Write Price" value="{{ $menu->discount_price }}">
            </div>
            
            <div class="div_design">
                <label>Menu Quantity:</label>
                <input class="text_color" type="number" min="0" name="quantity" placeholder="Write Quantity" required value="{{ $menu->quantity }}">
            </div>
            
          
              <div class="div_design">
                  <label>Menu Category:</label>
                  <select class="text_color" name="category" required>
                      <option value="{{$menu->category}}" selected="">"{{$menu->category}}"</option>



                      @foreach ($category as $cat)
                      <option value="{{ $cat->category_name }}">{{ $cat->category_name }}</option>
                  @endforeach

                  </select>
              </div>


              <div class="div_design flex justify-center items-center">
                <label class="mr-4">Current Menu Image Here:</label>
                <img height="100" width="100" src="/menu/{{$menu->image}}">

              </div>



              <div class="div_design flex justify-center items-center">
                <label class="mr-4">Change Menu Image Here:</label>
                <div class="flex items-center space-x-2">
                  <input type="file" name="image" required class="w-40 p-1 border rounded-md">
                  <input type="submit" value="Update" class="btn btn-primary w-24 p-1 text-sm">
                </div>
              </div>
              
              
              
              
          </form>
          
          </div>
          </div>
          </div>
        </div>
      

      <div class="flex-1 flex flex-col bg-blue bg-opacity-100">
        <!-- Header -->
        @include('admin.header')

        <!-- Main content -->
        <div class="p-4 rounded-lg shadow-md m-4">
          <!-- Add your content here -->
        </div>
      </div>
    

    @include('admin.script')
  </body>
</html> 