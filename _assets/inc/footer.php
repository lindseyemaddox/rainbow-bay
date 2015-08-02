
		<footer itemscope itemtype="http://schema.org/WPFooter">

			<div class="inner" itemscope itemtype="http://schema.org/LodgingBusiness">

				<h2 class="alt">How Remote Is <span itemprop="name">Angry Eagle</span>?</h3>

				<div class="addresses">

					<p class="remote" property="description"><span>We're so remote we don't even have an address. Seriously. </span><a href="/contact">Contact us for shipping details.</a></p>

					<br/>

					<?php
					    $year = date('Y');
					    $today = date('Y-m-d H:i:s');
					    $startDate = date('Y-m-d H:i:s', strtotime("June 1, '$year' 12:01am"));
					    $endDate = date('Y-m-d H:i:s', strtotime("September 30, '$year' 12:00pm"));

					    if($today >= $startDate && $today <= $endDate)
					    {
					?>
					      <p itemprop="telephone" content="+19078502235"><span>In-Season</span> <a href="tel:19078502235">(907) 850-2234</a></p>
					<?php
					    }

					    if($today >= $startDate)
					    {
					?>
					      <p itemprop="telephone" content="+18179462479"><span>Off-Season</span> <a href="tel:18179462479">(817) 946-2479</a></p>
					<?php
					    }
					?>

					<br/>

					<a href="https://plus.google.com/102073266521304104835/videos" class="icon icon-google-plus" target="_blank" rel="nofollow"></a>

					<a href="https://www.facebook.com/pages/Rainbow-Bay-Resort/110232285696450" target="_blank" rel="nofollow" class="icon icon-facebook"></a>

					<a href="https://twitter.com/AngryEagleLodge" class="icon icon-twitter" target="_blank" rel="nofollow"></a>

					<a href="https://instagram.com/angryeaglelodge/" class="icon icon-instagram" target="_blank" rel="nofollow"></a>

					<a href="https://www.youtube.com/channel/UCI8aOUNen1dcVNMCliUwqCA" class="icon icon-youtube" target="_blank" rel="nofollow"></a>

					<br/>

					<p class="copy"><a href="/guests">Guest Login</a></p>

					<p class="copy">&copy;<?php echo date("Y"); ?> Rainbow Bay Resorts, LLC</p>

				</div><!--addresses-->

				<div class="mapnstuff" itemscope itemtype="http://schema.org/Map">

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
		<?php if ($smCurrentFolder && ($smCurrentFolder->getTitle() == 'Admin' || $smCurrentFolder->getTitle() == 'Guests')): ?>
		  <script src="/smTemplate/js/moment.js"></script>
		  <script src="/smTemplate/js/pikaday.js"></script>
		  <script src="/smTemplate/js/pikaday.jquery.js"></script>
		  <script src="/smTemplate/js/chosen.jquery.min.js"></script>
		  <script src="/smTemplate/js/admin.js"></script>
		<?php endif; ?>
	</body>
</html>