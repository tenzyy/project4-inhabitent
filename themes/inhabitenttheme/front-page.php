<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<section class="fp-journal">
		<h1>Inhabitent Journal</h1>
		<!-- loop with get posts -->

</section>

		<?php
	 		$args = array(
				'post_type' => 'post',
				 'numberposts' => 3 );
			
				 
				 $journal_posts = get_posts( $args);
		?>
			<div class ="journal-entry">
			<?php
			foreach ($journal_posts as $post): setup_postdata($post); ?>
			
					<?php the_post_thumbnail(large); ?> 
				<div class= "fp-post-meta">
					<?php echo get_the_date(); ?>
					<?php echo get_comments_number(); ?> Comments
			 </div>
			
					<a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
					<a class ="read-more-btn" href ="<?php echo get_the_permalink(); ?>">Read Entry</a>
		
			 </div>
		
		
			<?php endforeach; wp_reset_postdata(); ?>
			

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
