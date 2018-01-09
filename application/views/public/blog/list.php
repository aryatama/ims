<!-- Blog section area -->

		<div id="content-wrapper">
			<div class="container">
			
				<div class="row">
				
					<!--  Article -->
				
					<div id="content" class="col-md-8">
											
						<!-- Post -->
						<?php foreach ($blogs as $list){?>
						<article class="post post-part format-photo">
		
							<header>
								<div class="overlay"></div>
								<a href="<?php echo base_url('blog/detil/'.$list['slug_blog']);?>" title="<?php echo $list['title'];?>">
									<img src="<?php echo base_url('assets/upload/image/'.$list['image']);?>"  alt="" />
								</a>
								<a href="<?php echo base_url('assets/upload/image/'.$list['image']);?>" class="zoom lightbox"></a>
								<a href="<?php echo base_url('blog/detil/'.$list['slug_blog']);?>" class="link"></a>
							</header>
							
							<div class="indent post-excerpt">
							
								<h4>
									<a href="<?php echo base_url('blog/detil/'.$list['slug_blog']);?>">
									<?php echo $list['title'];?>
									</a>
								</h4>
								<p>	<?php
                                        $out = strlen($list['content']) > 150 ? substr($list['content'],0,150).'... <a href="'. base_url('blog/detil/'.$list['slug_blog']).'" class="moretag">detil Selengkapnya</a> ' : $list['content'];
                                        echo $out;
                                    ?>  
                                </p>
								<div class="post-data">
									by <a href="#">Admin</a> 
									<span class="delimeter">/</span> 
										<?php echo date('l, d M Y', strtotime($list['date_post'])); ?> 
									<span class="delimeter">/ In</span>  
									<a href="<?php echo base_url('blog/category/'.$list['slug_category']);?>">
										<?php echo $list['category_name'];?>
									</a>
									<?php 
                                        $blog_id = $list['blog_id'];
                                        $count = $this->mBlogs->countCommentByBlog($blog_id);
                                    ?>
                                    / <?php echo $count;?> Comments
								</div>
								
								<a href="<?php echo base_url('blog/detil/'.$list['slug_blog']);?>" class="read-more"></a>
							
							</div>
							
						</article>
						<?php } ?>
						
						<!-- Pagination -->
						<div class="pagination">
						
							<a href="javascript:;" class="button nav-prev gray">Previous</a>
							
							<a href="javascript:;" class="button nav-next green">Next</a>
						
						</div>

					</div>
					
					<!-- Sidebar -->
					<aside id="sidebar" class="col-md-3 col-md-offset-1">
					
						<!-- Search widget -->
						<div class="widget">
						
							<div class="widget-content">
								<form action="javascript:;" method="post">
									<input type="search" value="" placeholder="Search..." />
								</form>
							</div>
						
						</div>
						
						<!-- Categories widget -->
						<div class="widget widget-categories">
						
							<h4 class="widget-title">Categories</h4>
							
							<nav class="widget-content">
								<ul>
									<li><a href="javascript:;">Web Design</a></li>
									<li><a href="javascript:;">Photography</a></li>
									<li><a href="javascript:;">Graphic Design</a></li>
									<li><a href="javascript:;">Envato</a></li>
									<li><a href="javascript:;">ThemeForest</a></li>
									<li><a href="javascript:;">WordPress Themes</a></li>
									<li><a href="javascript:;">PSD Templates</a></li>
									<li><a href="javascript:;">App</a></li>
								</ul>
							</nav>
						
						</div>
						
						<!-- Popular posts widget -->
						<div class="widget widget-posts">
						
							<h4 class="widget-title">Popular Posts</h4>
							
							<div class="widget-content">
								<ul>
									<li class="format-image">
										<a href="javascript:;" class="post-title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibhs</a>
										<a href="javascript:;" class="time">August 26, 2015</a>
									</li>
									<li class="format-video">
										<a href="javascript:;" class="post-title">Investigationes demonstraverunt lectores legere me</a>
										<a href="javascript:;" class="time">August 26, 2015</a>
									</li>
									<li class="format-audio">
										<a href="javascript:;" class="post-title">Claritas est etiam processus dynamicus, qui sequitur mutationem</a>
										<a href="javascript:;" class="time">August 26, 2015</a>
									</li>
									<li class="format-post">
										<a href="javascript:;" class="post-title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibhs</a>
										<a href="javascript:;" class="time">August 26, 2015</a>
									</li>
								</ul>
							</div>
						
						</div>
						
						<!--
							Photos widget
						-->
						<div class="widget widget-photos">
						
							<h4 class="widget-title">Photos Stream</h4>
							
							<div class="widget-content">
							
								<a href="javascript:;"><img src="<?php echo base_url() ?>assets/public/images/demo-images/photostream_1.jpg" data-at2x="<?php echo base_url() ?>assets/public/images/demo-images/photostream_1@2x.jpg" alt="" /></a>
								<a href="javascript:;"><img src="<?php echo base_url() ?>assets/public/images/demo-images/photostream_2.jpg" data-at2x="<?php echo base_url() ?>assets/public/images/demo-images/photostream_2@2x.jpg" alt="" /></a>
								<a href="javascript:;"><img src="<?php echo base_url() ?>assets/public/images/demo-images/photostream_3.jpg" data-at2x="<?php echo base_url() ?>assets/public/images/demo-images/photostream_3@2x.jpg" alt="" /></a>
								<a href="javascript:;"><img src="<?php echo base_url() ?>assets/public/images/demo-images/photostream_4.jpg" data-at2x="<?php echo base_url() ?>assets/public/images/demo-images/photostream_4@2x.jpg" alt="" /></a>
								<a href="javascript:;"><img src="<?php echo base_url() ?>assets/public/images/demo-images/photostream_5.jpg" data-at2x="<?php echo base_url() ?>assets/public/images/demo-images/photostream_5@2x.jpg" alt="" /></a>
								<a href="javascript:;"><img src="<?php echo base_url() ?>assets/public/images/demo-images/photostream_6.jpg" data-at2x="<?php echo base_url() ?>assets/public/images/demo-images/photostream_6@2x.jpg" alt="" /></a>
								<a href="javascript:;"><img src="<?php echo base_url() ?>assets/public/images/demo-images/photostream_7.jpg" data-at2x="<?php echo base_url() ?>assets/public/images/demo-images/photostream_7@2x.jpg" alt="" /></a>
								<a href="javascript:;"><img src="<?php echo base_url() ?>assets/public/images/demo-images/photostream_8.jpg" data-at2x="<?php echo base_url() ?>assets/public/images/demo-images/photostream_8@2x.jpg" alt="" /></a>
								<a href="javascript:;"><img src="<?php echo base_url() ?>assets/public/images/demo-images/photostream_9.jpg" data-at2x="<?php echo base_url() ?>assets/public/images/demo-images/photostream_9@2x.jpg" alt="" /></a>
							
							</div>
							
						</div>
						
						<!--
							Tags widget
						-->
						<div class="widget widget-tags">
						
							<h4 class="widget-title">Trending Tags</h4>
							
							<nav class="widget-content">
							
								<a href="javascript:;">Envato</a>
								<a href="javascript:;">ThemeForest</a>
								<a href="javascript:;">WordPress Theme</a>
								<a href="javascript:;">App</a>
								<a href="javascript:;">UI</a>
								<a href="javascript:;">PSD Temlates</a>
								<a href="javascript:;">Agency</a>
								<a href="javascript:;">Web Design</a>
								<a href="javascript:;">Photography</a>
							
							</nav>
							
						</div>
						
						<!--
							Archives widget
						-->
						<div class="widget widget-archives">
						
							<h4 class="widget-title">Archives</h4>
							
							<div class="widget-content">
								<ul>
									<li>
										<a href="javascript:;">July 2015</a>
										<a href="javascript:;" class="count">7</a>
									</li>
									<li>
										<a href="javascript:;">April 2015</a>
										<a href="javascript:;" class="count">28</a>
									</li>
									<li>
										<a href="javascript:;">February 2015</a>
										<a href="javascript:;" class="count">3</a>
									</li>
									<li>
										<a href="javascript:;">January 2015</a>
										<a href="javascript:;" class="count">39</a>
									</li>
									<li>
										<a href="javascript:;">December 2014</a>
										<a href="javascript:;" class="count">82</a>
									</li>
									<li>
										<a href="javascript:;">October 2014</a>
										<a href="javascript:;" class="count">10</a>
									</li>
									<li>
										<a href="javascript:;">August 2014</a>
										<a href="javascript:;" class="count">2</a>
									</li>
									<li>
										<a href="javascript:;">July 2014</a>
										<a href="javascript:;" class="count">9</a>
									</li>
								</ul>
							</div>
						
						</div>
						
						<!--
							Text widget
						-->
						<div class="widget widget-text">
						
							<h4 class="widget-title">About Agency</h4>
							
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Claritas est etiam processus dynamicus, sequitur.</p>
							
						</div>
					
					</aside>
				
				</div>
			
			</div>
		</div>