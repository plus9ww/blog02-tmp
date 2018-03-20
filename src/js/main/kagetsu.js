$(function(){
	parallax();
	$(window).scroll(function () {
		var px_change   = 500;
		if ( $(window).scrollTop() > px_change ) {
			$("#js-header").addClass("small");
		} else if ( $("#js-header").hasClass("small") ) {
			$("#js-header").removeClass("small");
		}
	});/**/
});

$(function () {
 var headerHight = 260; //ヘッダの高さ
 $('a[href^=#]').click(function(){
     var href= $(this).attr("href");
       var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top-headerHight; //ヘッダの高さ分位置をずらす
     $("html, body").animate({scrollTop:position}, 550, "swing");
        return false;
   });
});

$(window).resize(function(){
	parallax();
});

function parallax() {
	if(windowsize()){
		$(window).stellar();
	}else{
		$(window).stellar('destroy');
	}
}

function windowsize() {
	var w = $(window).width();
	var x = 768;
	var flg = 1;
	if (w <= x) {
		flg = 0;
	}
	return flg;
}