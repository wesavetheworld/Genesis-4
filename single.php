<?php
/**
 * The Template for displaying all single posts
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

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="module">
		<h2 class="posttitle"><?php the_title(); ?></h2>
		<h5>Published <?php the_time('F j, Y'); ?> by <?php echo get_the_author() ; ?></h5>
		<hr></hr>
		<?php edit_post_link('edit', '(', ')'); ?>
		<?php the_content(); ?>
		<?php comments_template( '', true ); ?>
	</div>

<?php endwhile; ?>

</div>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>