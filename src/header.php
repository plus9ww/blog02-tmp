<!doctype html>
<html lang="ja">
<head>
<meta charset="<? bloginfo('charset'); ?>" />
<meta http-equiv="x-ua-compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<meta name="format-detection" content="telephone=no, email=no, address=no">
<title><? wp_title( '|', true, 'right' ); ?></title>
<? wp_head(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css">
<!--[if lt IE 9]>
<script src="<?= get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->
<? get_template_part( 'widget/tag', 'head' ); ?>
<? if(is_single()): ?>
	<? get_template_part( 'widget/jsonld'); ?>
<? endif; ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
	 (adsbygoogle = window.adsbygoogle || []).push({
		  google_ad_client: "ca-pub-1665016553315279",
		  enable_page_level_ads: true
	 });
</script>
</head>
<body>
<header>
	<section class="header">
		<h1 class="header__h1 f16 h120"><a href="<?= esc_url( home_url( '/' ) ); ?>" title="<?= esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">住宅設備のススメ</a></h1>
	</section>
</header>