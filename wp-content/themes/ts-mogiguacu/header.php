<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/resize.js'></script>
<?php if (is_front_page() || is_page('tribologia-e-engenharia-de-superficie') || is_page('modelos-de-negocios') ) : ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/unslider-min.js"></script> 
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/unslider.css">
	<script>
		jQuery(document).ready(function($) {
			$('.my-slider').unslider({
				autoplay: true,
				delay: 5000
			});
		});
	</script>
<?php endif; ?>
	<?php 
		if ( $post->post_parent == '27' || $post->post_parent == '29' || $post->post_parent == '31' || $post->post_parent == '33'  ) {
			echo "<style>.post-page{pointer-events: none;}</style>";
		}
	?>

	<!--[if IE]> 

	<style>

		#banner-internal img
		{
			left:-45%!important;
			top:0!important;
		}

	</style>

	 <![endif]-->
	 <!-- Global site tag (gtag.js) - Google Ads: 791265211 --> 
	 <script async src="https://www.googletagmanager.com/gtag/js?id=AW-791265211"></script> 
	 <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-791265211'); </script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				<div class="site-branding">
					<?php twentysixteen_the_custom_logo(); ?>

					<?php if (is_front_page()) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<?php if ( has_nav_menu( 'primary' ) ) : ?>

					<div id="site-header-menu">
						<div id="flags">
							<a href="/en/"><img src="<?php echo get_template_directory_uri(); ?>/images/usa.png" /></a>
							<a href="/pb/<?php get_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/brazil.png" /></a>

						</div>
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						

					</div><!-- .site-header-menu -->
				<?php endif; ?>

				<?php if ( has_nav_menu( 'secondary-menu' ) ) : ?>

					<div id="site-secondary-menu">
						<?php if ( has_nav_menu( 'secondary-menu' ) ) : ?>
							<nav id="site-navigation" class="main-navigation">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'secondary-menu',
										'menu_class'     => 'secondary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

					</div><!-- .site-header-menu -->
				<?php endif; ?>



			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<?php 
			if (is_front_page()) :
				
			    echo do_shortcode("[metaslider id=131 percentwidth=100]"); 
			    
			endif;
		?>


		<?php 
		if(!is_front_page()) :

			if(is_home() || is_single() || is_archive() || is_search()) :

				// Post thumbnail.
				echo "<div id='banner-internal'>";
				echo "<img src='".get_template_directory_uri()."/images/noticias.jpg' />";
				echo "</div>";
				echo "<div id='title-banner'><span>";
				if(is_home()) echo "<h1>";
				_e("[:pb]NOTÍCIAS[:][:en]NEWS[:]");
				if(is_home()) echo "</h1>";
				echo "</span></div>";

			elseif(is_404()):

				// Post thumbnail.
				echo "<div id='banner-internal'>";
				echo "<img src='".get_template_directory_uri()."/images/404.jpg' />";
				echo "</div>";
				echo "<div id='title-banner'><span></span></div>";

			else:

				// Post thumbnail.

				echo "<div id='banner-internal'>";
				 the_post_thumbnail('banner-internal');
				echo "</div>";
				echo "<div id='title-banner'><span>";
				echo get_field('titulo_banner');
				echo "</span></div>"; 

			endif;
		
		endif;



		?>




	<div class="site-inner">

	
		    <?php if(function_exists('bcn_display') && !is_front_page())
		    {
		    	
		    	echo '<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">';
		        bcn_display();
		        echo '</div>';

		    }

		    ?>
	


	<?php 
			if (is_front_page()) :
				
				echo "<div id='screen'></div>";
				echo "<div class='aba-bullet'></div>";
			    
			endif;
	?>
		

		<div id="content" class="site-content">



