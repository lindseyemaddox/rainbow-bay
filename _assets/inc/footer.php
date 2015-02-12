
		<footer>

			<div class="inner">
				
				<h2 class="alt">Contact Angry Eagle Lodge & Outfitters</h3>

				<div class="addresses">

					<?php
					    $year = date('Y');
					    $today = date('Y-m-d H:i:s');
					    $startDate = date('Y-m-d H:i:s', strtotime("June 1, '$year' 12:01am"));
					    $endDate = date('Y-m-d H:i:s', strtotime("September 30, '$year' 12:00pm"));

					    if($today >= $startDate && $today <= $endDate)
					    {
					?>
					      <p><span>In-Season</span> <a href="tel:19078502235">(907) 850-2235</a></p>
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

					<p><span>Mailing Address</span><br/>
					Angry Eagle Lodge & Outfitters<br/>
					P.O. Box 47011<br/>
					Pedro Bay, AK USA 99647</p>

					<p><span>Corporate Headquarters</span><br/>
					Rainbow Bay Resorts, LLC<br/>
					30 Burton Hills Blvd, Suite 325<br/>
					Nashville, TN. 37215</p>

					<br/>

					<p><a href="/lightboxes/safety-information" class="fancybox fancybox.iframe">Safety Information</a></p>

					<p><a href="/client-photos/login" class="fancybox fancybox.iframe">Guest Login</a></p>

				</div><!--addresses-->

				<div class="mapnstuff">

					<img src="/_assets/img/map.jpg" alt="map of Alaska with a closer view of Angry Eagle Lodge &amp; Outfitters">

					<a href="#" class="icon-google-plus"></a>

					<a href="https://www.facebook.com/pages/Rainbow-Bay-Resort/110232285696450" target="_blank" class="icon-facebook"></a>

					<a href="#" class="icon-twitter"></a>

					<a href="#" class="icon-instagram"></a>

					<a href="#" class="icon-youtube"></a>

				</div><!--mapnstuff-->

				<p class="copy">&copy;<?php echo date("Y"); ?> Rainbow Bay Resorts, LLC</p>

			</div><!--inner-->

		</footer>

		<script type="text/javascript">
		  $(document).ready(function() {
		    $('.fancybox').fancybox();
		  });
		</script>
		<script src="/_assets/js/jquery.fancybox.js"></script>

	</body>
</html>