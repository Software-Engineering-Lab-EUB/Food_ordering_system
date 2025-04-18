<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
              @include('admin.css')
              <style>
                .center {
                  margin: auto;
                  width: 80%;
                  border: 2px solid white;
                  text-align: center;
                  margin-top: 40px;
                  border-collapse: collapse; /* Changed to collapse for line styling */
                }
                .center th, .center td {
                  padding: 10px 15px;
                  border-bottom: 1px solid white; /* Add horizontal line between rows */
                }
                .center th {
                  background-color: #222;
                  color: white;
                }
                .font_size {
                  text-align: center;
                  font-weight: bold;
                  font-size: 40px;
                  margin-bottom: 20px;
                  padding-top: 20px;
                }
                .center img {
              width: 150px;
              height:80px;
              object-fit: cover;
            }

              </style>
  
  
  
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include ('admin.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          @if(session()->has('message'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  {{ session()->get('message') }}
              </div>
          @endif
            <table class="center">
<h2 class="font_size">All Items </h2>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Discount_price</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                @foreach($menu as $menu)
                <tr>
                    <td>{{$menu->title}}</td>
                    <td>{{$menu->description}}</td>
                    <td>{{$menu->quantity}}</td>
                    <td>{{$menu->category}}</td>
                    <td>{{$menu->price}}</td>
                    <td>{{$menu->discount_price}}</td>
                    <td>
                      <img src="/menu/{{$menu->image}}">
                    </td>
                    <td>
                      <a   class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this ?')" href=" {{ url('delete_menu', $menu->id) }}" >Delete</a>
                    </td>

                    <td>
                      <a   class="btn btn-primary" href=" {{ url('update_menu', $menu->id) }}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </table>
      
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
      
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>