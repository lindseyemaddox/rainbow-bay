<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/common.php'); //php framework and meta?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>

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

<div class="index-nav">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>
</div><!--index-nav-->	
<header>

    <div class="slider">
    
        <div class="flexslider">
    
          <ul class="slides">

                <li>
            		<div class="tag">
            			<p>Formerly Known As <span>Rainbow Bay Lodge</span></p>
            		</div>
					<img src="/_assets/img/slide-change.jpg" alt="Rainbow Bay is now Angry Eagle Lodge & Outfitters" />
				</li>

            	<li>
            		<div class="tag">
            			<p>If You're Gonna Go, <span>Go Remote</span></p>
            		</div>
  	    	    	<img src="/_assets/img/slide-remote.jpg" alt="Remote fishing on Lake Illiamna" />
  	    		</li>

            	<li>
            		<div class="tag">
            			<p>The Char Have Been <span>Asking About You</span></p>
            		</div>
  	    	    	<img src="/_assets/img/slide-rainbow.jpg" alt="Close-up of Alaskan Rainbow Trout" />
  	    		</li>

            	<li>
            		<div class="tag">
            			<p>Meet the <span>Local Fishermen</span></p>
            		</div>
  	    	    	<img src="/_assets/img/slide-local.jpg" alt="Eagle fishing on Lake Illiamna" />
  	    		</li>

            	<li>
            		<div class="tag">
            			<p>Ask About Our <span>Curbside Pickup</span></p>
            		</div>
  	    	    	<img src="/_assets/img/slide-curbside.jpg" alt="Floater plane picking up fishermen at Angry Eagle" />
  	    		</li>

            	<li>
            		<div class="tag">
            			<p>Our Exercise Room Features <span>Powerlifting</span></p>
            		</div>
  	    	    	<img src="/_assets/img/slide-powerlifting.jpg" alt="A young Angry Eagle fisherman holding his catch" />
  	    		</li>

            	<li>
            		<div class="tag">
            			<p>No Need to Order <span>Room Service</span></p>
            		</div>
  	    	    	<img src="/_assets/img/slide-room.jpg" alt="Interior shot of the lodge at Angry Eagle" />
  	    		</li>

          	</ul><!--slides-->

        </div><!--flexslider-->

    </div><!--slider-->

	<div id="topLodge">

		<div id="fullOpacity">
		
		    <h3 class="alt">"One of the top 25 fishing lodges in North America..."</h3>

		    <a href="http://www.fieldandstream.com/articles/fishing/saltwater/where-fish/2007/02/greatest-fishing-lodges-world" target="_blank"><img src="/_assets/img/logo-field-stream.png" alt="Field &amp; Stream logo"></a>

		</div><!--fullOpacity-->

	</div><!--topLodge-->

</header>

<section class="pattern headerComp">

	<div class="inner">

		<h1>Your Adventure Starts Here</h1>

		<h3>Angry Eagle Lodge &amp; Outfitters operates two full-service Alaskan fishing lodges in the heart of Southwest Alaska’s Bristol Bay region. For the past 30 years, we’ve prided ourselves on offering the fishing adventures of a lifetime. Our knowledgeable guides offer assistance and insight to fly and spinning anglers of all experience levels. And our large fleet of planes, boats, and ATVs means you’ll always have a great place to cast a line regardless of the weather.</h3>

	</div><!--inner-->

</section><!--pattern-->

<section id="bgFixed" class="mountains"></section>

<section class="pattern" id="testimonials">

  <div class="inner">

	<h2>Our Daily Catch</h2>
    
      <div class="slider">
        <div class="fishslider carousel">
          <ul class="slides">
            <li><a href="/recreation/sportfishing">
              <img src="/_assets/img/icon-rainbow-trout.svg" alt="Rainbow Trout">
              <h4 class="alt">Rainbow <br />Trout</h4>
            </a></li>
            <li><a href="/recreation/sportfishing">
              <img src="/_assets/img/icon-king-salmon.svg" alt="King Salmon">
              <h4 class="alt">King <br />Salmon</h4>
            </a></li>
            <li><a href="/recreation/sportfishing">
              <img src="/_assets/img/icon-arctic-char.svg" alt="Arctic Char">
              <h4 class="alt">Arctic <br />Char</h4>
            </a></li>
            <li><a href="/recreation/sportfishing">
              <img src="/_assets/img/icon-arctic-grayling.svg" alt="Arctic Grayling">
              <h4 class="alt">Arctic <br />Grayling</h4>
            </a></li>
            <li><a href="/recreation/sportfishing">
              <img src="/_assets/img/icon-chum-salmon.svg" alt="Chum Salmon">
              <h4 class="alt">Chum <br />Salmon</h4>
            </a></li>
            <li><a href="/recreation/sportfishing">
              <img src="/_assets/img/icon-northern-pike.svg" alt="Northern Pike">
              <h4 class="alt">Northern <br />Pike</h4>
            </a></li>
            <li><a href="/recreation/sportfishing">
              <img src="/_assets/img/icon-pink-salmon.svg" alt="Pink Salmon">
              <h4 class="alt">Pink <br />Salmon</h4>
            </a></li>
            <li><a href="/recreation/sportfishing">
              <img src="/_assets/img/icon-silver-salmon.svg" alt="Silver Salmon">
              <h4 class="alt">Silver <br />Salmon</h4>
            </a></li>
            <li><a href="/recreation/sportfishing">
              <img src="/_assets/img/icon-sockeye-salmon.svg" alt="Sockeye Salmon">
              <h4 class="alt">Sockeye <br />Salmon</h4>
            </a></li>
          </ul>
        </div>
      </div><!--slider-->

  </div><!--inner-->
  
