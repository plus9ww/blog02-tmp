<? get_header(); ?>
<? while ( have_posts() ) : the_post(); ?>
	<section class="eyecatch  <?= $post->post_name; ?>" data-stellar-background-ratio="0.3">
		<div class="eyecatch-box">
			<h1 class="eyecatch-title"><? the_title(); ?></h1>
			<? get_template_part('topicpath'); ?>
		</div>
	</section>
	<section class="<?= $post->post_name; ?>">
		<?php remove_filter ('the_content', 'wpautop'); ?>
		<?php the_content(); ?>
	</section>
<? endwhile; ?>
<? get_footer(); ?>