<?php
/*
Template Name: 会社概要
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

<?php get_footer(); ?>