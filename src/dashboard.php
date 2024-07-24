<?php
session_start();
$id=$_SESSION['id'];
require_once("php/connection.php");

$sql1="select * from admin where admin_id='$id'";
$result=$conn->query($sql1);
if($result->num_rows>0){
    while($row=$result->fetch_assoc())
    {
        $uname=$row["fname"];
    }};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash.css">
    <script src="https://use.fontawesome.com/b9d79ea055.js"></script>	
    <script src="js/dash.js"></script>
	  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Document</title>
</head>
<body>
    <div class="main">
    <div class="header_r">
        <div class="container_r">
            <div class="navbar_r">
                <div class="logo_r">
                    <img src="images/logo.jpg" width="125px">
                    <h3 class="usrn" id="un"><?php echo $uname ?></h3>

                </div>
                <nav>
                    <ul id="menuitems_r">
                        <li><a href="">Home</a></li>
                        <li><a href="contactUs.php">Contact us</a></li>
                        <li><a href="AboutUs.html">About</a></li>
                        <li><a onclick="log()" href="">Logout</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menuicon_r" onclick="menutoggle()">
            </div>
        </div>
    </div>

    <div class="container1" id="contain1">
        <div class="table">
            
        <h2  class="heading">Reservations</h2>
        <div class="content">
            <table>
            <tr>
                <th>Customer</th>
                <th>Date</th>
                <th>Slot</th>
                <th>Price</th>
                </tr>
                <?php
                $sql="select * from reservations";
                $result2=$conn->query($sql);
                if($result2->num_rows>0){
                    while($row=$result2->fetch_assoc())
                    {
                        echo"<tr>
                        <td>".$row["customer"]."</td>
                        <td>".$row["date"]."</td>
                        <td>".$row["slot"]."</td>
                        <td>".$row["price"]."</td>
                        </tr>";
                    }
                }                 
                else{
                    echo"no value found";
                }  
                $conn->close();             
                ?>


            </table>
            </div>

            <div class="btn">
            <a href="viewadmin.php"><button>View all<i class="fa fa-arrow-circle-right"></i></button></a>
            </div>

        </div>
        <div class="add"></div>
    </div>

    <div class="container2">
        <div class="pa">
            <div class="heading2">
                <h2>Manage Parking Attendant</h2>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="images/apa.png" alt="">
                    <p><b>Register parking<br> attendant</b><br>
                    click here to register parking attendants </p>
                    <a href="register_pa.php"><button>Register</button></a>
                </div>

                <div class="card">
                    <img src="images/ra.jpg" alt="">
                    <p><b>Remove parking<br> attendant</b><br>
                    click here to remove parking attendants </p>
                    <a href="rem_pa.php"><button>Remove</button></a>
                </div>
            </div>
        </div>

       



        <div class="pa">
            <div class="heading2">
                <h2>Edit Profile</h2>
            </div>
            <div class="cards">
            <div class="card">
                    <img src="images/ep.png" alt="">
                    <p><b>Edit Profile<br></b><br>
                    click here to edit your profile </p>
                    <a href="edit_admin.php"><button>Edit</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container2">
    <div class="pa">
            <div class="heading2">
                <h2>Manage Reservations</h2>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="images/rs.png" alt="">
                    <p><b>Reserve Space</b><br>
                    click here to reserve <br>space </p>
                    <a href="reserve.php"><button>Reserve</button></a>
                </div>

                
                <div class="card">
                    <img src="images/his.jpg" alt="">
                    <p><b>View reservation</b><br>
                    click here to view <br>reservations </p>
                    <a href="viewadmin.php"><button>View</button></a>
                </div>
            </div>
            
        </div>

        <div class="pa">
            <div class="heading2">
                <h2>Manage Inquiries</h2>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="images/viq.png" alt="">
                    <p><b>Reply inquiries</b><br><br>
                    click here to view and reply inquiries</p>
                    <a href="reply.php"><button>Reply</button></a>
                </div>

                <div class="card">
                    <img src="images/deliq.png" alt="">
                    <p><b>Delete inquiries</b><br><br>
                    click here to delete inquiries</p>
                    <a href="inq.php"><button>Delete</button></a>
                </div>
            </div>
        </div>


    </div>



    </div>
    <div class="footer">
        <div class="foot">
        <P><h3>Follow us on</h3></P>
        <div class="socm"> 
   	 	 	    
                     <ul>
                        <a href="https://www.instagram.com/"> <li class="in"><i class="fa fa-instagram"></i></li></a>
                            <br>
                            <a href="https://web.whatsapp.com/"><li class="wa"><i class="fa fa-comments"></i></li></a>
                           <br>
                            <a href="https://twitter.com/"><li class="tw"><i class="fa fa-twitter"></i></li></a>
                             <br>
                            <a href="https://lk.linkedin.com/"><li class="li"><i class="fa fa-linkedin"></i></li></a>
                         </ul>
                      
   	 </div>
     <div class="text">
        <p>copyrights <i class="fa fa-copyright" aria-hidden="true"></i> all rights reserved  </p>
     </div>
    </div>
    
</div>

<script>
        var menu_r=document.getElementById("menuitems_r");
        var table=document.getElementById("contain1");
        menu_r.style.maxHeight="0px";
        function menutoggle(){
            if(menu_r.style.maxHeight=="0px")
            {
                menu_r.style.maxHeight="200px"
                table.style.marginTop="12rem"
            }
            else{
                menu_r.style.maxHeight="0px"
                table.style.marginTop="1rem"

            }
        }

</script>
</body>
</html>