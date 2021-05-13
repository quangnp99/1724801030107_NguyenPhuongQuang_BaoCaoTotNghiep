<?php
session_start();
include_once('dbconn.inc.php');

$conn = init();

  if(isset($_POST['submit'])) {
      $anh = isset($_POST['hinhanh']) ? $_POST['hinhanh'] : '';
      $picture = $_FILES['hinhanh']['name'];
      $tmp_name = $_FILES['hinhanh']['tmp_name'];
      $time = time();
      $tmp = explode('.', $picture);
      $duoifile = end($tmp);
      $tenfilemoi = 'HinhAnh-'.$time.'.'.$duoifile;
      $path_name_compress = $_SERVER["DOCUMENT_ROOT"].'/webshareimg/uploads_compress/'.$tenfilemoi;
      $info = getimagesize($tmp_name);
      if(!$info) {
        // ko hop le
        // echo '
        // <script>
        // alert("Lỗi đuôi file ảnh");
       
        // </script>
        // ';
          

        header("Location: index.php?error=true");
        exit();
      } 


      $image_vip = hash("md5", "uploads/$tenfilemoi");
      $path_name_vip = $_SERVER["DOCUMENT_ROOT"].'/webshareimg/uploads/'.$image_vip.'.'.$duoifile;


      compressImage($tmp_name,$path_name_compress,30);
      $path_upload = move_uploaded_file($tmp_name, $path_name_vip);
      
 
      $insert = "INSERT INTO `si_image` (`id`, `name`, `description`, `status`, `tag` , `price` ,`url`, `id_user`, `url_vip` ) VALUES (NULL, '".$_POST['image_name']."', '".$_POST['category_image_desc']."', '".$_POST['status_image']."', '".$_POST['tag_image']."','".$_POST['price_image']."', 'uploads_compress/$tenfilemoi', '".$_SESSION['id_admin']."', 'uploads/".$image_vip.".".$duoifile."'  )";   
      echo $insert;
      
      $ret_insert = mysqli_query($conn, $insert);  
   header("Location: index.php?check_user=true");    
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

