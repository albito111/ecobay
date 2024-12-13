<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="EcoBay Freight Customs Clearing Services">
<meta name="description" content="Customs Clearing Services">
<title>EcoBay Freight Customs Clearing Services</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/clients.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet"> 
 
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
</head>
 
<style> 
.slider2{
   height:15vh;
    position: relative;   
}
.slider2 .list1 .item{
    position: absolute;
    inset: 0 0 0 0;
    overflow: hidden;
    opacity: 0;
    transition: .5s;
 display: table; 
  background-color:#eeeeee;  
}

.slider2 .list1 .item img{
    width: 100%;
    height: 100%;
    object-fit: cover;
	 
}
.slider2 .list1 .item::after{
    content: '';
    width: 100%;
    height: 70%;
    position: absolute;
    bottom: 0;
   
 
}
.slider2 .list1 .item .content{
    position: absolute;
    text-align:center;
    bottom:0px;
     width: 50%;
    max-width: 80%;
    z-index: 1;
	background-color:#2d3290;
	padding-top:0.05px;
	padding-bottom:0.05px; 
	margin:0 auto;
	border-radius: 25px;
	color:white;
	left:25%;
}
.slider2 .list1 .item .content p:nth-child(1){
    text-transform: uppercase;
    letter-spacing: 10px;
}
 
.slider2 .list1 .item.active{
    opacity: 1;
    z-index: 10;
}
@keyframes showContent {
    to{
        transform: translateY(0);
        filter: blur(0);
        opacity: 1;
    }
}
.slider2 .list1 .item.active p:nth-child(1),
.slider2 .list1 .item.active h2,
.slider2 .list1 .item.active p:nth-child(3){
    transform: translateY(30px);
    filter: blur(20px);
    opacity: 0;
    animation: showContent .5s .7s ease-in-out 1 forwards;
}
.slider2 .list1 .item.active h2{
    animation-delay: 1s;
}
.slider2 .list1 .item.active p:nth-child(3){
    animation-duration: 1.3s;
}
.arrows{
    position: absolute;
    top: 30%;
    right: 50px;
    z-index: 100;
}
.arrows button{
    background-color: #eee5;
    border: none;
    font-family: monospace;
    width: 40px;
    height: 40px;
    border-radius: 5px;
    font-size: x-large;
    color: #eee;
    transition: .5s;
}
.arrows button:hover{
    background-color: #eee;
    color: black;
}
 
@media screen and (max-width: 678px) {
 
    .slider2 .list1 .item .content h2{
        font-size: 40px;
    }
    .arrows{
        top: 10%;
    }
}

</style>
<body style="background-color:#eeeeee;">    
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 
 
    <!-- slider -->
 
    <section class="slider2" id="slider2">
        <!-- list Items -->
        <div class="list1">
            <div class="item active">
                <img src="assets/images/banner1.jpg">
                <div class="content">
                    <p>EFFORTLESS VEHICLE SHIPPING</p>
                   <h2> </h2>
                    <p>
                        We ship vehicles from the UK to any customer in Southern Africa<br>
                    
					  <a style="color:white;"href="car-listing.php">View All Vehicles we can Import <span class="angle_arrow">
					  <i class="fa fa-angle-right" aria-hidden="true"></i></span></a> 
			</p>
                </div>
            </div>
             <div class="item">
                <img src="assets/images/banner2.jpg">
                <div class="content">
                    <p>TRACK YOUR SHIPPING</p>
                   <h2> </h2>
                    <p>
                        You can track your car(s) in real time till it arrives at your door<br>
                    
					  <a style="color:white;"href="car-listing.php">View All Vehicles we can Import <span class="angle_arrow">
					  <i class="fa fa-angle-right" aria-hidden="true"></i></span></a> 
			</p>
                </div>
            </div>   
             <div class="item">
                <img src="assets/images/banner3.jpg">
                <div class="content">
                    <p>MAKE YOUR BOOKING TODAY!</p>
                   <h2> </h2>
                    <p>
                        We have a shipment expected to arrive on 11/04/24<br>
                    
					  <a style="color:white;"href="car-listing.php">View All Vehicles we can Import <span class="angle_arrow">
					  <i class="fa fa-angle-right" aria-hidden="true"></i></span></a> 
			</p>
                </div>
            </div> 	
             <div class="item">
                <img src="assets/images/banner4.jpg">
                <div class="content">
                    <p>USER FRIENDLY ASSISTORS</p>
                   <h2> </h2>
                    <p>
                        We always make sure of a quality service per customer<br>
                    
					  <a style="color:white;"href="car-listing.php">View All Vehicles we can Import <span class="angle_arrow">
					  <i class="fa fa-angle-right" aria-hidden="true"></i></span></a> 
			</p>
                </div>
            </div> 			
        </div>
        <!-- button arrows -->
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
 
    </section> 
   
 
 
