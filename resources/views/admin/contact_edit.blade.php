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


  <form action = "/edit_contact/<?php echo $contacts[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>

 
  
  <tr>

    <tr><td>Address:</td><td><input type = 'text' name = 'address'  size="75"value = '<?php echo$contacts[0]->address; ?>'/><td></tr>

     <tr><td>Phone:</td><td><input type = 'text' name = 'phone' size="55"  value = '<?php echo$contacts[0]->phone; ?>'/></td></tr>
 
     <tr><td>Email:</td><td><input type = 'text' name = 'email'  value = '<?php echo$contacts[0]->email; ?>'/></td></tr>

     <tr><td>Facebook Link:</td><td><input type = 'text' name = 'fb' size="55"  value = '<?php echo$contacts[0]->fb; ?>'/></td></tr>

      <tr><td>Twitter Link:</td><td><input type = 'text' name = 'twitter' size="55" value = '<?php echo$contacts[0]->twitter; ?>'/></td></tr>

         <tr><td>Google Link:</td><td><input type = 'text' name = 'google' size="55"  value = '<?php echo$contacts[0]->google; ?>'/></td></tr>

           <tr><td>Linkedin Link:</td><td><input type = 'text' name = 'linkedin' size="55"  value = '<?php echo$contacts[0]->linkedin; ?>'/></td></tr>

          <tr><td>Youtube Link:</td><td><input type = 'text' name = 'youtube' size="55"  value = '<?php echo$contacts[0]->youtube; ?>'/></td></tr>

            <tr ><td colspan="2"><center><input type="submit" class="w3-button w3-blue" value="update"><a href="../contact-admin" class="w3-button w3-black">Back</a></center></td></tr>
    




      



     




     







    
  </tr>
  
</table>
 </form>

</body>
</html>
