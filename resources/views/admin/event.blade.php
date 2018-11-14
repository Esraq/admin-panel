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
                <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 

 <li >
                        <a href="admin-panel" ><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                   

                  <li>
                        <a href="banner-admin"><i class="fa fa-table "></i>Banner</a>
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
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                     <h2>Event </h2> 
                                          @if($errors)

                    <ul>   
                        


                        @foreach($errors->all() as $error)     

                        <li class="alert alert-danger">{{$error}}</li>

                        @endforeach               



                    </ul>

                    @endif
                      {!! Form::open(['url' => URL::to('event_store'),'id'=>'event', 'enctype'=>'multipart/form-data']) !!}
                    <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Event number</label>
                                    <div class="col-sm-10">
                                        {!! Form::text('number', Input::old('number'),array('class' => 'form-control' , 'placeholder' => 'Enter number correctly' )) !!}
                                    </div>
                                    <br>

                                </div>
                            <br>
                             <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Event Date</label>
                                    <div class="col-sm-10">
                                        {!! Form::date('date', Input::old('date'),array('class' => 'form-control' , 'placeholder' => 'Enter date correctly' )) !!}
                                    </div>
                                    <br>

                                </div>
                            <br>

                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        {!! Form::text('title', Input::old('title'),array('class' => 'form-control' , 'placeholder' => 'Enter title of event' )) !!}
                                    </div>
                                    <br>
                                </div>
                            <br>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        {!! Form::textarea('description', Input::old('description'),array('class' => 'sms form-control','placeholder'=>'Main description text, with in 260  character','rows'=>'5')) !!}
                                    </div>
                                </div>
                            <br>
                            <br>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Image</label>
                                        <br ><br>
                                        <div class="col-sm-10">
                                            {!! Form::file('filename', Input::old('filename'),array('class' => 'form-control' , 'placeholder' => '' )) !!}
                                        </div>
                                        <br>
                                </div>
                            

                                <div class="form-group">

                                    <div class="col-sm-offset-2 col-sm-10">

                                        <button type="submit" class="btn btn-primary">upload</button>
                                    </div>
                                </div>
                          
                        </div>
                          </form>

                          </div>
   <br>
@if (session()->has('success'))
               <div class="alert alert-success">
    <i>Action completed successfully</i><br>
</div>
@endif

    
     
             



                     <table class="table table-striped">
    <thead>
      <tr>
        
        
        <th>Number</th>
        
        <th>Title</th>
        
        <th colspan="2"></th>
      </tr>
    </thead>
    <tbody>
      
    @foreach($programmes as $programme)
      <tr>
        
        <td>{{$programme['number']}}</td>
        
        <td>{{$programme['title']}}</td>
        
        
         
    
         <td> <a href="{{ URL::to('delete_event/'.$programme->id) }}" class="btn btn-sm btn-icon btn-danger"><i class="fa fa-edit"></i></a>

        <td> <a href="{{ URL::to('edit_event_view/'.$programme->id) }}" class="btn btn-sm btn-icon btn-primary"><i class="fa fa-edit"></i></a>
                                 
        
  <!-- Modal content -->
  
      </tr>
      @endforeach
        <br>
    
</div>


<?php echo $programmes->links() ?>
          
    
        
</div>

<br>
        <br>

</div>
</form>
</table>
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
