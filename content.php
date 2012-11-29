<?php 
/* post for eyeseenull blog */
?>

	<article id="post-<?php the_ID() ?>" <?php post_class() ?> >
		<header class="entry-header">
			<a href="<?php the_permalink(); ?>"> <?php the_title();?> </a>

		</header>
		<div class="entry-meta">
			<span> <?php  echo get_the_date() ?> 发表 </span>
			<span> <?php comments_popup_link('0 评论','1 评论', '% 评论') ?> </span>
			<span> <?php if(function_exists('the_views')) {the_views();} ?>  </span>
		</div>

		
		<div class="entry-content">
			<?php the_content('阅文 ...'); ?>
			<!--<?php the_excerpt() ?> -->
		</div>
	</article>