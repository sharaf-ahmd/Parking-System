<?php

require 'php/connection.php';

if(isset($_POST['submit'])){

   $paFName = ($_POST['paFName']);
   $paLName = ($_POST['paLName']);
   $paNIC = ($_POST['paNIC']);
   $paContactNum = ($_POST['paContactNum']);
   $paEmail = ($_POST['paEmail']);
   $paGender = ($_POST['paGender']);
   $paPassword =($_POST['paPassword']);
   $paCPassword =($_POST['paCPassword']);

   $select = " SELECT * FROM park_att WHERE email = '$paEmail' ";

   $result=$conn->query($select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($paPassword != $paCPassword){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO park_att(fname, lname, nic, contact, email, gender, password) VALUES('$paFName', '$paLName', '$paNIC', '$paContactNum', '$paEmail', '$paGender', '$paPassword')";
         mysqli_query($conn, $insert);
         
      }
   };

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="js/dash.js"></script>
   <title>Register Parking Attendant</title>


   <link rel="stylesheet" href="css/reg.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Register Parking Attendant</h3>
      <?php
      if(isset($error)){
         foreach($error as $errors){
            echo '<span class="error-msg">'.$errors.'</span>';
         };
      };
      ?>
      <input type="text" name="paFName" required placeholder="first name"><br>
      <input type="text" name="paLName" required placeholder="last name"><br>
      <input type="text" name="paNIC" required placeholder="NIC number"><br>
      <input type="text" name="paContactNum" required placeholder="contact number"><br>
      <input type="text" name="paEmail" required placeholder="e-mail address"><br>
      <select name="paGender" required>
         <option value="" disabled selected hidden>Choose Gender</option>
         <option value="male">Male</option>
         <option value="female">Female</option>
      </select>
      <br>
      <input type="password" name="paPassword" required placeholder="enter your password"><br>
      <input type="password" name="paCPassword" required placeholder="confirm your password"><br>
      <input type="submit" name="submit" value=Register class="form-btn">
     
   </form>

</div>

</body>
</html>