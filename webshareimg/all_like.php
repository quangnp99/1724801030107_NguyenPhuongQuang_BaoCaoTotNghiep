<?php 
include_once('dbconn.inc.php');


$conn = init();

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


  <div class="panel panel-default" >
    <div class="panel-heading">
      Liệt kê lượt thích
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
       
                     
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Tìm kiếm</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
     
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
             
            <th>Id Ảnh </th>
            <th>Id tên người dùng</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
           <?php 
            
            $sql = 'SELECT * FROM si_like';
            $retval= mysqli_query($conn, $sql);
            if(mysqli_num_rows($retval) > 0){  
             while($row = mysqli_fetch_assoc($retval)){ 
              
            ?>
          <tr>
            <td>
             <?php
                echo $row['id'];   
             ?>
            </td>
            <td>
             <?php
                echo $row['id_image'];   
             ?>
            </td>
            <td>
             <?php
                echo $row['id_user'];   
             ?>
            </td>
            <td>
              <a href="#" ui-toggle-class="" class="edit_like" id="<?php echo $row['id'] ?>">
                <i class="fa fa-pencil-square-o" ></i></a>
              <a  href="#" ui-toggle-class="" class="delete_like" id="<?php echo $row['id'] ?>" >
                <i class="fa fa-times text-danger text">
               
                	
                </i>
              </a>
            </td>
          </tr>
     <?php
            } //end of while  
            }else{  
            echo "0 results";  
            }  
          
            ?>
        </tbody>
      </table>
    </div>
   
  </div>


 <script type="text/javascript">
  $(document).ready(function() {
    $('.edit_like').click(function(){
      var user_id = $(this).attr( "id" );
      $.get( "edit_like.php",{ id: user_id },  function( data ) {
        $( "#show_image" ).html( data );
        });
    });
    $('.delete_like').click(function(){
      var user_id = $(this).attr( "id" );
      var del=confirm("Are you sure you want to delete this record?");
        if (del==true){
            $.post("delete_like.php", {id: user_id}, function(){
              $.get( "all_like.php", function( data ) {
                $( "#show_image" ).html( data );
              });
            });
        } 
    });
  });
  
 </script>
  
<?php 
  close($conn); 
 ?>  

<!--  <script type="text/javascript">
 	$(document).ready(function() {
		$('#edit_user').click(function(){
		  $.get( "edit_user.php", function( data ) {
		  	$( "#edit_users" ).html( data );
		    });
    });
  });
 	
 </script> -->