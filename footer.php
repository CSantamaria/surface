<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Surface
 */

?>

	</div><!-- #content -->

 <script type="text/javascript">

        jQuery(window).load(function() {
        
      // MASSONRY Without jquery
    var container = document.querySelector('#masonry-loop');
    var masonry = new Masonry(container, {
    itemSelector:'.masonry-entry',
  });        
      });  

        </script>


        <footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'surface' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'surface' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'surface' ), 'surface', '<a href="http://csantamariav.com" rel="designer">Clara Santamaria</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
  
</body>
</html>
