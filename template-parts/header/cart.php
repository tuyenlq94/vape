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
		<ul>
			<li><a href="#">Đăng nhập</a></li>
			<li><a href="#">Đăng ký</a></li>
		</ul>
	</div>
	<button class="btn-cart">
		<?php Vape_Icons::render('cart');?>
	</button>
</div>