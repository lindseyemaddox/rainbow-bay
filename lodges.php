<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/common.php'); //php framework and meta?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/subpage-header.php'); //video header?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<section class="pattern headerComp" id="intro">

	<div class="inner">

		<h2>The Lodges</h2>

		<p>Rainbow Bay Resort Lodge is one of the most luxurious, yet rustic, lodges in Alaska. Situated on the remote shores of Lake Iliamna, we offer a quiet serenity and fantastic fishing seldom found anywhere.  Each bedroom is spaciously furnished with two queen size beds and a private bath for your comfort and convenience.  The Lodge is constructed with logs and the interior is covered with cedar.</p>

	</div><!--inner-->

</section><!--pattern-->

<section id="bgFixed" class="subpage lodge">
  
  <div class="inner">

    <h2 class="alt">Angry Eagle Lodge</h2>

    <p>Originally named Rainbow Bay Resort when it was built in 1984, the Angry Eagle Lodge offers guests a rustic and comfortable setting that’s perfect for relaxing after a long day of fishing. Featured as one of the “Top 25 Fishing Lodges in North America” by Field and Stream Magazine, the lodge is constructed of cedar logs and features six private bedrooms—four of which have two queen beds, and the other two rooms each have a queen bed and a full bed. Each bedroom also has a private bathroom and shower. Angry Eagle Lodge accommodates groups of 12 to 14 people per week and includes satellite TV and Wi-Fi.</p>

    <div class="slider">
    
      <div class="flexslider carousel">
  
        <ul class="slides">

          <li>
            <img src="/_assets/img/lodges-eagles-peak1.jpg" alt="overhead view of the Eagle's Peak Lodge">
          </li>

          <li>
            <img src="/_assets/img/lodges-eagles-peak2.jpg" alt="bedroom in Eagle's Peak Lodge">
          </li>

          <li>
            <img src="/_assets/img/lodges-eagles-peak3.jpg" alt="dining room at the Eagle's Peak Lodge">
          </li>

          <li>
            <img src="/_assets/img/lodges-eagles-peak4.jpg" alt="Overhead view of the Eagle's Peak Lodge">
          </li>

          <li>
            <img src="/_assets/img/lodges-eagles-peak5.jpg" alt="Overhead view of the Eagle's Peak Lodge">
          </li>

        </ul><!--slides-->

      </div><!--flexslider-->

    </div><!--slider-->

    <h2 class="multiple alt">Eagle's Peak Lodge</h2>

    <p>Eagle’s Peak Lodge is our latest addition, featuring four spacious bedrooms that each have two queen beds and a private bathroom and shower. This 6,000-square-foot lodge boasts a picturesque great room that’s situated on a bluff overlooking Lake Iliamna—the ideal spot to enjoy hors ‘dourves and drinks followed by an upscale dinner. Eagle’s Peak Lodge accommodates groups of six to eight people per week and includes satellite TV and Wi-Fi.</p>

    <div class="slider">
    
      <div class="flexslider carousel">
  
        <ul class="slides">

          <li>
            <img src="/_assets/img/lodges-angry-eagle1.jpg" alt="overhead view of the Eagle's Peak Lodge">
          </li>

          <li>
            <img src="/_assets/img/lodges-angry-eagle2.jpg" alt="bedroom in Eagle's Peak Lodge">
          </li>

          <li>
            <img src="/_assets/img/lodges-angry-eagle3.jpg" alt="dining room at the Eagle's Peak Lodge">
          </li>

          <li>
            <img src="/_assets/img/lodges-angry-eagle4.jpg" alt="Overhead view of the Eagle's Peak Lodge">
          </li>

          <li>
            <img src="/_assets/img/lodges-angry-eagle5.jpg" alt="Overhead view of the Eagle's Peak Lodge">
          </li>

        </ul><!--slides-->

      </div><!--flexslider-->

    </div><!--slider-->

  </div><!--inner-->
  
</section><!--testimonials-->

<script type="text/javascript">
  $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        directionNav: true,
        pauseOnHover: true,
        minItems: 3,
        maxItems: 5,
        itemWidth: 340,
        slideshow: false, 
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
  });
</script>
<script src="/_assets/js/jquery.flexslider.js"></script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>