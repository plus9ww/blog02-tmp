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
	if ( ! is_page( 'inquiry' ) && ! is_page( 'en-booking' ) && ! is_page( 'tw-booking' ) && ! is_page( 'zh-booking' )) {
		wp_deregister_script('jquery');
	}
	if(!is_category('column') && !in_category('column') && !is_category('information') && !in_category('information')){
		wp_deregister_style( 'wp-pagenavi-style' );
	}
}

/*contact form 7 のファイルを必要な場合のみ読み込む*/ 
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
 * アイキャッチ・サムネイル
 *
 */
 
// 投稿画面アイキャッチを有効
add_theme_support( 'post-thumbnails' );
// アイキャッチ画像サイズ
set_post_thumbnail_size( 106, 80 );

// facebook用
add_image_size('facebook', 1200, 600, true);
// 投稿画像サイズS
add_image_size('blog_s', 90, 90, true);
// 投稿画像サイズM
add_image_size('blog_m', 210, 140, true);
// 投稿画像サイズL
add_image_size('blog_l', 720, 480, true);
// お客様の声サムネイル
add_image_size('voice_l', 402, 567, true);

// ムービー
add_image_size('movie_s', 88, 50, true);
add_image_size('movie_m', 220, 124, true);
add_image_size('movie_l', 320, 180, true);

/**
 * カスタムメニュー
 *
 */
 
register_nav_menu('headermenu', 'ヘッダーメニュー');
register_nav_menu('footermenu', 'フッターメニュー');

// liのクラス・ID削除
add_filter( 'nav_menu_css_class', 'removeClass', 10, 2 );
function removeClass( $classes, $item ) {
    return $classes = array();
}
add_filter('nav_menu_item_id', 'removeId', 10);
function removeId( $id ){ 
    return $id = array(); 
}

/**
 * 投稿内の画像パス変更
 *
 */
function replaceImagePath($arg) {
	$content = str_replace('"images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
	$content = str_replace('"common/', '"' . get_bloginfo('template_directory') . '/common/', $content);
	$content = str_replace('"../images/', '"' . get_bloginfo('template_directory') . '/images/', $content);
	$content = str_replace('"../common/', '"' . get_bloginfo('template_directory') . '/common/', $content);
	return $content;
}  
add_action('the_content', 'replaceImagePath');

// モバイル判別
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

// 抜粋の文字数を引数で指定できる関数
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
 * 固定ページの親ページと子ページをスラッグで判定する
 * 
 */
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}

/**
 * 子カテゴリーのテンプレートがない場合、親カテゴリーのテンプレートを参照する
 * 
 */
add_filter( 'category_template', 'my_category_template' );

function my_category_template( $template ) {
	$category = get_queried_object();
	if ( $category->parent != 0 &&
		( $template == "" || strpos( $template, "category.php" ) !== false ) ) {
		$templates = array();
		while ( $category->parent ) {
			$category = get_category( $category->parent );
			if ( !isset( $category->slug ) ) break;
			$templates[] = "category-{$category->slug}.php";
			$templates[] = "category-{$category->term_id}.php";
		}
		$templates[] = "category.php";
		$template = locate_template( $templates );
	}
	return $template;
}

/**
 * カテゴリーアーカイブの表示件数指定
 * 
 */
function my_pre_get_posts( $query ) {
    if ( is_admin() || ! $query -> is_main_query() ) return;
  
    if ( $query -> is_category('voice') ) {
		$query -> set( 'posts_per_page', '2' );  //5件を
		return;
	}
}
add_action( 'pre_get_posts', 'my_pre_get_posts' );

 /**
 * phpファイル呼び出しショートコード
 * 
 */ 
function my_php_Include($params = array()) {
	extract(shortcode_atts(array('file' => 'default'), $params));
	ob_start();
	include(STYLESHEETPATH . "/$file.php");
	return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');


?>