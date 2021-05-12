<?php
session_start();

include_once('dbconn.inc.php');

$conn = init();



if (isset($_POST["id"]) && $_POST["flag"] == "like") {
  $sql ='UPDATE si_image SET like_image = like_image + 1 WHERE id = '.$_POST["id"].'';
    mysqli_query($conn, $sql);
   $sql = 'SELECT * FROM si_image WHERE id='.$_POST["id"];
/*   echo $sql;*/
  $retval= mysqli_query($conn, $sql);
   if(mysqli_num_rows($retval) > 0){
    while($row = mysqli_fetch_assoc($retval)){  
      echo $row['like_image'];
      } //end of while  
    } else{  
      echo "0 results";  
    }  


  $sql = 'INSERT INTO si_like (id_image, id_user) VALUES ('.$_POST["id"].','.$_SESSION['id_admin'].')';
  $ret_like= mysqli_query($conn, $sql);






} else {
  $sql ='UPDATE si_image SET like_image = like_image - 1 WHERE id = '.$_POST["id"].'';
    mysqli_query($conn, $sql);
   $sql = 'SELECT * FROM si_image WHERE id='.$_POST["id"];
  $retval= mysqli_query($conn, $sql);
   if(mysqli_num_rows($retval) > 0){
    while($row = mysqli_fetch_assoc($retval)){  
      echo $row['like_image'];
      } //end of while  
    } else{  
      echo "0 results";  
    }  

$sql = 'DELETE FROM si_like WHERE id_image='.$_POST["id"].' and id_user='.$_SESSION['id_admin'];
  $ret_like= mysqli_query($conn, $sql);
   
}

close($conn);
?>