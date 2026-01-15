<?php

/**
 * Template Name: Home
 *
 * @package vanphucbienhoa
 */

get_header();
?>

<?php
if (get_field('show_hero')) :
	if (have_rows('hero_slides')) : ?>
		<section class="has-background-dark test-class" name="hero-1">
			<div class="fade-in owl-carousel owl-theme owl-theme-chp" id="hero-1">
				<?php while (have_rows('hero_slides')) : the_row();
					$image = get_sub_field('image');
					$title = get_sub_field('title');
					$sub   = get_sub_field('subtitle');
					$link  = get_sub_field('link');
				?>
					<div class="hero h-90 block-dark owl-slide">
						<picture class="overlay overlay-50">
							<img class="w-100" width="2000" height="1334" alt="<?php echo esc_attr($title); ?>" src="<?php echo esc_url($image); ?>">
						</picture>
						<div class="hero-content">
							<div class="hero-section is-width-desktop margin-auto">
								<h2 class="title is-text-1"><?php echo esc_html($title); ?></h2>
								<div class="padding-bottom-double title-key is-width-40 margin-auto"><?php echo esc_html($sub); ?></div>
								<?php if ($link) : ?>
									<div>
										<a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target'] ? $link['target'] : '_self'); ?>" title="<?php echo esc_attr($link['title']); ?>" class="button is-text"><?php echo esc_html($link['title']); ?></a>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<script>
				jQuery(document).ready(function($) {
					$('#hero-1').owlCarousel({
						autoWidth: false,
						items: 1,
						loop: 1,
						stagePadding: 0,
						rewind: false,
						nav: false,
						dots: 1,
						autoplayTimeout: 6000,
						autoplay: 1,
						navText: ["", ""],
						mouseDrag: 1,
						touchDrag: 1,
						lazyLoad: true,
					});
				});
			</script>
		</section>
	<?php endif;
endif;

if (get_field('show_intro')) :
	$intro = get_field('intro_content');
	if ($intro) : ?>
		<section class="section is-relative flex-center  block-dark-gold block-no-border block-no-border is-medium" id="copy-block-2" name="copy-block-2">
			<span class="no-key-line key-line-top"></span>
			<div class="fade-in has-text-centered flex-center is-width-60 is-relative is-inview">
				<div class="formatted flex-center">
					<h1><?php echo esc_html($intro['heading_1']); ?></h1>
					<h2 class="margin-bottom-0 margin-top title-key"><?php echo esc_html($intro['heading_2']); ?></h2>
					<p>&nbsp;</p>
					<?php echo $intro['text']; ?>
				</div>
			</div>
			<span class="no-key-line key-line-bottom"></span>
		</section>
	<?php endif;
endif;

if (get_field('show_cats')) :
	if (have_rows('cat_slides')) : ?>
		<section class="block-dark-gold" name="block-slider-3">
			<div class="owl-carousel owl-theme owl-nav-right owl-theme-dark-gold" id="block-slider-3">
				<?php while (have_rows('cat_slides')) : the_row();
					$title = get_sub_field('title');
					$btn   = get_sub_field('button_label');
					$link  = get_sub_field('link_url');
					$img   = get_sub_field('image');
				?>
					<div class="columns is-gapless is-flex-tablet is-outofview fade-in">
						<div class="column is-6 h-50 min-height flex-center">
							<div class="flex-body padding">
								<p class="title is-text-3 margin-bottom-0"><?php echo esc_html($title); ?></p>
								<div>
									<a href="<?php echo esc_url($link); ?>" title="<?php echo esc_attr($btn); ?>" class="button is-text"><?php echo esc_html($btn); ?></a>
								</div>
							</div>
						</div>
						<div class="column is-6 padding h-50 min-height is-relative">
							<a href="<?php echo esc_url($link); ?>" title="<?php echo esc_attr($btn); ?>">
								<picture class="is-overlay">
									<img class="is-lazy w-100" src="<?php echo esc_url($img); ?>" width="1128" height="634" alt="<?php echo esc_attr($title); ?>">
								</picture>
							</a>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<script>
				jQuery(document).ready(function($) {
					$('#block-slider-3').owlCarousel({
						autoWidth: false,
						items: 1,
						loop: 0,
						stagePadding: 0,
						rewind: true,
						nav: false,
						dots: 1,
						autoplayTimeout: 4500,
						autoplay: 1,
						navText: ["", ""],
						mouseDrag: 1,
						touchDrag: 1,
						lazyLoad: false,
					});
				});
			</script>
		</section>
	<?php endif;
