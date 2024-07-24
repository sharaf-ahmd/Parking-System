<?php 
session_start();
require_once('connection.php');

$id=$_SESSION['id'];
$sql = "UPDATE `user` SET `fname` = '$_POST[usrn]', `lname` = '$_POST[lname]', `NIC` = '$_POST[nic]', `contact` = '$_POST[cont]', `email` = '$_POST[mail]', `gender` = '$_POST[gen]', `password` = '$_POST[pass]' WHERE `uid` = '$id'";

$result=$conn->query($sql);

if($result){
    header("location: ../user_dash.php");
    $_SESSION['name']=$_POST['fname'];
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<?php 
