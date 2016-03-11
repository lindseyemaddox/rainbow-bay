		<footer itemscope itemtype="http://schema.org/WPFooter">

			<div class="inner" itemscope itemtype="http://schema.org/LodgingBusiness">

				<h2 class="alt">How Remote Is <span itemprop="name">Angry Eagle</span>?</h3>

				<p class="remote" property="description"><span>We're so remote we don't even have an address. Seriously. </span><a href="/contact">Contact us for shipping details.</a></p>

				<div class="left-col">

					<div class="facebook"><div class="fb-like-box" data-href="https://www.facebook.com/pages/Rainbow-Bay-Resort/110232285696450" data-width="270" data-height="355" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div></div><!--facebook-->

				</div><!--left-col-->

				<div class="right-col" itemscope itemtype="http://schema.org/Map">

					<img src="/_assets/img/map.png" alt="map of Alaska with a closer view of Angry Eagle Lodge &amp; Outfitters">

				</div><!--right-col-->

				<p class="contact">For inquiries and reservations, <a href="mailto:rod@angryeagle.com">contact Rod Thurley</a>.</p>

				<div class="seasons-container">

					<p class="seasons" itemprop="telephone" content="+19078504153"><span>In-Season</span> May 15th - September 15th <a href="tel:19078504153">(907) 850-4153</a> &nbsp; | &nbsp; </p>

					<p class="seasons" itemprop="telephone" content="+16156047666"><span>Off-Season</span> September 16th - May 14th <a href="tel:16156047666">(615) 604-7666</a></p>
					
				</div><!--seasons-container-->

				<div class="left-col">

					<a href="https://plus.google.com/113031869188624299064/videos" class="icon icon-google-plus" target="_blank" rel="nofollow"></a>

					<a href="https://www.facebook.com/pages/Rainbow-Bay-Resort/110232285696450" target="_blank" rel="nofollow" class="icon icon-facebook"></a>

					<a href="https://twitter.com/AngryEagleLodge" class="icon icon-twitter" target="_blank" rel="nofollow"></a>

					<a href="https://instagram.com/angryeaglelodge/" class="icon icon-instagram" target="_blank" rel="nofollow"></a>

					<a href="https://www.youtube.com/channel/UCI8aOUNen1dcVNMCliUwqCA" class="icon icon-youtube" target="_blank" rel="nofollow"></a>

				</div><!--left-col-->

				<div class="right-col">

					<p class="copy"><a href="/guests">Guest Login</a></p>

					<p class="copy">&copy;<?php echo date("Y"); ?> Rainbow Bay Resorts, LLC</p>

				</div><!--right-col-->

			</div><!--inner-->

		</footer>

		<!--FB-->
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '492097247594870',
		      xfbml      : true,
		      version    : 'v2.2'
		    });
		  };

		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
		<!--endFB-->

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