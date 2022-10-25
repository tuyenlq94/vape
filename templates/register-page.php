<?php // @codingStandardsIgnoreLine
/**
 * Template Name: Đăng ký
 */
?>
<?php get_header(); ?>

<main id="primary" class="site-main ">
	<section class="register-page">
		<div class="container">
			<div class="register-page__wrap">
				<div class="register-page__form">
					<img src="<?= get_template_directory_uri();?>/images/logo.png" alt="">
					<h1><?php the_title()?></h1>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
