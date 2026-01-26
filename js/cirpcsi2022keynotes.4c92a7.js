(function(d){var h=[];d.loadImages=function(a,e){"string"==typeof a&&(a=[a]);for(var f=a.length,g=0,b=0;b<f;b++){var c=document.createElement("img");c.onload=function(){g++;g==f&&d.isFunction(e)&&e()};c.src=a[b];h.push(c)}}})(window.jQuery);
var wl;

var lwi=-1;function thresholdPassed(){var w=$(window).width();var p=false;var cw=0;if(w>=480){cw++;}if(w>=768){cw++;}if(w>=960){cw++;}if(w>=1200){cw++;}if(w>=1920){cw++;}if(lwi!=cw){p=true;}lwi=cw;return p;}
ldsrcset=function(t){var e,r=document.querySelectorAll(t);for(e=0;e<r.length;e++){var c=r[e].getAttribute("data-srcset");r[e].setAttribute("srcset",c)}},ldsrc=function(t){var e=document.querySelector(t),r=e.getAttribute("data-src");e.setAttribute("src",r)};ldv=function(t){var e=document.querySelector(t),r=document.querySelector(t+" source"),c=r.getAttribute("data-src");r.setAttribute("src",c),e.play()};!function(){if("Promise"in window&&void 0!==window.performance){var e,t,r=document,n=function(){return r.createElement("link")},o=new Set,a=n(),i=a.relList&&a.relList.supports&&a.relList.supports("prefetch"),s=location.href.replace(/#[^#]+$/,"");o.add(s);var c=function(e){var t=location,r="http:",n="https:";if(e&&e.href&&e.origin==t.origin&&[r,n].includes(e.protocol)&&(e.protocol!=r||t.protocol!=n)){var o=e.pathname;if(!(e.hash&&o+e.search==t.pathname+t.search||"?preload=no"==e.search.substr(-11)||".html"!=o.substr(-5)&&".html"!=o.substr(-5)&&"/"!=o.substr(-1)))return!0}},u=function(e){var t=e.replace(/#[^#]+$/,"");if(!o.has(t)){if(i){var a=n();a.rel="prefetch",a.href=t,r.head.appendChild(a)}else{var s=new XMLHttpRequest;s.open("GET",t,s.withCredentials=!0),s.send()}o.add(t)}},p=function(e){return e.target.closest("a")},f=function(t){var r=t.relatedTarget;r&&p(t)==r.closest("a")||e&&(clearTimeout(e),e=void 0)},d={capture:!0,passive:!0};r.addEventListener("touchstart",function(e){t=performance.now();var r=p(e);c(r)&&u(r.href)},d),r.addEventListener("mouseover",function(r){if(!(performance.now()-t<1200)){var n=p(r);c(n)&&(n.addEventListener("mouseout",f,{passive:!0}),e=setTimeout(function(){u(n.href),e=void 0},80))}},d)}}();

$(function(){
r=function(){if(thresholdPassed()){dpi=window.devicePixelRatio;if($(window).width()>=1920){var a='data-src';var e=document.querySelector('.un256');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/transparentks-284-56.php':'images/transparentks-142-88.php');
var a='data-src';var e=document.querySelector('.un257');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/k-stransparent-848-30.php':'images/k-stransparent-424-62.php');
var e=document.querySelector('.un248');e.setAttribute('src',(dpi>1)?'images/transparentks-284-54.php':'images/transparentks-142-84.php');
var e=document.querySelector('.un249');e.setAttribute('src',(dpi>1)?'images/k-stransparent-848-30.php':'images/k-stransparent-424-62.php');
var e=document.querySelector('.un250');e.setAttribute('src',(dpi>1)?'images/csi-logo-272-28.php':'images/csi-logo-136-58.php');}else if($(window).width()>=1200){var a='data-src';var e=document.querySelector('.un256');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/transparentks-178-64.php':'images/transparentks-89-64.php');
var a='data-src';var e=document.querySelector('.un257');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/k-stransparent-530-30.php':'images/k-stransparent-265-30.php');
var e=document.querySelector('.un248');e.setAttribute('src',(dpi>1)?'images/transparentks-178-62.php':'images/transparentks-89-62.php');
var e=document.querySelector('.un249');e.setAttribute('src',(dpi>1)?'images/k-stransparent-530-30.php':'images/k-stransparent-265-30.php');
var e=document.querySelector('.un250');e.setAttribute('src',(dpi>1)?'images/csi-logo-170-28.php':'images/csi-logo-85-28.php');}else if($(window).width()>=960){var a='data-src';var e=document.querySelector('.un256');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/transparentks-142-86.php':'images/transparentks-71-30.php');
var a='data-src';var e=document.querySelector('.un257');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/k-stransparent-424-60.php':'images/k-stransparent-212-30.php');
var e=document.querySelector('.un248');e.setAttribute('src',(dpi>1)?'images/transparentks-138-24.php':'images/transparentks-69-24.php');
var e=document.querySelector('.un249');e.setAttribute('src',(dpi>1)?'images/k-stransparent-424-60.php':'images/k-stransparent-212-30.php');
var e=document.querySelector('.un250');e.setAttribute('src',(dpi>1)?'images/csi-logo-136-56.php':'images/csi-logo-68-28.php');}else if($(window).width()>=768){var a='data-src';var e=document.querySelector('.un256');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/transparentks-114-34.php':'images/transparentks-57-34.php');
var a='data-src';var e=document.querySelector('.un257');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/k-stransparent-340-28.php':'images/k-stransparent-170-28.php');
var e=document.querySelector('.un248');e.setAttribute('src',(dpi>1)?'images/transparentks-110-24.php':'images/transparentks-55-24.php');
var e=document.querySelector('.un249');e.setAttribute('src',(dpi>1)?'images/k-stransparent-340-28.php':'images/k-stransparent-170-28.php');
var e=document.querySelector('.un250');e.setAttribute('src',(dpi>1)?'images/csi-logo-108-28.php':'images/csi-logo-54-28.php');}else if($(window).width()>=480){var a='data-src';var e=document.querySelector('.un256');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/transparentks-306-30.php':'images/transparentks-153-30.php');
var a='data-src';var e=document.querySelector('.un257');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/k-stransparent-330-30.php':'images/k-stransparent-165-30.php');
var e=document.querySelector('.un248');e.setAttribute('src',(dpi>1)?'images/transparentks-192-30.php':'images/transparentks-96-30.php');
var e=document.querySelector('.un249');e.setAttribute('src',(dpi>1)?'images/k-stransparent-392-22.php':'images/k-stransparent-196-22.php');
var e=document.querySelector('.un250');e.setAttribute('src',(dpi>1)?'images/csi-logo-174-22.php':'images/csi-logo-87-22.php');}else{var a='data-src';var e=document.querySelector('.un256');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/transparentks-204-30.php':'images/transparentks-102-30.php');
var a='data-src';var e=document.querySelector('.un257');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/k-stransparent-220-30.php':'images/k-stransparent-110-30.php');
var e=document.querySelector('.un248');e.setAttribute('src',(dpi>1)?'images/transparentks-128-30.php':'images/transparentks-64-30.php');
var e=document.querySelector('.un249');e.setAttribute('src',(dpi>1)?'images/k-stransparent-262-22.php':'images/k-stransparent-131-22.php');
var e=document.querySelector('.un250');e.setAttribute('src',(dpi>1)?'images/csi-logo-116-22.php':'images/csi-logo-58-22.php');}}};
if(!window.HTMLPictureElement){$(window).resize(r);r();}
!function(){var e=document.querySelectorAll('a[href^="#"]');[].forEach.call(e,function(e){e.addEventListener("click",function(t){var o=0;if(e.hash.length>1){var l=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));l||(l=1);var n=document.querySelectorAll('[name="'+e.hash.slice(1)+'"]')[0];o=(n.getBoundingClientRect().top+pageYOffset)*l}if("scrollBehavior"in document.documentElement.style)scroll({top:o,left:0,behavior:"smooth"});else if("requestAnimationFrame"in window){var r=pageYOffset,a=null;requestAnimationFrame(function e(t){a||(a=t);var l=t-a;scrollTo(0,r<o?(o-r)*l/400+r:r-(r-o)*l/400),l<400?requestAnimationFrame(e):scrollTo(0,o)})}else scrollTo(0,o);t.preventDefault()},!1)})}();
un251=new Plyr('.un251 video',{iconUrl:'css/plyr.svg',blankUrl: 'css/blank.mp4',controls:['play-large','play','progress','current-time','mute','volume','fullscreen'],storage:{enabled:false}});
un251.volume=0.8;
un252=new Plyr('.un252 video',{iconUrl:'css/plyr.svg',blankUrl: 'css/blank.mp4',controls:['play-large','play','progress','current-time','mute','volume','fullscreen'],storage:{enabled:false}});
un252.volume=0.8;
un253=new Plyr('.un253 video',{iconUrl:'css/plyr.svg',blankUrl: 'css/blank.mp4',controls:['play-large','play','progress','current-time','mute','volume','fullscreen'],storage:{enabled:false}});
un253.volume=0.8;
un254=new Plyr('.un254 video',{iconUrl:'css/plyr.svg',blankUrl: 'css/blank.mp4',controls:['play-large','play','progress','current-time','mute','volume','fullscreen'],storage:{enabled:false}});
un254.volume=0.8;
un255=new Plyr('.un255 video',{iconUrl:'css/plyr.svg',blankUrl: 'css/blank.mp4',controls:['play-large','play','progress','current-time','mute','volume','fullscreen'],storage:{enabled:false}});
un255.volume=0.8;
initMenu($('#m4')[0]);
var cs=new ConsentBanner('cookies_bar.html',undefined,0);cs.start(1);if(location.hash){var e=location.hash.replace("#",""),o=function(){var t=document.querySelectorAll('[name="'+e+'"]')[0];t&&t.scrollIntoView(),"complete"!=document.readyState&&setTimeout(o,100)};o()}

});lfn=function(){ldsrcset('.un308 source');ldsrcset('.un309 source');};if(document.readyState=="complete"){lfn();}else{$(window).on("load",lfn);}