<?php

/**

 * The template for displaying the header

 *

 * Displays all of the head element and everything up until the "site-content" div.

 *

 * @package WordPress

 * @subpackage Aljay Mallari portfolio

 * @since Aljay Mallari portfolio 1.0

 */

?><!DOCTYPE html>

<html>

	

	<head>

		<title>Aljay Q. Mallari: Web Developer | Full Stack Developer | Programmer | Aljay Mallari | Portfolio </title>

		

		<meta name="description" content="Web developer with years of experience, highly familiar with PHP, MVC pattern, PHP frameworks, Wordpress, Magento, MySql, Ajax, HTML, jQuery and CSS."/>

		

		<meta charset="<?php bloginfo( 'charset' ); ?>">

		<meta name="viewport" content="width=device-width">

		
		<meta property="og:image" content="<?= get_template_directory_uri(); ?>/images/aljayDSC_0079.jpg" />
		<meta property="og:image:secure_url" content="<?= get_template_directory_uri(); ?>/images/aljayDSC_0079.jpg" />
		<meta property="og:image:type" content="image/jpeg" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />


		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon"/>

		<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Permanent+Marker' type='text/css' media='all' />

		<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Montserrat' type='text/css' media='all' />

		

		<link rel='stylesheet' href='<?= get_template_directory_uri(); ?>/css/font-awesome.css' type='text/css' media='all' />

		

		<link rel='stylesheet' href='<?= get_template_directory_uri(); ?>/css/bootstrap.css' type='text/css' media='all' />

		<link rel='stylesheet' href='<?= get_template_directory_uri(); ?>/css/circle.css' type='text/css' media='all' />

		<link rel='stylesheet' href='<?= get_stylesheet_uri(); ?>' type='text/css' media='all' />

		

		<?php wp_head(); ?>

		<script>

		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-83012507-1', 'auto');
		  ga('send', 'pageview');

		</script>

	</head>

	

	<body data-spy="scroll" data-target=".navbar" data-offset="50" <?php body_class(); ?>>

	

		<nav class="navbar navbar-fixed-top navbar-default">

			<div class="container">

				<div class="navbar-header">

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

		          		<span class="icon-bar"></span>

		          		<span class="icon-bar"></span>

		          		<span class="icon-bar"></span>                        

		      		</button>

		      		<a class="navbar-brand" href="#section1">Aljay Q. Mallari</a>

				</div>

			    <div class="collapse navbar-collapse" id="myNavbar">

			        <ul class="nav navbar-nav navbar-right">

			        	<!-- <li><a href="#section2">Summary</a></li> -->

			        	<li><a href="#section2">Portfolio</a></li>

				        <li><a href="#section3">Skills</a></li>

				        <li><a href="#section5">Contact</a></li>

				        <li>
                            <?php echo do_shortcode('[download-resume-button]'); ?>
                        </li>
			        </ul>

			    </div>

			</div>

		</nav>