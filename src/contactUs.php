<?php

require 'php/connection.php';

if(isset($_POST['send'])){

    $name = ($_POST['name']);
    $address = ($_POST['address']);
    $phone = ($_POST['phone']);
    $message = ($_POST['message']);

    $insert = "INSERT INTO inquiry(name, address, phone, message,status) VALUES('$name', '$address', '$phone', '$message','pending')";
    
    $result = $conn->query($insert);
    if($result)
    {
        echo "Successfully inserted!";
    }else
    {
        echo "Error occured!";
    }
    

};



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <link rel="stylesheet" href="css/contactStyles.css">
   <script src="js/dash.js"></script>

</head>
<body>
   
<div class="container">
   <h1>Contact Us</h1>
   <p>We are always ready to respond to your queries and help you.<br>Feel free to get in touch with us.</p>
    <div class="contact-box">
        <div class="contact-left">
            <h3>Send your request</h3>    
            <form action="" method="post">
               
                <div class="input-row">
                    <div class="input-group">
                        <label>Name</label>
                        <input type="text" name="name" required placeholder="Ben Stokes">
                        
                        <label>Address</label>
                        <input type="text" name="address" required placeholder="Kandy, Central">
                              
                        <label>Phone</label>
                        <input type="text" name="phone" required placeholder="+94 771234567">
                    </div>
                </div> 
                    

                    <label>Message</label>
                    <textarea row="5" name="message" placeholder="Type your message"></textarea>
                    
                    <input type="submit" onclick="cu()" name="send" value=Send class="btn">
        </div>            
        <div class="contact-right">
            <h3>Reach Us</h3>

            <table>
                <tr>
                    <td>E-mail</td>
                    <td>help@justpark.com</td>
                </tr>

                <tr>
                    <td>Phone</td>
                    <td>+94 771234567</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="phone">+94 812314567</td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td>Kandy, Central Province, Sri Lanka.</td>
                </tr>
            </table>
        </div>
                    
                    
                       
            </form>
    </div>
</div>

</body>
</html>