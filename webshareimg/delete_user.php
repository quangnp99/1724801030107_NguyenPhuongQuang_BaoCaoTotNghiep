<?php 
include_once('dbconn.inc.php');

$conn = init();

$sql = "DELETE from si_admin where id ='".$_POST['id']."'";

mysqli_query($conn, $sql);


close($conn);

?>