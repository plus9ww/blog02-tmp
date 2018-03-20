<? get_header(); ?>

<hr class="line no_display">

<ul class="main_visual clearfix">
    <li><a href="<? bloginfo('url'); ?>/midori" title="大阪府豊中市の高級有料老人ホーム「メルシー緑が丘」。少路駅より徒歩1分。"><img src="<? bloginfo('template_url'); ?>/img/slides/top_slide01.png" alt="介護付有料老人ホーム メルシー緑が丘"></a></li>
    <li><a href="<? bloginfo('url'); ?>/masumi" title="大阪府池田市の高級有料老人ホーム「メルシーますみ」。阪急池田駅より徒歩6分。"><img src="<? bloginfo('template_url'); ?>/img/slides/top_slide02.png" alt="介護付有料老人ホーム メルシーますみ"></a></li>
    <li><img src="<? bloginfo('template_url'); ?>/img/slides/top_slide03.png" alt="緑豊かな周辺エリア"></li>
    <li><img src="<? bloginfo('template_url'); ?>/img/slides/top_slide04.png" alt="木漏れ日あふれる気持ちの良いエリア"></li>
    <li><img src="<? bloginfo('template_url'); ?>/img/slides/top_slide05.png" alt="贅沢な空間のロビー"></li>
</ul>

<hr class="line marginB40">

<section class="marginB60">
    <div class="wrap clearfix">
        <img src="<? bloginfo('template_url'); ?>/img/top/guidance_title.png" alt="施設案内：24時間365日の安心を提供するメルシーグループの各施設。こだわり抜いた立地や、充実した設備・贅沢な空間でお過ごし頂けます。" class="title_img marginB20" />
        <div class="clearfix">
            <div class="guidance_box">
            <a href="<? bloginfo('url'); ?>/midori" title="大阪府豊中市の高級有料老人ホーム「メルシー緑が丘」。少路駅より徒歩1分。"><img src="<? bloginfo('template_url'); ?>/img/h_midori.png" alt="" width="300" class="left" /></a>
            </div>
            <div class="guidance_box">
            <a href="<? bloginfo('url'); ?>/masumi" title="大阪府池田市の高級有料老人ホーム「メルシーますみ」。阪急池田駅より徒歩6分。"><img src="<? bloginfo('template_url'); ?>/img/h_masumi.png" alt="" width="300" class="left" /></a>
            </div>
            <div class="guidance_box">
            <a href="<? bloginfo('url'); ?>/facility/g_midori" title="グループホーム・メルシー緑が丘"><img src="<? bloginfo('template_url'); ?>/img/g_midori.png" alt="" width="300" class="left" /></a>
            </div>
            <div class="guidance_box">
            <a href="<? bloginfo('url'); ?>/facility/h_higashi" title="介護付有料老人ホーム・メルシー東戸塚"><img src="<? bloginfo('template_url'); ?>/img/h_higashi.png" alt="" width="300" class="left" /></a>
            </div>
            <div class="guidance_box">
            <a href="<? bloginfo('url'); ?>/facility/h_kaori" title="介護付有料老人ホーム・かおりの里"><img src="<? bloginfo('template_url'); ?>/img/h_kaori.png" alt="" width="300" class="left" /></a>
            </div>
            <div class="guidance_box">
            <a href="<? bloginfo('url'); ?>/facility/i_hikari" title="医療法人 良善会 ひかり病院"><img src="<? bloginfo('template_url'); ?>/img/i_hikari.png" alt="" width="300" class="left" /></a>
            </div>
        </div>
    </div>
</section>

<?
$posts = get_posts('numberposts=5&category=2');
global $post;
?>
<? if($posts): ?>
<section class="info info_top marginB60">
    <div class="clearfix">
        <div class="info_box">
            <div class="info_title clearfix">
                <img src="<? bloginfo('template_url'); ?>/img/top/news_title.png" alt="新着情報" class="left marginB10 marginL10" />
                <a href="<? bloginfo('url'); ?>/new/" class="right" title="新着情報一覧はこちら"><img src="<? bloginfo('template_url'); ?>/img/top/list_btn.png" alt="新着情報一覧はこちら" class="marginR10 marginB8" /></a>
            </div>
            <div class="info_inner">
                <ul>
                <? if($posts): foreach($posts as $post): setup_postdata($post); ?>
                    <li><p><span><? the_time('Y.m.d'); ?></span><a href="<? the_permalink(); ?>" title="<? the_title(); ?>"><? the_title(); ?></a></p></li>
                <? endforeach; endif;?>
                </ul>
            </div>
        </div>
    </div>
</section>
<? wp_reset_postdata(); ?>
<? endif;?>



