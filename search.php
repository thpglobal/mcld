<?php 
// The template for displaying search results pages 
get_header();
?>

<main id="main" class="entry" role="main">

	<?php 
	if ( have_posts() ) : ?>

		<header class="page-header">
			<h1>Search Results: <?php echo get_search_query(); ?></h1>
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