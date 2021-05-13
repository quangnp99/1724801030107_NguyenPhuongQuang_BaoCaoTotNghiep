<?php
session_start();
include_once('dbconn.inc.php');

$conn = init();
  
  if(isset($_POST['submit'])) {
      $anh = isset($_POST['url_avatar']) ? $_POST['url_avatar'] : '';
      $picture = $_FILES['url_avatar']['name'];
      $tmp_name = $_FILES['url_avatar']['tmp_name'];
      $time = time();
      $tmp = explode('.', $picture);
      $duoifile = end($tmp);
      $tenfilemoi = 'url_avatar-'.$time.'.'.$duoifile;
      $path_name_avatar = $_SERVER["DOCUMENT_ROOT"].'/webshareimg/uploads_avatar/'.$tenfilemoi;
      $info = getimagesize($tmp_name);
      if(!$info) {
        // ko hop le
        // echo '
        // <script>
        // alert("Lỗi đuôi file ảnh");
       
        // </script>
        // ';
          

        header("Location: user_info.php?error=true");
        exit();
}






/*      compressImage($tmp_name,$path_name_compress,60);*/
      $path_upload = move_uploaded_file($tmp_name, $path_name_avatar);


      
    $sql = "UPDATE si_admin set url_avatar= 'uploads_avatar/".$tenfilemoi."' where id='".$_SESSION['id_admin']."'";

    mysqli_query($conn, $sql);  
    header("Location: user_info.php?id_user_info=".$_POST['id_user_info']);   

  }



  close($conn); 

  // Compress image
  function compressImage($source, $destination, $quality) {
   
    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
      $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
      $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
      $image = imagecreatefrompng($source);

    imagejpeg($image, $destination, $quality);

  }
?>
