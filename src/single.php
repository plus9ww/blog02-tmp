<? get_header(); ?>
<? get_template_part( 'topicpath', 'common' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="wrapper category-blog">
	<section class="titleBox">
		<? $cat = get_the_category(); ?>
		<p class="titleBox__cat titleBox__cat--pink f11"><?= get_cat_name($cat[0]->term_id); ?></p>
		<h1 class="titleBox__h1 f18 h160"><? the_title(); ?></h1>
		<div class="titleBox__infoBox">
			<p class="titleBox__description f13 h175"><?= get_post_meta($post->ID, _aioseop_description, true); ?></p>
			<div class="titleBox__subBox">
				<p class="titleBox__view f12"><span class="icon-eye titleBox__icon-eye f13"></span><?= number_format(post_custom('views')) ?></p>
				<p class="titleBox__date f12">最終更新 - <time class="updated" datetime="<? the_modified_date('Y/m/d') ?>"><? the_modified_date('Y/m/d') ?></time></p>
			</div>
		</div>
	</section>
	<section class="contents clearfix">
		<section class="contents__left" id="js__blogMain">
			<?
			global $page;
			$pageMap = my_custom_toc();
			?>
			<section class="toc">
				<p class="toc__title f11"><strong>この記事の目次</strong></p>
				<?= $pageMap; ?>
			</section>
			<section class="blogBox">
				<?php the_content(); ?>
            	<?php wp_link_pages(); ?>
			</section>
		</section>
		<? get_template_part( 'sidebar'); ?>
	</section>
</section>
<?php endwhile; ?>
<?php get_template_part( 'footer'); ?>