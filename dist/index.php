<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Merci_Tmp
 * @since Merci　Tmp 1.0
*/
?>
<?php get_header(); ?>

<hr class="line no_display">
<div class="main_visual no_display">

    <div> 
        <div class="pix_diapo">
            <!--<div>
                <a href="https://www.merci-life.jp/sp-01/"><img src="<?php bloginfo('template_url'); ?>/img/slides/top_slide_sp.png"></a>
                <div class="caption elemHover fromLeft">
                    施設内覧会・介護ご相談会のご案内
                </div>
            </div>-->
            <div>
                <img src="<?php bloginfo('template_url'); ?>/img/slides/top_slide01.png" alt="介護付有料老人ホーム メルシー緑が丘">
                <div class="caption elemHover fromLeft">
                    介護付有料老人ホーム メルシー緑が丘
                </div>
            </div>
            
            <div>
                <img src="<?php bloginfo('template_url'); ?>/img/slides/top_slide02.png" alt="介護付有料老人ホーム メルシーますみ">
                <div class="caption elemHover fromLeft">
                    介護付有料老人ホーム メルシーますみ
                </div>
            </div>
            
            <div>
                <img src="<?php bloginfo('template_url'); ?>/img/slides/top_slide03.png" alt="緑豊かな周辺エリア">
                <div class="caption elemHover fromLeft">
                    緑豊かな周辺エリア
                </div>
            </div>
            
            <div>
                <img src="<?php bloginfo('template_url'); ?>/img/slides/top_slide04.png" alt="木漏れ日あふれる気持ちの良いエリア">
                <div class="caption elemHover fromLeft">
                    木漏れ日あふれる気持ちの良いエリア
                </div>
            </div>
            
            <div>
                <img src="<?php bloginfo('template_url'); ?>/img/slides/top_slide05.png" alt="贅沢な空間のロビー">
                <div class="caption elemHover fromLeft">
                    贅沢な空間のロビー
                </div>
            </div>
        </div><!-- #pix_diapo -->
    </div>
</div>

<hr class="line marginB40">

<!--<section class="marginB60 no_display">
<div class="wrap clearfix">
<a href="https://www.merci-life.jp/sp-01/"><img src="<?php bloginfo('template_url'); ?>/img/slides/top_slide_sp_btn.png" title="施設内覧会・介護ご相談会のご案内" alt="施設内覧会・介護ご相談会のご案内" /></a>
</div>
</section>-->

<section class="marginB60 no_display">
    <div class="wrap clearfix">
        <img src="<?php bloginfo('template_url'); ?>/img/top/high-quality_title.png" alt="メルシーグループが提供するハイクオリティなサービス" title="メルシーグループが提供するハイクオリティなサービス" class="title_img marginB20" />
        <div class="service_navi clearfix">
            <a href="<?php bloginfo('url'); ?>/service/medical" class="left" title="医療連携"><img src="<?php bloginfo('template_url'); ?>/img/top/nav2/nav2_01.png" alt="医療連携" /></a>
            <a href="<?php bloginfo('url'); ?>/service/individual" class="left" title="個別対応"><img src="<?php bloginfo('template_url'); ?>/img/top/nav2/nav2_02.png" alt="個別対応" /></a>
            <a href="<?php bloginfo('url'); ?>/service/qol" class="left" title="QOL向上への取組"><img src="<?php bloginfo('template_url'); ?>/img/top/nav2/nav2_03.png" alt="QOL向上への取組" /></a>
            <a href="<?php bloginfo('url'); ?>/service/quality" class="left" title="スタッフ・品質向上"><img src="<?php bloginfo('template_url'); ?>/img/top/nav2/nav2_04.png" alt="スタッフ・品質向上" /></a>
            <a href="<?php bloginfo('url'); ?>/service/recovery" class="left" title="機能回復・身体維持"><img src="<?php bloginfo('template_url'); ?>/img/top/nav2/nav2_05.png" alt="機能回復・身体維持" /></a>
        </div>
    </div>
</section>


