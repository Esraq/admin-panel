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
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Banner</h2>
                       @if($errors)

                    <ul>   
                        


                        @foreach($errors->all() as $error)     

                        <li class="alert alert-danger">{{$error}}</li>

                        @endforeach               



                    </ul>

                    @endif
                     {!! Form::open(['url' => URL::to('banner-admin'),'id'=>'event', 'enctype'=>'multipart/form-data']) !!}
                     @csrf

<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Enter Weight</label>
    <div class="col-sm-10">
        {!! Form::text('weight', Input::old('weight'),array('class' => 'form-control' , 'placeholder' => 'Enter weight correctly' )) !!}
    </div>
    <br>

</div>



<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Banner title</label>
    <div class="col-sm-10">
        {!! Form::text('title', Input::old('title'),array('class' => 'form-control' , 'placeholder' => 'Enter title correctly' )) !!}
    </div>
    <br>

</div>


<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Short Description</label>
    <div class="col-sm-10">
        
        {!! Form::text('description', Input::old('description'),array('class' => 'form-control' , 'placeholder' => 'Enter description(20 words) of event' )) !!}
    </div>
    <br>
</div>



    <div class="form-group">
        <label class="col-sm-2 control-label">Banner</label>
        
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
</form>
<br><br>
                    </div>
                    <br><br><br>    <br><br><br>    <br><br><br>
             


     @if (session()->has('success'))
               
 &nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i>Action completed successfully</i><br>

@endif


                     <table class="table table-striped">
    <thead>
      <tr>
        
        
        <th>Title</th>
        <th>Description</th>
        <th>Weight</th>
        
        <th colspan="2"><center>Action</center></th>
      </tr>
    </thead>
    <tbody>
      
    @foreach($banners as $banner)
      <tr>
        
        <td>{{$banner['title']}}</td>
        <td>{{$banner['description']}}</td>
        <td>{{$banner['weight']}}</td>
        
        
          <td>{!! Form::open(['url' => URL::to('banner-admin/'.$banner->id),"method"=>"DELETE"]) !!}
                                                    <button type="submit" class="btn btn-xs btn-danger"><i class="fa  fa-trash-o"></i></button>
                                                {!! Form::close() !!}</td>
          <td>
                                                <a href="{{ URL::to('banner-admin/'.$banner->id.'/edit') }}" class="btn btn-sm btn-icon btn-primary"><i class="fa fa-edit"></i></a>
                                            </td>
  <!-- Modal content -->
  
      </tr>
      @endforeach
             <!-- /. PAGE INNER  -->
            </table>


            <?php echo $banners->links() ?>
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
