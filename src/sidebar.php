<?
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Merci_Tmp
 * @since Merci　Tmp 1.0
 */
?>
<aside class="sideNv">
    <div class="sideNvMain">
    
    	<? if ( in_category( '3' ) || is_category( '3' )): ?>
        <div class="sideBlogNew">
        <?php
		$infoargs = Array(
					'cat' => 3,
					'posts_per_page' => 6
				);
		$the_query = new WP_Query($infoargs);
		if($the_query -> have_posts()):while($the_query -> have_posts()): $the_query -> the_post();
		
			if(in_category( 'blog-midori' )){
				$facilityName = '緑が丘';
				$facilityClss = 'midori';
			}else if(in_category( 'blog-masumi' )){
				$facilityName = 'ますみ';
				$facilityClss = 'masumi';
			}else{
				$facilityName = 'メルシー全体';
				$facilityClss = 'sogo';
			}
		?>
        
            <article class="sideBlogNew__inner">
                <a href="<? the_permalink(); ?>" title="<? the_title(); ?>">
                    <p class="img"><? if(has_post_thumbnail()) :?><? the_post_thumbnail('blog_ss'); ?><? else: ?><img src="<? bloginfo('template_url'); ?>/img/common/blog_dummy.jpg" alt=""/><? endif; ?></p>
                    <p class="day"><span class="num"><? the_time('Y.m.d'); ?></span><span class="fa <?= $facilityClss; ?>"><?= $facilityName; ?></span></p>
                <h2><?= s_title($post->post_title,24); ?></h2>
                </a>
            </article>
        <?php
		endwhile; endif;
		wp_reset_postdata();
		?>
        </div>
        <? endif; ?>
    
    	<? if ( is_category('2') || in_category('2')): ?>
        <div class="sideBlogNew">
        <?php
		$infoargs = Array(
					'cat' => 2,
					'posts_per_page' => 6
				);
		$the_query = new WP_Query($infoargs);
		if($the_query -> have_posts()):while($the_query -> have_posts()): $the_query -> the_post();
		
			if(in_category( 'new-midori' ) && in_category( 'new-masumi' )){
				$facilityName = 'メルシー全体';
				$facilityClss = 'sogo';
			}else if(in_category( 'new-midori' )){
				$facilityName = '緑が丘';
				$facilityClss = 'midori';
			}else if(in_category( 'new-masumi' )){
				$facilityName = 'ますみ';
				$facilityClss = 'masumi';
			}else{
				$facilityName = 'メルシー全体';
				$facilityClss = 'sogo';
			}
		?>
        
            <article class="sideBlogNew__inner">
                <a href="<? the_permalink(); ?>" title="<? the_title(); ?>" class="noimg">
                    <p class="day"><span class="num"><? the_time('Y.m.d'); ?></span><span class="fa <?= $facilityClss; ?>"><?= $facilityName; ?></span></p>
                <h2><?= s_title($post->post_title,24); ?></h2>
                </a>
            </article>
        <?php
		endwhile; endif;
		wp_reset_postdata();
		?>
        </div>
        <? endif; ?>
    
		<p class="marginB10"><a href="<?= home_url(); ?>/midori" title="大阪府豊中市の高級有料老人ホーム「メルシー緑が丘」。少路駅より徒歩1分。"><img src="<? bloginfo('template_url'); ?>/img/h_midori.png" alt="" width="300"></a></p>
		<p class="marginB30"><a href="<?= home_url(); ?>/masumi" title="大阪府池田市の高級有料老人ホーム「メルシーますみ」。阪急池田駅より徒歩6分。"><img src="<? bloginfo('template_url'); ?>/img/h_masumi.png" alt="" width="300"></a></p>
        <div class="sidePageNv">
            <nav class="sidePageNv__nv">
                <ul>
                    <li><a href="<?= home_url(); ?>/group" title="メルシー理念">メルシー理念<span class="icon-arr-right"></span></a></li>
                    <li><a href="<?= home_url(); ?>/facility" title="施設一覧">施設一覧<span class="icon-arr-right"></span></a></li>
                    <li><a href="<?= home_url(); ?>/voice" title="ご利用者の声">ご利用者の声<span class="icon-arr-right"></span></a></li>
                    <li><a href="<?= home_url(); ?>/company" title="会社概要">会社概要<span class="icon-arr-right"></span></a></li>
                    <li><a href="<?= home_url(); ?>/recruit" title="採用情報">採用情報<span class="icon-arr-right"></span></a></li>
                    <li><a href="<?= home_url(); ?>/download" title="資料ダウンロード">資料ダウンロード<span class="icon-arr-right"></span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</aside>
<!--
<div class="right_box no_display" id="sidemenu">
                
<div class="hq_box marginB30">
    <img src="<? bloginfo('template_url'); ?>/img/common/side/side_hq_title.png" alt="メルシーグループのサービス" />
    <div class="hq_menu_box clearfix">
        <a href="<? bloginfo('url'); ?>/service/medical" title="医療連携"><img src="<? bloginfo('template_url'); ?>/img/common/side/side_hq_01.png" alt="医療連携" /></a>
        <a href="<? bloginfo('url'); ?>/service/individual" title="個別対応"><img src="<? bloginfo('template_url'); ?>/img/common/side/side_hq_02.png" alt="個別対応" /></a>
        <a href="<? bloginfo('url'); ?>/service/qol" title="QOL向上への取り組み"><img src="<? bloginfo('template_url'); ?>/img/common/side/side_hq_03.png" alt="QOL向上への取り組み" /></a>
        <a href="<? bloginfo('url'); ?>/service/quality" title="スタッフ・品質向上"><img src="<? bloginfo('template_url'); ?>/img/common/side/side_hq_04.png" alt="スタッフ・品質向上" /></a>
        <a href="<? bloginfo('url'); ?>/service/recovery" title="機能回復・身体維持"><img src="<? bloginfo('template_url'); ?>/img/common/side/side_hq_05.png" alt="機能回復・身体維持" /></a>
    </div>
</div>


<div class="guide_box">
    <a href="<? bloginfo('url'); ?>/facility/#experience" title="体験入居について"><img src="<? bloginfo('template_url'); ?>/img/common/side/side_guide_01.png" alt="体験入居について" class="marginB10" /></a>
    <a href="<? bloginfo('url'); ?>/facility/#fieldtrip" title="施設見学について"><img src="<? bloginfo('template_url'); ?>/img/common/side/side_guide_02.png" alt="施設見学について" class="marginB10" /></a>
    <a href="<? bloginfo('url'); ?>/inquiry" title="資料請求・お問い合わせ"><img src="<? bloginfo('template_url'); ?>/img/common/side/side_guide_03.png" alt="資料請求はこちら" class="marginB10" /></a>
    <a href="<? bloginfo('url'); ?>/inquiry" title="資料請求・お問い合わせ"><img src="<? bloginfo('template_url'); ?>/img/common/side/side_guide_04.png" alt="お問い合わせはこちらから" class="marginB10" /></a>
</div>
    
</div>
-->