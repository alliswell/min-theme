<?php get_header(); ?>
	<div id="content">
		<div id="main-content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<span class="date">by <?php the_author(); ?> on <?php the_time(__('m/j/Y','min')) ?></span>
				<div class="entry">
					<?php the_content(__('Read the rest of this post','min').' &raquo;'); ?>
					<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages','min').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
			</div>
		<?php comments_template(); ?>
		<?php endwhile; else: ?>
			<p class="string"><?php _e('Sorry, there are no posts about that.','min'); ?></p>
	<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>