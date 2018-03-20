<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Merci_Tmp
 * @since Merci　Tmp 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>

<?php wp_deregister_script('jquery'); ?>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" />
<?php if(is_home()): ?>
    <link rel='stylesheet' id='style-css'  href='<?php bloginfo('template_url'); ?>/css/diapo.css' type='text/css' media='all'>
<?php endif; ?>
<?php if(is_page('service') || is_parent_slug() === 'service'): ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/service.css" />
<?php endif; ?>
<?php if(is_page('facility') || is_parent_slug() === 'facility'): ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/facility.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/lightbox.css">
<?php endif; ?>

<link rel="stylesheet" media="(min-width: 640px)" href="<?php bloginfo('template_url'); ?>/css/pc_style.css">
<link rel="stylesheet" media="(max-width: 640px)" href="<?php bloginfo('template_url'); ?>/css/sp_style.css">

<!--[if lt IE 9]>
<script src="<?php bloginfo('template_url'); ?>/js/html5.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/IE9.js"></script>
<![endif]-->
</head>
<body>

<!-- PCmenu -->
<section class="no_display">
    <header>
        <div class="wrap">
            <div class="header_top clearfix">
                <? if(is_home()): ?>
                <h1 class="f12h140 left no_display"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">大阪の高級介護付有料老人ホーム・グループホームは「メルシーグループ」</a></h1>
                <? elseif(is_page('h_midori')): ?>
                <h1 class="f12h140 left no_display"><a href="<?php bloginfo('url'); ?>/facility/h_midori" title="大阪府豊中市の高級有料老人ホーム「メルシー緑が丘」。少路駅より徒歩1分。">大阪府豊中市の高級有料老人ホーム「メルシー緑が丘」。少路駅より徒歩1分。</a></h1>
                <? elseif(is_page('h_masumi')): ?>
                 <h1 class="f12h140 left no_display"><a href="<?php bloginfo('url'); ?>/facility/h_masumi" title="大阪府池田市の高級有料老人ホーム「メルシーますみ」。阪急池田駅より徒歩6分。">大阪府池田市の高級有料老人ホーム「メルシーますみ」。阪急池田駅より徒歩6分。</a></h1>
                <? else: ?>
                <p class="f12h140 left no_display"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">大阪の高級有料老人ホーム・グループホームは「メルシーグループ」</a></p>
                <? endif; ?>
                <a href="<?php bloginfo('url'); ?>/inquiry" class="right no_display" title="資料請求・お問い合わせ"><img src="<?php bloginfo('template_url'); ?>/img/common/contact_btn.png" alt="資料請求・お問い合わせ" /></a>
                <a href="<?php bloginfo('url'); ?>/recruit" class="right marginR20 no_display" title="採用情報"><img src="<?php bloginfo('template_url'); ?>/img/common/saiyou_btn.png" alt="採用情報" /></a>
            </div>
            <div class="header_bottom clearfix">
                <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="left header_logo"><img src="<?php bloginfo('template_url'); ?>/img/common/logo.png" alt="介護付有料老人ホーム・グループホームのメルシー" title="介護付有料老人ホーム・グループホームのメルシー" /></a></h2>
                <img src="<?php bloginfo('template_url'); ?>/img/common/tel.png" alt="お電話でのお問い合わせはフリーダイヤル0120-236-221" title="お電話でのお問い合わせはフリーダイヤル0120-236-221" class="right header_tel" />
            </div>
        </div>
    </header>
    <nav class="marginB15 no_display">
        <div class="wrap clearfix">
            <div class="navi clearfix">
                <a href="<?php bloginfo('url'); ?>/service" class="left" title="サービス内容"><img src="<?php bloginfo('template_url'); ?>/img/common/nav/nav01.png" alt="サービス内容" /></a>
                <a href="<?php bloginfo('url'); ?>/facility" class="left" title="施設案内"><img src="<?php bloginfo('template_url'); ?>/img/common/nav/nav02.png" alt="施設案内" /></a>
                <a href="<?php bloginfo('url'); ?>/voice" class="left" title="みなさまの声"><img src="<?php bloginfo('template_url'); ?>/img/common/nav/nav03.png" alt="みなさまの声" /></a>
                <a href="<?php bloginfo('url'); ?>/qa" class="left" title="よくある質問（Q&amp;A）"><img src="<?php bloginfo('template_url'); ?>/img/common/nav/nav04.png" alt="よくある質問（Q&amp;A）" /></a>
                <a href="<?php bloginfo('url'); ?>/company" class="left" title="会社概要"><img src="<?php bloginfo('template_url'); ?>/img/common/nav/nav05.png" alt="会社概要" /></a>
            </div>
        </div>
    </nav>