endif;

if (get_field('show_shop')) :
	if (have_rows('shop_items')) : ?>
		<section id="copy-blocks-4" name="copy-blocks-4">
			<div class="columns is-multiline is-gapless">
				<?php
				$index = 0;
				while (have_rows('shop_items')) : the_row();
					$title = get_sub_field('title');
					$sub   = get_sub_field('subtitle');
					$link  = get_sub_field('link');
					$extra_class = ($index % 2 != 0) ? 'block-border-left' : '';
					$second_class = ($index % 2 != 0) ? 'block-link-second' : '';
				?>
					<div class="column <?php echo $extra_class; ?> is-6 flex-center block-white min-height h-auto">
						<a class="block-link <?php echo $second_class; ?>" href="<?php echo esc_url($link); ?>" target="" title="Shop">
							<div class="is-outofview fade-in section has-text-centered flex-center">
								<div class="block-link-content">
									<h3 class="title is-size-4 is-size-3-fullhd"><?php echo esc_html($title); ?></h3>
								</div>
								<span class="block-link-text title-key"><?php echo esc_html($sub); ?></span>
							</div>
						</a>
					</div>
				<?php
					$index++;
				endwhile; ?>
			</div>
		</section>
	<?php endif;
endif;
?>
<?php
if (get_field('show_finder')) :
	$finder = get_field('finder_content');
	if ($finder) : ?>
		<section class="section is-relative flex-center  block-gold block-no-border block-no-border is-small" id="copy-block-5" name="copy-block-5">
			<span class="no-key-line key-line-top"></span>
			<div class="is-outofview fade-in has-text-centered flex-center is-width-60 is-relative">
				<h3 class="margin-bottom-0 margin-top title is-size-4 is-size-3-tablet"><?php echo esc_html($finder['title']); ?></h3>
				<div class="formatted flex-center">
					<p><span class="is-size-6 is-size-5-tablet"><?php echo esc_html($finder['text']); ?></span></p>
				</div>
				<?php if ($finder['link']) : ?>
					<div class="margin-top-double">
						<a href="<?php echo esc_url($finder['link']['url']); ?>" class="button margin-bottom is-text" target="<?php echo esc_attr($finder['link']['target'] ? $finder['link']['target'] : '_self'); ?>" title="<?php echo esc_attr($finder['link']['title']); ?>"><?php echo esc_html($finder['link']['title']); ?></a>
					</div>
				<?php endif; ?>
			</div>
			<span class="key-line key-line-bottom"></span>
		</section>
	<?php endif;
endif;

if (get_field('show_featured')) : 
	$feat_title = get_field('featured_title') ?: 'Featured';
?>
	<section class="tw-mx-auto tw-px-4 tw-py-8 lg:tw-py-12" id="featured-products-6" name="featured-products-6">
		<div class="is-outofview fade-in is-width-fullhd margin-auto">
			<h2 class="has-text-centered  tw-my-4"><?php echo esc_html($feat_title); ?></h2>
			<div class="wcpscwc-product-slider-wrap ">
				<?php echo do_shortcode('[wcpscwc_pdt_slider slide_to_show="4" slide_to_scroll="4" autoplay="true" autoplay_speed="3000" speed="5000" arrows="false" dots="false" loop="true"]'); ?>
			</div>
		</div>
	</section>
<?php endif;

