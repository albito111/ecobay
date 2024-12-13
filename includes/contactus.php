<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
  {
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Message Sent. We will contact you shortly";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #FF7F7F;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #90EE90;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Contact Us</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Contact Us</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Contact-us-->
<section class="contact_us section-padding">
  <div class="container">
    <div  class="row">
      <div class="col-md-4">
        <h3>Get a quote</h3>
          <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <div class="contact_form gray-bg">
          <form  method="post">
            <div class="form-group">
              <label class="control-label">Full Name <span>*</span></label>
              <input type="text" name="fullname" class="form-control white_bg" id="fullname" required>
            </div>
            <div class="form-group">
              <label class="control-label">Email Address <span>*</span></label>
              <input type="email" name="email" class="form-control white_bg" id="emailaddress" required>
            </div>
            <div class="form-group">
              <label class="control-label">Phone Number <span>*</span></label>
              <input type="text" name="contactno" class="form-control white_bg" id="phonenumber" required maxlength="10" pattern="[0-9]+">
            </div>
            <div class="form-group">
              <label class="control-label">Message <span>*</span></label>
              <textarea class="form-control white_bg" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Send Message <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <h3>U.K Office Info</h3>
        <div class="contact_detail">
 
          <ul>
            <li>
              <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="contact_info_m">126 Aylestone drive Leicester LE28SA</div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="tel:+441162919950">+44 1162 919 950 or +44 7923 974 191</a></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="mailto:info@ecobayfreight.co.uk">john@ecobayfreight.co.uk or info@ecobayfreight.co.uk</a></div>
            </li>
          </ul>
        </div>
		
		<br>
		<br>
		<br>
		        <h3>Zimbabwe Ofice Info</h3>
        <div class="contact_detail">
          <ul>
            <li>
              <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="contact_info_m">151 Sam Nujoma Street, Belgravia Harare</div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="tel:+263716685631">+263 772 919 500 or +263 716 685 631</a></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="mailto:info.ecobayfreight@gmail.com">info.ecobayfreight@gmail.com</a></div>
            </li>
          </ul>
    
        </div>
      </div>
	        <div class="col-md-4">
    
        <div class="contact_detail">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2423.4274947821777!2d-1.1511584!3d52.5980433!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4877673b21df4c1f%3A0x36372ccd9639df23!2s126%20Aylestone%20Dr%2C%20Aylestone%2C%20Leicester%20LE2%208SA%2C%20UK!5e0!3m2!1sen!2szw!4v1733383360194!5m2!1sen!2szw" width="400" height="300" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	  
		<br>  
		<br>
		<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3798.1581455964038!2d31.049118175198082!3d-17.831219883133684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a4e616b68d4f%3A0x3fc628097176d370!2sSam%20Nujoma%20St%2C%20Harare!5e0!3m2!1sen!2szw!4v1733383739979!5m2!1sen!2szw" width="400" height="300" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
	
  </div>
</section>
<!-- /Contact-us--> 