<? get_header(); ?>
<? get_template_part( 'topicpath', 'common' ); ?>
<section class="wrapper category-blog">
	<section class="titleBox">
		<h1 class="titleBox__h1 f30"><? single_cat_title(); ?></h1>
		<div class="titleBox__infoBox">
			<p class="titleBox__description f14 h175"><?= category_description(); ?></p>
		</div>
	</section>
	<section class="contents clearfix">
		<section class="contents__left" id="js__blogMain">
			<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="articleList">
				<a href="<? the_permalink(); ?>" title="<? the_title(); ?>">
					<h2 class="articleList__title"><? the_title(); ?></h2>
					<p class="articleList__text"><?= get_post_meta($post->ID, _aioseop_description, true); ?></p>
				</a>
			</article>
			<? endwhile; endif; ?>
			<? if(function_exists('wp_pagenavi')) : wp_pagenavi(); endif; ?>
		</section>
		
		<? get_template_part( 'sidebar'); ?>
	</section>
</section>
<? get_footer(); ?>