<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/common.php'); //php framework and meta?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>
	
  <div id="main" role="main">
      <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
            <li>
                <div class="tag">
                  <p>Ask About Our <span>Curbside Pickup</span></p>
                </div>
                <img src="/_assets/img/slide-curbside.jpg" alt="Floater plane picking up fishermen at Rainbow Bay" />
            </li>
              <li>
                <div class="tag">
                  <p>If You're Gonna Go, <span>Go Remote</span></p>
                </div>
                <img src="/_assets/img/slide-remote.jpg" alt="Remote fishing on Lake Illiamna" />
            </li>

          </ul>
        </div>
      </section>

    </div>
  
  </div>

<script type="text/javascript">
	$(window).load(function(){
	  	$('.flexslider').flexslider({
	    	start: function(slider){
	    	  $('body').removeClass('loading');
	    	}
	  	});
	});
</script>
<script src="/_assets/js/jquery.flexslider.js"></script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>