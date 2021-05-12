<?php 
include_once('dbconn.inc.php');

$conn = init();

   if (isset($_GET["id"])) {
    $sql = 'SELECT * FROM si_admin WHERE id='.$_GET["id"];
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
                            Cập nhật tài khoản
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="update_user.php" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputName">Tên tài khoản</label>
                                    <input type="text" value="<?php echo $row['username']?>" name="user_name" class="form-control"  placeholder="Tên tài khoản" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">email</label>
                                    <input type="text" value="<?php echo $row['email']?>" name="email" class="form-control"  placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">Mật khẩu</label>
                                    <input type="text" value="<?php echo $row['password']?>" name="password" class="form-control"  placeholder="Mật khẩu">
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