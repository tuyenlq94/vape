<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package vape
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function vape_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'vape_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function vape_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'vape_pingback_header');

add_filter('woocommerce_sale_flash', 'my_custom_sale_flash', 10, 3);
function my_custom_sale_flash($text, $post, $_product)
{
	$from = $_product->regular_price;
	$to = $_product->price;
	if ($from == $to || !$to) return '';
	$percent = round(($from - $to) / $from * 100);
	$text = $from > $to ? 'Giảm' : 'Tăng';
	return '<span class="thumb-discount-label">' . $text . ' ' . $percent . ' %</span>';
}

if( ! function_exists( 'the_paginate' ) ) :
	function the_paginate($args = null) {
		$defaults = array(
			'title'     => 'Pages',
			'query'     => null
		);
		$args = wp_parse_args($args, $defaults);
		extract($args, EXTR_SKIP);
		if(is_404()) {
			return;
		}
		$currentPage = null;
		$totalPage = null;
		if(empty($query)) {
			global $wp_query;
			$query = $wp_query;
		}
		$currentPage = stheme_get_paged();
		$title .= ':';
		$ppp = intval($query->query['posts_per_page']);
		if($ppp < 1) {
			return;
		}
		$totalPage = intval(ceil($query->found_posts / $ppp));
		if($totalPage <= 1) {
			return;
		}
		$paginateResult = '<div id="sPaginate" class="spaginate paginate"><div class="spaginate-inner paginate-inner"><span class="spaginate-title paginate-title">'.$title.'</span>';
		if ($currentPage > 1) {
			$paginateResult .= '<a class="spaginate-prev prev page-item" href="'.get_pagenum_link($currentPage - 1).'">&laquo;</a>';
		}
		$paginateResult .= the_paginate_list(1, $totalPage, $currentPage);
		if ($currentPage < $totalPage) {
			$paginateResult .= "<a href='" . get_pagenum_link($currentPage + 1) . "' class='spaginate-next next page-item'>&raquo;</a>";
		}
		$paginateResult .= "</div></div>"; 
		echo $paginateResult;
	}
endif;

if( ! function_exists( 'stheme_paginate' ) ) :
	function stheme_paginate($args = null) {
		the_paginate($args);
	}
endif;

if( ! function_exists( 'the_paginate_list' ) ) :
	function the_paginate_list($intStart, $totalPage, $currentPage) {
		$pageHidden = '<span class="spaginate-hidden hidden">...</span>';
		$linkResult = "";
		$hiddenBefore = false;
		$hiddenAfter = false;
		for ($i = $intStart; $i <= $totalPage; $i++) {
			if($currentPage === intval($i)) {
				$linkResult .= '<span class="spaginate-current page-item current">'.$i.'</span>';
			} elseif(($i <= 6 && $currentPage < 10) || $i == $totalPage || $i == 1 || $i < 4 || ($i <= 6 && $totalPage <= 6) || ($i > $currentPage && ($i <= ($currentPage + 2))) || ($i < $currentPage && ($i >= ($currentPage - 2))) || ($i >= ($totalPage - 2) && $i < $totalPage)) {
				$linkResult .= '<a class="spaginate-link page-item" href="'.get_pagenum_link($i).'">'.$i.'</a>';
				if($i <= 6 && $currentPage < 10) {
					$hiddenBefore = true;
				}
			} else {
				if(!$hiddenBefore) {
					$linkResult .= $pageHidden;
					$hiddenBefore = true;
				} elseif(!$hiddenAfter && $i > $currentPage) {
					$linkResult .= $pageHidden;
					$hiddenAfter = true;
				}
			}
		}
		return $linkResult;
	}
endif;

function stheme_get_paged() {
	$paged = intval(get_query_var('paged')) ? intval(get_query_var('paged')) : 1;
	return $paged;
}