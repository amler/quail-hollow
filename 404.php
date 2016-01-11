<?php get_header(); ?>

	<section>
		<h1 class="entry-title"><?php _e('Not Found', 'quailhollow'); ?></h1>
		<div class="entry-content">
			<p><?php _e('Apologies, but the page you requested could not be found. Perhaps searching will help.', 'quailhollow'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</section>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>
