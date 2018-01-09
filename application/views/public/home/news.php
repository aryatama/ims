<!--
				News carousel
			-->
			<div class="section" id="news">
			
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
						
							<h2 class="h1 wow zoomInDown">Our Recent News</h2>
							
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
							
						</div>
					</div>
				</div>
				
				<!-- News Slider main container -->
				<div class="news-carousel swiper-container">
			    <!-- Additional required wrapper -->
			    <div class="swiper-wrapper">
		        <!-- Slides -->
					<?php                             
                        foreach ($blogs as $blog){
                            if ($blog['blog_id']++ < 10) {
                    ?>
				        <div class="swiper-slide">
						
							<!-- News slide -->
							<div class="news-item">
							
								<!-- Post thumbnail -->
								<div class="thumbnail">
									<!-- hover overlay -->
									<div class="overlay"></div>
									<!-- hover links -->
									<a class="lightbox zoom" href="<?php echo base_url('assets/upload/image/'.$blog['image']);?>"></a>
									<a class="permalink" href="<?php echo base_url('blog/detil/'.$blog['slug_blog']);?>"></a>
									<!-- post thumbnail -->
									<img src="<?php echo base_url('assets/upload/image/'.$blog['image']);?>"  width="370" alt="" />
								</div>
								
								<!-- Post title -->
								<h4 class="h6"><a href="<?php echo base_url('blog/detil/'.$blog['slug_blog']);?>"><?php echo $blog['title'];?></a></h4>
								
								<!-- Post meta -->
								<div class="meta">
									by <a href="">Admin</a> <span class="separator">/</span> 
									<?php echo date('l, d M Y', strtotime($blog['date_post'])); ?>
								</div>
								
								<!-- read more link -->
								<a href="<?php echo base_url('blog/detil/'.$blog['slug_blog']);?>" class="read-more"></a>
							
							</div>
						
						</div>
					<?php }} ?>
			    </div>
			    <!-- Slider pagination -->
			    <div class="swiper-pagination"></div>
				</div>
			
			</div>