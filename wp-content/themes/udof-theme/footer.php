<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Universidade do Futebol Theme
 */
?>

	</div><!-- #content -->
	<?php if ( ! is_home() ) {?>
		<div class="featured-slider-container">
			<a href=# title"Anterior" class="featured-slider-prev"></a>
			<a href=# title"Pr&oacute;ximo" class="featured-slider-next"></a>
			<div class="featured-slider">
				<?php dynamic_sidebar( 'home-featured' ); ?>
			</div>
		</div>	
	<?php } ?>
	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer-container clearfix">
			<div class="footer-sitemap">
				<?php dynamic_sidebar( 'footer-sitemap' ); ?>
			</div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" class="footer-logo"></a>
			<div class="footer-copyright-terms">
				<?php dynamic_sidebar( 'footer-terms' ); ?>
				<span class="footer-copyright">
					&copy;2014 Universidade do Futebol. Todos os direitos reservados.
				</span>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
