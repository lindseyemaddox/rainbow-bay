<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/common.php'); //php framework and meta?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="/_assets/js/jquery.isotope.min.js"></script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/subpage-header.php'); //video header?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<section class="pattern headerComp" id="species">

  <div class="inner">

    <h2>Sportfishing</h2>

    <p>The Bristol Bay area in Southwest Alaska offers a wide variety of sportfishing, which means Rainbow Bay Lodge guests are in for an angler experience of a lifetime. During the Alaskan fishing season, our guests will be casting their lines for these finned beauties:</p>

    <div id="slider-cont">
      
      <div id="options" class="clearfix">
        
        <ul id="filters" class="option-set clearfix" data-option-key="filter">
          <p class="filters"><span>slide to order species <br />or<br /> </span><a href="#filter" data-option-value="*" class="selected">original order</a></p>
          <li class="june"><a href="#filter" data-option-value=".june1">June 1</a></li>
          <li class="june"><a href="#filter" data-option-value=".june2">June 2</a></li>
          <li class="june"><a href="#filter" data-option-value=".june3">June 3</a></li>
          <li class="june"><a href="#filter" data-option-value=".june4">June 4</a></li>
          <li class="july"><a href="#filter" data-option-value=".july1">July 1</a></li>
          <li class="july"><a href="#filter" data-option-value=".july2">July 2</a></li>
          <li class="july"><a href="#filter" data-option-value=".july3">July 3</a></li>
          <li class="july"><a href="#filter" data-option-value=".july4">July 4</a></li>
          <li class="aug"><a href="#filter" data-option-value=".aug1">August 1</a></li>
          <li class="aug"><a href="#filter" data-option-value=".aug2">August 2</a></li>
          <li class="aug"><a href="#filter" data-option-value=".aug3">August 3</a></li>
          <li class="aug"><a href="#filter" data-option-value=".aug4">August 4</a></li>
          <li class="sept"><a href="#filter" data-option-value=".sept1">September 1</a></li>
          <li class="sept"><a href="#filter" data-option-value=".sept2">September 2</a></li>
          <li class="sept"><a href="#filter" data-option-value=".sept3">September 3</a></li>
          <li class="sept"><a href="#filter" data-option-value=".sept4">September 4</a></li>
        </ul>

      </div> <!-- #options -->


      <div class="slider-right">

        <div class="slider-image"><img src="/_assets/img/slider.jpg"></div>

        <div class="slider"></div>

      </div><!--slider-right-->

      <div class="clearfix"></div>

    </div><!--slider-->  

    <div id="container" class="clearfix">
      
      <article class="fish-item aug1 aug2 aug3 aug4 sept1 sept2 sept3 sept4">
        <div class="fish silver">
          <img src="/_assets/img/icon-silver-salmon.svg" alt="Silver Salmon" />
          <h5>Silver Salmon</h5>
          <p><a href="/lightboxes/sportfishing/silver-salmon" class="fancybox fancybox.iframe">details</a></p>
        </div><!--fish-->
      </article>

      <article class="fish-item july3 july4 aug1 aug2 aug3">
        <div class="fish">
          <img src="/_assets/img/icon-pink-salmon.svg" alt="Pink Salmon" />
          <h5>Pink Salmon</h5>
          <p><a href="/lightboxes/sportfishing/pink-salmon" class="fancybox fancybox.iframe">details</a></p>
        </div><!--fish-->
      </article>

      <article class="fish-item june2 june3 june4 july1 july2 july3 july4 aug1">
        <div class="fish">
          <img src="/_assets/img/icon-king-salmon.svg" alt="King Salmon" />
          <h5>King Salmon</h5>
          <p><a href="/lightboxes/sportfishing/king-salmon" class="fancybox fancybox.iframe">details</a></p>
        </div><!--fish-->
      </article>

      <article class="fish-item july1 july2 july3 july4 aug1 aug2 aug3 aug4 sept1">
        <div class="fish">
          <img src="/_assets/img/icon-sockeye-salmon.svg" alt="Sockeye Salmon" />
          <h5>Sockeye Salmon</h5>
          <p><a href="/lightboxes/sportfishing/sockeye-salmon" class="fancybox fancybox.iframe">details</a></p>
        </div><!--fish-->
      </article>

      <article class="fish-item july2 july3 july4 aug1 aug2 aug3 aug4 sept1 sept2 sept3">
        <div class="fish">
          <img src="/_assets/img/icon-chum-salmon.svg" alt="Chum Salmon" />
          <h5>Chum Salmon</h5>
          <p><a href="/lightboxes/sportfishing/chum-salmon" class="fancybox fancybox.iframe">details</a></p>
        </div><!--fish-->
      </article>

      <article class="fish-item june1 june2 june3 june4 july1 july2 july3 july4 aug1 aug2 aug3 aug4 sept1 sept2 sept3 sept4">
        <div class="fish">
          <img src="/_assets/img/icon-northern-pike.svg" alt="Northern Pike" />
          <h5>Northern Pike</h5>
          <p><a href="/lightboxes/sportfishing/northern-pike" class="fancybox fancybox.iframe">details</a></p>
        </div><!--fish-->
      </article>

      <article class="fish-item june2 june3 june4 july1 july2 july3 july4 aug1 aug2 aug3 aug4 sept1 sept2 sept3 sept4">
        <div class="fish">
          <img src="/_assets/img/icon-arctic-char.svg" alt="Arctic Char" />
          <h5>Arctic <br />Char</h5>
          <p><a href="/lightboxes/sportfishing/arctic-char" class="fancybox fancybox.iframe">details</a></p>
        </div><!--fish-->
      </article>

      <article class="fish-item june2 june3 june4 july1 july2 july3 july4 aug1 aug2 aug3 aug4 sept1 sept2 sept3 sept4">
        <div class="fish">
          <img src="/_assets/img/icon-rainbow-trout.svg" alt="Rainbow Trout" />
          <h5>Rainbow Trout</h5>
          <p><a href="/lightboxes/sportfishing/rainbow-trout" class="fancybox fancybox.iframe">details</a></p>
        </div><!--fish-->
      </article>

      <article class="fish-item june2 june3 june4 july1 july2 july3 july4 aug1 aug2 aug3 aug4 sept1 sept2 sept3 sept4">
        <div class="fish grayling">
          <img src="/_assets/img/icon-arctic-grayling.svg" alt="Arctic Grayling" />
          <h5>Arctic Grayling</h5>
          <p><a href="/lightboxes/sportfishing/arctic-grayling" class="fancybox fancybox.iframe">details</a></p>
        </div><!--fish-->
      </article>

    </div><!--container-->

  </div><!--inner-->
  
</section><!--testimonials-->

<section class="pattern" id="links">

  <div class="inner">

    <p class="prev"><a href="/about/fleet"><img src="/_assets/img/prev.png"/> <span>Previous:</span> Our Fleet</a></p>

    <p class="next"><a href="/recreation/hiking"><span>Next:</span> Hiking, Birding & Sightseeing <img src="/_assets/img/next.png"/></a></p>

    <div class="clearfix"></div>

  </div><!--inner-->

</section>

<script>

    $(function(){

      var $container = $('#container');

      $container.isotope({
        itemSelector : '.fish-item'
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

      $( ".slider" ).slider({      
        value:0,      
        min: 0,      
        max: 15,      
        step: 1,      
        slide: function( event, ui ) {        
          var slideVal = ui.value;   
          $('#filters li:eq('+ slideVal +') a').trigger('click');
          $('#filters li:eq('+ slideVal +') a').css('color','blue');
        }    
      });


    });
  
</script>


<script>

</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>