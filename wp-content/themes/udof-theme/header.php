<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Universidade do Futebol Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_bloginfo('template_url') ?>/favicon.ico">	
<link rel="icon" href="<?php echo get_bloginfo('template_url') ?>/favicon.png" type="image/png">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Owl script -->
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/js/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/js/owl-carousel/owl.theme.css">
<script src="<?php echo get_bloginfo('template_url') ?>/js/owl-carousel/owl.carousel.js"></script>
<?php wp_head(); ?>
<script type="text/javascript">
$(document).ready(function() {	
	var owl = $(".featured-slider");
	owl.owlCarousel({
		items:3,
  		responsive:false,
  		autoplay:true,
  		navigation:false,
  		pagination:false,
		autoPlay : 3000,
		stopOnHover: true,
		rewindNav:true
	});
	
	$(".featured-slider-prev").click(function(){		
		owl.trigger('owl.prev');
		event.preventDefault();
	});
	
	$(".featured-slider-next").click(function(){		
		owl.trigger('owl.next');
		event.preventDefault();
	});
});
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">	
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'udof-theme' ); ?></a>	
	<header id="masthead" class="site-header" role="banner">
		<div class="header-container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" class="logo"></a>
			<nav id="site-navigation" class="main-navigation" role="navigation">		
				<?php wp_nav_menu( array( 'theme_location' => 'menu-main' ) ); ?>
			</nav> 
			<nav id="top-navigation" class="menu-top" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-top' ) ); ?>
			</nav>
		</div>		
	</header><!-- #masthead -->
	<div id="content" class="site-content">