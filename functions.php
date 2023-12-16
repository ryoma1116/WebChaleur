<?php
// Typekit スタイルシートの追加
function my_custom_fonts() {
    echo '<link rel="stylesheet" href="https://use.typekit.net/fbg0ujh.css">';
}
add_action('wp_head', 'my_custom_fonts');

// Splide.js スクリプトとスタイルシートの追加
function my_custom_scripts() {
    echo '<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>';
    echo '<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">';
}
add_action('wp_footer', 'my_custom_scripts');

/* CSSとJavaScriptの読み込み */
function my_script_init() {
    // 自作jsファイルの読み込み
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);

    // 自作cssファイルの読み込み
    wp_enqueue_style('style-rest', get_template_directory_uri() . '/assets/css/reset.css', array(), '1.0.0', false);
    wp_enqueue_style('style-splide', get_template_directory_uri() . '/assets/css/splide.min.css', array(), '1.0.0', false);
    wp_enqueue_style('style-name', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', false);
    wp_enqueue_style('style-typekit', 'https://use.typekit.net/fbg0ujh.css', array(), null, false); // Typekit スタイルシートを追加

    // particles.jsの読み込み
    wp_enqueue_script('particles', 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

// X-Robots-Tagを利用してfeedにnoindexを付与する
add_action('template_redirect', function() {
    if (is_feed() && headers_sent() === false) {
        header('X-Robots-Tag: noindex, follow', true);
    }
});
