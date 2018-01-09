<!-- Home page slider -->
			<div id="slider" class="section slider">
				<!-- Slides -->

				<ul class="seq-canvas">

					<?php  $i=0;  foreach ($galleries as $gallery){ ?>  

						<li style="background-image: url(<?php echo base_url('assets/upload/image/'.$gallery['image']) ;?>)">

							<!-- slide layers -->
							<div class="layer">
								<h1> <?php echo $gallery['gallery_name'] ?> </h1>
								<p> <?php echo $gallery['gallery_description'];?> </p>
								<a href="<?php echo base_url('profil') ?>" class="button blue">About Us</a>
							</div>

						</li>

					<?php  $i++; } ?>     

				</ul>
				<!-- Pagination -->
				
				<ul class="seq-pagination">
				
					<?php  $i=1;  foreach ($galleries as $gallery){ ?> 

	                    <li class=""></li>

					<?php  $i++; } ?>

				</ul>



				<!--  Skip slider -->
				<a href="javascript:;" class="skip-slider"></a>
			</div>