</section><!--testimonials-->

<section id="social">
  
  <div class="inner">
	  
	<div class="container">
    
	  <div class="facebook"><div class="fb-like-box" data-href="https://www.facebook.com/pages/Rainbow-Bay-Resort/110232285696450" data-width="228" data-height="600" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div></div><!--facebook-->

	  <div class="instagram">
		  
		  <!-- <div id="instafeed"></div> -->

      <div class="featured-fisherman">
        
        <img src="/_assets/img/featured-fisherman.jpg" alt="Angry Eagle's Featured Fisherman">

        <div class="name">
          <h4>Firstname M. Lastname</h4>
          <p>Featured Fisherman</p>
        </div><!--name-->

        <h6><span>Where do you live?</span> I live in Honolulu, Hawaii, with my husbandand children, where I work as  a private investigator.</h6>

        <h6><span>When did you start fishing?</span> My grandfather inspired my love of fishing when I was just 5 years old.</h6>

        <h6><span>What’s your favorite fish to catch at Angry Eagle?</span> I enjoy catching them all, but rainbows and grayling are my favorite.</h6>

        <h6><span>What’s your best catch?</span> I caught a 50-lb. king salmon on a fly rod at Angry Eagle last summer.</h6>

        <h6><span>Where else do you fish?</span> Lake El Salto, Mexico; Rio Negro, Brazil; and Costa Rica.</h6>

        <h6><span>Why do you love fishing?</span> I love being in nature. My focus is to catch fish and handle them with the utmost care. It’s a zen experience.</h6>

      </div><!--featured-fisherman-->
		  
	  </div><!--instagram-->
	      
	</div><!--container-->
    
    <div class="bottom">
      
      <a href="https://www.facebook.com/pages/Rainbow-Bay-Resort/110232285696450" target="_blank"><img src="/_assets/img/facebook.png" alt="Facebook logo"></a>

      <div class="icons">

        <a href="#" target="_blank"><span class="icon-google-plus"></span></a>

        <a href="#" target="_blank"><span class="icon-youtube"></span></a>

        <a href="#" target="_blank"><span class="icon-twitter"></span></a>

        <a href="#" target="_blank"><span class="icon-instagram"></span></a>

      </div><!--icons-->

    </div><!--bottom-->

  </div><!--inner-->

</section><!--social-->

<section class="pattern" id="media-section">

  <div class="inner">
  
    <article class="media-item article">
      
      <span class="icon-article"></span>

      <h4>Guides' <br />Report</h4>

      <p class="author">by <a href="/lightboxes/staff/baldwin" class="fancybox fancybox.iframe">Ken Baldwin</a>, Fishing Guide</p>

      <p>Bacon ipsum dolor amet shoulder bacon turkey short ribs ball tip venison beef pig, jerky doner pork chop porchetta. Meatloaf salami doner tail strip steak pork chop. Picanha meatball jowl frankfurter spare ribs, sausage sirloin pig ground round jerky brisket rump short loin venison pork loin. Brisket turkey rump pastrami ball tip.  Picanha meatball jowl frankfurter spare ribs.</p>

      <a href="/lightboxes/articles/guides-report.php" class="fancybox fancybox.iframe readmore">read more</a>

    </article><!--media-item-->

    <article class="media-item video">
      
      <span class="icon-video"></span>

      <h4>Dallas Safari Club Interview</h4>

      <p>Jim Kern discusses fishing in Alaska with Gayne C. Young, editor of Dallas Safari Club's GameTrails Online.</p>

      <a href="/lightboxes/video/interview" class="video-link fancybox fancybox.iframe"><span class="icon-play"></span><img src="/_assets/img/video-interview.jpg" alt="Dallas Safari Club Game Trails Online Editor Gayne C. Young talks to Jim Kern of Angry Eagle Lodge & Outfitters about fishing in Alaska."></a>

    </article><!--media-item-->

    <article class="media-item video">
      
      <span class="icon-video"></span>

      <h4>Jet sledding on the Iliamna</h4>

      <p>The Iliamna River’s shallow areas are home to impressive rainbow trout and Arctic char!</p>

      <a href="/lightboxes/video/jet-sleding" class="video-link fancybox fancybox.iframe"><span class="icon-play"></span><img src="/_assets/img/video-jet-sleding.jpg" alt="Jet sleding down the Illiamna River video"></a>

    </article><!--media-item-->

  </div><!--inner-->

</section><!--media-section-->

<script type="text/javascript">
  $(window).load(function(){
      $('.fishslider').flexslider({
        minItems:3,
        maxItems:3,
        itemWidth:333,
        move: 1,
        animation: "slide",
        directionNav: true,
        controlNav: false,
        pauseOnHover: true,
        animationLoop: true,
        itemMargin: 0,
        randomize: true,
        slideshow: false, 
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
      $('.flexslider').flexslider({
        randomize: false,
        itemMargin: 0,
        //slideshow: false
      });
  });
</script>



<script type="text/javascript" src="/_assets/js/instafeed.js"></script>

<script type="text/javascript">
    var userFeed = new Instafeed({
        get: 'user',
        userId: 1724220263,
        accessToken: '1724220263.9fa67f7.42af906db54b441daa0cfa20bd367158'
    });
    userFeed.run();
</script>

<script src="/_assets/js/jquery.flexslider.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('.fancybox').fancybox();
  });
</script>
<script src="/_assets/js/jquery.fancybox.js"></script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>