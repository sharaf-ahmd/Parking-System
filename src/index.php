<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/dash.js"></script>
    <link rel="stylesheet" href="css/home.css">
    <title>Document</title>
</head>
<body>
  
    <div class="header_r">
        <div class="container_r">
            <div class="navbar_r">
                <div class="logo_r">
                    <img src="images/logo.jpg" width="125px">


                </div>
                <nav>
                    <ul id="menuitems_r">
                        <li><a href="">Home</a></li>
                        <li><a href="">Contact us</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="user.html">Login</a></li>
                        <li><a href="register_user.php">Register</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menuicon_r" onclick="menutoggle()">
            </div>
            <div class="row_r">
                <div class="col1_r">
                    <h1>Reserve the <span>best</span>
                         Parking slot!</h1>
                    
                    <br>
                    <a href="user_sign.php" class="herobtn_r"><button>Reserve Now</button></a>

                </div>
                <div class="col2_r">
                    <img src="images/car-png--2000.png" class="hero" width="1010px">
                    
                </div>
            </div>
        </div>

    </div>
    
    <div class="servicecontainer_r">
        <h2 class="title_r">
            Our Services
        </h2>
        <div class="row_r">
            <div class="col_r">
                
                
                <h1>Need A safe Parking</h1>
                <br>
                <p>We have parking spaces available in Kandy! <br> Just search through our available parking spaces and select the <br> one that you need.</p>
                <br>
                <p>Get your own parking space in just 3 steps: search,book,park!</p>
                    <br><br><br>
                <a href="register_user.php">Register Now</a>
    
    
            </div>
            
            
        </div>
    </div>
<br>

    <div class="container_r">
        <hr><br>
            <div class="row_r">
                
                <div class="col22_r">
                    <h1>650+</h1>
                    <br>

                    <h4>Vehicles parked</h4>
                    
                </div>
                <div class="col22_r">
                    <h1>50+</h1>
                    <br>
                    <h4>Regular customers</h4>
                    
                    
                </div>
                <div class="col22_r">
                    <h1>1</h1>
                    <br>
                    <h4>Location</h4>
                    
                </div>
            </div>
            <br>
            <hr>
        
    </div>
    
<br><br>
    <div class="container_r">
        <h2 class="title_r">
            Why Choose us?
        </h2>
        <div class="c1">
            <div class="row_r">
            
                <div class="col3_r"><br><br>
                    <img src="images/istock-458706121.jpg" alt="">
                    <br><br>
                    <h3>No mess in the parking lot.</h3><br>
                    
                    <p>Better use of parking spaces.</p>
                    
                    
                </div>
                <div class="col3_r"><br><br>
                    <img src="images/istockphoto-1319743603-612x612.jpg" alt="">
                    <br><br>
                    <h3>Get to work on time.</h3><br>
                    
                    <p>Book a parking space from anywhere, anytime so you don't waste time on the road. </p>
                    
                    
                </div>
                <div class="col3_r"><br><br>
                    <img src="images/1-62.jpg" alt="">
                    <br><br><br><br>
                    <h3>Park with comfort.</h3><br>
                    
                    <p>Reservation is a easy as joinng a meeting.You can choose a specific spot and check whether it is occupied or not. </p>
                    
                </div>

            
            
        </div>
        <br><br>

        </div>

<br><br><br>

        <div class="container_r">
            
            <div class="row_r">
                <div class="col4_r">
                    <h1>Locate us.</h1>
                    
                    <br>
                    

                </div>
                <div class="col4_r">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6219861785376!2d80.7197392748898!3d7.283779092723535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae361519e722d45%3A0xc126b539402134f7!2sSLIIT%20KANDY%20UNI!5e0!3m2!1sen!2slk!4v1714308863635!5m2!1sen!2slk" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>
            </div>
<br><br>
<div class="footer" style='background-color:#5A96DB ;border-radius:20px 20px 0px 0px;color:white;text-align:center;'>
<br><br>
    <div class="row_r">
        
        <div class="footercol3">
            <h3>Useful links</h3>
            <br>
            <ul style='list-style-type:none;'>
                <li>Home</li>
                <li>login</li>
                <li>Register</li>
                <li>About Us</li>
            </ul>
            
        </div>
        <div class="footercol4" '>
            <h3>Follow us</h3>
            <br>

            <ul style='list-style-type:none;'>
                <li>facebook</li>
                <li>Instagram</li>
                <li>whatsapp</li>
                <li>Youtube</li>
            </ul>
            
        </div>
        
        
    </div>
    <br><br>
    <hr>
        <center><p class="copyright">copyright</p></center>
</div>
            
        
    
</div>
    
    
    

    


    




    <script>
        var menu_r=document.getElementById("menuitems_r");
        menu_r.style.maxHeight="0px";
        function menutoggle(){
            if(menu_r.style.maxHeight=="0px")
            {
                menu_r.style.maxHeight="200px"
            }
            else{
                menu_r.style.maxHeight="0px"
            }
        }
        
    </script>
</body>
</html>