<?php // @codingStandardsIgnoreLine
/**
	Template Name: Contact page
 */
get_header();
?>
<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();
		
		get_template_part('template-parts/contact/banner');
		get_template_part('template-parts/home/uu-dai');
		get_template_part('template-parts/home/gioi_thieu');
	endwhile;
	?>

</main>
<?php
get_footer();