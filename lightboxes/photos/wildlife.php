<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>

      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="/_assets/img/galleries/brown-bear.jpg" alt="brown bear on the bank of lake iliamna" />
  	    	</li>
            <li>
  	    	    <img src="/_assets/img/galleries/brown-bear-with fish.jpg" alt="brown bear with fish on the bank of lake iliamna" />
  	    	</li>
            <li>
  	    	    <img src="/_assets/img/galleries/black-bear.jpg" alt="black bear on the bank of lake iliamna" />
  	    	</li>
            <li>
  	    	    <img src="/_assets/img/galleries/bear-with-cubs.jpg" alt="brown bear with cubs on the bank of lake iliamna" />
  	    	</li>
            <li>
  	    	    <img src="/_assets/img/galleries/mink.jpg" alt="pet mink on deck at resort" />
  	    	</li>
            <li>
  	    	    <img src="/_assets/img/galleries/moose.jpg" alt="moose in water at lake iliamna" />
  	    	</li>
            <li>
  	    	    <img src="/_assets/img/galleries/mink-on-deck.jpg" alt="mink on deck at Angry Eagle Lodge" />
  	    	</li>
            <li>
  	    	    <img src="/_assets/img/galleries/eagle.jpg" alt="eagle in flight" />
  	    	</li>
            <li>
  	    	    <img src="/_assets/img/galleries/moose-with-young.jpg" alt="mother moose and baby moose walking on bank" />
  	    	</li>
            <li>
  	    	    <img src="/_assets/img/galleries/swim-bear.jpg" alt="brown bear after a swim" />
  	    	</li>
            <li>
  	    	    <img src="/_assets/img/galleries/swim-mink.jpg" alt="mink swimming at Angry Eagle Lodge" />
  	    	</li>
            <li>
  	    	    <img src="/_assets/img/galleries/eagle-perch.jpg" alt="eagle on perch at Eagle's Peak Lodge" />
  	    	</li>
            <li>
  	    	    <img src="/_assets/img/galleries/bear-two-cubs.jpg" alt="brown bear with two cubs" />
  	    	</li>
            <li>
  	    	    <img src="/_assets/img/galleries/young-bears.jpg" alt="three young bears swimming" />
  	    	</li>
            <li>
  	    	    <img src="/_assets/img/galleries/black-bear-in-grass.jpg" alt="black bear standing in grass" />
  	    	</li>
            <li>
  	    	    <img src="/_assets/img/galleries/fox.jpg" alt="fox running across foreground" />
  	    	</li>
            <li>
  	    	    <img src="/_assets/img/galleries/bears-playing.jpg" alt="bears playing in water at Pedro Bay" />
  	    	</li>
          </ul>
        </div>
      </section>

	  <script type="text/javascript">
	    $(function(){
	      SyntaxHighlighter.all();
	    });
	    $(window).load(function(){
	      $('.flexslider').flexslider({
	        animation: "slide",
	        animationLoop: false,
	        itemWidth: 210,
	        itemMargin: 5,
	        start: function(slider){
	          $('body').removeClass('loading');
	        }
	      });
	    });
	  </script>

  </body>
</html>