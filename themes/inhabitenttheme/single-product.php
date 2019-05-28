<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
<hr>
     <?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="image-wrap">
		<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'large'); ?>
</div>
	<div class="single-product-meta">
		<?php endif; ?>
		<?php the_title('<h1 class="single-product-title">', '</h1>'); ?>
		<p class ="single-price">
		<?php echo CFS()->get( 'product_price' ); ?></p>

	<div class="entry-content">
		<?php the_content(); ?> 
		<div class ="media-share-btn">
		<button class="facebook"><i class="fab fa-facebook-f"></i> Like</button>
		<button class="twitter"><i class="fab fa-twitter"></i> Tweet</button>
		<button class="pinterest"><i class="fab fa-pinterest"></i> Pin</button>
				
	</div><!-- .entry-meta -->
	<?php endwhile; // End of the loop. ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	</article><!-- #post-## -->

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
