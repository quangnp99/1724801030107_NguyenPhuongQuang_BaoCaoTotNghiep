

 <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <div class="container-fluid">
        <a href="index.php"><img alt="" src='public/backend/images/logo.png' style="width: 100px;"></a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav" style="font-size: 20px;">
                
                <a href="explore.php" class="nav-item nav-link">Khám phá</a>
                <a href="tendency.php" class="nav-item nav-link">Xu hướng</a>
                <a href="#" class="nav-item nav-link">Liên hệ</a>
            </div>
            <div class="navbar-nav ml-auto">
                <?php
                  include_once('search_form.php');
                ?>
                <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-cloud-upload"></span>
                </button>
                
                
                <?php

                  if (!isset($_SESSION['id_admin']) || $_SESSION['id_admin'] == "") {
                    
                    
                      echo '<a href="user_registration.php" class="nav-item nav-link" >Register</a>';
                      echo '<a href="admin_login.php" class="nav-item nav-link">Login</a>';
                     
                  } 

   
                  if (isset($_SESSION['id_admin'])) {
                    if ($_SESSION['id_admin'] != "" ) {

                    $sql_avatar = 'SELECT si_admin.*, SUM(view) AS TongView, SUM(like_image) AS TongLike FROM si_admin LEFT JOIN si_image ON si_admin.id = si_image.id_user WHERE si_admin.id='.$_SESSION['id_admin'].' GROUP BY si_admin.id'; 
                    $retval_avatar= mysqli_query($conn, $sql_avatar);

                     if(mysqli_num_rows($retval_avatar) > 0){  
                     while($row1 = mysqli_fetch_assoc($retval_avatar)){

                      echo '
                      <div class="mr-2">
                        <a href="javascript:void(0)"><i class="bi bi-cloud-arrow-up"  data-toggle="modal" data-target="#myModal" style="font-size:42px; color:white;"></i></a>
                      </div>
                      ';

                      echo '
                      <div class="p-2">
                        <div class="dropdown">
                        <img src="'.$row1['url_avatar'].'"  alt="Avatar" class="avatar" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <style type="text/css">
                          .avatar {
                            vertical-align: middle;
                            width: 50px;
                            height: 50px;
                            border-radius: 50%; 
                        </style>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <form action="user_info.php" method="POST">
                          <input type="hidden" value="'.$row1['id'].'" name="id_user_info">
                          <button class="dropdown-item" type="submit">Hồ sơ</button>
                          </form>
                          <a href="user_show_image.php" <button class="dropdown-item" type="button">Kho ảnh của bạn</button></a>
                          <a href="user_logout.php"<button class="dropdown-item" type="button">Logout</button></a>
                        </div>
                        </div>
                      </div>';


                        } //end of while  
                      } else{  
                        echo "0 results";  
                      }  
          
               
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
                              <textarea style="resize: none"rows="8" class="form-control" name="category_image_desc"  placeholder="Mô tả"></textarea>
                          </div>
                          <div class="form-group">
                              <label >Trạng thái</label>
                              <input  style="resize: none"rows="8" class="form-control" name="status_image"  placeholder="Trạng thái">
                          </div>
                          <div class="form-group">
                              <label >Thẻ tag</label>
                              <input style="resize: none"rows="8" class="form-control" name="tag_image"  placeholder="tag">
                          </div>
                          <div class="form-group">
                              <label >Giá</label>
                              <input style="resize: none"rows="8" class="form-control" name="price_image"  placeholder="10 000 đ - 100 000 đ">
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
                         </div>
                  </form> 
                        
            </div> <!-- navbar-nav ml-auto -->
        </div>
    </div>    
</nav>

 