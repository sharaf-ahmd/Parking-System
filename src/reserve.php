<?php 
session_start();
require_once("php/connection.php");
$id=$_SESSION['id'];

$sql="select * from user where uid=$id";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc()){
        $name=$row['fname'];
        $_SESSION['name']=$name;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/dash.js"></script>
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
                        <li><a href="">Login</a></li>
                        <li><a href="">Register</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menuicon_r" onclick="menutoggle()">
            </div>
            
        </div>

    </div>
<br><br>
<form action="php/process.php" method="post" >
    <div class="row_r">
        <div class="col_r_r">
            <br>
            <h4>Select date</h4>
            <br>
            <input type="date" name="date">

        </div>
        <!--
        <div class="col_r_r">
            <br>
            <h4>Select Arrival time</h4>
            <br>
            <input type="time" name="arrivaltime" >
        </div>
        <div class="col_r_r">
            <br>
            <h4>Select Departure time</h4>
            <br>
            <input type="time" name="departuretime" >
        </div>-->

    </div>
    <br><br>
    <div class="servicecontainer_r_r">
        <table>
            <tr>
                <td class="b1_r_r l1_RR">
                    <input type="radio" name="slot" value="01" class="radio" id="a1">
                    <label for="a1">01</label>
                    
                </td>
                <td></td>
                <td class="b1_r_r ">
                <input type="radio" name="slot" value="06" class="radio" id="a6">
                    <label for="a6" >06</label>
                </td>
                <td class="b1_r_r l1_RR">
                <input type="radio" name="slot" value="11" class="radio" id="a11">
                    <label for="a11" >11</label>
                </td>
                <td></td>
                <td class="b1_r_r ">
                <input type="radio" name="slot" value="16" class="radio" id="a16">
                    <label for="a16" >16</label>
                </td>
                <td class="b1_r_r l1_RR">
                <input type="radio" name="slot" value="21" class="radio" id="a21">
                    <label for="a21" >21</label>
                </td>
                <td></td>
                <td class="b1_r_r r1_RR">
                <input type="radio" name="slot" value="26" class="radio" id="a26">
                    <label for="a26" >26</label>
                </td>

            </tr>
            
            <tr>
                <td class="b1_r_r l1_RR">
                <input type="radio" name="slot" value="02" class="radio" id="a2">
                    <label for="a2" >02</label>
                </td>
                <td></td>
                <td class="b1_r_r">
                <input type="radio" name="slot" value="07" class="radio" id="a7">
                    <label for="a7" >07</label>
                </td>
                <td class="b1_r_r l1_RR">
                <input type="radio" name="slot" value="12" class="radio" id="a12">
                    <label for="a12" >12</label>
                </td>
                <td></td>
                <td class="b1_r_r">
                <input type="radio" name="slot" value="17" class="radio" id="a17">
                    <label for="a17" >17</label>
                </td>
                <td class="b1_r_r l1_RR">
                <input type="radio" name="slot" value="22" class="radio" id="a22">
                    <label for="a22" >22</label>
                </td>
                <td></td>
                <td class="b1_r_r r1_RR">
                <input type="radio" name="slot" value="27" class="radio" id="a27">
                    <label for="a27" >27</label>
                </td>
    
            </tr>
            <tr>
                <td class="b1_r_r l1_RR">
                <input type="radio" name="slot" value="03" class="radio" id="a3">
                    <label for="a3" >03</label>
                </td>
                <td></td>
                <td class="b1_r_r">
                <input type="radio" name="slot" value="08" class="radio" id="a8">
                    <label for="a8" >08</label>
                </td>
                <td class="b1_r_r l1_RR">
                <input type="radio" name="slot" value="13" class="radio" id="a13">
                    <label for="a13" >13</label>
                </td>
                <td></td>
                <td class="b1_r_r">
                <input type="radio" name="slot" value="18" class="radio" id="a18">
                    <label for="a18" >18</label>
                </td>
                <td class="b1_r_r l1_RR">
                <input type="radio" name="slot" value="23" class="radio" id="a23">
                    <label for="a23" >23</label>
                </td>
                <td></td>
                <td class="b1_r_r r1_RR">
                <input type="radio" name="slot" value="28" class="radio" id="a28">
                    <label for="a28" >28</label>
                </td>
    
            </tr>
            <tr>
                <td class="b1_r_r l1_RR">
                <input type="radio" name="slot" value="04" class="radio" id="a4">
                    <label for="a4" >04</label>
                </td>
                <td></td>
                <td class="b1_r_r">
                <input type="radio" name="slot" value="09" class="radio" id="a9">
                    <label for="a9" >09</label>
                </td>
                <td class="b1_r_r l1_RR">
                <input type="radio" name="slot" value="14" class="radio" id="a14">
                    <label for="a14" >14</label>
                </td>
                <td></td>
                <td class="b1_r_r">
                <input type="radio" name="slot" value="19" class="radio" id="a19">
                    <label for="a19" >19</label>
                </td>
                <td class="b1_r_r l1_RR">
                <input type="radio" name="slot" value="24" class="radio" id="a24">
                    <label for="a24" >24</label>
                </td>
                <td></td>
                <td class="b1_r_r r1_RR">
                <input type="radio" name="slot" value="29" class="radio" id="a29">
                    <label for="a29" >29</label>
                </td>
    
            </tr>
            <tr>
                <td class="l1_RR">
                <input type="radio" name="slot" value="05" class="radio" id="a5">
                    <label for="a5" >05</label>
                </td>
                <td></td>
                <td>
                <input type="radio" name="slot" value="10" class="radio" id="a10">
                    <label for="a10" >10</label>
                </td>
                <td class="l1_RR">
                <input type="radio" name="slot" value="15" class="radio" id="a15">
                    <label for="a15" >15</label>
                </td>
                <td></td>
                <td>
                <input type="radio" name="slot" value="20" class="radio" id="a20">
                    <label for="a20" >20</label>
                </td>
                <td class="l1_RR">
                <input type="radio" name="slot" value="25" class="radio" id="a25">
                    <label for="a25" >25</label>
                </td>
                <td></td>
                <td class="r1_RR">
                <input type="radio" name="slot" value="30" class="radio" id="a30">
                    <label for="a30" >30</label>
                </td>
    
            </tr>
        </table>
    
        

    </div>
    <br><br>
    <center>
        
        <input type="submit" class="reserve_btn" name="submit" value="Reserve">
    </center>
    </form>
    
    


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