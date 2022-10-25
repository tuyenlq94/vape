<?php // @codingStandardsIgnoreLine
/**
 * Template Name: Đăng nhập
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
					<a href="<?= esc_url(home_url())?>/dang-ky">Đăng ký tài khoản</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
