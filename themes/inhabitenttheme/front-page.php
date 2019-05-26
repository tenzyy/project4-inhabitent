<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <!--  your banner html -->
    <div class= "home-banner">
    <img class="hero-logo" src="<?php echo get_template_directory_uri() . 
                                        '/assets/images/logos/inhabitent-logo-full.svg' ?>" />   
                                        </div>                               
	<section>
	<h2>Shop Stuff</h2>
   
		<!-- product terms and icons -->
            <?php 
                $terms = get_terms( 
                    array( 
                        'taxonomy' => 'product-type', 
                        'hide_empty' => 0
                    )
                 );
                 ?>
                <div class="product-terms">
                    <?php
                    foreach( $terms as $term ):
                    ?>
                        <div class="product-term">
                            <img src="<?php echo get_template_directory_uri() . 
                                        '/assets/images/product-type-icons/' .
                                         $term->slug . '.svg'
                                        ?>" />    
                            <p><?php echo $term->description; ?></p>
                            <p>
                                <a href="<?php echo get_term_link( $term ); ?>">
                                    <?php echo $term->name; ?> Stuff
                                </a>
                            </p>
                        </div>
                    <?php    
                    endforeach;
                    ?>
                </div><!-- .product-terms -->
        </section>


			<section class="fp-journal">
                <h1>Inhabitent Journal</h1>
                <?php
                $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
                $journal_posts = get_posts( $args ); // returns an array of posts
                ?>
                <div class="fp-journal-entries"><!-- add a div to style journal entries e.g. with flexbox -->
                    <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>    
                        <div class="journal-entry">

                            <!-- Post thumbnail -->
                            <?php if ( has_post_thumbnail() ) { ?>
                                <div class="thumbnail-wrapper">
                                    <?php the_post_thumbnail( 'large' ); ?>
                                </div>
                            <?php } ?>

                            <div class="fp-post-meta">
                                <?php echo get_the_date(); ?> /
                                <?php echo get_comments_number(); ?> Comments
                            </div>

                            <!-- Post title -->
                            <a href="<?php  echo get_the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                            <a class="read-more-btn" href="<?php echo get_the_permalink(); ?>">Read Entry</a>
                        
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div><!-- .fp-journal-entries -->
            </section>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
