<?php

/**
 * Template Name: About
 *
 * @package vanphucbienhoa
 */

get_header();
?>

<?php if (get_field('show_hero')) : 
    $hero = get_field('hero_content');
    if ($hero) :
?>
<section class="has-background-dark" name="hero-1">
    <div
        class="fade-in owl-carousel owl-theme owl-theme-chp owl-loaded owl-drag is-inview"
        id="hero-1">
        <div class="owl-stage-outer">
            <div class="owl-stage" style="width: 100%; display: flex;">
                <div class="owl-item active" style="width: 100%;">
                    <div class="hero h-100 block-dark owl-slide">
                        <picture class="overlay overlay-none">
                            <img
                                class="w-100"
                                width="1696"
                                height="1049"
                                alt="<?php echo esc_attr($hero['title']); ?>" 
                                src="<?php echo esc_url($hero['image']); ?>" />
                        </picture>

                        <div
                            class="tw-flex tw-flex-col tw-justify-center tw-items-center tw-text-center tw-h-full tw-pt-24 sm:tw-pt-0">
                            <div class="hero-section is-width-desktop margin-auto">
                                <h1 class="title is-text-1">
                                    <?php echo esc_html($hero['title']); ?>
                                </h1>
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
<?php endif; endif; ?>

<?php if (get_field('show_intro')) : 
    $intro = get_field('intro_content');
    if ($intro) :
?>
<section
    class="section is-relative flex-center block-light block-no-border block-no-border is-small"
    id="copy-block-2"
    name="copy-block-2">
    <span class="no-key-line key-line-top"></span>

    <div
        class="fade-in has-text-centered flex-center is-width-60 is-relative is-inview">
        <h2 class="margin-bottom-0 margin-top title-key">
            <?php echo esc_html($intro['title']); ?>
        </h2>
        <div class="formatted flex-center">
            <?php echo $intro['text']; ?>
            <p>&nbsp;</p>
            <hr class="is-large" />
            <p>
                <span class="is-size-6 is-size-5-tablet"><?php echo esc_html($intro['founder_name']); ?><br />
                    <?php echo esc_html($intro['founder_position']); ?></span>
            </p>
        </div>
    </div>

    <span class="no-key-line key-line-bottom"></span>
</section>
<?php endif; endif; ?>

<?php if (get_field('show_video')) : 
    $video_url = get_field('video_url');
    if ($video_url) :
?>
<section
    class="section is-relative is-medium block-white"
    id="content_and_video-3"
    name="content_and_video-3">
    <div
        class="is-outofview fade-in has-text-centered flex-center is-width-desktop formatted is-relative block-video margin-top-double">
        <p>
            <!-- Using WP core function to embed video -->
             <?php echo wp_oembed_get($video_url, array('width' => 500, 'height' => 281)); ?>
        </p>
    </div>
</section>
<?php endif; endif; ?>

<?php if (get_field('show_team')) : 
    $team = get_field('team_content');
    if ($team) :
?>
<section
    class="section is-relative is-medium block-light-gold"
    id="grid-popups-4"
    name="grid-popups-4">
    <div
        class="is-outofview fade-in is-relative has-text-centered is-width-fullhd margin-auto">
        <h3 class="title is-size-4 is-size-3-tablet">
            <?php echo esc_html($team['title']); ?>
        </h3>

        <section class="section columns is-multiline">
            <?php if (have_rows('team_content')) : 
                 // Access repeater from group sub_field
                 $members = $team['members'];
                 if ($members) :
                    foreach ($members as $member) :
            ?>
            <div class="column is-4-tablet is-3-desktop">
                <div class="padding">
                    <picture class="image padding-bottom-double">
                        <img
                            class="is-lazy w-100 is-rounded is-width-profile margin-auto"
                            src="<?php echo esc_url($member['image']); ?>"
                            width="300"
                            height="300"
                            alt="<?php echo esc_attr($member['name']); ?>" />
                    </picture>

                    <h4 class="is-size-6 is-size-5-tablet"><?php echo esc_html($member['name']); ?></h4>

                    <span class="is-size-6 is-size-5-tablet"><?php echo esc_html($member['position']); ?></span>
                </div>
            </div>
            <?php endforeach; endif; endif; ?>
        </section>
    </div>
