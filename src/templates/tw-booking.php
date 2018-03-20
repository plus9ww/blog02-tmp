<?php
/**
 * Template Name: 宿泊ページ-繁体
 */
 ?>
<!doctype html>
<html lang="zh-TW">
<head>
<meta charset="<? bloginfo('charset'); ?>" />
<meta http-equiv="x-ua-compatible" content="IE=edge">
<!--<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">-->
<meta name="format-detection" content="telephone=no, email=no, address=no">
<title><? wp_title( '|', true, 'right' ); ?></title>
<? wp_head(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/zh-style.css">
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/lightcase.css">
<link href="https://fonts.googleapis.com/css?family=Amiri" rel="stylesheet"> 
<!--[if lt IE 9]>
<script src="<?= get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	
<header class="header clearfix" id="js-header">
	<p class="header-logo-lang-booking"><a href="<?= home_url(); ?>/tw/"><img src="<?= get_template_directory_uri(); ?>/common/com_logo.svg" alt="神戸・須磨の会席料理ディナー・ランチと喫茶「花月」"/></a></p>
</header>

<section class="eyecatch faq" data-stellar-background-ratio="0.3">
	<div class="eyecatch-box">
		<h1 class="eyecatch-title">住宿預約</h1>
		<nav class="eyecatch-topicPath">
			<ul>
				<li><a href="<?= home_url(); ?>/tw/" title="花月" rel="home">Home</a><span class="icon-arrow-r"></span></li><li><span property="itemListElement" typeof="ListItem"><span property="name">住宿預約</span><meta property="position" content="1"></span></li>
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
        		<h2 class="footer-nv-head-title"><a href="http://fanyi.baidu.com/transpage?query=<?= home_url(); ?>/&from=jp&to=cht&source=url&render=1###"><span class="icon-kagetsu"></span>主頁</a></h2>
            	<div class="footer-nv-head-bt">Language<span class="icon-arrow-d"></span><? get_template_part('language'); ?></div>
            </div>
            <nav class="footer-nv-sitemap">
            	<ul class="footer-nv-liststyle clearfix">
                	<li>餐食
                    	<ul>
                        	<li><a href="http://fanyi.baidu.com/transpage?query=<?= home_url(); ?>/lunch/&from=jp&to=cht&source=url&render=1###">午餐</a></li>
							<li><a href="http://fanyi.baidu.com/transpage?query=<?= home_url(); ?>/dinner/&from=jp&to=cht&source=url&render=1###">晚餐</a></li>
                        </ul>
					</li><!--
                	<li>會食
                    	<ul>
                        	<li><a href="">會合方案</a></li>
                        	<li><a href="">會合</a></li>
                        	<li><a href="">觀櫻會 觀月會</a></li>
                        	<li><a href="">點評會</a></li>
                        </ul>
					</li>-->
                	<li> 住宿・預約<!--/Reservation-->
                    	<ul>
                        	<li><a href="http://fanyi.baidu.com/transpage?query=<?= home_url(); ?>/stay/&from=jp&to=cht&source=url&render=1###"> 房間</a></li>
                        	<!--<li><a href="">須磨海濱垂釣方案</a></li>-->
                        	<li><a href="https://www.yadoken.jp/pg/FrontCtrlShowPlanRecommendation.php?hotel_id=yk103347" target="_blank">住宿預約（外部）</a></li>
                        </ul>
					</li><!--
                	<li>飲茶
                    	<ul>
                        	<li><a href="">飲茶</a></li>
                        	<li><a href="">下午茶</a></li>
                        </ul>
					</li>
                	<li>配送</li>-->
                	<li>路線・觀光<!--/Sightseeing-->
                    	<ul>
                        	<li><a href="http://fanyi.baidu.com/transpage?query=<?= home_url(); ?>/access/&from=jp&to=cht&source=url&render=1###">路線</a></li>
                        	<!--<li><a href="">觀光休閑</a></li>-->
                        </ul>
					</li>
                </ul>
                <ul class="footer-nv-liststyle2">
                	<!--<li><a href="">設施介紹</a></li>
                    <li>/</li>-->
                    <li><a href="http://fanyi.baidu.com/transpage?query=<?= home_url(); ?>/faq/&from=jp&to=cht&source=url&render=1###">Q&A</a></li>
                    <!--<li>/</li>
                    <li><a href="">通告</a></li>
                    <li>/</li>
                    <li><a href="">博客</a></li>-->
                    <li>/</li>
                    <li><a href="http://fanyi.baidu.com/transpage?query=<?= home_url(); ?>/privacy/&from=jp&to=cht&source=url&render=1###">個人隱私</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer-nv-right">
        	<h2 class="footer-map-title"><img src="<?= get_template_directory_uri(); ?>/common/foot_logo.svg" alt="花月"/></h2>
            <address class="footer-map-address">〒654-0068<br>神戶市須磨區西須磨字鉄拐７番地</address>
            <div class="footer-tel tel-box">
                <p class="tel-box-main"><span class="icon-tel"></span>078-731-3751</p>
                <p class="tel-box-sub"><span class="space-1">受理時間</span>9:00～21:00</p>
            </div>
            <div class="footer-nv-right-bt">
            	<p><a href="http://fanyi.baidu.com/transpage?query=<?= home_url(); ?>/access/&from=jp&to=cht&source=url&render=1###">路線</a></p>
                <p><a href="http://fanyi.baidu.com/transpage?query=<?= home_url(); ?>/inquiry/&from=jp&to=cht&source=url&render=1###">咨詢</a></p>
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