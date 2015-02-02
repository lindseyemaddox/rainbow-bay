<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/common.php'); //php framework and meta?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<link rel="stylesheet" type="text/css" media="print" href="/_assets/css/print.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="/_assets/js/prepare.js"></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/subpage-header.php'); //video header?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<section class="pattern headerComp" id="intro">

	<div class="inner">

		<h2>Packing for Your Trip to Angry Eagle</h2>

		<p>As the saying goes, “If you don’t like the weather, just wait a few minutes.” That couldn’t be truer than here in the Bristol Bay area of southwest Alaska. Summer weather can vary from a sunny day in the mid-seventies to a cool, rainy day in the mid-forties. That’s why you should bring clothing that can be layered so you can add or subtract layers as the weather changes. </p>

    <p>Drag the slider over the fisherman to see our entire list of packing recommendations.</p>

	</div><!--inner-->

</section><!--pattern-->

<section id="bgFixed" class="subpage plane">
  
  <div class="inner">

    <div id="product-reveal" class="left fisherman">

      <div class="container">
    
      		<div class="reveal-parts-container fisherman">
      			<div id="revealParts" class="foreground">
      				<div class="image-c"><img src="/_assets/img/fisherman-over.png" alt=""></div>
      			</div>
      			<div class="background"><img src="/_assets/img/fisherman-under.png" alt=""></div>
      			<div class="bot-bar"></div>
      			<ul class="highlights">
      				<li class="b-one"></li>
      				<li class="b-two"></li>
      				<li class="b-three"></li>
      				<li class="b-four"></li>
      				<li class="b-five"></li>
      				<li class="b-six"></li>
      				<li class="b-seven"></li>
      				<li class="b-eight"></li>
              <li class="b-nine"></li>
              <li class="b-ten"></li>
              <li class="b-eleven"></li>
              <li class="b-twelve"></li>
      			</ul>
      		</div><!--reveal-parts-container-->

          <div class="feature-info">
            <ul>
              <li>
                <img src="/_assets/img/gear-cap.png">
                <span>warm cap</span>
              </li>
              <li>
                <img src="/_assets/img/gear-sunglasses.png">
                <span>polarized sunglasses</span>
              </li>
              <li>
                <img src="/_assets/img/gear-long-johns.png">
                <span>two sets of light long johns</span>
              </li>
              <li>
                <img src="/_assets/img/gear-wool-socks.png">
                <span>two pairs of padded wool socks</span>
              </li>
              <li>
                <img src="/_assets/img/gear-cotton-socks.png">
                <span>two pairs of padded cotton socks</span>
              </li>
              <li>
                <img src="/_assets/img/gear-gloves.png">
                <span>fishing gloves (fingerless are ok)</span>
              </li>
              <li>
                <img src="/_assets/img/gear-long-sleeved.png">
                <span>two long-sleeved shirts</span>
              </li>
              <li>
                <img src="/_assets/img/gear-down-jacket.png">
                <span>light down jacket</span>
              </li>
              <li>
                <img src="/_assets/img/gear-jeans.png">
                <span>two pairs of wool pants or jeans</span>
              </li>
              <li>
                <img src="/_assets/img/gear-wool-sweater.png">
                <span>medium-weight wool sweater</span>
              </li>
              <li>
                <img src="/_assets/img/gear-rain-suit.png">
                <span>rain suit (we recommend Gore-Tex)</span>
              </li>
              <li>
                <img src="/_assets/img/gear-shoes.png">
                <span>tennis or deck shoes (for use at lodge)</span>
              </li>
            </ul>
          </div>

      </div> <!-- END PRODUCT REVEAL -->

    </div>

    <div class="right table">

      <table class="dark">
        <tr>
          <td>warm cap</td>
        </tr>
        <tr>
          <td>polarized sunglasses</td>
        </tr>
        <tr>
          <td>two sets of light long johns</td>
        </tr>
        <tr>
          <td>two pairs of padded wool socks</td>
        </tr>
        <tr>
          <td>two pairs of padded cotton socks</td>
        </tr>
        <tr>
          <td>fishing gloves (fingerless are ok)</td>
        </tr>
        <tr>
          <td>two long-sleeved shirts</td>
        </tr>
        <tr>
          <td>medium-weight wool sweater</td>
        </tr>
        <tr>
          <td>two pairs of wool pants or jeans</td>
        </tr>
        <tr>
          <td>light down jacket</td>
        </tr>
        <tr>
          <td>rain suit (we recommend Gore-Tex)</td>
        </tr>
        <tr>
          <td>tennis or deck shoes (for use at lodge)</td>
        </tr>
      </table>

      <button class="print" onclick="printTable()"><span class="icon-print"></span> Print</button>

    </div><!--right-->


  </div><!--inner-->

</section>

<script>
function printTable() {
    window.print();
}
</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>