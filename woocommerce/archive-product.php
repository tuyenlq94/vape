<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
global $post, $product;
?>
<div class="products-woo">
	<div class="container">
		<div class="thuong-hieu__breadcrumb">
			<?= do_shortcode( '[wpseo_breadcrumb]' ); ?>
		</div>
		<div class="products-woo__wrap">
			<div class="products-woo__sidebar"></div>
			<div class="products-woo__lists">
				<div class="products-woo__title">
					<h1 class="title"><?= $product->get_categories();?></h1>
				</div>
				<div class="products-woo__shows">
					<?php
					if ( wc_get_loop_prop( 'total' ) ) {
						while ( have_posts() ) {
							the_post();
							do_action( 'woocommerce_shop_loop' );
				
							wc_get_template_part( 'content', 'product' );
						}
					}
					?>
				</div>
				<div class="products-woo__pagination">
					<?php
					the_posts_pagination( [
						'mid_size'  => 1,
						'prev_text' => __( '←', 'vape' ),
						'next_text' => __( '→', 'vape' ),
					] );
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_template_part('template-parts/home/uu-dai');
get_template_part('template-parts/home/gioi_thieu');
get_footer( 'shop' );
