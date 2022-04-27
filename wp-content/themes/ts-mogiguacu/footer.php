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
				  [:pb][:]
				  [:en][:]
				  ");
				 ?>&nbsp;&nbsp;&nbsp;<a href="http://www.hef.fr/" target="_blank" rel="home">hef group</a>

				</div><!-- .site-info -->

				<div class="copyright">
					<p class="box-address">
						TS Mogi Guaçu Ltda. <br>
						Av Iracy Berezosky Cayres, 290 - Mogi Guaçu - SP <br>
						CEP 13849-104 <br>
						<span>
						<i>Telefone:</i> <a href="tel:+55193818478">(19 3818-478)</a>
						</span>
					</p>
					<p class="box-copyright">
						<?php 
						_e("
							[:pb]&copy; Copyright 2017 :: TS Mogi Guaçu Serviços LTDA. - Todos os direitos reservados.[:]
							[:en]&copy; Copyright 2017 :: TS Mogi Guaçu Serviços LTDA. - All rights reserved.[:]
						");
						?>
					</p>	
				</p>	
				<a href="http://www.ra3n.com.br" title="RA3N Propaganda e Marketing" target="_blank" style="margin: 0 auto 20px">RA3N Propaganda</a>

				</div><!-- .copyright -->

			</div><!-- .container-footer -->
		</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

<style>
.site-footer{
	height: auto !important;
}
.site-footer .copyright .box-address i{
	font-style: normal;
}
.site-footer .copyright .box-address a {
		text-decoration: none !important;
		color: #1ea5e7 !important;
		display: inline-block !important;
		background: none !important;
		text-indent: 0 !important;
		float: inherit !important;
		width: inherit !important;
		height: inherit !important;
}
.site-footer .copyright .box-address a:hover{
	text-decoration: underline !important;
}
</style>

</body>
</html>
