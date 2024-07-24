<?php
session_start();
$id=$_SESSION['id'];
$uname=$_SESSION['name'];
require_once("php/connection.php");
$sql="SELECT * from reservations where uid=$id";
$result=$conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inq.css">
    <script src="https://use.fontawesome.com/b9d79ea055.js"></script>	
	  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="js/dash.js"></script>
    <title>Document</title>
</head>
<body>
    
    <div class="nav">
        <div class="title"><h3>Inquiries</h3><i class="fa fa-solid fa-envelope fa-2x"></i></div>
        <div class="name"><p><?php echo $uname ?><i class="fa fa-admin"></i></p></div>
    </div>

  

    <form class="msg" method="post" action="php/cancel_b.php" >
        <table>
            <tr> 
                <th><h4></h4></th>
                <th><h4>Name</h4></th>
                <th><h4>Address</h4></th>
                <th><h4>Phone</h4></th>
                <th><h4>Message</h4></th>
            </tr>

            <?php 
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc()){
                    echo" <tr>
                    <td><input type='checkbox' name='checked[]' value='".$row['r_id']."'></td>
                    <td>".$row['customer']."</td>
                    <td>".$row['slot']."</td>
                    <td>".$row['date']."</td>
                    <td>".$row['price']."</td>
                </tr>";
            
                }
            }

           
            ?>
           


        </table>
        <div class="bt">
        <button type="submit" onclick="remiq()" name="rem">remove</button>
        </div>
        </form>

  

</body>
</html>