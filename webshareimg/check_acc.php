<?php 
session_start();

include_once('dbconn.inc.php');

$conn = init();

$sql = 'SELECT * FROM si_admin';  
$retval= mysqli_query($conn, $sql); 
$flag = false; 
$userAdminId = "";
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    
    if ($_POST['admin_email'] == $row['email'] && $_POST['admin_password'] == $row['password'] ) {
		$flag = true;
    $userAdminId = $row['id']; 
		break;
	} 
 } //end of while 
 if ($flag == false) {
  	header("Location: admin_login.php?check_login=false"); 
 	exit();
 }else{
  	if($row['privilege_id'] == 1){
      $_SESSION['id_admin'] = $userAdminId;
  		header("Location: admin_layout.php");

 		exit();
  	} else {
      $_SESSION['id_admin'] = $userAdminId;
  		header("Location: index.php?check_user=true"); 
 		exit();
  	}
  } 
 
}else{  
echo "0 results";  
}  
 mysqli_close($conn);	
			
	



?>