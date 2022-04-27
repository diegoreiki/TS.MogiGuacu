<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>
<div id="primary" class="content-area<?php if(is_page("presenca-global") || is_page("material-tecnico") || is_page(22)){ echo " content-full"; } ?>">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );
			// End of the loop.
		endwhile;
		?>
		<br>
		<form> 
			<input type="button" value="Voltar" onClick="history.go(-1)"> 
		</form>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_sidebar(); ?>
	<?php if ( is_front_page() ) : ?>
		<div class="presenca">
		<?php 
			_e("[:pb]
			<h2>PRESENÇA GLOBAL</h2>
			<p>Mais de 65 unidades de negócios distribuídas em 21 países..</p>
			<a href='/empresa/presenca-global/'>Veja mais</a>
			[:]
			[:en]
			<h2>GLOBAL PRESENCE</h2>
			<p>65 business units widespread in 21 countries..</p>
			<a href='/en/company/global-presence/'>See..</a>
			[:]");	
		?>
		</div>
	<?php endif; ?>

	<!-- GOOGLE CODE FOR TAG CONVERSION PAGE -->
	<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 819765719;
		var google_conversion_label = "U1UPCNjBnIEBENfD8oYD";
		var google_remarketing_only = false;
		/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
		<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/819765719/?label=U1UPCNjBnIEBENfD8oYD&amp;guid=ON&amp;script=0"/>
		</div>
	</noscript>
	<script type="text/javascript">
		$(document).ready(function(){
			setTimeout(function() {
				history.back();
			}, 8000);
		}); 		
	</script> 



<?php get_footer(); ?>
