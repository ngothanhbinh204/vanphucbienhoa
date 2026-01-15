<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vanphucbienhoa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="chp">
	<?php wp_body_open(); ?>
	<div class="site">
		<header class="header">
			<div class="global_message_bar">
				<div class="nav_container_padding_desktop">
					<div class="global_message_bar_flex">
						<div class="left">
							<ul>
								<li>
									<a href="tel:+442080885858">Call<span class="desktop-label">: +44 (0) 20 8088 5858</span></a>
								</li>
								<li class="">
									<span class="separator">|</span>
								</li>
								<li class="">
									<a href="https://www.coachhousepianos.co.uk/our-services/booking-showroom/">
										<span class="desktop-label">Book an appointment</span>
										<span class="mobile-label">Book</span></a>
								</li>
								<li class="hide-on-desktop">
									<span class="separator">|</span>
								</li>
								<li class="hide-on-desktop">
									<a href="https://www.coachhousepianos.co.uk/our-showrooms/">
										<span class="desktop-label">Visit a showroom</span>
										<span class="mobile-label">Showroom</span></a>
								</li>
								<li class="hide-on-mobile">
									<span class="separator">|</span>
								</li>
								<li class=" hide-on-mobile">
									<a href="/piano-showroom-london/">
										<span class="desktop-label">London Showroom</span>
										<span class="mobile-label">London Showroom</span></a>
								</li>
								<li class="hide-on-mobile">
									<span class="separator">|</span>
								</li>
								<li class=" hide-on-mobile">
									<a href="/piano-showroom-swansea/">
										<span class="desktop-label">Swansea Showroom</span>
										<span class="mobile-label">Swansea Showroom</span></a>
								</li>
							</ul>
							<style>
								@media screen and (max-width: 1079px) {
									.global_message_bar li.hide-on-mobile {
										display: none !important;
									}
								}

								@media screen and (min-width: 1080px) {
									.global_message_bar li.hide-on-desktop {
										display: none !important;
									}
								}
							</style>

						</div>
						<div class="center">
						</div>
						<div class="right d-flex align-items-center">

							<span class="search-bar search-desktop">
								<form class="d-flex align-items-center" role="search" method="get" action="https://www.coachhousepianos.co.uk/" data-hs-cf-bound="true">
									<label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
									<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Enter your search..." name="s" value="">
									<button type="submit" id="searchsubmit" style="border: none; background: none; padding: 0;">
										<img src="https://www.coachhousepianos.co.uk/wp-content/themes/chp/navigation/assets/spyglass-gold.svg" alt="search icon">
									</button>
									<input type="hidden" name="post_type" value="product">
								</form>
							</span>
							<span class="icon icon-search search-button-toggle search-mobile">
								<img src="https://www.coachhousepianos.co.uk/wp-content/themes/chp/navigation/assets/spyglass.svg" alt="search icon">
							</span>
							<a href="https://www.coachhousepianos.co.uk/my-account/" class="is-flex">
								<span class="icon icon-account">
									<img src="https://www.coachhousepianos.co.uk/wp-content/themes/chp/navigation/assets/account.svg" alt="account icon">
								</span>
							</a>
							<a href="https://www.coachhousepianos.co.uk/basket/" class="is-flex">
								<span class="icon icon-basket">
									<img src="https://www.coachhousepianos.co.uk/wp-content/themes/chp/navigation/assets/basket.svg" alt="basket icon">
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="nav-search-bar">
				<div class="nav_container_padding_desktop d-flex">
					<span class="icon icon-search align-items-center">
						<img src="https://www.coachhousepianos.co.uk/wp-content/themes/chp/navigation/assets/spyglass-gold.svg" alt="search icon">
					</span>
					<form role="search" method="get" class="woocommerce-product-search" action="https://www.coachhousepianos.co.uk/" data-hs-cf-bound="true">
						<label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
						<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products…" value="" name="s">
						<button type="submit" value="Search" class="">Search</button>
						<input type="hidden" name="post_type" value="product">
					</form>
				</div>
			</div>
			<nav id="desktop_navigation" aria-label="Desktop Navigation">
				<div class="container-fluid">
					<div class="nav_border_bottom nav_container_padding_desktop">
						<div class="desktop_menu_flex row">
							<ul class="menu-links menu-links-left" data-count-left="3">
								<li><a id="navigation_0" class="tray_link_hover" href="https://www.coachhousepianos.co.uk/category/piano-all/grand-pianos/">Grand Pianos</a></li>
								<li><a id="navigation_1" class="tray_link_hover" href="https://www.coachhousepianos.co.uk/category/piano-all/upright-pianos/">Upright Pianos</a></li>
								<li><a id="navigation_2" class="tray_link_hover" href="https://www.coachhousepianos.co.uk/category/piano-all/digital-pianos/">Digital Pianos</a></li>
							</ul>
							<div class="main_logo">
								<span class="logo"><a href="https://www.coachhousepianos.co.uk" aria-label="Go to Homepage">
										<img src="https://www.coachhousepianos.co.uk/wp-content/themes/chp/navigation/assets/logo40.svg" alt="Coach House Pianos logo">
									</a></span>
								<span class="logo-scrolled">
									<a href="https://www.coachhousepianos.co.uk" aria-label="Go to Homepage">
										<img src="https://www.coachhousepianos.co.uk/wp-content/themes/chp/navigation/assets/logo-ico.svg" alt="Coach House Pianos logo">
									</a></span>
							</div>
							<ul class="menu-links menu-links-right" data-count-right="3">
								<li><a id="navigation_3" class="tray_link_hover" href="https://www.coachhousepianos.co.uk/piano-brands/">Brands</a></li>
								<li><a id="navigation_4" class="tray_link_hover" href="https://www.coachhousepianos.co.uk/category/piano-accessories/">Accessories</a></li>
								<li><a id="navigation_5" class="tray_link_hover" href="https://www.coachhousepianos.co.uk/our-services/">Services</a></li>
								<li><a id="navigation_6" class="tray_link_hover" href="https://www.coachhousepianos.co.uk/about-us/">About</a></li>
							</ul>
						</div>
					</div>
					<!-- ----------------- Mega Menu Trays ----------------- -->
					<div class="mega_menu_tray" id="navigation_0_tray">
						<div class="tray_container">
							<div class="row mega-menu-inner">
								<div class="col-8 nav-columns-wrap">
									<div class="row">
										<div class="col-3 col-links mr-auto">
											<div class="menu-column-label">Shop by type</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/grand-pianos/?filter_condition=new" target="">New</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/grand-pianos/?filter_condition=pre-owned" target="">Second Hand</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/grand-pianos/?filter_hybrid-models=silent" target="">Silent Pianos</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/grand-pianos/?filter_hybrid-models=self-playing" target="">Self Playing</a></li>
													<li class="mega-nav-link column-summary-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/grand-pianos/" target="">Shop All Types</a></li>
												</ul>
											</div>
										</div>
										<div class="col-6 col-links mr-auto">
											<div class="menu-column-label">Shop by brand</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="/category/steinway-grand-pianos/" target="">Steinway &amp; Sons</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/yamaha-pianos/yamaha-grand-pianos/" target="">Yamaha</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/sauter-pianos/sauter-grand-pianos/" target="">Sauter</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/kawai-pianos/kawai-grand-pianos/" target="">Kawai</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/bosendorfer-pianos/bosendorfer-grand-pianos-bosendorfer-pianos/" target="">Bösendorfer</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/welmar-pianos/welmar-grand-pianos/" target="">Welmar</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/schreiner-sohne-pianos/schreiner-sohne-grand-pianos/" target="">Schreiner &amp; Söhne</a></li>
												</ul>
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/steingraeber-sohne-pianos/steingraeber-sohne-grand-pianos/" target="">Steingraeber &amp; Söhne</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/wilh-steinberg-pianos/wilh-steinberg-grand-pianos/" target="">Wilh Steinberg</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/laul-estonia-pianos/laul-estonia-grand-pianos/" target="">Laul Estonia</a></li>
													<li class="mega-nav-link column-summary-link"><a href="https://www.coachhousepianos.co.uk/shop/?product_cat=all-pianos,upright-pianos,grand-pianos,digital-pianos,silent-pianos,transacoustic,self-playing-pianos,new-pianos,second-hand-pianos,piano-for-beginners,warehouse-clearance" target="">Shop All Brands</a></li>
												</ul>
											</div>
										</div>
										<div class="col-3 col-links mr-auto">
											<div class="menu-column-label">Popular Models</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steinway-pianos/steinway-model-s/" target="">Steinway Model S</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steinway-pianos/steinway-model-m/" target="">Steinway Model M</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steinway-pianos/steinway-model-o/" target="">Steinway Model O</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steinway-pianos/steinway-model-a/" target="">Steinway Model A</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steinway-pianos/steinway-model-b/" target="">Steinway Model B</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steinway-pianos/steinway-model-c/" target="">Steinway Model C</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steinway-pianos/steinway-model-d/" target="">Steinway Model D</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 menu-image-link">
									<div class="image-link-wrap"><a class="image_container" href="https://www.coachhousepianos.co.uk/category/piano-all/grand-pianos/" target="">
											<div class="image-16by9 hover_zoom"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/03/grand_piano_nav-1-e1740810906291.webp" srcset="" sizes="(max-width: 100%) 100vw, 100%" alt="">
												<div class="image-link-content">
													<p>All Grand Pianos</p><span>SHOP NOW</span>
												</div>
											</div>
										</a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="mega_menu_tray" id="navigation_1_tray">
						<div class="tray_container">
							<div class="row mega-menu-inner">
								<div class="col-8 nav-columns-wrap">
									<div class="row">
										<div class="col-3 col-links mr-auto">
											<div class="menu-column-label">Shop by type</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/upright-pianos/?filter_condition=new" target="">New</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/upright-pianos/?filter_condition=pre-owned" target="">Second Hand</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/upright-pianos/?filter_hybrid-models=silent" target="">Silent Pianos</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/upright-pianos/?filter_hybrid-models=self-playing" target="">Self Playing</a></li>
													<li class="mega-nav-link column-summary-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/upright-pianos/" target="">Shop All Types</a></li>
												</ul>
											</div>
										</div>
										<div class="col-6 col-links mr-auto">
											<div class="menu-column-label">Shop by brand</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/sauter-pianos/sauter-upright-pianos/" target="">Sauter</a></li>
													<li class="mega-nav-link"><a href="/category/steinway-upright-pianos/" target="">Steinway &amp; Sons</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/kawai-pianos/kawai-upright-pianos/" target="">Kawai</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/bosendorfer-pianos/bosendorfer-upright-pianos/" target="">Bösendorfer</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/welmar-pianos/welmar-upright-pianos/" target="">Welmar</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/yamaha-pianos/yamaha-upright-pianos/" target="">Yamaha</a></li>
												</ul>
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/schreiner-sohne-pianos/schreiner-sohne-upright-pianos/" target="">Schreiner &amp; Söhne</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/steingraeber-sohne-pianos/steingraeber-sohne-upright-pianos/" target="">Steingraeber &amp; Söhne</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/wilh-steinberg-pianos/wilh-steinberg-upright-pianos/" target="">Wilh Steinberg</a></li>
													<li class="mega-nav-link column-summary-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/upright-pianos/" target="">Shop All Brands</a></li>
												</ul>
											</div>
										</div>
										<div class="col-3 col-links mr-auto">
											<div class="menu-column-label">Shop by offer</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="/offers/kawai-500-acoustic-piano-cashback/" target="">Kawai Acoustic Cashback</a></li>
													<li class="mega-nav-link"><a href="/offers/yamaha-more-than-a-gift/" target="">Yamaha b Series Cashback</a></li>
													<li class="mega-nav-link column-summary-link"><a href="https://www.coachhousepianos.co.uk/offers/" target="">Shop All Offers</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 menu-image-link">
									<div class="image-link-wrap"><a class="image_container" href="https://www.coachhousepianos.co.uk/category/piano-all/upright-pianos/" target="">
											<div class="image-16by9 hover_zoom"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/03/upright_piano_nav-e1740810875250.webp" srcset="" sizes="(max-width: 100%) 100vw, 100%" alt="">
												<div class="image-link-content">
													<p>All Upright Pianos</p><span>SHOP NOW</span>
												</div>
											</div>
										</a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="mega_menu_tray" id="navigation_2_tray">
						<div class="tray_container">
							<div class="row mega-menu-inner">
								<div class="col-8 nav-columns-wrap">
									<div class="row">
										<div class="col-3 col-links mr-auto">
											<div class="menu-column-label">Shop by brand</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/yamaha-pianos/yamaha-digital-pianos/" target="">Yamaha</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/kawai-pianos/kawai-digital-pianos/" target="">Kawai</a></li>
													<li class="mega-nav-link"><a href="/piano-brands/alpange/" target="">Alpange</a></li>
													<li class="mega-nav-link column-summary-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/digital-pianos/" target="">Shop All Brands</a></li>
												</ul>
											</div>
										</div>
										<div class="col-9 col-links mr-auto">
											<div class="menu-column-label">Shop by offer</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/offers/yamaha-more-than-a-gift/" target="">Yamaha Digital Cashback</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 menu-image-link">
									<div class="image-link-wrap"><a class="image_container" href="https://www.coachhousepianos.co.uk/category/piano-all/digital-pianos/" target="">
											<div class="image-16by9 hover_zoom"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/03/digital_pianos_nav-e1740810922143.webp" srcset="" sizes="(max-width: 100%) 100vw, 100%" alt="">
												<div class="image-link-content">
													<p>All Digital Pianos</p><span>SHOP NOW</span>
												</div>
											</div>
										</a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="mega_menu_tray" id="navigation_3_tray">
						<div class="tray_container">
							<div class="row mega-menu-inner">
								<div class="col-8 nav-columns-wrap">
									<div class="row">
										<div class="col-3 col-links mr-auto">
											<div class="menu-column-label">Popular Brands</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steinway-pianos" target="">Steinway</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/yamaha-pianos" target="">Yamaha</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/bosendorfer-pianos" target="">Bosendorfer</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/sauter" target="">Sauter</a></li>
												</ul>
											</div>
										</div>
										<div class="col-9 col-links mr-auto">
											<div class="menu-column-label">Shop by brand</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/alpange" target="">Alpange</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/bechstein" target="">Bechstein</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/bentley-pianos" target="">Bentley</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/bluthner-pianos" target="">Bluthner</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/boston-pianos" target="">Boston</a></li>
												</ul>
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/kawai-pianos" target="">Kawai</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/kemble-pianos" target="">Kemble</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/roland-pianos" target="">Roland</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/schreiner-sohne" target="">Schreiner &amp; Söhne</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/schulze-pollmann" target="">Schulze Pollmann</a></li>
												</ul>
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/seiler" target="">Seiler</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steingraeber-sohne" target="">Steingraeber &amp; Söhne</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/welmar-pianos" target="">Welmar</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/wilh-steinberg" target="">Wilh Steinberg</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/laul-estonia-pianos/" target="">Laul Estonia</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 menu-image-link">
									<div class="image-link-wrap"><a class="image_container" href="https://www.coachhousepianos.co.uk/category/piano-accessories/" target="">
											<div class="image-16by9 hover_zoom"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/08/Yamaha-C1-mahogany-9.jpg" srcset="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/08/Yamaha-C1-mahogany-9.jpg 1500w, https://www.coachhousepianos.co.uk/wp-content/uploads/2025/08/Yamaha-C1-mahogany-9-300x240.jpg 300w, https://www.coachhousepianos.co.uk/wp-content/uploads/2025/08/Yamaha-C1-mahogany-9-1024x819.jpg 1024w, https://www.coachhousepianos.co.uk/wp-content/uploads/2025/08/Yamaha-C1-mahogany-9-768x614.jpg 768w, https://www.coachhousepianos.co.uk/wp-content/uploads/2025/08/Yamaha-C1-mahogany-9-1080x864.jpg 1080w, https://www.coachhousepianos.co.uk/wp-content/uploads/2025/08/Yamaha-C1-mahogany-9-600x480.jpg 600w" sizes="(max-width: 100%) 100vw, 100%" alt="">
												<div class="image-link-content">
													<p>All Brands</p><span>SHOP NOW</span>
												</div>
											</div>
										</a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="mega_menu_tray" id="navigation_4_tray">
						<div class="tray_container">
							<div class="row mega-menu-inner">
								<div class="col-8 nav-columns-wrap">
									<div class="row">
										<div class="col-6 col-links mr-auto">
											<div class="menu-column-label">Shop Accessories</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-accessories/piano-stools/" target="">Stools &amp; Benches</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-accessories/piano-headphones/" target="">Headphones</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-accessories/piano-castor-cups/" target="">Castor Cups</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-accessories/piano-hygrometers/" target="">Thermo-Hygrometers</a></li>
												</ul>
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-accessories/piano-underfloor-heating-mats/" target="">Underfloor Heating Mat</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-accessories/piano-covers/" target="">Piano Covers</a></li>
													<li class="mega-nav-link column-summary-link"><a href="https://www.coachhousepianos.co.uk/category/piano-accessories/" target="">Shop All Accessories</a></li>
												</ul>
											</div>
										</div>
										<div class="col-3 col-links mr-auto">
											<div class="menu-column-label">Shop Piano Care</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/product/piano-polish/" target="">Polish</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/product/piano-key-wipes/" target="">Wipes</a></li>
												</ul>
											</div>
										</div>
										<div class="col-3 col-links mr-auto">
											<div class="menu-column-label">Shop Gifts</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/product/gift-vouchers/" target="">Gift Vouchers</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 menu-image-link">
									<div class="image-link-wrap"><a class="image_container" href="https://www.coachhousepianos.co.uk/category/piano-accessories/" target="">
											<div class="image-16by9 hover_zoom"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/03/accessories_nav-e1740810937243.webp" srcset="" sizes="(max-width: 100%) 100vw, 100%" alt="">
												<div class="image-link-content">
													<p>All Accessories</p><span>SHOP NOW</span>
												</div>
											</div>
										</a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="mega_menu_tray" id="navigation_5_tray">
						<div class="tray_container">
							<div class="row mega-menu-inner">
								<div class="col-8 nav-columns-wrap">
									<div class="row">
										<div class="col-4 col-links mr-auto">
											<div class="menu-column-label">Professional Services</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/sell-your-piano/" target="">Sell My Piano</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/piano-tuning/" target="">Piano Tuning</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/piano-restoration/" target="">Restoration</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/piano-valuation/" target="">Valuation</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/piano-transportation/" target="">Transportation</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/education/" target="">Piano Teachers</a></li>
												</ul>
											</div>
										</div>
										<div class="col-4 col-links mr-auto">
											<div class="menu-column-label">Buying Services</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://info.coachhousepianos.co.uk/piano-buyers-guide" target="">Buyers Guides</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-finder/" target="">Piano Finder</a></li>
													<li class="mega-nav-link"><a href="https://app.smartsheet.com/b/form/e0e94edb1e904af4b10ed07e626c5385" target="">Part Exchange</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/delivery/" target="">Delivery Information</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/international-delivery/" target="">International Delivery</a></li>
												</ul>
											</div>
										</div>
										<div class="col-4 col-links mr-auto">
											<div class="menu-column-label">Hire</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/piano-hire/" target="">Piano Hire</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/hiring-bosendorfer-hall/" target="">Bösendorfer Hall</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 menu-image-link">
									<div class="image-link-wrap"><a class="image_container" href="https://www.coachhousepianos.co.uk/our-services/" target="">
											<div class="image-16by9 hover_zoom"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/03/services_nav-e1740810892987.webp" srcset="" sizes="(max-width: 100%) 100vw, 100%" alt="">
												<div class="image-link-content">
													<p>Our Services</p><span>LEARN MORE</span>
												</div>
											</div>
										</a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="mega_menu_tray" id="navigation_6_tray">
						<div class="tray_container">
							<div class="row mega-menu-inner">
								<div class="col-8 nav-columns-wrap">
									<div class="row">
										<div class="col-4 col-links mr-auto">
											<div class="menu-column-label">About us</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/about-us/" target="">Who We Are</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/why-coach-house/" target="">Why Coach House</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/" target="">Piano Brands</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/faqs/" target="">FAQs</a></li>
												</ul>
											</div>
										</div>
										<div class="col-4 col-links mr-auto">
											<div class="menu-column-label">Latest</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/news-events/" target="">News and Events</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/knowledge-hub/" target="">Knowledge Hub</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/testimonials/" target="">Testimonials</a></li>
													<li class="mega-nav-link"><a href="/offers/" target="">Piano Offers</a></li>
												</ul>
											</div>
										</div>
										<div class="col-4 col-links mr-auto">
											<div class="menu-column-label">Get in touch</div>
											<div class="menu-column-links">
												<ul class="mr-5">
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-showroom-london/" target="">London Showroom</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-showroom-swansea/" target="">Swansea Showroom</a></li>
													<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/contact-us/" target="">Contact Us</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-4 menu-image-link">
									<div class="image-link-wrap"><a class="image_container" href="https://www.coachhousepianos.co.uk/about-us/" target="">
											<div class="image-16by9 hover_zoom"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/03/about_nav-e1740810959512.webp" srcset="" sizes="(max-width: 100%) 100vw, 100%" alt="">
												<div class="image-link-content">
													<p>About Coach House</p><span>LEARN MORE</span>
												</div>
											</div>
										</a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="mega_tray_background">
						<!-- No Content Needed -->
					</div>
				</div>
			</nav>


			<div id="mobile_navigation">
				<div class="mobile_menu_bar container-padding" style="top: 37px;">
					<div class="right d-flex align-content-center justify-content-start">
						<button class="mobile_menu_button">
							<img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/06/mobile_open-1.svg" alt="Open Menu">

						</button>
					</div>
					<div class="center d-flex align-content-center justify-content-center">
						<a href="https://www.coachhousepianos.co.uk">
							<img src="https://www.coachhousepianos.co.uk/wp-content/themes/chp/navigation/assets/logo.svg">
						</a>
					</div>
					<div class="left d-flex align-content-center justify-content-end">

						<span class="search-bar search-desktop">
							<form class="d-flex align-items-center" role="search" method="get" action="https://www.coachhousepianos.co.uk/" data-hs-cf-bound="true">
								<label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
								<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Enter your search..." name="s" value="">
								<button type="submit" id="searchsubmit" style="border: none; background: none; padding: 0;">
									<img src="https://www.coachhousepianos.co.uk/wp-content/themes/chp/navigation/assets/spyglass-gold.svg" alt="search icon">
								</button>
								<input type="hidden" name="post_type" value="product">
							</form>
						</span>
						<span class="icon icon-search search-button-toggle search-mobile">
							<img src="https://www.coachhousepianos.co.uk/wp-content/themes/chp/navigation/assets/spyglass.svg" alt="search icon">
						</span>
						<a href="https://www.coachhousepianos.co.uk/my-account/" class="is-flex">
							<span class="icon icon-account">
								<img src="https://www.coachhousepianos.co.uk/wp-content/themes/chp/navigation/assets/account.svg" alt="account icon">
							</span>
						</a>
						<a href="https://www.coachhousepianos.co.uk/basket/" class="is-flex">
							<span class="icon icon-basket">
								<img src="https://www.coachhousepianos.co.uk/wp-content/themes/chp/navigation/assets/basket.svg" alt="basket icon">
							</span>
						</a>
					</div>

				</div>
			</div>
			<div id="mobile_navigation_tray">
				<div class="mobile_menu_top">
					<button class="mobile_close_tray">
						<img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/06/mobile_close-1.svg" alt="Close Menu">

					</button>
				</div>
				<div class="main_mobile_menu_tray">
					<div class="mobile-menu-inner">
						<div class="menu-label">Shop products</div>
						<ul class="menu-links">
							<li><span id="navigation_mobile_0" class="mobile_tray_link_hover">Grand Pianos</span></li>
							<li><span id="navigation_mobile_1" class="mobile_tray_link_hover">Upright Pianos</span></li>
							<li><span id="navigation_mobile_2" class="mobile_tray_link_hover">Digital Pianos</span></li>
							<li><span id="navigation_mobile_3" class="mobile_tray_link_hover">Brands</span></li>
							<li><span id="navigation_mobile_4" class="mobile_tray_link_hover">Accessories</span></li>
							<li><span id="navigation_mobile_5" class="mobile_tray_link_hover">Services</span></li>
							<li><span id="navigation_mobile_6" class="mobile_tray_link_hover">About</span></li>
						</ul>
					</div>
					<div class="mobile_menu_bottom">

					</div>
					<!-- ----------------- Mega Menu Trays ----------------- -->
					<div class="mobile_mega_menu_sub_tray">
						<div class="mobile_mega_menu_tray" id="navigation_mobile_0_tray">
							<div class="mobile_menu_top"><button class="sub_tray_back">Grand Pianos</button><button class="mobile_close_tray"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/06/mobile_close-1.svg"></button></div>
							<div class="container tray_container">
								<div class="row mega-menu-inner">
									<div class="col-12 nav-columns-wrap">
										<div class="row flex-column">
											<div class="col-links mr-auto">
												<div class="menu-column-label">Shop by type</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/grand-pianos/?filter_condition=new" target="">New</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/grand-pianos/?filter_condition=pre-owned" target="">Second Hand</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/grand-pianos/?filter_hybrid-models=silent" target="">Silent Pianos</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/grand-pianos/?filter_hybrid-models=self-playing" target="">Self Playing</a></li>
														<li class="mega-nav-link column-summary-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/grand-pianos/" target="">Shop All Types</a></li>
													</ul>
												</div>
											</div>
											<div class="col-links mr-auto">
												<div class="menu-column-label">Shop by brand</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="/category/steinway-grand-pianos/" target="">Steinway &amp; Sons</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/yamaha-pianos/yamaha-grand-pianos/" target="">Yamaha</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/sauter-pianos/sauter-grand-pianos/" target="">Sauter</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/kawai-pianos/kawai-grand-pianos/" target="">Kawai</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/bosendorfer-pianos/bosendorfer-grand-pianos-bosendorfer-pianos/" target="">Bösendorfer</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/welmar-pianos/welmar-grand-pianos/" target="">Welmar</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/schreiner-sohne-pianos/schreiner-sohne-grand-pianos/" target="">Schreiner &amp; Söhne</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/steingraeber-sohne-pianos/steingraeber-sohne-grand-pianos/" target="">Steingraeber &amp; Söhne</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/wilh-steinberg-pianos/wilh-steinberg-grand-pianos/" target="">Wilh Steinberg</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/laul-estonia-pianos/laul-estonia-grand-pianos/" target="">Laul Estonia</a></li>
														<li class="mega-nav-link column-summary-link"><a href="https://www.coachhousepianos.co.uk/shop/?product_cat=all-pianos,upright-pianos,grand-pianos,digital-pianos,silent-pianos,transacoustic,self-playing-pianos,new-pianos,second-hand-pianos,piano-for-beginners,warehouse-clearance" target="">Shop All Brands</a></li>
													</ul>
												</div>
											</div>
											<div class="col-links mr-auto">
												<div class="menu-column-label">Popular Models</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steinway-pianos/steinway-model-s/" target="">Steinway Model S</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steinway-pianos/steinway-model-m/" target="">Steinway Model M</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steinway-pianos/steinway-model-o/" target="">Steinway Model O</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steinway-pianos/steinway-model-a/" target="">Steinway Model A</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steinway-pianos/steinway-model-b/" target="">Steinway Model B</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steinway-pianos/steinway-model-c/" target="">Steinway Model C</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steinway-pianos/steinway-model-d/" target="">Steinway Model D</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 menu-image-link">
										<div class="image-link-wrap"><a class="image_container" href="https://www.coachhousepianos.co.uk/category/piano-all/grand-pianos/" target="">
												<div class="image-16by9 hover_zoom"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/03/grand_piano_nav-1-e1740810906291.webp" srcset="" sizes="(max-width: 100%) 100vw, 100%" alt="">
													<div class="image-link-content">
														<p>All Grand Pianos</p><span>SHOP NOW</span>
													</div>
												</div>
											</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mobile_mega_menu_sub_tray">
						<div class="mobile_mega_menu_tray" id="navigation_mobile_1_tray">
							<div class="mobile_menu_top"><button class="sub_tray_back">Upright Pianos</button><button class="mobile_close_tray"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/06/mobile_close-1.svg"></button></div>
							<div class="container tray_container">
								<div class="row mega-menu-inner">
									<div class="col-12 nav-columns-wrap">
										<div class="row flex-column">
											<div class="col-links mr-auto">
												<div class="menu-column-label">Shop by type</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/upright-pianos/?filter_condition=new" target="">New</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/upright-pianos/?filter_condition=pre-owned" target="">Second Hand</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/upright-pianos/?filter_hybrid-models=silent" target="">Silent Pianos</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/upright-pianos/?filter_hybrid-models=self-playing" target="">Self Playing</a></li>
														<li class="mega-nav-link column-summary-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/upright-pianos/" target="">Shop All Types</a></li>
													</ul>
												</div>
											</div>
											<div class="col-links mr-auto">
												<div class="menu-column-label">Shop by brand</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/sauter-pianos/sauter-upright-pianos/" target="">Sauter</a></li>
														<li class="mega-nav-link"><a href="/category/steinway-upright-pianos/" target="">Steinway &amp; Sons</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/kawai-pianos/kawai-upright-pianos/" target="">Kawai</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/bosendorfer-pianos/bosendorfer-upright-pianos/" target="">Bösendorfer</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/welmar-pianos/welmar-upright-pianos/" target="">Welmar</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/yamaha-pianos/yamaha-upright-pianos/" target="">Yamaha</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/schreiner-sohne-pianos/schreiner-sohne-upright-pianos/" target="">Schreiner &amp; Söhne</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/steingraeber-sohne-pianos/steingraeber-sohne-upright-pianos/" target="">Steingraeber &amp; Söhne</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/wilh-steinberg-pianos/wilh-steinberg-upright-pianos/" target="">Wilh Steinberg</a></li>
														<li class="mega-nav-link column-summary-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/upright-pianos/" target="">Shop All Brands</a></li>
													</ul>
												</div>
											</div>
											<div class="col-links mr-auto">
												<div class="menu-column-label">Shop by offer</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="/offers/kawai-500-acoustic-piano-cashback/" target="">Kawai Acoustic Cashback</a></li>
														<li class="mega-nav-link"><a href="/offers/yamaha-more-than-a-gift/" target="">Yamaha b Series Cashback</a></li>
														<li class="mega-nav-link column-summary-link"><a href="https://www.coachhousepianos.co.uk/offers/" target="">Shop All Offers</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 menu-image-link">
										<div class="image-link-wrap"><a class="image_container" href="https://www.coachhousepianos.co.uk/category/piano-all/upright-pianos/" target="">
												<div class="image-16by9 hover_zoom"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/03/upright_piano_nav-e1740810875250.webp" srcset="" sizes="(max-width: 100%) 100vw, 100%" alt="">
													<div class="image-link-content">
														<p>All Upright Pianos</p><span>SHOP NOW</span>
													</div>
												</div>
											</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mobile_mega_menu_sub_tray">
						<div class="mobile_mega_menu_tray" id="navigation_mobile_2_tray">
							<div class="mobile_menu_top"><button class="sub_tray_back">Digital Pianos</button><button class="mobile_close_tray"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/06/mobile_close-1.svg"></button></div>
							<div class="container tray_container">
								<div class="row mega-menu-inner">
									<div class="col-12 nav-columns-wrap">
										<div class="row flex-column">
											<div class="col-links mr-auto">
												<div class="menu-column-label">Shop by brand</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/yamaha-pianos/yamaha-digital-pianos/" target="">Yamaha</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/kawai-pianos/kawai-digital-pianos/" target="">Kawai</a></li>
														<li class="mega-nav-link"><a href="/piano-brands/alpange/" target="">Alpange</a></li>
														<li class="mega-nav-link column-summary-link"><a href="https://www.coachhousepianos.co.uk/category/piano-all/digital-pianos/" target="">Shop All Brands</a></li>
													</ul>
												</div>
											</div>
											<div class="col-links mr-auto">
												<div class="menu-column-label">Shop by offer</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/offers/yamaha-more-than-a-gift/" target="">Yamaha Digital Cashback</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 menu-image-link">
										<div class="image-link-wrap"><a class="image_container" href="https://www.coachhousepianos.co.uk/category/piano-all/digital-pianos/" target="">
												<div class="image-16by9 hover_zoom"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/03/digital_pianos_nav-e1740810922143.webp" srcset="" sizes="(max-width: 100%) 100vw, 100%" alt="">
													<div class="image-link-content">
														<p>All Digital Pianos</p><span>SHOP NOW</span>
													</div>
												</div>
											</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mobile_mega_menu_sub_tray">
						<div class="mobile_mega_menu_tray" id="navigation_mobile_3_tray">
							<div class="mobile_menu_top"><button class="sub_tray_back">Brands</button><button class="mobile_close_tray"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/06/mobile_close-1.svg"></button></div>
							<div class="container tray_container">
								<div class="row mega-menu-inner">
									<div class="col-12 nav-columns-wrap">
										<div class="row flex-column">
											<div class="col-links mr-auto">
												<div class="menu-column-label">Popular Brands</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steinway-pianos" target="">Steinway</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/yamaha-pianos" target="">Yamaha</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/bosendorfer-pianos" target="">Bosendorfer</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/sauter" target="">Sauter</a></li>
													</ul>
												</div>
											</div>
											<div class="col-links mr-auto">
												<div class="menu-column-label">Shop by brand</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/alpange" target="">Alpange</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/bechstein" target="">Bechstein</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/bentley-pianos" target="">Bentley</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/bluthner-pianos" target="">Bluthner</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/boston-pianos" target="">Boston</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/kawai-pianos" target="">Kawai</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/kemble-pianos" target="">Kemble</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/roland-pianos" target="">Roland</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/schreiner-sohne" target="">Schreiner &amp; Söhne</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/schulze-pollmann" target="">Schulze Pollmann</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/seiler" target="">Seiler</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/steingraeber-sohne" target="">Steingraeber &amp; Söhne</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/welmar-pianos" target="">Welmar</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/wilh-steinberg" target="">Wilh Steinberg</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/laul-estonia-pianos/" target="">Laul Estonia</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 menu-image-link">
										<div class="image-link-wrap"><a class="image_container" href="https://www.coachhousepianos.co.uk/category/piano-accessories/" target="">
												<div class="image-16by9 hover_zoom"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/08/Yamaha-C1-mahogany-9.jpg" srcset="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/08/Yamaha-C1-mahogany-9.jpg 1500w, https://www.coachhousepianos.co.uk/wp-content/uploads/2025/08/Yamaha-C1-mahogany-9-300x240.jpg 300w, https://www.coachhousepianos.co.uk/wp-content/uploads/2025/08/Yamaha-C1-mahogany-9-1024x819.jpg 1024w, https://www.coachhousepianos.co.uk/wp-content/uploads/2025/08/Yamaha-C1-mahogany-9-768x614.jpg 768w, https://www.coachhousepianos.co.uk/wp-content/uploads/2025/08/Yamaha-C1-mahogany-9-1080x864.jpg 1080w, https://www.coachhousepianos.co.uk/wp-content/uploads/2025/08/Yamaha-C1-mahogany-9-600x480.jpg 600w" sizes="(max-width: 100%) 100vw, 100%" alt="">
													<div class="image-link-content">
														<p>All Brands</p><span>SHOP NOW</span>
													</div>
												</div>
											</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mobile_mega_menu_sub_tray">
						<div class="mobile_mega_menu_tray" id="navigation_mobile_4_tray">
							<div class="mobile_menu_top"><button class="sub_tray_back">Accessories</button><button class="mobile_close_tray"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/06/mobile_close-1.svg"></button></div>
							<div class="container tray_container">
								<div class="row mega-menu-inner">
									<div class="col-12 nav-columns-wrap">
										<div class="row flex-column">
											<div class="col-links mr-auto">
												<div class="menu-column-label">Shop Accessories</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-accessories/piano-stools/" target="">Stools &amp; Benches</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-accessories/piano-headphones/" target="">Headphones</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-accessories/piano-castor-cups/" target="">Castor Cups</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-accessories/piano-hygrometers/" target="">Thermo-Hygrometers</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-accessories/piano-underfloor-heating-mats/" target="">Underfloor Heating Mat</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/category/piano-accessories/piano-covers/" target="">Piano Covers</a></li>
														<li class="mega-nav-link column-summary-link"><a href="https://www.coachhousepianos.co.uk/category/piano-accessories/" target="">Shop All Accessories</a></li>
													</ul>
												</div>
											</div>
											<div class="col-links mr-auto">
												<div class="menu-column-label">Shop Piano Care</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/product/piano-polish/" target="">Polish</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/product/piano-key-wipes/" target="">Wipes</a></li>
													</ul>
												</div>
											</div>
											<div class="col-links mr-auto">
												<div class="menu-column-label">Shop Gifts</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/product/gift-vouchers/" target="">Gift Vouchers</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 menu-image-link">
										<div class="image-link-wrap"><a class="image_container" href="https://www.coachhousepianos.co.uk/category/piano-accessories/" target="">
												<div class="image-16by9 hover_zoom"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/03/accessories_nav-e1740810937243.webp" srcset="" sizes="(max-width: 100%) 100vw, 100%" alt="">
													<div class="image-link-content">
														<p>All Accessories</p><span>SHOP NOW</span>
													</div>
												</div>
											</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mobile_mega_menu_sub_tray">
						<div class="mobile_mega_menu_tray" id="navigation_mobile_5_tray">
							<div class="mobile_menu_top"><button class="sub_tray_back">Services</button><button class="mobile_close_tray"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/06/mobile_close-1.svg"></button></div>
							<div class="container tray_container">
								<div class="row mega-menu-inner">
									<div class="col-12 nav-columns-wrap">
										<div class="row flex-column">
											<div class="col-links mr-auto">
												<div class="menu-column-label">Professional Services</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/sell-your-piano/" target="">Sell My Piano</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/piano-tuning/" target="">Piano Tuning</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/piano-restoration/" target="">Restoration</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/piano-valuation/" target="">Valuation</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/piano-transportation/" target="">Transportation</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/education/" target="">Piano Teachers</a></li>
													</ul>
												</div>
											</div>
											<div class="col-links mr-auto">
												<div class="menu-column-label">Buying Services</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://info.coachhousepianos.co.uk/piano-buyers-guide" target="">Buyers Guides</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-finder/" target="">Piano Finder</a></li>
														<li class="mega-nav-link"><a href="https://app.smartsheet.com/b/form/e0e94edb1e904af4b10ed07e626c5385" target="">Part Exchange</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/delivery/" target="">Delivery Information</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/international-delivery/" target="">International Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="col-links mr-auto">
												<div class="menu-column-label">Hire</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/piano-hire/" target="">Piano Hire</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/our-services/hiring-bosendorfer-hall/" target="">Bösendorfer Hall</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 menu-image-link">
										<div class="image-link-wrap"><a class="image_container" href="https://www.coachhousepianos.co.uk/our-services/" target="">
												<div class="image-16by9 hover_zoom"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/03/services_nav-e1740810892987.webp" srcset="" sizes="(max-width: 100%) 100vw, 100%" alt="">
													<div class="image-link-content">
														<p>Our Services</p><span>LEARN MORE</span>
													</div>
												</div>
											</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mobile_mega_menu_sub_tray">
						<div class="mobile_mega_menu_tray" id="navigation_mobile_6_tray">
							<div class="mobile_menu_top"><button class="sub_tray_back">About</button><button class="mobile_close_tray"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/06/mobile_close-1.svg"></button></div>
							<div class="container tray_container">
								<div class="row mega-menu-inner">
									<div class="col-12 nav-columns-wrap">
										<div class="row flex-column">
											<div class="col-links mr-auto">
												<div class="menu-column-label">About us</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/about-us/" target="">Who We Are</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/why-coach-house/" target="">Why Coach House</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-brands/" target="">Piano Brands</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/faqs/" target="">FAQs</a></li>
													</ul>
												</div>
											</div>
											<div class="col-links mr-auto">
												<div class="menu-column-label">Latest</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/news-events/" target="">News and Events</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/knowledge-hub/" target="">Knowledge Hub</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/testimonials/" target="">Testimonials</a></li>
														<li class="mega-nav-link"><a href="/offers/" target="">Piano Offers</a></li>
													</ul>
												</div>
											</div>
											<div class="col-links mr-auto">
												<div class="menu-column-label">Get in touch</div>
												<div class="menu-column-links">
													<ul class="">
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-showroom-london/" target="">London Showroom</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/piano-showroom-swansea/" target="">Swansea Showroom</a></li>
														<li class="mega-nav-link"><a href="https://www.coachhousepianos.co.uk/contact-us/" target="">Contact Us</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 menu-image-link">
										<div class="image-link-wrap"><a class="image_container" href="https://www.coachhousepianos.co.uk/about-us/" target="">
												<div class="image-16by9 hover_zoom"><img src="https://www.coachhousepianos.co.uk/wp-content/uploads/2025/03/about_nav-e1740810959512.webp" srcset="" sizes="(max-width: 100%) 100vw, 100%" alt="">
													<div class="image-link-content">
														<p>About Coach House</p><span>LEARN MORE</span>
													</div>
												</div>
											</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="mobile_navigation_tray_background">
				<!-- No Content -->
			</div>
		</header>