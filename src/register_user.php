<?php

require_once'php/connection.php';

if(isset($_POST['submit'])){

    $fName =($_POST['fName']);
    $lName = ($_POST['lName']);
    $nic = ($_POST['NIC']);
    $contactNum = ($_POST['contactNum']);
    $email = ($_POST['email']);
    $gender = ($_POST['gender']);
    $password =($_POST['password']);
    $cPassword =($_POST['cPassword']);

    $select = " SELECT * FROM user WHERE email = '$email'";

    $result = $conn->query($select);

    if($result->num_rows> 0){
         $error[] = 'user already exist!';
     }else{
        if($password != $cPassword){
            $error[] = 'password not matched!';
        }else{
            $insert = "INSERT INTO  user(fName, lName, NIC, contact, email, gender, password) VALUES('$fName', '$lName', '$nic', '$contactNum', '$email', '$gender', '$password')";
            $conn->query($insert);
            header("location:user_sign.php");
        
        }
};

};

$conn->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="js/dash.js"></script>
   <title>register form</title>

   <link rel="stylesheet" href="css/styles.css">

</head>
<body>
   
    <div class="form-container">

    <form action="" method="post">
        <h3>register now</h3>
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="text" name="fName" required placeholder="first name"><br>
        <input type="text" name="lName" required placeholder="last name"><br>
        <input type="text" name="NIC" required placeholder="NIC number"><br>
        <input type="text" name="contactNum" required placeholder="contact number"><br>
        <input type="text" name="email" required placeholder="e-mail address"><br>
        <select name="gender" required>
            <option value="" disabled selected hidden>Choose Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br>
        <input type="password" name="password" required placeholder="enter your password"><br>
        <input type="password" name="cPassword" required placeholder="confirm your password"><br>
        <input type="submit" name="submit" value=Register class="form-btn">
        <p>Already have an account? <a href="">Login Now</a></p>
    </form>

    </div>

</body>
</html>