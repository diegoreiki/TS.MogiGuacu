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

<?php 
$isQualidade = "tex";
if(is_page("politica-da-qualidade-da-empresa")){
	$isQualidade = "pqe";
} ?>

<div id="primary" class="content-area <?php echo $isQualidade;  ?> <?php if(is_page("presenca-global") || is_page("material-tecnico") || is_page(22)){ echo " content-full"; } ?>">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();


			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// End of the loop.
		endwhile;
		?>

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

<?php get_footer(); ?>
