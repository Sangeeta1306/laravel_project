<html>
    <head>
      <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>company</title>

<link href="{{asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('admin_assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">    
<link href="{{asset('admin_assets/css/theme.css')}}" rel="stylesheet" media="all">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/solid.min.css">
<!-- Main CSS-->
<link href="css/theme.css" rel="stylesheet" media="all">
<link href="{{asset('admin_assets/css/theme.css')}}" rel="stylesheet" media="all">

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">  --}}

</head>
<body>

  @include('common/common')

  <div class="container ">
            
    <div class="col-md-8 mx-auto" style="padding-left:400px; padding-top:100px;">
  
          <form action="{{route('addemployee')}}" id="" method="POST" enctype="multipart/form-data">                 
            @csrf
                              
               <label class="form-level fw-bold mb-2">Employee First Name</label class="form-level fw-bold">
               <input type="text" name="fname" class="au-input au-input--full mb-2" placeholder="Enter  Employee First Name">
                                        
               <label class="form-level fw-bold mb-2">Employee last Name</label class="form-level fw-bold">
               <input type="text" name="lname" class="au-input au-input--full mb-2" placeholder="Enter Employee last Name">
                
               <div class="form-group">
                <label for="" class="control-label mb-1"> Company Name </label>
               <select name="company" id="" class="form-control" aria-required="true" aria-invalid="false">
                
                @foreach($q as $item)
                <option value="{{$item->id}}">{{$item->cname}}</option>
                @endforeach
            </select>

               <label class="form-level fw-bold mb-2">Email id.</label class="form-level fw-bold">
               <input type="text" name="email" class=" au-input au-input--full mb-2" placeholder="Enter Email id">
                  
               <label class="form-level fw-bold mb-2">Contact No.</label class="form-level fw-bold">
               <input type="text" name="contact" class=" au-input au-input--full mb-2" placeholder="Enter contact number">                       
                
               <input type="hidden" name="add_employee" value="1">
               <button type="submit" class="btn btn-primary add-product">Add Employee</button>
                                      
               <a href="{{route('employee')}}"><button type="button" class="btn btn-warning">Back</button></a>
                          
          </form>
        </div>
  </div>
          
</body>
</html>