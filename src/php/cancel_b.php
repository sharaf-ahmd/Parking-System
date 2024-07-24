<?php
session_start();
require_once("connection.php");

if(!empty($_POST['checked'])){
    foreach($_POST['checked'] as $ids){
        $sql="DELETE FROM reservations WHERE r_id='$ids'";
        $result=$conn->query($sql);
        if(!$reults){
            echo"Error".$sql."<br>".$conn->error;
        }
    }
    header("location: ../del_reserve.php");
    exit;
  }else{
    echo"Select inquiries to delete ";
}


      