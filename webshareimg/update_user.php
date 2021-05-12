<?php 
include_once('dbconn.inc.php');

$conn = init();


$sql = "UPDATE si_admin set username='".$_POST['user_name']."', email='".$_POST['email"']."', password='".$_POST['password"']."' where id='".$_POST['id']."'";
mysqli_query($conn, $sql);
header("Location: admin_layout.php");

close($conn);

?>