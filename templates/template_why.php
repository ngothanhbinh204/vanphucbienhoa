<?php

/**
 * Template Name: Why Choose
 *
 * @package vanphucbienhoa
 */

get_header();
?>

<?php if (get_field('show_hero')):
    $hero = get_field('hero_content');
?>
    <section class="has-background-dark" name="hero-1">
        <div class="fade-in owl-carousel owl-theme owl-theme-chp owl-loaded owl-drag is-inview" id="hero-1">
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1280px;">
                    <div class="owl-item active" style="width: 1280px">
                        <div class="hero h-90 block-dark owl-slide">
                            <picture class="overlay overlay-none">
                                <?php if (!empty($hero['image'])): ?>
                                    <img class="w-100 entered lazyloaded" width="2560" height="1074" alt="<?php echo esc_attr($hero['title']); ?>" src="<?php echo esc_url($hero['image']); ?>" />
                                <?php endif; ?>
                            </picture>

                            <div class="tw-flex tw-flex-col tw-justify-center tw-items-center tw-text-center tw-h-full tw-pt-24 sm:tw-pt-0">
                                <div class="hero-section is-width-desktop margin-auto">
                                    <h2 class="title is-text-1"><?php echo esc_html($hero['title']); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav disabled">
                <div class="owl-prev"></div>
                <div class="owl-next"></div>
            </div>
            <div class="owl-dots disabled">
                <div class="owl-dot active"><span></span></div>
            </div>
        </div>
        <script>
            jQuery(document).ready(function($) {
                $("#hero-1").owlCarousel({
                    autoWidth: false,
                    items: 1,
                    loop: 0,
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
<?php endif; ?>

<?php if (get_field('show_intro')): ?>
    <section class="section is-relative flex-center block-light block-no-border block-no-border is-medium" id="copy-block-2" name="copy-block-2">
        <span class="no-key-line key-line-top"></span>

        <div class="fade-in has-text-centered flex-center is-width-60 is-relative is-inview">
            <h1 class="margin-bottom-0 margin-top title-key">
                <?php echo esc_html(get_field('intro_title')); ?>
            </h1>
            <div class="formatted flex-center">
                <?php echo get_field('intro_text'); ?>
            </div>
        </div>

        <span class="no-key-line key-line-bottom"></span>
    </section>
<?php endif; ?>

<?php if (get_field('show_passion')): ?>
    <section class="section is-fullwidth is-relative block-dark-gold block-no-border block-no-border" id="content_and_slider-3" name="content_and_slider-3">
        <span class="key-line key-line-top"></span>

        <div class="is-outofview fade-in has-text-centered flex-center is-width-tablet is-relative padding-left padding-right">
            <h3 class="title is-size-4 is-size-3-tablet">
                <?php echo esc_html(get_field('passion_title')); ?>
            </h3>

            <div class="formatted">
                <?php echo get_field('passion_text'); ?>
            </div>
        </div>

        <?php 
        $passion_images = get_field('passion_gallery');
        if ($passion_images): 
        ?>
            <div class="owl-carousel owl-theme owl-gallery margin-top-double margin-bottom-double owl-loaded owl-drag" id="content_and_slider-3_slider">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <?php foreach ($passion_images as $p_img): ?>
                            <div class="owl-item" style="width: 800px">
                                <div class="flex-end">
                                    <picture class="">
                                        <img class="w-100" width="963" height="541" src="<?php echo esc_url($p_img); ?>" />
                                    </picture>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Nav/Dots structure kept standard -->
                <div class="owl-nav disabled">
                    <div class="owl-prev"></div>
                    <div class="owl-next"></div>
                </div>
                <div class="owl-dots">
                    <?php
                    $count = count($passion_images);
                    for ($i = 0; $i < $count; $i++) {
                        echo '<div class="owl-dot ' . ($i == 0 ? 'active' : '') . '"><span></span></div>';
                    }
                    ?>
                </div>
            </div>
            <script>
                jQuery(document).ready(function($) {
                    $("#content_and_slider-3_slider").owlCarousel({
                        autoWidth: false,
                        items: 1,
                        loop: 1,
                        stagePadding: 0,
                        rewind: true,
                        nav: false,
                        dots: 1,
                        autoplayTimeout: 6000,
                        autoplay: 0,
                        navText: ["", ""],
                        mouseDrag: 1,
                        touchDrag: 1,
                        lazyLoad: true,
                        center: true,
                        responsive: {
                            768: {
                                items: 1.2
                            },
                            960: {
                                items: 1.4
                            },
                            1200: {
                                items: 1.6
                            },
                            1400: {
                                items: 2
                            },
                        },
                    });
                });
            </script>
        <?php endif; ?>

        <span class="no-key-line key-line-bottom"></span>
    </section>
<?php endif; ?>

<?php if (get_field('show_craft')): ?>
    <section class="section is-relative flex-center block-dark-gold block-no-border block-no-border is-small" id="copy-block-4" name="copy-block-4">
        <span class="no-key-line key-line-top"></span>

        <div class="is-outofview fade-in has-text-centered flex-center is-width-60 is-relative">
            <h3 class="margin-bottom-0 margin-top title is-size-4 is-size-3-tablet">
                <?php echo esc_html(get_field('craft_title')); ?>
            </h3>
            <div class="formatted flex-center">
                <?php echo get_field('craft_text'); ?>
            </div>
        </div>

        <span class="no-key-line key-line-bottom"></span>
    </section>

    <?php if ($craft_img = get_field('craft_image_full')): ?>
        <section class="is-relative flex-center block-dark" id="image_and_content-5" name="image_and_content-5">
            <div class="is-outofview fade-in margin-auto is-fullwidth">
                <picture class="is-overlay">
                    <img class="is-lazy w-100" src="<?php echo esc_url($craft_img); ?>" />
                </picture>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>

<?php if (get_field('show_journey')): ?>
    <section class="section is-relative block-light" id="brochure_heading-6" name="brochure_heading-6">
        <span class="key-line key-line-top"></span>
        <div class="is-outofview fade-in has-text-centered flex-center is-width-desktop formatted is-relative">
            <h3 class="title is-size-4 is-size-3-tablet"><?php echo esc_html(get_field('journey_heading')); ?></h3>
        </div>
    </section>

    <?php $j1 = get_field('journey_1'); ?>
    <section class="section is-relative block-light" id="brochure_layout_1-7" name="brochure_layout_1-7">
        <div class="is-outofview fade-in is-width-fullhd formatted is-relative margin-auto">
            <div class="columns">
                <div class="column is-5">
                    <picture>
                        <img class="is-lazy w-100" src="<?php echo esc_url($j1['image']); ?>" />
                    </picture>
                </div>

                <div class="column is-offset-1 is-5">
                    <div class="formatted">
                        <?php echo $j1['text']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $j2 = get_field('journey_2'); ?>
    <section class="section is-relative block-light" id="brochure_layout_2-8" name="brochure_layout_2-8" style="overflow-x: hidden">
        <div class="is-outofview fade-in is-width-fullhd formatted is-relative margin-auto">
            <div class="columns">
                <div class="column is-4">
                    <div class="formatted">
                        <p>
                            <span class="is-size-4 is-size-3-tablet"><?php echo esc_html($j2['title']); ?></span>
                        </p>
                        <?php echo $j2['text']; ?>
                    </div>
                </div>

                <div class="column is-offset-1 h-60 is-relative is-8">
                    <picture class="is-overlay padding">
                        <img class="is-lazy w-100" src="<?php echo esc_url($j2['image']); ?>" />
                    </picture>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (get_field('show_customers')): ?>
    <section class="section is-relative block-light" id="brochure_layout_3-9" name="brochure_layout_3-9">
        <div class="is-outofview fade-in is-width-fullhd formatted is-relative margin-auto">
            <div class="columns">
                <div class="column is-5 is-offset-5">
                    <div class="formatted">
                        <?php echo get_field('customers_text'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
    $customers_images = get_field('customers_slider');
    if ($customers_images): 
    ?>
        <section class="section is-fullwidth is-relative block-light" id="brochure_slider-10" name="brochure_slider-10">
            <div class="owl-carousel owl-theme owl-gallery owl-loaded owl-drag" id="brochure_slider-10_slider">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <?php foreach ($customers_images as $c_img): ?>
                            <div class="owl-item" style="width: 1280px">
                                <div class="is-width-fullhd margin-auto">
                                    <picture>
                                        <img class="w-100" width="1427" height="750" src="<?php echo esc_url($c_img); ?>" />
                                    </picture>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="owl-nav disabled">
                    <div class="owl-prev"></div>
                    <div class="owl-next"></div>
                </div>
                <div class="owl-dots">
                    <?php
                    $count = count($customers_images);
                    for ($i = 0; $i < $count; $i++) {
                        echo '<div class="owl-dot ' . ($i == 0 ? 'active' : '') . '"><span></span></div>';
                    }
                    ?>
                </div>
            </div>
            <script>
                jQuery(document).ready(function($) {
                    $("#brochure_slider-10_slider").owlCarousel({
                        autoWidth: false,
                        items: 1,
                        loop: 1,
                        stagePadding: 0,
                        rewind: true,
                        nav: false,
                        dots: 1,
                        autoplayTimeout: 6000,
                        autoplay: 0,
                        navText: ["", ""],
                        mouseDrag: 1,
                        touchDrag: 1,
                        lazyLoad: true,
                        center: true,
                    });
                });
            </script>
        </section>
    <?php endif; ?>
<?php endif; ?>

<?php if (get_field('show_promises')): ?>
    <section class="section block-light-gold" name="copy-slider-11">
        <?php if (have_rows('promises_list')): ?>
            <div class="is-outofview fade-in owl-carousel owl-theme owl-theme-light-gold owl-loaded owl-drag" id="copy-slider-11">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <?php while (have_rows('promises_list')): the_row(); ?>
                            <div class="owl-item" style="width: 1226px">
                                <div class="flex-center padding-bottom-double padding-top-double margin-bottom-double is-width-desktop">
                                    <picture class="image padding-bottom-double">
                                        <img class="is-lazy w-100" src="<?php echo esc_url(get_sub_field('icon')); ?>" />
                                    </picture>

                                    <div class="padding-bottom">
                                        <p>
                                            <span class="is-size-4 is-size-3-tablet"><?php echo esc_html(get_sub_field('title')); ?></span>
                                        </p>
                                        <p>&nbsp;</p>
                                        <div class="formatted">
                                            <?php echo get_sub_field('description'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="owl-nav disabled">
                    <div class="owl-prev"></div>
                    <div class="owl-next"></div>
                </div>
                <div class="owl-dots">
                    <?php
                    $count = count(get_field('promises_list'));
                    for ($i = 0; $i < $count; $i++) {
                        echo '<div class="owl-dot ' . ($i == 0 ? 'active' : '') . '"><span></span></div>';
                    }
                    ?>
                </div>
            </div>
            <script>
                jQuery(document).ready(function($) {
                    $("#copy-slider-11").owlCarousel({
                        autoWidth: false,
                        items: 1,
                        loop: 0,
                        stagePadding: 0,
                        rewind: true,
                        nav: false,
                        dots: 1,
                        autoplayTimeout: 6000,
                        autoplay: 0,
                        navText: ["", ""],
                        mouseDrag: 1,
                        touchDrag: 1,
                        lazyLoad: false,
                    });
                });
            </script>
        <?php endif; ?>
    </section>
<?php endif; ?>

<?php if (get_field('show_restored')): ?>
    <section class="section is-relative flex-center block-dark block-no-border block-no-border is-large" id="copy-block-12" name="copy-block-12">
        <picture class="is-overlay">
            <img class="is-lazy w-100" width="1700" height="750" src="<?php echo esc_url(get_field('restored_bg')); ?>" />
        </picture>

        <span class="no-key-line key-line-top"></span>

        <div class="is-outofview fade-in has-text-centered flex-center is-width-60 is-relative">
            <h3 class="margin-bottom-0 margin-top title is-size-4 is-size-3-tablet">
                <?php echo esc_html(get_field('restored_title')); ?>
            </h3>
            <div class="formatted flex-center">
                <?php echo get_field('restored_text'); ?>
            </div>
        </div>

        <span class="no-key-line key-line-bottom"></span>
    </section>
<?php endif; ?>

<?php if (get_field('show_brands')): ?>
    <section class="section is-relative block-dark-gold" name="cms_brands_slider-13">
        <div class="is-outofview fade-in has-text-centered flex-center is-relative">
            <div class="is-width-desktop">
                <h3 class="title-key"><?php echo esc_html(get_field('brands_title')); ?></h3>
                <div class="formatted">
                    <?php echo get_field('brands_text'); ?>
                </div>
            </div>

            <?php 
            $brands_images = get_field('brands_list');
            if ($brands_images): 
            ?>
                <div class="brand-slider owl-carousel owl-border owl-border-dark is-width-fullhd padding-top-double owl-loaded owl-drag" id="cms_brands_slider-13">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <?php foreach ($brands_images as $b_img): ?>
                                <div class="owl-item">
                                    <div class="padding-left-double padding-right-double">
                                        <!-- Removed Link: Gallery field does not support links per image -->
                                        <a href="javascript:void(0)" target="" title="">
                                            <img src="<?php echo esc_url($b_img); ?>" />
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Brand slider nav -->
                    <div class="owl-nav disabled">
                        <div class="owl-prev"></div>
                        <div class="owl-next"></div>
                    </div>
                    <div class="owl-dots disabled"></div>
                </div>

                <script>
                    jQuery(document).ready(function($) {
                        $("#cms_brands_slider-13").owlCarousel({
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
                                480: {
                                    items: 2
                                },
                                768: {
                                    items: 3
                                },
                                960: {
                                    items: 4
                                },
                                1200: {
                                    items: 5
                                },
                                1400: {
                                    items: 6
                                },
                            },
                        });
                    });
                </script>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>