<!-- Resent Cat-->
<section class="section-padding gray-bg" style="margin-top:27%; ">
  <div class="container">
    <div class="section-header text-center">
      <h2>Find the Best <span>Car For You</span></h2>
      <p>Ecobay Freight is a customs clearing company. The company has offices in the United Kingdom as well as Zimbabwe.
	  We handle several paperwork to make sure that once you purchase a vehicle from us, you can effortlessly Track it's shipping process from the UK to your doorstep.
	  Most of our clients are in Zimbabwe and we have made several transactions with clients from Botswana, Zambia, Namibia and Mozambique.</p>
    </div>
    <div class="row"> 
      
       <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" >
          <li role="presentation" class="active"><a href="#all" role="tab" data-toggle="tab">All</a></li> 
          <li role="presentation" class=""><a href="#private" role="tab" data-toggle="tab">Private</a></li> 
          <li role="presentation" class=""><a href="#commercial" role="tab" data-toggle="tab">Commercial</a></li>
   
        </ul> 
      </div>
     
      <div class="tab-content">
	          <div role="tabpanel" class="tab-pane active" id="all">
			 
<?php 
 
//$sql= "Select * from tblvehicles INNER JOIN tblbrands ON tblbrands.id=tblvehicles.VehiclesBrand";
$sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.Price,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.category,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";

$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
 
?>  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="vehicle-details.php?vhid=<?php echo htmlentities($result->id);?>">
<img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType);?></li>
<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear);?> Model</li>
<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->BrandName);?></li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehicle-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?>  
<?php echo htmlentities($result->Title);?></a></h6>
<span class="price">$<?php echo htmlentities($result->Price);?>-VAT</span>
</div>
<div class="inventory_info_m">
<p><?php echo substr($result->Overview,0,70);?></p>
</div>
</div>
</div>
<?php }}?>
       
      </div>
	  
	  <!----------------------------all end ------------------------------->
	  
        <div role="tabpanel" class="tab-pane" id="private">

<?php 
 $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.Price,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.category,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand AND tblvehicles.category='private' ";

$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
 
if($result->category=="private")
{
?>  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="vehicle-details.php?vhid=<?php echo htmlentities($result->id);?>">
<img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType);?></li>
<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear);?> Model</li>
<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->BrandName);?></li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehicle-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?> , 
<?php echo htmlentities($result->Title);?></a></h6>
<span class="price">$<?php echo htmlentities($result->Price);?>-VAT</span>
</div>
<div class="inventory_info_m">
<p><?php echo substr($result->Overview,0,70);?></p>
</div>
</div>
</div>
<?php }}}?>
       
      </div>
 
        <div role="tabpanel" class="tab-pane" id="commercial">

<?php 
 $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.Price,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,
 tblvehicles.SeatingCapacity,tblvehicles.category,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands
 on tblbrands.id=tblvehicles.VehiclesBrand AND tblvehicles.category='commercial' ";