</section>
<?php endif; endif; ?>

<?php if (get_field('show_services')) : 
    if (have_rows('service_slides')) :
?>
<section
    data-wpr-lazyrender="1"
    class="block-light"
    name="block-slider-5">
    <div
        class="owl-carousel owl-theme owl-nav-left owl-theme-light owl-loaded owl-drag"
        id="block-slider-5">
        <div class="owl-stage-outer">
            <div class="owl-stage" style="display: flex;">
                <?php while (have_rows('service_slides')) : the_row();
                    $img = get_sub_field('image');
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $link = get_sub_field('link');
                ?>
                <div class="owl-item" style="width: 100%; flex-shrink: 0;">
                    <div
                        class="columns is-gapless is-flex-tablet is-outofview fade-in">
                        <div
                            class="column is-6 padding h-50 h-500-desktop h-600-fullhd is-relative">
                            <?php if ($link) : ?>
                            <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target'] ? $link['target'] : '_self'); ?>" title="<?php echo esc_attr($link['title']); ?>">
                            <?php endif; ?>
                                <picture class="is-overlay">
                                    <img
                                        class="is-lazy w-100"
                                        src="<?php echo esc_url($img); ?>"
                                        alt="<?php echo esc_attr($title); ?>">
                                </picture>
                            <?php if ($link) : ?>
                            </a>
                            <?php endif; ?>
                        </div>

                        <div
                            class="column is-6 h-50 h-500-desktop h-600-fullhd flex-center">
                            <div class="flex-body padding padding-bottom-double">
                                <h3 class="title is-size-4 is-size-3-tablet">
                                    <?php echo esc_html($title); ?>
                                </h3>
                                <div class="is-width-tablet">
                                    <?php if ($text) : ?>
                                        <p><?php echo nl2br(esc_html($text)); ?></p>
                                    <?php endif; ?>
                                </div>
                                <?php if ($link) : ?>
                                <div class="padding-top">
                                    <a
                                        href="<?php echo esc_url($link['url']); ?>"
                                        title="<?php echo esc_attr($link['title']); ?>"
                                        target="<?php echo esc_attr($link['target'] ? $link['target'] : '_self'); ?>"
                                        class="button margin-bottom"><?php echo esc_html($link['title']); ?></a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function($) {
            $("#block-slider-5").owlCarousel({
                autoWidth: false,
                items: 1,
                loop: 0,
                stagePadding: 0,
                rewind: true,
                nav: false,
                dots: 1,
                autoplayTimeout: 6000,
                autoplay: 1,
                navText: ["", ""],
                mouseDrag: 1,
                touchDrag: 1,
                lazyLoad: false,
            });
        });
    </script>
</section>
<?php endif; endif; ?>

<?php if (get_field('show_story')) : 
     $story = get_field('story_content');
     if ($story) :
?>
<section
    data-wpr-lazyrender="1"
    class="section is-relative flex-center block-light block-border-top block-no-border is-medium"
    id="copy-block-6"
    name="copy-block-6">
    <span class="no-key-line key-line-top"></span>

    <div
        class="is-outofview fade-in has-text-centered flex-center is-width-60 is-relative">
        <div class="formatted flex-center">
            <div class="title-key"><?php echo esc_html($story['title']); ?></div>
            <p>
                <span class="p1 is-size-5 is-size-4-fullhd"><?php echo nl2br(esc_html($story['intro'])); ?></span>
            </p>
            <hr />
            <div class="columns w-100">
               <div class="column is-6">
                    <?php echo $story['col_1']; ?>
                </div>
                <div class="column is-6">
                    <?php echo $story['col_2']; ?>
                </div>
            </div>
        </div>
    </div>

    <span class="no-key-line key-line-bottom"></span>
</section>
<?php endif; endif; ?>

<?php if (get_field('show_purpose')) : 
    $purpose = get_field('purpose_content');
    if ($purpose) :
