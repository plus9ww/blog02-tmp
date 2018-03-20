<?php

// 不要スクリプト・style削除
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_social_bookmarking_light_wp_head');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
// Embed系のタグを削除
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');

add_action( 'wp_print_styles', 'my_deregister_styles', 100 );
function my_deregister_styles() {
    wp_deregister_style( 'wp-pagenavi' );
}

add_action( 'wp_enqueue_scripts', 'deregister_cf7_files' );
function deregister_cf7_files() {
	if ( ! is_page( 'inquiry' ) ) {
		wp_dequeue_style( 'contact-form-7' );
		wp_dequeue_script( 'contact-form-7' );
	}
}

add_action( 'widgets_init', 'remove_recent_comments_style' );
function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}

// トータルキャッシュHTML内コメント削除
add_filter( 'w3tc_can_print_comment', function( $w3tc_setting ) { return false; }, 10, 1 );

//ヘッダー・フッターで読み込まれるCSSを削除
add_action('wp_print_styles','lm_dequeue_header_styles');
function lm_dequeue_header_styles()
{
  wp_dequeue_style('yarppWidgetCss');
}
 
add_action('get_footer','lm_dequeue_footer_styles');
function lm_dequeue_footer_styles()
{
  wp_dequeue_style('yarppRelatedCss');
}

// 投稿出力のPタグ除去
remove_filter('term_description','wpautop');

/**
 * ビジュアルリッチエディタ「イタリック」削除
 *
 */
function tinymce_delete_buttons( $array ) {
	$array = array_diff($array, array('italic'));
	return $array;
}
add_filter( 'mce_buttons', 'tinymce_delete_buttons' );

/**
 * テキストエディタ「イタリック」削除
 *
 */
function et_print_styles() {
    echo '<style>#qt_content_em{display:none !important;}</style>';
}
add_action('admin_print_styles', 'et_print_styles', 1);


/**
 * 投稿内の画像パス変更
 *
 */
function replaceImagePath($arg) {
	$content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
	$content = str_replace('"../img/', '"' . get_bloginfo('template_directory') . '/img/', $content);
	$content = str_replace('"common/', '"' . get_bloginfo('template_directory') . '/common/', $content);
	$content = str_replace('index.html', '/', $content);
	$content = str_replace('.html', '/', $content);
	return $content;
}  
add_action('the_content', 'replaceImagePath');

/**
 * モバイル判別
 *
 */
function is_mobile(){
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android', // 1.5+ Android
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

/**
 * 抜粋の文字数を引数指定
 *
 */
function kotoriexcerpt($length) {
	global $post;
	$content = mb_substr(strip_tags($post->post_excerpt),0,$length);
	 
	if(!$content){
	$content =  $post->post_content;
	$content =  strip_shortcodes($content);
	$content =  strip_tags($content);
	$content =  str_replace("&nbsp;","",$content);
	$content =  html_entity_decode($content,ENT_QUOTES,"UTF-8");
	$content =  mb_substr($content,0,$length);
	}
	return $content;
}

/**
 * 固定ページの親ページと子ページをスラッグで判定
 *
 */
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}
