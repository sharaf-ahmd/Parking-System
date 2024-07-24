<?php 
session_start();
require_once("php/connection.php");
$uname=$_SESSION['name'];
$sql="select * from inquiry";
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

  

    <form class="msg" method="post" action="php/reminq.php" >
        <table>
            <tr> 
                <th><h4></h4></th>
                <th><h4>Name</h4></th>
                <th><h4>Address</h4></th>
                <th><h4>Phone</h4></th>
                <th><h4>Message</h4></th>
                <th><h4>Status</h4></th>
            </tr>

            <?php 
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc()){
                    echo" <tr>
                    <td><input type='checkbox' name='checked[]' value='".$row['in_id']."'></td>
                    <td>".$row['name']."</td>
                    <td>".$row['address']."</td>
                    <td>".$row['phone']."</td>
                    <td>".$row['message']."</td>
                    <td class='stat'>".$row['status']."</td>
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