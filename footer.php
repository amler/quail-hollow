
	</div>
	
	<hr />
	
	<footer>
		<div class="container">
			<ul class="list-inline">
				<?php wp_nav_menu(array(
					'container'			=> FALSE,
					'depth'				=> 1,
					'fallback_cb'		=> '',
					'items_wrap'		=> '%3$s',
					'menu'				=> 'footer',
					'theme_location'	=> 'footer'
				)); ?>
			</ul>
			<p>Copyright &copy; <?php echo date('Y'); ?>, <?php bloginfo('name'); ?>. All rights reserved.</p>
		</div>
	</footer>

	<?php wp_footer(); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>window.jQuery||document.write('<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"><\/script>');</script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

</body>
</html>