</section>
<!-- /PCmenu -->

<!-- SPmenu -->
<section class="pc_no_display">
	<header class="header_sp">
        <p class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/img/common/sp_logo.gif" width="477" height="71" alt="メルシー"/></a></p>
        <p id="sp-bt"><a href="#" class="headNvBtn"><span class="sp-bt-main"><span class="border"></span><span class="sp-bt-text">メニュー</span></span></a></p>
    </header>
    <nav class="nav_sp">
    	<div class="wrap">
            <ul class="nav_sp_main">
                <li class="nv"><a href="<?php bloginfo('url'); ?>/service">サービス内容<span class="icon-arr-plus"></span></a>
                    <ul>
                    	<li><a href="<?php bloginfo('url'); ?>/service">サービス内容トップ<span class="icon-arr-right"></span></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/service/medical">医療連携<span class="icon-arr-right"></span></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/service/individual">個別対応<span class="icon-arr-right"></span></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/service/qol">QOL向上への取組<span class="icon-arr-right"></span></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/service/quality">スタッフ・品質向上<span class="icon-arr-right"></span></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/service/recovery">機能回復・身体維持<span class="icon-arr-right"></span></a></li>
                    </ul>
                </li>
                <li class="nv"><a href="<?php bloginfo('url'); ?>/facility" title="施設案内">施設案内<span class="icon-arr-plus"></span></a>
                    <ul>
                   		<li><a href="<?php bloginfo('url'); ?>/facility">施設案内トップ<span class="icon-arr-right"></span></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/facility/h_midori">メルシー緑が丘<span class="icon-arr-right"></span></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/facility/h_masumi">メルシーますみ<span class="icon-arr-right"></span></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/facility/h_higashi">メルシー東戸塚<span class="icon-arr-right"></span></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/facility/h_kaori">かおりの里<span class="icon-arr-right"></span></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/facility/g_midori">グループホームメルシー緑が丘<span class="icon-arr-right"></span></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/facility/i_hikari">ひかり病院<span class="icon-arr-right"></span></a></li>
                    </ul>
                </li>
                <li><a href="<?php bloginfo('url'); ?>/voice" title="みなさまの声">みなさまの声<span class="icon-arr-right"></span></a></li>
                <li><a href="<?php bloginfo('url'); ?>/qa" title="よくある質問（Q&amp;A）">よくある質問（Q&amp;A）<span class="icon-arr-right"></span></a></li>
                <li><a href="<?php bloginfo('url'); ?>/" title="トップページ">トップページ<span class="icon-arr-right"></span></a></li>
            </ul>
            <p class="guide-bt-main"><a href="<?php bloginfo('url'); ?>/inquiry" title="資料請求・お問い合せ"><span class="icon-arr-right"></span>資料請求・お問い合せ<span class="img"><img src="<?php bloginfo('template_url'); ?>/img/common/guide/guide_img01.png" width="166" height="138" alt="資料請求・お問い合せ"/></span></a></p>
            <div class="tel-box clearfix">
                <p class="tel-number"><span class="icon-free"></span><span class="num">0120-236-221</span><br>
                <span class="sub">土日祝を含む毎日8:30～18:00</span></p>
            </div>
            <ul class="nav_sp_sub">
            	<li><a href="<?php bloginfo('url'); ?>/company" title="会社概要"><span class="icon-arr-right"></span>会社概要</a></li>
                <li><a href="<?php bloginfo('url'); ?>/recruit" title="採用情報"><span class="icon-arr-right"></span>採用情報</a></li>
            </ul>
        </div>
    </nav>
</section>
<!-- SPmenu -->