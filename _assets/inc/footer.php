
		<footer>

			<div class="inner">
				
				<h2 class="alt">How Remote Is Angry Eagle?</h3>

				<div class="addresses">

					<p class="remote"><span>We're so remote we don't even have an address. Seriously. </span><a href="/contact">Contact us for shipping details.</a></p>

					<br/>

					<?php
					    $year = date('Y');
					    $today = date('Y-m-d H:i:s');
					    $startDate = date('Y-m-d H:i:s', strtotime("June 1, '$year' 12:01am"));
					    $endDate = date('Y-m-d H:i:s', strtotime("September 30, '$year' 12:00pm"));

					    if($today >= $startDate && $today <= $endDate)
					    {
					?>
					      <p><span>In-Season</span> <a href="tel:19078502235">(907) 850-2234</a></p>
					<?php
					    }

					    if($today >= $startDate)
					    {
					?>
					      <p><span>Off-Season</span> <a href="tel:18179462479">(817) 946-2479</a></p>
					<?php
					    }
					?>				

					<br/>

					<a href="https://plus.google.com/113031869188624299064/videos" class="icon icon-google-plus" target="_blank" rel="nofollow"></a>

					<a href="https://www.facebook.com/pages/Rainbow-Bay-Resort/110232285696450" target="_blank" rel="nofollow" class="icon icon-facebook"></a>

					<a href="https://twitter.com/AngryEagleLodge" class="icon icon-twitter" target="_blank" rel="nofollow"></a>

					<a href="https://instagram.com/angryeaglelodge/" class="icon icon-instagram" target="_blank" rel="nofollow"></a>

					<a href="https://www.youtube.com/channel/UCgo9ak4XpJIqw1pIIwSQ-1A" class="icon icon-youtube" target="_blank" rel="nofollow"></a>
					
					<br/>

					<p class="copy"><a href="/client-photos/login" class="fancybox fancybox.iframe">Guest Login</a></p>

					<p class="copy">&copy;<?php echo date("Y"); ?> Rainbow Bay Resorts, LLC</p>

				</div><!--addresses-->

				<div class="mapnstuff">

					<img src="/_assets/img/map.png" alt="map of Alaska with a closer view of Angry Eagle Lodge &amp; Outfitters">

				</div><!--mapnstuff-->

			</div><!--inner-->

		</footer>

		<script type="text/javascript">
		  $(document).ready(function() {
		    $('.fancybox').fancybox();
		  });
		</script>
		<script src="/_assets/js/jquery.fancybox.js"></script>
		<script src="/_assets/js/touchpunch.js"></script>

	</body>
</html>