<?php
$posts = get_posts('numberposts=5&category=2');
global $post;
?>
<?php if($posts): ?>
<section class="info info_top marginB60">
    <div class="clearfix">
        <div class="info_box">
            <div class="info_title clearfix">
                <img src="<?php bloginfo('template_url'); ?>/img/top/news_title.png" alt="新着情報" class="left marginB10 marginL10" />
                <a href="<?php bloginfo('url'); ?>/new/" class="right" title="新着情報一覧はこちら"><img src="<?php bloginfo('template_url'); ?>/img/top/list_btn.png" alt="新着情報一覧はこちら" class="marginR10 marginB8" /></a>
            </div>
            <div class="info_inner">
                <ul>
                <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
                    <li><p><span><?php the_time('Y.m.d'); ?></span><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p></li>
                <?php endforeach; endif;?>
                </ul>
            </div>
        </div>
        
        <!--
        <div class="info_box">
            <div class="info_title clearfix">
                <img src="<?php bloginfo('template_url'); ?>/img/top/event_title.png" alt="イベント情報" title="イベント情報" class="left marginB10 marginL10" />
                <a href="" class="right"><img src="<?php bloginfo('template_url'); ?>/img/top/list_btn.png" alt="イベント情報一覧はこちら" title="イベント情報一覧はこちら" class="marginR10 marginB8" /></a>
            </div>
            <div class="info_inner">
                <ul>
                    <li><p><span>2015.04.28</span><a href="">ニュースタイトル</a></p></li>
                    <li><p><span>2015.04.28</span><a href="">ニュースタイトル</a></p></li>
                    <li><p><span>2015.04.28</span><a href="">ニュースタイトル</a></p></li>
                    <li><p><span>2015.04.28</span><a href="">ニュースタイトル</a></p></li>
                    <li><p><span>2015.04.28</span><a href="">ニュースタイトル</a></p></li>
                </ul>
            </div>
        </div>
        -->
    </div>
</section>
<?php endif;?>

<section class="marginB60">
    <div class="wrap clearfix">
        <img src="<?php bloginfo('template_url'); ?>/img/top/guidance_title.png" alt="施設案内：24時間365日の安心を提供するメルシーグループの各施設。こだわり抜いた立地や、充実した設備・贅沢な空間でお過ごし頂けます。" class="title_img marginB20" />
        <div class="clearfix">
            <div class="guidance_box">
            <a href="<?php bloginfo('url'); ?>/facility/h_midori" title="大阪府豊中市の高級有料老人ホーム「メルシー緑が丘」。少路駅より徒歩1分。"><img src="<?php bloginfo('template_url'); ?>/img/h_midori.png" alt="" width="300" class="left" /></a>
            </div>
            <div class="guidance_box">
            <a href="<?php bloginfo('url'); ?>/facility/h_masumi" title="大阪府池田市の高級有料老人ホーム「メルシーますみ」。阪急池田駅より徒歩6分。"><img src="<?php bloginfo('template_url'); ?>/img/h_masumi.png" alt="" width="300" class="left" /></a>
            </div>
            <div class="guidance_box">
            <a href="<?php bloginfo('url'); ?>/facility/g_midori" title="グループホーム・メルシー緑が丘"><img src="<?php bloginfo('template_url'); ?>/img/g_midori.png" alt="" width="300" class="left" /></a>
            </div>
            <div class="guidance_box">
            <a href="<?php bloginfo('url'); ?>/facility/h_higashi" title="介護付有料老人ホーム・メルシー東戸塚"><img src="<?php bloginfo('template_url'); ?>/img/h_higashi.png" alt="" width="300" class="left" /></a>
            </div>
            <div class="guidance_box">
            <a href="<?php bloginfo('url'); ?>/facility/h_kaori" title="介護付有料老人ホーム・かおりの里"><img src="<?php bloginfo('template_url'); ?>/img/h_kaori.png" alt="" width="300" class="left" /></a>
            </div>
            <div class="guidance_box">
            <a href="<?php bloginfo('url'); ?>/facility/i_hikari" title="医療法人 良善会 ひかり病院"><img src="<?php bloginfo('template_url'); ?>/img/i_hikari.png" alt="" width="300" class="left" /></a>
            </div>
        </div>
    </div>
</section>

<section class="marginB60 guide">
    <div class="wrap guide-main">
        <p class="guide-bt-main"><a href="<?php bloginfo('url'); ?>/inquiry" title="資料請求・お問い合せ"><span class="icon-arr-right"></span>資料請求・お問い合せ<span class="img"><img src="<?php bloginfo('template_url'); ?>/img/common/guide/guide_img01.png" width="166" height="138" alt="資料請求・お問い合せ"/></span></a></p>
        
        <div class="guide-bt clearfix">
          <p class="guide-bt-left"><a href="<?php bloginfo('url'); ?>/facility/#fieldtrip" title="施設見学について"><span class="icon-arr-right"></span><span>施設見学</span>はこちら</a></p>
            <p class="guide-bt-right"><a href="<?php bloginfo('url'); ?>/facility/#experience" title="体験入居について"><span class="icon-arr-right"></span><span>体験入居</span>はこちら</a></p>
        </div>
        
        <div class="tel-box clearfix">
            <h2 class="tel-box-left"><span>ご相談・資料請求・ご見学など</span><br>
お電話でのお問い合せは</h2>
            <div class="tel-box-right clearfix">
                <h3 class="tel-title"><img src="<?php bloginfo('template_url'); ?>/img/common/guide/guide_merci.png" width="148" height="42" alt="介護付有料老人ホーム「メルシー緑が丘」"/></h3>
                <p class="tel-number"><span class="icon-free"></span><span class="num">0120-236-221</span><br>
<span class="sub">土日祝を含む毎日8:30～18:00</span></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>