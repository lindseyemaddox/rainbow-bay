<?php require_once('../_assets/inc/common.php'); //php framework and meta?>
<?php require_once('../_assets/inc/head.php'); // HTTP head?>
<title>Angry Eagle Fleet | Fishing Boats, Watercrafts, and Vehicles</title>
<meta name="description" content="We do more than lodges. During your stay, you'll have access to ATVs, fishing boats, we even have aircraft for transport. View our Alaskan fleet." />
<link rel="canonical" href="http://www.angryeagle.com/about/fleet" />
<?php require_once('../_assets/inc/subpage-header.php'); //video header?>
<?php require_once('../_assets/inc/navigation.php'); //navigation?>

<section class="pattern headerComp" id="intro">

    <div class="inner" itemscope itemtype="http://schema.org/LodgingBusiness">

        <h1>Our Fleet</h1>

        <h3 style="padding-bottom: 20px;">Angry Eagle’s collection of aircraft and boats allows us to access some of the best streams, lakes, and rivers in <a href="/recreation/hiking/">Lake Clark National Park</a>, Katmai National Park, and the Nushagak River drainage of Southwestern Alaska's Bristol Bay region.</h3>

        <p>We have riverboats throughout the Bristol Bay watershed that can be accessed by our lake boats or float planes. Our wide selection of boats also helps us ensure clients can comfortably and safely fish on days when fly-outs aren’t possible due to the weather (a perk that many other area lodges can’t give their clients).</p>

        <p style="padding-bottom: 40px;">In addition to fly-outs, we provide plane tours of Brooks Falls in Katmai National Park for bear viewing and to Twin Lakes in Lake Clark National Park to visit Richard Proenneke’s famous homestead featured in PBS’ “One Man’s Wilderness.” Flying over the vast tundra and Chugach Mountains of Southwest Alaska is an experience you’ll never forget.</p>

    </div><!--inner-->

</section><!--pattern-->

<section id="bgFixed" class="subpage fleet">

	<div class="inner">

    <article class="fleet-item">

      <img src="/_assets/img/fleet-beaver.jpg" alt="DeHavilland Beaver">

      <h4 property="name">DeHavilland Beaver</h4>

      <p property="description">Completely rebuilt from prop to tail in 2013, our deHavilland Beaver sits on Aerocet 5850 composite floats and has custom cargo doors and cockpit extension modifications. It comfortably accommodates five passengers plus pilot.</p>

    </article><!--fleet-item-->

    <article class="fleet-item">

      <img src="/_assets/img/fleet-cessna.jpg" alt="Cessna 185">

      <h4 property="name">Cessna <br />185</h4>

      <p property="description">Our Cessna 185 utilizes either wheels or floats, accommodates three passengers plus pilot, and—unlike larger aircraft—can accesses small lakes and streams.</p>

    </article><!--fleet-item-->

    <article class="fleet-item">

      <img src="/_assets/img/fleet-harbercraft.jpg" alt="KingFisher Habercraft">

      <h4 property="name">KingFisher Harbercraft</h4>

      <p property="description">Our KingFisher Harbercraft 2825 boats transport guests to streams and to the shallow waters of the Cook Inlet. One boat has twin 150 HP Honda outboards and the other has twin 200 HP outboards. Equipped with depth finders, radios, and radar.</p>

    </article><!--fleet-item-->

    <article class="fleet-item">

      <img src="/_assets/img/fleet-jetboat.jpg" alt="G-3 Jet Boat">

      <h4 property="name">G-3 <br />Jet Boats</h4>

      <p property="description">We use our collection of G-3 jet boats on lakes and streams that we reach by airplane or our KingFishers. These boats run in a few inches of water, enabling our guides to access the upper reaches of prime Arctic char and rainbow trout of the remote rivers we fish.</p>

    </article><!--fleet-item-->

    <article class="fleet-item">

      <img src="/_assets/img/fleet-gator.jpg" alt="John Deere Gators">

      <h4 property="name">John Deere Gator</h4>

      <p property="description">Our fleet of John Deere Gator ATVs ensures clients are comfortably transported between Pedro Bay and Angry Eagle.</p>

    </article><!--fleet-item-->

    <article class="fleet-item">

      <img src="/_assets/img/fleet-riverhawk.jpg" alt="River Hawk">

      <h4 property="name">River <br />Hawk</h4>

      <p property="description">Our River Hawk boat provides comfort and stability while back trolling, drift fishing, and fighting the powerful king salmon.</p>

    </article><!--fleet-item-->

    <div class="clearfix"></div>

	</div><!--inner-->

</section><!--pattern-->

<section class="pattern" id="links">

  <div class="inner">

    <p class="prev"><a href="/about/lodges/"><img src="/_assets/img/prev.png"/> <span>Previous:</span> Our Lodges</a></p>

    <p class="next"><a href="/recreation/sportfishing/"><span>Next:</span> Sportfishing <img src="/_assets/img/next.png"/></a></p>

    <div class="clearfix"></div>

  </div><!--inner-->

</section>

<script>
$('#container').isotope({ layoutMode : 'fitRows' });

    $(function(){

      var $container = $('#container');

      $container.isotope({
        itemSelector : '.media-item'
      });


      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');

        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }

        return false;
      });


    });

    $(function(){

      var $container = $('#container');

      $container.isotope({
        itemSelector : '.media-item',
        getSortData : {
          symbol : function( $elem ) {
            return $elem.attr('data-symbol');
          },
          category : function( $elem ) {
            return $elem.attr('data-category');
          },
          number : function( $elem ) {
            return parseInt( $elem.find('.number').text(), 10 );
          },
          weight : function( $elem ) {
            return parseFloat( $elem.find('.weight').text().replace( /[\(\)]/g, '') );
          },
          name : function ( $elem ) {
            return $elem.find('.name').text();
          }
        }
      });


      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');

        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }

        return false;
      });


    });
</script>

<?php require_once('../_assets/inc/footer.php'); // footer, close body and html?>