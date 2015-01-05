!function($){$.flexslider=function(e,t){var n=$(e),a=$.extend({},$.flexslider.defaults,t),i=a.namespace,o="ontouchstart"in window||window.DocumentTouch&&document instanceof DocumentTouch,s=o?"touchend":"click",r="vertical"===a.direction,l=a.reverse,c=a.itemWidth>0,d="fade"===a.animation,u=""!==a.asNavFor,p={};$.data(e,"flexslider",n),p={init:function(){n.animating=!1,n.currentSlide=a.startAt,n.animatingTo=n.currentSlide,n.atEnd=0===n.currentSlide||n.currentSlide===n.last,n.containerSelector=a.selector.substr(0,a.selector.search(" ")),n.slides=$(a.selector,n),n.container=$(n.containerSelector,n),n.count=n.slides.length,n.syncExists=$(a.sync).length>0,"slide"===a.animation&&(a.animation="swing"),n.prop=r?"top":"marginLeft",n.args={},n.manualPause=!1,n.transitions=!a.video&&!d&&a.useCSS&&function(){var e=document.createElement("div"),t=["perspectiveProperty","WebkitPerspective","MozPerspective","OPerspective","msPerspective"];for(var a in t)if(void 0!==e.style[t[a]])return n.pfx=t[a].replace("Perspective","").toLowerCase(),n.prop="-"+n.pfx+"-transform",!0;return!1}(),""!==a.controlsContainer&&(n.controlsContainer=$(a.controlsContainer).length>0&&$(a.controlsContainer)),""!==a.manualControls&&(n.manualControls=$(a.manualControls).length>0&&$(a.manualControls)),a.randomize&&(n.slides.sort(function(){return Math.round(Math.random())-.5}),n.container.empty().append(n.slides)),n.doMath(),u&&p.asNav.setup(),n.setup("init"),a.controlNav&&p.controlNav.setup(),a.directionNav&&p.directionNav.setup(),a.keyboard&&(1===$(n.containerSelector).length||a.multipleKeyboard)&&$(document).bind("keyup",function(e){var t=e.keyCode;if(!n.animating&&(39===t||37===t)){var i=39===t?n.getTarget("next"):37===t?n.getTarget("prev"):!1;n.flexAnimate(i,a.pauseOnAction)}}),a.mousewheel&&n.bind("mousewheel",function(e,t,i,o){e.preventDefault();var s=n.getTarget(0>t?"next":"prev");n.flexAnimate(s,a.pauseOnAction)}),a.pausePlay&&p.pausePlay.setup(),a.slideshow&&(a.pauseOnHover&&n.hover(function(){n.manualPlay||n.manualPause||n.pause()},function(){n.manualPause||n.manualPlay||n.play()}),a.initDelay>0?setTimeout(n.play,a.initDelay):n.play()),o&&a.touch&&p.touch(),(!d||d&&a.smoothHeight)&&$(window).bind("resize focus",p.resize),setTimeout(function(){a.start(n)},200)},asNav:{setup:function(){n.asNav=!0,n.animatingTo=Math.floor(n.currentSlide/n.move),n.currentItem=n.currentSlide,n.slides.removeClass(i+"active-slide").eq(n.currentItem).addClass(i+"active-slide"),n.slides.click(function(e){e.preventDefault();var t=$(this),i=t.index();$(a.asNavFor).data("flexslider").animating||t.hasClass("active")||(n.direction=n.currentItem<i?"next":"prev",n.flexAnimate(i,a.pauseOnAction,!1,!0,!0))})}},controlNav:{setup:function(){n.manualControls?p.controlNav.setupManual():p.controlNav.setupPaging()},setupPaging:function(){var e="thumbnails"===a.controlNav?"control-thumbs":"control-paging",t=1,r;if(n.controlNavScaffold=$('<ol class="'+i+"control-nav "+i+e+'"></ol>'),n.pagingCount>1)for(var l=0;l<n.pagingCount;l++)r="thumbnails"===a.controlNav?'<img src="'+n.slides.eq(l).attr("data-thumb")+'"/>':"<a>"+t+"</a>",n.controlNavScaffold.append("<li>"+r+"</li>"),t++;n.controlsContainer?$(n.controlsContainer).append(n.controlNavScaffold):n.append(n.controlNavScaffold),p.controlNav.set(),p.controlNav.active(),n.controlNavScaffold.delegate("a, img",s,function(e){e.preventDefault();var t=$(this),o=n.controlNav.index(t);t.hasClass(i+"active")||(n.direction=o>n.currentSlide?"next":"prev",n.flexAnimate(o,a.pauseOnAction))}),o&&n.controlNavScaffold.delegate("a","click touchstart",function(e){e.preventDefault()})},setupManual:function(){n.controlNav=n.manualControls,p.controlNav.active(),n.controlNav.live(s,function(e){e.preventDefault();var t=$(this),o=n.controlNav.index(t);t.hasClass(i+"active")||(n.direction=o>n.currentSlide?"next":"prev",n.flexAnimate(o,a.pauseOnAction))}),o&&n.controlNav.live("click touchstart",function(e){e.preventDefault()})},set:function(){var e="thumbnails"===a.controlNav?"img":"a";n.controlNav=$("."+i+"control-nav li "+e,n.controlsContainer?n.controlsContainer:n)},active:function(){n.controlNav.removeClass(i+"active").eq(n.animatingTo).addClass(i+"active")},update:function(e,t){n.pagingCount>1&&"add"===e?n.controlNavScaffold.append($("<li><a>"+n.count+"</a></li>")):1===n.pagingCount?n.controlNavScaffold.find("li").remove():n.controlNav.eq(t).closest("li").remove(),p.controlNav.set(),n.pagingCount>1&&n.pagingCount!==n.controlNav.length?n.update(t,e):p.controlNav.active()}},directionNav:{setup:function(){var e=$('<ul class="'+i+'direction-nav"><li><a class="'+i+'prev" href="#">'+a.prevText+'</a></li><li><a class="'+i+'next" href="#">'+a.nextText+"</a></li></ul>");n.controlsContainer?($(n.controlsContainer).append(e),n.directionNav=$("."+i+"direction-nav li a",n.controlsContainer)):(n.append(e),n.directionNav=$("."+i+"direction-nav li a",n)),p.directionNav.update(),n.directionNav.bind(s,function(e){e.preventDefault();var t=n.getTarget($(this).hasClass(i+"next")?"next":"prev");n.flexAnimate(t,a.pauseOnAction)}),o&&n.directionNav.bind("click touchstart",function(e){e.preventDefault()})},update:function(){var e=i+"disabled";1===n.pagingCount?n.directionNav.addClass(e):a.animationLoop?n.directionNav.removeClass(e):0===n.animatingTo?n.directionNav.removeClass(e).filter("."+i+"prev").addClass(e):n.animatingTo===n.last?n.directionNav.removeClass(e).filter("."+i+"next").addClass(e):n.directionNav.removeClass(e)}},pausePlay:{setup:function(){var e=$('<div class="'+i+'pauseplay"><a></a></div>');n.controlsContainer?(n.controlsContainer.append(e),n.pausePlay=$("."+i+"pauseplay a",n.controlsContainer)):(n.append(e),n.pausePlay=$("."+i+"pauseplay a",n)),p.pausePlay.update(a.slideshow?i+"pause":i+"play"),n.pausePlay.bind(s,function(e){e.preventDefault(),$(this).hasClass(i+"pause")?(n.manualPause=!0,n.manualPlay=!1,n.pause()):(n.manualPause=!1,n.manualPlay=!0,n.play())}),o&&n.pausePlay.bind("click touchstart",function(e){e.preventDefault()})},update:function(e){"play"===e?n.pausePlay.removeClass(i+"pause").addClass(i+"play").text(a.playText):n.pausePlay.removeClass(i+"play").addClass(i+"pause").text(a.pauseText)}},touch:function(){function t(t){n.animating?t.preventDefault():1===t.touches.length&&(n.pause(),m=r?n.h:n.w,f=Number(new Date),p=c&&l&&n.animatingTo===n.last?0:c&&l?n.limit-(n.itemW+a.itemMargin)*n.move*n.animatingTo:c&&n.currentSlide===n.last?n.limit:c?(n.itemW+a.itemMargin)*n.move*n.currentSlide:l?(n.last-n.currentSlide+n.cloneOffset)*m:(n.currentSlide+n.cloneOffset)*m,s=r?t.touches[0].pageY:t.touches[0].pageX,u=r?t.touches[0].pageX:t.touches[0].pageY,e.addEventListener("touchmove",i,!1),e.addEventListener("touchend",o,!1))}function i(e){v=r?s-e.touches[0].pageY:s-e.touches[0].pageX,g=r?Math.abs(v)<Math.abs(e.touches[0].pageX-u):Math.abs(v)<Math.abs(e.touches[0].pageY-u),(!g||Number(new Date)-f>500)&&(e.preventDefault(),!d&&n.transitions&&(a.animationLoop||(v/=0===n.currentSlide&&0>v||n.currentSlide===n.last&&v>0?Math.abs(v)/m+2:1),n.setProps(p+v,"setTouch")))}function o(t){if(e.removeEventListener("touchmove",i,!1),n.animatingTo===n.currentSlide&&!g&&null!==v){var r=l?-v:v,c=n.getTarget(r>0?"next":"prev");n.canAdvance(c)&&(Number(new Date)-f<550&&Math.abs(r)>50||Math.abs(r)>m/2)?n.flexAnimate(c,a.pauseOnAction):d||n.flexAnimate(n.currentSlide,a.pauseOnAction,!0)}e.removeEventListener("touchend",o,!1),s=null,u=null,v=null,p=null}var s,u,p,m,v,f,g=!1;e.addEventListener("touchstart",t,!1)},resize:function(){!n.animating&&n.is(":visible")&&(c||n.doMath(),d?p.smoothHeight():c?(n.slides.width(n.computedW),n.update(n.pagingCount),n.setProps()):r?(n.viewport.height(n.h),n.setProps(n.h,"setTotal")):(a.smoothHeight&&p.smoothHeight(),n.newSlides.width(n.computedW),n.setProps(n.computedW,"setTotal")))},smoothHeight:function(e){if(!r||d){var t=d?n:n.viewport;e?t.animate({height:n.slides.eq(n.animatingTo).height()},e):t.height(n.slides.eq(n.animatingTo).height())}},sync:function(e){var t=$(a.sync).data("flexslider"),i=n.animatingTo;switch(e){case"animate":t.flexAnimate(i,a.pauseOnAction,!1,!0);break;case"play":t.playing||t.asNav||t.play();break;case"pause":t.pause()}}},n.flexAnimate=function(e,t,s,m,v){if(u&&1===n.pagingCount&&(n.direction=n.currentItem<e?"next":"prev"),!n.animating&&(n.canAdvance(e,v)||s)&&n.is(":visible")){if(u&&m){var f=$(a.asNavFor).data("flexslider");if(n.atEnd=0===e||e===n.count-1,f.flexAnimate(e,!0,!1,!0,v),n.direction=n.currentItem<e?"next":"prev",f.direction=n.direction,Math.ceil((e+1)/n.visible)-1===n.currentSlide||0===e)return n.currentItem=e,n.slides.removeClass(i+"active-slide").eq(e).addClass(i+"active-slide"),!1;n.currentItem=e,n.slides.removeClass(i+"active-slide").eq(e).addClass(i+"active-slide"),e=Math.floor(e/n.visible)}if(n.animating=!0,n.animatingTo=e,a.before(n),t&&n.pause(),n.syncExists&&!v&&p.sync("animate"),a.controlNav&&p.controlNav.active(),c||n.slides.removeClass(i+"active-slide").eq(e).addClass(i+"active-slide"),n.atEnd=0===e||e===n.last,a.directionNav&&p.directionNav.update(),e===n.last&&(a.end(n),a.animationLoop||n.pause()),d)o?(n.slides.eq(n.currentSlide).css({opacity:0,zIndex:1}),n.slides.eq(e).css({opacity:1,zIndex:2}),n.slides.unbind("webkitTransitionEnd transitionend"),n.slides.eq(n.currentSlide).bind("webkitTransitionEnd transitionend",function(){a.after(n)}),n.animating=!1,n.currentSlide=n.animatingTo):(n.slides.eq(n.currentSlide).fadeOut(a.animationSpeed,a.easing),n.slides.eq(e).fadeIn(a.animationSpeed,a.easing,n.wrapup));else{var g=r?n.slides.filter(":first").height():n.computedW,h,S,x;c?(h=a.itemWidth>n.w?2*a.itemMargin:a.itemMargin,x=(n.itemW+h)*n.move*n.animatingTo,S=x>n.limit&&1!==n.visible?n.limit:x):S=0===n.currentSlide&&e===n.count-1&&a.animationLoop&&"next"!==n.direction?l?(n.count+n.cloneOffset)*g:0:n.currentSlide===n.last&&0===e&&a.animationLoop&&"prev"!==n.direction?l?0:(n.count+1)*g:l?(n.count-1-e+n.cloneOffset)*g:(e+n.cloneOffset)*g,n.setProps(S,"",a.animationSpeed),n.transitions?(a.animationLoop&&n.atEnd||(n.animating=!1,n.currentSlide=n.animatingTo),n.container.unbind("webkitTransitionEnd transitionend"),n.container.bind("webkitTransitionEnd transitionend",function(){n.wrapup(g)})):n.container.animate(n.args,a.animationSpeed,a.easing,function(){n.wrapup(g)})}a.smoothHeight&&p.smoothHeight(a.animationSpeed)}},n.wrapup=function(e){d||c||(0===n.currentSlide&&n.animatingTo===n.last&&a.animationLoop?n.setProps(e,"jumpEnd"):n.currentSlide===n.last&&0===n.animatingTo&&a.animationLoop&&n.setProps(e,"jumpStart")),n.animating=!1,n.currentSlide=n.animatingTo,a.after(n)},n.animateSlides=function(){n.animating||n.flexAnimate(n.getTarget("next"))},n.pause=function(){clearInterval(n.animatedSlides),n.playing=!1,a.pausePlay&&p.pausePlay.update("play"),n.syncExists&&p.sync("pause")},n.play=function(){n.animatedSlides=setInterval(n.animateSlides,a.slideshowSpeed),n.playing=!0,a.pausePlay&&p.pausePlay.update("pause"),n.syncExists&&p.sync("play")},n.canAdvance=function(e,t){var i=u?n.pagingCount-1:n.last;return t?!0:u&&n.currentItem===n.count-1&&0===e&&"prev"===n.direction?!0:u&&0===n.currentItem&&e===n.pagingCount-1&&"next"!==n.direction?!1:e!==n.currentSlide||u?a.animationLoop?!0:n.atEnd&&0===n.currentSlide&&e===i&&"next"!==n.direction?!1:n.atEnd&&n.currentSlide===i&&0===e&&"next"===n.direction?!1:!0:!1},n.getTarget=function(e){return n.direction=e,"next"===e?n.currentSlide===n.last?0:n.currentSlide+1:0===n.currentSlide?n.last:n.currentSlide-1},n.setProps=function(e,t,i){var o=function(){var i=e?e:(n.itemW+a.itemMargin)*n.move*n.animatingTo,o=function(){if(c)return"setTouch"===t?e:l&&n.animatingTo===n.last?0:l?n.limit-(n.itemW+a.itemMargin)*n.move*n.animatingTo:n.animatingTo===n.last?n.limit:i;switch(t){case"setTotal":return l?(n.count-1-n.currentSlide+n.cloneOffset)*e:(n.currentSlide+n.cloneOffset)*e;case"setTouch":return l?e:e;case"jumpEnd":return l?e:n.count*e;case"jumpStart":return l?n.count*e:e;default:return e}}();return-1*o+"px"}();n.transitions&&(o=r?"translate3d(0,"+o+",0)":"translate3d("+o+",0,0)",i=void 0!==i?i/1e3+"s":"0s",n.container.css("-"+n.pfx+"-transition-duration",i)),n.args[n.prop]=o,(n.transitions||void 0===i)&&n.container.css(n.args)},n.setup=function(e){if(d)n.slides.css({width:"100%","float":"left",marginRight:"-100%",position:"relative"}),"init"===e&&(o?n.slides.css({opacity:0,display:"block",webkitTransition:"opacity "+a.animationSpeed/1e3+"s ease",zIndex:1}).eq(n.currentSlide).css({opacity:1,zIndex:2}):n.slides.eq(n.currentSlide).fadeIn(a.animationSpeed,a.easing)),a.smoothHeight&&p.smoothHeight();else{var t,s;"init"===e&&(n.viewport=$('<div class="'+i+'viewport"></div>').css({overflow:"hidden",position:"relative"}).appendTo(n).append(n.container),n.cloneCount=0,n.cloneOffset=0,l&&(s=$.makeArray(n.slides).reverse(),n.slides=$(s),n.container.empty().append(n.slides))),a.animationLoop&&!c&&(n.cloneCount=2,n.cloneOffset=1,"init"!==e&&n.container.find(".clone").remove(),n.container.append(n.slides.first().clone().addClass("clone")).prepend(n.slides.last().clone().addClass("clone"))),n.newSlides=$(a.selector,n),t=l?n.count-1-n.currentSlide+n.cloneOffset:n.currentSlide+n.cloneOffset,r&&!c?(n.container.height(200*(n.count+n.cloneCount)+"%").css("position","absolute").width("100%"),setTimeout(function(){n.newSlides.css({display:"block"}),n.doMath(),n.viewport.height(n.h),n.setProps(t*n.h,"init")},"init"===e?100:0)):(n.container.width(200*(n.count+n.cloneCount)+"%"),n.setProps(t*n.computedW,"init"),setTimeout(function(){n.doMath(),n.newSlides.css({width:n.computedW,"float":"left",display:"block"}),a.smoothHeight&&p.smoothHeight()},"init"===e?100:0))}c||n.slides.removeClass(i+"active-slide").eq(n.currentSlide).addClass(i+"active-slide")},n.doMath=function(){var e=n.slides.first(),t=a.itemMargin,i=a.minItems,o=a.maxItems;n.w=n.width(),n.h=e.height(),n.boxPadding=e.outerWidth()-e.width(),c?(n.itemT=a.itemWidth+t,n.minW=i?i*n.itemT:n.w,n.maxW=o?o*n.itemT:n.w,n.itemW=n.minW>n.w?(n.w-t*i)/i:n.maxW<n.w?(n.w-t*o)/o:a.itemWidth>n.w?n.w:a.itemWidth,n.visible=Math.floor(n.w/(n.itemW+t)),n.move=a.move>0&&a.move<n.visible?a.move:n.visible,n.pagingCount=Math.ceil((n.count-n.visible)/n.move+1),n.last=n.pagingCount-1,n.limit=1===n.pagingCount?0:a.itemWidth>n.w?(n.itemW+2*t)*n.count-n.w-t:(n.itemW+t)*n.count-n.w-t):(n.itemW=n.w,n.pagingCount=n.count,n.last=n.count-1),n.computedW=n.itemW-n.boxPadding},n.update=function(e,t){n.doMath(),c||(e<n.currentSlide?n.currentSlide+=1:e<=n.currentSlide&&0!==e&&(n.currentSlide-=1),n.animatingTo=n.currentSlide),a.controlNav&&!n.manualControls&&("add"===t&&!c||n.pagingCount>n.controlNav.length?p.controlNav.update("add"):("remove"===t&&!c||n.pagingCount<n.controlNav.length)&&(c&&n.currentSlide>n.last&&(n.currentSlide-=1,n.animatingTo-=1),p.controlNav.update("remove",n.last))),a.directionNav&&p.directionNav.update()},n.addSlide=function(e,t){var i=$(e);n.count+=1,n.last=n.count-1,r&&l?void 0!==t?n.slides.eq(n.count-t).after(i):n.container.prepend(i):void 0!==t?n.slides.eq(t).before(i):n.container.append(i),n.update(t,"add"),n.slides=$(a.selector+":not(.clone)",n),n.setup(),a.added(n)},n.removeSlide=function(e){var t=isNaN(e)?n.slides.index($(e)):e;n.count-=1,n.last=n.count-1,isNaN(e)?$(e,n.slides).remove():r&&l?n.slides.eq(n.last).remove():n.slides.eq(e).remove(),n.doMath(),n.update(t,"remove"),n.slides=$(a.selector+":not(.clone)",n),n.setup(),a.removed(n)},p.init()},$.flexslider.defaults={namespace:"flex-",selector:".slides > li",animation:"fade",easing:"swing",direction:"horizontal",reverse:!1,animationLoop:!0,smoothHeight:!1,startAt:0,slideshow:!0,slideshowSpeed:6e3,animationSpeed:1e3,initDelay:0,randomize:!1,pauseOnAction:!0,pauseOnHover:!1,useCSS:!0,touch:!0,video:!1,controlNav:!1,directionNav:!1,prevText:"Previous",nextText:"Next",keyboard:!0,multipleKeyboard:!1,mousewheel:!1,pausePlay:!1,pauseText:"Pause",playText:"Play",controlsContainer:"",manualControls:"",sync:"",asNavFor:"",itemWidth:0,itemMargin:0,minItems:0,maxItems:0,move:0,start:function(){},before:function(){},after:function(){},end:function(){},added:function(){},removed:function(){}},$.fn.flexslider=function(e){if(void 0===e&&(e={}),"object"==typeof e)return this.each(function(){var t=$(this),n=e.selector?e.selector:".slides > li",a=t.find(n);1===a.length?(a.fadeIn(400),e.start&&e.start(t)):void 0==t.data("flexslider")&&new $.flexslider(this,e)});var t=$(this).data("flexslider");switch(e){case"play":t.play();break;case"pause":t.pause();break;case"next":t.flexAnimate(t.getTarget("next"),!0);break;case"prev":case"previous":t.flexAnimate(t.getTarget("prev"),!0);break;default:"number"==typeof e&&t.flexAnimate(e,!0)}}}(jQuery);