<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dhaka Reporters Unity</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                      
                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
             <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 

 <li >
                        <a href="admin-panel" ><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                   

                    <li>
                        <a href="site"><i class="fa fa-table "></i>Banner</a>
                    </li>
                    <li>
                        <a href="menu-show"><i class="fa fa-edit "></i>Menu</a>
                    </li>



                 <li>
                        <a href="about-admin"><i class="fa fa-qrcode "></i>About</a>
                    </li>
                    <li>
                        <a href="notice-admin"><i class="fa fa-bar-chart-o"></i>Notice</a>
                    </li>

                    <li>
                        <a href="event-admin"><i class="fa fa-edit "></i>Events</a>
                    </li>
                    <li>
                        <a href="member-admin"><i class="fa fa-table "></i>Members</a>
                    </li>
                     <li>
                        <a href="contact-admin"><i class="fa fa-edit "></i>Contacts</a>
                    </li>
                    <li >
                        <a href="photo-admin"><i class="fa fa-edit "></i>Photos</a>
                    </li>
                     <li>
                        <a href="register"><i class="fa fa-edit "></i>User</a>
                    </li>
                     <li>
                        <a href="document-admin"><i class="fa fa-qrcode "></i>Documents</a>
                    </li>

                </ul>
                            </div>


        </nav>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Menu</h2> 
                      
                        @if($errors)

                    <ul>   
                        


                        @foreach($errors->all() as $error)     

                        <li class="alert alert-danger">{{$error}}</li>

                        @endforeach               



                    </ul>

                    @endif


                   
    <br>
      <table class="table table-striped">
    <thead>
      <tr>
        
        
        <th>Id</th>
        <th>Name</th>
      
        
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      
    @foreach($titles as $title)
      <tr>
        
        <td>{{$title['id']}}</td>
        <td>{{$title['name']}}</td>
        
        
        
        
          
            <td><a href = 'edit_title_view/{{ $title->id }}'>Edit</a></td>
        
        
  <!-- Modal content -->
  
      </tr>
      @endforeach
      </table>

</div>
<br>




    
        
</div>

<br>
        <br>

                    </div>
               
  <br>
             @if (session()->has('success'))
               <div class="alert alert-success">
    <i>Action completed successfully</i><br>
</div>
@endif


                   
       </div>


               
    
      
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2018| Design by: <a href="a2i.gov.bd" style="color:#fff;"  target="_blank">a2i</a>
                </div>
        </div>
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
