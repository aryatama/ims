<!-- Services section -->
			<div class="section" id="services">
			
				<div class="services">
				
					<!-- Tab element -->
					<?php foreach ($products as $product) {  ?>
						
					
					<div id="services-tab-id-<?php echo $product['product_id'] ?>" class="service-item <?php if($product['product_id']=='1'){echo 'selected';}?>">
					
						<!-- Tab content -->
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-md-offset-6">
								
									<div class="tab-content">
								
										<h2 class="h1 wow zoomInDown"><?php echo $product['product_name'] ?></h2>
										
										<h6><?php echo $product['sub_name'] ?></h6>
										
										<p><?php echo $product['product_description'] ?></p>
										
										<a href="javascript:;" class="button orange inverted wow wobble" data-wow-delay="0.5s">Purchase Theme</a>
									
									</div>
								
								</div>
							</div>
						</div>
					
					</div>

					<?php  } ?>
									
				</div>
				
				<!-- Tabs pagination -->
				<div class="services-pagination">
				
				<?php foreach ($products as $product) {  ?>

					<a href="#services-tab-id-<?php echo $product['product_id'] ?>" class="tab-link services-link-id-1 <?php if($product['product_id']==4){echo 'selected';}?>">
						<i class="icon"></i>
						<span><?php echo $product['product_name'] ?></span>
					</a>
				<?php } ?> 
				
				</div>
			
			</div>