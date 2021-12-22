<?php
/**
 * The template for displaying the footer
 * Now that blocks can go into widgets, no reason to have multiple footer areas
 */
?>

<footer>
	<?php dynamic_sidebar( 'footer_area' ); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
