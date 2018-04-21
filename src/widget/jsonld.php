<?
$image_id = get_post_thumbnail_id();
$image = wp_get_attachment_image_src($image_id, true);
if ($image) {
  $image_url = $image[0];
} else {
  $image_url = get_stylesheet_directory_uri().'/images/blog_noimage.jpg';
} ?>
<script type="application/ld+json">{"@context": "http://schema.org", "@type": "BlogPosting", "mainEntityOfPage":{"@type": "WebPage", "@id": "<? the_permalink(); ?>"}, "headline": "<? the_title(); ?>", "datePublished": "<?=get_the_time('c'); ?>", "dateModified": "<?=get_the_modified_time('c'); ?>", "description": "<?=get_post_meta($post->ID, _aioseop_description, true); ?>", "image":{"@type": "ImageObject", "url": "<?=$image_url;?>", "width": 1200, "height": 600}, "author": [{"@type": "Person", "name": "<? bloginfo('name'); ?>", "description":"<? bloginfo('description'); ?>"},{"@type": "thing", "name":"<? bloginfo('name'); ?>", "sameas":"<? bloginfo('name'); ?>", "url":"<?=esc_url( home_url( '/' ) ); ?>"}], "publisher":{"@type": "Organization", "name": "<? bloginfo('name'); ?>", "description":"<? bloginfo('description'); ?>", "logo":{"@type": "ImageObject", "url": "<?=get_stylesheet_directory_uri(); ?>/images/logo.png", "width": 276, "height": 48}}}</script>