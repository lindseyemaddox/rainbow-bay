<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/common.php'); //php framework and meta?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<script src="/_assets/js/jquery.maskedinput.js"></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/subpage-header.php'); //video header?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<section class="pattern dark headerComp" id="contact">

	<div class="inner">

		<h2>Cast Us a Line</h2>

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
                  $message .= 'Phone: '.$phone.'<br>';
                  $message .= 'How May We Help You: '.$desc.'<br>';
                  $message .= '</body></html>';
                  $subject = 'new form submission from website';

            mail($to, $subject, $message, $headers);
            echo "<div style='padding: 60px 20px; color: #fff; text-align: center;'><label> Thank you for using our form. We will be in contact with you as soon as possible.</label></div>";
          }
        else
          { echo "
                <form method='post' action='".$_SERVER['SCRIPT_NAME']."'>
                    <label for='name'>Name</label><input type='text' required name='name' id='name' size='10' placeholder='(required)'>
                    <label for='phone'>Phone</label><input type='text' required name='phone' id='phone' size='10' placeholder='(required)'>
                    <label for='email'>Email</label><input type='text' required name='email' id='email' size='10' placeholder='(required)'>
                    <label for='desc'>How May We Help You?</label>
                    <textarea name='desc' id='desc' size='10'></textarea>
                    <button class='submit' type='submit' name='submit'>Send</button>
              </form>";
              }
            ?>

        </div><!--form-->

        <div class="contact">
            
            <p class="phone"><a href="tel:18179462479">(817) 946-2479</a></p>

            <p>P.O. Box 47011<br />

            Pedro Bay, AK 99647</p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d128186.66823512591!2d-154.02904560000002!3d59.86712945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x56c30a90275ebf31%3A0x455b21b73178553b!2sPedro+Bay%2C+AK+99647!5e0!3m2!1sen!2sus!4v1420932731050" width="100%" height="355" frameborder="0" style="border:0"></iframe>

        </div><!--contact-->

	</div><!--inner-->

</section><!--pattern-->

<script type="text/javascript">
    jQuery(function($){
      $("input[name='phone']").mask("(999) 999-9999");
    });
</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>