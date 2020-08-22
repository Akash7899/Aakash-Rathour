<?php include ("header.php"); ?>
<?php include ("conn.php"); ?>

	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Our Courses</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Courses <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
			<div class="row mb-4">
				<?php
					$query = "SELECT * FROM  `course` ";
					$data = mysqli_query($conn,$query);
					while( $res = mysqli_fetch_array($data)){
					?>
				
					<div class="col-md-6 course d-lg-flex ftco-animate mb-4">
					
						<img class="img course" src="<?php echo $res['Courses_Image'];?>" >
						<div class="text bg-light p-4">
							<h3><a href="#"><?php echo $res['Courses_Name'];?></a></h3>
							<p class="subheading"><span>Class time:</span> <?php echo $res['Courses_Start'];?>- <?php echo $res['Courses_End'];?></p>
							<p><?php echo $res['Courses_Status'];?></p>
						</div>						
					
					</div>
<?php  } ?>					
				</div>
			</div>
		</section>

<?php include ("footer.php"); ?>