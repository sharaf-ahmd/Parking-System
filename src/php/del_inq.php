<?php
session_start();
require_once("connection.php");

if(isset($_POST['remove']) && isset($_POST['checked'])) {
    foreach($_POST['checked'] as $checked_id) {
        $checked_id = intval($checked_id); 
        $sql = "DELETE FROM inquiry WHERE in_id = $checked_id";
        $conn->query($sql);
    }
    header("location:../inquiries.php");
    exit();
} else {
    header("location:../inquiries.php");
    exit();
}

?>
<?php 
