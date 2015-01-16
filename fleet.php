<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/common.php'); //php framework and meta?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>

<header>

    <div class="video-overlay"></div>

    <div class="videowrap">

      <div class="videoHolder header">
    
        <video autoplay preload="auto" muted loop="loop" canplay="false" class="bg-vid">
    
          <source src="web-vid2.mp4" type="video/mp4">
          <source src="web-vid2.webm" type="video/webm">
    
        </video>
    
      </div>
    
    </div>

</header>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<section class="pattern headerComp" id="intro">

    <div class="inner">

        <h2>Our Fleet</h2>

        <p><span class="temp">Strip steak cupim jowl brisket kielbasa beef ribs short ribs, alcatra meatball salami ham hock tri-tip capicola pork shoulder. Salami meatloaf cow, ball tip sausage picanha turkey pancetta brisket swine. Shoulder frankfurter filet mignon spare ribs boudin ham hock, jowl salami rump. Doner corned beef pork drumstick pig ground round. Strip steak swine beef ribs brisket fatback drumstick frankfurter pastrami pork belly spare ribs cupim ham shoulder meatloaf. Fatback rump swine chicken pancetta hamburger short ribs brisket t-bone landjaeger ground round chuck salami andouille. Jerky fatback turkey pork belly cow.</span></p>

    </div><!--inner-->

</section><!--pattern-->

<section id="bgFixed" class="subpage fleet">

	<div class="inner">

    <article class="fleet-item">
      
      <span class="icon-net"></span>

      <h4>DeHavilland Beaver</h4>

      <p>Completely rebuilt from prop to tail in 2013, our deHavilland Beaver sits on Aerocet 5850 composite floats and has custom cargo doors and cockpit extension modifications. It comfortably accommodates five passengers plus pilot.</p>

    </article><!--fleet-item-->

    <article class="fleet-item">
      
      <span class="icon-net"></span>

      <h4>Cessna <br />185</h4>

      <p>Our Cessna 185 utilizes either wheels or floats. This plane comfortably accommodates three passengers plus pilot.</p>

    </article><!--fleet-item-->

    <article class="fleet-item">
      
      <span class="icon-net"></span>

      <h4>Harbercraft KingFisher</h4>

      <p>Our Harbercraft KingFisher 2825 boats transport guests to the streams we fish and to Cook Inlet for shallow water fishing. One boat has twin 150 HP Honda outboards and the other has twin 200 HP outboards. Equipped with depth finders, radios, and radar.</p>

    </article><!--fleet-item-->

    <article class="fleet-item">
      
      <span class="icon-net"></span>

      <h4>G-3 <br />Jet Boats</h4>

      <p>We use our collection of G-3 jet boats on lakes and streams that we reach by airplane or our KingFishers. These boats run in a few inches of water, enabling our guides to access the upper reaches of prime Arctic char and rainbow trout of the remote rivers we fish.</p>

    </article><!--fleet-item-->

    <article class="fleet-item">
      
      <span class="icon-net"></span>

      <h4>John Deere Gator</h4>

      <p>need desc</p>

    </article><!--fleet-item-->

    <article class="fleet-item">
      
      <span class="icon-net"></span>

      <h4>Kubota <br />1140</h4>

      <p>need desc</p>

    </article><!--fleet-item-->

    <div class="clearfix"></div>

	</div><!--inner-->

</section><!--pattern-->

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

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>