
<?php 
session_start();
require_once('connection.php');

$id=$_SESSION['id'];
$sql = "UPDATE `admin` SET `fname` = '$_POST[usrn]', `lname` = '$_POST[lname]',  `contact` = '$_POST[cont]', `email` = '$_POST[mail]', `password` = '$_POST[pass]' WHERE `admin_id` = '$id'";

$result=$conn->query($sql);

if($result){
    header("location: ../dashboard.php");
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<?php 
