<?php
/**
 * The default page template
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
					<h1 class="has-text-align-center has-white-color has-shadow">
						<?php the_title();?>
		</h1> 
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
