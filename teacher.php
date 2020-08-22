<?php include ("header.php"); ?>
<?php include ("conn.php"); ?>

	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Certified Teachers</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Teachers <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pb">
		
			<div class="container">
				<div class="row">
				<?php
	 
	 $query = "SELECT * FROM  `teacher` LIMIT 8";
		$data = mysqli_query($conn,$query);
		while( $res = mysqli_fetch_array($data)){
?>
					<div class="col-md-3 col-lg-3 ftco-animate">
						
						<div class="staff">
						
							<div class="img-wrap d-flex align-items-stretch">
								
								
								<div class="img align-self-stretch">
								<img class="img align-self-stretch" src="<?php echo $res['T_Image'];?>" >
								</div>
							</div>
								
		
							<div class="text pt-3 text-center">
								<h3><?php echo $res['T_F_Name'];?> <?php echo $res['T_L_Name'];?></h3>
								<span class="position mb-2"><?php echo $res['T_Specialization'];?></span>
								<div class="faded">
									<p><?php echo $res['T_Status'];?></p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
						
					</div>
					<?php } ?>
				</div>
			</div>
			
		</section>
		

<?php include ("footer.php"); ?>