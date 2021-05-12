<?php 
include_once('dbconn.inc.php');
$conn = init();


    





 
  
    
    



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


<!-- css user_registration -->
  <style type="text/css">
  .divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}

.bg-light {
  /*background-color: #9e9e9e!important;*/
  background: url(https://img.thuthuattinhoc.vn/uploads/2019/04/10/hinh-nen-man-hinh-may-tinh-may-anh-co_112252626.jpg);
}

</style>

<!-- end css user_re -->
            </head>
            <body>
             <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand mr-3"><img src="public/backend/images/logo.png" style=" width:100px; "></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse" style=" font-size: 20px;">
            <div class="navbar-nav" >
                <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                <a href="explore.php" class="nav-item nav-link">Khám phá</a>
                <a href="tendency.php" class="nav-item nav-link">Xu hướng</a>
                <a href="contact.php" class="nav-item nav-link">Liên hệ</a>
            </div>
            <div class="navbar-nav ml-auto">
                <form class="form-inline " style="float: right;">
                    <div class="form-group mr-2">
                        <label class="sr-only" for="inputSearch">Tìm kiếm</label>
                        <input type="search" class="form-control" id="inputSearch" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-secondary"><span class="fa fa-search"></span> Search</button>
                </form>
                <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-cloud-upload"></span>
                </button>
                                 <!-- Button to Open the Modal -->      
                        
            </div> <!-- navbar-nav ml-auto -->
        </div>
    </div>    
</nav>
                    <!-- registration-->

          <div id="id_registration"  class="card bg-light" >
<article class="card-body mx-auto" style="max-width: 400px; color: white; ">
  <h4 class="card-title mt-3 text-center">Create Account</h4>
  <p class="text-center">Get started with your free account</p>
  <p>
    <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
    <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
  </p>
  <p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
  <form action="user_upload.php" method="post" enctype="multipart/form-data">
  <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
     </div>
        <input name="username" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
     </div>
        <input name="user_email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    </div>
   
      <input name="user_phone" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
     <!-- form-group end.// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
        <input name="user_password" class="form-control" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
        <input class="form-control" placeholder="Repeat password" type="password">
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button id="message" type="submit" class="btn btn-primary btn-block"> Create Account  
          
        </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

            </body>

    

</html>
            
<?php 
  close($conn); 
 ?>

 <!-- <script type="text/javascript">
  $(document).ready(function(){
    $('#upload').click(function(){
      $('#show_image').html('hello');
    });
  });
</script> -->

 <script>
        $(document).ready(function(){
        $('#message').click(function(){
          window.alert("Đăng kí thành công");

        });
      });
       
       
    </script>