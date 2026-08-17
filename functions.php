<?php
/**
 * Mudatoru Theme Functions
 */

if (!function_exists('get_m_asset')) {
    /**
     * Get the URL for an asset file
     *
     * @param string $filename The filename in the assets folder
     * @return string The escaped URL
     */
    function get_m_asset($filename) {
        $filename = ltrim($filename, '/');
        return esc_url(get_template_directory_uri() . '/assets/' . $filename);
    }
}

if (!function_exists('m_asset')) {
    /**
     * Output the URL for an asset file
     *
     * @param string $filename The filename in the assets folder
     */
    function m_asset($filename) {
        echo get_m_asset($filename);
    }
}

/**
 * Enqueue scripts and styles.
 */
function mudatoru_enqueue_scripts() {
    // Load main stylesheet
    wp_enqueue_style( 'mudatoru-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version') );

    // Load main script in footer
    wp_enqueue_script( 'mudatoru-script', get_template_directory_uri() . '/script.js', array(), wp_get_theme()->get('Version'), true );
}
add_action( 'wp_enqueue_scripts', 'mudatoru_enqueue_scripts' );

/**
 * Theme Setup
 */
function mudatoru_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mudatoru_setup' );

/**
 * Maintain exact title format to match the original static HTML.
 */
function mudatoru_custom_title_parts( $title ) {
    if ( is_front_page() || is_home() ) {
        $title['title'] = 'ムダトル';
        $title['tagline'] = '定額制DX支援サービス';
    }
    return $title;
}
add_filter( 'document_title_parts', 'mudatoru_custom_title_parts' );

function mudatoru_document_title_separator( $sep ) {
    return '|';
}
add_filter( 'document_title_separator', 'mudatoru_document_title_separator' );

/**
 * Output Meta tags
 */
function mudatoru_meta_tags() {
    echo '<meta charset="' . esc_attr(get_bloginfo('charset')) . '">' . "\n";
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\n";
    echo '<meta name="description" content="優秀なチームを格安で。月額定額制でDXのプロチームをご利用いただける「ムダトル」。戦略から実行、改善まで一貫して支援します。">' . "\n";
}
add_action( 'wp_head', 'mudatoru_meta_tags', 1 );
