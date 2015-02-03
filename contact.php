<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/common.php'); //php framework and meta?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<script src="/_assets/js/jquery.maskedinput.js"></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/subpage-header.php'); //video header?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<section class="pattern dark" id="contact">

	<div class="inner">

		<h2>Cast Us a Line</h2>

    <p class="alt">intro sentence with link to printable contact form</p>

    <div class="form">

        <?php
            $name = $_REQUEST['name'] ;
            $email = $_REQUEST['email'] ;
            $phone = $_REQUEST['phone'] ;
            $desc = $_REQUEST['desc'] ;
            if (isset($_POST['submit'])) {
              $to = 'lindseyemaddox@gmail.com';
              $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
              $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
              $headers .= "MIME-Version: 1.0\r\n";
              $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
              $message = '<html><body>';
              $message .= 'Name: '.$name.'<br>';
              $message .= 'Email: '.$email.'<br>';
              if (isset($_POST['opt-in'])) {
                  $message .= 'I would like to receive the e-newsletter';
                } else {
              }
              $message .= 'Phone: '.$phone.'<br>';
              $message .= 'How May We Help You: '.$desc.'<br>';
              $message .= '</body></html>';
              $subject = 'new form submission from website';

        mail($to, $subject, $message, $headers);
        echo "<div style='padding: 60px 20px; color: #fff; text-align: center;'><label> Thank you for using our form. We will be in contact with you as soon as possible.</label></div>";
      }
    else
      { echo "
          <div class='formleft'>
            <form method='post' action='".$_SERVER['SCRIPT_NAME']."'>
                <label for='name'>Name</label><input type='text' required name='name' id='name' size='10' placeholder='(required)'>
                <label for='phone'>Phone</label><input type='text' required name='phone' id='phone' size='10' placeholder='(required)'>
                <label for='email'>Email</label><input type='text' required name='email' id='email' size='10' placeholder='(required)'>
          </div>
          <div class='formright'>
                <label for='desc'>How May We Help You?</label>
                <textarea name='desc' id='desc' size='10'></textarea>
                <label for='opt-in' id='opt-in'>I'd like to receive the e-newsletter.</label>
                <input type='checkbox' value='1' id='opt-in' name='opt-in[]' checked />
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

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>