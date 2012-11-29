

<?php get_header(); ?>
	<div class="content">
		<div class="primary">
			<?php while( have_posts() ) : the_post(); ?>
				<?php get_template_part('content', 'single'); ?>
				<?php comments_template() ?>
			<?php endwhile; ?>
		</div>
	</div>


<?php get_footer(); ?>