<nav class="topicpath">
	<ul class="f11 h120">
		<li><span class="icon-home"></span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?= esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?= esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a><span class="icon-arrow-r"></span></li>
		<li><?php
            if(function_exists('bcn_display')) {
            $bcn = bcn_display(true);
            echo mb_ereg_replace( 'li/li', '<span class="icon-arrow-r"></span></li><li>' ,$bcn );
            }
        ?></li>
	</ul>
</nav>