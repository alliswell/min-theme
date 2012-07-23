<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die (__('Please do not load this page directly. Thanks!','min'));
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>
			<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','min'); ?></p>
			<?php
			return;
		}
	}
	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>
<!-- You can start editing here. -->
<?php if ($comments) : ?>
	<div id="comments">
		<h3><?php comments_number(__('No comments yet.','min'), __('There is 1 comment in this article:','min'), __('There are % comments in this article:','min') );?></h3>
		<ol>
		<?php foreach ($comments as $comment) : ?>
			<li id="comment-<?php comment_ID() ?>"  class="comment <?php if (get_comment_author_email() == get_the_author_meta('user_email')) { echo ('highlighted'); }?>">
				<?php if ($comment->comment_approved == '0') : ?>
				<p class="moderation"><?php _e('Your comment will be published when it is approved.','min'); ?></p>
				<?php endif; ?>
				<cite><span class="date"><?php comment_date(__('m/j/Y','min')) ?></span><?php comment_author_link() ?> says:</cite>
				<blockquote>
					<?php comment_text(); ?>
				</blockquote>
			</li>
		<?php endforeach; /* end for each comment */ ?>
		</ol>
	</div><!-- close:comments -->
 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
	<div id="comments">
		<h3><?php _e('No comments yet.','min'); ?></h3>
	</div><!-- close:comments -->
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
	<div id="comments">
		<h3><?php _e('Comments are closed.','min'); ?></h3>
	</div><!-- close:comments -->
	<?php endif; ?>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
	<div id="commentform">
		<h3><?php _e('Write a comment','min'); ?>:</h3>
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p><?php _e('You have to','min'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>"><?php _e('log in','min'); ?></a> <?php _e('to write a comment.','min'); ?></p>
	<?php else : ?>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" name="comment-form">
		<?php if ( $user_ID ) : ?>
			<p><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> | <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account','min') ?>"><?php _e('Logout','min') ?> &raquo;</a></p>
		<?php else : ?>
			<p>
				<input type="text" name="author" id="author" class="input-text" value="<?php echo $comment_author; ?>" size="22" />
				<label for="author"><?php _e('Name','min'); ?> <?php if ($req) _e('(needed)','min'); ?></label>
			</p>
			<p>
				<input type="text" name="email" id="email" class="input-text" value="<?php echo $comment_author_email; ?>" size="22" />
				<label for="email"><?php _e('Email','min'); ?> <?php if ($req) _e('(needed but it will not be published)','min'); ?></label>
			</p>
			<p>
				<input type="text" name="url" id="url" class="input-text" value="<?php echo $comment_author_url; ?>" size="22" />
				<label for="url"><?php _e('Website (if you have one)','min'); ?></label>
			</p>
		<?php endif; ?>
			<p>
				<textarea name="comment" id="comment" cols="100%" rows="10"></textarea>
			</p>
			<p class="input-submit">
				<input name="submit-comment" type="submit" id="submit-comment" value="<?php _e('comment','min'); ?>" />
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</p>
		<?php do_action('comment_form', $post->ID); ?>
		</form>
	</div><!-- close:commentform -->
	<?php endif; // If registration required and not logged in ?>
	<?php endif; // if you delete this the sky will fall on your head ?>