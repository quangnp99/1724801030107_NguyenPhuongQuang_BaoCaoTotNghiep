<?php 
include_once('dbconn.inc.php');


$conn = init();
$sql = 'SELECT * FROM si_image  WHERE status=1';  
$retval= mysqli_query($conn, $sql); 
 

 
 

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
                          <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1557239478/easyzoom.js"></script>
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
             <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <div class="container-fluid">
        <a href="#" class="navbar-brand mr-3">Conect Me</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Trang chủ</a>
                <a href="#" class="nav-item nav-link">Khám phá</a>
                <a href="#" class="nav-item nav-link">Xu hướng</a>
                <a href="#" class="nav-item nav-link">Liên hệ</a>
            </div>
            <div class="navbar-nav ml-auto">
                <form action="search.php" method="POST" class="form-inline " style="float: right;">
                    <div class="form-group mr-2">
                        <label class="sr-only" for="inputSearch">Tìm kiếm</label>
                        <input type="search" class="form-control" id="inputSearch" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-secondary"><span class="fa fa-search"></span> Search</button>
                </form>
                <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-cloud-upload"></span>
                </button>
                <a href="user_registration.php" class="nav-item nav-link">Register</a>
                <a href="admin_login.php" class="nav-item nav-link">Login</a>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar">
                    <style type="text/css">
                      .avatar {
                        vertical-align: middle;
                        width: 30px;
                        height: 30px;
                        border-radius: 50%;
                      }
                    </style>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">Action</button>
                    <button class="dropdown-item" type="button">Another action</button>
                    <button class="dropdown-item" type="button">Something else here</button>
                  </div>
                </div>
                <?php
   
                  if (isset($_GET["check_user"])) {
                    if ($_GET["check_user"] == "true" ) {
                      echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Upload</button> ';
                    }
                  }
                ?>
                 <!-- Button to Open the Modal -->
                

                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Tải lên ảnh của bạn</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button> 
                      </div>

                      
                      
                      <!-- Modal body -->
                      <form action="admin_upload.php" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                                    <label for="exampleInputEmail1">Tên ảnh</label>
                                    <input type="text" name="image_name" class="form-control" id="exampleInputEmail1" placeholder="Tên ảnh">
                                </div>
                                <div class="form-group">
                                    <label >Mô tả</label>
                                    <textarea style="resize: none"rows="8" class="form-control" name="category_image_desc" id="ckeditor3" placeholder="Mô tả"></textarea>
                                </div>
                                <div class="form-group">
                                    <label >Trạng thái</label>
                                    <input  style="resize: none"rows="8" class="form-control" name="status_image"  placeholder="Trạng thái">
                                </div>
                                <div class="form-group">
                                    <label >Thẻ tag</label>
                                    <input style="resize: none"rows="8" class="form-control" name="tag_image"  placeholder="tag">
                                </div>
                          
                          
                          <div class="bot">
                              Hình ảnh: <input type="file" name="hinhanh"></div></br>  
                          <?php
                            if(isset($anh) && $anh == '') {
                                echo "<strong style='color:red'> Vui lòng chọn ảnh</strong>";
                            }
                         ?>
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        
                        <input id="upload" class="btn btn-primary" type="submit" name="submit" value="upload">
                         
                        </form> 
                        
            </div> <!-- navbar-nav ml-auto -->
        </div>
    </div>    
</nav>
                    <!-- Photo Grid -->
 <div class="container">
  <div class="row">
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div>
            </body>

        <footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>

</html>
            
<?php 
  close($conn); 
 ?>

 <script type="text/javascript">
  $(document).ready(function(){
    $('#upload').click(function(){
      $('#show_image').html('hello');
    });
  });
</script>