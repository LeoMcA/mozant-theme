<?php
// Do not delete these lines
	if (!empty($_SERVER["SCRIPT_FILENAME"]) && "comments.php" == basename($_SERVER["SCRIPT_FILENAME"]))
		die ("Please do not load this page directly. Thanks!");

	if (post_password_required()) { ?>
		<p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments."); ?></p>
	<?php
		return;
	}
?>
						<div id="comments">
							<h1>Comments</h1>
<?php if (have_comments()) : ?>
<?php while (have_comments()) : the_comment(); ?>
							<article id="<?php comment_ID(); ?>">
		                        <header>
		                            <?php echo get_avatar( $comment, "72", "" ); ?>
		                            <a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a> on <a href="#<?php comment_ID(); ?>"><time><?php comment_date(); ?> at <?php comment_time(); ?></time></a> said:
		                            <?php edit_comment_link("Edit", "", ""); ?>
		                        </header>

		                        <?php comment_text(); ?>

		                    </article>
<?php endwhile; ?>
<?php else : ?>
<?php if (comments_open()) : ?>
							<h2><?php _e("No comments yet!"); ?></h2>
<?php else : // comments are closed ?>
							<h2><?php _e("Comments are closed"); ?></h2>
<?php endif; ?>
<?php endif; ?>
<?php if (comments_open()) : ?>
<div id="respond">

<h2><?php comment_form_title( __('Leave a Reply'), __('Leave a Reply to %s' ) ); ?></h2>

<div id="cancel-comment-reply">
	<small><?php cancel_comment_reply_link() ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url( get_permalink() )); ?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p><?php printf(__('Logged in as <a href="%1$s">%2$s</a>.'), get_option('siteurl') . '/wp-admin/profile.php', $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account'); ?>"><?php _e('Log out &raquo;'); ?></a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author"><small><?php _e('Name'); ?> <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email"><small><?php _e('Mail (will not be published)'); ?> <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo  esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
<label for="url"><small><?php _e('Website'); ?></small></label></p>

<?php endif; ?>

<!--<p><small><?php printf(__('<strong>XHTML:</strong> You can use these tags: <code>%s</code>'), allowed_tags()); ?></small></p>-->

<p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment'); ?>" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>