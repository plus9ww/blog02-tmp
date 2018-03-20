<ul>
<? if(!is_home()&&!is_front_page()): ?>
	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">トップ</a></li>
<? endif; ?>
	<li class="nav-main-child" ontouchend=""><span class="nav-main-parent">お食事<span class="icon-arrow-d"></span></span>
		<span class="nav-main-child-box">
			<ul>
				<li class="nav-main-lunch"><a href="<?= home_url(); ?>/lunch/">ご昼食</a></li>
				<li class="nav-main-dinner"><a href="<?= home_url(); ?>/dinner/">ご夕食</a></li>
			</ul>
		</span>
	</li>
	<li class="nav-main-child" ontouchend=""><span class="nav-main-parent">喫 茶<span class="icon-arrow-d"></span></span>
		<span class="nav-main-child-box">
			<ul>
				<li class="nav-main-tea"><a href="<?= home_url(); ?>/tea/#page02">喫 茶</a></li>
				<li class="nav-main-afternoon"><a href="<?= home_url(); ?>/tea/">アフタヌーンティー</a></li>
			</ul>
		</span>
	</li>
	<!--
	<li class="nav-main-child" ontouchend=""><span class="nav-main-parent">ご会食<span class="icon-arrow-d"></span></span>
		<span class="nav-main-child-box">
			<ul>
				<li class="nav-main-tea"><a href="#">会合プラン</a></li>
				<li class="nav-main-after"><a href="#">顔合わせプラン</a></li>
			</ul>
		</span>
	</li>
	<li><a href="#">宅 配</a></li>-->
	<li class="nav-main-child" ontouchend=""><span class="nav-main-parent">ご宿泊・予約<span class="icon-arrow-d"></span></span>
		<span class="nav-main-child-box">
			<ul>
				<li class="nav-main-stay"><a href="<?= home_url(); ?>/stay/">ご宿泊</a></li>
				<!--<li class="nav-main-tea"><a href="#">須磨海釣りプラン</a></li>-->
				<li class="nav-main-reserv"><a href="https://www.yadoken.jp/pg/FrontCtrlShowPlanRecommendation.php?hotel_id=yk103347" target="_blank">宿泊予約</a></li>
			</ul>
		</span>
	</li>
	<li class="nav-main-child" ontouchend=""><span class="nav-main-parent">アクセス・観光<span class="icon-arrow-d"></span></span>
		<span class="nav-main-child-box">
			<ul>
				<li class="nav-main-access"><a href="<?= home_url(); ?>/access/">アクセス</a></li>
				<!--<li class="nav-main-after"><a href="#">観光</a></li>-->
			</ul>
		</span>
	</li>
	<!--<li><a href="#">施設紹介</a></li>-->
</ul>