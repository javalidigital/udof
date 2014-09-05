<?php 
/*
Template Name:  Nossas Soluções
*/
?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Universidade do Futebol Theme
 */

get_header(); ?>
	<?php
		if (function_exists('has_post_thumbnail')) {
	    if ( has_post_thumbnail() ) {
	    	$post_image_id = get_post_thumbnail_id($post_to_use->ID);
	    	if ($post_image_id) {
	    		$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
	    		if ($thumbnail) (string)$thumbnail = $thumbnail[0];
			}
		} else {
			$thumbnail = esc_url( home_url( 'wp-content/themes/udof-theme/images/bkg-section-default.jpg' ) );
		}
	}
	?>
	<div class="section-banner"	style="background:url('<?php echo $thumbnail; ?>') no-repeat center center;">
		<header class="section-header">
			<div class="breadcrumb">
				<?php if(function_exists('bcn_display')) {
					bcn_display();
				}?>
			</div>
			<?php the_title( '<h1 class="section-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	</div>
	<div class="section-menu">
		<nav class="section-menu-container" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-nossas-solucoes' ) ); ?>
		</nav>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
		<div class="site-sidebar" role="complementary">
			<?php dynamic_sidebar( 'sidebar' ); ?>
		</div>
	</div><!-- #primary -->
<?php get_footer(); ?>