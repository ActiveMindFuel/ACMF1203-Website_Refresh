
			<footer class="footer quote" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div id="contact"></div>
				<h1><?php bloginfo( 'name' ); ?></h1>
				<?php get_sidebar( 'address' ); ?>
				<img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/svg/AMF@-icon-black.svg" alt="Active Mind Fuel Logo">
				<p class="source-org copyright">&copy; Copyright <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> 2016.</p>
			</footer>
			
		</div>
		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
	</body>
</html> <!-- end of site. what a ride! -->