$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
?>  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="vehicle-details.php?vhid=<?php echo htmlentities($result->id);?>">
<img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType);?></li>
<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear);?> Model</li>
<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->BrandName);?></li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehicle-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?> , 
<?php echo htmlentities($result->Title);?></a></h6>
<span class="price">$<?php echo htmlentities($result->Price);?>-VAT</span>
</div>
<div class="inventory_info_m">
<p><?php echo substr($result->Overview,0,70);?></p>
</div>
</div>
</div>
<?php }}?>
       
      </div>
    </div>

  </div>
</section>

<!-- /Resent Cat --> 
	   <!-- ======= Clients Section ======= -->
    <form method="post" action="search.php"> 
    <section id="clients" class="clients section-bg"><br><br><br>
      <div class=" " data-aos="fade-up">
        <div class="section-title">
          <h2>Top Sales Models</h2>
          <p>SERVICE PROVIDERS AND SUPPLIERS</p>
        </di>
        <div class="clients-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper align-items-center">
           <div style="padding-right:200px;" class="swiper-slide"><a href="search.php?searchdata=scania"><img style="height:75px;" src="assets/images/suppliers/supplier1.png"class="img-fluid" alt=""/></a></div>
            <div style="padding-right:50px;" class="swiper-slide"><a href="search.php?searchdata=mercedes benz"><img style="height:80px;"src="assets/images/suppliers/supplier2.png" class="img-fluid" alt=""/></a></div>
            <div style="padding-right:140px;" class="swiper-slide"><a href="search.php?searchdata=daf"><img style="height:70px; padding-top:15px;"src="assets/images/suppliers/supplier3.png" class="img-fluid" alt=""/></a></div>
            <div style="padding-right:80px; " class="swiper-slide"><a href="search.php?searchdata=volvo"><img style="height:95px;" src="assets/images/suppliers/supplier4.png" class="img-fluid" alt=""/></a></div>
           <div style="padding-right:50px;" class="swiper-slide"><a href="search.php?searchdata=man"><img style="height:80px;" src="assets/images/suppliers/supplier5.png" class="img-fluid" alt=""/></a></div>
            <div style="padding-right:210px;" class="swiper-slide"><a href="search.php?searchdata=renault"><img style="height:80px;" src="assets/images/suppliers/supplier6.png" class="img-fluid" alt=""/></a></div>
            <div style="padding-right:75px;" class="swiper-slide"><a href="search.php?searchdata=ud"><img style="height:90px;" src="assets/images/suppliers/supplier7.png" class="img-fluid" alt=""/></a></div>
			 <div style="padding-right:150px;" class="swiper-slide"><a href="search.php?searchdata=iveco"><img style="height:60px;" src="assets/images/suppliers/supplier8.png" class="img-fluid" alt=""/></a></div>
            <!--div style="padding-right:79px;" class="swiper-slide"><img style="height:84px;" src="assets/images/suppliers/supplier9.png" class="img-fluid" alt=""></div>
            <div style="padding-right:80px;" class="swiper-slide"><img style="height:100px;" src="assets/images/suppliers/supplier10.png" class="img-fluid" alt=""></div>
            <div style="padding-right:93px;" class="swiper-slide"><img style="height:80px;" src="assets/images/suppliers/supplier11.png" class="img-fluid" alt=""></div>
            <div style="padding-right:65px;" class="swiper-slide"><img style="height:85px;" src="assets/images/suppliers/supplier12.png" class="img-fluid" alt=""></div>
            <div style="padding-right:130px;" class="swiper-slide"><img style="height:85px;"src="assets/images/suppliers/supplier13.png" class="img-fluid" alt=""></div>
            <div style="padding-right:130px;" class="swiper-slide"><img style="height:85px;"src="assets/images/suppliers/supplier14.png" class="img-fluid" alt=""></div-->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> 
    </form> 
	
	
  <!-- ======= Clients Section end======= -->
<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>10+</h2>
            <p>Years In Business</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2>
            <p>Vehicles Sold</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>10+</h2>
            <p>Pending Deliveries</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>1200+</h2>
            <p>Satisfied Customers</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts--> 


