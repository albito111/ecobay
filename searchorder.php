<?php 
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>

<title>EcoBay Freight Portal | Search Order</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
 
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png"> 
</head>
<body>

 

<!--Header--> 
<?php include('includes/header.php');?>
<!-- /Header --> 

<!--Page Header-->
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Search Result Order Number "<?php echo $_POST['searchdata'];?>"</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Track Your Purchase </li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Listing-->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="result-sorting-wrapper">
          <div class="sorting-count">
<?php  
$searchdata=$_POST['searchdata'];
$sql = "SELECT * from tblbooking";

$query = $dbh -> prepare($sql);
$query -> bindParam(':search',$searchdata, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=$query->rowCount();
?>
<p><span><?php echo '1';?> Listings found search</span></p>
</div>
</div>

<?php 
 
	   $get_assignments = mysqli_query($con, "select * from tblbooking inner join tblvehicles on tblbooking.VehicleId=tblvehicles.id");
			   $cnt=1;
                while($row = mysqli_fetch_array($get_assignments)):;                               
                          $Verified = $row['id'];        
                   $cnt=$cnt+1; 
				   
				if($row['BookingNumber'] == $searchdata){   
   ?>
        <div class="product-listing-m gray-bg"> 
          <div class="product-listing-img"><img src="admin/img/vehicleimages/<?php echo htmlentities($row['Vimage1']);?>" class="img-responsive" alt="Image" /> </a> 
          </div>
          <div class="product-listing-content">
            <h5><a href="vehicle-details.php?vhid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['BrandName']);?> , 
			<?php echo htmlentities($row['VehiclesTitle']);?></a></h5>
            <p class="list-price">$<?php echo htmlentities($row['Price']);?> Excluding VAT</p>
            <ul>
              <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($row['SeatingCapacity']);?> seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($row['ModelYear']);?> model</li>
              <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($row['FuelType']);?></li>
            </ul>
<?php

       $BookingDate= $row['BookingDate'];
 $sql_qry =  mysqli_query($con, "SELECT * FROM shipping WHERE bookingsfrom <= '$BookingDate' AND bookingsupto >= '$BookingDate'");




		$record = $sql_qry->fetch_array();
		 $cargolatitude = $record['cargolatitude'];
		 $cargolongitude = $record['cargolongitude'];
		 $comments = $record['comments'];
 
 ?>


            <p style="background-color:#2d3290; color:white; padding-left:10px"><?php echo $comments ;?></p>
			
          </div>
		
        </div>
      <?php 
				}
         endwhile;
	  ?>
	   <h5><i class="fa fa-map-marker" aria-hidden="true"></i> Your Cargo's Real Time Position</h5>
	     <iframe src="https://maps.google.com/maps?q=<?php echo $cargolatitude; ?>, <?php echo $cargolongitude; ?>&z=15&output=embed" width="100%" 
 height="300" title="Shippment Position" frameborder="0" style="border:0"></iframe>
	  
         </div>

      <!--Side-Bar-->
      <aside class="col-md-3 col-md-pull-9">



        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-car" aria-hidden="true"></i> Recently Listed Cars</h5>
          </div>
          <div class="recent_addedcars">
            <ul>
<?php $sql = "SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid  from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand order by id desc limit 4";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>

              <li class="gray-bg">
                <div class="recent_post_img"> <a href="vehicle-details.php?vhid=<?php echo htmlentities($result->id);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="vehicle-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?></a>
                  <p class="widget_price">$<?php echo htmlentities($result->Price);?> excluding VAT</p>
                </div>
              </li>
              <?php }} ?>
              
            </ul>
          </div>
        </div>
      </aside>
      <!--/Side-Bar--> 
	   		  
 <!--iframe src="https://maps.google.com/maps?q=<?php echo $cargolatitude; ?>, <?php echo $cargolongitude; ?>&z=15&output=embed" width="100%" 
 height="500" title="Shippment Position" frameborder="0" style="border:0"></iframe-->
 
    </div>
  </div>
</section>
<!-- /Listing--> 

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
