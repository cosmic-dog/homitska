var wow,$=jQuery,H={};H.assets={disableScroll:function(t){let e=$("body"),n=window.innerWidth-e.width();t?$("body").css("overflow","unset").css("padding-right",0):$("body").css("overflow","hidden").css("padding-right",n)}},H.cookies=function(){let t=$(".cookie-banner"),e=$("#accept-cookies");function n(){t.hide(),localStorage.setItem("cookiesAccepted",!0)}return{init:function(){"undefined"!=typeof Storage&&localStorage.getItem("cookiesAccepted")||t.show(),e.click(n)}}}(),H.formValidation=function(){function t(){let t=$(this).find(".tcode"),e=$(this).find(".tnumber"),n=t.val(),i=e.val();n&&!i?(event.preventDefault(),e.addClass("not-valid")):!n&&i?(event.preventDefault(),t.addClass("not-valid")):(t.removeClass("not-valid"),e.removeClass("not-valid"))}return{init:function(){$(".wpcf7-form").submit(t)}}}(),H.form=function(){let t=$(".contact-method a"),e=$(".wpcf7-phonetext");function n(t){let e=$(this),n=e.parents(".form-row"),i=n.find(".twrap"),o=n.find(".taccount"),s=e.find("span").text();t.preventDefault(),e.addClass("active").siblings().removeClass("active"),n.find(".tmethod").val(s),"number"==e.data("field")?(i.show(),o.hide()):(i.hide(),o.show())}function i(t){let e=t.keyCode||t.which;e>=48&&e<=57||46==e||8==e||e>=37&&e<=40||t.preventDefault()}return{init:function(){document.addEventListener("wpcf7mailsent",(function(t){let e=$(t.target),n=e.find("[data-formid]"),i=e.find("[data-formname]");n.length&&(window.dataLayer=window.dataLayer||[],window.dataLayer.push({event:"formSubmissionSuccess",formId:n.data("formid"),formName:i.data("formname")})),window.location="/spasibo/"}),!1),document.addEventListener("wpcf7mailfailed",(function(t){let e=$(t.target),n=e.find("[data-formid]"),i=e.find("[data-formname]");n.length&&(window.dataLayer=window.dataLayer||[],window.dataLayer.push({event:"formSubmissionFail",formId:n.data("formid"),formName:i.data("formname")}))}),!1),$(".h-checkbox input").change((function(){$(this).parent().toggleClass("checked")})),t.click(n),e.keydown(i)}}}(),H.menu=function(){const t=$(".header-menu"),e=$(".header-menu-btn"),n=$(".menu-expand-btn"),i=$(".header-lang-btn"),o=$(".header_lang-ul");function s(){t.toggle(),$(this).toggleClass("active"),H.assets.disableScroll(t.is(":hidden"))}function r(){$(this).next().toggle(),$(this).toggleClass("expanded")}function a(t){t.preventDefault(),$(this).toggleClass("active"),o.toggleClass("active")}return{init:function(){e.click(s),n.click(r),i.click(a),function(t){let e=o.find(".active");o.prepend(e)}()}}}(),H.modal=function(){function t(t){t.preventDefault(),H.assets.disableScroll(!0),$(".overlay").fadeOut(300),$(this).parents(".modal").hide()}function e(t){let e=$(this).data("modal");t.preventDefault(),H.assets.disableScroll(),$(".overlay").fadeIn(200),$("#"+e).fadeIn(300)}return{init:function(){$(".modal-cross").click(t),$("[data-modal]").click(e)}}}(),H.products=function(){let t=0,e=$(".b-product-block input"),n=$(".b-product-blocks-sum span"),i=$(".b-product-buy-btn"),o=$(".b-product-block-wrap");function s(e){let i=$(this),o=1*$(this).parents(".b-product-block").find(".b-product-block-price").text();i.is(":checked")?t+=o:t>0?t-=o:t=0,n.text(t)}function r(){var t=$(".b-product-blocks-header"),e=$("header").height();buyUrl=$(this).attr("data-buy-url"),buyUrl?window.location=buyUrl:(o.show(),$("html").scrollTop(t.offset().top-e))}return{init:function(){e.click(s),i.click(r)}}}(),H.stickyHeader=function(){let t=$("body"),e=$("header");function n(){$("html").scrollTop()>0?(t.addClass("sticky"),e.addClass("fixed")):(t.removeClass("sticky"),e.removeClass("fixed"))}return{init:function(){n(),$(window).scroll(n)}}}(),H.svg=function(){let t=[$(".header_logo-svg")],e=$(".header_logo-line");return{init:function(){$.each(t,(function(t,n){var i=$(n).find("path");$.each(i,(function(t,n){var i=n.getTotalLength();$(n).css({"stroke-dashoffset":i+"px","stroke-dasharray":i+"px",fill:"transparent",stroke:"rgba(0,0,0,.4)"}),setTimeout((function(){$(n).css({"stroke-dashoffset":"0px",transition:"all ease-in-out 2.8s, fill ease-in-out 1s"})}),100),setTimeout((function(){$(n).css("fill","#333"),e.css("width","10em")}),2e3)})),$(n).css("visibility","visible")}))}}}(),
/*! WOW - v1.1.3 - 2016-05-06
* Copyright (c) 2016 Matthieu Aussaguel;*/
function(){var t,e,n,i,o,s=function(t,e){return function(){return t.apply(e,arguments)}},r=[].indexOf||function(t){for(var e=0,n=this.length;n>e;e++)if(e in this&&this[e]===t)return e;return-1};e=function(){function t(){}return t.prototype.extend=function(t,e){var n,i;for(n in e)i=e[n],null==t[n]&&(t[n]=i);return t},t.prototype.isMobile=function(t){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(t)},t.prototype.createEvent=function(t,e,n,i){var o;return null==e&&(e=!1),null==n&&(n=!1),null==i&&(i=null),null!=document.createEvent?(o=document.createEvent("CustomEvent")).initCustomEvent(t,e,n,i):null!=document.createEventObject?(o=document.createEventObject()).eventType=t:o.eventName=t,o},t.prototype.emitEvent=function(t,e){return null!=t.dispatchEvent?t.dispatchEvent(e):e in(null!=t)?t[e]():"on"+e in(null!=t)?t["on"+e]():void 0},t.prototype.addEvent=function(t,e,n){return null!=t.addEventListener?t.addEventListener(e,n,!1):null!=t.attachEvent?t.attachEvent("on"+e,n):t[e]=n},t.prototype.removeEvent=function(t,e,n){return null!=t.removeEventListener?t.removeEventListener(e,n,!1):null!=t.detachEvent?t.detachEvent("on"+e,n):delete t[e]},t.prototype.innerHeight=function(){return"innerHeight"in window?window.innerHeight:document.documentElement.clientHeight},t}(),n=this.WeakMap||this.MozWeakMap||(n=function(){function t(){this.keys=[],this.values=[]}return t.prototype.get=function(t){var e,n,i,o;for(e=n=0,i=(o=this.keys).length;i>n;e=++n)if(o[e]===t)return this.values[e]},t.prototype.set=function(t,e){var n,i,o,s;for(n=i=0,o=(s=this.keys).length;o>i;n=++i)if(s[n]===t)return void(this.values[n]=e);return this.keys.push(t),this.values.push(e)},t}()),t=this.MutationObserver||this.WebkitMutationObserver||this.MozMutationObserver||(t=function(){function t(){"undefined"!=typeof console&&null!==console&&console.warn("MutationObserver is not supported by your browser."),"undefined"!=typeof console&&null!==console&&console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content.")}return t.notSupported=!0,t.prototype.observe=function(){},t}()),i=this.getComputedStyle||function(t,e){return this.getPropertyValue=function(e){var n;return"float"===e&&(e="styleFloat"),o.test(e)&&e.replace(o,(function(t,e){return e.toUpperCase()})),(null!=(n=t.currentStyle)?n[e]:void 0)||null},this},o=/(\-([a-z]){1})/g,this.WOW=function(){function o(t){null==t&&(t={}),this.scrollCallback=s(this.scrollCallback,this),this.scrollHandler=s(this.scrollHandler,this),this.resetAnimation=s(this.resetAnimation,this),this.start=s(this.start,this),this.scrolled=!0,this.config=this.util().extend(t,this.defaults),null!=t.scrollContainer&&(this.config.scrollContainer=document.querySelector(t.scrollContainer)),this.animationNameCache=new n,this.wowEvent=this.util().createEvent(this.config.boxClass)}return o.prototype.defaults={boxClass:"wow",animateClass:"animated",offset:0,mobile:!0,live:!0,callback:null,scrollContainer:null},o.prototype.init=function(){var t;return this.element=window.document.documentElement,"interactive"===(t=document.readyState)||"complete"===t?this.start():this.util().addEvent(document,"DOMContentLoaded",this.start),this.finished=[]},o.prototype.start=function(){var e,n,i,o;if(this.stopped=!1,this.boxes=function(){var t,n,i,o;for(o=[],t=0,n=(i=this.element.querySelectorAll("."+this.config.boxClass)).length;n>t;t++)e=i[t],o.push(e);return o}.call(this),this.all=function(){var t,n,i,o;for(o=[],t=0,n=(i=this.boxes).length;n>t;t++)e=i[t],o.push(e);return o}.call(this),this.boxes.length)if(this.disabled())this.resetStyle();else for(n=0,i=(o=this.boxes).length;i>n;n++)e=o[n],this.applyStyle(e,!0);return this.disabled()||(this.util().addEvent(this.config.scrollContainer||window,"scroll",this.scrollHandler),this.util().addEvent(window,"resize",this.scrollHandler),this.interval=setInterval(this.scrollCallback,50)),this.config.live?new t(function(t){return function(e){var n,i,o,s,r;for(r=[],n=0,i=e.length;i>n;n++)s=e[n],r.push(function(){var t,e,n,i;for(i=[],t=0,e=(n=s.addedNodes||[]).length;e>t;t++)o=n[t],i.push(this.doSync(o));return i}.call(t));return r}}(this)).observe(document.body,{childList:!0,subtree:!0}):void 0},o.prototype.stop=function(){return this.stopped=!0,this.util().removeEvent(this.config.scrollContainer||window,"scroll",this.scrollHandler),this.util().removeEvent(window,"resize",this.scrollHandler),null!=this.interval?clearInterval(this.interval):void 0},o.prototype.sync=function(e){return t.notSupported?this.doSync(this.element):void 0},o.prototype.doSync=function(t){var e,n,i,o,s;if(null==t&&(t=this.element),1===t.nodeType){for(s=[],n=0,i=(o=(t=t.parentNode||t).querySelectorAll("."+this.config.boxClass)).length;i>n;n++)e=o[n],r.call(this.all,e)<0?(this.boxes.push(e),this.all.push(e),this.stopped||this.disabled()?this.resetStyle():this.applyStyle(e,!0),s.push(this.scrolled=!0)):s.push(void 0);return s}},o.prototype.show=function(t){return this.applyStyle(t),t.className=t.className+" "+this.config.animateClass,null!=this.config.callback&&this.config.callback(t),this.util().emitEvent(t,this.wowEvent),this.util().addEvent(t,"animationend",this.resetAnimation),this.util().addEvent(t,"oanimationend",this.resetAnimation),this.util().addEvent(t,"webkitAnimationEnd",this.resetAnimation),this.util().addEvent(t,"MSAnimationEnd",this.resetAnimation),t},o.prototype.applyStyle=function(t,e){var n,i,o;return i=t.getAttribute("data-wow-duration"),n=t.getAttribute("data-wow-delay"),o=t.getAttribute("data-wow-iteration"),this.animate(function(s){return function(){return s.customStyle(t,e,i,n,o)}}(this))},o.prototype.animate="requestAnimationFrame"in window?function(t){return window.requestAnimationFrame(t)}:function(t){return t()},o.prototype.resetStyle=function(){var t,e,n,i,o;for(o=[],e=0,n=(i=this.boxes).length;n>e;e++)t=i[e],o.push(t.style.visibility="visible");return o},o.prototype.resetAnimation=function(t){var e;return t.type.toLowerCase().indexOf("animationend")>=0?(e=t.target||t.srcElement).className=e.className.replace(this.config.animateClass,"").trim():void 0},o.prototype.customStyle=function(t,e,n,i,o){return e&&this.cacheAnimationName(t),t.style.visibility=e?"hidden":"visible",n&&this.vendorSet(t.style,{animationDuration:n}),i&&this.vendorSet(t.style,{animationDelay:i}),o&&this.vendorSet(t.style,{animationIterationCount:o}),this.vendorSet(t.style,{animationName:e?"none":this.cachedAnimationName(t)}),t},o.prototype.vendors=["moz","webkit"],o.prototype.vendorSet=function(t,e){var n,i,o,s;for(n in i=[],e)o=e[n],t[""+n]=o,i.push(function(){var e,i,r,a;for(a=[],e=0,i=(r=this.vendors).length;i>e;e++)s=r[e],a.push(t[""+s+n.charAt(0).toUpperCase()+n.substr(1)]=o);return a}.call(this));return i},o.prototype.vendorCSS=function(t,e){var n,o,s,r,a,l;for(r=(a=i(t)).getPropertyCSSValue(e),n=0,o=(s=this.vendors).length;o>n;n++)l=s[n],r=r||a.getPropertyCSSValue("-"+l+"-"+e);return r},o.prototype.animationName=function(t){var e;try{e=this.vendorCSS(t,"animation-name").cssText}catch(n){e=i(t).getPropertyValue("animation-name")}return"none"===e?"":e},o.prototype.cacheAnimationName=function(t){return this.animationNameCache.set(t,this.animationName(t))},o.prototype.cachedAnimationName=function(t){return this.animationNameCache.get(t)},o.prototype.scrollHandler=function(){return this.scrolled=!0},o.prototype.scrollCallback=function(){var t;return!this.scrolled||(this.scrolled=!1,this.boxes=function(){var e,n,i,o;for(o=[],e=0,n=(i=this.boxes).length;n>e;e++)(t=i[e])&&(this.isVisible(t)?this.show(t):o.push(t));return o}.call(this),this.boxes.length||this.config.live)?void 0:this.stop()},o.prototype.offsetTop=function(t){for(var e;void 0===t.offsetTop;)t=t.parentNode;for(e=t.offsetTop;t=t.offsetParent;)e+=t.offsetTop;return e},o.prototype.isVisible=function(t){var e,n,i,o,s;return n=t.getAttribute("data-wow-offset")||this.config.offset,o=(s=this.config.scrollContainer&&this.config.scrollContainer.scrollTop||window.pageYOffset)+Math.min(this.element.clientHeight,this.util().innerHeight())-n,e=(i=this.offsetTop(t))+t.clientHeight,o>=i&&e>=s},o.prototype.util=function(){return null!=this._util?this._util:this._util=new e},o.prototype.disabled=function(){return!this.config.mobile&&this.util().isMobile(navigator.userAgent)},o}()}.call(this),H.wpGallery=function(){let t=.1,e=$(".custom-gallery"),n=$(".blocks-gallery-grid"),i=$(".wp-block-gallery li");return{init:function(){e.removeClass("wp-block-gallery"),n.removeClass("blocks-gallery-grid"),e.find("img").each((function(){$(this).unwrap()})),e.find("a").each((function(){$(this).unwrap()})),i.each((function(){$(this).addClass("wow fadeInRight"),$(this).attr("data-wow-delay",t+"s"),t+=.1}))}}}(),H.menu.init(),H.stickyHeader.init(),H.modal.init(),H.formValidation.init(),H.wpGallery.init(),H.svg.init(),H.form.init(),H.cookies.init(),H.products.init();var wowInit=function(){WOW&&(wow=new WOW({offset:0}).init())};wowInit(),$(document).ready(()=>{let t=$("h1").first().text();$(".ctopic-hidden").val(t)});