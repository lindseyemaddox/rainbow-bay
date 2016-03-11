<!doctype html>

<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<!--[if lt IE 9 ]><html lang="en" class="ie8"><![endif]-->
<!--[if lt IE 8 ]><html lang="en" class="ie7"><![endif]-->
<!--[if (gt IE 7)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $smCurrentSite->getMetaDescription(); ?>">
	<meta name="keywords" content="<?php echo $smCurrentSite->getMetaKeywords(); ?>">
	<?php echo $smCurrentSite->getGoogleVerificationCode(); ?>

	<!--twitter card-->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@angryeaglelodge">
	<meta name="twitter:creator" content="@anngryeaglelodge">
	<meta name="twitter:title" content="Angry Eagle Lodge &amp; Outfitters">
	<meta name="twitter:description" content="Angry Eagle Lodge &amp; Outfitters operates two full-service fishing lodges in the heart of Southwest Alaska’s Bristol Bay region. For the past 30 years, we’ve prided ourselves on offering the fishing adventures of a lifetime.">
	<meta name="twitter:image:src" content="http://www.angryeagle.com/emails/twitter-card.jpg">

	<!--open graph-->
	<meta property="og:title" content="Alaska's Premier Fishing Resort"/>
	<meta property="og:url" content="http://www.angryeagle.com" />
	<meta property="og:image" content="http://www.angryeagle.com/emails/og-image.jpg"/>
	<meta property="og:site_name" content="Angry Eagle Lodge &amp; Outfitters"/>
	<meta property="og:description" content="Angry Eagle Lodge &amp; Outfitters operates two full-service fishing lodges in the heart of Southwest Alaska’s Bristol Bay region. For the past 30 years, we’ve prided ourselves on offering the fishing adventures of a lifetime."/>

	<!-- icons -->
	<link rel="shortcut icon" href="/_assets/img/favicon.ico">
	<link rel="apple-touch-icon" href="/_assets/img/apple-touch-57.png">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="/_assets/css/styles.css" media="screen">
	<?php if ($smCurrentFolder && ($smCurrentFolder->getTitle() == 'Admin' || $smCurrentFolder->getTitle() == 'Guests')): ?>
		<link rel="stylesheet" href="/smTemplate/css/ae-admin.css" type="text/css">
	<?php endif; ?>

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Passion+One:700|Condiment|Source+Sans+Pro:400,300,400italic,600,700' rel='stylesheet' type='text/css'>

	<!-- JavaScript -->
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="/_assets/js/main.js"></script>

	<!--google recaptcha-->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<!--google analytics-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60606714-1', 'auto');
	  ga('send', 'pageview');

	</script>
	
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','//connect.facebook.net/en_US/fbevents.js');
	
	fbq('init', '514362418728476');
	fbq('track', "PageView");</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=514362418728476&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->	