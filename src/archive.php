<? get_header(); ?>
	<section id="primary" class="site-content">
		<div id="content" role="main">

		<? if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'twentytwelve' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentytwelve' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentytwelve' ) ) . '</span>' );
					else :
						_e( 'Archives', 'twentytwelve' );
					endif;
				?></h1>
			</header><!-- .archive-header -->

			<?
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			endwhile;

			//twentytwelve_content_nav( 'nav-below' );
			?>

		<? else : ?>
			<? get_template_part( 'content', 'none' ); ?>
		<? endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->
<? get_footer(); ?>