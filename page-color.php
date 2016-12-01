<?php
/**
 * Template Name: Color Page Template
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Surface
 */

get_header(); ?>
	
<div id="masonry-loop" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php

			$colors_args = array(
			'category_name' => 'color',
			'posts_per_page' => -1,
			);

			$colors = new WP_Query($colors_args); ?>



         
			<?php while($colors->have_posts()) : $colors->the_post(); ?>
			<div class="masonry-entry">

			<?php get_template_part( 'template-parts/content', 'page'); 
			the_field('description'); 
			the_field('new');?>
			</div> 


			<?php endwhile; // End of the loop.
			?>
				</div><!--/#masonry-loop-->

		<div class="clearfix"></div>

<?php
get_footer();