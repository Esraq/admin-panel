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


  <form action = "/edit_notice/<?php echo $notices[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>

  <tr>
    <th><center>Date</center></th>
    <th><center>Title</center></th>
    

    <th colspan="2">Action</th>
  </tr>
  <tr>

    <td><input type = 'date' name = 'number'  
                     value = '<?php echo$notices[0]->number; ?>'/></td>
    <td><input type = 'text' name = 'title' size="25"

                     value = '<?php echo$notices[0]->title; ?>'/></td>
    
    <td><input type="submit" class="w3-button w3-blue" value="update"></td>
     <td><a href="../notice-admin" class="w3-button w3-black">Back</a></td>
    
    

    
  </tr>
  
</table>
 </form>

</body>
</html>
