<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @include('admin.css')
    <style>
        .h2_font {
          font-size: 28px; /* Change this to any size you want */
          font-weight: bold;
        }
        .centered-table {
  margin: 0 auto;
  border-collapse: collapse;
  width: 80%;
  text-align: center;
  background-color: black; /* Black background */
  border: 2px solid white; /* Green outer border */
}

.centered-table th,
.centered-table td {
  padding: 10px 15px;
  border: 1px solid white; /* Green inner borders */
  color: white; /* White text for visibility */
}
.centered-table th {
      background-color: #222;
      color: white;
    }

      </style>
    
  </head>
  <body class="bg-gradient-to-r from-blue-100 via-purple-100 to-pink-100 font-sans leading-normal tracking-normal">
    <div class="container-scroller flex">
      <!-- Sidebar -->
     
      @include('admin.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          

          <!-- Your rest of the HTML content -->
          @if(session()->has('message'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  {{ session()->get('message') }}
              </div>
          @endif

            <div style="text-align: center;">
                <h2 class="h2_font" style="margin-bottom: 20px;">Add Category</h2>
                <form action="{{url('/add_category')}}" method="POST">
                  @csrf
                    <input type="text" name="catagory" placeholder="Enter category name" class="text-blue-500" style="margin-bottom: 10px;">
                    <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                </form> 
            </div>
            <div class="flex justify-center mt-6">
              <table class="centered-table">
                <tr>
                  <th>Category Name</th>
                  <th>Action</th>
        
                </tr>
                @foreach ($data as $data )
                
                <tr>
                  <td>{{ $data->category_name }}</td>
                  <td>
                      <a href="{{ url('delete_category', $data->id) }}" 
                         class="btn btn-danger" 
                         onclick="return confirm('Are you sure you want to delete this category?')">
                          Delete
                      </a>
                  </td>
              </tr>
              
                @endforeach
              </table>
              
            </div>
            
            
            
                  
              </div>
              
        </div>
    </div>
    <div class="flex-1 flex flex-col bg-blue bg-opacity-100">
    
        <!-- Header -->
        @include('admin.header')
        
        <!-- Main content -->
        <div class="p-4 bg-green-70 rounded-lg shadow-md m-4">
         
          <!-- Add your content here -->
        </div>
      </div>
    </div>

    @include('admin.script')
  </body>
</htm> 