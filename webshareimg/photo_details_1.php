<?php 
include_once('dbconn.inc.php');

$conn = init();


 


 if (isset($_GET["id"])) {
    $sql = 'SELECT * FROM si_image WHERE id='.$_GET["id"];
    $retval= mysqli_query($conn, $sql);


}

?>

<!DOCTYPE html>
 <html lang="en">
						<head>
						  <title>Bootstrap Example</title>
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


<style type="text/css">
  hr{
    border-top: 1px solid #000 !important;
}

.row{
    margin-right: 0px;
    margin-left: 0px;
}

.comment{
    margin-right: 20px;
    margin-left: 20px; 
    margin-bottom: 30px;
}

.head{
    margin-bottom: 10px;
}

.user{
    margin-right: 10px;
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
                <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                <a href="#" class="nav-item nav-link">Khám phá</a>
                <a href="#" class="nav-item nav-link">Xu hướng</a>
                <a href="#" class="nav-item nav-link">Liên hệ</a>
            </div>
            <div class="navbar-nav ml-auto">
                <form action="photo_details.php" method="GET" class="form-inline " style="float: right;" onsubmit="return fetch();">
                    <div class="form-group mr-2">
                        <label class="sr-only" for="inputSearch">Tìm kiếm</label>
                        <input type="search" class="form-control" id="search" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-secondary"><span class="fa fa-search"></span> Search</button>
                </form>
               <?php
                  $conn = mysql_connect("localhost", "root", "","image_manager");
                  if(isset($_GET["search"]) && !empty($_GET["search"]))
                  {
                    $key = $GET["search"];
                    $sql = "SELECT * from si_admin WHERE id like '%$key%' or username like '%$key%' email LIKE '%$key%' or phone LIKE '%$key%' " ;   
                  }else {
                    $sql = "SELECT * from si_admin";
                  }
                  $result = mysql_query($conn, $sql);

                ?>
                <button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-cloud-upload"></span>
                </button>
                <a href="#" class="nav-item nav-link">Register</a>
                <a href="admin_login.php" class="nav-item nav-link">Login</a>
                <a href="upload.php" class="nav-item nav-link">upload</a>
                 <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Upload
                </button>

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
                      <form action="" method="POST" enctype="multipart/form-data">
                          <?php
                              if(isset($_POST['submit'])) {
                                  $anh = isset($_POST['hinhanh']) ? $_POST['hinhanh'] : '';
                                  $picture = $_FILES['hinhanh']['name'];
                                  $tmp_name = $_FILES['hinhanh']['tmp_name'];
                                  $time = time();
                                  $tmp = explode('.', $picture);
                                  $duoifile = end($tmp);
                                  $tenfilemoi = 'HinhAnh-'.$time.'.'.$duoifile;
                                  $path_name = $_SERVER["DOCUMENT_ROOT"].'/webshareimg/uploads/'.$tenfilemoi;
                                  $path_upload = move_uploaded_file($tmp_name, $path_name);
                              }
                           ?>
                          
                          <div class="bot">
                              Hình ảnh: <input type="file" name="hinhanh"></div></br>  
                          <?php
                            if(isset($anh) && $anh == '') {
                                echo "<strong style='color:red'> Vui lòng chọn ảnh</strong>";
                            }
                         ?>
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        
                        <input class="btn btn-primary" type="submit" name="submit" value="upload">
                         
                        </form> 
                        
            </div> <!-- navbar-nav ml-auto -->
        </div>
    </div>    
</nav>
                    <!-- photo details -->
<div class="container">
  <img src="uploads/anh-anime-hoa-anh-dao_112649042.jpg" class="img-fluid" alt="Responsive image">
  <div class="d-flex flex-row-reverse">
  <div class="p-2">
    <i class="bi bi-download" style='font-size:25px;color:black'></i>
  </div>
  <div class="p-2">
   
 <!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
  ...
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chia sẻ 1 ảnh cho:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #3b5998;"
              href="#!"
              role="button"
              ><i class="fab fa-facebook-f"></i>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          
        </ul>
         <!-- Facebook -->
     <p>Link</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  

  </div>
  <div class="p-2">
    <i class="bi bi-heart" style='font-size:25px;color:black'></i>
  </div>
</div>
  <div class="row">

    <div class="col-sm-6" >
      <div class="d-flex flex-row">
        <div class="p-2">
          <img src="https://www.w3schools.com/bootstrap4/cinqueterre.jpg" class="rounded-circle" alt="Cinque Terre" width="50" height="50">
        </div>
        <div class="p-2">
          
          
          
          <p> 
            <?php 
            
            $sql = 'SELECT * FROM si_image WHERE id='.$_GET["id"];
            $retval= mysqli_query($conn, $sql);
            if(mysqli_num_rows($retval) > 0){  
             while($row = mysqli_fetch_assoc($retval)){ 
            ?>
            <a href="#">
             <?php
                 echo $row['id_user'];   
              ?>
            </a>

            <p>
              <?php
                 echo $row['name'];   
              ?>
            </p>

            <P>
              <?php
                 echo $row['description'];   
              ?>


            </P>
             
            <?php
            } //end of while  
            }else{  
            echo "0 results";  
            }  
          
            ?>
          </P>
          
        </div>
        <div class="p-2">
          <input class="btn btn-primary" type="submit" name="submit" value="follow">
        </div>
      </div>
      
      
      
    </div>
    <div class="col-sm-6">
        
       <p>Auch wenn wir es nicht immer wahrhaben wollen. Die Welt ist vergänglich! Ich bin von dieser Zwischenstufe immer wieder begeistert, wirft sie doch viele Fragen auf und erzählt Geschichten. Jede Gegenwart hat ihre eigene Vergangenheit und ich finde es lohnenswert sie zu suchen und zu zeigen.
Einen feinen, verhaltenen und doch spannenden Blick präsentierst du uns hier mit deinem Bild. Gut gemacht!</p>

<div class="container">
  <div class="row">
    <h2>Comments |2| <div class="pull-right"><a href="#" id="addacomment" class="btn btn-primary">Add a coment</a> </div></h2>
  </div>
  <div class="row" id="addcomment" style="display: none;">
      <form>
          <textarea class="form-control" placeholder="Comment content..."></textarea><br/>
          <button class="btn btn-primary">Send</button>
      </form>
  </div>
  <hr>
  <div class="row comment">
      <div class="head">
          <small><strong class='user'>Diablo25</strong> 30.10.2017 12:13</small>
      </div>    
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non lorem elementum, accumsan magna sed, faucibus mauris. Nulla pellentesque ante nibh, ac hendrerit ante fermentum sed. Nunc in libero dictum, porta nibh pellentesque, ultrices dolor. Curabitur nunc ipsum, blandit vel aliquam id, aliquam vel velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed sit amet mi dignissim, pretium justo non, lacinia libero. Nulla facilisi. Donec id sem velit. </p>
  </div>
  <div class="row comment">
      <div class="head">
          <small><strong class='user'>Giesche</strong> 30.10.2017 12:13</small>
      </div>    
      <p>Praesent molestie ante nec metus convallis aliquam. Ut aliquam tincidunt mollis. Maecenas et ex sit amet est vehicula ultrices sed sit amet elit. Suspendisse potenti. Aenean et quam ut purus convallis porttitor. Mauris porttitor pretium elementum. Duis blandit elit tincidunt ipsum ultricies, ut faucibus lorem facilisis. Proin ipsum turpis, pharetra in lorem ac, porta ullamcorper velit. Proin gravida odio eget elit ultricies sodales. Vivamus vel tincidunt ligula. Proin pulvinar pellentesque velit eget luctus. Aliquam vitae enim ut purus vestibulum sollicitudin sit amet eget lacus. Nunc tempus fringilla tincidunt. </p>
  </div>
  <hr>
</div>

<a href="#" class="badge badge-primary">Primary</a>
<a href="#" class="badge badge-secondary">Secondary</a>
<a href="#" class="badge badge-success">Success</a>
<a href="#" class="badge badge-danger">Danger</a>
<a href="#" class="badge badge-warning">Warning</a>
<a href="#" class="badge badge-info">Info</a>
<a href="#" class="badge badge-light">Light</a>
<a href="#" class="badge badge-dark">Dark</a> 

<button type="button" class="btn btn-primary">
  Profile <span class="badge badge-light">9</span>
  <span class="sr-only">unread messages</span>
</button>
    </div>
  </div>
</div>

						</body>

            <!-- Footer -->
<footer class="text-center text-white" style="background-color: #f1f1f1;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>


</html>
	
			
<?php 
  close($conn); 
 ?>  

 <!-- <script type="text/javascript">
   $(document).on('click', '#addacomment', function(){
    $('#addcomment').toggle();
});
 </script> -->

 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Lấy giá trị đầu vào khi có thay đổi */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("search.php", {term: inputVal}).done(function(data){
                // Hiển thị dữ liệu trả về trong trình duyệt
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Thiết lập giá trị đầu vào khi click vào result
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>