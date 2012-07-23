<div id="sidebar" class="clearfix">
	<div id="sb-1">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("bucket left") ) : ?>
		<?php endif; ?>
	</div><!-- close:sb-1 -->
	<div id="sb-2">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("bucket right") ) : ?>
		<?php endif; ?>
		<ul id="rss">
			<li><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Subscribe RSS Feed','min'); ?></a></li>
			<li><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Subscribe RSS comments','min'); ?></a></li>
		</ul>
	</div>
</div>