<?php
	get_header();
?>

	<section>
		<h1><a href="<?php echo esc_url(home_url('/posts')); ?>">Posts</a></h1>
		<?php
			$category = single_cat_title('', FALSE);
			$keyword = get_search_query();
			$tag = single_tag_title('', FALSE);
			if ($keyword) {
				echo '<p class="search-query">You searched for “' . $keyword . '”</p>';
			} else if ($category) {
				echo '<p class="search-query">“' . $category . '”</p>';
			} else if ($tag) {
				echo '<p class="search-query">“' . $tag . '”</p>';
			} else if (is_day()) {
				echo '<p class="search-query">“' . get_the_date() . '”</p>';
			} else if (is_month()) {
				echo '<p class="search-query">“' . get_the_date('F Y') . '”</p>';
			} else if (is_year()) {
				echo '<p class="search-query">“' . get_the_date('Y') . '”</p>';
			}
		?>
		<div class="row">
			<div class="col-md-8">
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<article>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
					</article>
				<?php endwhile; else: ?>
					<p>No results found.</p>
				<?php endif; ?>
				<p class="pagination"><?php echo paginate_links(); ?></p>
			</div>
			<div class="col-md-4">
				
				<?php get_search_form(); ?>
				
				<h5>Archives</h5>
				<ul><?php wp_get_archives(array(
					'show_post_count' => TRUE,
					'type' => 'yearly'
				)); ?></ul>
				
				<h5>Categories</h5>
				<ul><?php echo wp_list_categories(array(
					'show_count' => TRUE,
					'title_li' => FALSE
				)); ?></ul>
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>