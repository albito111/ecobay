
<!--Page Header-->
<section class="page-header services_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Our Services</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Our Services</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Our-Services-->
<section class="our_services section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2>Ecobay Freight <span>Quality Services</span></h2>
      <p>Ecobay is dedicated to providing dependable and timely vehicle shipping solutions from the UK to various destinations across Africa.
	  <br>Our expertise guarantees your vehicle arrives at its destination safely and on time</p>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="services_image"> <img src="assets/images/our_services_1.jpg" alt="image">
          <div class="service_heading white-text">
            <h3>Roll-on Roll-off shipping</h3>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <!--h3>Looking <span>New Car?</span></h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at
		its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed 
		to using 'Content here, content here', making it look like readable English.</p-->
        
        <h4>Roll-on Roll-off (RoRo) shipping </h4>
        <ul class="list_style_none">
          <li><i class="fa fa-check" aria-hidden="true"></i><b>Convenience: </b>There's no need to disassemble or package the vehicle, making it a hassle-free option for shipping.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i><b>Efficiency:</b> Loading and unloading vehicles are quick and straightforward, which helps minimize delays and speeds up the shipping process.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i><b>Safety: </b>Vehicles are securely fastened on the RoRo ship to prevent movement during transit, ensuring their safety.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i><b>Versatility:</b> This method can accommodate a wide range of vehicles, including cars, trucks, motorcycles, and even heavy machinery.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i><b>Cost-Effective: </b>RoRo shipping is often more affordable compared to container shipping since vehicles are driven directly onto and off the vessel,
		  reducing handling costs.</li>
 
        </ul>
      </div>
    </div>
    <div class="space-80"></div>
    <div class="row">
      <div class="col-md-6 col-md-push-6">
        <div class="services_image"> <img src="assets/images/our_services_2.jpg" alt="image">
          <div class="service_heading white-text">
            <h3>Container shipping</h3>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-md-pull-6">
        <!--h3>Looking <span>Used Car?</span></h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
        <br-->
        <h4>Container shipping</h4>
        <ul class="list_style_none">
          <li><i class="fa fa-check" aria-hidden="true"></i><b>Security:</b> Containers provide a secure environment for cargo, protecting it from  damage, and harsh weather conditions. Additionally, containers can be sealed and tracked, ensuring the safety and integrity of the goods throughout the shipping process.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i><b>Versatility:</b> Containers can be used to transport a wide variety of goods, including perishables, electronics, textiles, and machinery. Specialized containers are also available for transporting hazardous materials, liquids, and oversized cargo.</li>
   
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /Our-Services--> 
 
<!-- Why-Choose-Us-->
<section class="why_choose_us section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Why <span>Choose Us</span></h2>
      <p>Choosing Ecobay Freight means partnering with a company that prioritizes your needs and delivers exceptional service every step of the way.
	  Our commitment to excellence ensures that your goods are transported safely, efficiently, and on time.</p>
    </div>
    <div class="row">
	
      <div class="col-md-9 col-sm-6">
        <h4> We offer:</h4>
        <ul class="list_style_none">
          <li><i class="fa fa-check" aria-hidden="true"></i><b>Expertise:</b> With years of experience in the industry, our knowledgeable team handles every detail with precision and care.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i><b>Reliability:</b> Count on us for consistent and dependable shipping solutions.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i><b>Global Reach:</b> Our extensive network allows us to navigate local and international logistics seamlessly.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i><b>Customer-Centric Approach:</b> Your satisfaction is our top priority, and we tailor our services to meet your specific requirements.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i><b>Innovation:</b> We utilize the latest technology to provide real-time tracking and efficient logistics management.</li>
          <li><i class="fa fa-check" aria-hidden="true"></i><b>Sustainability:</b> Committed to eco-friendly practices, we strive to reduce our environmental impact.</li>
        </ul>
 
      </div>
      <div class="col-md-3 ">
        <div class="video_box">
          <!--iframe class="mfp-iframe" src="assets/images/Untitled.mp4" allowfullscreen autoplay="off"></iframe-->
		   	<video width="320" height="240" controls>
			<source src="assets/images/Untitled.mp4" type="video/mp4">
			Your browser does not support the video tag.
			</video>
        </div>
      </div> 
    </div>
	       <div class="section-header text-center">
 
         <p>Let Ecobay Freight be your trusted partner in all your shipping and transportation needs. Experience the difference with us.</p>
    </div>
  </div>
</section>
<!-- /Why-Choose-Us-->  

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
        <div><a href="#"><img src="assets/images/suppliers/country1.png" class="img-fluid" alt="image"><br>Zimbabwe</a></div>
        <div><a href="#"><img src="assets/images/suppliers/country2.png" class="img-fluid" alt="image"><br>Zambia</a></div>
        <div><a href="#"><img src="assets/images/suppliers/country3.png" class="img-fluid" alt="image"><br>Tanzania</a></div>
        <div><a href="#"><img src="assets/images/suppliers/country4.png" class="img-fluid" alt="image"><br>Botswana</a></div>
        <div><a href="#"><img src="assets/images/suppliers/country5.png" class="img-fluid" alt="image"><br>Malawi</a></div>
        <div><a href="#"><img src="assets/images/suppliers/country6.png" class="img-fluid" alt="image"><br>Mozambique</a></div>
        <div><a href="#"><img src="assets/images/suppliers/country7.png" class="img-fluid" alt="image"><br>South Africa</a></div>
        <div><a href="#"><img src="assets/images/suppliers/country8.png" class="img-fluid" alt="image"><br>Namibia</a></div>
     
      </div>
    </div>
  </div>
</section>
<!-- /Brands--> 