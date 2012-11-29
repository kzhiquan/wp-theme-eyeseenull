<?php
/*
 * comments for single.php eyeseenull theme
 */
?>

	<div class="comments">
		<div class="comment-title">
			<span>评论</span>
		</div>
		<ol class="commentlist">
			<?php
				wp_list_comments( array( 'callback' => 'eyeseenull_comment' ) );
			?>
		</ol>
		
		<?php comment_form(); ?>
		
		
		
	</div>
