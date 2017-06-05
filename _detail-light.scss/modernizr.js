/*! modernizr 3.3.1 (Custom Build) | MIT *
 * https://modernizr.com/download/?-backgroundsize-bgpositionxy-bgsizecover-boxsizing-cssanimations-csstransforms-csstransforms3d-csstransitions-flexbox-lastchild-objectfit-preserve3d-domprefixes-setclasses !*/
!function(e,t,n){function r(e,t){return typeof e===t}function i(){var e,t,n,i,s,o,a;for(var d in y)if(y.hasOwnProperty(d)){if(e=[],t=y[d],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(i=r(t.fn,"function")?t.fn():t.fn,s=0;s<e.length;s++)o=e[s],a=o.split("."),1===a.length?Modernizr[a[0]]=i:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=i),x.push((i?"":"no-")+a.join("-"))}}function s(e){var t=b.className,n=Modernizr._config.classPrefix||"";if(w&&(t=t.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}Modernizr._config.enableClasses&&(t+=" "+n+e.join(" "+n),w?b.className.baseVal=t:b.className=t)}function o(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):w?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function a(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function d(){var e=t.body;return e||(e=o(w?"svg":"body"),e.fake=!0),e}function f(e,n,r,i){var s,a,f,l,u="modernizr",p=o("div"),c=d();if(parseInt(r,10))for(;r--;)f=o("div"),f.id=i?i[r]:u+(r+1),p.appendChild(f);return s=o("style"),s.type="text/css",s.id="s"+u,(c.fake?c:p).appendChild(s),c.appendChild(p),s.styleSheet?s.styleSheet.cssText=e:s.appendChild(t.createTextNode(e)),p.id=u,c.fake&&(c.style.background="",c.style.overflow="hidden",l=b.style.overflow,b.style.overflow="hidden",b.appendChild(c)),a=n(p,e),c.fake?(c.parentNode.removeChild(c),b.style.overflow=l,b.offsetHeight):p.parentNode.removeChild(p),!!a}function l(e,t){return!!~(""+e).indexOf(t)}function u(e,t){return function(){return e.apply(t,arguments)}}function p(e,t,n){var i;for(var s in e)if(e[s]in t)return n===!1?e[s]:(i=t[e[s]],r(i,"function")?u(i,n||t):i);return!1}function c(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function m(t,r){var i=t.length;if("CSS"in e&&"supports"in e.CSS){for(;i--;)if(e.CSS.supports(c(t[i]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var s=[];i--;)s.push("("+c(t[i])+":"+r+")");return s=s.join(" or "),f("@supports ("+s+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return n}function h(e,t,i,s){function d(){u&&(delete N.style,delete N.modElem)}if(s=r(s,"undefined")?!1:s,!r(i,"undefined")){var f=m(e,i);if(!r(f,"undefined"))return f}for(var u,p,c,h,g,v=["modernizr","tspan","samp"];!N.style&&v.length;)u=!0,N.modElem=o(v.shift()),N.style=N.modElem.style;for(c=e.length,p=0;c>p;p++)if(h=e[p],g=N.style[h],l(h,"-")&&(h=a(h)),N.style[h]!==n){if(s||r(i,"undefined"))return d(),"pfx"==t?h:!0;try{N.style[h]=i}catch(x){}if(N.style[h]!=g)return d(),"pfx"==t?h:!0}return d(),!1}function g(e,t,n,i,s){var o=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+k.join(o+" ")+o).split(" ");return r(t,"string")||r(t,"undefined")?h(a,t,i,s):(a=(e+" "+T.join(o+" ")+o).split(" "),p(a,t,n))}function v(e,t,r){return g(e,n,n,t,r)}var x=[],y=[],C={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){y.push({name:e,fn:t,options:n})},addAsyncTest:function(e){y.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=C,Modernizr=new Modernizr;var b=t.documentElement,w="svg"===b.nodeName.toLowerCase(),S="Moz O ms Webkit",T=C._config.usePrefixes?S.toLowerCase().split(" "):[];C._domPrefixes=T;var _="CSS"in e&&"supports"in e.CSS,z="supportsCSS"in e;Modernizr.addTest("supports",_||z),Modernizr.addTest("preserve3d",function(){var e=o("a"),t=o("a");e.style.cssText="display: block; transform-style: preserve-3d; transform-origin: right; transform: rotateY(40deg);",t.style.cssText="display: block; width: 9px; height: 1px; background: #000; transform-origin: right; transform: rotateY(40deg);",e.appendChild(t),b.appendChild(e);var n=t.getBoundingClientRect();return b.removeChild(e),n.width&&n.width<4});var k=C._config.usePrefixes?S.split(" "):[];C._cssomPrefixes=k;var P=function(t){var r,i=prefixes.length,s=e.CSSRule;if("undefined"==typeof s)return n;if(!t)return!1;if(t=t.replace(/^@/,""),r=t.replace(/-/g,"_").toUpperCase()+"_RULE",r in s)return"@"+t;for(var o=0;i>o;o++){var a=prefixes[o],d=a.toUpperCase()+"_"+r;if(d in s)return"@-"+a.toLowerCase()+"-"+t}return!1};C.atRule=P;var E=C.testStyles=f;E("#modernizr div {width:100px} #modernizr :last-child{width:200px;display:block}",function(e){Modernizr.addTest("lastchild",e.lastChild.offsetWidth>e.firstChild.offsetWidth)},2);var j={elem:o("modernizr")};Modernizr._q.push(function(){delete j.elem});var N={style:j.elem.style};Modernizr._q.unshift(function(){delete N.style}),C.testAllProps=g,C.testAllProps=v,Modernizr.addTest("cssanimations",v("animationName","a",!0)),Modernizr.addTest("bgpositionxy",function(){return v("backgroundPositionX","3px",!0)&&v("backgroundPositionY","5px",!0)}),Modernizr.addTest("backgroundsize",v("backgroundSize","100%",!0)),Modernizr.addTest("bgsizecover",v("backgroundSize","cover")),Modernizr.addTest("boxsizing",v("boxSizing","border-box",!0)&&(t.documentMode===n||t.documentMode>7)),Modernizr.addTest("flexbox",v("flexBasis","1px",!0)),Modernizr.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&v("transform","scale(1)",!0)}),Modernizr.addTest("csstransforms3d",function(){var e=!!v("perspective","1px",!0),t=Modernizr._config.usePrefixes;if(e&&(!t||"webkitPerspective"in b.style)){var n,r="#modernizr{width:0;height:0}";Modernizr.supports?n="@supports (perspective: 1px)":(n="@media (transform-3d)",t&&(n+=",(-webkit-transform-3d)")),n+="{#modernizr{width:7px;height:18px;margin:0;padding:0;border:0}}",E(r+n,function(t){e=7===t.offsetWidth&&18===t.offsetHeight})}return e}),Modernizr.addTest("csstransitions",v("transition","all",!0));var A=C.prefixed=function(e,t,n){return 0===e.indexOf("@")?P(e):(-1!=e.indexOf("-")&&(e=a(e)),t?g(e,t,n):g(e,"pfx"))};Modernizr.addTest("objectfit",!!A("objectFit"),{aliases:["object-fit"]}),i(),s(x),delete C.addTest,delete C.addAsyncTest;for(var L=0;L<Modernizr._q.length;L++)Modernizr._q[L]();e.Modernizr=Modernizr}(window,document);