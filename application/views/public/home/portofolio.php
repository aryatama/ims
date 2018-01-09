<!-- Portfolio -->
			<div class="section" id="works">
			
				<div class="portfolio">
				
					<div class="portfolio-header style-left">
					
						<div class="container">
							<div class="row">
								<div class="col-md-12">
								
									<!-- Section header -->
									<h2 class="h1 wow zoomInDown">Latest Works</h2>
									
									<!-- Portfolio filters -->
									<div class="filters">

										<a href="javascript:;" data-filter=".item" class="selected">
											<span class="line_wrap">
												<span class="line"></span>
												All categories
											</span>
										</a>
										<a href="javascript:;" data-filter=".filter-graphic">
											<span class="line_wrap">
												<span class="line"></span>
												Graphic Design
											</span>
										</a>
										<a href="javascript:;" data-filter=".filter-web-design">
											<span class="line_wrap">
												<span class="line"></span>
												Web Design
											</span>
										</a>
										<a href="javascript:;" data-filter=".filter-apps">
											<span class="line_wrap">
												<span class="line"></span>
												Apps
											</span>
										</a>
										<a href="javascript:;" data-filter=".filter-development">
											<span class="line_wrap">
												<span class="line"></span>
												Development
											</span>
										</a>
									</div>
								
								</div>
							</div>
						</div>
						
					</div>
					
					<!--
						Portfolio justified gallery
					-->
					<div class="portfolio-gallery">

					<?php foreach ($galleries as $gallery){ ?>
                        <?php if ($gallery['position'] == 'slider') { ?>    
					
						<div class="item filter-graphic filter-web-design">
						
							<!-- Thumbnail -->
							<img src="<?php echo base_url('assets/public/images/demo-images/work_1.jpg') ?>" alt="" />
							<div class="caption">

								<!-- Work title -->
								<h4>A4 Paper PSD MockUp</h4>

								<!-- Zoom link -->
								<a href="<?php echo base_url('assets/public/images/demo-images/work_1.jpg') ?>" class="zoom lightbox"></a>

								<!-- Tags -->
								<div class="tags">
									<a href="blog.html">Graphic design</a>
								</div>

							</div>
						</div>

						<?php } ?>

                    <?php } ?>
					</div>
					
					<div class="portfolio-pagination">
						<a href="" class="portfolio-load-more"><i class="icon"></i> <span>Load More Works</span></a>
					</div>
				
				</div>
			
			</div>