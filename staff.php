<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/common.php'); //php framework and meta?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<header>

  <img class="temp-image" src="/_assets/img/header.jpg" alt="temporary image">

</header>

<section class="pattern headerComp" id="intro">

    <div class="inner">

        <h2>Our Staff</h2>

        <p>The weather during the summer in the Bristol Bay area of southwest Alaska can vary from a warm sunny 75 degrees to a cool rainy 45 degree day. This area is not far from the Bering Sea and Cook Inlet and as the old saying goes, “if you don’t like the weather just wait a few minutes.” Layer your clothes so that you can add or subtract layers as the weather changes. You will want to bring a light backpack with you daily with your rain gear and possibly a wool sweater to ensure your comfort while in the field. Drag the slider to the left to reveal the packing list.</p>

    </div><!--inner-->

</section><!--pattern-->

<section id="bgFixed" class="subpage staff">

	<div class="inner">

    <a href="/lightboxes/staff/kern" class="staff-item fancybox fancybox.iframe">
      
      <span class="icon-bio"></span>

      <h4>Jim Kern <br />General Manager</h4>

      <img src="/_assets/img/staff-kern.jpg" alt="Rainbow Bay staff member Jim Kern">

    </a><!--staff-item-->

    <a href="/lightboxes/staff/kern" class="staff-item fancybox fancybox.iframe">
      
      <span class="icon-bio"></span>

      <h4>Jim Kern <br />General Manager</h4>

      <img src="/_assets/img/staff-kern.jpg" alt="Rainbow Bay staff member Jim Kern">

    </a><!--staff-item-->

    <a href="/lightboxes/staff/kern" class="staff-item fancybox fancybox.iframe">
      
      <span class="icon-bio"></span>

      <h4>Jim Kern <br />General Manager</h4>

      <img src="/_assets/img/staff-kern.jpg" alt="Rainbow Bay staff member Jim Kern">

    </a><!--staff-item-->

    <a href="/lightboxes/staff/kern" class="staff-item fancybox fancybox.iframe">
      
      <span class="icon-bio"></span>

      <h4>Jim Kern <br />General Manager</h4>

      <img src="/_assets/img/staff-kern.jpg" alt="Rainbow Bay staff member Jim Kern">

    </a><!--staff-item-->

    <a href="/lightboxes/staff/kern" class="staff-item fancybox fancybox.iframe">
      
      <span class="icon-bio"></span>

      <h4>Jim Kern <br />General Manager</h4>

      <img src="/_assets/img/staff-kern.jpg" alt="Rainbow Bay staff member Jim Kern">

    </a><!--staff-item-->

    <a href="/lightboxes/staff/kern" class="staff-item fancybox fancybox.iframe">
      
      <span class="icon-bio"></span>

      <h4>Jim Kern <br />General Manager</h4>

      <img src="/_assets/img/staff-kern.jpg" alt="Rainbow Bay staff member Jim Kern">

    </a><!--staff-item-->

    <a href="/lightboxes/staff/kern" class="staff-item fancybox fancybox.iframe">
      
      <span class="icon-bio"></span>

      <h4>Jim Kern <br />General Manager</h4>

      <img src="/_assets/img/staff-kern.jpg" alt="Rainbow Bay staff member Jim Kern">

    </a><!--staff-item-->

    <a href="/lightboxes/staff/kern" class="staff-item fancybox fancybox.iframe">
      
      <span class="icon-bio"></span>

      <h4>Jim Kern <br />General Manager</h4>

      <img src="/_assets/img/staff-kern.jpg" alt="Rainbow Bay staff member Jim Kern">

    </a><!--staff-item-->

    <a href="/lightboxes/staff/kern" class="staff-item fancybox fancybox.iframe">
      
      <span class="icon-bio"></span>

      <h4>Jim Kern <br />General Manager</h4>

      <img src="/_assets/img/staff-kern.jpg" alt="Rainbow Bay staff member Jim Kern">

    </a><!--staff-item-->

    <a href="/lightboxes/staff/kern" class="staff-item fancybox fancybox.iframe">
      
      <span class="icon-bio"></span>

      <h4>Jim Kern <br />General Manager</h4>

      <img src="/_assets/img/staff-kern.jpg" alt="Rainbow Bay staff member Jim Kern">

    </a><!--staff-item-->

    <a href="/lightboxes/staff/kern" class="staff-item fancybox fancybox.iframe">
      
      <span class="icon-bio"></span>

      <h4>Jim Kern <br />General Manager</h4>

      <img src="/_assets/img/staff-kern.jpg" alt="Rainbow Bay staff member Jim Kern">

    </a><!--staff-item-->

    <a href="/lightboxes/staff/kern" class="staff-item fancybox fancybox.iframe">
      
      <span class="icon-bio"></span>

      <h4>Jim Kern <br />General Manager</h4>

      <img src="/_assets/img/staff-kern.jpg" alt="Rainbow Bay staff member Jim Kern">

    </a><!--staff-item-->

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