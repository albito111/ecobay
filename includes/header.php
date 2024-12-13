
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><img style="height:60px;" src="assets/images/logo.png" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
   

            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">For Support Mail us : </p>
              <a href="mailto:info.ecobayfreight@gmail.com">info.ecobayfreight@gmail.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Service Helpline Call Us: </p>
              <a href="tel:+263716685631">+263 716 685 631</a> </div>
            <div class="social-follow">
            
            </div>
   <?php   if(strlen($_SESSION['login'])==0)
	{	
?>
 <div class="login_btn"> <a href="#loginform"  style ="margin-top:-26px;" class="btn btn-xs uppercase" data-toggle="modal" 
 data-dismiss="modal">Login / Register</a> </div>
<?php }
else{ 

 
 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button" style="border-color:white; "> 
		<span class="sr-only">Toggle navigation</span> 
		<span class="icon-bar" style="background-color:white;"></span> 
		<span class="icon-bar" style="background-color:white;"> </span> 
		<span class="icon-bar" style="background-color:white;"> </span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
<?php 
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
 
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?>
   <i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="my-booking.php">My Orders</a></li>
            <li><a href="post-testimonial.php">Post a Testimonial</a></li>
          <li><a href="my-testimonials.php">My Testimonial</a></li>
        
            <li><a href="logout.php">Sign Out</a></li>
            <?php } ?>
          </ul>
		  <?php if(strlen($_SESSION['login'])==0)
	{ ?> 
<ul class="dropdown-menu"> 
            <li><a href="#loginform" class=" uppercase"
 data-toggle="modal" data-dismiss="modal" >Login/Register</a></li>
         
     
          </ul>
<?php } ?>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="search.php" method="post" id="header-search-form">
            <input type="text" placeholder="Search..." name="searchdata" class="form-control" required="true">
            <button type="submit" name="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a>    </li>
          	 
          <li><a href="page.php?type=aboutus">About Us</a></li>
          <li><a href="car-listing.php">Car Listing</a>
          <li><a href="page.php?type=services">Our Services</a></li>
          <li><a href="page.php?type=contactus">Contact Us</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>

 <script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navigation_bar").style.top = "0px";
    document.getElementById("navigation_bar").style.position = "fixed"; 
    document.getElementById("navigation_bar").style.width = "100%"; 
    document.getElementById("navigation_bar").style.background = "#2d3290"; 
    document.getElementById("navigation_bar").style.z_index = "3"; 
  
  
  } else {
	  //at the default position
    document.getElementById("navigation_bar").style.padding = "0";
      document.getElementById("navigation_bar").style.position = "relative"; 
    document.getElementById("navigation_bar").style.background = "#111111 none repeat scroll 0 0"; 
    document.getElementById("navigation_bar").style. border_radius = "0"; 
 
  }
}
</script>