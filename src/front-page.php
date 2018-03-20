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
<link href="https://fonts.googleapis.com/css?family=Amiri" rel="stylesheet"> 
<!--[if lt IE 9]>
<script src="<?= get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->
</head>
<body id="header">
<section class="top-firstview">
    <header class="header header-top clearfix">
    	<div class="header-h1box clearfix">
            <h1 class="header-logo-top"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?= get_template_directory_uri(); ?>/common/top_logo.svg" alt="神戸・須磨の会席料理ランチ・ディナーと喫茶「花月」"/></a></h1>
            <h1 class="header-h1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">神戸・須磨の会席料理ディナー・ランチと喫茶。</a></h1>
        </div>
        <nav class="header-nav clearfix">
            <ul>
				<!--<li id="google_translate_element" class="header-nav-google"></li>--><li class="header-nav-lang" >Language<span class="icon-arrow-d"></span><? get_template_part('language'); ?></li><li><a href="<?= home_url(); ?>/faq/">Q&amp;A</a></li><li><a href="<?= home_url(); ?>/inquiry/">お問合せ</a></li>
            </ul>
            <div class="header-tel tel-box">
                <p class="tel-box-main"><span class="icon-tel"></span>078-731-3751</p>
                <p class="tel-box-sub"><span class="space-1">お問合せ時間</span>9:00～21:00</p>
            </div>
        </nav>
    </header>
    
    <section class="top_slid">
    	<ul class="js_main_slid">
            <li style="background-image:url(<?= get_template_directory_uri(); ?>/images/top_test01.jpg)"></li>
            <li style="background-image:url(<?= get_template_directory_uri(); ?>/images/top_test05.jpg)"></li>
            <li style="background-image:url(<?= get_template_directory_uri(); ?>/images/top_test02.jpg)"></li>
            <li style="background-image:url(<?= get_template_directory_uri(); ?>/images/top_test03.jpg)"></li>
            <li style="background-image:url(<?= get_template_directory_uri(); ?>/images/top_test04.jpg)"></li>
        </ul>
    </section>
    
    <nav class="nav-main nav-main-top">
    	<? get_template_part('nav'); ?>
    </nav>
</section>

