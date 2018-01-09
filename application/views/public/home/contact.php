<!-- Kontak section -->
			<div class="section" id="contact">
			
				<div class="container">
					<div class="row">
						<div class="col-md-12">
					    <?php  // Session  
					    	if($this->session->flashdata('sukses')) { 
			                echo '<div class="alert alert-success">';
			                echo $this->session->flashdata('sukses');
			                echo '</div>';
			            } 
			            	// Error
			            	echo validation_errors('<div class="alert alert-success">','</div>'); 
			            ?> 

							<!-- Contact section header -->
							<div class="row">
								<div class="col-md-6">
								
									<h2 class="h1 wow zoomInDown">Get In Touch</h2>
									
									<p><?php echo $site['kontak_deskripsi'] ?></p>
								
								</div>
							</div>
						
							<div class="row">
								<div class="col-md-6">


									<!-- Contact form block -->
									<form id="contactform" method="post" action="<?php echo base_url('kontak/kirim_pesan');?>">
										
										<div class="row">
										
											<div class="col-md-6">
												<input type="text" id="input-name" name="name" placeholder="Your Name" />
											</div>
											
											<div class="col-md-6">
												<input type="email" id="input-email" name="email" placeholder="Email" />
											</div>
										
										</div>
										
										<div class="row">
										
											<div class="col-md-6">
												<input type="text" id="input-phone" name="phone" placeholder="Phone" />
											</div>
											
											<div class="col-md-6">
												<input type="text" id="input-subject" name="subject" placeholder="Subject" />
											</div>
										
										</div>
										
										<div class="row">
										
											<div class="col-md-12">
												<textarea name="messages" id="input-message" placeholder="Your Message"></textarea>
											</div>
										
										</div>
										
										<div class="row">
										
											<div class="col-md-12">
												<button type="submit" class="button blue">Send Your Message</button>
											</div>
										
										</div>
									
									</form>
								
								</div>
								<div class="col-md-5 col-md-offset-1">
								
									<!--
										Contact information block
									-->
									<div class="contact-information">
									
										<!--
											Address
										-->
										<div class="item address">
										
											<p>
												<?php echo $site['address'];?><br />
												<?php echo $site['city'] ?><br />
												<?php echo $site['zip_code'] ?>
											</p>
										
										</div>
										
										<!--
											Phones and Fax
										-->
										<div class="item phones">
										
											<p>
												<?php echo $site['phone_number'] ?><br />
												<?php echo $site['fax'] ?>
											</p>
										
										</div>
										
										<!--
											Email
										-->
										<div class="item email">
										
											<p>
												<a href="mailto:support@sitename.com">support@sitename.com</a><br />
												<a href="mailto:info@sitename.com">info@sitename.com</a>
											</p>
										
										</div>
									
									</div>
								
								</div>
							</div>

						</div>
					</div>
				</div>
			
			</div>