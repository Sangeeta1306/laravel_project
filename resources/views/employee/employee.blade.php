<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>employee</title>
    <link href="{{asset('admin_assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/css/theme.css')}}" rel="stylesheet" media="all">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/solid.min.css">
  <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Main CSS-->
<link href="css/theme.css" rel="stylesheet" media="all">
<link href="{{asset('admin_assets/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body>
                    
                    @include('common/common')
                    
                    <div class="container " style="padding-left:400px; padding-top:130px;">
          
                      {{-- @if(Session::has('success'))
                            <div class="alert alert-success text-center fw-bold" role="alert">
                                {{ Session::get('success') }} 
                            </div>
                        @endif --}}
                                    
                       
                            <div class="row">
                                <div class="col-md-12" >
                                    <button type="submit" name="" class=" btn fw-bold" style="background-color:lightblue "><a href="{{ route('employeeadd') }}">Add employee +</a> </button><br><br>
    
                    <div class="table-data__tool" >
                                        <div class="table-responsive table-responsive-data2" >
                                           


                        <table class="table table-striped table-sm">
                          <thead>
                            <tr>
                              <th>SI</th>
                              <th>First name</th>
                              <th>last name</th>
                              <th>Company</th>
                              <th>Email id</th>
                              <th>Contact No.</th>                             
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody id="admin_list">
                            {{-- @foreach($employees as $item=>$i) --}}
                           @foreach($data as $item=>$i)

                            <tr>
                               
                              <td>{{$item+1}}</td>
                              
                              <td>{{$i->fname}}</td>
                              <td>{{$i->lname}}</td>
                              <td>{{$i->company}}</td>

                              {{-- <td>{{$i->company->cname}}</td> --}}
                              <td>{{$i->email}}</td>
                              <td>{{$i->phone}}</td>                                                                             
                              
                              <td>
                                 <a href="/employeeedit/{{$i->id}}"><button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                                <a href="/deletedata2/{{$i->id}}"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></a> 

                              </td>
                            
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
                <span>
                  {{ $data->links() }}
                </span>
                <style>
                  .w-10{
                    display:none
                  }
                  </style>        
                
                <script type="text/javascript" src="./js/admin.js"></script>
</body>
</html>