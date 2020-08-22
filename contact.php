<?php include ("header.php"); ?>
<?php include ("conn.php"); ?>

	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Address</h3>
	            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">yoursite.com</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters" >
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
					<?php 
					
					if(isset ($_POST['done']))
					{
						$Name = $_POST['Name'];
						$Email = $_POST['Email'];
						$Phone = $_POST['Phone'];
						$Subject = $_POST['Subject'];
						$Message = $_POST['Message'];
						
					$query =" INSERT INTO `contact`(`Id`, `Name`, `Email`, `Phone`, `Subject`, `Message`) VALUES (NULL, '$Name', '$Email', '$Phone', '$Subject', '$Message')";
						$data = mysqli_query($conn,$query);
					}
					
					
					?>
					
						<form action="" method="post">
              <div class="form-group">
                <input type="text" class="form-control" Name="Name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="Email" class="form-control" Name="Email" placeholder="Your Email" required>
              </div>
			  <div class="form-group">
                <input type="text" class="form-control" Name="Phone" placeholder="Phone"required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" Name="Subject" placeholder="Subject"required>
              </div>
              <div class="form-group">
                <textarea id="" cols="30" rows="7" class="form-control" Name="Message" placeholder="Message"required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" Name="done" class="btn btn-primary py-3 px-5">
              </div>
            </form>
					</div>
					<div class=" row  col-md-6" >
					<div class=" p-5 d-flex align-items-stretch bg-light" style="width:100%">
						
         
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.208706496693!2d76.68936401431631!3d30.712532593658544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fee55779851f1%3A0x65dc077b4d98becf!2sImpinge%20Solutions!5e0!3m2!1sen!2sin!4v1590149033332!5m2!1sen!2sin" frameborder="0" style="border:0; width:100%;" allowfullscreen="" ></iframe>
      </div>
					</div>
				</div>
			</div>
		</section>

<?php include ("footer.php"); ?>