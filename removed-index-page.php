<section id="social">

  <div class="inner">

	<div class="container">

	  <div class="facebook"><div class="fb-like-box" data-href="https://www.facebook.com/pages/Rainbow-Bay-Resort/110232285696450" data-width="228" data-height="600" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div></div><!--facebook-->

	  <div class="instagram">

		  <!-- <div id="instafeed"></div> -->

      <div class="featured-fisherman">

        <img src="/_assets/img/featured-fisherman.jpg" alt="Angry Eagle's Featured Fisherman">

        <div class="name">
          <h4>Johnny Parks</h4>
          <p>Featured Fisherman</p>
        </div><!--name-->

        <h6><span>Tell us about yourself.</span> I’m 12 years old, and I live in Tennessee.</h6>

        <h6><span>What’s your favorite fish to catch at Angry Eagle?</span> I really enjoy catching salmon because there are so many.</h6>

        <h6><span>What's your favorite place to fish?</span> Lake Iliamna is great because it has a lot of salmon.</h6>

        <h6><span>What’s your best Angry Eagle catch?</span> A really big pike!</h6>

        <h6><span>Why do you love fishing?</span> I love fishing because there are lots of different fish that you can catch.</h6>

        <h6><span>What style of fishing do you prefer?</span> I like spin because it's easier for me to do.</h6>

      </div><!--featured-fisherman-->

	  </div><!--instagram-->

	</div><!--container-->

    <div class="bottom">

      <a href="https://www.facebook.com/pages/Rainbow-Bay-Resort/110232285696450" target="_blank" rel="nofollow"><img src="/_assets/img/facebook.png" alt="Facebook logo"></a>

      <div class="icons">

        <a href="https://plus.google.com/113031869188624299064/videos" target="_blank" rel="nofollow"><span class="icon-google-plus"></span></a>

        <a href="https://www.youtube.com/channel/UCgo9ak4XpJIqw1pIIwSQ-1A" target="_blank" rel="nofollow"><span class="icon-youtube"></span></a>

        <a href="https://twitter.com/AngryEagleLodge" target="_blank" rel="nofollow"><span class="icon-twitter"></span></a>

        <a href="https://instagram.com/angryeaglelodge/" target="_blank" rel="nofollow"><span class="icon-instagram"></span></a>

      </div><!--icons-->

    </div><!--bottom-->

  </div><!--inner-->

</section><!--social-->

<section class="pattern" id="media-section">

  <div class="inner">

    <article class="media-item article">

      <span class="icon-article"></span>

      <h4>Guides' <br />Report</h4>

      <?php
        $blog = $smCurrentSite->getToolWithSlug('blog')->getItemsWithTagWithTitle('Approved');
        $blog = $blog[0];
        $summary = $blog->getBody();
        $summary = explode('.', $summary);
        $summary = $summary[0] . '.';
        $author = $blog->getSubtitle();
        $authorLastName = explode(' ', $author);
        $authorLastName = strtolower($authorLastName[1]);
        $title = strip_tags($blog->getSummary());
      ?>

      <p class="author">by <a href="/lightboxes/staff/<?php echo $authorLastName; ?>" class="fancybox fancybox.iframe" rel="report"><?php echo $author; ?></a>, <?php echo $title; ?></p>

      <?php echo $summary; ?>

      <br>
      <p><strong><?php echo date('F j, Y', strtotime($blog->getStartTimestamp())); ?></strong></p>

      <a href="<?php echo $blog->getURL(); ?>" class="fancybox fancybox.iframe readmore">read more</a>

    </article><!--media-item-->

    <article class="media-item video">

      <span class="icon-video"></span>

      <h4 style="font-size:1.8em;">The Alaska Salmon Program</h4>

      <p>Follow the crew of the Alaska Salmon Program as they conduct sockeye salmon surveys during one of the largest migrations in recent history.</p>

      <a href="/lightboxes/video/salmon-program/" class="video-link fancybox fancybox.iframe" rel="video-salmon-program"><span class="icon-play"></span><img src="/_assets/img/video-salmon-program.jpg" alt="Follow the crew of the Alaska Salmon Program as they conduct sockeye salmon surveys during one of the largest migrations in recent history."></a>

    </article><!--media-item-->

    <article class="media-item video">

      <span class="icon-video"></span>

      <h4 style="font-size:1.8em;">Above <br/>Iliamna</h4>

      <p>Our neighbor, Jason Ching with The Alaska Salmon Program, highlights both the beauty of Bristol Bay and the opportunity for catching a wide variety of game fish.</p>

      <a href="/lightboxes/video/above-illiamna/" class="video-link fancybox fancybox.iframe" rel="video-above-illiamna"><span class="icon-play"></span><img src="/_assets/img/video-above-illiamna.jpg" alt="Video highlights both the beauty of Bristol Bay and the opportunity for catching a wide variety of game fish."></a>

    </article><!--media-item-->

  </div><!--inner-->

</section><!--media-section-->
