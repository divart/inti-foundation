!function(e,t){"function"==typeof define&&define.amd?define([],function(){return t()}):"object"==typeof exports?module.exports=t():e.whatInput=t()}(this,function(){"use strict";function e(e){clearTimeout(a),n(e),p=!0,a=setTimeout(function(){p=!1},1e3)}function t(e){p||n(e)}function n(e){var t=o(e),n=r(e),d=h[e.type];"pointer"===d&&(d=i(e)),y!==d&&(!w&&y&&"keyboard"===d&&"tab"!==b[t]&&m.indexOf(n.nodeName.toLowerCase())>=0||(y=d,f.setAttribute("data-whatinput",y),-1===v.indexOf(y)&&v.push(y))),"keyboard"===d&&u(t)}function o(e){return e.keyCode?e.keyCode:e.which}function r(e){return e.target||e.srcElement}function i(e){return"number"==typeof e.pointerType?k[e.pointerType]:e.pointerType}function u(e){-1===c.indexOf(b[e])&&b[e]&&c.push(b[e])}function d(e){var t=o(e),n=c.indexOf(b[t]);-1!==n&&c.splice(n,1)}function s(){var n="mousedown";window.PointerEvent?n="pointerdown":window.MSPointerEvent&&(n="MSPointerDown"),f.addEventListener(n,t),f.addEventListener("mouseenter",t),"ontouchstart"in document.documentElement&&f.addEventListener("touchstart",e),f.addEventListener("keydown",t),document.addEventListener("keyup",d)}var a,c=[],f=document.body,p=!1,y=null,m=["input","select","textarea"],w=f.hasAttribute("data-whatinput-formtyping"),h={keydown:"keyboard",mousedown:"mouse",mouseenter:"mouse",touchstart:"touch",pointerdown:"pointer",MSPointerDown:"pointer"},v=[],b={9:"tab",13:"enter",16:"shift",27:"esc",32:"space",37:"left",38:"up",39:"right",40:"down"},k={2:"touch",3:"touch",4:"mouse"};return"addEventListener"in window&&Array.prototype.indexOf&&s(),{ask:function(){return y},keys:function(){return c},types:function(){return v},set:n}});