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
								<?php
									$top_bar = get_field('header_top_bar', 'option');
									$phone_text = $top_bar['phone_text'] ?: 'Call: +44 (0) 20 8088 5858';
									$links = $top_bar['top_bar_links'] ?: [];
									?>
									<div class="left">
										<ul>
											<li>
												<a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $phone_text); ?>"><?php echo esc_html($phone_text); ?></a>
											</li>
											
											<?php if ($links): ?>
												<?php foreach ($links as $item): 
													$link = $item['link'];
													if( $link ): 
														$link_url = $link['url'];
														$link_title = $link['title'];
														$link_target = $link['target'] ? $link['target'] : '_self';
														?>
														<li><span class="separator">|</span></li>
														<li>
															<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
														</li>
													<?php endif; ?>
												<?php endforeach; ?>
											<?php endif; ?>
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
							<?php 
							$left_count = CHP_Menu_Walker::render_desktop_links('menu-left', 0);
							?>
							<div class="main_logo">
								<?php 
								$logos = get_field('header_logos', 'option'); 
								$main_logo = $logos['main_logo'] ?: get_template_directory_uri() . '/img/logo.svg';
								$scrolled_logo = $logos['scrolled_logo'] ?: get_template_directory_uri() . '/img/logo.svg';
								?>
								<span class="logo"><a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Go to Homepage">
										<img src="<?php echo esc_url($main_logo); ?>" alt="Van Phuc Bien Hoa logo">
									</a></span>
								<span class="logo-scrolled">
									<a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Go to Homepage">
										<img src="<?php echo esc_url($scrolled_logo); ?>" alt="Van Phuc Bien Hoa logo">
									</a></span>
							</div>
							<?php
							CHP_Menu_Walker::render_desktop_links('menu-right', $left_count);
							?>
						</div>
					</div>
					<!-- ----------------- Mega Menu Trays ----------------- -->
					<!-- ----------------- Mega Menu Trays ----------------- -->
					<?php CHP_Menu_Walker::render_desktop_trays(['menu-left', 'menu-right']); ?>
					
					<div class="mega_tray_background">
						<!-- No Content Needed -->
					</div>
				</div>
			</nav>


			<div id="mobile_navigation">
				<?php 
				$mobile_opts = get_field('header_mobile_nav', 'option');
				$mobile_icon = $mobile_opts['mobile_open_icon'] ?: get_template_directory_uri() . '/img/mobile_open-1.svg';
				$mobile_logo = $mobile_opts['mobile_logo'] ?: get_template_directory_uri() . '/img/logo.svg';
				?>
				<div class="mobile_menu_bar container-padding" style="top: 37px;">
					<div class="right d-flex align-content-center justify-content-start">
						<button class="mobile_menu_button">
							<img src="<?php echo esc_url($mobile_icon); ?>" alt="Open Menu">
						</button>	
					</div>
					<div class="center d-flex align-content-center justify-content-center">
						<a href="<?php echo esc_url(home_url('/')); ?>">
							<img src="<?php echo esc_url($mobile_logo); ?>">
						</a>
					</div>
					<div class="left d-flex align-content-center justify-content-end">

						<span class="search-bar search-desktop">
							<form class="d-flex align-items-center" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" data-hs-cf-bound="true">
								<label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
								<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Enter your search..." name="s" value="">
								<button type="submit" id="searchsubmit" style="border: none; background: none; padding: 0;">
									<img src="<?php echo get_template_directory_uri(); ?>/img/spyglass-gold.svg" alt="search icon">
								</button>
								<input type="hidden" name="post_type" value="product">
							</form>
						</span>
						<span class="icon icon-search search-button-toggle search-mobile">
							<img src="<?php echo get_template_directory_uri(); ?>/img/spyglass.svg" alt="search icon">
						</span>
						<a href="<?php echo esc_url(home_url('/my-account/')); ?>" class="is-flex">
							<span class="icon icon-account">
								<img src="<?php echo get_template_directory_uri(); ?>/img/account.svg" alt="account icon">
							</span>
						</a>
						<a href="<?php echo esc_url(home_url('/basket/')); ?>" class="is-flex">
							<span class="icon icon-basket">
								<img src="<?php echo get_template_directory_uri(); ?>/img/basket.svg" alt="basket icon">
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
						<?php CHP_Menu_Walker::render_mobile_menu('menu-mobile'); ?>
					</div>
					<div class="mobile_menu_bottom">

					</div>
					<!-- ----------------- Mega Menu Trays ----------------- -->
					<!-- ----------------- Mega Menu Trays ----------------- -->
					<?php CHP_Menu_Walker::render_mobile_trays('menu-mobile'); ?>
				</div>
			</div>

			<div class="mobile_navigation_tray_background">
				<!-- No Content -->
			</div>
		</header>