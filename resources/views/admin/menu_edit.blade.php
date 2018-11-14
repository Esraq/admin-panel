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


  <form action = "/edit_menu/<?php echo $menus[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>

  <tr>
    <th><center>Title</center></th>
    <th><center>Description</center></th>
    <th colspan="2">Action</th>
  </tr>
  <tr>

    <td><input type = 'text' name = 'name'  
                     value = '<?php echo$menus[0]->name; ?>'/></td>
    <td><input type = 'text' name = 'destination' size="55"

                     value = '<?php echo$menus[0]->parent_id; ?>'/></td>
    <td><input type="submit" class="w3-button w3-blue" value="update"></td>
     <td><a href="../menu-show" class="w3-button w3-black">Back</a></td>
    
    

    
  </tr>
  
</table>
 </form>

</body>
</html>
