<?php
/**
 * @package WordPress
 * @subpackage Merci_Tmp
 * @since Merci　Tmp 1.0
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


<section class="marginB60 info">
    <div class="wrap clearfix" id="mainbox_menu">


    <!-- main -->
    <div class="main_box">
		<?php while ( have_posts() ) : the_post(); ?>
            <article class="blogBox1">
                <h1 class="f20 marginB20"><?php the_title(); ?></h1>
                <p class="f14h160 marginB20 day"><?php the_time('Y/m/d'); ?></p>
                <div class="f16h160 text"><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    </div>
    <!-- /main -->

<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>