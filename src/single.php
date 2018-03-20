<?
/**
 * @package WordPress
 * @subpackage Merci_Tmp
 * @since Merci　Tmp 1.0
 */
 ?>
 
<?
global $thistitle,$thisdescription;
if ( in_category('4') && in_category('5') ) {
	$tmpText = "";
	$thistitle = '｜大阪の介護付老人ホーム「メルシー」';
} elseif ( in_category('6') || in_category('4') ) {
	$tmpText = "midori";
	$thistitle = '｜大阪府豊中市の介護付老人ホーム「メルシー緑が丘」';
} else if ( in_category('7') || in_category('5') ) {
	$tmpText = "masumi";
	$thistitle = '｜大阪府池田市の介護付老人ホーム「メルシーますみ」';
} else {
	$tmpText = "";
	$thistitle = '｜大阪の介護付老人ホーム「メルシー」';
}
?>
 
 
<? get_header($tmpText); ?>

<? get_template_part( 'topicpath'); ?>


<section class="page__contents page__contents--2column">
        <section class="main">


    <!-- main -->
    <div class="main_box">
		<? while ( have_posts() ) : the_post(); ?>
            <article class="blogBox1">
                <h1 class="f20 marginB20"><? the_title(); ?></h1>
                <p class="f14h160 marginB20 day"><? the_time('Y/m/d'); ?></p>
                <div class="f16h160 text"><? the_content(); ?></div>
            </article>
        <? endwhile; ?>
    </div>
    <!-- /main -->

	</section>
        
	<? get_sidebar($tmpText); ?>
    
</section>

<? get_footer($tmpText); ?>