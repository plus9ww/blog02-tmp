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
	wp_deregister_style( 'duplicate-post' );
	if ( ! is_page( 'inquiry' ) ) {
		wp_deregister_script('jquery');
	}
	wp_deregister_script('toc-front');
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
 
add_action('wp_footer','lm_dequeue_footer_styles');
function lm_dequeue_footer_styles()
{
  wp_dequeue_style('yarppRelatedCss');
}

/*contact form 7 のファイルを必要な場合のみ読み込む*/ 
add_action( 'wp_enqueue_scripts', 'deregister_cf7_files' );
function deregister_cf7_files() {
	if ( ! is_page( 'inquiry' ) ) {
		wp_dequeue_style( 'contact-form-7' );
		wp_dequeue_script( 'contact-form-7' );
	}
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
add_image_size('blog_s', 50, 50, true);
// 投稿画像サイズL
add_image_size('blog_l', 106, 80, true);
// アフィリエイトサーチイメージ
add_image_size('affsearch_img', 120, 120, true);

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
 * All in One SEO Pack title・description書き換え
 * 
 */
function my_title($title){
	global $thistitle;
	if($thistitle){
		$title = $thistitle;
		$thistitle = '';
	}
	return $title;
}
add_filter('aioseop_title', 'my_title');

function my_description($description){
	global $thisdescription;
	if($thisdescription){
		$description = $thisdescription;
		$thisdescription = '';
	}
	return $description;
}
add_filter('aioseop_description', 'my_description');

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
 * 記事分割ページ送り
 * 
*/
add_filter('wp_link_pages_args', 'wp_link_pages_args_prevnext_add');
/**
 * Add prev and next links to a numbered link list
 */
function wp_link_pages_args_prevnext_add($args)
{
    global $page, $numpages, $more, $pagenow;
	
	$args['before'] = '<nav class="pagesprit"><ul><li>';
	$args['after'] = '</li></ul></nav>';
	$args['separator'] = '</li><li>';
	$args['nextpagelink'] = __( '次のページヘ' );
	$args['previouspagelink'] = __( '前のページヘ' );
	$args['pagelink'] =  '<span class="num">%</span>';
	
    if (!$args['next_or_number'] == 'next_and_number') 
        return $args; # exit early
    $args['next_or_number'] = 'number'; # keep numbering for the main part
    if (!$more)
        return $args; # exit early
    if($page-1) # there is a previous page
        $args['before'] .= _wp_link_page($page-1)
            . $args['link_before'].'<span class="num">'. $args['previouspagelink'] .'</span>'. $args['link_after'] . '</a>' . $args['separator']
        ;
    if ($page<$numpages) # there is a next page
        $args['after'] = $args['separator'] . _wp_link_page($page+1)
            . $args['link_before'] .'<span class="num">'. $args['nextpagelink'] .'</span>'. $args['link_after'] . '</a>'
            . $args['after']
        ;
    return $args;
}
 
 /**
 * 記事内、他記事カード生成
 * 
 */ 
function nlink_scode($atts) {
  extract(shortcode_atts(array('u'=>""),$atts));
  if(empty($u)) return;
  $u = explode(',', $u);
  $img0 = "";
  global $ex_nid;
  $cnt = count($u);
  switch($cnt) {
    case 2:
      $nlink="<div>";
    case 1:
      for($i=0; $i<$cnt; $i++) {
        $url = $u[$i];
        $id = url_to_postid($u[$i]);
        $title = esc_html(get_the_title($id));
		$views = number_format((int)get_post_meta($id, "views", true));
        $ex_nid.="," . $id;
 
        if(has_post_thumbnail($id)) {
          $img = wp_get_attachment_image_src(get_post_thumbnail_id($id),'blog_s');
          $img_tag = '<img src="'.$img[0].'" alt="'.$title.'" width="'.$img[1].'"  height="'.$img[2].'">';
        } elseif( $img0 != "" ) {
          $img_tag ='<img src="" alt="no image" class="n-img">';
        } else { $img_tag = ""; }
 
        $nlink .='<article class="entLinkCard"><a href="'.$url.'" title="'.$title.'">'.$img_tag.'<div class="titleBox"><h4 class="entLinkCard__title">'.$title.'</h4><span class="view"><span class="icon-eye"></span><strong class="cnt">'.$views.'</strong><strong>view</strong></span></div></a></article>';
      }
      if($cnt==2) $nlink .="</div>";
      break;
    default:
      $nlink="<ul>";
      for($i=0; $i<$cnt; $i++) {
        $url = $u[$i];
        $id = url_to_postid($u[$i]);
        $title = esc_html(get_the_title($id));
        $ex_nid.="," . $id;
        $nlink .= "<li><a href='" . $url . "'>" . $title ."</a></li>";
      }
      $nlink .= "</ul>";
  }
  return $nlink;
}
add_shortcode("link", "nlink_scode");


function my_custom_toc() {
	global $post,$page;
	
	if ( function_exists( 'toc_get_index' ) ) {
		
		if ( preg_match( '$<!--nextpage-->$', $post->post_content ) ) {
			$this_pages = explode( '<!--nextpage-->', $post->post_content );
			$toc = '';
			foreach ( $this_pages as $key => $val ) {
				
				$page_num = $key + 1;
	
				$page_content = toc_get_index( $val );
				
				if($page_num == $page ){
					$index = $page_content;
				}else{
					if($page_num == 1){
						$index = preg_replace( "!#!", get_permalink( $post->ID ) . '#', $page_content );
					}else{
						$index = preg_replace( "!#!", get_permalink( $post->ID ) . $page_num . '#', $page_content );
					}
				}
	
				$toc .= $index;
			}
		}else{
			$page_content = toc_get_index( $post->post_content );
			$toc .= $page_content;
		}
		
		return '<ul class="nextpage-toc-container">' . $toc . '</ul>';
	} else {
		
		return false;
	}
}
?>