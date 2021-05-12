<?php 
session_start();
include_once('dbconn.inc.php');


$conn = init();

$sql = 'SELECT * FROM `si_image` WHERE status=1 ORDER BY id DESC LIMIT 8'; 

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

                          <script src='public/frontend/js/custom.js'></script>

                          <!-- search -->
                         <!--  <link href="https://www.pexels.com/vi-vn/" rel="canonical">
<link rel="alternate" hreflang="en-US" href="https://www.pexels.com/" />
<link rel="alternate" hreflang="pt-BR" href="https://www.pexels.com/pt-br/" />
<link rel="alternate" hreflang="es-ES" href="https://www.pexels.com/es-es/" />
<link rel="alternate" hreflang="ca-ES" href="https://www.pexels.com/ca-es/" />
<link rel="alternate" hreflang="de-DE" href="https://www.pexels.com/de-de/" />
<link rel="alternate" hreflang="it-IT" href="https://www.pexels.com/it-it/" />
<link rel="alternate" hreflang="fr-FR" href="https://www.pexels.com/fr-fr/" />
<link rel="alternate" hreflang="sv-SE" href="https://www.pexels.com/sv-se/" />
<link rel="alternate" hreflang="id-ID" href="https://www.pexels.com/id-id/" />
<link rel="alternate" hreflang="pl-PL" href="https://www.pexels.com/pl-pl/" />
<link rel="alternate" hreflang="ja-JP" href="https://www.pexels.com/ja-jp/" />
<link rel="alternate" hreflang="zh-TW" href="https://www.pexels.com/zh-tw/" />
<link rel="alternate" hreflang="zh-CN" href="https://www.pexels.com/zh-cn/" />
<link rel="alternate" hreflang="ko-KR" href="https://www.pexels.com/ko-kr/" />
<link rel="alternate" hreflang="th-TH" href="https://www.pexels.com/th-th/" />
<link rel="alternate" hreflang="nl-NL" href="https://www.pexels.com/nl-nl/" />
<link rel="alternate" hreflang="hu-HU" href="https://www.pexels.com/hu-hu/" />
<link rel="alternate" hreflang="vi-VN" href="https://www.pexels.com/vi-vn/" />
<link rel="alternate" hreflang="cs-CZ" href="https://www.pexels.com/cs-cz/" />
<link rel="alternate" hreflang="da-DK" href="https://www.pexels.com/da-dk/" />
<link rel="alternate" hreflang="fi-FI" href="https://www.pexels.com/fi-fi/" />
<link rel="alternate" hreflang="uk-UA" href="https://www.pexels.com/uk-ua/" />
<link rel="alternate" hreflang="el-GR" href="https://www.pexels.com/el-gr/" />
<link rel="alternate" hreflang="ro-RO" href="https://www.pexels.com/ro-ro/" />
<link rel="alternate" hreflang="nb-NO" href="https://www.pexels.com/nb-no/" />
<link rel="alternate" hreflang="sk-SK" href="https://www.pexels.com/sk-sk/" />
<link rel="alternate" hreflang="tr-TR" href="https://www.pexels.com/tr-tr/" />
<link rel="alternate" hreflang="ru-RU" href="https://www.pexels.com/ru-ru/" />
<link href="https://www.pexels.com/vi-vn/rss/" rel="alternate" title="RSS" type="application/rss+xml" /> -->
<!-- <script>
//<![CDATA[
i18n_global = {"search_for_stock_media":"Tìm kiếm ảnh lưu trữ và video về %{search_term} miễn phí.","search_dropdown_aria_helper_singular":"Có một gợi ý tìm kiếm. Bạn có thể nhấn phím tab để xem.","search_dropdown_aria_helper_plural":"Có %{count} gợi ý tìm kiếm. Bạn có thể nhấn phím tab để duyệt xem.","collection_create":"Tạo Bộ sưu tập","collection_save":"Lưu vào Bộ sưu tập","collection_title":"Tiêu đề","collection_view":"Xem bộ sưu tập của bạn →","following":"Đang theo dõi","follow":"Theo dõi","loading":"Đang tải","like":"Thích","message_text":"Tin nhắn","send_message":"Gửi","cancel":"Hủy","close":"Đóng","messaging_prompt":"Gửi tin nhắn đến","messaging_terms":"Tôi hiểu rằng địa chỉ email của tôi sẽ hiển thị cho người nhận và Pexels xem xét thư của tôi để bảo vệ chống lại thư rác.","message_sent_header":"Thư đã được gửi đi!","message_sent_successfully":"Thư của bạn đã được gửi đi. Chúng tôi hy vọng bạn sẽ nhận được trả lời qua email.","message_sent_unsuccessfully":"Đã có vấn đề và thư của bạn không được gửi đi. Vui lòng thử lại.","default_html_title":"Kho ảnh miễn phí","why_do_you_want_to_delete_the_photo":"Tại sao bạn muốn xóa ảnh này?","you_must_provide_a_reason_why_you_want_to_delete_the_photo":"Vui lòng cung cấp lý do tại sao bạn lại muốn xóa ảnh này."}
//]]>
</script> -->
<!-- <script>
//<![CDATA[

      i18n_d3 = {
        decimal: ',',
        thousands: '.',
        grouping: [3]
      };
    
