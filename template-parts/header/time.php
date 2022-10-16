<?php
$phone = get_theme_mod('vape_custom_phone');
$time = get_theme_mod('vape_custom_time');
?>
<div class="header-phone">
	<p>Liên hệ mua hàng</p>
	<p class="phone"><?php Vape_Icons::render('phone');?> <?= esc_html($phone);?></p>
</div>
<div class="header-time">
	<p>Cửa hàng mở</p>
	<p class="time"><?php Vape_Icons::render('time');?> <?= esc_html($time);?></p>
</div>