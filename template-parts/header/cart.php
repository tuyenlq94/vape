<div class="header-cart">
	<button class="search-open header-icon" aria-expanded="false">
		<?php Vape_Icons::render( 'search' ); ?>
	</button>
	<div class="header-search">
		<?php get_search_form(); ?>
	</div>
	<button class="btn-user" aria-expanded="false">
		<?php Vape_Icons::render('user');?>
	</button>
	<div class="account__wrapper">
		<?php if ( ! is_user_logged_in() ) : ?>
		<ul>
			<li><a href="<?= esc_url( home_url() );?>/dang-nhap">Đăng nhập</a></li>
			<li><a href="<?= esc_url( home_url() );?>/dang-ky">Đăng ký</a></li>
		</ul>
		<?php
			else :
				$user_current = wp_get_current_user();
				?>
				<span>Chào bạn, <?php echo esc_html( $user_current->display_name ); ?></span><br>
				<a class="popup-modal" href="#popup-logout">Đăng xuất</a>
		<?php endif ?>
		<div id="popup-logout" class="popup-logout mfp-hide white-popup-block">
			<h3>Xin xác nhận</h3>
			<p>Bạn có muốn chắc đăng xuất.</p>
			<a class="btn-secondary wp-block-button__link popup-modal-dismiss">Không</a>
			<a class="btn-primary wp-block-button__link" href="<?= esc_url( wp_logout_url( '/' ) ); ?>">Có</a>
		</div>
	</div>
	<div class="header-cart">
		<button class="btn-cart">
			<?php Vape_Icons::render('cart');?>
		</button>
		<?php 
		global $woocommerce;
		$count = 0;
		$items = $woocommerce->cart->get_cart();
		foreach($items as $item) {
			$count += $item['quantity'];
		}
		//$count = count($items);
		?>
		<div class="count-cart"><?= $count;?></div>
	</div>
	<div class="gio_hang"><?php dynamic_sidebar( 'products_cart' )?></div>
</div>