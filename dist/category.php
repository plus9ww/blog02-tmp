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
 
<div id="contents">

<?php if(!is_mobile()): ?>
	<h2 class="textCenter marginB15"><img src="<?php bloginfo('template_url'); ?>/images/news_img01.jpg" alt="トピックス &amp; ニュース"/></h2>
<?php else: ?>
	<h2 class="textCenter marginB15"><img src="<?php bloginfo('template_url'); ?>/images/sp/news_img01.jpg" alt="トピックス &amp; ニュース"/></h2>
<?php endif; ?>

<div id="contentsMain" class="clearfix">

<?php if(!is_mobile()): ?>
<?php get_sidebar(); ?>
<?php endif; ?>

<div id="main">
<div id="blog">

<nav class="topicpath">
<ul>
<li><?php
if(function_exists('bcn_display')) {
	$bcn = bcn_display(true);
	echo mb_ereg_replace( "li/li", "</li><li>" ,$bcn );
}
?></li>
</ul>
</nav>

<?php
$slug = $post->post_name;
if ( in_category('2') ) {
	include(TEMPLATEPATH . '/category/new.php');
} else {
	include(TEMPLATEPATH . '/info.php');
}
?>

</div><!--/top-->
</div><!--/ main -->
</div><!-- /contentsMain -->
</div><!-- /contents -->

<?php get_footer(); ?>