<?php
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];
    require('connection.php');

    if(isset($_POST['submit'])){
        $date = $_POST['date'];
       
        $slot = $_POST['slot'];
        
        $price=600;

    
        

        $check="SELECT r_id FROM reservations where slot=$slot and date='$date' ;";
        $check_execute=$conn->query($check);
        if($check_execute->num_rows>0){
            
            echo"<div style='padding:30px;color:white;margin-top:200px;background-color:#5A96DB;width:500px;height:350px;margin-left:auto;margin-right:auto;border-radius:20px;'>  
            <center><br><br>
            
           <br><br>
            <h2>Already reserved</h2>
            
            

            <a href='reserve.php'><button style='width:300px;height:50px;color:black;background-color:white;border:none;border-radius:10px;font-size:20px'>Reserve different slot</button></a>   
            <br> 

                        
            </center>
            
            
            </div>";
        }else{
            echo"<div style='padding:20px;color:white;margin-top:200px;background-color:#5A96DB;width:500px;height:350px;margin-left:auto;margin-right:auto;border-radius:20px;'>  
            <center>
            <h1>Reservation Receipt</h1><br>

            <h2>Price :  $name</h2>
           
            <h2>Price :  $price</h2>
            
            <h2>Date :  $date</h2>
            
            <h2>Slot no :  $slot</h2>

            <a href='reserve.php'><button style='width:100px;height:30px;color:black;background-color:white;border:none;border-radius:10px;'>Visit home</button></a>   
            <br> 

                        
            </center>
            
            
            </div>";
        }
    }

    $sql = "INSERT INTO reservations (uid, customer, date, slot, price) VALUES ('$id', '$name', '$date', '$slot', '$price')";
       
        $result=$conn->query($sql);
        if($result){
           echo" ";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


  

?>



