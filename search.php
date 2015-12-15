<?php
/**
 * The main template file and posts page
 *
 * @package Inti
 * @subpackage Templates
 * @since 1.0.0
 */

$default_layout = get_inti_option('page_layout', 'inti_customizer_options', '2c-l');
$layout = $default_layout;

get_header(); ?>


	<div id="primary" class="site-content">
	
		<?php inti_hook_content_before(); ?>
	
		<div id="content" role="main" class="<?php apply_filters('inti_filter_content_classes', ''); ?>">
			<div class="row">
				<?php switch ( $layout ) { 

					case '1c': ?>

				<div class="small-12 medium-12 large-12 columns">
				


				<?php break;
					case '2c-l': ?>

				<div class="small-12 medium-7 large-8 columns">
				


				<?php break;
					case '2c-r': ?>

				<div class="small-12 medium-7 medium-push-5 large-8 large-push-4 columns">
				

				<?php } //end switch ?>
				
				
				<?php inti_hook_inner_content_before(); ?>

					<?php if ( have_posts() ) : ?>
					
						<header class="archive-header">
							<h1 class="archive-title">
								<?php printf( __('Search Results for: %s', 'inti'), '<span>' . get_search_query() . '</span>'); ?>
							</h1>
						</header> 

						<?php // start the loop
						while ( have_posts() ) : the_post(); ?>
						
							<?php 
							if ( $post->post_type == 'page' ) : 

								get_template_part('post-formats/format', 'page'); 

							else :

								// get post format and display template for that format
								if ( !get_post_format() ) : get_template_part('post-formats/format', 'standard');
								else : get_template_part('post-formats/format', get_post_format()); endif;

							endif; ?>
							
						<?php endwhile; ?>
						
						
						<?php // if no posts are found
						else : ?>
						
					<?php endif; // end have_posts() check ?> 
				
				<?php inti_hook_inner_content_after(); ?>
				
				</div><!-- .columns -->
				
				<?php get_sidebar(); ?>
				
			</div><!-- .row -->
		</div><!-- #content -->
		
		<?php inti_hook_content_after(); ?>
		
	</div><!-- #primary -->


<?php get_footer(); ?>