<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/common.php'); //php framework and meta?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

<script>
 $(function() {
   var select = $( "#filters" );
   var slider = $( "<div id='slider'></div>" ).insertAfter( select ).slider({
     min: 1,
     max: 16,
     range: "min",
     value: select[ 0 ].selectedIndex + 1,
     slide: function( event, ui ) {
       select[ 0 ].selectedIndex = ui.value - 1;
     }
   });
   $( "#filters" ).change(function() {
     slider.slider( "value", this.selectedIndex + 1 );
   });
 });
</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>
<script src="/_assets/js/jquery.isotope.min.js"></script>

<header>

  <img class="temp-image" src="/_assets/img/header.jpg" alt="temporary image">

</header>

<section class="pattern headerComp" id="intro">

	<div class="inner">

		<h2><span class="temp">Rainbow Bay Recreation</span></h2>

		<p><span class="temp">Jerky spare ribs cupim landjaeger, meatball rump turkey kevin drumstick prosciutto biltong hamburger jowl beef ribs. Corned beef meatloaf hamburger landjaeger. Tail sausage frankfurter pork loin bresaola pork belly jerky spare ribs corned beef capicola ball tip. Kevin prosciutto pork loin pork leberkas. Biltong spare ribs prosciutto, flank picanha corned beef hamburger short loin bresaola strip steak. Boudin venison strip steak rump chicken turducken. Boudin bacon ball tip shank, shoulder tail kevin sausage meatball venison pig t-bone fatback ribeye cupim.</span></p>

	</div><!--inner-->

</section><!--pattern-->

<section id="bgFixed" class="subpage bears">
  
  <div class="inner">
    
    <h2 class="alt"><span class="temp">Hiking and Such</span></h2>

    <img class="inset" src="/_assets/img/inset-moose.jpg" alt="Moose on the Illiamna Bay" />

    <p><span class="temp">Bacon ipsum dolor amet boudin turducken leberkas bresaola pig. Ground round chuck ribeye jerky. Strip steak beef ribs tail filet mignon. Pork corned beef turkey shankle. Venison pork belly salami                     meatball jowl. Frankfurter leberkas biltong kielbasa, meatball prosciutto short loin sirloin beef ribs                    pancetta flank pastrami brisket. Leberkas picanha turducken shoulder porchetta biltong rump fatback                   alcatra pork.</span></p>

    <p><span class="temp">Sausage tenderloin porchetta cow, shoulder tri-tip fatback ham pancetta alcatra flank meatball picaha ball tip. Meatloaf pork chop drumstick, alcatra pastrami                              picanha kielbasa brisket frankfurter pork belly tail corned beef spare ribs tri-tip strip                         steak. Kevin chuck tenderloin, beef ham pig pork belly shank rump bresaola                                frankfurter pork loin leberkas brisket strip steak. Shoulder boudin tongue f                              atback,  venison pig rump kevin ground round. Pastrami chicken meatball, pork belly corned beef ball tip tri-tip boudin strip steak alcatra frankfurter short loin ribeye kielbasa ham. Turducken salami pork chop pork belly meatball brisket venison short ribs pig.</span></p>

    <p><span class="temp">Jerky spare ribs cupim landjaeger, meatball rump turkey kevin drumstick prosciutto biltong hamburger jowl beef ribs. Corned beef meatloaf hamburger landjaeger. Tail sausage frankfurter pork loin bresaola pork belly jerky spare ribs corned beef capicola ball tip. Kevin prosciutto pork loin pork leberkas. Biltong spare ribs prosciutto, flank picanha corned beef hamburger short loin bresaola strip steak. Boudin venison strip steak rump chicken turducken. Boudin bacon ball tip shank, shoulder tail kevin sausage meatball venison pig t-bone fatback ribeye cupim.</span></p>

    <p><span class="temp">Venison meatloaf doner beef filet mignon andouille chuck picanha tri-tip, pork chop kielbasa jerky ham hock. Pork landjaeger hamburger, meatball pancetta beef ribs bacon shankle t-bone beef fatback meatloaf shank jowl. Venison ribeye short ribs doner tongue rump corned beef strip steak bresaola cow meatball short loin salami. Cupim sausage tail tri-tip boudin.</span></p>

  </div><!--inner-->

</section>

