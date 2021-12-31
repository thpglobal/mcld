<?php 
// The template for displaying posts und a particular category 
get_header();
?>

<main id="main" class="site-main" role="main">

	<?php 
	if ( have_posts() ) : ?>

		<header class="page-header">
			<h1>Posts in category: <?php single_cat_title(); ?></h1>
		</header>

		<?php
		while ( have_posts() ) : the_post();
			echo "<p><a href=";
			the_permalink();
			echo "><b>";
			the_title();
			echo "</b></a> ";
			the_date();
			echo "</p>\n";
		endwhile;
	
	else: ?>

		<p>Sorry, but nothing matched your search terms.</p>
	
	<?php
	endif;
	?>

</main>

<?php
get_footer();