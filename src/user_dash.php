<?php

session_start();
require_once("php/connection.php");
$id=$_SESSION['id'];
$sql="select * from user where uid='$id'";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc())
    {
        $uname=$row["fname"];
        $lname=$row["lname"];
        $nic=$row["NIC"];
        $cont=$row["contact"];
        $mail=$row["email"];
        $gen=$row["gender"];
        $pass=$row["password"];
    }
}             



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash.css">
    <script src="js/dash.js"></script>
    <script src="https://use.fontawesome.com/b9d79ea055.js"></script>	
	  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="js/dash.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="main">
    <div class="header_r">
        <div class="container_r">
            <div class="navbar_r">
                <div class="logo_r">
                    <img src="images/logo.jpg" width="125px">
                    <h3 class="usrn" id="un" name="usrn"><?php echo $uname?></h3>

                </div>
                <nav>
                    <ul id="menuitems_r">
                        <li><a href="">Home</a></li>
                        <li><a href="contactUs.php">Contact us</a></li>
                        <li><a href="AboutUs.html">About</a></li>
                        <li><a href="index.html">Logout</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menuicon_r" onclick="menutoggle()">
            </div>
        </div>
    </div>

    <div class="container1" id="contain1">
            
        <h2  class="heading">MY Profile</h2>
        <div class="pro_content">
            <img src="images/prof.png" alt="">
            <div class="u_details">
                <form action="">
            <div>
              <label >First Name </label>
			  <input type="text" value="<?php echo $uname; ?>" readonly>

			</div>

            <div>
              <label >Last Name</label>
			  <input type="text"  value="<?php echo $lname; ?>" readonly>
			</div>
            
            <div>
              <label >NIC</label>
			  <input type="text"  value="<?php echo $nic; ?>" readonly>
			</div>

            <div>
              <label >Contact</label>
			  <input type="text"  value="<?php echo $cont; ?>" readonly>
			</div>

            <div>
              <label >Email</label>
			  <input type="text"  value="<?php echo $mail; ?>" readonly>
			</div>
            
            <div>
              <label >Gender</label>
			  <input type="text"  value="<?php echo $gen; ?>" readonly>
			</div>
        
        </form>

         </div>
                     
            </div>

            <div class="btn">
            <a href="edit_user.php"><button>Edit</button></a>
            </div>

        </div>
        <div class="add">
            
        </div>
    </div>

    <div class="container3">

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
                    <img src="images/cres.png" alt="">
                    <p><b>Cancel Bookings</b><br>
                    click here to Cancel <br>Bookings</p>
                    <a href="del_reserve.php"><button>view</button></a>
                </div>

                <div class="card">
                    <img src="images/his.jpg" alt="">
                    <p><b>View Bookings</b><br>
                    click here to view <br>Bookings</p>
                    <a href="booking.php"><button>view</button></a>
                </div>
            </div>
</div>
</div>

<div class="testimonials">

<h2  class="heading">Testimonials</h2>
<div class="tcards">
<div class="test">
<div class="revs">
<div class="icon">
    <img src="images/test.jpg" alt="">
    <h5>David</h5>
</div>
<div class="para">
    <p>Quick and Convenient: Booking parking online was a breeze with this service. I found a spot near my destination in no time, and the process was straightforward. Will definitely use it again!
        <br><i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star-half" aria-hidden="true"></i>
      </p>
</div>

</div>

</div>   

<div class="test">
<div class="revs">
<div class="icon">
<img src="images/test2.png" alt="">
<h5>Rebecca</h5>
</div>
<div class="para">
<p>Reliable and Stress-Free: I was skeptical about booking parking online at first, but this service proved me wrong. Not only did I secure a spot easily, but the directions provided were accurate, making my trip hassle-free
    <br><i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star-half" aria-hidden="true"></i>
  </p>
</div>

</div>

</div>   
<div class="test">
<div class="revs">
<div class="icon">
<img src="images/test.jpg" alt="">
<h5>Tom</h5>
</div>
<div class="para">
<p>Great Value for Money: Compared to the headache of driving around searching for parking, this online reservation service saved me both time and money. 
    <br><i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star-half" aria-hidden="true"></i>
  </p>
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