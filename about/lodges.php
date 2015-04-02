<?php require_once('../_assets/inc/common.php'); //php framework and meta?>
<?php require_once('../_assets/inc/head.php'); // HTTP head?>
<title>Alaska Lodging | Angry Eagle Lodges | Southwest Alaska</title>
<meta name="description" content="Rest in luxury at our Alaska lodges which feature gourmet meals from top-class chefs, rustic rooms, and amazing scenery. View the gallery from the lodges." />
<link rel="canonical" href="http://www.angryeagle.com/about/lodges" />
<?php require_once('../_assets/inc/subpage-header.php'); //video header?>
<?php require_once('../_assets/inc/navigation.php'); //navigation?>

<section class="pattern headerComp" id="intro">

	<div class="inner">

		<h1>Our Alaskan Lodges</h1>

		<h3>Step into a world of rustic charm coupled with modern convenience. Both the Angry Eagle Lodge and Eagle’s Peak Lodge are ideal for unwinding after <a href="/galleries/">a long day spent fishing</a>. Relax in style as you enjoy a beer and appetizers while our chef prepares a gourmet meal of king crab, prime rib, or inch-thick pork chops, just to name a few. And with no one around for miles, count on some of the best sleep you’ll ever get.</h3>

	</div><!--inner-->

</section><!--pattern-->

<section id="bgFixed" class="subpage lodge">

  <div class="inner">

    <h2 class="alt subh2">Angry Eagle Lodge</h2>

    <p>Originally named Rainbow Bay Resort when it was built in 1984, the Angry Eagle Lodge offers guests a rustic and comfortable setting that’s perfect for relaxing after a long day of fishing. Featured as one of the “Top 25 Fishing Lodges in North America” by Field and Stream Magazine, the lodge is constructed of cedar logs and features six private bedrooms—four of which have two queen beds, and the other two rooms each have a queen bed and two full beds. Each bedroom also has a private bathroom and shower. Angry Eagle Lodge accommodates groups of 12 to 14 people per week and includes satellite TV and Wi-Fi.</p>

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

        </ul><!--slides-->

      </div><!--flexslider-->

    </div><!--slider-->

    <h2 class="multiple alt subh2">Eagle's Peak Lodge</h2>

    <p>Eagle’s Peak Lodge is our latest addition, featuring four spacious bedrooms that each have two queen beds and a private bathroom and shower. This 6,000-square-foot lodge boasts a picturesque great room that’s situated on a bluff overlooking Lake Iliamna—the ideal spot to enjoy hors ‘dourves and drinks followed by an upscale dinner. Eagle’s Peak Lodge accommodates groups of six to eight people per week and includes satellite TV and Wi-Fi.</p>

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
            <img src="/_assets/img/lodges-eagles-peak4.jpg" alt="Overhead view of the Eagle's Peak Lodge">
          </li>

          <li>
            <img src="/_assets/img/lodges-eagles-peak3.jpg" alt="dining room at the Eagle's Peak Lodge">
          </li>

          <li>
            <img src="/_assets/img/lodges-eagles-peak5.jpg" alt="Overhead view of the Eagle's Peak Lodge">
          </li>

        </ul><!--slides-->

      </div><!--flexslider-->

    </div><!--slider-->

  </div><!--inner-->

</section><!--testimonials-->

<section class="pattern" id="links">

  <div class="inner">

    <p class="prev"><a href="/about/staff/"><img src="/_assets/img/prev.png"/> <span>Previous:</span> Our Guides</a></p>

    <p class="next"><a href="/about/fleet/"><span>Next:</span> Our Fleet <img src="/_assets/img/next.png"/></a></p>

    <div class="clearfix"></div>

  </div><!--inner-->

</section>

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

<?php require_once('../_assets/inc/footer.php'); // footer, close body and html?>