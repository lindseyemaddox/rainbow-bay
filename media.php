<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/common.php'); //php framework and meta?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<script type="text/javascript" src="/_assets/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="/_assets/js/media.js"></script>
<link rel="stylesheet" type="text/css" media="print" href="/_assets/css/print.css" />
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<header>

  <img class="temp-image" src="/_assets/img/header.jpg" alt="temporary image">

</header>

<section class="pattern headerComp" id="intro">

    <div class="inner">

        <h2>Media</h2>

        <p>The weather during the summer in the Bristol Bay area of southwest Alaska can vary from a warm sunny 75 degrees to a cool rainy 45 degree day. This area is not far from the Bering Sea and Cook Inlet and as the old saying goes, “if you don’t like the weather just wait a few minutes.” Layer your clothes so that you can add or subtract layers as the weather changes. You will want to bring a light backpack with you daily with your rain gear and possibly a wool sweater to ensure your comfort while in the field. Drag the slider to the left to reveal the packing list.</p>

    </div><!--inner-->

</section><!--pattern-->

<section id="bgFixed" class="subpage media">

	<div class="inner">

        <aside>

            <div class="aside-inner">

                <div id="options" class="clearfix">
                
                    <ul id="filters" class="option-set clearfix" data-option-key="filter">
                        <li><a href="#filter" data-option-value="*" class="selected showall">Show All</a></li>
                        <li class="heading">Filter By</li>
                        <li><a href="#filter" data-option-value=".news">News</a></li>
                        <li><a href="#filter" data-option-value=".article">Articles</a></li>
                        <li><a href="#filter" data-option-value=".story">Stories</a></li>
                        <li><a href="#filter" data-option-value=".video">Videos</a></li>
                        <li><a href="#filter" data-option-value=".printable">Printables</a></li>
                        <li><a href="#filter" data-option-value=".photo">Photos</a></li>
                        <li class="heading">Photo Topic</li>
                        <li><a href="#filter" data-option-value=".wildlife">Wildlife</a></li>
                        <li><a href="#filter" data-option-value=".fish">Fish</a></li>
                        <li><a href="#filter" data-option-value=".scenery">Scenery</a></li>
                        <li><a href="#filter" data-option-value=".hiking">Hiking</a></li>
                    </ul>
                
                </div>

            </div><!--aside-inner-->

        </aside>

        <div id="container" class="clearfix">
                
            <article class="media-item video">
              
              <span class="icon-video"></span>

              <h4>trout in the something bay</h4>

              <p>Video description slkdfj sodijfeowih aklsdnf as;ldf oweif a;sd kfawpoe a;sfn s;ofa awoeihfa</p>

              <a href="/media/video-trout" class="video-link fancybox fancybox.iframe"><span class="icon-play"></span><img src="/_assets/img/video-trout.jpg" alt="Trout video"></a>

            </article><!--media-item-->

            <article class="media-item photo fish">
              
              <span class="icon-photo"></span>

              <h4>casting on a <br />warm day</h4>

              <a href="/media/photo-casting" class="link fancybox fancybox.iframe"><img src="/_assets/img/photo-casting.jpg" alt="Woman casting fishing line on the Illiamna River on a warm day"></a>

            </article><!--media-item-->

            <article class="media-item article">
              
              <span class="icon-article"></span>

              <h4>a long trip up-river</h4>

              <a href="/media/article-up-river" class="fancybox fancybox.iframe"><img src="/_assets/img/article-bear.jpg" alt="close-up of bear on Illiamna Lake"></a>

              <p class="author">by Jim Kern, GM</p>

              <p>Article doiafoa efoaiehf a sdlfoaieh fanf aoeifh a dslvaoief sldkn aowiehf a lsdkcn faoeishr ldknfaoweia sdlknf aoseir alsdkfn aoeifha lsdknfaoweif sldknf a Article doiafoa efoaiehf asdlfoaieh fanf aoeifh adslvaoief sldkn aowiehf alsdkcn faoeishr asldknfaoweia sdlknf aoseir alsdkfn aoeifha lsdknfaoweif sldknf a Article doiafoa efoaiehf asdlfoaieh fanf aoeifh adslvaoief sldkn aowiehf alsdkcn faoeishr asldknfaoweia sdlknf aoseir alsdkfn aoeifha lsdknfaoweif</p>

              <a href="/media/article-bear" class="fancybox fancybox.iframe readmore">read more</a>

            </article><!--media-item-->

            <article class="media-item printable">
              
              <span class="icon-news"></span>

              <h4>2015 <br/>Brochure</h4>

              <a href="/lightboxes/brochure" class="fancybox fancybox.iframe"><img src="/_assets/img/brochure.jpg" alt="2015 Rainbow Bay printable brochure"></a>

            </article><!--media-item-->

        </div><!--container-->

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