if (get_field('show_why')) :
	$why = get_field('why_content');
	if ($why) : ?>
		<section data-wpr-lazyrender="1" class="section is-relative flex-center  block-light block-border-top block-border-bottom is-medium" id="copy-block-7" name="copy-block-7">
			<span class="no-key-line key-line-top"></span>
			<div class="is-outofview fade-in has-text-centered flex-center is-width-60 is-relative">
				<h2 class="margin-bottom-0 margin-top title-key"><?php echo esc_html($why['title']); ?></h2>
				<div class="formatted flex-center">
					<p><span class="is-size-5 is-size-4-fullhd"><?php echo esc_html($why['intro']); ?></span></p>
					<hr>
					<div class="columns w-100">
						<div class="column is-6">
							<?php echo $why['col_1']; ?>
						</div>
						<div class="column is-6">
							<?php echo $why['col_2']; ?>
						</div>
					</div>
				</div>
				<?php if ($why['link']) : ?>
					<div class="margin-top-double">
						<a href="<?php echo esc_url($why['link']['url']); ?>" class="button margin-bottom is-button" target="<?php echo esc_attr($why['link']['target'] ? $why['link']['target'] : '_self'); ?>" title="<?php echo esc_attr($why['link']['title']); ?>"><?php echo esc_html($why['link']['title']); ?></a>
					</div>
				<?php endif; ?>
			</div>
			<span class="no-key-line key-line-bottom"></span>
		</section>
	<?php endif;
endif;

if (get_field('show_testi')) :
	if (have_rows('testi_slides')) : ?>
		<section data-wpr-lazyrender="1" class="block-light" name="block-slider-8">
			<div class="owl-carousel owl-theme owl-nav-left owl-theme-light" id="block-slider-8">
				<?php while (have_rows('testi_slides')) : the_row();
					$img   = get_sub_field('image');
					$video = get_sub_field('video_link');
					$quote = get_sub_field('quote');
					$btn   = get_sub_field('button_label');
				?>
					<div class="columns is-gapless is-flex-tablet is-outofview fade-in">
						<div class="column is-6 padding h-50 min-height is-relative">
							<a href="<?php echo esc_url($video); ?>" title="<?php echo esc_attr($btn); ?>">
								<picture class="is-overlay">
									<img class="is-lazy w-100" src="<?php echo esc_url($img); ?>" width="1280" height="794" alt="Testimonial">
								</picture>
							</a>
						</div>
						<div class="column is-6 h-50 min-height flex-center">
							<h3 class="title-key padding-top-double flex-header">Testimonial</h3>
							<div class="flex-body padding">
								<p class="title is-text-3 margin-bottom-0">“<?php echo esc_html($quote); ?>” </p>
								<div>
									<a href="<?php echo esc_url($video); ?>" title="<?php echo esc_attr($btn); ?>" class="button is-text"><?php echo esc_html($btn); ?></a>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<script>
				jQuery(document).ready(function($) {
					$('#block-slider-8').owlCarousel({
						autoWidth: false,
						items: 1,
						loop: 0,
						stagePadding: 0,
						rewind: true,
						nav: false,
						dots: 1,
						autoplayTimeout: 4500,
						autoplay: 1,
						navText: ["", ""],
						mouseDrag: 1,
						touchDrag: 1,
						lazyLoad: false,
					});
				});
			</script>
		</section>
	<?php endif;
endif;

if (get_field('show_guarantee')) :
	$guan = get_field('guarantee_content');
	if ($guan) : ?>
		<section data-wpr-lazyrender="1" class="section is-relative flex-center  block-light block-border-top block-no-border is-medium" id="copy-block-9" name="copy-block-9">
			<span class="no-key-line key-line-top"></span>
			<div class="is-outofview fade-in has-text-centered flex-center is-width-60 is-relative">
				<h3 class="margin-bottom-0 margin-top title is-size-4 is-size-3-tablet"><?php echo nl2br(esc_html($guan['title'])); ?></h3>
				<div class="formatted flex-center">
					<div class="is-width-40"><?php echo nl2br(esc_html($guan['col_1'])); ?></div>
					<div class="is-width-60 is-width-40">
						<?php echo $guan['col_2']; ?>
					</div>
				</div>
			</div>
			<span class="no-key-line key-line-bottom"></span>
		</section>
	<?php endif;
endif;

