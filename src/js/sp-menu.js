$(function(){	
	//spメニュー
	var $menubt = $('#js-sp-bt');
	var $body =  $('body');
	$menubt.sidr({
		name: 'js-sp-menu',
		side : 'right',
		onOpen: function() {
			currentScroll = $(window).scrollTop();
			$body.css({
				position: 'fixed',
				width: '100%',
				top: -1 * currentScroll
			});
			$('#js-sp-menu-bg').css({ display: 'block' });
				
			$menubt.css({
				transform:'translateX(-260px)',
				transition:'transform .3s'
			});
		},
		onClose: function() {
			//bodyに追加したstyleを削除
			$body.attr('style', '');
			//scroll位置を調整
			$('html, body').prop({scrollTop: currentScroll});
			$('#js-sp-menu-bg').css({ display: 'none' });
				
			$menubt.css({
				transform:'translateX(0px)',
				transition:'transform .3s'
			});
		}
    });
	//メニュー外クリック時 メニュー閉じる
	$('#js-sp-menu-bg').click(function() {
		$.sidr('close', 'js-sp-menu');
	});
});