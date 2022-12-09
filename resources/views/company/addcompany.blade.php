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
      
              <form action="{{route('addcompany')}}" id="" method="POST" enctype="multipart/form-data">                 
                @csrf
                                  
                   <label class="form-level fw-bold mb-2">Company Name</label class="form-level fw-bold">
                   <input type="text" name="cname" class="au-input au-input--full mb-2" placeholder="Enter Company Name">
                                                                        
                   <label class="form-level fw-bold mb-2">Email id.</label class="form-level fw-bold">
                   <input type="text" name="email" class=" au-input au-input--full mb-2" placeholder="Enter Email id">
                                                
                   <label class="form-level fw-bold mb-4"> Choose Logo</label class="form-level fw-bold">
                   <input type="file" name="images" class="" placeholder="">
                      
                   <label class="form-level fw-bold mb-2">Company Website</label class="form-level fw-bold">
                   <input type="text" name="website" class=" au-input au-input--full mb-2" placeholder="Enter website">                       
                    
                   <input type="hidden" name="add_company" value="1">
                   <button type="submit" class="btn btn-primary add-product">Add Company</button>
                                          
                   <a href="{{route('company')}}"><button type="button" class="btn btn-warning">Back</button></a>
                              
              </form>
            </div>
      </div>
              
    </body>
    </html>