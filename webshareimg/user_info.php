<?php 
session_start();
include_once('dbconn.inc.php');

$conn = init();



 
    $sql = 'SELECT si_admin.*, SUM(view) AS TongView, SUM(like_image) AS TongLike FROM si_admin LEFT JOIN si_image ON si_admin.id = si_image.id_user WHERE si_admin.id='. $_REQUEST['id_user_info'].' GROUP BY si_admin.id'; 
    $retval= mysqli_query($conn, $sql);

    if(mysqli_num_rows($retval) > 0){  
       while($row = mysqli_fetch_assoc($retval)){  


?>

<!DOCTYPE html>
 <html lang="en">
            <head>
              <title>Website chia sẻ ảnh trực tuyến</title>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                          
                          
                          <link rel="stylesheet" href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1557239464/easyzoom.css" />
                          
                          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
                          <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1557239478/easyzoom.js"></script>
                          <script src='https://kit.fontawesome.com/a076d05399.js'></script>

 <style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>



            </head>
            <body>
             <div>
              <?php
                  include_once('nav.php');
              ?>
            </div>
                    <!-- photo details -->

  <div class="row">
    <div class="col-4">
      <form action="user_avatar.php" method="POST" enctype="multipart/form-data">
        <img src=" <?php echo  $row['url_avatar'] ?>" name="avatar"  class="img-thumbnail">
        <?php
          if (isset($_SESSION['id_admin']) && ($_SESSION['id_admin'] == $_REQUEST['id_user_info'])) {
          ?>
        <div class="form-group">
          <input type="hidden" value="<?php echo $row['id'] ?>" name="id_user_info">
          <input type="file" class="form-control-file" name="url_avatar">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="upload">
        <?php
          }
        ?>
      </form>
      
    </div>
    <div class="col-4">
      <form class="form-inline" action="user_info_update.php" method="POST">
        <input type="hidden" value="<?php echo $row['id'] ?>" name="id_user_info">
          <!-- hien -->
          <div class="form-group mb-2">
            <input type="text" readonly class="form-control-plaintext" value="Id:">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <input type="text" readonly class="form-control" value="<?php echo $row['id']?>">
          </div>
          <?php
            if (isset($_SESSION['id_admin']) && ($_SESSION['id_admin'] == $_REQUEST['id_user_info'])) {
               # code...
              
          ?>
          <!-- start TEN NGUOI DUNG -->
          <div class="form-group mb-2">
            <input type="text" readonly class="form-control-plaintext" value="Tên người dùng:">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <input type="text" name="username" class="form-control" value="<?php echo $row['username']?>">
          </div>

          <!--end TEN NGUOI DUNG -->

          <!--start email -->

          <div class="form-group mb-2">
            <input type="text" readonly class="form-control-plaintext" value="Email:">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <input type="text" name="email" class="form-control" value="<?php echo $row['email']?>">
          </div>

          <!-- end email -->



          <div class="form-group mb-2">
            <input type="text" readonly class="form-control-plaintext" value="Mật khẩu:">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <input type="text" name="password" class="form-control" value="<?php echo $row['password']?>">
          </div>

          <div class="form-group mb-2">
            <input type="text" readonly class="form-control-plaintext" value="Số điện thoại:">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <input type="text" name="phone" class="form-control" value="<?php echo $row['phone']?>">
          </div>
          <?php
            } else { 
          ?>

                   <!-- star AN -->

          <div class="form-group mb-2">
            <input type="text" readonly class="form-control-plaintext" value="Tên người dùng:">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <input type="text" readonly name="username" class="form-control" value="<?php echo $row['username']?>">
          </div>


          <div class="form-group mb-2">
            <input type="text" readonly class="form-control-plaintext" value="Email:">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <input type="text" readonly name="email" class="form-control" value="<?php echo $row['email']?>">
          </div>

          <div class="form-group mb-2">
            <input type="text" readonly class="form-control-plaintext" value="Số điện thoại:">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <input type="text" readonly name="phone" class="form-control" value="<?php echo $row['phone']?>">
          </div>
          <?php
          }
          ?>

          <!-- end AN -->

          <div class="form-group mb-2">
            <input type="text" readonly class="form-control-plaintext" value="Tổng lượt xem:">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <input type="text" readonly class="form-control" value="<?php echo $row['TongView']?>">
          </div>

          <div class="form-group mb-2">
            <input type="text" readonly class="form-control-plaintext" value="Tổng lượt thích:">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <input type="text" readonly class="form-control" value="<?php echo $row['TongLike']?>">
          </div>

          <!-- end hien -->

 
            <?php
              if (isset($_SESSION['id_admin']) && ($_SESSION['id_admin'] == $_REQUEST['id_user_info']))  {
                echo '<input  class="btn btn-primary" type="submit" name="submit" value="Cập nhật">';
              }
            ?>
            

          
      </form> 
             
    </div>
    <div class="col-4">
      <p class="text-align" > Đề xuất</p>
      <button type="submit" class="bn_avatar"><img src=" https://phunugioi.com/wp-content/uploads/2019/10/anh-avatar-chat-cho-nu.jpg"  alt="Avatar" class="avatar"></button>
      <button type="submit" class="bn_avatar"><img src=" https://upanh123.com/wp-content/uploads/2020/12/tai-anh-anime-ve-lam-avatar10.jpg"  alt="Avatar" class="avatar"></button>
      <button type="submit" class="bn_avatar"><img src=" https://scr.vn/wp-content/uploads/2020/07/%E1%BA%A2nh-c%E1%BA%B7p-%C4%91%E1%BA%B9p-ng%E1%BA%A7u-n%E1%BB%AF.jpg"  alt="Avatar" class="avatar"></button>

        <style type="text/css">
           .avatar {
              vertical-align: middle;
              width: 50px;
              height: 50px;
              border-radius: 50%;
            }
          .bn_avatar{
            background-color: Transparent;
            background-repeat:no-repeat;
            border: none;
            cursor:pointer;
            overflow: hidden;
            outline:none;
          }

         </style>

    </div>
  </div>


            </body>
  <?php
    include_once('footer.php');
  ?>

</html>
  
<?php 

      } //end of while  
    } else{  
      echo "0 results";  
    }  
          

  close($conn); 
?>    
