<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Universidade do Futebol Theme
 */

get_header(); ?>
		<div class="home-slider">			
			<?php putRevSlider( "home" ) ?>
			
		</div>
		<div class="home-featured-slider-container featured-slider-container">
			<a href=# title"Anterior" class="featured-slider-prev"></a>
			<a href=# title"Pr&oacute;ximo" class="featured-slider-next"></a>
			<div class="featured-slider">
				<?php dynamic_sidebar( 'home-featured' ); ?>
			</div>
		</div>
		<div class="home-courses">
			<div class="home-courses-container clearfix">
				<div class="title-center title-center-courses">
					<h4>Calend&aacute;rio de cursos</h4>
				</div>
				<div class="home-courses-featured">
					<h5 class="home-courses-subtitle">Curso em destaque</h5>
					<div class="home-courses-featured-container clearfix">
						<div class="home-courses-featured-image">
							<img src="<?php echo get_bloginfo('template_url') ?>/images/placeholder-course-image.png" alt="Curso" />
						</div>
						<div class="home-courses-featured-content">
							<h2 class="home-courses-featured-title">
								Lideran&ccedil;a e coes&atilde;o no grupo de futebol
							</h2>
							<ul class="home-courses-featured-infos">
								<li class="home-courses-featured-infos-type"><strong>Formato:</strong> online com dois encontros presenciais.</li>
								<li class="home-courses-featured-infos-start"><strong>In&iacute;cio:</strong> 12/08/2013, em Salvador (BA)</li>
								<li class="home-courses-featured-infos-hourload"><strong>Carga hor&aacute;ria:</strong> 80h</li>
							</ul>
						</div>
						<div class="home-courses-featured-testimonial">
							<span class="home-courses-featured-testimonial-text">
								O curso est&aacute; muito bem elaborado, com v&iacute;deos, figuras, situa&ccedil;&otilde;es reais de jogo, textos simples para boa interpreta&ccedil;&atilde;o.
							</span>
							<span class="home-courses-featured-testimonial-author">
								Diego dos Santos Florio (Joinville, SC)
							</span>
						</div>
						<a class="button-link" href=# title="Fazer matr&iacute;cula agora">Fazer matr&iacute;cula agora</a>
					</div>
				</div>
				<div class="home-courses-next">
					<h5 class="home-courses-subtitle">Pr&oacute;ximos cursos</h5>
					<ul class="home-courses-next-list">
						<li>
							<span class="home-courses-next-date">
								20/05/2014
							</span>
							<a class="home-courses-next-title" href="#">
								Curso Educar pelo Futebol: Turma de Maio
							</a>
							<div class="home-courses-next-divider"></div>
						</li>
						<li>
							<span class="home-courses-next-date">
								20/05/2014
							</span>
							<a class="home-courses-next-title" href="#">
								Curso Educar pelo Futebol: Turma de Maio
							</a>
							<div class="home-courses-next-divider"></div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--<div class="home-content">
			<div class="home-content-container">
				<?php get_search_form(); ?>
			</div>
		</div>-->
		<div class="home-partners">
			<div class="home-partners-container">
				<div class="title-center">
					<h4>Parceiros</h4>
				</div>
				<ul class="home-partners-list clearfix">
					<li><img src="<?php echo get_bloginfo('template_url') ?>/images/logo-parceiro-unicef.png" /></li>
					<li><img src="<?php echo get_bloginfo('template_url') ?>/images/logo-parceiro-barcelona.png" /></li>
					<li><img src="<?php echo get_bloginfo('template_url') ?>/images/logo-parceiro-cbf.png" /></li>
					<li><img src="<?php echo get_bloginfo('template_url') ?>/images/logo-parceiro-spfc.png" /></li>
					<li><img src="<?php echo get_bloginfo('template_url') ?>/images/logo-parceiro-abex.png" /></li>
				</ul>
			</div>
		</div>
		<div class="home-relationship">
			<div class="home-relationship-container clearfix">
				<div class="title-center title-center-relationship">
					<h4>Canais de relacionamento</h4>
				</div>
				<div class="home-relationship-gheorge">
					<h5 class="home-relationship-subtitle">
						Fale com o Gheorge
					</h5>
					<div class="home-relationship-gheorge-image"></div>
					<div class="home-relationship-gheorge-text">
						<span class="home-relationship-gheorge-text-lead">
							D&uacute;vidas? Sugest&otilde;es? Cr&iacute;ticas? Escreva-nos!
						</span>
						<a class="home-relationship-gheorge-button" href="/relacionamento" title="Oi, Gheorge!">
							Oi, Gheorge!
						</a>
					</div>
				</div>				
				<div class="home-relationship-social-network">
					<h5 class="home-relationship-subtitle">
						Siga-nos nas Redes Sociais
					</h5>
					<ul class="home-relationship-social-network-list">
						<li>
							<a href="http://facebook.com/universidadedofutebol" title="Facebook">
								<img src="<?php echo get_bloginfo('template_url') ?>/images/icon-contact-facebook.png" alt="Facebook" />
							</a>
						</li>
						<li>
							<a href="http://twitter.com/UdoFutebol" title="Twitter">
								<img src="<?php echo get_bloginfo('template_url') ?>/images/icon-contact-twitter.png" alt="Twitter" />
							</a>
						</li>
						<li>
							<a href="http://www.youtube.com/user/UnivDoFutebol" title="YouTube">
								<img src="<?php echo get_bloginfo('template_url') ?>/images/icon-contact-youtube.png" alt="YouTube" />
							</a>
						</li>
						<li>
							<a href="#" title="LinkedIn">
								<img src="<?php echo get_bloginfo('template_url') ?>/images/icon-contact-linkedin.png" alt="LinkedIn" />
							</a>
						</li>
					</ul>					
				</div>
			</div>
		</div>
<?php get_footer(); ?>