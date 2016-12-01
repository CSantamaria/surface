<?php
/**
 * Template Name: Landing Page Template
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
<!-- <?php /** wp_nav_menu( array( 'theme_location' => 'landing_page', 'container_class' => 'landingpage_class' ) ); */ ?> -->


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			       $logo = get_field('logo');

			       if( !empty($logo) ): ?>

						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />

					<?php endif;

			        

					$landing_image = get_field('main_landing_image');

					if( !empty($landing_image) ): ?>

						<img src="<?php echo $landing_image['url']; ?>" alt="<?php echo $landing_image['alt']; ?>" />

					<?php endif;

			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();