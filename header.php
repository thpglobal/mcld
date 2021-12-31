<?php // The header for the MCLD theme ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Movement for Community-led Development">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<script>
		function thpmobile() {
			document.getElementById('menu-primary').style.display='block';
		}
		function thpsearch() {
			document.getElementById('thp-search').style.display='block';			
		}
	</script>
	
<a class="screen-reader-text" href="#content">Skip to content</a>

<header class="site-header">
	<div class=site-logo><?php the_custom_logo();?></div>
	<div class=site-title><a href="/"><?php bloginfo('name'); ?></a></div>

	<nav class="main-navigation">
		<?php wp_nav_menu( array('theme_location' => 'menu-1') ); ?>
	</nav>

	<a id="hamburger" 
			href="javascript:thpmobile();"><span title=Menu><h1>&#9776;</h1></span></a>
</header>
