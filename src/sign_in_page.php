<?php 
session_start();
include 'php/connection.php';
error_reporting(0);

if (isset($_POST['submit'])) {
	$uname = $_POST['username'];
	$password =($_POST['password']);
	

	$sql = "SELECT * FROM admin WHERE fname='$uname' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
        while($row=$result->fetch_assoc()) {
            $id=$row["admin_id"]; 
            $_SESSION['id']=$id;   
		    $_SESSION['name']=$uname;
    		header("Location: dashboard.php");
	}} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>

<html>
<head>
	    <title>Login</title>
        <link rel="stylesheet" href="css/sign.css">
    
    </head>
    <body>
        <div class="form-container">
            <form method="post" action="">
                <h3>Login Now</h3>
    
                <input type="text" name="username" required placeholder="e-mail address"><br>
                
                <input type="password" name="password" required placeholder="enter your password"><br>
                
                <input type="submit" value=login class="form-btn" value="submit" name="submit">
                <p>Do not have an account? <a href="#">register now</a></p>

            </form>
        </div>
    </body>
</html>