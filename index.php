

<?php get_header(); ?>

	<div class="content">
		<div class="primary">
		
			<?php while( have_posts() ) : the_post(); ?>
			
				<?php get_template_part('content'); ?>
			
			<?php endwhile; ?>
			
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
		
		</div>
	</div>


<?php get_footer(); ?>