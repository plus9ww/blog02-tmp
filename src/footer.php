<footer class="footer">
	<section class="footer__main">
		<nav class="footer__nav">
			<ul>
				<li><a href="<?= home_url(); ?>/inquiry/" title="お問合せ">お問合せ</a></li>
				<li><a href="<?= home_url(); ?>/privacy/" title="プライバシー">プライバシー</a></li>
				<li><a href="<?= esc_url( home_url( '/' ) ); ?>" title="<?= esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">トップページ</a></li>
			</ul>
		</nav>
		<small class="footer__copy">(C) 2018 住宅設備のススメ.</small>
	</section>
</footer>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
</body>
<? wp_footer(); ?>
</html>