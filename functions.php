
<?php 



 /*wp_nav_menu() fallback wp_page_menu, 
  we register an callback to give
 the $arguments, show a home link */
function eyeseenull_page_menu_args( $args ){
	$args['show_home'] = true;
	return $args;
}

add_filter('wp_page_menu_args', 'eyeseenull_page_menu_args');



/* callback for wp_list_comments */
function eyeseenull_comment($comment, $args, $depth){
	$GLOBALS['comment'] = $comment;
	
?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php echo get_avatar( $comment, 18 ); ?>
					<span><?php echo get_comment_author_link(); ?> </span>
					<span><?php echo get_comment_date(); ?> </span>
					<span><?php echo get_comment_time(); ?> </span>
					<?php edit_comment_link(); ?>
					<span class="comment-item-num"> #<?php comment_ID() ?> </span>
				</div><!-- .comment-author .vcard -->
			</footer>
			<div class="comment-content"><?php comment_text(); ?></div>
		</article>

<?php
}
?>




