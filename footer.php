<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SoSimple
 */
?>

</div><!-- #content -->
	<!-- Some more link css -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		  &copy; <?php echo date("Y"); ?> &mdash; <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>.  
		  <span class="sep"> | </span>
		  <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Licence' ) ) ); ?>">Tout le contenu est sous licence Creative Commons BY-NC-SA</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
