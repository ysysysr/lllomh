/*!
 * SuperSlide v2.1 
 * 轻松解决网站大部分特效展示问题
 * 详尽信息请看官网：http://www.SuperSlide2.com/
 *
 * Copyright 2011-2013, 大话主席
 *
 * 请尊重原创，保留头部版权
 * 在保留版权的前提下可应用于个人或商业用途
 */
(function(a){a.fn.slide=function(b){return a.fn.slide.defaults={type:"slide",effect:"fade",autoPlay:!1,delayTime:500,interTime:2500,triggerTime:150,defaultIndex:0,titCell:".hd li",mainCell:".bd",targetCell:null,trigger:"mouseover",scroll:1,vis:1,titOnClassName:"on",autoPage:!1,prevCell:".prev",nextCell:".next",pageStateCell:".pageState",opp:!1,pnLoop:!0,easing:"swing",startFun:null,endFun:null,switchLoad:null,playStateCell:".playState",mouseOverStop:!0,defaultPlay:!0,returnDefault:!1},this.each(function(){var c=a.extend({},a.fn.slide.defaults,b),d=a(this),e=c.effect,f=a(c.prevCell,d),g=a(c.nextCell,d),h=a(c.pageStateCell,d),i=a(c.playStateCell,d),j=a(c.titCell,d),k=j.size(),l=a(c.mainCell,d),m=l.children().size(),n=c.switchLoad,o=a(c.targetCell,d),p=parseInt(c.defaultIndex),q=parseInt(c.delayTime),r=parseInt(c.interTime);parseInt(c.triggerTime);var P,t=parseInt(c.scroll),u=parseInt(c.vis),v="false"==c.autoPlay||0==c.autoPlay?!1:!0,w="false"==c.opp||0==c.opp?!1:!0,x="false"==c.autoPage||0==c.autoPage?!1:!0,y="false"==c.pnLoop||0==c.pnLoop?!1:!0,z="false"==c.mouseOverStop||0==c.mouseOverStop?!1:!0,A="false"==c.defaultPlay||0==c.defaultPlay?!1:!0,B="false"==c.returnDefault||0==c.returnDefault?!1:!0,C=0,D=0,E=0,F=0,G=c.easing,H=null,I=null,J=null,K=c.titOnClassName,L=j.index(d.find("."+K)),M=p=defaultIndex=-1==L?p:L,N=p,O=m>=u?0!=m%t?m%t:t:0,Q="leftMarquee"==e||"topMarquee"==e?!0:!1,R=function(){a.isFunction(c.startFun)&&c.startFun(p,k,d,a(c.titCell,d),l,o,f,g)},S=function(){a.isFunction(c.endFun)&&c.endFun(p,k,d,a(c.titCell,d),l,o,f,g)},T=function(){j.removeClass(K),A&&j.eq(defaultIndex).addClass(K)};if("menu"==c.type)return A&&j.removeClass(K).eq(p).addClass(K),j.hover(function(){P=a(this).find(c.targetCell);var b=j.index(a(this));I=setTimeout(function(){switch(p=b,j.removeClass(K).eq(p).addClass(K),R(),e){case"fade":P.stop(!0,!0).animate({opacity:"show"},q,G,S);break;case"slideDown":P.stop(!0,!0).animate({height:"show"},q,G,S)}},c.triggerTime)},function(){switch(clearTimeout(I),e){case"fade":P.animate({opacity:"hide"},q,G);break;case"slideDown":P.animate({height:"hide"},q,G)}}),B&&d.hover(function(){clearTimeout(J)},function(){J=setTimeout(T,q)}),void 0;if(0==k&&(k=m),Q&&(k=2),x){if(m>=u)if("leftLoop"==e||"topLoop"==e)k=0!=m%t?(0^m/t)+1:m/t;else{var U=m-u;k=1+parseInt(0!=U%t?U/t+1:U/t),0>=k&&(k=1)}else k=1;j.html("");var V="";if(1==c.autoPage||"true"==c.autoPage)for(var W=0;k>W;W++)V+="<li>"+(W+1)+"</li>";else for(var W=0;k>W;W++)V+=c.autoPage.replace("$",W+1);j.html(V);var j=j.children()}if(m>=u){l.children().each(function(){a(this).width()>E&&(E=a(this).width(),D=a(this).outerWidth(!0)),a(this).height()>F&&(F=a(this).height(),C=a(this).outerHeight(!0))});var X=l.children(),Y=function(){for(var a=0;u>a;a++)X.eq(a).clone().addClass("clone").appendTo(l);for(var a=0;O>a;a++)X.eq(m-a-1).clone().addClass("clone").prependTo(l)};switch(e){case"fold":l.css({position:"relative",width:D,height:C}).children().css({position:"absolute",width:E,left:0,top:0,display:"none"});break;case"top":l.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; height:'+u*C+'px"></div>').css({top:-(p*t)*C,position:"relative",padding:"0",margin:"0"}).children().css({height:F});break;case"left":l.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; width:'+u*D+'px"></div>').css({width:m*D,left:-(p*t)*D,position:"relative",overflow:"hidden",padding:"0",margin:"0"}).children().css({"float":"left",width:E});break;case"leftLoop":case"leftMarquee":Y(),l.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; width:'+u*D+'px"></div>').css({width:(m+u+O)*D,position:"relative",overflow:"hidden",padding:"0",margin:"0",left:-(O+p*t)*D}).children().css({"float":"left",width:E});break;case"topLoop":case"topMarquee":Y(),l.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; height:'+u*C+'px"></div>').css({height:(m+u+O)*C,position:"relative",padding:"0",margin:"0",top:-(O+p*t)*C}).children().css({height:F})}}var Z=function(a){var b=a*t;return a==k?b=m:-1==a&&0!=m%t&&(b=-m%t),b},$=function(b){var c=function(c){for(var d=c;u+c>d;d++)b.eq(d).find("img["+n+"]").each(function(){var b=a(this);if(b.attr("src",b.attr(n)).removeAttr(n),l.find(".clone")[0])for(var c=l.children(),d=0;c.size()>d;d++)c.eq(d).find("img["+n+"]").each(function(){a(this).attr(n)==b.attr("src")&&a(this).attr("src",a(this).attr(n)).removeAttr(n)})})};switch(e){case"fade":case"fold":case"top":case"left":case"slideDown":c(p*t);break;case"leftLoop":case"topLoop":c(O+Z(N));break;case"leftMarquee":case"topMarquee":var d="leftMarquee"==e?l.css("left").replace("px",""):l.css("top").replace("px",""),f="leftMarquee"==e?D:C,g=O;if(0!=d%f){var h=Math.abs(0^d/f);g=1==p?O+h:O+h-1}c(g)}},_=function(a){if(!A||M!=p||a||Q){if(Q?p>=1?p=1:0>=p&&(p=0):(N=p,p>=k?p=0:0>p&&(p=k-1)),R(),null!=n&&$(l.children()),o[0]&&(P=o.eq(p),null!=n&&$(o),"slideDown"==e?(o.not(P).stop(!0,!0).slideUp(q),P.slideDown(q,G,function(){l[0]||S()})):(o.not(P).stop(!0,!0).hide(),P.animate({opacity:"show"},q,function(){l[0]||S()}))),m>=u)switch(e){case"fade":l.children().stop(!0,!0).eq(p).animate({opacity:"show"},q,G,function(){S()}).siblings().hide();break;case"fold":l.children().stop(!0,!0).eq(p).animate({opacity:"show"},q,G,function(){S()}).siblings().animate({opacity:"hide"},q,G);break;case"top":l.stop(!0,!1).animate({top:-p*t*C},q,G,function(){S()});break;case"left":l.stop(!0,!1).animate({left:-p*t*D},q,G,function(){S()});break;case"leftLoop":var b=N;l.stop(!0,!0).animate({left:-(Z(N)+O)*D},q,G,function(){-1>=b?l.css("left",-(O+(k-1)*t)*D):b>=k&&l.css("left",-O*D),S()});break;case"topLoop":var b=N;l.stop(!0,!0).animate({top:-(Z(N)+O)*C},q,G,function(){-1>=b?l.css("top",-(O+(k-1)*t)*C):b>=k&&l.css("top",-O*C),S()});break;case"leftMarquee":var c=l.css("left").replace("px","");0==p?l.animate({left:++c},0,function(){l.css("left").replace("px","")>=0&&l.css("left",-m*D)}):l.animate({left:--c},0,function(){-(m+O)*D>=l.css("left").replace("px","")&&l.css("left",-O*D)});break;case"topMarquee":var d=l.css("top").replace("px","");0==p?l.animate({top:++d},0,function(){l.css("top").replace("px","")>=0&&l.css("top",-m*C)}):l.animate({top:--d},0,function(){-(m+O)*C>=l.css("top").replace("px","")&&l.css("top",-O*C)})}j.removeClass(K).eq(p).addClass(K),M=p,y||(g.removeClass("nextStop"),f.removeClass("prevStop"),0==p&&f.addClass("prevStop"),p==k-1&&g.addClass("nextStop")),h.html("<span>"+(p+1)+"</span>/"+k)}};A&&_(!0),B&&d.hover(function(){clearTimeout(J)},function(){J=setTimeout(function(){p=defaultIndex,A?_():"slideDown"==e?P.slideUp(q,T):P.animate({opacity:"hide"},q,T),M=p},300)});var ab=function(a){H=setInterval(function(){w?p--:p++,_()},a?a:r)},bb=function(a){H=setInterval(_,a?a:r)},cb=function(){z||(clearInterval(H),ab())},db=function(){(y||p!=k-1)&&(p++,_(),Q||cb())},eb=function(){(y||0!=p)&&(p--,_(),Q||cb())},fb=function(){clearInterval(H),Q?bb():ab(),i.removeClass("pauseState")},gb=function(){clearInterval(H),i.addClass("pauseState")};if(v?Q?(w?p--:p++,bb(),z&&l.hover(gb,fb)):(ab(),z&&d.hover(gb,fb)):(Q&&(w?p--:p++),i.addClass("pauseState")),i.click(function(){i.hasClass("pauseState")?fb():gb()}),"mouseover"==c.trigger?j.hover(function(){var a=j.index(this);I=setTimeout(function(){p=a,_(),cb()},c.triggerTime)},function(){clearTimeout(I)}):j.click(function(){p=j.index(this),_(),cb()}),Q){if(g.mousedown(db),f.mousedown(eb),y){var hb,ib=function(){hb=setTimeout(function(){clearInterval(H),bb(0^r/10)},150)},jb=function(){clearTimeout(hb),clearInterval(H),bb()};g.mousedown(ib),g.mouseup(jb),f.mousedown(ib),f.mouseup(jb)}"mouseover"==c.trigger&&(g.hover(db,function(){}),f.hover(eb,function(){}))}else g.click(db),f.click(eb)})}})(jQuery),jQuery.easing.jswing=jQuery.easing.swing,jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(a,b,c,d,e){return jQuery.easing[jQuery.easing.def](a,b,c,d,e)},easeInQuad:function(a,b,c,d,e){return d*(b/=e)*b+c},easeOutQuad:function(a,b,c,d,e){return-d*(b/=e)*(b-2)+c},easeInOutQuad:function(a,b,c,d,e){return 1>(b/=e/2)?d/2*b*b+c:-d/2*(--b*(b-2)-1)+c},easeInCubic:function(a,b,c,d,e){return d*(b/=e)*b*b+c},easeOutCubic:function(a,b,c,d,e){return d*((b=b/e-1)*b*b+1)+c},easeInOutCubic:function(a,b,c,d,e){return 1>(b/=e/2)?d/2*b*b*b+c:d/2*((b-=2)*b*b+2)+c},easeInQuart:function(a,b,c,d,e){return d*(b/=e)*b*b*b+c},easeOutQuart:function(a,b,c,d,e){return-d*((b=b/e-1)*b*b*b-1)+c},easeInOutQuart:function(a,b,c,d,e){return 1>(b/=e/2)?d/2*b*b*b*b+c:-d/2*((b-=2)*b*b*b-2)+c},easeInQuint:function(a,b,c,d,e){return d*(b/=e)*b*b*b*b+c},easeOutQuint:function(a,b,c,d,e){return d*((b=b/e-1)*b*b*b*b+1)+c},easeInOutQuint:function(a,b,c,d,e){return 1>(b/=e/2)?d/2*b*b*b*b*b+c:d/2*((b-=2)*b*b*b*b+2)+c},easeInSine:function(a,b,c,d,e){return-d*Math.cos(b/e*(Math.PI/2))+d+c},easeOutSine:function(a,b,c,d,e){return d*Math.sin(b/e*(Math.PI/2))+c},easeInOutSine:function(a,b,c,d,e){return-d/2*(Math.cos(Math.PI*b/e)-1)+c},easeInExpo:function(a,b,c,d,e){return 0==b?c:d*Math.pow(2,10*(b/e-1))+c},easeOutExpo:function(a,b,c,d,e){return b==e?c+d:d*(-Math.pow(2,-10*b/e)+1)+c},easeInOutExpo:function(a,b,c,d,e){return 0==b?c:b==e?c+d:1>(b/=e/2)?d/2*Math.pow(2,10*(b-1))+c:d/2*(-Math.pow(2,-10*--b)+2)+c},easeInCirc:function(a,b,c,d,e){return-d*(Math.sqrt(1-(b/=e)*b)-1)+c},easeOutCirc:function(a,b,c,d,e){return d*Math.sqrt(1-(b=b/e-1)*b)+c},easeInOutCirc:function(a,b,c,d,e){return 1>(b/=e/2)?-d/2*(Math.sqrt(1-b*b)-1)+c:d/2*(Math.sqrt(1-(b-=2)*b)+1)+c},easeInElastic:function(a,b,c,d,e){var f=1.70158,g=0,h=d;if(0==b)return c;if(1==(b/=e))return c+d;if(g||(g=.3*e),Math.abs(d)>h){h=d;var f=g/4}else var f=g/(2*Math.PI)*Math.asin(d/h);return-(h*Math.pow(2,10*(b-=1))*Math.sin((b*e-f)*2*Math.PI/g))+c},easeOutElastic:function(a,b,c,d,e){var f=1.70158,g=0,h=d;if(0==b)return c;if(1==(b/=e))return c+d;if(g||(g=.3*e),Math.abs(d)>h){h=d;var f=g/4}else var f=g/(2*Math.PI)*Math.asin(d/h);return h*Math.pow(2,-10*b)*Math.sin((b*e-f)*2*Math.PI/g)+d+c},easeInOutElastic:function(a,b,c,d,e){var f=1.70158,g=0,h=d;if(0==b)return c;if(2==(b/=e/2))return c+d;if(g||(g=e*.3*1.5),Math.abs(d)>h){h=d;var f=g/4}else var f=g/(2*Math.PI)*Math.asin(d/h);return 1>b?-.5*h*Math.pow(2,10*(b-=1))*Math.sin((b*e-f)*2*Math.PI/g)+c:.5*h*Math.pow(2,-10*(b-=1))*Math.sin((b*e-f)*2*Math.PI/g)+d+c},easeInBack:function(a,b,c,d,e,f){return void 0==f&&(f=1.70158),d*(b/=e)*b*((f+1)*b-f)+c},easeOutBack:function(a,b,c,d,e,f){return void 0==f&&(f=1.70158),d*((b=b/e-1)*b*((f+1)*b+f)+1)+c},easeInOutBack:function(a,b,c,d,e,f){return void 0==f&&(f=1.70158),1>(b/=e/2)?d/2*b*b*(((f*=1.525)+1)*b-f)+c:d/2*((b-=2)*b*(((f*=1.525)+1)*b+f)+2)+c},easeInBounce:function(a,b,c,d,e){return d-jQuery.easing.easeOutBounce(a,e-b,0,d,e)+c},easeOutBounce:function(a,b,c,d,e){return 1/2.75>(b/=e)?d*7.5625*b*b+c:2/2.75>b?d*(7.5625*(b-=1.5/2.75)*b+.75)+c:2.5/2.75>b?d*(7.5625*(b-=2.25/2.75)*b+.9375)+c:d*(7.5625*(b-=2.625/2.75)*b+.984375)+c},easeInOutBounce:function(a,b,c,d,e){return e/2>b?.5*jQuery.easing.easeInBounce(a,2*b,0,d,e)+c:.5*jQuery.easing.easeOutBounce(a,2*b-e,0,d,e)+.5*d+c}});/*!
 * artDialog 4.1.7
 * Date: 2013-03-03 08:04
 * http://code.google.com/p/artdialog/
 * (c) 2009-2012 TangBin, http://www.planeArt.cn
 *
 * This is licensed under the GNU LGPL, version 2.1 or later.
 * For details, see: http://creativecommons.org/licenses/LGPL/2.1/
 */
(function(e,t){function h(e,t,n){t=t||document,n=n||"*";var r=0,i=0,s=[],o=t.getElementsByTagName(n),u=o.length,a=new RegExp("(^|\\s)"+e+"(\\s|$)");for(;r<u;r++)a.test(o[r].className)&&(s[i]=o[r],i++);return s}function p(r){var i=n.expando,s=r===e?0:r[i];return s===t&&(r[i]=s=++n.uuid),s}function d(){if(n.isReady)return;try{document.documentElement.doScroll("left")}catch(e){setTimeout(d,1);return}n.ready()}function v(e){return n.isWindow(e)?e:e.nodeType===9?e.defaultView||e.parentWindow:!1}var n=e.art=function(e,t){return new n.fn.init(e,t)},r=!1,i=[],s,o="opacity"in document.documentElement.style,u=/^(?:[^<]*(<[\w\W]+>)[^>]*$|#([\w\-]+)$)/,a=/[\n\t]/g,f=/alpha\([^)]*\)/i,l=/opacity=([^)]*)/,c=/^([+-]=)?([\d+-.]+)(.*)$/;return e.$===t&&(e.$=n),n.fn=n.prototype={constructor:n,ready:function(e){return n.bindReady(),n.isReady?e.call(document,n):i&&i.push(e),this},hasClass:function(e){var t=" "+e+" ";return(" "+this[0].className+" ").replace(a," ").indexOf(t)>-1?!0:!1},addClass:function(e){return this.hasClass(e)||(this[0].className+=" "+e),this},removeClass:function(e){var t=this[0];return e?this.hasClass(e)&&(t.className=t.className.replace(e," ")):t.className="",this},css:function(e,r){var i,s=this[0],o=arguments[0];if(typeof e=="string"){if(r===t)return n.css(s,e);e==="opacity"?n.opacity.set(s,r):s.style[e]=r}else for(i in o)i==="opacity"?n.opacity.set(s,o[i]):s.style[i]=o[i];return this},show:function(){return this.css("display","block")},hide:function(){return this.css("display","none")},offset:function(){var e=this[0],t=e.getBoundingClientRect(),n=e.ownerDocument,r=n.body,i=n.documentElement,s=i.clientTop||r.clientTop||0,o=i.clientLeft||r.clientLeft||0,u=t.top+(self.pageYOffset||i.scrollTop)-s,a=t.left+(self.pageXOffset||i.scrollLeft)-o;return{left:a,top:u}},html:function(e){var r=this[0];return e===t?r.innerHTML:(n.cleanData(r.getElementsByTagName("*")),r.innerHTML=e,this)},remove:function(){var e=this[0];return n.cleanData(e.getElementsByTagName("*")),n.cleanData([e]),e.parentNode.removeChild(e),this},bind:function(e,t){return n.event.add(this[0],e,t),this},unbind:function(e,t){return n.event.remove(this[0],e,t),this}},n.fn.init=function(e,t){var r,i;t=t||document;if(!e)return this;if(e.nodeType)return this[0]=e,this;if(e==="body"&&t.body)return this[0]=t.body,this;if(e==="head"||e==="html")return this[0]=t.getElementsByTagName(e)[0],this;if(typeof e=="string"){r=u.exec(e);if(r&&r[2])return i=t.getElementById(r[2]),i&&i.parentNode&&(this[0]=i),this}return typeof e=="function"?n(document).ready(e):(this[0]=e,this)},n.fn.init.prototype=n.fn,n.noop=function(){},n.isWindow=function(e){return e&&typeof e=="object"&&"setInterval"in e},n.isArray=function(e){return Object.prototype.toString.call(e)==="[object Array]"},n.fn.find=function(e){var t,r=this[0],i=e.split(".")[1];return i?document.getElementsByClassName?t=r.getElementsByClassName(i):t=h(i,r):t=r.getElementsByTagName(e),n(t[0])},n.each=function(e,n){var r,i=0,s=e.length,o=s===t;if(o){for(r in e)if(n.call(e[r],r,e[r])===!1)break}else for(var u=e[0];i<s&&n.call(u,i,u)!==!1;u=e[++i]);return e},n.data=function(e,r,i){var s=n.cache,o=p(e);return r===t?s[o]:(s[o]||(s[o]={}),i!==t&&(s[o][r]=i),s[o][r])},n.removeData=function(e,t){var r=!0,i=n.expando,s=n.cache,o=p(e),u=o&&s[o];if(!u)return;if(t){delete u[t];for(var a in u)r=!1;r&&delete n.cache[o]}else delete s[o],e.removeAttribute?e.removeAttribute(i):e[i]=null},n.uuid=0,n.cache={},n.expando="@cache"+ +(new Date),n.event={add:function(e,t,r){var i,s,o=n.event,u=n.data(e,"@events")||n.data(e,"@events",{});i=u[t]=u[t]||{},s=i.listeners=i.listeners||[],s.push(r),i.handler||(i.elem=e,i.handler=o.handler(i),e.addEventListener?e.addEventListener(t,i.handler,!1):e.attachEvent("on"+t,i.handler))},remove:function(e,t,r){var i,s,o,u=n.event,a=!0,f=n.data(e,"@events");if(!f)return;if(!t){for(i in f)u.remove(e,i);return}s=f[t];if(!s)return;o=s.listeners;if(r)for(i=0;i<o.length;i++)o[i]===r&&o.splice(i--,1);else s.listeners=[];if(s.listeners.length===0){e.removeEventListener?e.removeEventListener(t,s.handler,!1):e.detachEvent("on"+t,s.handler),delete f[t],s=n.data(e,"@events");for(var l in s)a=!1;a&&n.removeData(e,"@events")}},handler:function(t){return function(r){r=n.event.fix(r||e.event);for(var i=0,s=t.listeners,o;o=s[i++];)o.call(t.elem,r)===!1&&(r.preventDefault(),r.stopPropagation())}},fix:function(e){if(e.target)return e;var t={target:e.srcElement||document,preventDefault:function(){e.returnValue=!1},stopPropagation:function(){e.cancelBubble=!0}};for(var n in e)t[n]=e[n];return t}},n.cleanData=function(e){var t=0,r,i=e.length,s=n.event.remove,o=n.removeData;for(;t<i;t++)r=e[t],s(r),o(r)},n.isReady=!1,n.ready=function(){if(!n.isReady){if(!document.body)return setTimeout(n.ready,13);n.isReady=!0;if(i){var e,t=0;while(e=i[t++])e.call(document,n);i=null}}},n.bindReady=function(){if(r)return;r=!0;if(document.readyState==="complete")return n.ready();if(document.addEventListener)document.addEventListener("DOMContentLoaded",s,!1),e.addEventListener("load",n.ready,!1);else if(document.attachEvent){document.attachEvent("onreadystatechange",s),e.attachEvent("onload",n.ready);var t=!1;try{t=e.frameElement==null}catch(i){}document.documentElement.doScroll&&t&&d()}},document.addEventListener?s=function(){document.removeEventListener("DOMContentLoaded",s,!1),n.ready()}:document.attachEvent&&(s=function(){document.readyState==="complete"&&(document.detachEvent("onreadystatechange",s),n.ready())}),n.css="defaultView"in document&&"getComputedStyle"in document.defaultView?function(e,t){return document.defaultView.getComputedStyle(e,!1)[t]}:function(e,t){var r=t==="opacity"?n.opacity.get(e):e.currentStyle[t];return r||""},n.opacity={get:function(e){return o?document.defaultView.getComputedStyle(e,!1).opacity:l.test((e.currentStyle?e.currentStyle.filter:e.style.filter)||"")?parseFloat(RegExp.$1)/100+"":1},set:function(e,t){if(o)return e.style.opacity=t;var n=e.style;n.zoom=1;var r="alpha(opacity="+t*100+")",i=n.filter||"";n.filter=f.test(i)?i.replace(f,r):n.filter+" "+r}},n.each(["Left","Top"],function(e,t){var r="scroll"+t;n.fn[r]=function(){var t=this[0],n;return n=v(t),n?"pageXOffset"in n?n[e?"pageYOffset":"pageXOffset"]:n.document.documentElement[r]||n.document.body[r]:t[r]}}),n.each(["Height","Width"],function(e,t){var r=t.toLowerCase();n.fn[r]=function(e){var r=this[0];return r?n.isWindow(r)?r.document.documentElement["client"+t]||r.document.body["client"+t]:r.nodeType===9?Math.max(r.documentElement["client"+t],r.body["scroll"+t],r.documentElement["scroll"+t],r.body["offset"+t],r.documentElement["offset"+t]):null:e==null?null:this}}),n.ajax=function(t){var r=e.XMLHttpRequest?new XMLHttpRequest:new ActiveXObject("Microsoft.XMLHTTP"),i=t.url;if(t.cache===!1){var s=+(new Date),o=i.replace(/([?&])_=[^&]*/,"$1_="+s);i=o+(o===i?(/\?/.test(i)?"&":"?")+"_="+s:"")}r.onreadystatechange=function(){r.readyState===4&&r.status===200&&(t.success&&t.success(r.responseText),r.onreadystatechange=n.noop)},r.open("GET",i,1),r.send(null)},n.fn.animate=function(e,t,r,i){t=t||400,typeof r=="function"&&(i=r),r=r&&n.easing[r]?r:"swing";var s=this[0],o,u,a,f,l,h,p={speed:t,easing:r,callback:function(){o!=null&&(s.style.overflow=""),i&&i()}};return p.curAnim={},n.each(e,function(e,t){p.curAnim[e]=t}),n.each(e,function(e,t){u=new n.fx(s,p,e),a=c.exec(t),f=parseFloat(e==="opacity"||s.style&&s.style[e]!=null?n.css(s,e):s[e]),l=parseFloat(a[2]),h=a[3];if(e==="height"||e==="width")l=Math.max(0,l),o=[s.style.overflow,s.style.overflowX,s.style.overflowY];u.custom(f,l,h)}),o!=null&&(s.style.overflow="hidden"),this},n.timers=[],n.fx=function(e,t,n){this.elem=e,this.options=t,this.prop=n},n.fx.prototype={custom:function(e,t,r){function s(){return i.step()}var i=this;i.startTime=n.fx.now(),i.start=e,i.end=t,i.unit=r,i.now=i.start,i.state=i.pos=0,s.elem=i.elem,s(),n.timers.push(s),n.timerId||(n.timerId=setInterval(n.fx.tick,13))},step:function(){var e=this,t=n.fx.now(),r=!0;if(t>=e.options.speed+e.startTime){e.now=e.end,e.state=e.pos=1,e.update(),e.options.curAnim[e.prop]=!0;for(var i in e.options.curAnim)e.options.curAnim[i]!==!0&&(r=!1);return r&&e.options.callback.call(e.elem),!1}var s=t-e.startTime;return e.state=s/e.options.speed,e.pos=n.easing[e.options.easing](e.state,s,0,1,e.options.speed),e.now=e.start+(e.end-e.start)*e.pos,e.update(),!0},update:function(){var e=this;e.prop==="opacity"?n.opacity.set(e.elem,e.now):e.elem.style&&e.elem.style[e.prop]!=null?e.elem.style[e.prop]=e.now+e.unit:e.elem[e.prop]=e.now}},n.fx.now=function(){return+(new Date)},n.easing={linear:function(e,t,n,r){return n+r*e},swing:function(e,t,n,r){return(-Math.cos(e*Math.PI)/2+.5)*r+n}},n.fx.tick=function(){var e=n.timers;for(var t=0;t<e.length;t++)!e[t]()&&e.splice(t--,1);!e.length&&n.fx.stop()},n.fx.stop=function(){clearInterval(n.timerId),n.timerId=null},n.fn.stop=function(){var e=n.timers;for(var t=e.length-1;t>=0;t--)e[t].elem===this[0]&&e.splice(t,1);return this},n})(window),function(e,t,n){e.noop=e.noop||function(){};var r,i,s,o,u=0,a=e(t),f=e(document),l=e("html"),c=document.documentElement,h=t.VBArray&&!t.XMLHttpRequest,p="createTouch"in document&&!("onmousemove"in c)||/(iPhone|iPad|iPod)/i.test(navigator.userAgent),d="artDialog"+ +(new Date),v=function(t,i,s){t=t||{};if(typeof t=="string"||t.nodeType===1)t={content:t,fixed:!p};var o,a=v.defaults,f=t.follow=this.nodeType===1&&this||t.follow;for(var l in a)t[l]===n&&(t[l]=a[l]);return e.each({ok:"yesFn",cancel:"noFn",close:"closeFn",init:"initFn",okVal:"yesText",cancelVal:"noText"},function(e,r){t[e]=t[e]!==n?t[e]:t[r]}),typeof f=="string"&&(f=e(f)[0]),t.id=f&&f[d+"follow"]||t.id||d+u,o=v.list[t.id],f&&o?o.follow(f).zIndex().focus():o?o.zIndex().focus():(p&&(t.fixed=!1),e.isArray(t.button)||(t.button=t.button?[t.button]:[]),i!==n&&(t.ok=i),s!==n&&(t.cancel=s),t.ok&&t.button.push({name:t.okVal,callback:t.ok,focus:!0}),t.cancel&&t.button.push({name:t.cancelVal,callback:t.cancel}),v.defaults.zIndex=t.zIndex,u++,v.list[t.id]=r?r._init(t):new v.fn._init(t))};v.fn=v.prototype={version:"4.1.7",closed:!0,_init:function(e){var n=this,i,s=e.icon,o=s&&(h?{png:"icons/"+s+".png"}:{backgroundImage:"url('"+e.path+"/skins/icons/"+s+".png')"});return n.closed=!1,n.config=e,n.DOM=i=n.DOM||n._getDOM(),i.wrap.addClass(e.skin),i.close[e.cancel===!1?"hide":"show"](),i.icon[0].style.display=s?"":"none",i.iconBg.css(o||{background:"none"}),i.se.css("cursor",e.resize?"se-resize":"auto"),i.title.css("cursor",e.drag?"move":"auto"),i.content.css("padding",e.padding),n[e.show?"show":"hide"](!0),n.button(e.button).title(e.title).content(e.content,!0).size(e.width,e.height).time(e.time),e.follow?n.follow(e.follow):n.position(e.left,e.top),n.zIndex().focus(),e.lock&&n.lock(),n._addEvent(),n._ie6PngFix(),r=null,e.init&&e.init.call(n,t),n},content:function(e){var t,r,i,s,o=this,u=o.DOM,a=u.wrap[0],f=a.offsetWidth,l=a.offsetHeight,c=parseInt(a.style.left),h=parseInt(a.style.top),p=a.style.width,d=u.content,v=d[0];return o._elemBack&&o._elemBack(),a.style.width="auto",e===n?v:(typeof e=="string"?d.html(e):e&&e.nodeType===1&&(s=e.style.display,t=e.previousSibling,r=e.nextSibling,i=e.parentNode,o._elemBack=function(){t&&t.parentNode?t.parentNode.insertBefore(e,t.nextSibling):r&&r.parentNode?r.parentNode.insertBefore(e,r):i&&i.appendChild(e),e.style.display=s,o._elemBack=null},d.html(""),v.appendChild(e),e.style.display="block"),arguments[1]||(o.config.follow?o.follow(o.config.follow):(f=a.offsetWidth-f,l=a.offsetHeight-l,c-=f/2,h-=l/2,a.style.left=Math.max(c,0)+"px",a.style.top=Math.max(h,0)+"px"),p&&p!=="auto"&&(a.style.width=a.offsetWidth+"px"),o._autoPositionType()),o._ie6SelectFix(),o._runScript(v),o)},title:function(e){var t=this.DOM,r=t.wrap,i=t.title,s="aui_state_noTitle";return e===n?i[0]:(e===!1?(i.hide().html(""),r.addClass(s)):(i.show().html(e||""),r.removeClass(s)),this)},position:function(e,t){var r=this,i=r.config,s=r.DOM.wrap[0],o=h?!1:i.fixed,u=h&&r.config.fixed,l=f.scrollLeft(),c=f.scrollTop(),p=o?0:l,d=o?0:c,v=a.width(),m=a.height(),g=s.offsetWidth,y=s.offsetHeight,b=s.style;if(e||e===0)r._left=e.toString().indexOf("%")!==-1?e:null,e=r._toNumber(e,v-g),typeof e=="number"?(e=u?e+=l:e+p,b.left=Math.max(e,p)+"px"):typeof e=="string"&&(b.left=e);if(t||t===0)r._top=t.toString().indexOf("%")!==-1?t:null,t=r._toNumber(t,m-y),typeof t=="number"?(t=u?t+=c:t+d,b.top=Math.max(t,d)+"px"):typeof t=="string"&&(b.top=t);return e!==n&&t!==n&&(r._follow=null,r._autoPositionType()),r},size:function(e,t){var n,r,i,s,o=this,u=o.config,f=o.DOM,l=f.wrap,c=f.main,h=l[0].style,p=c[0].style;return e&&(o._width=e.toString().indexOf("%")!==-1?e:null,n=a.width()-l[0].offsetWidth+c[0].offsetWidth,i=o._toNumber(e,n),e=i,typeof e=="number"?(h.width="auto",p.width=Math.max(o.config.minWidth,e)+"px",h.width=l[0].offsetWidth+"px"):typeof e=="string"&&(p.width=e,e==="auto"&&l.css("width","auto"))),t&&(o._height=t.toString().indexOf("%")!==-1?t:null,r=a.height()-l[0].offsetHeight+c[0].offsetHeight,s=o._toNumber(t,r),t=s,typeof t=="number"?p.height=Math.max(o.config.minHeight,t)+"px":typeof t=="string"&&(p.height=t)),o._ie6SelectFix(),o},follow:function(t){var n,r=this,i=r.config;if(typeof t=="string"||t&&t.nodeType===1)n=e(t),t=n[0];if(!t||!t.offsetWidth&&!t.offsetHeight)return r.position(r._left,r._top);var s=d+"follow",o=a.width(),u=a.height(),l=f.scrollLeft(),c=f.scrollTop(),p=n.offset(),v=t.offsetWidth,m=t.offsetHeight,g=h?!1:i.fixed,y=g?p.left-l:p.left,b=g?p.top-c:p.top,w=r.DOM.wrap[0],E=w.style,S=w.offsetWidth,x=w.offsetHeight,T=y-(S-v)/2,N=b+m,C=g?0:l,k=g?0:c;return T=T<C?y:T+S>o&&y-S>C?y-S+v:T,N=N+x>u+k&&b-x>k?b-x:N,E.left=T+"px",E.top=N+"px",r._follow&&r._follow.removeAttribute(s),r._follow=t,t[s]=i.id,r._autoPositionType(),r},button:function(){var t=this,r=arguments,i=t.DOM,s=i.buttons,o=s[0],u="aui_state_highlight",a=t._listeners=t._listeners||{},f=e.isArray(r[0])?r[0]:[].slice.call(r);return r[0]===n?o:(e.each(f,function(n,r){var i=r.name,s=!a[i],f=s?document.createElement("button"):a[i].elem;a[i]||(a[i]={}),r.callback&&(a[i].callback=r.callback),r.className&&(f.className=r.className),r.focus&&(t._focus&&t._focus.removeClass(u),t._focus=e(f).addClass(u),t.focus()),f.setAttribute("type","button"),f[d+"callback"]=i,f.disabled=!!r.disabled,s&&(f.innerHTML=i,a[i].elem=f,o.appendChild(f))}),s[0].style.display=f.length?"":"none",t._ie6SelectFix(),t)},show:function(){return this.DOM.wrap.show(),!arguments[0]&&this._lockMaskWrap&&this._lockMaskWrap.show(),this},hide:function(){return this.DOM.wrap.hide(),!arguments[0]&&this._lockMaskWrap&&this._lockMaskWrap.hide(),this},close:function(){if(this.closed)return this;var e=this,n=e.DOM,i=n.wrap,s=v.list,o=e.config.close,u=e.config.follow;e.time();if(typeof o=="function"&&o.call(e,t)===!1)return e;e.unlock(),e._elemBack&&e._elemBack(),i[0].className=i[0].style.cssText="",n.title.html(""),n.content.html(""),n.buttons.html(""),v.focus===e&&(v.focus=null),u&&u.removeAttribute(d+"follow"),delete s[e.config.id],e._removeEvent(),e.hide(!0)._setAbsolute();for(var a in e)e.hasOwnProperty(a)&&a!=="DOM"&&delete e[a];return r?i.remove():r=e,e},time:function(e){var t=this,n=t.config.cancelVal,r=t._timer;return r&&clearTimeout(r),e&&(t._timer=setTimeout(function(){t._click(n)},1e3*e)),t},focus:function(){try{if(this.config.focus){var e=this._focus&&this._focus[0]||this.DOM.close[0];e&&e.focus()}}catch(t){}return this},zIndex:function(){var e=this,t=e.DOM,n=t.wrap,r=v.focus,i=v.defaults.zIndex++;return n.css("zIndex",i),e._lockMask&&e._lockMask.css("zIndex",i-1),r&&r.DOM.wrap.removeClass("aui_state_focus"),v.focus=e,n.addClass("aui_state_focus"),e},lock:function(){if(this._lock)return this;var t=this,n=v.defaults.zIndex-1,r=t.DOM.wrap,i=t.config,s=f.width(),o=f.height(),u=t._lockMaskWrap||e(document.body.appendChild(document.createElement("div"))),a=t._lockMask||e(u[0].appendChild(document.createElement("div"))),l="(document).documentElement",c=p?"width:"+s+"px;height:"+o+"px":"width:100%;height:100%",d=h?"position:absolute;left:expression("+l+".scrollLeft);top:expression("+l+".scrollTop);width:expression("+l+".clientWidth);height:expression("+l+".clientHeight)":"";return t.zIndex(),r.addClass("aui_state_lock"),u[0].style.cssText=c+";position:fixed;z-index:"+n+";top:0;left:0;overflow:hidden;"+d,a[0].style.cssText="height:100%;background:"+i.background+";filter:alpha(opacity=0);opacity:0",h&&a.html('<iframe src="about:blank" style="width:100%;height:100%;position:absolute;top:0;left:0;z-index:-1;filter:alpha(opacity=0)"></iframe>'),a.stop(),a.bind("click",function(){t._reset()}).bind("dblclick",function(){t._click(t.config.cancelVal)}),i.duration===0?a.css({opacity:i.opacity}):a.animate({opacity:i.opacity},i.duration),t._lockMaskWrap=u,t._lockMask=a,t._lock=!0,t},unlock:function(){var e=this,t=e._lockMaskWrap,n=e._lockMask;if(!e._lock)return e;var i=t[0].style,s=function(){h&&(i.removeExpression("width"),i.removeExpression("height"),i.removeExpression("left"),i.removeExpression("top")),i.cssText="display:none",r&&t.remove()};return n.stop().unbind(),e.DOM.wrap.removeClass("aui_state_lock"),e.config.duration?n.animate({opacity:0},e.config.duration,s):s(),e._lock=!1,e},_getDOM:function(){var t=document.createElement("div"),n=document.body;t.style.cssText="position:absolute;left:0;top:0",t.innerHTML=v._templates,n.insertBefore(t,n.firstChild);var r,i=0,s={wrap:e(t)},o=t.getElementsByTagName("*"),u=o.length;for(;i<u;i++)r=o[i].className.split("aui_")[1],r&&(s[r]=e(o[i]));return s},_toNumber:function(e,t){if(!e&&e!==0||typeof e=="number")return e;var n=e.length-1;return e.lastIndexOf("px")===n?e=parseInt(e):e.lastIndexOf("%")===n&&(e=parseInt(t*e.split("%")[0]/100)),e},_ie6PngFix:h?function(){var e=0,t,n,r,i,s=v.defaults.path+"/skins/",o=this.DOM.wrap[0].getElementsByTagName("*");for(;e<o.length;e++)t=o[e],n=t.currentStyle.png,n&&(r=s+n,i=t.runtimeStyle,i.backgroundImage="none",i.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+r+"',sizingMethod='crop')")}:e.noop,_ie6SelectFix:h?function(){var e=this.DOM.wrap,t=e[0],n=d+"iframeMask",r=e[n],i=t.offsetWidth,s=t.offsetHeight;i+="px",s+="px",r?(r.style.width=i,r.style.height=s):(r=t.appendChild(document.createElement("iframe")),e[n]=r,r.src="about:blank",r.style.cssText="position:absolute;z-index:-1;left:0;top:0;filter:alpha(opacity=0);width:"+i+";height:"+s)}:e.noop,_runScript:function(e){var t,n=0,r=0,i=e.getElementsByTagName("script"),s=i.length,o=[];for(;n<s;n++)i[n].type==="text/dialog"&&(o[r]=i[n].innerHTML,r++);o.length&&(o=o.join(""),t=new Function(o),t.call(this))},_autoPositionType:function(){this[this.config.fixed?"_setFixed":"_setAbsolute"]()},_setFixed:function(){return h&&e(function(){var t="backgroundAttachment";l.css(t)!=="fixed"&&e("body").css(t)!=="fixed"&&l.css({zoom:1,backgroundImage:"url(about:blank)",backgroundAttachment:"fixed"})}),function(){var e=this.DOM.wrap,t=e[0].style;if(h){var n=parseInt(e.css("left")),r=parseInt(e.css("top")),i=f.scrollLeft(),s=f.scrollTop(),o="(document.documentElement)";this._setAbsolute(),t.setExpression("left","eval("+o+".scrollLeft + "+(n-i)+') + "px"'),t.setExpression("top","eval("+o+".scrollTop + "+(r-s)+') + "px"')}else t.position="fixed"}}(),_setAbsolute:function(){var e=this.DOM.wrap[0].style;h&&(e.removeExpression("left"),e.removeExpression("top")),e.position="absolute"},_click:function(e){var n=this,r=n._listeners[e]&&n._listeners[e].callback;return typeof r!="function"||r.call(n,t)!==!1?n.close():n},_reset:function(e){var t,n=this,r=n._winSize||a.width()*a.height(),i=n._follow,s=n._width,o=n._height,u=n._left,f=n._top;if(e){t=n._winSize=a.width()*a.height();if(r===t)return}(s||o)&&n.size(s,o),i?n.follow(i):(u||f)&&n.position(u,f)},_addEvent:function(){var e,n=this,r=n.config,i="CollectGarbage"in t,s=n.DOM;n._winResize=function(){e&&clearTimeout(e),e=setTimeout(function(){n._reset(i)},40)},a.bind("resize",n._winResize),s.wrap.bind("click",function(e){var t=e.target,i;if(t.disabled)return!1;if(t===s.close[0])return n._click(r.cancelVal),!1;i=t[d+"callback"],i&&n._click(i),n._ie6SelectFix()}).bind("mousedown",function(){n.zIndex()})},_removeEvent:function(){var e=this,t=e.DOM;t.wrap.unbind(),a.unbind("resize",e._winResize)}},v.fn._init.prototype=v.fn,e.fn.dialog=e.fn.artDialog=function(){var e=arguments;return this[this.live?"live":"bind"]("click",function(){return v.apply(this,e),!1}),this},v.focus=null,v.get=function(e){return e===n?v.list:v.list[e]},v.list={},f.bind("keydown",function(e){var t=e.target,n=t.nodeName,r=/^INPUT|TEXTAREA$/,i=v.focus,s=e.keyCode;if(!i||!i.config.esc||r.test(n))return;s===27&&i._click(i.config.cancelVal)}),o=t._artDialog_path||function(e,t,n){for(t in e)e[t].src&&e[t].src.indexOf("artDialog")!==-1&&(n=e[t]);return i=n||e[e.length-1],n=i.src.replace(/\\/g,"/"),n.lastIndexOf("/")<0?".":n.substring(0,n.lastIndexOf("/"))}(document.getElementsByTagName("script")),s=i.src.split("skin=")[1];if(s){var m=document.createElement("link");m.rel="stylesheet",m.href=o+"/skins/"+s+".css?"+v.fn.version,i.parentNode.insertBefore(m,i)}a.bind("load",function(){setTimeout(function(){if(u)return;v({left:"-9999em",time:9,fixed:!1,lock:!1,focus:!1})},150)});try{document.execCommand("BackgroundImageCache",!1,!0)}catch(g){}v._templates='<div class="aui_outer"><table class="aui_border"><tbody><tr><td class="aui_nw"></td><td class="aui_n"></td><td class="aui_ne"></td></tr><tr><td class="aui_w"></td><td class="aui_c"><div class="aui_inner"><table class="aui_dialog"><tbody><tr><td colspan="2" class="aui_header"><div class="aui_titleBar"><div class="aui_title"></div><a class="aui_close" href="javascript:/*artDialog*/;">\u00d7</a></div></td></tr><tr><td class="aui_icon"><div class="aui_iconBg"></div></td><td class="aui_main"><div class="aui_content"></div></td></tr><tr><td colspan="2" class="aui_footer"><div class="aui_buttons"></div></td></tr></tbody></table></div></td><td class="aui_e"></td></tr><tr><td class="aui_sw"></td><td class="aui_s"></td><td class="aui_se"></td></tr></tbody></table></div>',v.defaults={content:'<div class="aui_loading"><span>loading..</span></div>',title:"\u6d88\u606f",button:null,ok:null,cancel:null,init:null,close:null,okVal:"\u786e\u5b9a",cancelVal:"\u53d6\u6d88",width:"auto",height:"auto",minWidth:96,minHeight:32,padding:"20px 25px",skin:"",icon:null,time:null,esc:!0,focus:!0,show:!0,follow:null,path:o,lock:!1,background:"#000",opacity:.7,duration:300,fixed:!1,left:"50%",top:"38.2%",zIndex:1987,resize:!0,drag:!0},t.artDialog=e.dialog=e.artDialog=v}(this.art||this.jQuery&&(this.art=jQuery),this),function(e){var t,n,r=e(window),i=e(document),s=document.documentElement,o=!("minWidth"in s.style),u="onlosecapture"in s,a="setCapture"in s;artDialog.dragEvent=function(){var e=this,t=function(t){var n=e[t];e[t]=function(){return n.apply(e,arguments)}};t("start"),t("move"),t("end")},artDialog.dragEvent.prototype={onstart:e.noop,start:function(e){return i.bind("mousemove",this.move).bind("mouseup",this.end),this._sClientX=e.clientX,this._sClientY=e.clientY,this.onstart(e.clientX,e.clientY),!1},onmove:e.noop,move:function(e){return this._mClientX=e.clientX,this._mClientY=e.clientY,this.onmove(e.clientX-this._sClientX,e.clientY-this._sClientY),!1},onend:e.noop,end:function(e){return i.unbind("mousemove",this.move).unbind("mouseup",this.end),this.onend(e.clientX,e.clientY),!1}},n=function(e){var n,s,f,l,c,h,p=artDialog.focus,d=p.DOM,v=d.wrap,m=d.title,g=d.main,y="getSelection"in window?function(){window.getSelection().removeAllRanges()}:function(){try{document.selection.empty()}catch(e){}};t.onstart=function(e,n){h?(s=g[0].offsetWidth,f=g[0].offsetHeight):(l=v[0].offsetLeft,c=v[0].offsetTop),i.bind("dblclick",t.end),!o&&u?m.bind("losecapture",t.end):r.bind("blur",t.end),a&&m[0].setCapture(),v.addClass("aui_state_drag"),p.focus()},t.onmove=function(e,t){if(h){var r=v[0].style,i=g[0].style,o=e+s,u=t+f;r.width="auto",i.width=Math.max(0,o)+"px",r.width=v[0].offsetWidth+"px",i.height=Math.max(0,u)+"px"}else{var i=v[0].style,a=Math.max(n.minX,Math.min(n.maxX,e+l)),d=Math.max(n.minY,Math.min(n.maxY,t+c));i.left=a+"px",i.top=d+"px"}y(),p._ie6SelectFix()},t.onend=function(e,n){i.unbind("dblclick",t.end),!o&&u?m.unbind("losecapture",t.end):r.unbind("blur",t.end),a&&m[0].releaseCapture(),o&&!p.closed&&p._autoPositionType(),v.removeClass("aui_state_drag")},h=e.target===d.se[0]?!0:!1,n=function(){var e,t,n=p.DOM.wrap[0],s=n.style.position==="fixed",o=n.offsetWidth,u=n.offsetHeight,a=r.width(),f=r.height(),l=s?0:i.scrollLeft(),c=s?0:i.scrollTop(),e=a-o+l;return t=f-u+c,{minX:l,minY:c,maxX:e,maxY:t}}(),t.start(e)},i.bind("mousedown",function(e){var r=artDialog.focus;if(!r)return;var i=e.target,s=r.config,o=r.DOM;if(s.drag!==!1&&i===o.title[0]||s.resize!==!1&&i===o.se[0])return t=t||new artDialog.dragEvent,n(e),!1})}(this.art||this.jQuery&&(this.art=jQuery))/*!
 * artDialog iframeTools
 * Date: 2011-12-08 1:32
 * http://code.google.com/p/artdialog/
 * (c) 2009-2011 TangBin, http://www.planeArt.cn
 *
 * This is licensed under the GNU LGPL, version 2.1 or later.
 * For details, see: http://creativecommons.org/licenses/LGPL/2.1/
 */
eval(function(B,D,A,G,E,F){function C(A){return A<62?String.fromCharCode(A+=A<26?65:A<52?71:-4):A<63?'_':A<64?'$':C(A>>6)+C(A&63)}while(A>0)E[C(G--)]=D[--A];return B.replace(/[\w\$]+/g,function(A){return E[A]==F[A]?A:E[A]})}('(6(E,C,D,A){c B,X,W,J="@_.DATA",K="@_.OPEN",H="@_.OPENER",I=C.k=C.k||"@_.WINNAME"+(Bd Bo).Be(),F=C.VBArray&&!C.XMLHttpRequest;E(6(){!C.Bu&&7.BY==="B0"&&Br("9 Error: 7.BY === \\"B0\\"")});c G=D.d=6(){c W=C,X=6(A){f{c W=C[A].7;W.BE}u(X){v!V}v C[A].9&&W.BE("frameset").length===U};v X("d")?W=C.d:X("BB")&&(W=C.BB),W}();D.BB=G,B=G.9,W=6(){v B.BW.w},D.m=6(C,B){c W=D.d,X=W[J]||{};W[J]=X;b(B!==A)X[C]=B;else v X[C];v X},D.BQ=6(W){c X=D.d[J];X&&X[W]&&1 X[W]},D.through=X=6(){c X=B.BR(i,BJ);v G!==C&&(D.B4[X.0.Z]=X),X},G!==C&&E(C).BN("unload",6(){c A=D.B4,W;BO(c X BS A)A[X]&&(W=A[X].0,W&&(W.duration=U),A[X].s(),1 A[X])}),D.p=6(B,O,BZ){O=O||{};c N,L,M,Bc,T,S,R,Q,BF,P=D.d,Ba="8:BD;n:-Bb;d:-Bb;Bp:o U;Bf:transparent",BI="r:g%;x:g%;Bp:o U";b(BZ===!V){c BH=(Bd Bo).Be(),BG=B.replace(/([?&])W=[^&]*/,"$1_="+BH);B=BG+(BG===B?(/\\?/.test(B)?"&":"?")+"W="+BH:"")}c G=6(){c B,C,W=L.2.B2(".aui_loading"),A=N.0;M.addClass("Bi"),W&&W.hide();f{Q=T.$,R=E(Q.7),BF=Q.7.Bg}u(X){T.q.5=BI,A.z?N.z(A.z):N.8(A.n,A.d),O.j&&O.j.l(N,Q,P),O.j=By;v}B=A.r==="Bt"?R.r()+(F?U:parseInt(E(BF).Bv("marginLeft"))):A.r,C=A.x==="Bt"?R.x():A.x,setTimeout(6(){T.q.5=BI},U),N.Bk(B,C),A.z?N.z(A.z):N.8(A.n,A.d),O.j&&O.j.l(N,Q,P),O.j=By},I={w:W(),j:6(){N=i,L=N.h,Bc=L.BM,M=L.2,T=N.BK=P.7.Bn("BK"),T.Bx=B,T.k="Open"+N.0.Z,T.q.5=Ba,T.BX("frameborder",U,U),T.BX("allowTransparency",!U),S=E(T),N.2().B3(T),Q=T.$;f{Q.k=T.k,D.m(T.k+K,N),D.m(T.k+H,C)}u(X){}S.BN("BC",G)},s:6(){S.Bv("4","o").unbind("BC",G);b(O.s&&O.s.l(i,T.$,P)===!V)v!V;M.removeClass("Bi"),S[U].Bx="about:blank",S.remove();f{D.BQ(T.k+K),D.BQ(T.k+H)}u(X){}}};Bq O.Y=="6"&&(I.Y=6(){v O.Y.l(N,T.$,P)}),Bq O.y=="6"&&(I.y=6(){v O.y.l(N,T.$,P)}),1 O.2;BO(c J BS O)I[J]===A&&(I[J]=O[J]);v X(I)},D.p.Bw=D.m(I+K),D.BT=D.m(I+H)||C,D.p.origin=D.BT,D.s=6(){c X=D.m(I+K);v X&&X.s(),!V},G!=C&&E(7).BN("mousedown",6(){c X=D.p.Bw;X&&X.w()}),D.BC=6(C,D,B){B=B||!V;c G=D||{},H={w:W(),j:6(A){c W=i,X=W.0;E.ajax({url:C,success:6(X){W.2(X),G.j&&G.j.l(W,A)},cache:B})}};1 D.2;BO(c F BS G)H[F]===A&&(H[F]=G[F]);v X(H)},D.Br=6(B,A){v X({Z:"Alert",w:W(),BL:"warning",t:!U,BA:!U,2:B,Y:!U,s:A})},D.confirm=6(C,A,B){v X({Z:"Confirm",w:W(),BL:"Bm",t:!U,BA:!U,3:U.V,2:C,Y:6(X){v A.l(i,X)},y:6(X){v B&&B.l(i,X)}})},D.prompt=6(D,B,C){C=C||"";c A;v X({Z:"Prompt",w:W(),BL:"Bm",t:!U,BA:!U,3:U.V,2:["<e q=\\"margin-bottom:5px;font-Bk:12px\\">",D,"</e>","<e>","<Bl B1=\\"",C,"\\" q=\\"r:18em;Bh:6px 4px\\" />","</e>"].join(""),j:6(){A=i.h.2.B2("Bl")[U],A.select(),A.BP()},Y:6(X){v B&&B.l(i,A.B1,X)},y:!U})},D.tips=6(B,A){v X({Z:"Tips",w:W(),title:!V,y:!V,t:!U,BA:!V}).2("<e q=\\"Bh: U 1em;\\">"+B+"</e>").time(A||V.B6)},E(6(){c A=D.dragEvent;b(!A)v;c B=E(C),X=E(7),W=F?"BD":"t",H=A.prototype,I=7.Bn("e"),G=I.q;G.5="4:o;8:"+W+";n:U;d:U;r:g%;x:g%;"+"cursor:move;filter:alpha(3=U);3:U;Bf:#FFF",7.Bg.B3(I),H.Bj=H.Bs,H.BV=H.Bz,H.Bs=6(){c E=D.BP.h,C=E.BM[U],A=E.2[U].BE("BK")[U];H.Bj.BR(i,BJ),G.4="block",G.w=D.BW.w+B5,W==="BD"&&(G.r=B.r()+"a",G.x=B.x()+"a",G.n=X.scrollLeft()+"a",G.d=X.scrollTop()+"a"),A&&C.offsetWidth*C.offsetHeight>307200&&(C.q.BU="hidden")},H.Bz=6(){c X=D.BP;H.BV.BR(i,BJ),G.4="o",X&&(X.h.BM[U].q.BU="visible")}})})(i.art||i.Bu,i,i.9)','P|R|T|U|V|W|0|1|_|$|ok|id|px|if|var|top|div|try|100|DOM|this|init|name|call|data|left|none|open|style|width|close|fixed|catch|return|zIndex|height|cancel|follow|config|delete|content|opacity|display|cssText|function|document|position|artDialog|ARTDIALOG|contentWindow|lock|parent|load|absolute|getElementsByTagName|S|Y|Z|a|arguments|iframe|icon|main|bind|for|focus|removeData|apply|in|opener|visibility|_end|defaults|setAttribute|compatMode|O|Q|9999em|X|new|getTime|background|body|padding|aui_state_full|_start|size|input|question|createElement|Date|border|typeof|alert|start|auto|jQuery|css|api|src|null|end|BackCompat|value|find|appendChild|list|3|5'.split('|'),109,122,{},{}))/************************************************************************
*************************************************************************
@Name :       	jNotify - jQuery Plugin
@Revison :    	2.1
@Date : 		18/01/2011
@Author:     	 ALPIXEL (www.myjqueryplugins.com - www.alpixel.fr)
@Support:    	 FF, IE7, IE8, MAC Firefox, MAC Safari
@License :		 Open Source - MIT License : http://www.opensource.org/licenses/mit-license.php
 
**************************************************************************
*************************************************************************/
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(6($){$.5={19:{m:9,1e:13,1h:P,k:1j,F:P,H:P,A:15,1b:\'y\',I:\'d\',x:9,1c:\'#1i\',18:0.3,n:16,o:16},G:6(b,j,f){4=$.1k({},$.5.19,j);7($("#"+f).r==0)$8=$.5.1f(f,b);U=g($(L).1s());R=g($(L).1u());C=g($(L).1v());D=g($(L).1w());s=$.5.q(4.I);17=$.5.v(4.1b);7(4.x&&$("#h").r==0)$.5.14($8);$.5.12(b)},1f:6(f,b){$8=$(\'<11 f="\'+f+\'"/>\').t({i:0,1l:4.1h}).1n(b).1d(\'1g\');z $8},q:6(K){B(K){a\'d\':p q=C+g($8.S(9)/2);c;a\'y\':p q=C+(R/2)-(g($8.S(9))/2);c;a\'Q\':p q=C+R-g($8.S(9));c}z q},v:6(K){B(K){a\'Z\':p v=D;c;a\'y\':p v=D+(U/2)-(g($8.10(9))/2);c;a\'1t\':p v=D+U-g($8.10(9));c}z v},12:6(b){$8.t({d:s,Z:17});B(4.I){a\'d\':$8.u({d:s+4.A,i:1},4.F,6(){7(4.o)4.o()});7(4.m)$.5.l();M $8.t(\'N\',\'T\').J(6(e){$.5.l()});c;a\'y\':$8.u({i:1},4.F,6(){7(4.o)4.o()});7(4.m)$.5.l();M $8.t(\'N\',\'T\').J(6(e){$.5.l()});c;a\'Q\':$8.u({d:s-4.A,i:1},4.F,6(){7(4.o)4.o()});7(4.m)$.5.l();M $8.t(\'N\',\'T\').J(6(e){$.5.l()});c}},14:6(1m){p 1a=$(\'<11 f="h" />\').t({1o:4.1c,i:4.18}).1d(\'1g\').1p();7(4.1e)1a.J(6(e){e.1q();4.k=0;$.5.l()})},l:6(){B(4.I){a\'d\':7(!4.m)4.k=0;$8.V(9,9).W(4.k).u({d:s-4.A,i:0},4.H,6(){$(X).w();7(4.x&&$("#h").r>0)$("#h").w();7(4.n)4.n()});c;a\'y\':7(!4.m)4.k=0;$8.V(9,9).W(4.k).u({i:0},4.H,6(){$(X).w();7(4.x&&$("#h").r>0)$("#h").w();7(4.n)4.n()});c;a\'Q\':7(!4.m)4.k=0;$8.V(9,9).W(4.k).u({d:s+4.A,i:0},4.H,6(){$(X).w();7(4.x&&$("#h").r>0)$("#h").w();7(4.n)4.n()});c}},E:6(f){7($(\'#\'+f).r>0)z 13;M z 9}};5=6(b,j){7($.5.E(\'5\'))$.5.G(b,j,\'5\')};Y=6(b,j){7($.5.E(\'Y\'))$.5.G(b,j,\'Y\')};O=6(b,j){7($.5.E(\'O\'))$.5.G(b,j,\'O\')}})(1r);',62,95,'||||opts|jNotify|function|if|Div|true|case|msg|break|top||id|parseInt|jOverlay|opacity|options|TimeShown|_close|autoHide|onClosed|onCompleted|var|vPos|length|posTop|css|animate|hPos|remove|ShowOverlay|center|return|LongTrip|switch|ScrollTop|ScrollLeft|_isReadable|ShowTimeEffect|init|HideTimeEffect|VerticalPosition|click|pos|window|else|cursor|jError|200|bottom|HeightDoc|outerHeight|pointer|WidthDoc|stop|delay|this|jSuccess|left|outerWidth|div|_show|false|_showOverlay||null|posLeft|OpacityOverlay|defaults|overlay|HorizontalPosition|ColorOverlay|appendTo|clickOverlay|_construct|body|MinWidth|000|1500|extend|minWidth|el|html|backgroundColor|show|preventDefault|jQuery|width|right|height|scrollTop|scrollLeft'.split('|'),0,{}))/************************************************************************
*************************************************************************
@Name :         jRating - jQuery Plugin
@Revison :      3.1
@Date :         13/08/2013
@Author:        ALPIXEL - (www.myjqueryplugins.com - www.alpixel.fr)
@License :      Open Source - MIT License : http://www.opensource.org/licenses/mit-license.php

**************************************************************************
*************************************************************************/
(function($) {
	$.fn.jRating = function(op) {
		var defaults = {
			bigStarsPath: '/yecha/icons/stars.png',
			smallStarsPath: '/yecha/icons/small.png',
			phpPath: '/jRating.php',
			type: 'big',
			step: false,
			isDisabled: false,
			showRateInfo: true,
			canRateAgain: false,
			sendRequest: true,
			length: 5,
			decimalLength: 0,
			rateMax: 20,
			rateInfosX: -45,
			rateInfosY: 5,
			nbRates: 1,
			onSuccess: null,
			onError: null,
			onClick: null
		};
		if (this.length > 0) return this.each(function() {
			var opts = $.extend(defaults, op),
			newWidth = 0,
			starWidth = 0,
			starHeight = 0,
			bgPath = '',
			hasRated = false,
			globalWidth = 0,
			nbOfRates = opts.nbRates;
			if ($(this).hasClass('jDisabled') || opts.isDisabled) var jDisabled = true;
			else var jDisabled = false;
			getStarWidth();
			$(this).height(starHeight);
			var average = parseFloat($(this).attr('data-average')),
			idBox = parseInt($(this).attr('data-id')),
			widthRatingContainer = starWidth * opts.length,
			widthColor = average / opts.rateMax * widthRatingContainer,
			quotient = $('<div>', {
				'class': 'jRatingColor',
				css: {
					width: widthColor
				}
			}).appendTo($(this)),
			average = $('<div>', {
				'class': 'jRatingAverage',
				css: {
					width: 0,
					top: -starHeight
				}
			}).appendTo($(this)),
			jstar = $('<div>', {
				'class': 'jStar',
				css: {
					width: widthRatingContainer,
					height: starHeight,
					top: -(starHeight * 2),
					background: 'url(' + bgPath + ') repeat-x'
				}
			}).appendTo($(this));
			$(this).css({
				width: widthRatingContainer,
				overflow: 'hidden',
				zIndex: 1,
				position: 'relative'
			});
			if (!jDisabled) $(this).unbind().bind({
				mouseenter: function(e) {
					var realOffsetLeft = findRealLeft(this);
					var relativeX = e.pageX - realOffsetLeft;
					if (opts.showRateInfo) var tooltip = $('<p>', {
						'class': 'jRatingInfos',
						html: getNote(relativeX) + ' <span class="maxRate">/ ' + opts.rateMax + '</span>',
						css: {
							top: (e.pageY + opts.rateInfosY),
							left: (e.pageX + opts.rateInfosX)
						}
					}).appendTo('body').show()
				},
				mouseover: function(e) {
					$(this).css('cursor', 'pointer')
				},
				mouseout: function() {
					$(this).css('cursor', 'default');
					if (hasRated) average.width(globalWidth);
					else average.width(0)
				},
				mousemove: function(e) {
					var realOffsetLeft = findRealLeft(this);
					var relativeX = e.pageX - realOffsetLeft;
					if (opts.step) newWidth = Math.floor(relativeX / starWidth) * starWidth + starWidth;
					else newWidth = relativeX;
					average.width(newWidth);
					if (opts.showRateInfo) $("p.jRatingInfos").css({
						left: (e.pageX + opts.rateInfosX)
					}).html(getNote(newWidth) + ' <span class="maxRate">/ ' + opts.rateMax + '</span>')
				},
				mouseleave: function() {
					$("p.jRatingInfos").remove()
				},
				click: function(e) {
					var element = this;
					hasRated = true;
					globalWidth = newWidth;
					nbOfRates--;
					if (!opts.canRateAgain || parseInt(nbOfRates) <= 0) $(this).unbind().css('cursor', 'default').addClass('jDisabled');
					if (opts.showRateInfo) $("p.jRatingInfos").fadeOut('fast',
					function() {
						$(this).remove()
					});
					e.preventDefault();
					var rate = getNote(newWidth);
					average.width(newWidth);
					$('.datasSent p').html('<strong>idBox : </strong>' + idBox + '<br /><strong>rate : </strong>' + rate + '<br /><strong>action :</strong> rating');
					$('.serverResponse p').html('<strong>Loading...</strong>');
					if (opts.onClick) opts.onClick(element, rate);
					if (opts.sendRequest) {
						$.post(opts.phpPath, {
							idBox: idBox,
							rate: rate,
							action: 'rating'
						},
						function(data) {
							if (!data.error) {
								$('.serverResponse p').html(data.server);
								if (opts.onSuccess) opts.onSuccess(element, rate)
							} else {
								$('.serverResponse p').html(data.server);
								if (opts.onError) opts.onError(element, rate)
							}
						},
						'json')
					}
				}
			});
			function getNote(relativeX) {
				var noteBrut = parseFloat((relativeX * 100 / widthRatingContainer) * parseInt(opts.rateMax) / 100);
				var dec = Math.pow(10, parseInt(opts.decimalLength));
				var note = Math.round(noteBrut * dec) / dec;
				return note
			};
			function getStarWidth() {
				switch (opts.type) {
				case 'small':
					starWidth = 12;
					starHeight = 10;
					bgPath = opts.smallStarsPath;
					break;
				default:
					starWidth = 23;
					starHeight = 20;
					bgPath = opts.bigStarsPath
				}
			};
			function findRealLeft(obj) {
				if (!obj) return 0;
				return obj.offsetLeft + findRealLeft(obj.offsetParent)
			}
		})
	}
})(jQuery);/*
 * Lazy Load - jQuery plugin for lazy loading images
 *
 * Copyright (c) 2007-2013 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *   http://www.appelsiini.net/projects/lazyload
 *
 * Version:  1.9.0
 *
 */
!function(e,t,o,i){var n=e(t);e.fn.lazyload=function(r){function f(){var t=0;a.each(function(){var o=e(this);if(!h.skip_invisible||o.is(":visible"))if(e.abovethetop(this,h)||e.leftofbegin(this,h));else if(e.belowthefold(this,h)||e.rightoffold(this,h)){if(++t>h.failure_limit)return!1}else o.trigger("appear"),t=0})}var l,a=this,h={threshold:0,failure_limit:0,event:"scroll",effect:"show",container:t,data_attribute:"original",skip_invisible:!0,appear:null,load:null,placeholder:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"};return r&&(i!==r.failurelimit&&(r.failure_limit=r.failurelimit,delete r.failurelimit),i!==r.effectspeed&&(r.effect_speed=r.effectspeed,delete r.effectspeed),e.extend(h,r)),l=h.container===i||h.container===t?n:e(h.container),0===h.event.indexOf("scroll")&&l.bind(h.event,function(){return f()}),this.each(function(){var t=this,o=e(t);t.loaded=!1,(o.attr("src")===i||o.attr("src")===!1)&&o.attr("src",h.placeholder),o.one("appear",function(){if(!this.loaded){if(h.appear){var i=a.length;h.appear.call(t,i,h)}e("<img />").bind("load",function(){var i=o.data(h.data_attribute);o.hide(),o.is("img")?o.attr("src",i):o.css("background-image","url('"+i+"')"),o[h.effect](h.effect_speed),t.loaded=!0;var n=e.grep(a,function(e){return!e.loaded});if(a=e(n),h.load){var r=a.length;h.load.call(t,r,h)}}).attr("src",o.data(h.data_attribute))}}),0!==h.event.indexOf("scroll")&&o.bind(h.event,function(){t.loaded||o.trigger("appear")})}),n.bind("resize",function(){f()}),/iphone|ipod|ipad.*os 5/gi.test(navigator.appVersion)&&n.bind("pageshow",function(t){t.originalEvent&&t.originalEvent.persisted&&a.each(function(){e(this).trigger("appear")})}),e(o).ready(function(){f()}),this},e.belowthefold=function(o,r){var f;return f=r.container===i||r.container===t?(t.innerHeight?t.innerHeight:n.height())+n.scrollTop():e(r.container).offset().top+e(r.container).height(),f<=e(o).offset().top-r.threshold},e.rightoffold=function(o,r){var f;return f=r.container===i||r.container===t?n.width()+n.scrollLeft():e(r.container).offset().left+e(r.container).width(),f<=e(o).offset().left-r.threshold},e.abovethetop=function(o,r){var f;return f=r.container===i||r.container===t?n.scrollTop():e(r.container).offset().top,f>=e(o).offset().top+r.threshold+e(o).height()},e.leftofbegin=function(o,r){var f;return f=r.container===i||r.container===t?n.scrollLeft():e(r.container).offset().left,f>=e(o).offset().left+r.threshold+e(o).width()},e.inviewport=function(t,o){return!(e.rightoffold(t,o)||e.leftofbegin(t,o)||e.belowthefold(t,o)||e.abovethetop(t,o))},e.extend(e.expr[":"],{"below-the-fold":function(t){return e.belowthefold(t,{threshold:0})},"above-the-top":function(t){return!e.belowthefold(t,{threshold:0})},"right-of-screen":function(t){return e.rightoffold(t,{threshold:0})},"left-of-screen":function(t){return!e.rightoffold(t,{threshold:0})},"in-viewport":function(t){return e.inviewport(t,{threshold:0})},"above-the-fold":function(t){return!e.belowthefold(t,{threshold:0})},"right-of-fold":function(t){return e.rightoffold(t,{threshold:0})},"left-of-fold":function(t){return!e.rightoffold(t,{threshold:0})}})}(jQuery,window,document);
/**
 * Timeago is a jQuery plugin that makes it easy to support automatically
 * updating fuzzy timestamps (e.g. "4 minutes ago" or "about 1 day ago").
 *
 * @name timeago
 * @version 1.3.0
 * @requires jQuery v1.2.3+
 * @author Ryan McGeary
 * @license MIT License - http://www.opensource.org/licenses/mit-license.php
 *
 * For usage and examples, visit:
 * http://timeago.yarp.com/
 *
 * Copyright (c) 2008-2013, Ryan McGeary (ryan -[at]- mcgeary [*dot*] org)
 */

(function (factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module.
    define(['jquery'], factory);
  } else {
    // Browser globals
    factory(jQuery);
  }
}(function ($) {
  $.timeago = function(timestamp) {
    if (timestamp instanceof Date) {
      return inWords(timestamp);
    } else if (typeof timestamp === "string") {
      return inWords($.timeago.parse(timestamp));
    } else if (typeof timestamp === "number") {
      return inWords(new Date(timestamp));
    } else {
      return inWords($.timeago.datetime(timestamp));
    }
  };
  var $t = $.timeago;

  $.extend($.timeago, {
    settings: {
      refreshMillis: 60000,
      allowFuture: false,
      localeTitle: false,
      cutoff: 0,
      strings: {
        prefixAgo: null,
        prefixFromNow: null,
        suffixAgo: "前",
        suffixFromNow: "from now",
        seconds: "不到一分钟",
        minute: "一分钟",
        minutes: "%d 分钟",
        hour: "一小时",
        hours: "%d 小时",
        day: "一天",
        days: "%d 天",
        month: "一个月",
        months: "%d 个月",
        year: "一年",
        years: "%d 年",
        wordSeparator: "",
        numbers: []
      }
    },
    inWords: function(distanceMillis) {
      var $l = this.settings.strings;
      var prefix = $l.prefixAgo;
      var suffix = $l.suffixAgo;
      if (this.settings.allowFuture) {
        if (distanceMillis < 0) {
          prefix = $l.prefixFromNow;
          suffix = $l.suffixFromNow;
        }
      }

      var seconds = Math.abs(distanceMillis) / 1000;
      var minutes = seconds / 60;
      var hours = minutes / 60;
      var days = hours / 24;
      var years = days / 365;

      function substitute(stringOrFunction, number) {
        var string = $.isFunction(stringOrFunction) ? stringOrFunction(number, distanceMillis) : stringOrFunction;
        var value = ($l.numbers && $l.numbers[number]) || number;
        return string.replace(/%d/i, value);
      }

      var words = seconds < 45 && substitute($l.seconds, Math.round(seconds)) ||
        seconds < 90 && substitute($l.minute, 1) ||
        minutes < 45 && substitute($l.minutes, Math.round(minutes)) ||
        minutes < 90 && substitute($l.hour, 1) ||
        hours < 24 && substitute($l.hours, Math.round(hours)) ||
        hours < 42 && substitute($l.day, 1) ||
        days < 30 && substitute($l.days, Math.round(days)) ||
        days < 45 && substitute($l.month, 1) ||
        days < 365 && substitute($l.months, Math.round(days / 30)) ||
        years < 1.5 && substitute($l.year, 1) ||
        substitute($l.years, Math.round(years));

      var separator = $l.wordSeparator || "";
      if ($l.wordSeparator === undefined) { separator = " "; }
      return $.trim([prefix, words, suffix].join(separator));
    },
    parse: function(iso8601) {
      var s = $.trim(iso8601);
      s = s.replace(/\.\d+/,""); // remove milliseconds
      s = s.replace(/-/,"/").replace(/-/,"/");
      s = s.replace(/T/," ").replace(/Z/," UTC");
      s = s.replace(/([\+\-]\d\d)\:?(\d\d)/," $1$2"); // -04:00 -> -0400
      return new Date(s);
    },
    datetime: function(elem) {
      var iso8601 = $t.isTime(elem) ? $(elem).attr("datetime") : $(elem).attr("title");
      return $t.parse(iso8601);
    },
    isTime: function(elem) {
      // jQuery's `is()` doesn't play well with HTML5 in IE
      return $(elem).get(0).tagName.toLowerCase() === "time"; // $(elem).is("time");
    }
  });

  // functions that can be called via $(el).timeago('action')
  // init is default when no action is given
  // functions are called with context of a single element
  var functions = {
    init: function(){
      var refresh_el = $.proxy(refresh, this);
      refresh_el();
      var $s = $t.settings;
      if ($s.refreshMillis > 0) {
        setInterval(refresh_el, $s.refreshMillis);
      }
    },
    update: function(time){
      $(this).data('timeago', { datetime: $t.parse(time) });
      refresh.apply(this);
    },
    updateFromDOM: function(){
      $(this).data('timeago', { datetime: $t.parse( $t.isTime(this) ? $(this).attr("datetime") : $(this).attr("title") ) });
      refresh.apply(this);
    }
  };

  $.fn.timeago = function(action, options) {
    var fn = action ? functions[action] : functions.init;
    if(!fn){
      throw new Error("Unknown function name '"+ action +"' for timeago");
    }
    // each over objects here and call the requested function
    this.each(function(){
      fn.call(this, options);
    });
    return this;
  };

  function refresh() {
    var data = prepareData(this);
    var $s = $t.settings;

    if (!isNaN(data.datetime)) {
      if ( $s.cutoff == 0 || distance(data.datetime) < $s.cutoff) {
        $(this).text(inWords(data.datetime));
      }
    }
    return this;
  }

  function prepareData(element) {
    element = $(element);
    if (!element.data("timeago")) {
      element.data("timeago", { datetime: $t.datetime(element) });
      var text = $.trim(element.text());
      if ($t.settings.localeTitle) {
        element.attr("title", element.data('timeago').datetime.toLocaleString());
      } else if (text.length > 0 && !($t.isTime(element) && element.attr("title"))) {
        element.attr("title", text);
      }
    }
    return element.data("timeago");
  }

  function inWords(date) {
    return $t.inWords(distance(date));
  }

  function distance(date) {
    return (new Date().getTime() - date.getTime());
  }

  // fix for IE6 suckage
  document.createElement("abbr");
  document.createElement("time");
}));
