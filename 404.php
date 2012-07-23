<?php get_header(); ?>
	<div id="content">
		<div id="main-content">
			<p class="string"><?php _e('The page you are looking for doesn\'t exist. Sorry.','min'); ?></p>
			<a href="<?php echo get_option('home'); ?>/" class="back"><?php _e('Back home','min'); ?></a>
			<h2 class="error"><?php _e('Try a different search or look in the categories below.','min'); ?></h2>
		</div><!-- close:main-content -->
		<?php get_sidebar(); ?>
	</div><!-- close:content -->
<?php get_footer(); ?>