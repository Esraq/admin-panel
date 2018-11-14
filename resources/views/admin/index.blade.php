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
                 


                    <li>
                        <a href="admin-panel" ><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>
                   

                    
                    <li>
                         <a href="user_list"><i class="fa fa-table "></i>User-List  </a>
                    </li>


                     <li>
                         <a href="comitee-admin"><i class="fa fa-table "></i>Comitee  </a>
                    </li>


                  
                    
                   
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome  {{ Auth::user()->name }} </strong> from admin panel.
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                           <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                         <a href="banner-admin" >
 <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>Banner</h4>
                      </a>

                      </div>
                     
                     
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="notice-admin" >
 <i class="fa fa-envelope-o fa-5x"></i>
                      <h4>Notice</h4>
                      </a>

                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href="event-admin" >
 <i class="fa fa-lightbulb-o fa-5x"></i>
                      <h4>Events</h4>
                      </a>

                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href="/member-admin" >
 <i class="fa fa-users fa-5x"></i>
                      <h4>Members</h4>
                      </a>

                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                                                      <a href="menu-show" >
 <i class="fa fa-key fa-5x"></i>
                      <h4>Menu</h4>
                      </a>

                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                                                     <a href="about-admin" >
 <i class="fa fa-comments-o fa-5x"></i>
                      <h4>About Us</h4>
                      </a>

                      </div>
                     
                     
                  </div>
              </div>
                 <!-- /. ROW  --> 
                <div class="row text-center pad-top">
                 
                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="document-admin" >
 <i class="fa fa-clipboard fa-5x"></i>
                      <h4>Documents</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="contact-admin" >
 <i class="fa fa-wechat fa-5x"></i>
                      <h4>Contacts</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="photo-admin" >
 <i class="fa fa-rocket fa-5x"></i>
                      <h4>photos</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="register" >
 <i class="fa fa-user fa-5x"></i>
                      <h4>Admin</h4>
                      </a>
                      </div>


                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    
                     
                  </div> 
              </div>   
                  <!-- /. ROW  -->    

                     
                  </div>
              </div>
                 <!-- /. ROW  -->   
          <div class="row">
                    <div class="col-lg-12 ">
          <br/>
                        
                    </div>
                    </div>
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                 Developed by Dhaka Reporters Unity
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