<section class="toppage">
	<!--
	<section class="cont bgf">
        <section class="top-banner row">
            <p><a href="#"><img src="<?= get_template_directory_uri(); ?>/images/com_bn_m_01.jpg" alt=""/></a></p>
            <p><a href="#"><img src="<?= get_template_directory_uri(); ?>/images/com_bn_m_02.jpg" alt=""/></a></p>
            <p><a href="#"><img src="<?= get_template_directory_uri(); ?>/images/com_bn_m_03.jpg" alt=""/></a></p>
            <p><a href="#"><img src="<?= get_template_directory_uri(); ?>/images/com_bn_m_04.jpg" alt=""/></a></p>
        </section>
        <section class="top-news row">
            <div class="news-list top-news-list">
                <div class="news-list-head">
                   <h2 class="news-list-title">新着情報</h2>
                   <p class="news-list-bt"><a href="../info.html">お知らせ一覧<span class="icon-arrow-r"></span></a></p>
                </div>
                
                <dl class="news-list-main">
                    <dt>2017/02/10</dt>
                    <dd><a href="#">最新の「お知らせ」がここに表示されます。</a></dd>
                    <dt>2017/02/10</dt>
                    <dd><a href="#">最新の「お知らせ」がここに表示されます。</a></dd>
                    <dt>2017/02/10</dt>
                    <dd><a href="#">最新の「お知らせ」がここに表示されます。</a></dd>
                </dl>
            </div>
            <div class="top-news-tripadvisor">
                <div id="TA_selfserveprop775" class="TA_selfserveprop"><ul id="6dvicthx33ac" class="TA_links v0emPoYld"><li id="gRsQ3Z" class="tSyKR37t"><a target="_blank" href="https://www.tripadvisor.jp/"><img src="https://www.tripadvisor.jp/img/cdsi/img2/branding/150_logo_jp-11900-2.png" alt="TripAdvisor"/></a></li></ul></div>
            </div>
        </section>
    </section>
    -->
    <section class="top-meal cont">
    	<div class="row">
            <div class="top-meal-box">
                <h2 class="top-meal-title">お食事</h2>
                <p class="top-meal-text">但馬や山陰、淡路島などの地場野菜に、瀬戸内海産をはじめとした海の幸。季節の風とともに届けられる旬の恵みを、磨き抜かれた技と繊細な味付けで仕上げる花月の味。</p>
            </div>
            
			<? get_template_part( 'widget/slide', 'meal' ); ?>
			
        </div>
    </section>
    
    <section class="top-tea cont bgf">
    	<section class="row">
            <h3 class="top-tea-title">お食事以外に、喫茶のみのご利用も可能です。 </h3>
            <div class="top-tea-main">
                <div class="top-tea-cont top-tea-tea">
                    <a href="<?= home_url(); ?>/tea/#page02">
                        <div class="top-tea-box">
                            <h3 class="top-tea-box-title">喫茶</h3>
                            <p class="top-tea-box-text">11:30～17:00</p>

                        </div>
                    </a>
                </div>
                <div class="top-tea-cont top-tea-after">
                    <a href="<?= home_url(); ?>/tea/">
                        <div class="top-tea-box">
                            <h3 class="top-tea-box-title">アフタヌーンティー</h3>
                            <p class="top-tea-box-text">14:30～17:00</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </section>
	
    <section class="top-stay cont">
    	<h2 class="top-stay-title">ご宿泊</h2>
        <div class="top-stay-slide">
            <div class="top-stay-slide-wrap">
                <ul class="js_stay_slid">
                    <li class="top-stay-slide-box">
                        <a href="<?= home_url(); ?>/stay/#room1" title="牡丹の間">
                            <p class="top-stay-slide-img"><img src="<?= get_template_directory_uri(); ?>/images/top_stay_slide01.jpg" alt="牡丹の間"/></p>
                            <div class="top-stay-slide-main">
                                <h3 class="top-stay-slide-title">牡丹の間</h3>
                                <p class="top-stay-slide-text">90度見渡せる窓からは、山々の迫る緑や風光明媚な須磨海浜公園まで望むことができます。</p>
                                <p class="top-stay-slide-capa">4～6名</p>
                            </div>
                        </a>
                    </li>
                    <li class="top-stay-slide-box">
                        <a href="<?= home_url(); ?>/stay/#room2" title="桜の間">
                            <p class="top-stay-slide-img"><img src="<?= get_template_directory_uri(); ?>/images/top_stay_slide02.jpg" alt="桜の間"/></p>
                            <div class="top-stay-slide-main">
                                <h3 class="top-stay-slide-title">桜の間</h3>
                                <p class="top-stay-slide-text">39畳もあるガラス張りの居間には、息を飲むパノラマ絶景が待ち受けます。</p>
                                <p class="top-stay-slide-capa">15～20名</p>
                            </div>
                        </a>
                        
                    </li>
                    <li class="top-stay-slide-box">
                        <a href="<?= home_url(); ?>/stay/#room3" title="桃の間">
                            <p class="top-stay-slide-img"><img src="<?= get_template_directory_uri(); ?>/images/top_stay_slide03.jpg" alt="桃の間"/></p>
                            <div class="top-stay-slide-main">
                                <h3 class="top-stay-slide-title">桃の間</h3>
                                <p class="top-stay-slide-text">どこか懐かしさを漂わせる落ち着ける8畳間。少人数のご家族やカップルにオススメ。</p>
                                <p class="top-stay-slide-capa">2～3名</p>
                            </div>
                        </a>
                        
                    </li>
                    <li class="top-stay-slide-box">
                        <a href="<?= home_url(); ?>/stay/#room4" title="菊の間">
                            <p class="top-stay-slide-img"><img src="<?= get_template_directory_uri(); ?>/images/top_stay_slide04.jpg" alt="菊の間"/></p>
                            <div class="top-stay-slide-main">
                                <h3 class="top-stay-slide-title">菊の間</h3>
                                <p class="top-stay-slide-text">やさしい光が差し込む室内テラス付き。12畳ある居間はご家族でも満足の広さです。</p>
                                <p class="top-stay-slide-capa">2～4名</p>
                            </div>
                        </a>
                        
                    </li>
                    <li class="top-stay-slide-box">
                        <a href="<?= home_url(); ?>/stay/#room5" title="梅の間">
                            <p class="top-stay-slide-img"><img src="<?= get_template_directory_uri(); ?>/images/top_stay_slide05.jpg" alt="梅の間"/></p>
                            <div class="top-stay-slide-main">
                                <h3 class="top-stay-slide-title">梅の間</h3>
                                <p class="top-stay-slide-text">格子つきのガラス引き戸や天井の梁など、昭和初期の建築技法が各所に光ります。</p>
                                <p class="top-stay-slide-capa">1～2名</p>
                            </div>
                        </a>
                        
                    </li>
                    <li class="top-stay-slide-box">
                        <a href="<?= home_url(); ?>/stay/#room6" title="松の間">
                            <p class="top-stay-slide-img"><img src="<?= get_template_directory_uri(); ?>/images/top_stay_slide06.jpg" alt="松の間"/></p>
                            <div class="top-stay-slide-main">
                                <h3 class="top-stay-slide-title">松の間</h3>
                                <p class="top-stay-slide-text">ガラス戸の設えやテーブルに椅子、化粧台まですべてが昭和初期のアンティークです。</p>
                                <p class="top-stay-slide-capa">2～3名</p>
                            </div>
                        </a>
                        
                    </li>
                    <li class="top-stay-slide-box">
                        <a href="<?= home_url(); ?>/stay/#room7" title="竹の間">
                            <p class="top-stay-slide-img"><img src="<?= get_template_directory_uri(); ?>/images/top_stay_slide07.jpg" alt="竹の間"/></p>
                            <div class="top-stay-slide-main">
                                <h3 class="top-stay-slide-title">竹の間</h3>
                                <p class="top-stay-slide-text">“竹の間”と称するとおり、天井の梁など至るところに日本家屋ならではの竹が使われています。</p>
                                <p class="top-stay-slide-capa">1～2名</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="top-stay-slide-bt top-stay-slide-prev" id="stay-btn-prev"><span class="icon-arrow-l"></span></div>
        <div class="top-stay-slide-bt top-stay-slide-next" id="stay-btn-next"><span class="icon-arrow-r"></span></div>
    </section>
    <!--
    <section class="top-intro cont">
    	<div class="row">
            <div class="top-intro-main">
                <h2 class="top-intro-title">昭和初頭建設された<br>神戸市の元迎賓館</h2>
                <p class="top-intro-text">昭和13年、神戸市の迎賓館として建設された“須磨観光ハウス”が今の花月になりました。スイスの山小屋をイメージした建物は、外壁に木骨をあしらうハーフティンバー様式を用いるなど、目を見張る建築技術とセンスで建築百選にも選ばれています。</p>
                <p class="top-intro-bt"><a href="#">施設のご紹介</a></p>
            </div>
        </div>
    </section>
    
    <section class="cont bgf">
    	<section class="top-info row">
        	<section class="top-info-left">
            	<div class="blog-list top-blog-list">
                    <div class="blog-list-head">
                       <h2 class="blog-list-title">スタッフブログ</h2>
                       <p class="blog-list-bt"><a href="../info.html">ブログ一覧<span class="icon-arrow-r"></span></a></p>
                    </div>
                    
                    <div class="blog-list-main">
                        <p><a href="#"><strong>2017/02/10</strong>最新の「お知らせ」がここに表示されます。</a></p>
                        <p><a href="#"><strong>2017/02/10</strong>最新の「お知らせ」がここに表示されます。</a></p>
                        <p><a href="#"><strong>2017/02/10</strong>最新の「お知らせ」がここに表示されます。</a></p>
                    </div>
                </div>
                <div class="insta clearfix">
                    <div class="insta__box insta__box3" id="user1">
                        <div class="insta__user">
                            <p class="insta__user__img"><a href="#" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/top_insta.jpg" width="53" height="53" alt="須磨観光ハウス 味と宿 花月"/></a></p>
                            <h3 class="insta__user__name">須磨観光ハウス 味と宿 花月</h3>
                            <p class="insta__user__id"><a href="#" target="_blank">@suma_kagetsu</a></p>
                            <p class="insta__user__link"><a href="#" target="_blank"><span class="icon-insta"></span><span class="icon-arrow-r"></span></a></p>
                        </div>
                        <ul class="insta__img clearfix">
                            <li><a href="#" target="_blank" style="background-image:url(<?= get_template_directory_uri(); ?>/images/top_insta_test01.jpg)"></a></li>
                            <li><a href="#" target="_blank" style="background-image:url(<?= get_template_directory_uri(); ?>/images/top_insta_test02.jpg)"></a></li>
                            <li><a href="#" target="_blank" style="background-image:url(<?= get_template_directory_uri(); ?>/images/top_insta_test03.jpg)"></a></li>
                            <li><a href="#" target="_blank" style="background-image:url(<?= get_template_directory_uri(); ?>/images/top_insta_test04.jpg)"></a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="top-info-right">
            <div class="fb-page" data-href="https://www.facebook.com/suma.kagetsu.sakura" data-tabs="timeline" data-width="500" data-height="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/suma.kagetsu.sakura" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/suma.kagetsu.sakura">須磨観光ハウス　味と宿　花月</a></blockquote></div>
            </section>
        </section>
    </section>
    -->
    <section class="top-map cont">
    	<div class="row">
        	<div class="top-map-box">
            	<h2 class="top-map-title"><img src="<?= get_template_directory_uri(); ?>/common/top_logo.svg" alt="須磨観光ハウス 味と宿 花月"/></h2>
                <address class="top-map-address">〒654-0068<br>神戸市須磨区西須磨字鉄拐７番地</address>
                <p class="top-map-bt"><a href="<?= home_url(); ?>/access/" title="花月へのアクセス">花月へのアクセス<span class="icon-arrow-r"></span></a></p>
            </div>
        	<div id="js-map" class="top-map-main"></div>
        </div>
    </section>
</section>

<? get_footer(); ?>