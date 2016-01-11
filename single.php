<?php
	get_header();
	if (have_posts()): while (have_posts()): the_post();
?>

	<section>
		<h1><a href="<?php echo esc_url(home_url('/posts')); ?>">Posts</a></h1>
		<div class="row">
			<div class="col-md-8">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
			<div class="col-md-4">
				<?php
					
					// Categories
					$terms = wp_get_post_terms(get_the_ID(), 'category');
					if ($terms) {
						echo (count($terms) == 1) ? '<h5>Category</h5>' : '<h5>Categories</h5>';
						echo '<ul>';
						foreach ($terms as $term) {
							echo '<li><a href="' . esc_url(get_term_link($term)) . '">' . $term->name . '</a></li>';
						}
						echo '</ul>';
					}
					
					// Tags
					$terms = wp_get_post_terms(get_the_ID(), 'post_tag');
					if ($terms) {
						echo (count($terms) == 1) ? '<h5>Tag</h5>' : '<h5>Tags</h5>';
						echo '<ul>';
						foreach ($terms as $term) {
							echo '<li><a href="' . esc_url(get_term_link($term)) . '">' . $term->name . '</a></li>';
						}
						echo '</ul>';
					}
					
				?>
			</div>
		</div>
	</section>

<?php
	endwhile; endif;
	get_footer();
?>