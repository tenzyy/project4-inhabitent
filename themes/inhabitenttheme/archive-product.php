<?php
/**
 * Template Name: Archieve product page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<hr>
		<div class="product-header">
		<header class="page-header"><h1><b>Shop Stuff</b></h1>
	
		<?php 
                $terms = get_terms( 
                    array( 
                        'taxonomy' => 'product-type', 
                        'hide_empty' => 0
                    )
                 );
                 ?>
		
		<?php
                    foreach( $terms as $term ):
                    ?>
                        <div class="product-term">
                            <p>
                                <a href="<?php echo get_term_link( $term ); ?>">
                                    <?php echo $term->name; ?>
                                </a>
                            </p>
                        </div>
                    <?php    
                    endforeach;
                    ?></div>

		<?php if ( have_posts() ) : ?>

				
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="shop-area">
			
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
				<?php echo CFS()->get( 'product_price' ); ?></p>
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
