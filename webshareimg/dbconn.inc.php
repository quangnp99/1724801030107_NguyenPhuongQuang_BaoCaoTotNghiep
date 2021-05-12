
<?php



function init()
{
	$servername = "localhost";
	$username = 'root';
	$password = '';
	$dbname = "image_manager";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
	   die('Kết nối thất bại:'.mysqli_connect_error());
	} 
	return $conn;
}

function close($conn)
{
     mysqli_close($conn);
}


?>


