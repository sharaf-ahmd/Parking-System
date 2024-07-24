<?php
session_start();
$id=$_SESSION['id'];
require_once("php/connection.php");
$sql="SELECT * from reservations where uid=$id";
$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/dash.js"></script>
    <title>Document</title>
    <style>
        body{
            background-color:#94B0B7;
        }
        table,th, td {
            border :2px solid rgb(177, 177, 174);
            border-collapse:collapse;padding:10px;

        }
        table{
            width:80%;
            
        }
        table th{
            background-color:rgb(177, 177, 174);
            color:white;
            border:2px solid white;

        }
        table td{
            background-color:white
        }
    </style>
</head>
<body>
    <br>
    <center>
    <h2><u>Reservations</u></h2></center><br><br><br>
    <center>
<table >
            <tr> 
                
                <th><h4>Name</h4></th>
                <th><h4>Slot</h4></th>
                <th><h4>Date</h4></th>
                <th><h4>Price</h4></th>
                
            </tr>

            <?php 
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc()){
                    echo" <tr>
                    
                    <td>".$row['customer']."</td>
                    <td>".$row['slot']."</td>
                    <td>".$row['date']."</td>
                    <td>".$row['price']."</td>
                    
                </tr>";
            
                }
            }
            
            ?>
           
        </table>
        </center>
</body>
</html>