<!--Testimonial -->
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>Our Satisfied <span>Customers</span></h2>
    </div>
    <div class="row">
      <div id="testimonial-slider">
<?php 
$tid=1;
$sql = "SELECT tbltestimonial.Testimonial,tblusers.FullName from tbltestimonial join tblusers on tbltestimonial.UserEmail=tblusers.EmailId where tbltestimonial.status=:tid";
$query = $dbh -> prepare($sql);
$query->bindParam(':tid',$tid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>

 
        <div class="testimonial-m">
   <!--div class="testimonial-img"> <img src="assets/images/testimonial-img-3.jpg" alt="images" /> </div-->
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5><?php echo htmlentities($result->FullName);?></h5>
            <p><?php echo htmlentities($result->Testimonial);?></p>
          </div>
        </div>
        </div>
        <?php }} ?>
        
       
  
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Testimonial--> 
<!--Brands-->
<section class="brand-section gray-bg">
  <div class="container">
    <div class="brand-hadding">
         <p style="font-size:14px;"><b>Shipping Destinations</b></p>
    </div>
    <div class="brand-logo-list">
      <div id="popular_brands">
        <div><a href="page.php?type=contactus" target="_blank"><img src="assets/images/suppliers/country1.png" class="img-fluid" alt="image"><br>Zimbabwe</a></div>
        <div><a href="page.php?type=contactus" target="_blank"><img src="assets/images/suppliers/country2.png" class="img-fluid" alt="image"><br>Zambia</a></div>
        <div><a href="page.php?type=contactus" target="_blank"><img src="assets/images/suppliers/country3.png" class="img-fluid" alt="image"><br>Tanzania</a></div>
        <div><a href="page.php?type=contactus" target="_blank"><img src="assets/images/suppliers/country4.png" class="img-fluid" alt="image"><br>Botswana</a></div>
        <div><a href="page.php?type=contactus" target="_blank"><img src="assets/images/suppliers/country5.png" class="img-fluid" alt="image"><br>Malawi</a></div>
        <div><a href="page.php?type=contactus" target="_blank"><img src="assets/images/suppliers/country6.png" class="img-fluid" alt="image"><br>Mozambique</a></div>
        <div><a href="page.php?type=contactus" target="_blank"><img src="assets/images/suppliers/country7.png" class="img-fluid" alt="image"><br>South Africa</a></div>
        <div><a href="page.php?type=contactus" target="_blank"><img src="assets/images/suppliers/country8.png" class="img-fluid" alt="image"><br>Namibia</a></div>
     
      </div>
    </div>
  </div>
</section>
<!-- /Brands--> 

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
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<script src="assets/css/clients.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

 <script>
let items = document.querySelectorAll('.slider2 .list1 .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
//let thumbnails = document.querySelectorAll('.thumbnail .item');

// config param
let countItem = items.length;
let itemActive = 0;
// event next click
next.onclick = function(){
    itemActive = itemActive + 1;
    if(itemActive >= countItem){
        itemActive = 0;
    }
    showSlider();
}
//event prev click
prev.onclick = function(){
    itemActive = itemActive - 1;
    if(itemActive < 0){
        itemActive = countItem - 1;
    }
    showSlider();
}
// auto run slider
let refreshInterval = setInterval(() => {
    next.click();
}, 10000)
function showSlider(){
    // remove item active old
    let itemActiveOld = document.querySelector('.slider2 .list1 .item.active');
   // let thumbnailActiveOld = document.querySelector('.thumbnail .item.active');
    itemActiveOld.classList.remove('active');
   // thumbnailActiveOld.classList.remove('active');

    // active new item
    items[itemActive].classList.add('active');
   // thumbnails[itemActive].classList.add('active');
    //setPositionThumbnail();

    // clear auto time run slider
    clearInterval(refreshInterval);
    refreshInterval = setInterval(() => {
        next.click();
    }, 10000)
}
 
</script>
</body>


</html>