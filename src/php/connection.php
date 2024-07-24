<?php

$conn=new mysqli("localhost","root","","parking_system");

if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}


