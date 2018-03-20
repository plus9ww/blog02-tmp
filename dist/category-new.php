<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Merci_Tmp
 * @since Merci　Tmp 1.0
 */
 ?>
<?php get_header(); ?>

<hr class="line marginB30">

<!-- ぱんくず -->
<section class="marginB30">
    <div class="wrap clearfix">
    <p><?php
        if(function_exists('bcn_display')) {
            $bcn = bcn_display(true);
            $bcn = '<li>'.$bcn.'</li>';
            $bcn = mb_ereg_replace( "li/li", "</li><li>" ,$bcn );
            echo $bcn;
        }
        ?>
    </p>
    </div>
</section>
<!-- /ぱんくず -->


<section class="marginB60 info">
    <div class="wrap clearfix" id="mainbox_menu">


    <!-- main -->
    <div class="main_box blogCat">
    <h1 class="marginB20">新着情報</h1>
    <div class="info_box">
        <div class="info_inner">
            <ul>
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
                	<li><p><span><?php the_time('Y.m.d'); ?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p></li>
		<?php endwhile; ?>
		<?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>
            </ul>
            <?php if(function_exists('wp_pagenavi')) : wp_pagenavi(); endif; ?>
        </div>
    </div>
    </div>
    <!-- /main -->

<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>