function windowsize(){var t=1;return $(window).width()<=768&&(t=0),t}$(window).load(function(){if(windowsize()){var t=$("#js__blogMain"),e=$("#js__side"),n=$("#js__sideMain"),o=$(window),i=t.height(),s=e.height();if(s<i){e.css({height:i,position:"relative"});var a=o.height()-n.height(),r=n.offset().top+-a,c=n.offset().top+i;o.scroll(function(){if(windowsize())if(o.height()<n.height())r<o.scrollTop()&&o.scrollTop()+o.height()<c?n.css({position:"fixed",bottom:"20px"}):o.scrollTop()+o.height()>=c?n.css({position:"absolute",bottom:"0"}):n.css("position","static");else{var a=o.scrollTop()+n.height();if(t.offset().top<o.scrollTop()&&a<c)n.css({position:"fixed",top:"20px"});else if(a>=c){var l=i-s;n.css({position:"absolute",top:l})}else n.css("position","static")}else n.css("position","static"),e.css({height:s})})}}}),$(function(){$("a[href^=#]").click(function(){var t=$(this).attr("href"),e=$("#"==t||""==t?"html":t).offset().top-260;return $("html, body").animate({scrollTop:e},550,"swing"),!1})}),function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery"],t):"undefined"!=typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(t){var e=-1,n=-1,o=function(t){return parseFloat(t)||0},i=function(e){var n=null,i=[];return t(e).each(function(){var e=t(this),s=e.offset().top-o(e.css("margin-top")),a=i.length>0?i[i.length-1]:null;null===a?i.push(e):Math.floor(Math.abs(n-s))<=1?i[i.length-1]=a.add(e):i.push(e),n=s}),i},s=function(e){var n={byRow:!0,property:"height",target:null,remove:!1};return"object"==typeof e?t.extend(n,e):("boolean"==typeof e?n.byRow=e:"remove"===e&&(n.remove=!0),n)},a=t.fn.matchHeight=function(e){var n=s(e);if(n.remove){var o=this;return this.css(n.property,""),t.each(a._groups,function(t,e){e.elements=e.elements.not(o)}),this}return this.length<=1&&!n.target?this:(a._groups.push({elements:this,options:n}),a._apply(this,n),this)};a.version="master",a._groups=[],a._throttle=80,a._maintainScroll=!1,a._beforeUpdate=null,a._afterUpdate=null,a._rows=i,a._parse=o,a._parseOptions=s,a._apply=function(e,n){var r=s(n),c=t(e),l=[c],d=t(window).scrollTop(),u=t("html").outerHeight(!0),h=c.parents().filter(":hidden");return h.each(function(){var e=t(this);e.data("style-cache",e.attr("style"))}),h.css("display","block"),r.byRow&&!r.target&&(c.each(function(){var e=t(this),n=e.css("display");"inline-block"!==n&&"flex"!==n&&"inline-flex"!==n&&(n="block"),e.data("style-cache",e.attr("style")),e.css({display:n,"padding-top":"0","padding-bottom":"0","margin-top":"0","margin-bottom":"0","border-top-width":"0","border-bottom-width":"0",height:"100px",overflow:"hidden"})}),l=i(c),c.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||"")})),t.each(l,function(e,n){var i=t(n),s=0;if(r.target)s=r.target.outerHeight(!1);else{if(r.byRow&&i.length<=1)return void i.css(r.property,"");i.each(function(){var e=t(this),n=e.attr("style"),o=e.css("display");"inline-block"!==o&&"flex"!==o&&"inline-flex"!==o&&(o="block");var i={display:o};i[r.property]="",e.css(i),e.outerHeight(!1)>s&&(s=e.outerHeight(!1)),n?e.attr("style",n):e.css("display","")})}i.each(function(){var e=t(this),n=0;r.target&&e.is(r.target)||("border-box"!==e.css("box-sizing")&&(n+=o(e.css("border-top-width"))+o(e.css("border-bottom-width")),n+=o(e.css("padding-top"))+o(e.css("padding-bottom"))),e.css(r.property,s-n+"px"))})}),h.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||null)}),a._maintainScroll&&t(window).scrollTop(d/u*t("html").outerHeight(!0)),this},a._applyDataApi=function(){var e={};t("[data-match-height], [data-mh]").each(function(){var n=t(this),o=n.attr("data-mh")||n.attr("data-match-height");e[o]=o in e?e[o].add(n):n}),t.each(e,function(){this.matchHeight(!0)})};var r=function(e){a._beforeUpdate&&a._beforeUpdate(e,a._groups),t.each(a._groups,function(){a._apply(this.elements,this.options)}),a._afterUpdate&&a._afterUpdate(e,a._groups)};a._update=function(o,i){if(i&&"resize"===i.type){var s=t(window).width();if(s===e)return;e=s}o?-1===n&&(n=setTimeout(function(){r(i),n=-1},a._throttle)):r(i)},t(a._applyDataApi),t(window).bind("load",function(t){a._update(!1,t)}),t(window).bind("resize orientationchange",function(t){a._update(!0,t)})}),function(){"use strict";function t(t){return"status"===t?d:w[t]?w[t].apply(this,Array.prototype.slice.call(arguments,1)):"function"!=typeof t&&"string"!=typeof t&&t?void g.error("Method "+t+" does not exist on jQuery.sidr"):w.toggle.apply(this,arguments)}var e={classCallCheck:function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}};e.createClass=function(){function t(t,e){for(var n=0;n<e.length;n++){var o=e[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,o.key,o)}}return function(e,n,o){return n&&t(e.prototype,n),o&&t(e,o),e}}();var n,o,i,s,a,r,c,l,d={moving:!1,opened:!1},u={isUrl:function(t){return!!new RegExp("^(https?:\\/\\/)?((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.?)+[a-z]{2,}|((\\d{1,3}\\.){3}\\d{1,3}))(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*(\\?[;&a-z\\d%_.~+=-]*)?(\\#[-a-z\\d_]*)?$","i").test(t)},addPrefixes:function(t){this.addPrefix(t,"id"),this.addPrefix(t,"class"),t.removeAttr("style")},addPrefix:function(t,e){var n=t.attr(e);"string"==typeof n&&""!==n&&"sidr-inner"!==n&&t.attr(e,n.replace(/([A-Za-z0-9_.\-]+)/g,"sidr-"+e+"-$1"))},transitions:(r=(document.body||document.documentElement).style,c=!1,l="transition",l in r?c=!0:(i=["moz","webkit","o","ms"],s=void 0,a=void 0,l=l.charAt(0).toUpperCase()+l.substr(1),c=function(){for(a=0;a<i.length;a++)if((s=i[a])+l in r)return!0;return!1}(),l=c?"-"+s.toLowerCase()+"-"+l.toLowerCase():null),{supported:c,property:l})},h=jQuery,p="sidr-animating",f="open",m="webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",v=function(){function t(n){e.classCallCheck(this,t),this.name=n,this.item=h("#"+n),this.openClass="sidr"===n?"sidr-open":"sidr-open "+n+"-open",this.menuWidth=this.item.outerWidth(!0),this.speed=this.item.data("speed"),this.side=this.item.data("side"),this.displace=this.item.data("displace"),this.timing=this.item.data("timing"),this.method=this.item.data("method"),this.onOpenCallback=this.item.data("onOpen"),this.onCloseCallback=this.item.data("onClose"),this.onOpenEndCallback=this.item.data("onOpenEnd"),this.onCloseEndCallback=this.item.data("onCloseEnd"),this.body=h(this.item.data("body"))}return e.createClass(t,[{key:"getAnimation",value:function(t,e){var n={},o=this.side;return n[o]="open"===t&&"body"===e?this.menuWidth+"px":"close"===t&&"menu"===e?"-"+this.menuWidth+"px":0,n}},{key:"prepareBody",value:function(t){var e="open"===t?"hidden":"";if(this.body.is("body")){var n=h("html"),o=n.scrollTop();n.css("overflow-x",e).scrollTop(o)}}},{key:"openBody",value:function(){if(this.displace){var t=u.transitions,e=this.body;if(t.supported)e.css(t.property,this.side+" "+this.speed/1e3+"s "+this.timing).css(this.side,0).css({width:e.width(),position:"absolute"}),e.css(this.side,this.menuWidth+"px");else{var n=this.getAnimation(f,"body");e.css({width:e.width(),position:"absolute"}).animate(n,{queue:!1,duration:this.speed})}}}},{key:"onCloseBody",value:function(){var t=u.transitions,e={width:"",position:"",right:"",left:""};t.supported&&(e[t.property]=""),this.body.css(e).unbind(m)}},{key:"closeBody",value:function(){var t=this;if(this.displace)if(u.transitions.supported)this.body.css(this.side,0).one(m,function(){t.onCloseBody()});else{var e=this.getAnimation("close","body");this.body.animate(e,{queue:!1,duration:this.speed,complete:function(){t.onCloseBody()}})}}},{key:"moveBody",value:function(t){t===f?this.openBody():this.closeBody()}},{key:"onOpenMenu",value:function(t){var e=this.name;d.moving=!1,d.opened=e,this.item.unbind(m),this.body.removeClass(p).addClass(this.openClass),this.onOpenEndCallback(),"function"==typeof t&&t(e)}},{key:"openMenu",value:function(t){var e=this,n=this.item;if(u.transitions.supported)n.css(this.side,0).one(m,function(){e.onOpenMenu(t)});else{var o=this.getAnimation(f,"menu");n.css("display","block").animate(o,{queue:!1,duration:this.speed,complete:function(){e.onOpenMenu(t)}})}}},{key:"onCloseMenu",value:function(t){this.item.css({left:"",right:""}).unbind(m),h("html").css("overflow-x",""),d.moving=!1,d.opened=!1,this.body.removeClass(p).removeClass(this.openClass),this.onCloseEndCallback(),"function"==typeof t&&t(name)}},{key:"closeMenu",value:function(t){var e=this,n=this.item;if(u.transitions.supported)n.css(this.side,"").one(m,function(){e.onCloseMenu(t)});else{var o=this.getAnimation("close","menu");n.animate(o,{queue:!1,duration:this.speed,complete:function(){e.onCloseMenu()}})}}},{key:"moveMenu",value:function(t,e){this.body.addClass(p),t===f?this.openMenu(e):this.closeMenu(e)}},{key:"move",value:function(t,e){d.moving=!0,this.prepareBody(t),this.moveBody(t),this.moveMenu(t,e)}},{key:"open",value:function(e){var n=this;if(d.opened!==this.name&&!d.moving){if(!1!==d.opened)return void new t(d.opened).close(function(){n.open(e)});this.move("open",e),this.onOpenCallback()}}},{key:"close",value:function(t){d.opened!==this.name||d.moving||(this.move("close",t),this.onCloseCallback())}},{key:"toggle",value:function(t){d.opened===this.name?this.close(t):this.open(t)}}]),t}(),y=jQuery,g=jQuery,b=["open","close","toggle"],w={},C=function(t){return function(e,n){"function"==typeof e?(n=e,e="sidr"):e||(e="sidr"),function(t,e,n){var o=new v(e);switch(t){case"open":o.open(n);break;case"close":o.close(n);break;case"toggle":o.toggle(n);break;default:y.error("Method "+t+" does not exist on jQuery.sidr")}}(t,e,n)}};for(n=0;n<b.length;n++)w[o=b[n]]=C(o);var k=jQuery;jQuery.sidr=t,jQuery.fn.sidr=function(e){var n=u.transitions,o=k.extend({name:"sidr",speed:200,side:"left",source:null,renaming:!0,body:"body",displace:!0,timing:"ease",method:"toggle",bind:"touchstart click",onOpen:function(){},onClose:function(){},onOpenEnd:function(){},onCloseEnd:function(){}},e),i=o.name,s=k("#"+i);return 0===s.length&&(s=k("<div />").attr("id",i).appendTo(k("body"))),n.supported&&s.css(n.property,o.side+" "+o.speed/1e3+"s "+o.timing),s.addClass("sidr").addClass(o.side).data({speed:o.speed,side:o.side,body:o.body,displace:o.displace,timing:o.timing,method:o.method,onOpen:o.onOpen,onClose:o.onClose,onOpenEnd:o.onOpenEnd,onCloseEnd:o.onCloseEnd}),s=function(t,e){if("function"==typeof e.source){var n=e.source(name);t.html(n)}else if("string"==typeof e.source&&u.isUrl(e.source))k.get(e.source,function(e){t.html(e)});else if("string"==typeof e.source){var o="",i=e.source.split(",");if(k.each(i,function(t,e){o+='<div class="sidr-inner">'+k(e).html()+"</div>"}),e.renaming){var s=k("<div />").html(o);s.find("*").each(function(t,e){var n=k(e);u.addPrefixes(n)}),o=s.html()}t.html(o)}else null!==e.source&&k.error("Invalid Sidr Source");return t}(s,o),this.each(function(){var e=k(this),n=!1;e.data("sidr")||(d.moving=!1,d.opened=!1,e.data("sidr",i),e.bind(o.bind,function(e){e.preventDefault(),n||(n=!0,t(o.method,i),setTimeout(function(){n=!1},100))}))})}}();var ATScroll=function(t){var e,n=this,o={noScroll:"noSmoothScroll",setHash:!1,duration:300,interval:10,animation:"liner",callback:function(){}};this.config=function(e){for(var n in e)t.hasOwnProperty(n)&&(o[n]=e[n])};var i={ua:function(){return navigator.userAgent},ie:function(){return i.ua.indexOf("MSIE")>=0},ie6:function(){return i.ua.indexOf("MSIE 6")>=0},ieStandard:function(){return document.compatMode&&"CSS1Compat"==document.compatMode}},s=function(){return document.documentElement.scrollTop||document.body.scrollTop},a=function(){return document.documentElement.scrollLeft||document.body.scrollLeft},r=function(){return i.ie&&!i.ieStandard?document.body.scrollHeight:document.documentElement.scrollHeight},c=function(){return window.innerHeight?window.innerHeight:i.ie?i.ie6&&i.ieStandard?document.documentElement.clientHeight:document.documentElement.clientHeight?document.documentElement.clientHeight:document.body.clientHeight:void 0};this.getElementPosition=function(t){var e=new Object;for(e.x=0,e.y=0;t;)e.x+=t.offsetLeft||0,e.y+=t.offsetTop||0,t=t.offsetParent;return e},this.addEvent=function(t,e,n){t.addEventListener?t.addEventListener(e,n,!1):window.attachEvent&&t.attachEvent("on"+e,function(){n.apply(t)})},this.eventCancel=function(t){t||(t=window.event),t.preventDefault?t.preventDefault():t.returnValue=!1},this.setSmoothScrollY=function(t){n.eventCancel(t),clearTimeout(e);var i=this.hash,s=i.replace("#",""),a=document.getElementById(s),l=n.getElementPosition(a).y,d=r()-c();d<l&&(l=d),l<0&&(l=0),o.setHash&&(o.callback=function(){window.location.hash=i}),n.scroll(l)};var l={liner:function(t,e,n,o){return n*t/o+e},quinticIn:function(t,e,n,o){return n*(t/=o)*t*t*t*t+e},quinticOut:function(t,e,n,o){return t/=o,-n*((t-=1)*t*t*t-1)+e}};this.scroll=function(t){var n=new Date,i=s(),r=function(){var s=new Date-n,c=l[o.animation](s,i,t-i,o.duration);s<o.duration-o.interval?(window.scrollTo(a(),parseInt(c)),e=setTimeout(function(){r()},o.interval)):(clearTimeout(e),window.scrollTo(a(),parseInt(t)),o.callback())};r()},this.load=function(){this.config(t),this.addEvent(window,"load",function(){for(var t=document.links,e=0;e<t.length;e++){var i=t[e],s=i.href.split("#")[1];i.className.indexOf(o.noScroll)>=0||i.href.match("#")&&document.getElementById(s)&&n.addEvent(i,"click",n.setSmoothScrollY)}})}};$(function(){var t=$("#js-sp-bt"),e=$("body");t.sidr({name:"js-sp-menu",side:"right",onOpen:function(){currentScroll=$(window).scrollTop(),e.css({position:"fixed",width:"100%",top:-1*currentScroll}),$("#js-sp-menu-bg").css({display:"block"}),t.css({transform:"translateX(-260px)",transition:"transform .3s"})},onClose:function(){e.attr("style",""),$("html, body").prop({scrollTop:currentScroll}),$("#js-sp-menu-bg").css({display:"none"}),t.css({transform:"translateX(0px)",transition:"transform .3s"})}}),$("#js-sp-menu-bg").click(function(){$.sidr("close","js-sp-menu")})});