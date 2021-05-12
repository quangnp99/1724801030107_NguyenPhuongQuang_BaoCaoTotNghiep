<?php 
session_start();
include_once('dbconn.inc.php');

$conn = init();

$sql = "UPDATE si_admin set username='".$_POST['username']."', email='".$_POST['email']."', password='".$_POST['password']."', phone='".$_POST['phone']."' where id='".$_SESSION['id_admin']."'";

    mysqli_query($conn, $sql);  
header("Location: user_info.php");

close($conn);

?>