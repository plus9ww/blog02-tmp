$(function(){$(window).scroll(function(){var o=$(window).scrollTop(),l=$("body").height()-(o+$(window).height());o>300&&l>200?$("#page-top").fadeIn("slow"):$("#page-top").fadeOut("slow")}),$("#move-page-top").click(function(){$("html,body").animate({scrollTop:0},"slow")})});