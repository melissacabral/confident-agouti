<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); //required hook. without this, plugins won't work ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
	<div class="site">
		<header class="header">
			<div class="header-bar">
				<h1 class="site-title"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
				<h2><?php bloginfo('description'); ?></h2>
				<?php 
					//TODO: replace this with the fancy drag & drop menu
					wp_page_menu( array(
						'container' => 'nav',
						'menu_class' => '',
						'show_home' => 1,
						'before' => '<ul class="menu">',
					) ); ?>
				

				<?php get_search_form(); //require searchform.php or do the default form ?>

			</div>
		</header>