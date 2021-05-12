<?php 
include_once('dbconn.inc.php');

$conn = init();

$sql = 'SELECT * FROM si_image';  
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
						<div>
              <?php
                  include_once('nav.php');
              ?>
            </div>
                    <!-- Contact -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contact us.
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-primary text-right">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                <div class="card-body">
                    <p>Conect Me</p>
                    <p>Di An</p>
                    <p>Viet Nam</p>
                    <p>Email : phuongquangnguyen99@gmail.com</p>
                    <p>Tel. 0372519973</p>

                </div>

            </div>
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

 <!-- <script type="text/javascript">
  $(document).ready(function(){
    $('#upload').click(function(){
      $('#show_image').html('hello');
    });
  });
</script> -->