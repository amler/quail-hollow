<?php
	get_header();
	if (have_posts()): while (have_posts()): the_post();
?>

	<section>
		<div class="jumbotron">
			<h1><?php bloginfo('name'); ?></h1>
			<?php the_content(); ?>
		</div>
	</section>

<?php
	endwhile; endif;
	get_footer();
?>