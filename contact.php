<?php require_once('../_assets/inc/common.php'); //php framework and meta?>
<?php require_once('../_assets/inc/head.php'); // HTTP head?>
<title>Angry Eagle Lodge & Outfitters | </title>
<meta name="description" content="Cast us a line to learn more and plan your remote Alaskan fishing adventure at Angry Eagle Lodge & Outfitters.">
<script src="/_assets/js/jquery.maskedinput.js"></script>
<?php require_once('../_assets/inc/subpage-header.php'); //video header?>
<?php require_once('../_assets/inc/navigation.php'); //navigation?>

<section class="pattern dark" id="contact" itemscope itemtype="http://schema.org/ContactPage">

	<div class="inner">

		<h2>Cast Us a Line</h2>

		<h3 class="alt" style="line-height:1.25em;">Contact us to make your reservations, ask questions, and learn more <a href="/about/owners/">about Angry Eagle Lodge & Outfitters</a>. Or, <a href="/downloads/contact-form.pdf">download</a> a contact form to send via email, fax, or mail.</h3>

		<div class="form">



        <?php
					    $year = date('Y');
					    $today = date('Y-m-d H:i:s');
					    $startDate = date('Y-m-d H:i:s', strtotime("June 1, '$year' 12:01am"));
					    $endDate = date('Y-m-d H:i:s', strtotime("September 30, '$year' 12:00pm"));

			$capSecret = '6LfwmwITAAAAAObS8RQRJ_jUWtW4tUt31ZQdBMOi'; // required
			$capResponse = ($_REQUEST['g-recaptcha-response']) ? $_REQUEST['g-recaptcha-response'] : false; //required (value from google)
			$userIP = $_SERVER['REMOTE_ADDR']; //optional // &remoteip=$userIP
			// Get cURL resource
			$curl = curl_init();
			// Set some options - we are passing in a useragent too here
			curl_setopt_array($curl, array(
			  CURLOPT_RETURNTRANSFER => 1,
			  CURLOPT_URL => "https://www.google.com/recaptcha/api/siteverify?secret=$capSecret&response=$capResponse",
        CURLOPT_SSL_VERIFYPEER => 0
			));
			// Send the request & save response
			$response = curl_exec($curl);
			if(!$response)
			{
			  die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
			}
			$checkResponse = strpos($response, 'success');
			//success response from google


            $name = $_REQUEST['name'] ;
            $email = $_REQUEST['email'] ;
            $phone = $_REQUEST['phone'] ;
            $address = $_REQUEST['address'] ;
            $desc = $_REQUEST['desc'] ;
            if (isset($_POST['submit']) && $checkResponse !== false) {
              $to = 'rod@angryeagle.com';
              $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
              $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
              $headers .= "MIME-Version: 1.0\r\n";
              $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
              $message = '<html><body>';
              $message .= 'Name: '.$name.'<br>';
              $message .= 'Email: '.$email.'<br>';
              if (isset($_POST['opt-in'])) {
                  $message .= 'I would like to receive the e-newsletter<br>';
                } else {
              }
              $message .= 'Phone: '.$phone.'<br>';
              $message .= 'Address: '.$address.'<br>';
              $message .= 'How May We Help You: '.$desc.'<br>';
              $message .= '</body></html>';
              $subject = 'New form submission from angryeagle.com';

        mail($to, $subject, $message, $headers);
          curl_close($curl);

        echo "<div style='padding: 30px 20px 0; color: #fff; text-align: center;font-size:1.3em;'><p> Thank you for using our form. We will be in contact with you as soon as possible.</p> <p>In the meantime, have a look at our <a style='text-align:center;color:#fff;text-decoration:none;' href='/galleries'>photo albums</a> or <a style='text-align:center;color:#fff;text-decoration:none;' href='/recreation/sportfishing'>see which fish are in season</a>. For immediate assistance, give us a ring at 907.850.4153 in season (May 15th - September 15th) or 615.604.7666 off season (September 16th - May 14th).</p></div>";
      }
    else
      { echo "
            <form method='post' action='".$_SERVER['SCRIPT_NAME']."'>
          <div class='formleft'>
                <label for='name'>Name</label><input type='text' required name='name' id='name' size='10' placeholder='(required)'>
                <label for='phone'>Phone</label><input type='text' required name='phone' id='phone' size='10' placeholder='(required)'>
                <label for='address'>Address</label><input type='text' required name='address' id='address' size='10' placeholder='(required)'>
                <label for='email'>Email</label><input type='text' required name='email' id='email' size='10' placeholder='(required)'>
                <label for='opt-in' id='opt-in'>I'd like to receive the e-newsletter.</label>
                <input class='opt-in' type='checkbox' value='1' id='opt-in' name='opt-in[]' checked />
          </div>
          <div class='formright'>
                <label for='desc'>How May We Help You?</label>
                <textarea name='desc' id='desc' size='10'></textarea>
                <div class='g-recaptcha' data-sitekey='6LfwmwITAAAAAH8SP9JGnFP15qdRQM5OtPX0ubVZ'></div>
                <button class='submit' type='submit' name='submit'>Send</button>
          </div>
          </form>";
          }
        ?>

    	</div><!--form-->

	</div><!--inner-->

</section><!--pattern-->

<script type="text/javascript">
    jQuery(function($){
      $("input[name='phone']").mask("(999) 999-9999");
    });
</script>

<?php require_once('../_assets/inc/footer.php'); // footer, close body and html?>
