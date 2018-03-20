<?php
/*
Template Name: 施設ページテンプレート
*/
 ?>
<?php get_header(); ?>

<hr class="line">

<!-- ぱんくず -->
        <section class="breadcrumb">
            <p><span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="介護付有料老人ホーム・グループホームのメルシー." href="https://www.merci-life.jp" class="home"><span class="no_display">トップページ</span><span class="icon-home pc_no_display"></span></a></span> &gt;
            <?php
			if(function_exists('bcn_display')) {
				$bcn = bcn_display(true);
				echo $bcn;
			}
			?></p>
        </section>
<!-- /ぱんくず -->



<?php while ( have_posts() ) : the_post(); ?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>

<!--
<section class="marginB60 guide">
    <div class="wrap clearfix">
        <a href="<?php bloginfo('url'); ?>/facility/#experience" class="left"><img src="<?php bloginfo('template_url'); ?>/img/common/guide_btn_01.png" alt="体験入居について" title="体験入居について" /></a>
        <a href="<?php bloginfo('url'); ?>/facility/#fieldtrip" class="left"><img src="<?php bloginfo('template_url'); ?>/img/common/guide_btn_02.png" alt="施設見学について" title="施設見学について" /></a>
        <a href="<?php bloginfo('url'); ?>/inquiry" class="left"><img src="<?php bloginfo('template_url'); ?>/img/common/guide_btn_03.png" alt="資料請求はこちら" title="資料請求はこちら" /></a>
    </div>
</section>
-->

<?php
$fFlg = 0;
$fImg = 'guide_merci.png';
$fTel = '0120-236-221';
$fSum = '';

if(is_page('h_midori') || is_parent_slug() === 'h_midori' || is_page('h_midori_summary')){
	$fFlg = 1;
	$fImg = 'guide_h_midori.png';
	$fTel = '0120-236-221';
	$fSum = 'h_midori_summary/';
}elseif(is_page('h_masumi') || is_parent_slug() === 'h_masumi' || is_page('h_masumi_summary')){
	$fFlg = 1;
	$fImg = 'guide_h_masumi.png';
	$fTel = '0120-117-839';
	$fSum = 'h_masumi_summary/';
}
?>

<section class="marginB60 guide">
	<div class="wrap guide-main">
    	<p class="guide-bt-main"><a href="<?php bloginfo('url'); ?>/inquiry" title="資料請求・お問い合せ"><span class="icon-arr-right"></span>資料請求・お問い合せ<span class="img"><img src="<?php bloginfo('template_url'); ?>/img/common/guide/guide_img01.png" width="166" height="138" alt="資料請求・お問い合せ"/></span></a></p>
        
        
        <? if($fFlg): ?>
        
        <div class="guide-bt3 clearfix">
			<p class="guide-bt3-left"><a href="<?php bloginfo('url'); ?>/facility/<?= $fSum; ?>" title="料金表 / 施設概要"><span class="icon-arr-right"></span>料金表 / 施設概要</a></p>
			<p class="guide-bt3-left2"><a href="<?php bloginfo('url'); ?>/facility/#fieldtrip" title="施設見学について"><span class="icon-arr-right"></span><span>施設見学</span></a></p>
            <p class="guide-bt3-right"><a href="<?php bloginfo('url'); ?>/facility/#experience" title="体験入居について"><span class="icon-arr-right"></span><span>体験入居</span></a></p>
        </div>
        
        <? else: ?>
        
        <div class="guide-bt clearfix">
			<p class="guide-bt-left"><a href="<?php bloginfo('url'); ?>/facility/#fieldtrip" title="施設見学について"><span class="icon-arr-right"></span><span>施設見学</span>はこちら</a></p>
            <p class="guide-bt-right"><a href="<?php bloginfo('url'); ?>/facility/#experience" title="体験入居について"><span class="icon-arr-right"></span><span>体験入居</span>はこちら</a></p>
        </div>
        
        <? endif; ?>
        
        <div class="tel-box clearfix">
        	<h2 class="tel-box-left"><span>ご相談・資料請求・ご見学など</span><br>
お電話でのお問い合せは</h2>
            <div class="tel-box-right clearfix">
            	<h3 class="tel-title"><img src="<?php bloginfo('template_url'); ?>/img/common/guide/<?= $fImg; ?>" width="148" height="42" alt="介護付有料老人ホーム「メルシー緑が丘」"/></h3>
        		<p class="tel-number"><span class="icon-free"></span><span class="num"><?= $fTel; ?></span><br>
<span class="sub">土日祝を含む毎日8:30～18:00</span></p>
            </div>
        </div>
    </div>
</section>

<? if($fFlg): ?>
<section class="fguide">
	<p class="fguide-close">×</p>
	<div class="wrap fguide-main clearfix">
    	<div class="fguide-left clearfix">
        	<h3 class="tel-title"><img src="<?php bloginfo('template_url'); ?>/img/common/guide/<?= $fImg; ?>" width="148" height="42" alt="介護付有料老人ホーム「メルシー緑が丘」"/></h3>
            <p class="tel-number"><span class="icon-free"></span><span class="num"><?= $fTel; ?></span><br>
<span class="sub">土日祝を含む毎日8:30～18:00</span></p>
        </div>
        <p class="fguide-left2"><a href="<?php bloginfo('url'); ?>/facility/<?= $fSum; ?>" title="料金表 / 施設概要"><span class="icon-arr-right"></span>料金表 / 施設概要</a>
        </p>
        <p class="fguide-right">
        	<a href="https://www.merci-life.jp/inquiry" title="資料請求はこちら"><span class="icon-arr-right"></span>資料請求・<br>
お問い合せ<span class="img"><img src="<?php bloginfo('template_url'); ?>/img/common/guide/guide_img01.png" width="166" height="138" alt="資料請求はこちら"/></span></a>
        </p>
    </div>
</section>
<? endif; ?>

<?php get_footer(); ?>