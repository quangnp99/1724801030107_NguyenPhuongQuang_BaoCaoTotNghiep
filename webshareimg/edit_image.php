<?php 
include_once('dbconn.inc.php');

$conn = init();

   if (isset($_GET["id"])) {
    $sql = 'SELECT * FROM si_image WHERE id='.$_GET["id"];
    $retval= mysqli_query($conn, $sql);
    if(mysqli_num_rows($retval) > 0){  
       while($row = mysqli_fetch_assoc($retval)){



?>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href='public/backend/css/bootstrap.min.css' >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href='public/backend/css/style.css' rel='stylesheet' type='text/css' />
<link href='public/backend/css/style-responsive.css' rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href='public/backend/css/font.css' type="text/css"/>
<link href='public/backend/css/font-awesome.css' rel="stylesheet"> 
<link rel="stylesheet" href='public/backend/css/morris.css' type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href='public/backend/css/monthly.css'>
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src='public/backend/js/jquery2.0.3.min.js'></script>
<script src='public/backend/js/raphael-min.js'></script>
<script src='public/backend/js/morris.js'></script>

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật ảnh
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="update_image.php" method="POST">
                                <div class="form-group">
                                    
                                    <input type="hidden" value="<?php echo $row['id']?>" name="id" class="form-control"  placeholder="id"  >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">Tên tài khoản</label>
                                    <input type="text" value="<?php echo $row['name']?>" name="name" class="form-control"  placeholder="Tên tài khoản" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">description</label>
                                    <input type="text" value="<?php echo $row['description']?>" name="description" class="form-control"  placeholder="description">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">Ảnh</label>
                                    <input type="text" value="<?php echo $row['url']?>" name="image" class="form-control"  placeholder="Ảnh" disabled>
                                </div>
                                <div class="form-group">
                                    <img src="<?php echo $row['url'] ?>" style="width:10%">
                                </div>
                                    
                                <button type="submit" name="update_brand_product" class="btn btn-info">Cập nhật</button>
                                
                                
                            </form>
                            </div>
                        </div>
                    </section>

            </div>

  
<?php 

      } //end of while  
    } else{  
      echo "0 results";  
    }  
          
}
  close($conn); 
?> 