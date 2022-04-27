<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		
	</div><!-- .site-inner -->

	<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="container-footer">
				<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
					<nav class="main-navigation" id="site-navigation">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'menu_class'     => 'footer-menu',
							 ) );
						?>
					</nav><!-- .main-navigation -->
				<?php endif; ?>

				<div class="site-info">
				<?php
				_e("
				  [:pb]Uma empresa[:]
				  [:en]A company[:]
				  ");
				 ?>&nbsp;&nbsp;&nbsp;<a href="http://www.hef.fr/" target="_blank" rel="home">hef group</a>

				</div><!-- .site-info -->

				<div class="copyright">
				<p>
					<?php 
					_e("
						[:pb]&copy; Copyright 2017 :: TS Mogi Guaçu Serviços LTDA. - Todos os direitos reservados.[:]
						[:en]&copy; Copyright 2017 :: TS Mogi Guaçu Serviços LTDA. - All rights reserved.[:]
					   ");
					?>	
				</p>	
				<a href="http://www.ra3n.com.br" title="RA3N Propaganda e Marketing" target="_blank">RA3N Propaganda</a>

				</div><!-- .copyright -->

			</div><!-- .container-footer -->
		</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
