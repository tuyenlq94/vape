jQuery( function ( $ ) {

	var clickEvent = 'ontouchstart' in window ? 'touchstart' : 'click';

	function toggleMenu() {
		const nav = document.querySelector( '#site-navigation' );
		if ( !nav ) {
			return;
		}
		const $menu = $( '#site-navigation' );
		const menu = nav.querySelector( 'ul' ),
			button = document.querySelector( '.menu-toggle' );
		button.addEventListener( 'click', () => {
			nav.classList.toggle( 'is-open' );
		} );


	}
	function toggleSearch() {
		$( '.search-open' ).click( function () {
			$( '.header-search' ).toggle( 'open-search' );
		} );
		$( '.btn-user' ).click( function () {
			$( '.account__wrapper' ).toggle( 'open-search' );
		} );
	}


	function slickSlide() {
		$( '.banner' ).slick( {
			slidesToShow: 1,
			dots: true,
			arrows: false,
			autoplay: false,
			rows: 0,
			autoplaySpeed: 5000,
			responsive: [
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
					}
				},
			]
		} );
		$( '.best-selling__wrap,.featured__wrap' ).slick( {
			slidesToShow: 4,
			slidesToScroll: 4,
			dots: false,
			arrows: true,
			autoplay: false,
			rows: 0,
			autoplaySpeed: 5000,
			responsive: [
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
					}
				},
			]
		} );
		$( '.product-portfolio__inner' ).slick( {
			rows: 2,
			dots: true,
			arrows: false,
			infinite: true,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 4,
			responsive: [
				{
					breakpoint: 600,
					autoplay: true,
					autoplaySpeed: 5000,
					settings: {
						slidesToShow: 1,
					}
				},
			]
		} );
		$( '.thuong-hieu__wrap, .thuong-hieu__inner' ).slick( {
			rows: 2,
			dots: true,
			arrows: false,
			infinite: true,
			speed: 300,
			slidesToShow: 5,
			slidesToScroll: 5,
			responsive: [
				{
					breakpoint: 600,
					autoplay: true,
					autoplaySpeed: 5000,
					settings: {
						slidesToShow: 1,
					}
				},
			]
		} );

	};
	function tab() {
		$( 'ul.tabs li' ).click( function () {
			var tab_id = $( this ).attr( 'data-tab' );

			$( 'ul.tabs li' ).removeClass( 'current' );
			$( '.tab-content' ).removeClass( 'current' );

			$( this ).addClass( 'current' );
			$( "#" + tab_id ).addClass( 'current' );
		} );
	}
	jQuery( window ).scroll( function () {
		if ( $( this ).scrollTop() > 50 ) {
			jQuery( '#masthead' ).addClass( 'mnfixed' );

		} else {
			jQuery( '#masthead' ).removeClass( 'mnfixed' );
		}
	} );
	toggleMenu();
	slickSlide();
	toggleSearch();
	tab();
} );
