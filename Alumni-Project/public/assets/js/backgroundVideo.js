/*!
* backgroundVideo v2.0.2
* https://github.com/linnett/backgroundVideo
* Use HTML5 video to create an effect like the CSS property,
* 'background-size: cover'. Includes parallax option.
*
* Copyright 2016 Sam Linnett <linnettsam@gmail.com>
* @license http://www.opensource.org/licenses/mit-license.html MIT License
*/'use strict';(function(root,factory){const pluginName='BackgroundVideo';if(typeof define==='function'&&define.amd){define([],factory(pluginName));}else if(typeof exports==='object'){module.exports=factory(pluginName);}else{root[pluginName]=factory(pluginName);}}((window||module||{}),function(pluginName){const defaults={parallax:{effect:1.5},pauseVideoOnViewLoss:false,preventContextMenu:false,minimumVideoWidth:400,onBeforeReady:function(){},onReady:function(){}};const addClass=function(el,className){if(el.classList){el.classList.add(className);}
else{el.className+=' '+className;}};class BackgroundVideo{constructor(element,options){this.element=document.querySelectorAll(element);this.options=Object.assign({},defaults,options);this.options.browserPrexix=this.detectBrowser();this.shimRequestAnimationFrame();this.options.has3d=this.detect3d();this.setWindowDimensions();for(let i=0;i<this.element.length;i++){this.init(this.element[i],i);}}
init(element,iteration){this.el=element;this.playEvent=this.videoReadyCallback.bind(this);this.setVideoWrap(iteration);this.setVideoProperties()
this.insertVideos();if(this.options&&this.options.onBeforeReady())this.options.onBeforeReady();if(this.el.readyState>3){this.videoReadyCallback();}else{this.el.addEventListener('canplaythrough',this.playEvent,false);this.el.addEventListener('canplay',this.playEvent,false);}
if(this.options.preventContextMenu){this.el.addEventListener('contextmenu',()=>false);}}
videoReadyCallback(){this.el.removeEventListener('canplaythrough',this.playEvent,false);this.el.removeEventListener('canplay',this.playEvent,false);this.options.originalVideoW=this.el.videoWidth;this.options.originalVideoH=this.el.videoHeight;this.bindEvents();this.requestTick();if(this.options&&this.options.onReady())this.options.onReady();}
bindEvents(){this.ticking=false;if(this.options.parallax){window.addEventListener('scroll',this.requestTick.bind(this));}
window.addEventListener('resize',this.requestTick.bind(this));window.addEventListener('resize',this.setWindowDimensions.bind(this));}
setWindowDimensions(){this.windowWidth=window.innerWidth;this.windowHeight=window.innerHeight;}
requestTick(){if(!this.ticking){this.ticking=true;window.requestAnimationFrame(this.positionObject.bind(this));}}
positionObject(){const scrollPos=window.pageYOffset;let{xPos,yPos}=this.scaleObject();if(this.options.parallax){if(scrollPos>=0){yPos=this.calculateYPos(yPos,scrollPos);}else{yPos=this.calculateYPos(yPos,0);}}else{yPos=-yPos;}
const transformStyle=(this.options.has3d)?`translate3d(${xPos}px, ${yPos}px, 0)`:`translate(${xPos}px, ${yPos}px)`;this.el.style[`${this.options.browserPrexix}`]=transformStyle;this.el.style.transform=transformStyle;this.ticking=false;}
scaleObject(){const heightScale=this.windowWidth/this.options.originalVideoW;const widthScale=this.windowHeight/this.options.originalVideoH;let scaleFactor;this.options.bvVideoWrap.style.width=`${this.windowWidth}px`;this.options.bvVideoWrap.style.height=`${this.windowHeight}px`;scaleFactor=heightScale>widthScale?heightScale:widthScale;if(scaleFactor*this.options.originalVideoW<this.options.minimumVideoWidth){scaleFactor=this.options.minimumVideoWidth/this.options.originalVideoW;}
const videoWidth=scaleFactor*this.options.originalVideoW;const videoHeight=scaleFactor*this.options.originalVideoH;this.el.style.width=`${videoWidth}px`;this.el.style.height=`${videoHeight}px`;return{xPos:-(parseInt((videoWidth-this.windowWidth)/2)),yPos:parseInt(videoHeight-this.windowHeight)/2}}
calculateYPos(yPos,scrollPos){const videoPosition=parseInt(this.options.bvVideoWrap.offsetTop);const videoOffset=videoPosition-scrollPos;yPos=-((videoOffset/this.options.parallax.effect)+yPos);return yPos;}
setVideoWrap(iteration){const wrapper=document.createElement('div');this.options.bvVideoWrapClass=`${this.el.className}-wrap-${iteration}`;addClass(wrapper,'bv-video-wrap');addClass(wrapper,this.options.bvVideoWrapClass);wrapper.style.position='relative';wrapper.style.overflow='hidden';wrapper.style.zIndex='10';this.el.parentNode.insertBefore(wrapper,this.el);wrapper.appendChild(this.el);this.options.bvVideoWrap=document.querySelector(`.${this.options.bvVideoWrapClass}`);}
setVideoProperties(){this.el.setAttribute('preload','metadata');this.el.setAttribute('loop','true');this.el.setAttribute('autoplay','true');this.el.style.position='absolute';this.el.style.zIndex='1';}
insertVideos(){for(let i=0;i<this.options.src.length;i++){let videoTypeArr=this.options.src[i].split('.');let videoType=videoTypeArr[videoTypeArr.length-1];this.addSourceToVideo(this.options.src[i],`video/${videoType}`);}}
addSourceToVideo(src,type){const source=document.createElement('source');source.src=src;source.type=type;this.el.appendChild(source);}
detectBrowser(){const val=navigator.userAgent.toLowerCase();let browserPrexix;if(val.indexOf('chrome')>-1||val.indexOf('safari')>-1){browserPrexix='webkitTransform';}else if(val.indexOf('firefox')>-1){browserPrexix='MozTransform';}else if(val.indexOf('MSIE')!==-1||val.indexOf('Trident/')>0){browserPrexix='msTransform';}else if(val.indexOf('Opera')>-1){browserPrexix='OTransform';}
return browserPrexix;}
shimRequestAnimationFrame(){var lastTime=0;var vendors=['ms','moz','webkit','o'];for(var x=0;x<vendors.length&&!window.requestAnimationFrame;++x){window.requestAnimationFrame=window[vendors[x]+'RequestAnimationFrame'];window.cancelAnimationFrame=window[vendors[x]+'CancelAnimationFrame']||window[vendors[x]+'CancelRequestAnimationFrame'];}
if(!window.requestAnimationFrame)
window.requestAnimationFrame=function(callback,element){var currTime=new Date().getTime();var timeToCall=Math.max(0,16-(currTime-lastTime));var id=window.setTimeout(function(){callback(currTime+timeToCall);},timeToCall);lastTime=currTime+timeToCall;return id;};if(!window.cancelAnimationFrame)
window.cancelAnimationFrame=function(id){clearTimeout(id);};}
detect3d(){var el=document.createElement('p'),t,has3d,transforms={'WebkitTransform':'-webkit-transform','OTransform':'-o-transform','MSTransform':'-ms-transform','MozTransform':'-moz-transform','transform':'transform'};document.body.insertBefore(el,document.body.lastChild);for(t in transforms){if(el.style[t]!==undefined){el.style[t]='matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1)';has3d=window.getComputedStyle(el).getPropertyValue(transforms[t]);}}
el.parentNode.removeChild(el);if(has3d!==undefined){return has3d!=='none';}else{return false;}}}
return BackgroundVideo;}));