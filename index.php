<?php include ("header.php"); ?>
<?php include ("conn.php"); ?>



	<section class="home-slider owl-carousel">
	<?php
	 
	 $query = "SELECT * FROM  `slider`";
		$data = mysqli_query($conn,$query);
		while( $res = mysqli_fetch_array($data)){
?>
      <div class="slider-item" >
		 <img class="img" src="<?php echo $res['Image'];?>"  id="img-uploaded"/ style="position: absolute;">
     <!--<div class="slider-item" style="background-image:url(assets/images/bg_1.jpg);">-->
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4"><?php echo $res['Heading'];?> <span><?php echo $res['Content'];?></span></h1>
            <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
          </div>
        </div>
        </div>
      </div>      
	  <?php } ?>
    </section>

    <section class="ftco-services ftco-no-pb">
			<div class="container-wrap">
				<div class="row no-gutters">
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-teacher"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Certified Teachers</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-reading"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Special Education</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Book &amp; Library</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-diploma"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Certification</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
		
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
						<div class="text px-4 ftco-animate">
	          	<h2 class="mb-4">Welcome to Kiddos Learning School</h2>
							<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.</p>
							<p><a href="#" class="btn btn-secondary px-4 py-3">Read More</a></p>
						</div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 class="mb-4">What We Offer</h2>
						<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
						<div class="row mt-5">
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
									<div class="text">
										<h3>Safety First</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
									<div class="text">
										<h3>Regular Classes</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
									<div class="text">
										<h3>Certified Teachers</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
									<div class="text">
										<h3>Sufficient Classrooms</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
									<div class="text">
										<h3>Creative Lessons</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
									<div class="text">
										<h3>Sports Facilities</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-intro" style="background-image: url(assets/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h2>Teaching Your Child Some Good Manners</h2>
						<p class="mb-0">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
					</div>
					<div class="col-md-3 d-flex align-items-center">
						<p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Take a Course</a></p>
					</div>
				</div>
			</div>
		</section>

		
		<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Certified</span> Teachers</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>	
				<div class="row">
				<?php
	 
	 $query = "SELECT * FROM  `teacher` LIMIT 4";
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

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Our</span> Courses</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>	
				<div class="row mb-4">
				<?php
					$query = "SELECT * FROM  `course` LIMIT 4";
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

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(assets/images/bg_4.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
            <h2 class="mb-4"><span>20 Years of</span> Experience</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
		
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-10">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
					  <strong class="number" data-number="18">0</strong>
		                <span>Certified Teachers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="351">0</strong>
		                <span>Successful Kids</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="564">0</strong>
		                <span>Happy Parents</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Awards Won</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>What Parents</span> Says About Us</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
			<?php
	 
	 $query = "SELECT * FROM  `teacher`";
		$data = mysqli_query($conn,$query);
		while( $res = mysqli_fetch_array($data)){
?>
              <div class="item">
			 
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4">
					<img src = "<?php echo $res['T_Image'];?>" class="user-img mr-4">
				  
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p><?php echo $res['T_Status'];?></p>
                    <p class="name"><?php echo $res['T_F_Name'];?> <?php echo $res['T_L_Name'];?></p>
                    <span class="position"><?php echo $res['T_Role'];?></span>
                  </div>
                </div>
					
              </div>
              <?php } ?>
                
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(assets/images/bg_5.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5 bg-primary">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	            <h2 class="mb-4">Request A Quote</h2>
	            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	          </div>
			  <?php 
			  if(isset ($_POST['done'])){
				  
				  $name = $_POST['name'];
				  $email = $_POST['email'];
				  $course1 = $_POST['course'];
				  $phone = $_POST['phone'];
				  $message = $_POST['message'];
				  
				 $query = "INSERT INTO `request_ quote`(`Id`, `name`, `email`, `course`, `phone`, `message`) VALUES (NULL , '$name', '$email', '$course1', '$phone', '$message')";
					$data = mysqli_query($conn,$query);
					
					
									   
			  }
			  
			  
			  ?>
			  
				
			  
	          <form action="" class="appointment-form ftco-animate" method="post">
			  
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" Name="name" placeholder="Your Name" required>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="email" class="form-control" Name="email" placeholder="Email" required>
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		    					<div class="form-field">
          					<div class="select-wrap">
							
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="course" id=""  class="form-control">
					  
                      	<option value="">Select Your Course</option>
                        <option value="Art Lesson">Art Lesson</option>
                        <option value="Language Lesson">Language Lesson</option>
                        <option value="Music Lesson">Music Lesson</option>
                        <option value="Sports">Sports</option>
                        <option value="Other Services">Other Services</option>
                      </select>
                    </div>
		              </div>
		    				</div>
	    					<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" Name="phone" placeholder="Phone"required>
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Message" required></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Request A Quote" Name="done" class="btn btn-secondary py-3 px-4">
		            </div>
	    				</div>
	    			</form>
    			</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Our</span> Pricing</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
    		<div class="row">
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Basic</h3>
	        			<p><span class="price">$24.50</span> <span class="per">/ 5mos</span></p>
	        		</div>
	        		<div class="img" style="background-image: url(assets/images/bg_1.jpg);"></div>
	        		<div class="px-4">
	        			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        			</div>
        			<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Take A Course</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Standard</h3>
	        			<p><span class="price">$34.50</span> <span class="per">/ 5mos</span></p>
	        		</div>
	        		<div class="img" style="background-image: url(assets/images/bg_2.jpg);"></div>
        			<div class="px-4">
	        			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        			</div>
        			<p class="button text-center"><a href="#" class="btn btn-secondary px-4 py-3">Take A Course</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light active pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Premium</h3>
	        			<p><span class="price">$54.50</span> <span class="per">/ 5mos</span></p>
	        		</div>
	        		<div class="img" style="background-image: url(assets/images/bg_3.jpg);"></div>
        			<div class="px-4">
	        			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        			</div>
        			<p class="button text-center"><a href="#" class="btn btn-tertiary px-4 py-3">Take A Course</a></p>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3 ftco-animate">
        		<div class="pricing-entry bg-light pb-4 text-center">
        			<div>
	        			<h3 class="mb-3">Platinum</h3>
	        			<p><span class="price">$89.50</span> <span class="per">/ 5mos</span></p>
	        		</div>
	        		<div class="img" style="background-image: url(assets/images/bg_5.jpg);"></div>
        			<div class="px-4">
	        			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        			</div>
        			<p class="button text-center"><a href="#" class="btn btn-quarternary px-4 py-3">Take A Course</a></p>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Recent</span> Blog</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
				<div class="row">
				<?php	 
	 $query = "SELECT * FROM  `blog` LIMIT 3";
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
			</div>
		</section>

		<section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="assets/images/course/course-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets/images/course/course-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
							</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="assets/images/Blog/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets/images/Blog/image_2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="assets/images/Blog/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets/images/Blog/image_3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="assets/images/Blog/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets/images/Blog/image_4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

<?php include ("footer.php"); ?>