<?
/**
 * Template Name: ますみ1カラム
 */
?>
<? get_header("masumi"); ?>

<? while ( have_posts() ) : the_post(); ?>

	<h1 class="page__title"><? the_title(); ?></h1>
    
    <? get_template_part( 'topicpath'); ?>
    
    <section class="page__contents">
    
    	<?php remove_filter ('the_content', 'wpautop'); ?>
        <? the_content(); ?>
        
    </section>
    
<? endwhile; ?>

<? get_template_part( 'guide', 'masumi' ); ?>

<? get_footer("masumi"); ?>