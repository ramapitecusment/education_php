<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

	<meta charset="UTF-8" />

	<title>Leroy - Onepage Bootstrap HTML Template</title>

	<meta name="description" content="Onepage Multipurpose Bootstrap HTML Template">

	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/theme.css">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

</head>

<body>
	<!--wrapper start-->
	<div class="wrapper" id="wrapper">

		<?php include_once 'header.php' ?>

		<!--about us-->
		<?php require_once 'about.php' ?>
		<!--specialties-->

		<?php require_once 'specialties.php' ?>

		<!--gallery-->

		<?php require_once 'gallery.php' ?>

		<!--feedback-->
		
		<?php require_once 'feedback.php' ?>

		<!--footer-->
		<?php include_once 'footer.php' ?>


	</div>
	<!--wrapper end-->

	<!--Javascripts-->
	<script src="js/jquery.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/menustick.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/easing.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/masonry.js"></script>
	<script src="js/imgloaded.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/colorfinder.js"></script>
	<script src="js/gridscroll.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/common.js"></script>

	<script type="text/javascript">
		jQuery(function($) {
			$(document).ready(function() {
				//enabling stickUp on the '.navbar-wrapper' class
				$('.navbar-wrapper').stickUp({
					parts: {
						0: 'banner',
						1: 'aboutus',
						2: 'specialties',
						3: 'gallery',
						4: 'feedback',
						5: 'contact'
					},
					itemClass: 'menuItem',
					itemHover: 'active',
					topMargin: 'auto'
				});
			});
		});
	</script>
</body>

</html>