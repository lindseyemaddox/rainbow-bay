<?php require_once('_assets/inc/common.php'); //php framework and meta?>
<?php require_once('_assets/inc/head.php'); // HTTP head?>
<script type="text/javascript" src="/_assets/js/jquery.isotope.min.js"></script>
<link rel="stylesheet" type="text/css" media="print" href="/_assets/css/print.css" />
<?php require_once('_assets/inc/subpage-header.php'); //video header?>
<?php require_once('_assets/inc/navigation.php'); //navigation?>

<section class="pattern headerComp" id="intro">

    <div class="inner">

        <h2>Galleries</h2>

        <h3>Experience Alaskan fishing firsthand with Angry Eagle Lodge & Outfitters’ collection of videos, photos, and articles.</h3>

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
                        <!-- <li><a href="#filter" data-option-value=".news">News</a></li> -->
                        <li><a href="#filter" data-option-value=".article">Articles</a></li>
                        <!-- <li><a href="#filter" data-option-value=".story">Stories</a></li> -->
                        <li><a href="#filter" data-option-value=".video">Videos</a></li>
                        <li><a href="#filter" data-option-value=".printable">Printables</a></li>
                        <li><a href="#filter" data-option-value=".photo">Photos</a></li>
                        <li class="heading">Topic</li>
                        <li><a href="#filter" data-option-value=".fish">Fish</a></li>
                        <li><a href="#filter" data-option-value=".wildlife">Wildlife</a></li>
                        <li><a href="#filter" data-option-value=".scenery">Scenery</a></li>
						            <!--<li><a href="#filter" data-option-value=".hiking">Hiking</a></li> -->
                    </ul>

                </div>

            </div><!--aside-inner-->

        </aside>

        <div id="container" class="clearfix" itemscope itemtype="http://schema.org/CreativeWork">

          <article class="media-item photo fish">

            <span class="icon-photo"></span>

            <h4>Rainbow Trout Photos</h4>

            <a class="fancybox" rel="rainbow-trout" href="/_assets/img/galleries/rainbow-trout-closeup.jpg"><img property="Photograph" src="/_assets/img/galleries/rainbow-trout-closeup.jpg" alt="rainbow trout" /></a>

            <?php include('../lightboxes/galleries/rainbow-trout.php'); //rainbow trout gallery?>

          </article><!--media-item-->

          <article class="media-item photo fish" id="king-salmon">

            <span class="icon-photo"></span>

            <h4>King Salmon <br />Photos</h4>

            <a class="fancybox" rel="king-salmon" href="/_assets/img/galleries/king-salmon-grass.jpg"><img property="Photograph" src="/_assets/img/galleries/king-salmon-grass.jpg" alt="king salmon" /></a>

            <?php include('../lightboxes/galleries/king-salmon.php'); //king salmon gallery?>

          </article><!--media-item-->

          <article class="media-item video">

            <span class="icon-video"></span>

            <h4>Jet sledding down the Iliamna River</h4>

            <p>The Iliamna River’s shallow areas are home to impressive rainbow trout and Arctic char!</p>

            <a href="/lightboxes/video/jet-sleding" class="video-link fancybox fancybox.iframe" rel="video-jet-sledding"><span class="icon-play"></span><img property="Photograph" src="/_assets/img/video-jet-sleding.jpg" alt="Jet sledding down the Illiamna River video"></a>

          </article><!--media-item-->

          <article class="media-item photo fish">

            <span class="icon-photo"></span>

            <h4>Arctic Char <br />Photos</h4>

            <a class="fancybox" rel="arctic-char" href="/_assets/img/galleries/arctic-char-lake.jpg"><img property="Photograph" src="/_assets/img/galleries/arctic-char-lake.jpg" alt="arctic char shown in shallow water" /></a>

      <?php include('../lightboxes/galleries/arctic-char.php'); //artcic char gallery?>

          </article><!--media-item-->

          <article class="media-item photo fish">

            <span class="icon-photo"></span>

            <h4>Sliver Salmon Photos</h4>

            <a class="fancybox" rel="silver-salmon" href="/_assets/img/galleries/silver-salmon-red.jpg"><img property="Photograph" src="/_assets/img/galleries/silver-salmon-red.jpg" alt="silver salmon" /></a>

            <?php include('../lightboxes/galleries/silver-salmon.php'); //silver salmon gallery?>

          </article><!--media-item-->

          <article class="media-item video">

            <span class="icon-video"></span>

            <h4>Sockeye <br />Spawning</h4>

            <p>Experience the rush of the sockeye salmon run in southwest Alaska from July to September!</p>

            <a href="/lightboxes/video/sockeye" class="video-link fancybox fancybox.iframe" rel="video-sockeye"><span class="icon-play"></span><img property="Photograph" src="/_assets/img/video-sockeye.jpg" alt="Sockeye spawning in the Illiamna River video"></a>

          </article><!--media-item-->

          <article class="media-item photo wildlife">

            <span class="icon-photo"></span>

            <h4>Wildlife <br />Photos</h4>

            <a class="fancybox" rel="wildlife" href="/_assets/img/galleries/brown-bear.jpg"><img property="Photograph" src="/_assets/img/galleries/brown-bear.jpg" alt="brown bear on the bank of lake iliamna" /></a>

			<?php include('../lightboxes/galleries/wildlife.php'); //alaskan wildlife gallery?>

          </article><!--media-item-->

          <article class="media-item photo fish">

            <span class="icon-photo"></span>

            <h4>Grayling <br />Photos</h4>

            <a class="fancybox" rel="grayling" href="/_assets/img/galleries/grayling.jpg"><img property="Photograph" src="/_assets/img/galleries/grayling.jpg" alt="grayling shown in shallow water" /></a>

      <?php include('../lightboxes/galleries/grayling.php'); //grayling gallery?>

          </article><!--media-item-->


            <article class="media-item video">

              <span class="icon-video"></span>

              <h4>Fishing with <br />Brown Bears</h4>

              <p>Bears are common, but our guides are pros and ensure guests have a safe and exciting experience.</p>

              <a href="/lightboxes/video/bear" class="video-link fancybox fancybox.iframe" rel="video-bear"><span class="icon-play"></span><img property="Photograph" src="/_assets/img/video-bear.jpg" alt="Fishing with Brown Bears Katami National Park"></a>

            </article><!--media-item-->

          <article class="media-item photo scenery">

            <span class="icon-photo"></span>

            <h4>Lake Clark <br />Photos</h4>

            <a class="fancybox" rel="lake-clark" href="/_assets/img/galleries/lake-clark-fishing.jpg"><img property="Photograph" src="/_assets/img/galleries/lake-clark-fishing.jpg" alt="Lake Clark" /></a>

			      <?php include('../lightboxes/galleries/lake-clark.php'); //lake clark gallery?>

          </article><!--media-item-->

          <article class="media-item photo fish">

            <span class="icon-photo"></span>

            <h4>Sockeye Salmon Photos</h4>

            <a class="fancybox" rel="sockeye-salmon" href="/_assets/img/galleries/sockeye-salmon-woman.jpg"><img property="Photograph" src="/_assets/img/galleries/sockeye-salmon-woman.jpg" alt="sockeye salmon" /></a>

            <?php include('../lightboxes/galleries/sockeye-salmon.php'); //sockeye salmon gallery?>

          </article><!--media-item-->

            <article class="media-item video">

              <span class="icon-video"></span>

              <h4>Dallas Safari Club Interview</h4>

              <p>Dallas Safari Club Game Trails Online Editor Gayne C. Young talks to Jim Kern about fishing in Alaska.</p>

              <a href="/lightboxes/video/interview" class="video-link fancybox fancybox.iframe" rel="video-interview"><span class="icon-play"></span><img property="Photograph" src="/_assets/img/video-interview.jpg" alt="Dallas Safari Club Game Trails Online Editor Gayne C. Young talks to Jim Kern of Angry Eagle Resort about fishing in Alaska."></a>

            </article><!--media-item-->

            <article class="media-item video">

              <span class="icon-video"></span>

              <h4>Salmon fishing on the Nushagak</h4>

              <p>From June to July, find 50,000 to 120,000 king salmon in Alaska’s Nushagak River.</p>

              <a href="/lightboxes/video/fishing" class="video-link fancybox fancybox.iframe" rel="video-fishing"><span class="icon-play"></span><img property="Photograph" src="/_assets/img/video-fishing.jpg" alt="King Salmon fishing on the Nushagak River in western Alaska"></a>

            </article><!--media-item-->

             <article class="media-item article">

              <span class="icon-article"></span>

              <h4>King of <br />Salmon!</h4>

              <a href="/lightboxes/articles/igors-article.pdf" target="_blank"><img property="Photograph" src="/_assets/img/article-igors.jpg" alt="igor's article"></a>

              <p class="author">by Igor Grigorenko</p>

              <p>Alaskan chinook salmon are nicknamed “king salmon” or simply “the king” for a reason. This noble Pacific salmon demonstrates sheer power and strength, which makes hooking this mighty fish a complete delight.</p>

              <a href="/lightboxes/articles/igors-article.pdf" class="readmore" target="_blank">read more</a>

            </article><!--media-item-->

         <article class="media-item photo fish">

            <span class="icon-photo"></span>

            <h4>Northern Pike Photos</h4>

            <a class="fancybox" rel="northern-pike" href="/_assets/img/galleries/northern-pike-huge.jpg"><img property="Photograph" src="/_assets/img/galleries/northern-pike-huge.jpg" alt="northern pike" /></a>

            <?php include('../lightboxes/galleries/northern-pike.php'); //northern pike gallery?>

          </article><!--media-item-->

          <article class="media-item photo fish">

            <span class="icon-photo"></span>

            <h4>Chum Salmon <br />Photos</h4>

            <a class="fancybox" rel="chum-salmon" href="/_assets/img/galleries/chum-salmon-high.jpg"><img property="Photograph" src="/_assets/img/galleries/chum-salmon-high.jpg" alt="chum salmon" /></a>

            <?php include('../lightboxes/galleries/chum-salmon.php'); //chum salmon gallery?>

          </article><!--media-item-->

             <article class="media-item video">

              <span class="icon-video"></span>

              <h4>Young Brown Bear Fishing</h4>

              <p>Learn a thing or two about fishing from this self-taught pro.</p>

              <a href="/lightboxes/video/fishing-bear" class="video-link fancybox fancybox.iframe" rel="video-fishing-bear"><span class="icon-play"></span><img property="Photograph" src="/_assets/img/video-fishing-bear.jpg" alt=""></a>

            </article><!--media-item-->

         <article class="media-item photo fish">

            <span class="icon-photo"></span>

            <h4>Pink Salmon <br />Photos</h4>

            <a class="fancybox" rel="pink-salmon" href="/_assets/img/galleries/pink-salmon-boy.jpg"><img property="Photograph" src="/_assets/img/galleries/pink-salmon-boy.jpg" alt="pink salmon" /></a>

            <?php include('../lightboxes/galleries/pink-salmon.php'); //pink salmon gallery?>

          </article><!--media-item-->

            <article class="media-item printable">

              <span class="icon-news"></span>

              <h4>2015 <br/>Brochure</h4>

              <p>Learn more about Angry Eagle Lodge & Outfitters.</p>

              <a href="/downloads/brochure.pdf" target="_blank"><img property="Photograph" src="/_assets/img/media-brochure.jpg" alt="2015 Angry Eagle printable brochure"></a>

            </article><!--media-item-->

          <article class="media-item photo fish">

            <span class="icon-photo"></span>

            <h4>lake Trout <br />Photos</h4>

            <a class="fancybox" rel="lake-trout" href="/_assets/img/galleries/lake-trout-rocks.jpg"><img property="Photograph" src="/_assets/img/galleries/lake-trout-rocks.jpg" alt="lake trout" /></a>

            <?php include('../lightboxes/galleries/lake-trout.php'); //lake trout gallery?>

          </article><!--media-item-->

          <article class="media-item photo scenery">

            <span class="icon-photo"></span>

            <h4>Lake Iliamna <br />Photos</h4>

            <a class="fancybox" rel="lake-iliamna" href="/_assets/img/galleries/lake-iliamna-clouds.jpg"><img property="Photograph" src="/_assets/img/galleries/lake-iliamna-clouds.jpg" alt="Lake Iliamna Scenery" /></a>

			<?php include('../lightboxes/galleries/lake-iliamna.php'); //lake iliamna gallery?>

          </article><!--media-item-->

            <article class="media-item printable">

              <span class="icon-news"></span>

              <h4>Contact <br/>Form</h4>

              <p>Prefer the post office? Print and mail this form.</p>

              <a href="/downloads/contact-form.pdf" target="_blank"><img property="Photograph" src="/_assets/img/media-form.jpg" alt="2015 Angry Eagle printable contact form"></a>

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

$(".fancybox")
    .fancybox({
        padding : 0
    });


</script>





<?php require_once('_assets/inc/footer.php'); // footer, close body and html?>