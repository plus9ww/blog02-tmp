<?
global $thistitle,$thisdescription;
$thistitle = '｜大阪の介護付老人ホーム「メルシー」';
?>
<? get_header(); ?>

<h1 class="page__title"><? single_cat_title(); ?></h1>

<? get_template_part( 'topicpath'); ?>


<section class="page__contents page__contents--2column">


    <!-- main -->
    <div class="main_box blogCat">
    <div class="info_box">
        <div class="info_inner">
            <section class="news">
			<? if ( have_posts() ) : ?>
			<? while ( have_posts() ) : the_post(); ?>
            <?
                if(in_category( 'new-midori' ) && in_category( 'new-masumi' )){
                    $facilityName = 'メルシー全体';
                    $facilityClss = 'sogo';
                }else if(in_category( 'new-midori' )){
                    $facilityName = '介護付有料老人ホーム　メルシー緑が丘';
                    $facilityClss = 'midori';
                }else if(in_category( 'new-masumi' )){
                    $facilityName = '介護付有料老人ホーム　ますみ';
                    $facilityClss = 'masumi';
                }else if(in_category( 'new-kaori' )){
                    $facilityName = '介護付有料老人ホーム　かおりの里';
                    $facilityClss = 'kaori';
                }else{
                    $facilityName = 'メルシー全体';
                    $facilityClss = 'sogo';
                }
            ?>
                <article class="news__inner">
                    <a href="<? the_permalink(); ?>" title="<? the_title(); ?>">
                        <p class="day"><span class="num"><? the_time('Y.m.d'); ?></span><span class="fa <?= $facilityClss; ?>"><?= $facilityName; ?></span></p>
                        <h2><?= s_title($post->post_title,32); ?></h2>
                    </a>
                </article>
            <?php
            endwhile; endif;
            wp_reset_postdata();
            ?>
            </section>
            <? if(function_exists('wp_pagenavi')) : wp_pagenavi(); endif; ?>
        </div>
    </div>
    </div>
    <!-- /main -->

<? get_sidebar(); ?>

</section>

<? get_footer(); ?>