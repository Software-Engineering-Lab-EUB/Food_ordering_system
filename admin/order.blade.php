<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
      .h2_font {
        font-size: 35px;
        font-weight: bold;
      }
    
      .centered-table {
        margin: 0 auto;
        border-collapse: collapse;
        width:70%; /* Smaller width */
        text-align: center;
        border: 2px solid white; /* Outer border */
      }
    
      .centered-table th,
      .centered-table td {
        padding: 8px 12px; /* Reduced padding */
        border: 1px solid white; /* Grid lines for both horizontal and vertical */
        border-style: solid;
        color: white;
      }
    
      /* Smaller font size for table headers */
      .centered-table th {
        background-color: #222;
        color: white;
        font-size: 15px; /* Reduced font size */
      }
    
      /* Optional: Adjust the size for table data cells as well */
      .centered-table td {
        font-size: 15px; /* Smaller font size */
      }
    
      .delivered-btn {
        display: inline-block;
        padding: 8px 16px; /* Reduced padding */
        background-color: rgb(35, 35, 104); /* Blue background */
        color: white; /* White text */
        text-decoration: none; /* Remove underline */
        border: 2px solid rgb(49, 49, 150); /* Blue border */
        border-radius: 5px; /* Rounded corners */
        font-size: 12px; /* Reduced font size */
        text-align: center; /* Center text */
        transition: background-color 0.3s, border-color 0.3s; /* Smooth transition for hover */
      }

      /* Hover effect */
      .delivered-btn:hover {
        background-color: darkblue; /* Darker blue when hovered */
        border-color: darkblue; /* Darker border when hovered */
      }

      .no-data {
        font-size: 18px;
        color: white;
        text-align: center;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
       
        @include('admin.sidebar')
        <div class="main-panel">
          <div class="content-wrapper">

            <div style="text-align: center;">
                <h2 class="h2_font" style="margin-bottom: 20px;">Order Details</h2>

            <div style="margin: auto; padding-bottom: 30px;">
              <form action="{{ url('search') }}" method="get">
                @csrf
                <input type="text" style="color:black" name="search" placeholder="Search something" value="{{ request()->input('search') }}">
                <input type="submit" value="Search" class="btn btn-outline-primary"/>
              </form>
            </div>

                <table class="centered-table">
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Menu Title</th>
                      <th>Image</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Payment Status</th>
                      <th>Delivery Status</th>
                      <th>Delivered</th>
                    </tr>

                    @if($order->isEmpty())
                      <tr>
                        <td colspan="11" class="no-data">No data found</td>
                      </tr>
                    @else
                      @foreach($order as $order)
                      <tr>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->menu_title }}</td>
                        <td>
                          <img src="/menu/{{ $order->image }}" style="width:80px; height: 60px; object-fit: cover;"> <!-- Smaller image size -->
                        </td>
                        <td>{{ $order->quantity }}</td>
                        <td>${{ $order->price }}</td>
                        <td>{{ $order->payment_status }}</td>
                        <td>{{ $order->delivery_status }}</td>
                        <td>

                          @if($order->delivery_status=='processing')
                          <a href="{{ url('delivered', $order->id) }}" 
                            onclick="return confirm('Are you sure you want to deliver this?')" 
                            class="delivered-btn">
                            Delivered
                          </a>
                          @else
                          <a href="{{ url('delivered', $order->id) }}" 
                            onclick="return confirm('Are you sure you want to deliver this?')" 
                            class="delivered-btn">
                            Delivered
                          </a>
                          @endif
                        </td>
                      </tr>
                      @endforeach
                    @endif
                    
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
