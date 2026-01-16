<?php
function vanphucbienhoa_scripts()
{
    // wp_enqueue_style('vanphucbienhoa-style', get_stylesheet_uri(), array(), _S_VERSION);
    // wp_style_add_data('vanphucbienhoa-style', 'rtl', 'replace');

    // wp_enqueue_script('vanphucbienhoa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    /**
     * CHP assets (CSS/JS/fonts are referenced by CSS via relative URLs).
     * Folder: /chp
     */
    $theme_uri = get_template_directory_uri();

    // CHP base styles
    wp_enqueue_style('vanphucbienhoa-chp-main', $theme_uri . '/chp/css/main.css', array(), _S_VERSION);
    wp_enqueue_style('vanphucbienhoa-chp-extra', $theme_uri . '/chp/css/extra.css', array('vanphucbienhoa-chp-main'), _S_VERSION);
    wp_enqueue_style('vanphucbienhoa-styles', $theme_uri . '/styles/style.css', array('vanphucbienhoa-chp-main'), _S_VERSION);

    // CHP template parts styles
    wp_enqueue_style('vanphucbienhoa-chp-blog-feed-2', $theme_uri . '/chp/template-parts/blog-feed-2/blog-feed-2.css', array('vanphucbienhoa-chp-main'), _S_VERSION);

    // CHP navigation styles/scripts
    wp_enqueue_style('vanphucbienhoa-chp-navigation', $theme_uri . '/chp/navigation/navigation.css', array('vanphucbienhoa-chp-main'), _S_VERSION);
    wp_enqueue_script('vanphucbienhoa-chp-navigation', $theme_uri . '/chp/navigation/desktop_navigation.js', array('jquery'), _S_VERSION, true);

    // CHP JS (depends on jQuery)
    wp_enqueue_script('vanphucbienhoa-chp-owl', $theme_uri . '/chp/js/owl.carousel.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('vanphucbienhoa-chp-app', $theme_uri . '/chp/js/app-min.js', array('jquery', 'vanphucbienhoa-chp-owl'), _S_VERSION, true);

    // CHP "nw" bundle (Bootstrap + nw.js)
    // wp_enqueue_style('vanphucbienhoa-chp-nw-bootstrap', $theme_uri . '/chp/nw/css/bootstrap.min.css', array(), _S_VERSION);
    // wp_enqueue_style('vanphucbienhoa-chp-nw-main', $theme_uri . '/chp/nw/css/main.css', array('vanphucbienhoa-chp-nw-bootstrap'), _S_VERSION);
    // wp_enqueue_style('vanphucbienhoa-chp-nw-style', $theme_uri . '/chp/nw/css/style.css', array('vanphucbienhoa-chp-nw-main'), _S_VERSION);

wp_enqueue_style(
    'vanphucbienhoa-bootstrap',
    $theme_uri . '/chp/nw/css/bootstrap.min.css',
    [],
    _S_VERSION
);

wp_enqueue_style(
    'vanphucbienhoa-main',
    $theme_uri . '/chp/nw/css/main.css',
    ['vanphucbienhoa-bootstrap'],
    _S_VERSION
);

wp_enqueue_style(
    'vanphucbienhoa-style',
    $theme_uri . '/chp/nw/css/style.css',
    ['vanphucbienhoa-main'],
    _S_VERSION
);



    wp_enqueue_script('vanphucbienhoa-chp-nw-bootstrap', $theme_uri . '/chp/nw/js/bootstrap.bundle.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('vanphucbienhoa-chp-nw', $theme_uri . '/chp/nw/js/nw.js', array('jquery', 'vanphucbienhoa-chp-nw-bootstrap'), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'vanphucbienhoa_scripts');
