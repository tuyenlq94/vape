<?php // @codingStandardsIgnoreLine
/**
	Template Name: Home
 */
get_header();
?>
<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();
		get_template_part('template-parts/home/banner');
		get_template_part('template-parts/home/transportation');
		get_template_part('template-parts/home/best-selling');
		get_template_part('template-parts/home/product-portfolio');
		get_template_part('template-parts/home/featured-products');
		get_template_part('template-parts/home/all-products');
		get_template_part('template-parts/home/uu-dai');
		get_template_part('template-parts/home/news');
		get_template_part('template-parts/home/gioi_thieu');
	endwhile;
	?>

</main>
<?php

get_footer();
