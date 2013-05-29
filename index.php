<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="col col-2-3">
<?php if ( have_posts() ): ?>

<?php while ( have_posts() ) : the_post(); ?>

		<div class="module">
			<h2 class="posttitle"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<h5>Published <?php the_time('F j, Y'); ?> by <?php echo get_the_author() ; ?></h5>
			<hr></hr>
			<?php the_content(); ?>
			<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?> <?php edit_post_link('edit', '(', ')'); ?>
		</div>

<?php endwhile; ?>

<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>
</div>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>