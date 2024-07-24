<?php

require_once("php/connection.php");
if(isset($_POST['submit'])){
$name=$_POST['name'];
$msg=$_POST['message'];

$sql="INSERT reply VALUES(' ','$name','$msg')";
$result=$conn->query($sql);
if($result){
    echo" ";
 }else{
     echo "Error: " . $sql . "<br>" . $conn->error;
 }

 $sql2="UPDATE inquiry set status='Replied' where name='$name'";
 $result2=$conn->query($sql2);
if($result){
    echo" ";
 }else{
     echo "Error: " . $sql . "<br>" . $conn->error;
 }


}





?>
<html>
    <head>
        <title>Reply</title>
        <script src="js/dash.js"></script>
    <style>
        .input{
            width: 400px;
            padding: 20px;
            margin:5px;
            background-color: #f9f9f9;
            border-radius: 5px;
            border:none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align:center;
            
        }
        body{
            background-color:#c2c8c5;
        }
        .msg{
            margin:auto;
            width:90%;
            
            background-color:grey;
            border-radius:10px;
            padding:20px;
        }
        form{
            margin:auto;
        }
        img{
            height: 100px;
            width:100px;
        }
        h2{
            text-align:center;
        }
        .message{
            margin:5px;
            border-radius: 5px;
            text-align:center;
            width:400px;
        }
        .submit{
            width:100px;
            border:none;
            cursor:pointer;
            padding:10px;
        }
        .submit:hover{
            background-color:#555;
            color:white;
        }
        *{
    /*
#5A96DB root
hsl(0, 0%, 100%) white
hsl(210,20%,15%) bluish black
#34B7F1*/
 margin:0;
 padding: 0;
 box-sizing: border-box;

}
.navbar_r{
    display:flex;
    align-items:center;
    padding: 20px;
}
nav{
    flex:1;
    text-align:right;
}
nav ul{
    display:inline-block;
    list-style-type:none ;

}
nav ul li{
    display:inline-block;
    margin-right:20px;
}
nav ul li a{
    text-decoration:none;
    color:hsl(0, 0%, 100%);
    background-color: hsl(210,20%,15%);
    padding: 10px  ;
    border-radius: 5px;
    
    
    
}
nav ul li a:hover{
    color: #34B7F1;
}

.container_r{
    max-width:1300px;
    margin: auto;
    padding-left:25px;
    padding-right:25px;
}
.menuicon_r{
    width:29px;
    margin-left:20px;
    display:none;
    
}
.logo_r img{
    border-radius: 20px;
}
.submit{
    margin: auto;
    cursor: pointer;
    color: whitesmoke;
    width: 5rem;
    padding : 6px ;
    background: rgb(118, 62, 62);
    border: 1px solid #4A707A;
    border-radius: 20px;
    box-shadow: 0px 10px 10px rgb(0, 0, 0, 0.5);
	margin-top: 1em;
}

.submit:hover{
    transform: translateY(-3px);
    transition: 0.5s;
}


       

    </style>
    </head>

    <body>
    <br><br>
        <h2>Reply Inquiries</h2>
        <br><br>
        <div class="msg">
            <center>
            <img src="images/rep.png" alt="Reply icon">
           <br><br>
            <form action="" method="post">
            <input type="text" name="name"   placeholder="Name" class="input" required>
            <br>
        
            <textarea  class="message" name="message" cols="30" rows="10" placeholder="message"></textarea>
            <br><br>
            <input type="submit" onclick="reply()" name="submit" class="submit">
        </form>

            </center>
          
            
        </div>
        
    


    </body>
</html>