<?php
/**
 * @package WordPress
 * @subpackage Merci_Tmp
 * @since Merci　Tmp 1.0
 */
?>
<div id="page-top">
   <p><a id="move-page-top">▲</a></p>
</div>
<footer>
    <hr class="line">
    <div class="foot_menu">
        <div class="wrap clearfix">
            <div class="foot_menu_inner footNvMain">
                <ul>
                    <li class="nv"><a href="<?php bloginfo('url'); ?>/service" title="サービス内容">サービス内容</a>
                        <ul>
                        <li><a href="<?php bloginfo('url'); ?>/service/medical" title="医療連携">医療連携</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/service/individual" title="個別対応">個別対応</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/service/qol" title="QOL向上への取組">QOL向上への取組</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/service/quality" title="スタッフ・品質向上">スタッフ・品質向上</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/service/recovery" title="機能回復・身体維持">機能回復・身体維持</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <div class="foot_menu_inner footNvMain">
                <ul>
                    <li class="nv"><a href="<?php bloginfo('url'); ?>/facility/#facility01" title="介護付有料老人ホーム">介護付有料老人ホーム</a>
                        <ul>
                        <li><a href="<?php bloginfo('url'); ?>/facility/h_midori" title="メルシー緑が丘">メルシー緑が丘</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/facility/h_masumi" title="メルシーますみ">メルシーますみ</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/facility/h_higashi" title="メルシー東戸塚">メルシー東戸塚</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/facility/h_kaori" title="かおりの里">かおりの里</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <div class="foot_menu_inner footNvMain">
                <ul>
                    <li class="nv"><a href="<?php bloginfo('url'); ?>/facility/#facility02" title="グループホーム">グループホーム</a>
                        <ul>
                        <li><a href="<?php bloginfo('url'); ?>/facility/g_midori" title="メルシー緑が丘">メルシー緑が丘</a></li>
                        </ul>
                    </li>
                    <li class="nv"><a href="<?php bloginfo('url'); ?>/facility/#facility03" title="長期療養型医療施設">長期療養型医療施設</a>
                        <ul>
                        <li><a href="<?php bloginfo('url'); ?>/facility/i_hikari" title="ひかり病院">ひかり病院</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <div class="foot_menu_inner">
                <ul>
                <li><a href="<?php bloginfo('url'); ?>/voice" title="みなさまの声">みなさまの声</a></li>
                <li><a href="<?php bloginfo('url'); ?>/qa" title="よくある質問（Q&amp;A）">よくある質問（Q&amp;A）</a></li>
                <li><a href="<?php bloginfo('url'); ?>/company" title="会社概要">会社概要</a></li>
                <li><a href="<?php bloginfo('url'); ?>/about" title="プライバシー・ポリシー">プライバシー・ポリシー</a></li>
                <li><a href="<?php bloginfo('url'); ?>/inquiry" title="お問い合わせ">お問い合わせ</a></li>
                <li><a href="<?php bloginfo('url'); ?>/recruit" title="採用情報">採用情報</a></li>
                </ul>
            </div>
        
        </div>
    
        <div class="foot_menu_bottom">
            <div class="wrap clearfix">
                <div class="foot_menu_bottom_inner">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class=""><img src="<?php bloginfo('template_url'); ?>/img/common/foot_logo.png" alt="介護付有料老人ホーム・グループホームのメルシー" title="介護付有料老人ホーム・グループホームのメルシー" /></a>
                    <p class="marginT30">〒560-0004 大阪府豊中市少路1丁目7番21号    TEL.06-4865-5001　FAX.06-4865-6101</p>
                </div>
            </div>
        </div>
    
    </div>
    <hr class="line">

    <div class="group">
        <div class="wrap clearfix">
            <a href="https://www.seijukai.jp/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/common/logo_seijukai.png" alt="医療法人 聖授会" title="医療法人 聖授会" /></a>
            <a href="https://www.bikentechno.co.jp/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/common/logo_bikentechno.png" alt="株式会社ビケンテクノ" title="株式会社ビケンテクノ" /></a>
            <a href="http://midori.seijukai.jp/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/common/logo_zaitaku.png" alt="緑・在宅クリニック" title="緑・在宅クリニック" /></a>
        </div>
    </div>

    <div class="address">
        <div class="wrap">
            <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">© 2012 BIKENTECHNO CORPORATION LTD.</a></p>
        </div>
    </div>

</footer>        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php if(is_home()): ?>
	<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery.min.js'></script>
	<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery.mobile-1.0rc2.customized.min.js'></script>
	<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js'></script>
	<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery.hoverIntent.minified.js'></script>
	<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/diapo.js'></script>
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/to-top.js"></script>
	<script>$(function(){ $('.pix_diapo').diapo(); });</script>
<?php else: ?>
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/to-top.js"></script>
	<?php if(is_page('facility') || is_parent_slug() === 'facility'): ?>
	<script src="<?php bloginfo('template_url'); ?>/js/lightbox.js"></script>
	<?php endif; ?>
<?php endif; ?>

<? if(is_page('h_midori') || is_parent_slug() === 'h_midori' || is_page('h_midori_summary') || is_page('h_masumi') || is_parent_slug() === 'h_masumi' || is_page('h_masumi_summary')): ?>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.matchHeight.js"></script>
<script>
var closebt = 1;

$(function(){
	$('.tile').matchHeight();
});
$(window).scroll(function() {
	var base = $('.guide');
	var ffix = $('.fguide');
	
	base.each( function() {
		if($(this).css("display") == 'block'){
			if($(window).scrollTop() + $(window).height() <= getY($(this)) && window.matchMedia('screen and (min-width:768px)').matches && closebt) {
				ffix.fadeIn();
			}else{
				ffix.fadeOut();
			}
		}
	});
	
	$(".fguide-close").click(function(){
		closebt = 0;
		ffix.fadeOut();
	});
});
</script>
<?php endif; ?>

<? if(is_page('company') || is_parent_slug() === 'company'): ?>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.matchHeight.js"></script>
<script>
$(function(){
	$('.tile1 .left').matchHeight();
	$('.tile2 .left').matchHeight();
	$('.tile3').matchHeight();
});
</script>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>