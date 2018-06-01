<?php
/*
YARPP Template: Thumbnails
Description: Requires a theme which supports post thumbnails
Author: mitcho (Michael Yoshitaka Erlewine)
*/ ?>
<?php if (have_posts()):?>
<ul class="titleList__ul">
	<?php while (have_posts()) : the_post(); ?>
	<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
	 <?php endwhile; ?>
</ul>
<?php endif; ?>