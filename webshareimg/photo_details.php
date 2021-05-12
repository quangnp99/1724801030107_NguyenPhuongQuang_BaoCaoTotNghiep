<?php 
session_start();
include_once('dbconn.inc.php');

$conn = init();





 if (isset($_GET["id"])) {
 
    $sql = 'SELECT  si_image.*, username, money, url_avatar FROM si_image LEFT JOIN si_admin ON si_image.id_user = si_admin.id WHERE si_image.id='.$_GET["id"];
    $retval= mysqli_query($conn, $sql);
    $_SESSION['si_admin']="";
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
<div class="container">
  
 
      <img src=" <?php echo  $row['url'] ?>" style="width:100%; height: 100%">  

  
  
  <div class="d-flex flex-row-reverse">
  <div class="p-2">
    <!-- Default dropup button -->
    <div class="btn-group dropup">
      <i class="bi bi-download" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='font-size:20px;color:black'></i>
      <div class="dropdown-menu">
         <a class="dropdown-item" href=" <?php echo  $row['url'] ?>" download>Free</a>
         <?php
         if (isset($_SESSION['id_admin'])) {
                    echo '
                      <a class="dropdown-item" data-toggle="modal" data-target="#thanhtoan" href="#">Vip ( '.$row['price'].' VND)</a>
                      ';

                      
                    } 
                    
                ?>
         <!-- <a class="dropdown-item" data-toggle="modal" data-target="#thanhtoan" href="#">Vip (<?php echo $row['price']?> VND)</a> -->
         <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>
    <!-- <a href=" <?php echo  $row['url'] ?>" download><i class="bi bi-download" style='font-size:20px;color:black'></i></a> -->
  </div>
  <div class="p-2">

<!-- share -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="YBxlAHiS"></script>

<div class="fb-share-button" style='font-size:15px;color:black'
 
      data-href="<?php echo  $row['url'] ?>"
  
 
 data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>

<!-- Button trigger modal -->

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->

<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
        <i class="bi bi-download" style='font-size:25px;color:black'></i>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        
      </div>
    </div>
  </div>
</div> -->

   <!-- <a href="#"><i class="bi bi-share-fill" style='font-size:25px;color:black'></i></a> -->
  </div>
  <div class="p-2">
    <!-- <i class="bi bi-heart" style='font-size:25px;color:black'></i> -->

    <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Use an element to toggle between a like/dislike icon -->

<i class="bi bi-heart-fill" id="like" style='font-size:25px;  '; ></i>

<script type="text/javascript">
  $(document).ready(function() {
    $('#like').click(function(){
      var color = $(this).css("color");
      if (color == "rgb(33, 37, 41)") {
        $(this).css("color", "#e30b2c");
        $.post( "like.php",{ id: <?php echo  $row['id'] ?>, flag: "like" },  function( data ) {
        $( "#likes" ).html( data );
        });
      } else {
        $(this).css("color", "#212529");
        $.post( "like.php",{ id: <?php echo  $row['id'] ?>, flag: "dislike" },  function( data ) {
        $( "#likes" ).html( data );
        });
      }
    });
  });
</script>

  </div>
</div>
  <div class="row">

    <div class="col-sm-6" >
      <div class="d-flex flex-row">
        <div class="p-2">
        
          <form action="user_info.php" method="POST">
          <input type="hidden" value="<?php echo $row['id_user'] ?>" name="id_user_info">
          <button type="submit" class="bn_avatar"><img src=" <?php echo  $row['url_avatar'] ?>"  alt="Avatar" class="avatar"></button>
          <form> 
           
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
        <div class="p-2">
          
          
          
          <p> 
          <form action="user_info.php" method="POST">
          <input type="hidden" value="<?php echo $row['id_user'] ?>" name="id_user_info">
          <button type="submit" class="bn_avatar"> <a href="#">
            <h4>
             <?php
                 echo $row['username'];   
              ?>
              </h4>
            </a></button>
          <form>

            <h2>
              <?php
                 echo $row['name'];   
              ?>
            </h2>

            <P>
              <?php
                 echo $row['description'];   
              ?>
            </P>
             
           
          </P>
          
        </div>
        <div class="p-2">
          <input class="btn btn-primary" type="submit" name="submit" value="follow">
        </div>
      </div>
      
      
      
    </div>
    <div class="col-sm-6">
      <div class="row">
    <div class="col-sm">
      <i class="bi bi-eye" style="font-size: 25px;"></i> 
      <?php
        $sql ='UPDATE si_image SET view = view + 1 WHERE id = '.$row["id"].'';
        mysqli_query($conn, $sql);

        /*echo mysqli_affected_rows($conn);*/
        echo $row['view'];
      ?>
    </div>
    <div class="col-sm">
      <i class="bi bi-star-fill" style="font-size: 25px;"></i>
      <span id="likes">
       <?php
        echo $row['like_image'];
      ?>
      </span>
    </div>
    <div class="col-sm">
      <i class="bi bi-chat-left-dots" style="font-size: 25px;"></i>
      <!-- Load Facebook SDK for JavaScript -->
<!-- <div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6"></script> -->

<!-- Your embedded comments code -->
<!-- <div class="fb-comment-embed"
   data-href="https://www.facebook.com/zuck/posts/10102735452532991?comment_id=1070233703036185"
   data-width="500"></div> -->
    </div>
    
  </div>
      <!-- cmt facebook -->
        <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="qfrhOB1c"></script>
      <?php
      echo '<div class="fb-comments" data-href="http://localhost:8080/webshareimg/photo_details.php?id='.$row['id'].'" data-width="" data-numposts="5"></div>'
      ?>
      <!-- end facebook -->

      <i class="bi bi-tags-fill" style="font-size: 25px;"></i>
      <?php
      $tags = explode(";", $row['tag']);
      for ($i=0; $i < count($tags) ; $i++) { 
        echo '<a href="tags.php?tags='.$tags[$i].'"  class="badge badge-light" style="font-size:18px; color:#128fdc;">'.$tags[$i].'</a>';
      }
      ?>

    </div>
  </div>
</div>

            </body>
  <?php
    include_once('footer.php');
  ?>

  <!-- Modal -->
<div class="modal fade" id="thanhtoan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="thanhtoan">Thanh toán</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4 id="test"></h4>
        <label for="username">Tên người dùng</label>
        <input type="text" id="username" class="form-control" value="<?php echo $row['username']?>" readonly>
        <label for="money">Số dư trong tài khoản</label>
        <input type="text" id="money" class="form-control" value="<?php echo $row['money']?>" readonly>
        <label for="price">Giá mua</label>
        <input type="text" id="price" class="form-control" value="<?php echo $row['price']?>" readonly>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
        <button type="button" id="thanhtoan" class="btn btn-primary">Thanh toán</button>

      </div>
    </div>
  </div>
</div>

</html>
  
<?php 

      } //end of while  
    } else{  
      echo "0 results";  
    }  
          
}
  close($conn); 
?>    

<script type="text/javascript">
  $(document).ready(function() {
    
    $('#thanhtoan').click(function(){
      var money = $('#money').val();
      var price = $('#price').val();
      var id = <?php echo $_GET['id'] ?>;
      $.post("thanhtoan.php", {money:money, price:price, id:id}, function(data){
        $('#test').html(data);
      });
    });
  });
  
 </script>