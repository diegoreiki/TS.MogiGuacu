<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( !is_front_page() ) : ?>
		<header class="entry-header">
		
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<?php //twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>



		<?php 

		if(is_page("material-tecnico")){

		$args = array( 'post_type' => 'materiais_tecnicos', 'orderby' => 'title', 'order' => 'ASC' );
		$the_query = new WP_Query( $args ); 

			if ( $the_query->have_posts() ){ 

				echo '<ul class="container-material">';
			
				while ( $the_query->have_posts() ) { 

					$the_query->the_post(); 

					echo '<li>';

					echo '<img src="';
					$image = get_field('img_material');
					echo $image['url'];
					echo '" width="295" height="221" />';

					echo '<div>';
					echo '<h2>';
						the_title(); 
					echo '</h2>';
					
						the_content();
					echo '</div>';

					echo '<div>';

					echo '<a href="';
					 if (qtrans_getLanguage() == 'pb' or get_field('pdf_material_english') == "") {
				          $pdf = get_field('pdf_material');
				     } else if(qtrans_getLanguage() == 'en' and get_field('pdf_material_english') != "") {
				     	  $pdf = get_field('pdf_material_english');
				     }
					
					echo $pdf['url'].'" target="_blank">';

					_e('<span></span><br />[:pb]Download do material t??cnico[:][:en]Download the brochure[:]');

					echo '</a>';

					echo '</div>';

					echo '</li>';

				}

				echo '</ul>';

			} else echo "<p>No brochures available.</p>";

		}

		?>

		<?php 
		if ( $post->post_parent == '27' || $post->post_parent == '29' || $post->post_parent == '31' || $post->post_parent == '33' ) :

			$exibir_materiais = get_field('exibir_materiais');

			if($exibir_materiais){

				$args_m = array( 'post_type' => 'materiais_tecnicos', 'orderby' => 'title', 'order' => 'ASC' );
				$the_query_m = new WP_Query( $args_m ); 

				$image_per = get_field('img_per_material');

				echo "<div id='material-page'>";
				
				if($image_per) echo "<img src='".$image_per['url']."' width='267' height='187' />";
				
				if(!$image_per) echo "<img src='".get_template_directory_uri()."/images/pdf.jpg' width='267' height='187' />"; 

				echo "<p><img src='".get_template_directory_uri()."/images/download2.jpg' /><br/>";

				_e("[:pb]MATERIAIS T??CNICOS[:][:en]BROCHURES[:]<br/>[:pb]Fa??a o download:[:][:en]Download the brochure:[:]");

				echo "<br/>";

				while ( $the_query_m->have_posts() ){

					$the_query_m->the_post();	
					
					if(in_array(the_title('','',false), $exibir_materiais))
					{
						$pdf = get_field('pdf_material');
						echo "<a href='".$pdf['url']."' target='_blank'>";
						the_title();
						echo "</a>";
					}
					           	
				}

				echo "</p>";

				echo "</div>";

				wp_reset_query();

			}

		endif; 
		?>
		
		

	</div><!-- .entry-content -->

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
	?>

</article><!-- #post-## -->