<section class="pattern" id="species">

  <div class="inner">

    <h2>Sportfishing</h2>

    <div id="slider">
      
      <div id="options" class="clearfix">

        <ul id="filters" class="option-set clearfix" data-option-key="filter">
          <p>slide to order species <br />or<br /> <a href="#filter" data-option-value="*" class="selected">original order</a></p>
          <li><a href="#filter" data-option-value=".june1">June 1</a></li>
          <li><a href="#filter" data-option-value=".june2">June 2</a></li>
          <li><a href="#filter" data-option-value=".june3">June 3</a></li>
          <li><a href="#filter" data-option-value=".june4">June 4</a></li>
          <li><a href="#filter" data-option-value=".july1">July 1</a></li>
          <li><a href="#filter" data-option-value=".july2">July 2</a></li>
          <li><a href="#filter" data-option-value=".july3">July 3</a></li>
          <li><a href="#filter" data-option-value=".july4">July 4</a></li>
          <li><a href="#filter" data-option-value=".aug1">August 1</a></li>
          <li><a href="#filter" data-option-value=".aug2">August 2</a></li>
          <li><a href="#filter" data-option-value=".aug3">August 3</a></li>
          <li><a href="#filter" data-option-value=".aug4">August 4</a></li>
          <li><a href="#filter" data-option-value=".sept1">September 1</a></li>
          <li><a href="#filter" data-option-value=".sept2">September 2</a></li>
          <li><a href="#filter" data-option-value=".sept3">September 3</a></li>
          <li><a href="#filter" data-option-value=".sept4">September 4</a></li>
        </ul>

      </div> <!-- #options -->
  
    </div><!--slider-->  

    <div id="container" class="clearfix">
      
      <article class="element aug1 aug2 aug3 aug4 sept1 sept2 sept3 sept4">
        <div class="fish silver">
          <img src="/_assets/img/icon-silver-salmon.svg" alt="Silver Salmon" />
          <h5>Silver Salmon</h5>
        </div><!--fish-->
        <div class="description">
          <p><span>Silver Salmon run from early August through September</span> and average 8 to 12 pounds with the larger fish weighing in at 15 pounds or more. Silver Salmon are the salmon of choice by most of the avid fly fisherman. We fish the freshwater streams within 200 yards of the ocean and the fish are so fresh that they still have sea lice on them. These areas are a short 20 minute flight from the lodge or can be accessed utilizing our 56' yacht, The Rainbow Warrior, as a mobile home base. Whether you use a fly rod or spinning rod, the Silver will live up to his fighting reputation.</p>
        </div><!--description-->
      </article>

      <article class="element july3 july4 aug1 aug2 aug3">
        <div class="fish">
          <img src="/_assets/img/icon-pink-salmon.svg" alt="Pink Salmon" />
          <h5>Pink Salmon</h5>
        </div><!--fish-->
        <div class="description">
          <p><span>Pink Salmon start their run in mid July and taper off in mid August.</span> Historically these fish run in cycles of two years, but in the lower Cook Inlet area we have fishable runs every year. It is not uncommon to catch 100 fish a day, averaging 3-5 pounds apiece. We fish for the Pinks in the freshwater streams, right where they flow into saltwater. This insures the strongest fish available. The Pinks are extremely aggressive on light tackle, whether it be spinning or fly.</p>
        </div><!--description-->
      </article>

      <article class="element june2 june3 june4 july1 july2 july3 july4 aug1">
        <div class="fish">
          <img src="/_assets/img/icon-king-salmon.svg" alt="King Salmon" />
          <h5>King Salmon</h5>
        </div><!--fish-->
        <div class="description">
          <p><span>The King run starts in mid May and continues through June.</span> King Salmon is the biggest of the 5 Pacific Salmon and one of the most popular. The average fish will weigh 15 to 30 pounds with the bigger fish exceeding 50 pounds. We fish for Kings from our 56' Rainbow Warrior yacht in the ocean around Kodiak Island. Fishing for the bright silver, hard fighting King Salmon is done by trolling in close proximity to Kodiak Island. For shear brute strength and raw power, there is nothing that matches the King.</p>
        </div><!--description-->
      </article>

      <article class="element july1 july2 july3 july4 aug1 aug2 aug3 aug4 sept1">
        <div class="fish">
          <img src="/_assets/img/icon-sockeye-salmon.svg" alt="Sockeye Salmon" />
          <h5>Sockeye Salmon</h5>
        </div><!--fish-->
        <div class="description">
          <p><span>Sockeye Salmon begin their spawning run late in June and are available through August.</span> They are the most plentiful of the Bristol Bay Salmon with as many as 6,000,000 fish entering the Iliamna drainage yearly. Sockeyes are great fighters that can take you right down to your backing on the first run and are acrobatic jumpers. Once you develop the fly presentation, the action can be fantastic. These fish average 5 to 8 pounds with the bigger fish weighing 10 to 12 pounds.</p>
        </div><!--description-->
      </article>

      <article class="element july2 july3 july4 aug1 aug2 aug3 aug4 sept1 sept2 sept3">
        <div class="fish">
          <img src="/_assets/img/icon-chum-salmon.svg" alt="Chum Salmon" />
          <h5>Chum Salmon</h5>
        </div><!--fish-->
        <div class="description">
          <p><span>Chum Salmon are best fished in June.</span> Chum Salmon runs coincide with the Pinks in our area. We fish in the freshwater streams where they flow into the saltwater. Next to the King, they are the biggest and strongest of all the Salmon. Fish from 15 to 18 pounds are common with the average weighing in between 8 to 10 pounds. Chum like shallow, fast moving water and can give you all the fight you can handle on spin tackle. They can be a great starter for the novice fly fisherperson because of their eagerness to take a fly.</p>
        </div><!--description-->
      </article>

      <article class="element june1 june2 june3 june4 july1 july2 july3 july4 aug1 aug2 aug3 aug4 sept1 sept2 sept3 sept4">
        <div class="fish">
          <img src="/_assets/img/icon-northern-pike.svg" alt="Northern Pike" />
          <h5>Northern Pike</h5>
        </div><!--fish-->
        <div class="description">
          <p><span>Northern Pike are best fished in June.</span> Northern Pike is a sportfish in a class by itself, a true predator that will eat anything that doesn't eat it first. Whether you're using a popping cork bug or streamer on a fly rod or a spoon on a spinning rod, it's a thrill of a lifetime to see the water parting as a big pike streaks in for the kill. The fish average 5 to 10 pounds with the bigger fish reaching 20 to 30 pounds. Pike are not what most people come to Alaska for, but it's a great day trip for those who want a variety of fishing opportunities.</p>
        </div><!--description-->
      </article>

      <article class="element june1 june2 june3 june4 july1 july2 july3 july4 aug1 aug2 aug3 aug4 sept1 sept2 sept3 sept4">
        <div class="fish">
          <img src="/_assets/img/icon-halibut.svg" alt="Halibut" />
          <h5>Halibut</h5>
        </div><!--fish-->
        <div class="description">
          <p><span>Halibut are best fished in June.</span> Halibut are considered, by a lot of fisherman, to be the best eating fish in Alaska. We fish for Halibut on the west side of Cook Inlet and around the Kodiak Island Archipeligo in 20 to 60 ft. of water as opposed to 200 to 300 ft. of water.  The state record for Halibut is nearly 500 pounds but the fish we catch average 20 to 60 pounds with an occasional 100 plus pound fish. If you want to take home some good eating fish and see some great country, you may want to choose this as one of your day trips.</p>
        </div><!--description-->
      </article>

      <article class="element june2 june3 june4 july1 july2 july3 july4 aug1 aug2 aug3 aug4 sept1 sept2 sept3 sept4">
        <div class="fish">
          <img src="/_assets/img/icon-arctic-char.svg" alt="Arctic Char" />
          <h5>Arctic Char</h5>
        </div><!--fish-->
        <div class="description">
          <p><span>Arctic Char are available throughout the summer with September being the best as spawning colors are extremely brilliant and colorful.</span> Arctic Char are relatives of the Dolly Varden, Brook and Lake Trout. The fish are strong fighters, and can taken on fly or spinning tackle. Like the Rainbow they average 2-6 pounds ( 16 to 25 inches ) with trophy fish weighing 10 pounds and more and achieving a length upwards of 30 inches.</p>
        </div><!--description-->
      </article>

      <article class="element june2 june3 june4 july1 july2 july3 july4 aug1 aug2 aug3 aug4 sept1 sept2 sept3 sept4">
        <div class="fish">
          <img src="/_assets/img/icon-rainbow-trout.svg" alt="Rainbow Trout" />
          <h5>Rainbow Trout</h5>
        </div><!--fish-->
        <div class="description">
          <p><span>Rainbow fishing is available the entire season with late August and September being the prime time to catch the huge rainbows the Bristol Bay area is noted for.</span> By late August, the rainbows have been feasting on salmon eggs for over 6 weeks. Rainbow Trout of Southwest Alaska are all wild and acrobatic fish that have never been contaminated by the genes of stocked fish. Fly fishing and spinning are the most popular and effective methods of deceiving Rainbows.  There are not as many drifting salmon eggs by late August so the competition for the available food supply is greater. The fish average 2 to 6 pounds and measure 18 to 24 inches during the summer. In late August and September, ten pound plus fish, over 30 inches are not uncommon.</p>
        </div><!--description-->
      </article>

      <article class="element june2 june3 june4 july1 july2 july3 july4 aug1 aug2 aug3 aug4 sept1 sept2 sept3 sept4">
        <div class="fish grayling">
          <img src="/_assets/img/icon-arctic-grayling.svg" alt="Arctic Grayling" />
          <h5>Arctic Grayling</h5>
        </div><!--fish-->
        <div class="description">
          <p><span>Grayling are available throughout the season.</span> Arctic Grayling are often referred to as the sailfish of the north.  This sportfish is plentiful and eagerly takes small dry fly patterns and spinners. They average 1 to 2 pounds and are 14 to 18 inches long with an occasional 3 to 4 pounder that can grow to a length of 24 inches.</p>
        </div><!--description-->
      </article>

    </div><!--container-->

  </div><!--inner-->
  
</section><!--testimonials-->




<script>
$('#container').isotope({ layoutMode : 'fitRows' });

    $(function(){
      
      var $container = $('#container');

      $container.isotope({
        itemSelector : '.element'
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
        itemSelector : '.element',
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

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>