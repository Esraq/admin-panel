<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

  @if($errors)

                    <ul>   
                        


                        @foreach($errors->all() as $error)     

                        <li class="alert alert-danger">{{$error}}</li>

                        @endforeach               



                    </ul>

                    @endif


 
           {!! Form::open(['url' => URL::to('member-admin/'.$member->id), 'method'=>"put", 'id'=>'event', 'enctype'=>'multipart/form-data']) !!}
<table>

  <tr>
    <th><center>Name</center></th>
    <th><center>Designation</center></th>
     <th><center>File Name</center></th>
    <th><center>Weight</center></th>

    <th colspan="2"><center>Action</center></th>
  </tr>
  <tr>

    <td><input type = 'text' name = 'title'  
                     value = '<?php echo$member->title; ?>'/></td>
    <td><input type = 'text' name = 'description' 

                     value = '<?php echo$member->description; ?>'/></td>


   <td> 

   <input type="file" name="filename">
  </td>


     <td><input type = 'text' name = 'weight' 

                     value = '<?php echo$member->weight; ?>'/></td>                
    <td><input type="submit" class="w3-button w3-blue" value="update"></td>
     <td><a href="/member-admin" class="w3-button w3-black">Back</a></td>
    
    

    
  </tr>
  
</table>
  {!! Form::close() !!}

</body>
</html>
