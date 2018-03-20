<footer class="footer">
<p class="pagetop"><a href="#header"><span><span class="icon-arrow-u"></span>ページトップへ戻る</span></a></p>
	<section class="footer-nv">
    	<div class="footer-nv-left">
        	<div class="footer-nv-head">
        		<h2 class="footer-nv-head-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span class="icon-kagetsu"></span>トップページ</a></h2>
            	<div class="footer-nv-head-bt">Language<span class="icon-arrow-d"></span><? get_template_part('language'); ?></div>
            </div>
            <nav class="footer-nv-sitemap">
            	<ul class="footer-nv-liststyle clearfix">
                	<li>お食事
                    	<ul>
                        	<li><a href="<?= home_url(); ?>/lunch/">ご昼食</a></li>
							<li><a href="<?= home_url(); ?>/dinner/">ご夕食</a></li>
                        </ul>
					</li>
                	<li>ご会食
                    	<ul>
                        	<li><a href="">会合プラン</a></li>
                        	<li><a href="">顔合わせ</a></li>
                        	<li><a href="">観桜会 観月会</a></li>
                        	<li><a href="">句会</a></li>
                        </ul>
					</li>
                	<li>ご宿泊・予約
                    	<ul>
                        	<li><a href="<?= home_url(); ?>/stay/">お部屋</a></li>
                        	<li><a href="">須磨海釣りプラン</a></li>
                        	<li><a href="https://www.yadoken.jp/pg/FrontCtrlShowPlanRecommendation.php?hotel_id=yk103347" target="_blank">ご宿泊予約（外部）</a></li>
                        </ul>
					</li>
                	<li>喫茶
                    	<ul>
                        	<li><a href="">喫茶</a></li>
                        	<li><a href="">アフタヌーンティー</a></li>
                        </ul>
					</li>
                	<li>宅配</li>
                	<li>アクセス・観光
                    	<ul>
                        	<li><a href="<?= home_url(); ?>/access/">アクセス</a></li>
                        	<li><a href="">観光レジャー</a></li>
                        </ul>
					</li>
                </ul>
                <ul class="footer-nv-liststyle2">
                	<li><a href="">施設紹介</a></li>
                    <li>/</li>
                    <li><a href="<?= home_url(); ?>/faq/">Q&amp;A</a></li>
                    <li>/</li>
                    <li><a href="">お知らせ</a></li>
                    <li>/</li>
                    <li><a href="">ブログ</a></li>
                    <li>/</li>
                    <li><a href="<?= home_url(); ?>/privacy/">プライバシー</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer-nv-right">
			<h2 class="footer-map-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?= get_template_directory_uri(); ?>/common/foot_logo.svg" alt="花月"/></a></h2>
            <address class="footer-map-address">〒654-0068<br>神戸市須磨区西須磨字鉄拐７番地</address>
            <div class="footer-tel tel-box">
                <p class="tel-box-main"><span class="icon-tel"></span>078-731-3751</p>
                <p class="tel-box-sub"><span class="space-1">受付時間</span>9:00～19:00</p>
            </div>
            <div class="footer-nv-right-bt">
            	<p><a href="<?= home_url(); ?>/access/">アクセス</a></p>
                <p><a href="<?= home_url(); ?>/inquiry/">お問合せ</a></p>
            </div>
        </div>
	</section>
    <small>(C) 2017 KAGETSU.</small>
</footer>
<? if(is_home()||is_front_page()): ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.10";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<script src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=775&amp;locationId=2542072&amp;lang=ja&amp;rating=true&amp;nreviews=3&amp;writereviewlink=true&amp;popIdx=false&amp;iswide=true&amp;border=true&amp;display_version=2"></script>
<? endif; ?>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'ja', includedLanguages: 'en,zh-CN,zh-TW', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="//webfonts.sakura.ne.jp/js/sakura.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/lightcase.js"></script>
<?php if(!is_page('inquiry')): ?>
<script src="https://maps.google.com/maps/api/js?v=3&sensor=false&region=ja&key=AIzaSyA7cEnBFljgQcP64aqIfm5Q4Wy7wdX-ISY"></script>
<script src="<?= get_template_directory_uri(); ?>/js/map.js"></script>
<? endif; ?>
<? if(is_home()||is_front_page()||is_page('banquet')): ?>
<script src="<?= get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
<? endif; ?>
<script>
	$(function(){
		$('a[data-rel^=lightcase]').lightcase();
		$('.footer-nv-sitemap > ul > li').matchHeight();
		
		$('.goog-te-menu-value > span').on('DOMSubtreeModified propertychange', function() {
			alert('Change!');
		});
		
		<?php if(!is_page('inquiry')): ?>
		mapLordAccess();
		<? endif; ?>
	
	<? if(is_home()||is_front_page()): ?>
		$('.js_main_slid').bxSlider({
			auto: true,
			mode: 'fade',
			pause: 5000
		});

		$('.js_stay_slid').bxSlider({
			auto: true,
			pager: false,
			slideWidth: 350,
			minSlides: 1,
			maxSlides: 3,
			pause: 5000,
			moveSlides: 1,
			slideMargin: 75,
			nextText: '',
			prevText: '',
			nextSelector: "#stay-btn-next",
			prevSelector: "#stay-btn-prev"
		});
	<? endif; ?>
		
		
	<? if(is_home()||is_front_page()||is_page('banquet')): ?>
		$('.js_menu_slid_lunch').bxSlider({
			auto: true,
			pager: false,
			pause: 5000,
			slideWidth: 200,
			minSlides: 3,
			maxSlides: 3,
			moveSlides: 1,
			slideMargin: 10,
			nextText: '',
			prevText: '',
			nextSelector: "#lunch-btn-next",
			prevSelector: "#lunch-btn-prev"
		});

		$('.js_menu_slid_dinner').bxSlider({
			auto: true,
			pager: false,
			pause: 5000,
			slideWidth: 200,
			minSlides: 3,
			maxSlides: 3,
			moveSlides: 1,
			slideMargin: 10,
			nextText: '',
			prevText: '',
			nextSelector: "#dinner-btn-next",
			prevSelector: "#dinner-btn-prev"
		});
	<? endif; ?>
	
	<? if(is_page('introduction')): ?>
		$('.tile1').matchHeight();
		$('.charm-text').matchHeight();
	<? endif; ?>
		
	<? if(is_page('intro')): ?>
		$('a[data-rel^=gallery]').lightcase();
	<? endif; ?>
});
</script>

<? if(is_page('inquiry')): ?>
<script src="<?= get_template_directory_uri(); ?>/js/jquery.ah-placeholder.js"></script>
<script>
$(function(){	
	$('.jq-placeholder').ahPlaceholder({
		placeholderColor : '#666666',
		placeholderAttr  : 'placeholder',
		likeApple        : false
	});
	
	$('form').bind('submit' ,function(){
		$('input').each(function(){
			var val = $(this).val();
			var placeholder = $(this).attr('placeholder');

			if(val == placeholder) {
				$(this).val('');
			}
		});
	});
});
	
document.addEventListener( 'wpcf7mailsent', function( event ) {
    ga( 'send', 'event', 'Contact Form', 'submit' );
}, false );
</script>
<? endif; ?>
<? wp_footer(); ?>
</body>
</html>