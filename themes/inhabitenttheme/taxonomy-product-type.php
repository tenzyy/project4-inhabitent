<?php
/**
 * Template Name: Taxonomy product page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="taxonomy-header">
		<header class="taxonomy-page">
	
	<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
		<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
		<?php if ( have_posts() ) : ?>

				
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="product-type">
			
			<?php while ( have_posts() ) : the_post();  ?>
            
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
		
				</header><!-- .entry-header -->
				<div class="product-meta"
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				<div class="dots"></div>
				<?php echo CFS()->get( 'product_price' ); ?>
				</div>
			<!-- .entry-content -->
			</article><!-- #post-## -->	
			

			<?php endwhile; ?>
		</div><!-- shop area -->
			
		<?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>  
    
		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
