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
    <img class="hero-logo" alt="forest-hero" src="<?php echo get_template_directory_uri() . 
                                        '/assets/images/logos/inhabitent-logo-full.svg' ?>" />   
                                        </div>                               
	<section class ="products">
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
                </div>
               
        </section>
 <!-- end of product-terms -->

			<section class="fp-journal">
                <h1>Inhabitent Journal</h1>
                
            <div class="fp-journal-entries"><!-- add a div to style journal entries e.g. with flexbox -->
                <?php
                $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
                $journal_posts = get_posts( $args ); // returns an array of posts
                ?>
                <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>    
                
                <div class="journal-entry">   
                         <!-- Post thumbnail -->
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="thumbnail-wrapper">
                                    <?php the_post_thumbnail( 'large' ); ?>
                                </div>

                            <?php endif; ?>
                                <!-- comments and dates -->
                            <div class="fp-post-meta">
                                <?php echo get_the_date(); ?> /
                                <?php echo get_comments_number(); ?> Comments
                            </div>

                            <!-- Post title -->
                            <div class="post-title">
                        
                            <a href="<?php  echo get_the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                </div>
                <div class ="button">
                            <a class="read-more-btn" href="<?php echo get_the_permalink(); ?>">Read Entry</a>
                </div>
                        </div>
                        <?php endforeach; wp_reset_postdata(); ?>
                    </div>
                    
                </div>
            </section>
<!--  end fp-journal-entries -->
            <section class="latest-adventure">
                <h1>Latest Adventures</h1>
                <div class="adventure-box">
                <h2>Getting back to nature in a canoe</h2>
                <h2>A night with friends at the beach</h2>
                <h2>Taking the view at big mountain</h2>
                <h2>Star- gazing at the night sky</h2>
                </div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
