<?php 
include_once('dbconn.inc.php');

$conn = init();

$sql = "UPDATE si_image set name='".$_POST['name']."', description='".$_POST['description']."' where id='".$_POST['id']."'";
mysqli_query($conn, $sql);
header("Location: admin_layout.php");

close($conn);

?>