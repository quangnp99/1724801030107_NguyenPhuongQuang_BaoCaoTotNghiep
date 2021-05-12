<?php 
include_once('dbconn.inc.php');

$conn = init();

$sql = "DELETE from si_image where id ='".$_POST['id']."'";

mysqli_query($conn, $sql);


close($conn);

?>