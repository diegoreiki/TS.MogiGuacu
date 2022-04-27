<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<?php if ( is_front_page() || is_page('tribologia-e-engenharia-de-superficie') || is_page('modelos-de-negocios') ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<div class="my-slider">
			<span>
			<?php 
			_e("[:pb]SAIBA MAIS SOBRE AS<br/>SOLUÇÕES DE REVESTIMENTOS<br/>CERTESS&trade;[:]
			[:en]LEARN MORE ABOUT THE<br/>COATING SOLUTIONS<br/>CERTESS&trade;[:]"); 
			?>
			</span>
			<ul>
				<?php $child_pages = new WP_Query( array(
				    'post_type'      => 'page', // set the post type to page
				    'posts_per_page' => -1, // number of posts (pages) to show
				    'post_parent'    => 31, // enter the post ID of the parent page
				    'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
				    'orderby' 		 => 'menu_order', // the standard of the order
				    'order'      	 => 'ASC', // the order of the pages
				) );
				if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post();
					echo "<li>";
					$image_sidebar = get_field('sidebar_imagem');
				   	 			   	 	if($image_sidebar) :
							echo '<img src="';
							echo $image_sidebar['url'];
							echo '" width="296" class="attachment-post-thumbnail wp-post-image">';
						endif;
					echo "<strong>";
					the_title();
					echo"</strong>";
					  echo "<p>".get_field("sidebar_descricao")."..</p>";
					echo "<a href='";
					the_permalink();
					echo "'>";
					_e("[:pb]Saiba mais[:][:en]Learn more[:]");
					echo "</a>";
					echo "</li>";
					endwhile; endif;  
					wp_reset_postdata();
				?>
			</ul>
	</div>
</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
<?php if (is_page('empresa')) : ?>
	<aside id="secondary" class="sidebar widget-area empresa-sidebar" role="complementary">
		<img src="<?php echo get_template_directory_uri(); ?>/images/mapa-empresa.jpg" />
		<?php 
		_e("[:pb]
		<a href='/empresa/presenca-global/'>PRESENÇA GLOBAL</a>
		<p>65 unidades de negócios distribuídas em 21 países. <a href='/presenca-global/'>Veja...</a></p>
		<a href='/empresa/tribologia-e-engenharia-de-superficie/'>TRIBOLOGIA E ENGENHARIA DE SUPERFÍCIE</a>
		<a href='/empresa/modelos-de-negocios/'>MODELOS DE NEGÓCIOS</a>
		[:]
		[:en]
		<a href='/en/company/global-presence/'>GLOBAL PRESENCE</a>
		<p>65 business units widespread in 21 countries. <a href='/presenca-global/'>See...</a></p>
		<a href='/en/company/tribology-and-surface-engineering/'>TRIBOLOGY AND SURFACE ENGINEERING</a>
		<a href='/en/company/business-models/'>BUSINESS MODELS</a>
		[:]");
		?>
	</aside>	
<?php endif; ?>
<?php if ( (is_home() || is_archive() || is_single() || is_search() ) && is_active_sidebar( 'sidebar-1' ) ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside>
<?php endif; ?>
<?php if (!is_search() and ($post->post_parent == '27' || $post->post_parent == '29' || $post->post_parent == '31' || $post->post_parent == '33')) : ?>
	<?php if(get_field('veja_mais')) : ?>
		<aside id="secondary" class="sidebar widget-area produtos" role="complementary">
			<h2>
				<?php 
					_e("[:pb]VEJA TAMBÉM[:][:en]SEE ALSO[:]");
				?>
			</h2>
			<?php
				$image = get_field('veja_mais_imagem');
				if($image) :
					echo '<img src="';
					echo $image['url'];
					echo '" width="297" height="146" />';
				endif;
				foreach (get_field('veja_mais') as $value) {
					$title_single = get_page_by_title($value);
						if($title_single != ""){
							echo "<a href='". esc_url(get_permalink( get_page_by_title( $value ))) ."'>> ";
						}
						else {
							$value_multi = explode(" - ",$value);
							echo "<a href='". esc_url(get_permalink( get_page_by_title( "[:pb]".$value_multi[0]."[:en]".$value_multi[1]."[:]" ))) ."'>> ";
						}
						if (qtrans_getLanguage() == 'en') {
							if($title_single != "") 
								echo $value;
							else
			    				echo $value_multi[1];
			    		} 
			    		else 
			    		{
			    			if($title_single != "") 
								echo $value;
							else
			    				echo $value_multi[0];
			    		}
			    	echo "</a>";
				} 
			?> 
		</aside>
		<style>
			aside.sidebar-contact-form{
				margin-top: 25px;
				margin-bottom: 25px;
				padding: 30px 30px 0 30px!important;
				border-bottom: 3px solid #097bab;
			}
			aside.sidebar-contact-form div.wpcf7{
				width: 100%;
			}
			aside.sidebar-contact-form form input,
			aside.sidebar-contact-form form textarea{
				width: 100%;
				margin-bottom: 20px;
				padding: 15px;
				font-size: 12px;
			}
			aside.sidebar-contact-form form p{
				margin-bottom: 0;
			}
			aside.sidebar-contact-form form input[type="submit"]{
				margin-bottom: 0;
				display: block;
				width: 80%;
				margin: auto;
				color: #fff;
			    background-color: #5cb85c;
			    border-color: #4cae4c;
			    font-size: 14px;
			    margin-top: 10px;
			    margin-bottom: 30px;
			}
			aside.sidebar-contact-form form input[type="submit"]:hover{
			    color: #fff;
			    background-color: #449d44;
			    border-color: #398439;
			}
			aside.sidebar-contact-form form input,
			aside.sidebar-contact-form form textarea{
				border: none;
			}
			::-webkit-input-placeholder { /* Chrome/Opera/Safari */
				color: #AAA	}
			::-moz-placeholder { /* Firefox 19+ */
				color: #AAA;
			}
			:-ms-input-placeholder { /* IE 10+ */
				color: #AAA;
			}
			:-moz-placeholder { /* Firefox 18- */
				color: #AAA;
			}
	                .content-area {
                                min-height: 280px;
                        }
	                div.wpcf7-mail-sent-ok {
                                border: 2px solid #46b8da;
                                background: #46b8da;
                                border-radius: 7px;
                                text-align: center;
                                color: #FFFFFF;
                                line-height: 129%;
                                padding: 10px;
                        }
	                div.wpcf7-response-output {
                                margin: 0em 0.5em 1em;
                                padding: 0.2em 1em;
	                }
		</style>
		<aside id="secondary" class="sidebar widget-area produtos sidebar-contact-form" role="complementary">
			<?php /* check if qtranslate function exists */ ?>
			<?php if(function_exists('qtrans_getLanguage')) :
				if (qtrans_getLanguage()=="en"): 
					echo do_shortcode( '[contact-form-7 id="630" title="Contact Us Sidebar"]'); 
				else :
					echo do_shortcode( '[contact-form-7 id="627" title="Fale Conosco Sidebar"]' );
				endif;
			endif; ?>
		</aside>
	<?php endif; ?>
<?php endif; ?>
