<?
global $thistitle,$thisdescription;
$thistitle = '｜大阪府豊中市の介護付老人ホーム「メルシー緑が丘」';
?>
<? get_header("midori"); ?>

<h1 class="page__title"><? single_cat_title(); ?></h1>

<? get_template_part( 'topicpath'); ?>


<section class="page__contents page__contents--2column">


    <!-- main -->
    <div class="main_box blogCat">
    <div class="info_box">
        <div class="info_inner">
            <ul>
		<? if ( have_posts() ) : ?>
		<? while ( have_posts() ) : the_post(); ?>
                	<li><p><span><? the_time('Y.m.d'); ?></span><a href="<? the_permalink(); ?>"<? if(in_category('4')&&in_category('5')): ?> target="_blank"<? endif; ?>><? the_title(); ?></a></p></li>
		<? endwhile; ?>
		<? else : ?>
        <? get_template_part( 'content', 'none' ); ?>
        <? endif; ?>
            </ul>
            <? if(function_exists('wp_pagenavi')) : wp_pagenavi(); endif; ?>
        </div>
    </div>
    </div>
    <!-- /main -->

<? get_sidebar("midori"); ?>

</section>

<? get_footer("midori"); ?>