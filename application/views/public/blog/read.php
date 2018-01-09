<!-- Content section area -->
		<div id="content-wrapper">
			<div class="container">
			
				<div class="row">
				  	<?php
			            // Session 
			            if($this->session->flashdata('sukses')) { 
			                echo '<div class="alert alert-success">';
			                echo $this->session->flashdata('sukses');
			                echo '</div>';
			            } 
			            // Error
			            echo validation_errors('<div class="alert alert-success">','</div>'); 
		            ?>
				
					<!-- Article -->
				
					<div id="content" class="col-md-8">
					
						<article class="post">
							<!-- Content gallery example -->
							<div class="post-gallery">
								<div class="item">
									<img src="<?php echo base_url('assets/upload/image/'.$blog['image']);?>"  alt="" />
								</div>
								<span class="news-meta-date"><?php echo date('l, d/m/Y', strtotime($blog['date_post'])); ?></span>
                                        <span class="news-meta-category"><a href="<?php echo $blog['category_name'];?>" title="<?php echo $blog['category_name'];?>"><?php echo $blog['category_name'];?></a></span>
                                        <span class="news-meta-comments"><a href="#" title="3 comments"><?php echo $count;?> comments</a></span>
							</div>
						
							<!-- Indent with 40px, to skip it - just remove <div class="indent"> tag -->
							<div class="indent">
								<h3><?php echo $blog['title'];?></h3>
								
							</div>
														
							<div class="indent">
								<p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
							</div>
		
						</article>
						
						<!-- Social icons block -->
						<div class="indent social-icons">
							<a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="http://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a>
							<a href="http://pinterest.com" target="_blank"><i class="fa fa-pinterest-p"></i></a>
						</div>
						
						<!-- Comments block -->
						<div class="indent" id="comments">
						
							<h4 class="h4 reply-header">Comments <?php echo $count;?></h4>
							
							<ul class="comments-list">

							<?php foreach ($comments as $comment){?> 

								<li class="comment">
									
									<div class="comment-body">
										<div class="photo">
											<img src="<?php echo base_url() ?>assets/public/images/demo-images/avatar_2.jpg" alt="" />
										</div>
										
										<div class="comment-text">
										
											<header>
												<h6><a href="javascript:;"><?php echo $comment['name'];?></a></h6> 
												<div class="author">
													<span><?php echo $comment['date_comment'];?></span>
												</div>
											</header>
											
											<p><?php echo $comment['message'];?></p>
										
										</div>
										
										<!-- <a href="javascript:;" class="reply-link"></a> -->
									</div>
									
								</li>

							<?php } ?>

							</ul>
						
							<!-- Add a comment form -->
							<h4 class="h4 reply-header">Leave a Comment</h4>
							
							<form action="<?php echo base_url('blog/replyBlog');?>" id="comment-form" class="container-fluid reply-form" method="post">
								<div class="row">
								
									<div class="form-row col-md-6">
									
										<input type="text" value="" name="name" placeholder="Your Name"  required/>
									
									</div>
									
									<div class="form-row col-md-6">
									
										<input type="email" value="" name="email" placeholder="Email Address*" required/>
									
									</div>
									
									<div class="form-row col-md-12">
									
										<textarea name="message" placeholder="Message..."></textarea>
									
									</div>
									
									<div class="form-row col-md-12">
										
										<button type="submit" class="blue">Post Comment</button>
										
									</div>
								
								</div>
							</form>
						
						</div>
					
					</div>
					
					<!-- Sidebar -->
					<aside id="sidebar" class="col-md-3 col-md-offset-1">
					
						<!--
							Search widget
						-->
						<div class="widget">
						
							<div class="widget-content">
								<form action="javascript:;" method="post">
									<input type="search" value="" placeholder="Search..." />
								</form>
							</div>
						
						</div>
						
						<!--
							Categories widget
						-->
						<div class="widget widget-categories">
						
							<h4 class="widget-title">Categories</h4>
							
							<nav class="widget-content">
								<ul>
									<?php foreach ($categories as $category){?>
										<li><a href="<?php echo base_url('blog/kategori/'.$category['slug_category']);?>"><?php echo $category['category_name'];?></a></li>
									<?php } ?>  
								</ul>
							</nav>
						
						</div>
						
						<!--
							Popular posts widget
						-->
						<div class="widget widget-posts">
						
							<h4 class="widget-title">Recent Posts</h4>
							
							<div class="widget-content">
								<ul>
								<?php
	                                $category_id = $blog['category_id'];
	                                $blogTerkait = $this->mBlogs->blogTerkait($category_id);
	                                $i=0;
	                                foreach ($blogTerkait as $blogTerkait){
	                                    if ($i == 1 && $blogTerkait['blog_id']++ < 10) { 
                                ?>
									<li class="format-post">
										<a href="<?php echo base_url('blog/detil/'.$blogTerkait['slug_blog']);?>" class="post-title"><?php echo $blogTerkait['title'];?></a>
										<a href="javascript:;" class="time"><?php echo date('l, d M Y', strtotime($blogTerkait['date_post'])); ?></a>
									</li>
								<?php }else{ $i++; }} ?>
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