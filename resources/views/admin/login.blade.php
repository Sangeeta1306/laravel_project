<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
   <div class="row justify-content-center" style="margin:100px 0; ">
       <div class="col-md-4" style="background-color: rgba(0, 0, 255, 0.3) ">
           <h4 class="text-center fw-bold">Admin Login</h4>
           <p class="message"></p>
           <form action="{{route('admin.auth')}}" id="admin-login-form" method="post"  enctype="multipart/form-data">
               @csrf
             <div class="form-group">
               <label for="email">Email address</label>
               <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
             </div>
             <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
             </div>
             <input type="hidden" name="" value="1">
             <button type="submit" class="btn btn-primary login-btn text-center">Log in</button>
             {{-- <div class="alert alert-danger" role="alert">
              {{session('error')}}		

            </div> --}}
            </form>
       </div>
   </div>
</div>


<script type="text/javascript" src="./js/main.js"></script>
  </body>
  </html>