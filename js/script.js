jQuery( function ( $ ) {

	var clickEvent = 'ontouchstart' in window ? 'touchstart' : 'click';
	let $window = $( window ),
		$body = $( 'body' );

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
		$( '.btn-cart' ).click( function () {
			$( '.gio_hang' ).toggle( 'open-cart' );
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
					breakpoint: 767,
					settings: "unslick"
				}
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
					rows: 0,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
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

		$( '.slider-for' ).slick( {
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.slider-nav'
		} );
		$( '.slider-nav' ).slick( {
			slidesToShow: 4,
			slidesToScroll: 1,
			asNavFor: '.slider-for',
			dots: false,
			arrows: true,
			focusOnSelect: true
		} );

	};
	function popupLogout() {
		$( '.popup-modal' ).magnificPopup( {
			type: 'inline',
			preloader: false,
			modal: true
		} );
		$( document ).on( 'click', '.popup-modal-dismiss', function ( e ) {
			e.preventDefault();
			$.magnificPopup.close();
		} );
	}
	function showBox() {
		if ( $body.hasClass( 'page-template-home-page' ) || $body.hasClass( 'page-template-thuong-hieu' ) || $body.hasClass( 'tax-product_cat' ) ) {

			if ( document.getElementById( 'about-home__content' ).offsetHeight < document.getElementById( 'about-home__content' ).scrollHeight ) {
				document.getElementById( 'showBtn' ).style.display = 'inline';
			}
			$( '#showBtn' ).on( 'click', function () {
				document.getElementById( 'about-home__content' ).style.maxHeight = 'inherit';
				document.getElementById( 'showBtn' ).style.display = 'none';
			} );
		}
	}
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
	function vape_view_switcher() {
		if ( !$( '.vape-view-switcher' ).length ) {
			return;
		}

		$( '.vape-view-switcher div' ).click( function () {
			var view = $( this ).attr( 'id' );
			$( '.vape-view-switcher div' ).removeClass( 'current' );
			$( this ).addClass( 'current' );
			switch_view( view );
		} );
		function switch_view( to ) {
			var from = ( to == 'list' ) ? 'grid' : 'list';
			var $listings = $( '.products-woo__shows' );
			$listings.removeClass( from + '-view' ).addClass( to + '-view' );
		}


	}
	toggleMenu();
	slickSlide();
	toggleSearch();
	tab();
	popupLogout();
	vape_view_switcher();
	showBox();
} );
