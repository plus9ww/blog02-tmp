<nav class="eyecatch-topicPath">
	<ul>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">ホーム</a><span class="icon-arrow-r"></span></li>
		<li><?php
            if(function_exists('bcn_display')) {
            $bcn = bcn_display(true);
            echo mb_ereg_replace( 'li/li', '<span class="icon-arrow-r"></span></li><li>' ,$bcn );
            }
        ?></li>
	</ul>
</nav>