//]]>
</script> -->
<!-- <link rel="stylesheet" media="all" href="https://www.pexels.com/assets/application-3527e9a300c332e17bff16a233eb4bcd4e2e023d3828aaf268ebc3e665fc6505.css" /> -->
<!-- <script src="https://www.pexels.com/assets/packs/js/application-14533c24c018253e4edb.js"></script>
<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="g3cB1HvkWYe5QvfxNGlcqRTgK0HWnmZpkNGqYNebBvwLMJrnF4ugESvLOhF42oA5lTacV8wASWPIjZkn9utm2Q==" />
<link rel="search" type="application/opensearchdescription+xml" title="Pexels" href="/opensearch.xml" />
<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="icon" sizes="192x192" href="https://www.pexels.com/assets/icons/pexels-icon-644533b609157fd990b1a6675626d63077ae1fb81e819c83f81dc2242877d413.png">
<link rel="apple-touch-icon" href="https://www.pexels.com/assets/icons/apple-touch-icon-06fc98261c772fe20d584aba2336ad2bb32dffced6ec5470b03228548042f162.png">
<link rel="mask-icon" href="https://www.pexels.com/assets/icons/safari-pinned-tab-c3a22dad034351c9cda8c3bb257bc04b235e17785a945a3295ed21d0c340c7de.svg" color="#05a081"> -->
                          <!-- end search -->

<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: cursive;
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

<!-- SEARCH -->
<?php
  include_once('search_index.php');
?>
<!-- END SEARCH -->

                    <!-- Photo Grid -->



<div class='js-home-links-title title-tabs__title title'> <h3>Kho ảnh của bạn</h3></div>
<div class="d-flex flex-row-reverse">
  <?php
    $sql_sum = 'SELECT SUM(view) AS TongView, SUM(like_image) AS TongLike FROM si_image WHERE id_user='.$_SESSION['id_admin'];
    $retsum= mysqli_query($conn, $sql_sum);
    if(mysqli_num_rows($retsum) > 0){  
      while($row = mysqli_fetch_assoc($retsum)){
        echo '
        <div class="d-flex flex-row-reverse">
          <div class="p-2">
            <p>Tổng lượt xem:'.$row['TongView'].'</p>
          </div>
          <div class="p-2">
            <p>Tổng lượt thích:'.$row['TongLike'].'</p>
          </div>
        </div>';
     } //end of while 

    }else{  
    echo "0 results";  
    }
    ?>  
 
