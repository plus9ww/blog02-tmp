<!doctype html>
<html <? language_attributes(); ?>>
<head>
<meta charset="<? bloginfo('charset'); ?>" />
<meta http-equiv="x-ua-compatible" content="IE=edge">
<!--<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">-->
<meta name="format-detection" content="telephone=no, email=no, address=no">
<title><? wp_title( '|', true, 'right' ); ?></title>
<? wp_head(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css">
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/lightcase.css">
<link href="https://fonts.googleapis.com/css?family=Amiri" rel="stylesheet"> 
<!--[if lt IE 9]>
<script src="<?= get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->
</head>
<body id="header">
<header class="header clearfix" id="js-header">
	<p class="header-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?= get_template_directory_uri(); ?>/common/com_logo.svg" alt="神戸・須磨の会席料理ディナー・ランチと喫茶「花月」"/></a></p>
    <div class="header-subbox clearfix">
        <p class="header-h1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">神戸・須磨の会席料理ディナー・ランチと喫茶。</a></p>
        <nav class="header-nav clearfix">
            <ul>
				<!--<li id="google_translate_element" class="header-nav-google"></li>--><li class="header-nav-lang" >Language<span class="icon-arrow-d"></span><? get_template_part('language'); ?></li><li><a href="<?= home_url(); ?>/faq/">Q&amp;A</a></li><li><a href="<?= home_url(); ?>/inquiry/">お問合せ</a></li>
            </ul>
            <div class="header-tel tel-box">
                <p class="tel-box-main"><span class="icon-tel"></span>078-731-3751</p>
                <p class="tel-box-sub"><span class="space-1">お問合せ時間</span>9:00～21:00</p>
            </div>
        </nav>
    </div>
    <nav class="nav-main">
        <? get_template_part('nav'); ?>
    </nav>
</header>