if (get_field('show_webuy')) :
	$webuy = get_field('webuy_content');
	if ($webuy) : ?>
		<section class="section is-relative flex-center  block-light-gold block-border-top block-no-border is-small" id="copy-block-10" name="copy-block-10">
			<span class="key-line key-line-top"></span>
			<div class="is-outofview fade-in has-text-centered flex-center is-width-60 is-relative">
				<h3 class="margin-bottom-0 margin-top title is-size-4 is-size-3-tablet"><?php echo esc_html($webuy['title']); ?></h3>
				<div class="formatted flex-center">
					<div class="is-width-40"><?php echo nl2br(esc_html($webuy['text'])); ?></div>
					<hr>
				</div>
				<?php if ($webuy['link']) : ?>
					<div class="margin-top-double">
						<a href="<?php echo esc_url($webuy['link']['url']); ?>" class="button margin-bottom is-text" target="<?php echo esc_attr($webuy['link']['target'] ? $webuy['link']['target'] : '_self'); ?>" title="<?php echo esc_attr($webuy['link']['title']); ?>"><?php echo esc_html($webuy['link']['title']); ?></a>
					</div>
				<?php endif; ?>
			</div>
			<span class="no-key-line key-line-bottom"></span>
		</section>
	<?php endif;
endif;

if (get_field('show_craft')) :
	$craft = get_field('craft_content');
	if ($craft) : ?>
		<section class="section is-relative flex-center  block-dark-gold block-no-border block-no-border is-medium" id="copy-block-11" name="copy-block-11">
			<picture class="is-overlay overlay">
				<img class="is-lazy w-100" src="<?php echo esc_url($craft['bg_image']); ?>" width="1920" height="1080" alt="Our Craft">
			</picture>
			<span class="no-key-line key-line-top"></span>
			<div class="is-outofview fade-in has-text-centered flex-center is-width-60 is-relative">
				<div class="formatted flex-center">
					<hr>
					<p><span class="is-size-4 is-size-3-tablet"><?php echo esc_html($craft['subtitle']); ?></span></p>
					<p><span class="is-size-5 is-size-4-fullhd"><?php echo nl2br(esc_html($craft['text'])); ?></span></p>
					<?php if ($craft['link']) : ?>
						<p><a class="button" href="<?php echo esc_url($craft['link']['url']); ?>" target="<?php echo esc_attr($craft['link']['target'] ? $craft['link']['target'] : '_self'); ?>"><?php echo esc_html($craft['link']['title']); ?></a></p>
					<?php endif; ?>
					<hr>
				</div>
			</div>
			<span class="no-key-line key-line-bottom"></span>
		</section>
	<?php endif;
endif;

if (get_field('show_brands')) : 
	if (have_rows('brands_slider')) : ?>
	<section data-wpr-lazyrender="1" class="section is-relative block-dark-gold" name="brands_slider-12">
		<div class="is-outofview fade-in has-text-centered flex-center formatted is-relative">
			<div class="is-width-desktop">
				<h3 class="title-key">Brands We Stock</h3>
				<div>We are totally unique! As the only UK supplier of all the <a href="/piano-brands/">world leading piano brands</a>, we offer unbiased information and impartial advice. Our vast and varied selection offers you the opportunity to compare multiple piano makes and models in one location, ensuring room acoustics do not falsely influence your choice in any way.</div>
			</div>

			<div class="brand-slider owl-carousel owl-border owl-border-dark is-width-fullhd padding-top-double" id="brands_slider-12">
				<?php while (have_rows('brands_slider')) : the_row(); 
					$logo = get_sub_field('logo');
					$link = get_sub_field('link');
				?>
				<div class="padding-left-double padding-right-double">
					<a href="<?php echo esc_url($link); ?>" target="" title="">
						<img src="<?php echo esc_url($logo); ?>" alt="Brand Logo">
					</a>
				</div>
				<?php endwhile; ?>
			</div>

			<script>
				jQuery(document).ready(function($) {
					$('#brands_slider-12').owlCarousel({
						autoWidth: false,
						items: 1,
						loop: 1,
						nav: false,
						dots: 0,
						autoplayTimeout: 2000,
						autoplay: 1,
						navText: ["", ""],
						mouseDrag: 1,
						touchDrag: 1,
						lazyLoad: true,
						responsive: {
							480: { items: 2 },
							768: { items: 3 },
							960: { items: 4 },
							1200: { items: 5 },
							1400: { items: 6 }
						}
					});
				});
			</script>
		</div>
	</section>
<?php endif; endif; ?>

<?php get_footer(); ?>