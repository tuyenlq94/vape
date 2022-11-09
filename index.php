<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vape
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="archive-post">
			<div class="container">
				<div class="thuong-hieu__breadcrumb">
					<?php
					echo do_shortcode( '[rank_math_breadcrumb]' );
					?>
				</div>
				<div class="archive-post__wrap">
					<div class="archive-post__sidebar">
						<?php dynamic_sidebar( 'sidebar-news' ) ?>
					</div>
					<div class="archive-post__show">
						<h1 class="title">Tin tức vape</h1>
						<p class="description">Blog cập nhất những tin tức mới nhất về vape và chia sẻ những kiến thức cơ bản đến nâng cao về vape giúp bạn có những trải nghiệm vaping tốt nhất</p>
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', get_post_type() );
						endwhile;
						the_posts_pagination( [
							'mid_size'  => 1,
							'prev_text' => __( '←', 'vape' ),
							'next_text' => __( '→', 'vape' ),
						] );
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
					</div>
				</div>
			</div>
		</div>

		<?php
		get_template_part( 'template-parts/home/uu-dai' );
		get_template_part( 'template-parts/home/gioi_thieu' );
		?>
	</main><!-- #main -->

<?php
get_footer();