?>
<section
    data-wpr-lazyrender="1"
    class="section is-relative flex-center block-light-gold block-border-top block-no-border is-medium"
    id="copy-block-7"
    name="copy-block-7">
    <span class="no-key-line key-line-top"></span>

    <div
        class="is-outofview fade-in has-text-centered flex-center is-width-60 is-relative">
        <div class="formatted flex-center">
            <div class="title-key"><?php echo esc_html($purpose['purpose_title']); ?></div>
            <p>
                <span class="p1 is-size-5 is-size-4-fullhd"><?php echo esc_html($purpose['purpose_text']); ?></span>
            </p>
            <hr />
            <div class="title-key"><?php echo esc_html($purpose['mission_title']); ?></div>
            <p>
               <?php echo esc_html($purpose['mission_text']); ?>
            </p>
        </div>
    </div>

    <span class="no-key-line key-line-bottom"></span>
</section>
<?php endif; endif; ?>

<?php if (get_field('show_testi')) : 
     $testi_content = get_field('testimonials_content');
     if ($testi_content) :
?>
<section
    data-wpr-lazyrender="1"
    class="section block-gold"
    name="copy-slider-8">
    <div class="is-width-desktop margin-auto has-text-centered">
        <h3 class="title-key"><?php echo esc_html($testi_content['title']); ?></h3>
    </div>

    <div
        class="is-outofview fade-in owl-carousel owl-theme owl-theme-gold owl-loaded owl-drag"
        id="copy-slider-8">
        <div class="owl-stage-outer">
            <div
                class="owl-stage"
                style="display: flex;">
                <?php 
                $testimonials = $testi_content['list'];
                if ($testimonials) : 
                    foreach($testimonials as $item) :
                ?>
                <div class="owl-item" style="width: 100%; flex-shrink: 0;">
                    <div
                        class="flex-center padding-bottom-double padding-top-double margin-bottom-double is-width-desktop">
                        <div class="padding-bottom">
                            <p>
                                <span class="is-size-6 is-size-5-tablet">“<?php echo esc_html($item['quote']); ?>”</span>
                            </p>
                        </div>

                        <hr />
                        <div class="margin-bottom">
                            <div class="title-key is-marginless is-line-1-2"><?php echo esc_html($item['name']); ?></div>
                            <div class="title-key title-key-light is-line-1-2">
                                <?php echo esc_html($item['location']); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; ?>
            </div>
        </div>
        <div class="owl-nav disabled">
            <div class="owl-prev"></div>
            <div class="owl-next"></div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function($) {
            $("#copy-slider-8").owlCarousel({
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
</section>
<?php endif; endif; ?>

<?php if (get_field('show_links')) : 
    if (have_rows('bottom_links')) :
?>
<section data-wpr-lazyrender="1" id="copy-blocks-9" name="copy-blocks-9">
    <div class="columns is-multiline is-gapless">
        <?php 
        $idx = 0;
        while(have_rows('bottom_links')) : the_row(); 
            $title = get_sub_field('title');
            $label = get_sub_field('label');
            $link = get_sub_field('link');
            $border_class = ($idx % 2 != 0) ? 'block-border-left' : '';
            $link_class = ($idx % 2 != 0) ? 'block-link-second' : '';
        ?>
        <div class="column <?php echo $border_class; ?> is-6 flex-center block-white min-height h-50">
            <a
                class="block-link <?php echo $link_class; ?>"
                href="<?php echo esc_url($link); ?>"
                target=""
                title="<?php echo esc_attr($label); ?>">
                <div
                    class="is-outofview fade-in section has-text-centered flex-center">
                    <div class="block-link-content">
                        <h3 class="title is-size-4 is-size-3-fullhd">
                            <?php echo esc_html($title); ?>
                        </h3>
                    </div>
                    <span class="block-link-text title-key"><?php echo esc_html($label); ?></span>
                </div>
            </a>
        </div>
        <?php $idx++; endwhile; ?>
    </div>
</section>
<?php endif; endif; ?>

<?php get_footer(); ?>