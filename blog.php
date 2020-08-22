<?php include ("header.php"); ?>
<?php include ("conn.php"); ?>

	<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Our Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
				<?php	 
	 $query = "SELECT * FROM  `blog` ";
		$data = mysqli_query($conn,$query);
		while( $res = mysqli_fetch_array($data)){
?>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.php" class="block-20 d-flex align-items-end" >
			  <img src = "<?php echo $res['image'];?>" class="block-20 d-flex align-items-end" >
								<div class="meta-date text-center p-2" style="position: absolute;">
                  <span class="day"><?php echo $res['day'];?></span>
                  <span class="mos"><?php echo $res['month'];?></span>
                  <span class="yr"><?php echo $res['year'];?></span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#"><?php echo $res['topic'];?></a></h3>
                <p><?php echo $res['content'];?></p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2"><?php echo $res['role'];?></a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> <?php echo $res['message'];?></a>
	                </p>
                </div>
              </div>
            </div>
          </div>   
		<?php } ?>
        </div>
        <div class="row no-gutters my-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
			</div>
		</section>

<?php include ("footer.php");?>