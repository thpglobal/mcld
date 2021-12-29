<?php
/**
 * The template for displaying all pages
 *
 */

get_header();
?>

<main id="main" class="site-main" role="main">

<?php	while ( have_posts() ) : the_post(); ?>
	
<article id="post-<?php the_ID(); ?>" class="entry">
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) { 
			$thpurl=get_the_post_thumbnail_url(); ?>
			<div class="wp-block-cover has-custom-content is-position-bottom-left">
				<img loading="lazy" class="wp-block-cover__image-background" alt src="<?php echo $thpurl?>" data-object-fit="cover">
				<div class="wp-block-cover__inner-container">
					<p class="has-text-align-center has-white-color has-text-color has-background has-large-font-size">
						<?php the_title();?>
					</p> 
				</div>
			</div>
		<?php }else{
			echo("<h1>"); the_title(); echo("</h1>\n");
		} 
		?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>

<?php	endwhile; ?>

</main>

<?php
get_footer();
