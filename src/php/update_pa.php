
<?php 
session_start();
require_once('connection.php');

$id=$_SESSION['id'];
$sql = "UPDATE `park_att` SET `fname` = '$_POST[usrn]', `lname` = '$_POST[lname]', `NIC` = '$_POST[nic]', `contact` = '$_POST[cont]', `email` = '$_POST[mail]', `gender` = '$_POST[gen]', `password` = '$_POST[pass]' WHERE `pa_id` = '$id'";

$result=$conn->query($sql);

if($result){
    header("location: ../pa_dash.php");
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<?php 
