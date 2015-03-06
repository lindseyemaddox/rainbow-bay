<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/common.php'); //php framework and meta?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<link rel="stylesheet" type="text/css" media="print" href="/_assets/css/print.css" />
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/subpage-header.php'); //video header?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<section class="pattern headerComp" id="intro">

	<div class="inner">

		<h2>Your Adventure Starts Here</h2>

		<h3>Get ready for the angler experience of a lifetime! While no Angry Eagle Lodge & Outfitters adventure is the same, here’s a sample itinerary to help you get a better idea of what to expect.</h3>

	</div><!--inner-->

</section><!--pattern-->

<section id="bgFixed" class="subpage fish">
  
  <div class="inner">

    <h2 class="alt subh2">Sample Itinerary</h2>
    
    <div class="slider">
    
        <div class="flexslider carousel">
    
          <ul class="slides itinerary">

            <li>
              <div class="desc">
                <div class="plane-arrive icon">
                  <span class="icon-plane-arrive"></span>
                </div><!--fish-icon-->
                <div class="schedule">
                  <h6>Friday</h6>
                  <p>Arrive at Anchorage International Airport and stay in Anchorage for the evening.</p>
                </div><!--schedule-->
              </div><!--desc-->
              <div class="icons">
                <div class="clock-icon">
                  <span class="icon-clock-5"></span>
                </div><!--clock-icon-->
                <div class="day-icon">
                  <span class="icon-friday"></span>
                </div><!--day-icon-->
              </div><!--icons-->
            </li>

            <li>
              <div class="desc">
                <div class="cab icon">
                  <span class="icon-cab"></span>
                </div><!--fish-icon-->
                <div class="schedule">
                  <h6>Saturday 7:30am</h6>
                  <p>Take a cab to the Lake Clark Air office at Merrill Field.</p>
                </div><!--schedule-->
              </div><!--desc-->
              <div class="icons">
                <div class="clock-icon">
                  <span class="icon-clock-730"></span>
                </div><!--clock-icon-->
                <div class="day-icon">
                  <span class="icon-saturday"></span>
                </div><!--day-icon-->
              </div><!--icons-->
            </li>

            <li>
              <div class="desc">
                <div class="plane-depart icon">
                  <span class="icon-plane-depart"></span>
                </div><!--fish-icon-->
                <div class="schedule">
                  <h6>Saturday 8:30am</h6>
                  <p>Depart Merrill Field.</p>
                </div><!--schedule-->
              </div><!--desc-->
              <div class="icons">
                <div class="clock-icon">
                  <span class="icon-clock-830"></span>
                </div><!--clock-icon-->
                <div class="day-icon">
                  <span class="icon-saturday"></span>
                </div><!--day-icon-->
              </div><!--icons-->
            </li>

            <li>
              <div class="desc">
                <div class="lake icon">
                  <span class="icon-vest"></span>
                </div><!--fish-icon-->
                <div class="schedule">
                  <h6>Saturday 9:30am</h6>
                  <p>Arrive at Pedro Bay on Lake Iliamna, where we'll meet and drive you to our lodge to enjoy a hearty lunch while you discuss fishing techniques with our experienced guides. <br/><br/>After lunch, feel free to take a tour of the lake, or simply relax as you take in the sights and sounds of the Alaskan wilderness from the comfort of our rustic lodge setting.</p>
                </div><!--schedule-->
              </div><!--desc-->
              <div class="icons">
                <div class="clock-icon">
                  <span class="icon-clock-930"></span>
                </div><!--clock-icon-->
                <div class="day-icon">
                  <span class="icon-saturday"></span>
                </div><!--day-icon-->
              </div><!--icons-->
            </li>

            <li>
              <div class="desc">
                <div class="pole icon">
                  <span class="icon-pole"></span>
                </div><!--fish-icon-->
                <div class="schedule">
                  <h6>Sunday - Friday</h6>
                  <p>After an early wakeup call and hearty breakfast, you’ll suit up in waders and depart the lodge via boat or float plane to explore the natural beauty of Alaska’s rivers and lakes. Your destinations can vary from the tributaries and lakes that feed Lake Iliamna and the Cook Inlet coast to the streams that feed the Bering Sea's Bristol Bay. <br/><br/>Depending on the weather and your destination, you’ll enjoy a pre-made lunch or a shore lunch prepared by your guides. In the late afternoon, you’ll return to the lodge, where you can rest and clean up before you enjoy drinks, hors d'ourves, and dinner.</p>
                </div><!--schedule-->
              </div><!--desc-->
              <div class="icons">
                <div class="clock-icon">
                  <span class="icon-clock-8"></span>
                </div><!--clock-icon-->
                <div class="day-icon">
                  <span class="icon-sunday"></span>
                </div><!--day-icon-->
              </div><!--icons-->
            </li>

            <li>
              <div class="desc">
                <div class="icon plane-arrive">
                  <span class="icon-plane-arrive"></span>
                </div><!--fish-icon-->
                <div class="schedule">
                  <h6>Saturday</h6>
                  <p>Depart on your one-hour Lake Clark Air charter flight for Merrill Field in Anchorage, where you’ll take a cab to Anchorage International Airport for your flight home. (Do not book your departing flight from Anchorage until at least 2 p.m., as inclement weather may delay your departure from the lodge.)</p>
                </div><!--schedule-->
              </div><!--desc-->
              <div class="icons">
                <div class="clock-icon">
                  <span class="icon-clock-8"></span>
                </div><!--clock-icon-->
                <div class="day-icon">
                  <span class="icon-saturday"></span>
                </div><!--day-icon-->
              </div><!--icons-->
            </li>

          </ul><!--slides-->

        </div><!--flexslider-->

    </div><!--slider-->
    
    <a class="fancybox fancybox.iframe readmore" href="/lightboxes/itinerary.php">View all</a>

  </div><!--inner-->

</section>

<section class="pattern" id="links">

  <div class="inner">

    <p class="next"><a href="/plan/trip"><span>Next:</span> Plan Your Trip <img src="/_assets/img/next.png"/></a></p>

    <div class="clearfix"></div>

  </div><!--inner-->

</section>

<script type="text/javascript">
  $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        slideshow: false, 
        directionNav: true,
        controlNav: false,
        pauseOnHover: true,
        animationLoop: false,
        randomize: false,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
  });
</script>
<script src="/_assets/js/jquery.flexslider.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".fancybox")
  });
</script>
<script src="/_assets/js/jquery.fancybox.js"></script>
<script>
function print() {
    window.print();
}
</script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>