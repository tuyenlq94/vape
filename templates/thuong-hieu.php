<?php // @codingStandardsIgnoreLine
/**
	Template Name: Thương hiệu
 */
get_header();
?>
<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/thuong-hieu/main' );
		get_template_part( 'template-parts/thuong-hieu/tinh-dau' );
		get_template_part( 'template-parts/home/uu-dai' );
		get_template_part( 'template-parts/thuong-hieu/about' );
		get_template_part( 'template-parts/home/gioi_thieu' );
	endwhile;
	?>

</main>
<?php
get_footer();
