<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vape
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<div class="thuong-hieu__breadcrumb">
				<?= do_shortcode( '[rank_math_breadcrumb]' ); ?>
			</div>
			<div class="single-content">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/single/content', get_post_type() );

					// // If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// comments_template();
					// endif;

				endwhile; // End of the loop.
				?>
			</div>
			<?php vape_recent_posts(); ?>
		</div>

	</main><!-- #main -->

<?php
get_footer();
