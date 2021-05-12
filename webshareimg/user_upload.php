<?php

include_once('dbconn.inc.php');

$conn = init();

         $insert_user = "INSERT INTO `si_admin` (`id`, `email`, `password`, `username`, `phone`, `privilege_id`) VALUES (NULL, '".$_POST['user_email']."', '".$_POST['user_password']."', '".$_POST['username']."', '".$_POST['user_phone']."', '2')";
  
          $ret_insert_user= mysqli_query($conn, $insert_user); 

   header("Location: index.php");    

  close($conn); 
?>