<section class="top__info clearfix">
	<section class="top__news">
        <div class="list__titleBox facility__news__titleBox">
            <h3 class="list__title">新着情報</h3>
            <p class="list__bt"><a href="<? bloginfo('url'); ?>/new/" class="right" title="新着情報一覧はこちら"><span class="icon-arr-right"></span>新着情報一覧へ</a></p>
        </div>
   	  <section class="news">
		<?
        $posts = get_posts('numberposts=5&category=2');
        global $post;
        ?>
		<? if($posts): foreach($posts as $post): setup_postdata($post); ?>
        	<article class="news__inner">
            	<a href="<? the_permalink(); ?>" title="<? the_title(); ?>">
            		<p class="day"><span class="num"><? the_time('Y.m.d'); ?></span><span class="fa">メルシー共通</span></p>
                	<h2><?= s_title($post->post_title,10); ?></h2>
                </a>
            </article>
		<? wp_reset_postdata(); ?>
        <? endforeach; endif;?>
        </section>
    </section>
    <section class="banner__space1 top__ban">
    	<div class="banner__box banner__box--img">
        	<a href="#">
            	<p class="banner__img"><img src="../img/top/top_img01.jpg" alt=""/></p>
            	<h3 class="banner__title">採用情報</h3>
            </a>
        </div>
      <div class="banner__box banner__box--img">
        	<a href="#">
            	<p class="banner__img"><img src="../img/midori/h_midori_img06.jpg" alt=""/></p>
            	<h3 class="banner__title">ご利用者の声</h3>
            </a>
        </div>
        <div class="banner__box banner__box--bkt">
        	<a href="#">
            	<p class="banner__img"><img src="../img/common/com_logo_biken.png" alt=""/></p>
            </a>
        </div>
    </section>
</section>


<section class="blog__new">
	<section class="blog__new__box">
    	<div class="list__titleBox facility__news__titleBox">
            <h3 class="list__title">スタッフブログ</h3>
            <p class="list__bt"><a href="#"><span class="icon-arr-right"></span>ブログ記事一覧へ</a></p>
        </div>
        <div class="wrap clearfix">
            <article class="blog__new__inner">
                <a href="#">
                    <p class="img"><img src="../img/top/top_test.jpg" alt=""/></p>
                    <div class="blog__new__main">
                        <p class="day"><span class="num">2016.05.29</span><span class="fa">ますみ</span></p>
                        <h2>メルシーますみがモデル施設に選定されました</h2>
                    </div>
                </a>
            </article>
            <article class="blog__new__inner">
                <a href="#">
                    <p class="img"><img src="../img/top/top_test.jpg" alt=""/></p>
                    <div class="blog__new__main">
                        <p class="day"><span class="num">2016.05.29</span><span class="fa">ますみ</span></p>
                        <h2>メルシーますみがモデル施設に選定されました</h2>
                    </div>
                </a>
            </article>
            <article class="blog__new__inner">
                <a href="#">
                    <p class="img"><img src="../img/top/top_test.jpg" alt=""/></p>
                    <div class="blog__new__main">
                        <p class="day"><span class="num">2016.05.29</span><span class="fa">ますみ</span></p>
                        <h2>メルシーますみがモデル施設に選定されました</h2>
                    </div>
                </a>
            </article>
            <article class="blog__new__inner">
                <a href="#">
                    <p class="img"><img src="../img/top/top_test.jpg" alt=""/></p>
                    <div class="blog__new__main">
                        <p class="day"><span class="num">2016.05.29</span><span class="fa">ますみ</span></p>
                        <h2>メルシーますみがモデル施設に選定されました</h2>
                    </div>
                </a>
            </article>
        </div>
    </section>
</section>



<section class="marginB60 guide">
    <div class="wrap guide-main">
        <p class="guide-bt-main"><a href="<? bloginfo('url'); ?>/inquiry" title="資料請求・お問い合せ"><span class="icon-arr-right"></span>資料請求・お問い合せ<span class="img"><img src="<? bloginfo('template_url'); ?>/img/common/guide/guide_img01.png" width="166" height="138" alt="資料請求・お問い合せ"/></span></a></p>
        
        <div class="guide-bt clearfix">
          <p class="guide-bt-left"><a href="<? bloginfo('url'); ?>/facility/#fieldtrip" title="施設見学について"><span class="icon-arr-right"></span><span>施設見学</span>はこちら</a></p>
            <p class="guide-bt-right"><a href="<? bloginfo('url'); ?>/facility/#experience" title="体験入居について"><span class="icon-arr-right"></span><span>体験入居</span>はこちら</a></p>
        </div>
        
        <div class="tel-box clearfix">
            <h2 class="tel-box-left"><span>ご相談・資料請求・ご見学など</span><br>
お電話でのお問い合せは</h2>
            <div class="tel-box-right clearfix">
                <h3 class="tel-title"><img src="<? bloginfo('template_url'); ?>/img/common/guide/guide_merci.png" width="148" height="42" alt="介護付有料老人ホーム「メルシー緑が丘」"/></h3>
                <p class="tel-number"><span class="icon-free"></span><span class="num">0120-236-221</span><br>
<span class="sub">土日祝を含む毎日8:30～18:00</span></p>
            </div>
        </div>
    </div>
</section>

<? get_footer(); ?>