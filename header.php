<?php
/**
 * The header for the theme
 */

?>
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
	<div class=site-title><?php echo get_bloginfo('name'); ?></div>

	<nav class="main-navigation">
		<?php wp_nav_menu( array('theme_location' => 'menu-1') ); ?>
	</nav>

	<a id="hamburger" 
			href="javascript:thpmobile();"><span class="dashicons dashicons-menu-alt3"></span>&nbsp;</a>
</header>
		<div id='thp-search' style='text-align:center;display:none;'>
			<?php get_search_form();?>
		</div>
