<?php 
session_start();
require_once("php/connection.php");
$uname=$_SESSION['name'];
$sql="select * from park_att";
$result=$conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inq.css">
    <script src="https://use.fontawesome.com/b9d79ea055.js"></script>	
    <script src="js/dash.js"></script>
	  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <title>Document</title>
</head>
<body>
    
    <div class="nav">
        <div class="title"><h3>Parking attendants</h3><i class="fa fa-solid fa-envelope"></i></div>
        <div class="name"><p><?php echo $uname ?><i class="fa fa-admin"></i></p></div>
    </div>

  

    <form class="msg" method="post" action="php/del_pa.php" >
        <table>
            <tr> 
                <th><h4></h4></th>
                <th><h4>First Name</h4></th>
                <th><h4>Last Name</h4></th>
                <th><h4>Contact</h4></th>
                <th><h4>Email</h4></th>
                <th><h4>Gender</h4></th>
                <th><h4>Password</h4></th>
            </tr>

            <?php 
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc()){
                    echo" <tr>
                    <td><input type='checkbox' name='checked[]' value='".$row['pa_id']."'></td>
                    <td>".$row['fname']."</td>
                    <td>".$row['lname']."</td>
                    <td>".$row['contact']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['gender']."</td>
                    <td>".$row['password']."</td>
                </tr>";
            
                }
            }
            
            ?>
           
        </table>
        <div class="bt">
        <button type="submit" onclick="rempa()" name="rem">remove</button>
        </div>
        </form>

  

</body>
</html>