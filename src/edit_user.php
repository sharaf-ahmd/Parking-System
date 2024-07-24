
<?php 
session_start();
require_once("php/connection.php");
$id=$_SESSION['id'];

$sql="select * from user where uid='$id'";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc())
    {
       $uname=$row['fname'];
        $lname=$row["lname"];
        $nic=$row["NIC"];
        $cont=$row["contact"];
        $mail=$row["email"];
        $gen=$row["gender"];
        $pass=$row["password"];
    }
} 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit_u.css">
    <script src="https://use.fontawesome.com/b9d79ea055.js"></script>	
    <script src="js/dash.js"></script>
	  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <title>Document</title>
</head>
<body>
    
    <div class="nav">
        <div class="title"><h3>Profile</h3><i class="fa fa-edit fa-2x"></i></div>
        <div class="name"><p><?php echo $uname ?><i class="fa fa-user fa-2x"></i></p></div>
    </div>
  
    <form action="php/update_user.php" method="post" class="profile">

    <div class="pic">
      <img src="images/prof.png" alt="">
    </div>
    
    <div class="data">
    <div class="info">
      <label for="Fname">First Name : </label>
      <input type="text" name="usrn" value="<?php echo $uname ?>" id="Fname">
    </div>

    <div class="info">
      <label for="Lname">Last Name : </label>
      <input type="text" id="Lname" name="lname" value="<?php echo $lname?>">
    </div>

    <div class="info">
      <label for="nic">NIC : </label>
      <input type="text" id="nic" name="nic" value="<?php echo $nic ?>">
    </div>
    
    <div class="info">
      <label for="cont">Contact : </label>
      <input type="text" id="cont" name="cont" value="<?php echo $cont ?>">
    </div>

    
    <div class="info">
      <label for="mail">Email : </label>
      <input type="text" id="mail" name="mail" value="<?php echo $mail ?>">
    </div>

    
    <div class="info">
   
      <label >Gender</label>
			  <input type="text" name="gen" value="<?php echo $gen; ?>" readonly>
		
    </div>

    <div class="info">
      <label for="pass">Password : </label>
      <input type="text" name="pass" id="pass" value="<?php echo $pass; ?>">
    </div>
</form>
    <div class="bt">
        <input class="sub" onclick="editp()" type="submit" value="Update">
        </div>

        </div>

</body>
</html>