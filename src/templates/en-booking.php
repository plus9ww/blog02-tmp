<?php
/**
 * Template Name: 宿泊ページ-英語
 */
 ?>

<!doctype html>
<html <? language_attributes(); ?>>
<head>
<meta charset="<? bloginfo('charset'); ?>" />
<meta http-equiv="x-ua-compatible" content="IE=edge">
<!--<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">-->
<meta name="format-detection" content="telephone=no, email=no, address=no">
<title><? wp_title( '|', true, 'right' ); ?></title>
<? wp_head(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/en-style.css">
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/lightcase.css">
<link href="https://fonts.googleapis.com/css?family=Amiri" rel="stylesheet"> 
<!--[if lt IE 9]>
<script src="<?= get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	
<header class="header clearfix" id="js-header">
	<p class="header-logo-lang-booking"><a href="<?= home_url(); ?>/en/"><img src="<?= get_template_directory_uri(); ?>/common/com_logo.svg" alt="神戸・須磨の会席料理ディナー・ランチと喫茶「花月」"/></a></p>
</header>

<section class="eyecatch faq" data-stellar-background-ratio="0.3">
	<div class="eyecatch-box">
		<h1 class="eyecatch-title">Reservation</h1>
		<nav class="eyecatch-topicPath">
			<ul>
				<li><a href="<?= home_url(); ?>/en/" title="花月" rel="home">Home</a><span class="icon-arrow-r"></span></li><li><span property="itemListElement" typeof="ListItem"><span property="name">Reservation</span><meta property="position" content="1"></span></li>
			</ul>
		</nav>
	</div>
</section>
	
<? while ( have_posts() ) : the_post(); ?>
	<section class="lang-booking">
		<? remove_filter ('the_content', 'wpautop'); ?>
		<? the_content(); ?>
	</section>
<? endwhile; ?>
	
<footer class="footer">
	<p class="pagetop"><a href="#header"><span><span class="icon-arrow-u"></span>scroll to top</span></a></p>
	<section class="footer-nv">
    	<div class="footer-nv-left">
        	<div class="footer-nv-head">
        		<h2 class="footer-nv-head-title"><a href="<?= home_url(); ?>/#googtrans(en)"><span class="icon-kagetsu"></span>Top Page</a></h2>
            	<div class="footer-nv-head-bt">Language<span class="icon-arrow-d"></span><? get_template_part('language'); ?></div>
            </div>
            <nav class="footer-nv-sitemap">
            	<ul class="footer-nv-liststyle clearfix">
                	<li>Meals
                    	<ul>
                        	<li><a href="<?= home_url(); ?>/lunch/#googtrans(en)">Lunch</a></li>
							<li><a href="<?= home_url(); ?>/dinner/#googtrans(en)">Dinner</a></li>
                        </ul>
					</li><!--
                	<li>Group Dining
                    	<ul>
                        	<li><a href="">Packages</a></li>
                        	<li><a href="">Pre-engagement gatherings</a></li>
                        	<li><a href="">Cherry blossoms/full moon parties</a></li>
                        	<li><a href="">Haiku parties</a></li>
                        </ul>
					</li>-->
                	<li>Accommodation<!--/Reservation-->
                    	<ul>
                        	<li><a href="<?= home_url(); ?>/stay/#googtrans(en)">Guest rooms</a></li>
                        	<!--<li><a href="">Suma Fishing Package</a></li>-->
                        	<li><a href="https://www.yadoken.jp/pg/FrontCtrlShowPlanRecommendation.php?hotel_id=yk103347" target="_blank">Reservation (outside)</a></li>
                        </ul>
					</li><!--
                	<li>Tea Break
                    	<ul>
                        	<li><a href="">Tea Break</a></li>
                        	<li><a href="">Afternoon tea</a></li>
                        </ul>
					</li>
                	<li>Delivery</li>-->
                	<li> Access<!--/Sightseeing-->
                    	<ul>
                        	<li><a href="<?= home_url(); ?>/access/#googtrans(en)">Access</a></li>
                        	<!--<li><a href="">Sightseeing/leisure activities</a></li>-->
                        </ul>
					</li>
                </ul>
                <ul class="footer-nv-liststyle2">
                	<!--<li><a href="">Our facilities</a></li>
                    <li>/</li>-->
                    <li><a href="<?= home_url(); ?>/faq/#googtrans(en)">Q&amp;A</a></li>
                    <!--<li>/</li>
                    <li><a href="">News</a></li>
                    <li>/</li>
                    <li><a href="">Blog</a></li>-->
                    <li>/</li>
                    <li><a href="<?= home_url(); ?>/privacy/#googtrans(en)">Privacy Policy</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer-nv-right">
        	<h2 class="footer-map-title"><img src="<?= get_template_directory_uri(); ?>/common/foot_logo.svg" alt="花月"/></h2>
            <address class="footer-map-address">7 Aza Testukai, Nishisuma, Suma-ku, Kobe City 654-0068</address>
            <div class="footer-tel tel-box">
                <p class="tel-box-main"><span class="icon-tel"></span>078-731-3751</p>
                <p class="tel-box-sub"><span class="space-1">Hours</span>9:00～21:00</p>
            </div>
            <div class="footer-nv-right-bt">
            	<p><a href="<?= home_url(); ?>/access/#googtrans(en)">Access</a></p>
                <p><a href="<?= home_url(); ?>/inquiry/#googtrans(en)">Inquiry</a></p>
            </div>
        </div>
	</section>
    <small>(C) 2017 KAGETSU.</small>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/lightcase.js"></script>
<script type="text/javascript">
$(function(){
	$('a[data-rel^=lightcase]').lightcase();
	$('.footer-nv-sitemap > ul > li').matchHeight();
});
</script>
<? wp_footer(); ?>
</body>
</html>