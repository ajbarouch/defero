<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('social-widgets') ) : ?>
<?php endif;?>
<footer class="footer-container">
	<div class="footer-grid">
		<a class="footer-button">Get the inside scoop</a>
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
		<div class="social-icons">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('topbar-social-widgets') ) : ?>
<?php endif;?>
			</div>
</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
