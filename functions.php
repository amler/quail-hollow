<?php

	//////////////////////////////////////////////////
	// MENUS & POST TYPES
	//////////////////////////////////////////////////

		// Register Menus
			function theme_setup() {
				register_nav_menu('footer', 'Footer Menu');
				register_nav_menu('header-left', 'Left Header Menu');
				register_nav_menu('header-right', 'Right Header Menu');
			}
			add_action('after_setup_theme', 'theme_setup');


	//////////////////////////////////////////////////
	// ONLY SEARCH FOR POSTS
	//////////////////////////////////////////////////

		function theme_search_filter($query) {
			if ($query->is_search) {
				$query->set('post_type', 'post');
			}
			return $query;
		}
		add_filter('pre_get_posts', 'theme_search_filter');


	//////////////////////////////////////////////////
	// WORDPRESS ADMIN
	//////////////////////////////////////////////////
	
		// Remove Menu Page
			function theme_remove_menu_page() {
				//remove_menu_page('edit.php'); // Posts
				//remove_menu_page('upload.php'); // Media
				//remove_menu_page('link-manager.php'); // Links
				remove_menu_page('edit-comments.php'); // Comments
				//remove_menu_page('edit.php?post_type=page'); // Pages
				//remove_menu_page('plugins.php'); // Plugins
				//remove_menu_page('themes.php'); // Appearance
				//remove_menu_page('users.php'); // Users
				//remove_menu_page('tools.php'); // Tools
				//remove_menu_page('options-general.php'); // Settings
				//remove_menu_page('edit.php?post_type=acf'); // Custom Fields
				//remove_menu_page('edit.php?post_type=acf-field-group'); // Custom Fields Pro
			}
			add_action('admin_menu', 'theme_remove_menu_page', 999);

		// Remove Post Type Support
			function theme_remove_post_type_support() {
				remove_post_type_support('page', 'comments');
				remove_post_type_support('post', 'comments');
			}
			add_action('init', 'theme_remove_post_type_support', 999);

		// Remove Menu
			function theme_remove_menu() {
				global $wp_admin_bar;
				$wp_admin_bar->remove_menu('comments');
				//$wp_admin_bar->remove_menu('new-post');
				//$wp_admin_bar->remove_menu('new-posts');
				//$wp_admin_bar->remove_menu('new-page');
				//$wp_admin_bar->remove_menu('new-media');
				//$wp_admin_bar->remove_menu('new-user');
			}
			add_action('wp_before_admin_bar_render', 'theme_remove_menu');
