<?php
session_start();
include_once('dbconn.inc.php');

$conn = init();

	
 $sotien = $_POST['money'];
 $gia = $_POST['price'];

 if ($sotien > $gia) {
 	$sodu = $sotien - $gia;
 	$sql = "UPDATE si_admin set money='".$sodu."' where id='".$_SESSION['id_admin']."'";
 	mysqli_query($conn, $sql);
 	$sql_sl = 'SELECT  si_image.* FROM si_image WHERE id='.$_POST["id"];
 	$retval= mysqli_query($conn, $sql_sl);
    $_SESSION['si_admin']="";
    if(mysqli_num_rows($retval) > 0){  
       while($row = mysqli_fetch_assoc($retval)){
       		echo '<a href ="'.$row['url_vip'].'" download>Vip</a>';
       } //end of while  
    } else{  
      echo "0 results";  
    }  
          

/* 	echo '<a href ="" download>Vip</a>';*/
 } else{
 	echo "Số tiền không đủ";
 }


  close($conn);
?>