<?php
$wp_customize->add_section( 'vape_header', [
	'title' => __( 'Header', 'vape' ),
] );

$wp_customize->add_setting( 'vape_custom_email' );
$wp_customize->add_control(
	'vape_custom_email',
	[
		'label'    => __( 'Email', 'vape' ),
		'section'  => 'vape_header',
		'settings' => 'vape_custom_email',
	]
);

$wp_customize->add_setting( 'vape_custom_phone' );
$wp_customize->add_control(
	'vape_custom_phone',
	[
		'label'    => __( 'Phone', 'vape' ),
		'section'  => 'vape_header',
		'settings' => 'vape_custom_phone',
	]
);

$wp_customize->add_setting( 'vape_custom_time' );
$wp_customize->add_control(
	'vape_custom_time',
	[
		'label'    => __( 'Giờ mở cửa', 'vape' ),
		'section'  => 'vape_header',
		'settings' => 'vape_custom_time',
	]
);