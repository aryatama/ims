<!-- Our Clients section -->
			<div class="section" id="clients" style="background: url(<?php echo base_url('assets/upload/image/'.$gallery['image']) ;?>) center center no-repeat;">
			
				<div class="container">
					<div class="row">
						<div class="col-md-12">
						
							<h2 class="h1 wow zoomInDown">What Our Clients Says About Us</h2>
							
							<div class="testimonials-carousel owl-carousel">
							
								<!-- Testimonial item -->
								<?php 
                                    foreach ($clients as $client){
                                        if ($client['client_id']++ < 10) {
                                ?>

									<div class="item">
										<h2><?php echo $client['client_name'] ?></h2>
										<div class="image">
											<img src="<?php echo base_url('assets/upload/image/'.$client['image']);?>" data-at2x="" width="210" alt="" />
										</div>
										<div class="text">
											<p><?php echo $client['testimoni'] ?></p>
										</div>
										<div class="author">
											<a href="http://<?php echo $client['website'];?>" target="_blank"><?php echo $client['website'];?></a>
										</div>
									</div>
								<?php }}  ?>
                                 
							</div>
						
						</div>
					</div>
				</div>
				
				<!-- <div class="container testimonials-logos">
					<div class="row">
						<div class="col-md-3">
							<img src="<?php echo base_url('assets/public/images/demo-images/logo_1.png')?>" data-at2x="<?php echo base_url('assets/public/images/demo-images/logo_1@2x.png')?>" width="210" alt="" />
						</div>
						<div class="col-md-3">
							<img src="<?php echo base_url('assets/public/images/demo-images/logo_2.png')?>" data-at2x="<?php echo base_url('assets/public/images/demo-images/logo_2@2x.png')?>" width="210" alt="" />
						</div>
						<div class="col-md-3">
							<img src="<?php echo base_url('assets/public/images/demo-images/logo_3.png')?>" data-at2x="<?php echo base_url('assets/public/images/demo-images/logo_3@2x.png')?>" width="210" alt="" />
						</div>
						<div class="col-md-3">
							<img src="<?php echo base_url('assets/public/images/demo-images/logo_4.png')?>" data-at2x="<?php echo base_url('assets/public/images/demo-images/logo_4@2x.png')?>" width="210" alt="" />
						</div>
					</div>
				</div> -->
			
			</div>