</div>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="row">
    <?php 
      $sql_ex = 'SELECT * FROM `si_image` WHERE status=1 and id_user='.$_SESSION['id_admin'];
      
      $retval= mysqli_query($conn, $sql_ex); 

       $col1='';
       $col2='';
       $col3='';
       $col4='';
       $flag = 1;
    if(mysqli_num_rows($retval) > 0){  
     while($row = mysqli_fetch_assoc($retval)){ 
        switch ($flag) {
          case 1:
            $col1 = $col1.'
            <div class="d-block w-100 carousel slide">
              <a href="photo_details.php?id='.$row['id'].'"><img src="'.$row['url'].'" style="width:100%">
              <div class="carousel-caption d-none d-md-block">
                
              </div>
              <div class="d-flex flex-row-reverse">
                    <div class="p-2">
                      <a  href="#" ui-toggle-class="" class="delete_image" id="'.$row['id'].'" >
                        <i class="fa fa-times text-danger text">  
                        </i>
                      </a> 
                    </div>
                    <div class="p-2">
                      <i class="bi bi-eye" style="font-size:15px;color:black"></i>
                      '.$row['view'].'
                    </div>
                    <div class="p-2">
                      <i class="bi bi-heart" style="font-size:15px;color:black"></i>
                      '.$row['like_image'].'
                    </div>
                  </div>
              </a>
            </div>
            ';
            $flag = 2;
            break;
          case 2:
            $col2 = $col2.'
              <div class="d-block w-100 carousel slide">
              <a href="photo_details.php?id='.$row['id'].'"><img src="'.$row['url'].'" style="width:100%">
              <div class="carousel-caption d-none d-md-block">
              </div>
              <div class="d-flex flex-row-reverse">
                    <div class="p-2">
                      <a  href="#" ui-toggle-class="" class="delete_image" id="'.$row['id'].'" >
                        <i class="fa fa-times text-danger text">  
                        </i>
                      </a> 
                    </div>
                    <div class="p-2">
                      <i class="bi bi-eye" style="font-size:15px;color:black"></i>
                      '.$row['view'].'
                    </div>
                    <div class="p-2">
                      <i class="bi bi-heart" style="font-size:15px;color:black"></i>
                      '.$row['like_image'].'
                    </div>
                  </div>
              </a>
            </div>
            ';
            $flag = 3;
            break;
          case 3:
            $col3 = $col3.'
            <div class="d-block w-100 carousel slide">
              <a href="photo_details.php?id='.$row['id'].'"><img src="'.$row['url'].'" style="width:100%">
              <div class="carousel-caption d-none d-md-block">
              </div>
              <div class="d-flex flex-row-reverse">
                    <div class="p-2">
                      <a  href="#" ui-toggle-class="" class="delete_image" id="'.$row['id'].'" >
                        <i class="fa fa-times text-danger text">  
                        </i>
                      </a> 
                    </div>
                    <div class="p-2">
                      <i class="bi bi-eye" style="font-size:15px;color:black"></i>
                      '.$row['view'].'
                    </div>
                    <div class="p-2">
                      <i class="bi bi-heart" style="font-size:15px;color:black"></i>
                      '.$row['like_image'].'
                    </div>
                  </div>
              </a>
            </div>
            ';

            $flag = 4;
            break;
          case 4:
            $col4 = $col4.'
            <div class="d-block w-100 carousel slide">
              <a href="photo_details.php?id='.$row['id'].'"><img src="'.$row['url'].'" style="width:100%">
              <div class="carousel-caption d-none d-md-block">
              </div>
              <div class="d-flex flex-row-reverse">
                    <div class="p-2">
                      <a  href="#" ui-toggle-class="" class="delete_image" id="'.$row['id'].'" >
                        <i class="fa fa-times text-danger text">  
                        </i>
                      </a> 
                    </div>
                    <div class="p-2">
                      <i class="bi bi-eye" style="font-size:15px;color:black"></i>
                      '.$row['view'].'
                    </div>
                    <div class="p-2">
                      <i class="bi bi-heart" style="font-size:15px;color:black"></i>
                      '.$row['like_image'].'
                    </div>
                  </div>
              </a>
            </div>
            ';
            $flag = 1;
            break;
          
          default:
            # code...
            break;
        } 
          
     } //end of while 

    }else{  
    echo "0 results";  
    }
    ?>  

        <div id="col1" class="column" >
          <?php
          echo($col1); 
          ?>

        </div>
        <div id="col2" class="column">
          <?php
          echo($col2); 
          ?>
        </div>
        <div id="col3" class="column">
          <?php
          echo($col3); 
          ?>
        </div>
        <div id="col4" class="column">
          <?php
          echo($col4); 
          ?>
        </div>
      </div>
</div>
            </body>

  <?php
    include_once('footer.php');
  ?>

</html>
            
<?php 
  close($conn); 
 ?>

<script type="text/javascript">
  $(document).ready(function() {
    
    $('.delete_image').click(function(){
      var user_id = $(this).attr( "id" );
      var del=confirm("Are you sure you want to delete this record?");
        if (del==true){
            $.post("delete_image.php", {id: user_id}, function(){
              window.location.href = 'user_show_image.php';
            });
        } 
    });
  });
  
 </script>