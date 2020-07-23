var Zepto=function(){function L(e){if(n(e).css("display")=="none")return!1;var t=!0;return n.each(n(e).parents(),function(e,r){if(n(r).css("display")=="none"){t=!1;return}}),t}function A(e){return x.call(e)=="[object Function]"}function O(e){return e instanceof Object}function M(e){return O(e)&&e.__proto__==Object.prototype}function _(e){return e instanceof Array}function D(e){return typeof e.length=="number"}function P(t){return t.filter(function(t){return t!==e&&t!==null})}function H(e){return e.length>0?n.fn.concat.apply([],e):e}function B(e){return e.replace(/::/g,"/").replace(/([A-Z]+)([A-Z][a-z])/g,"$1_$2").replace(/([a-z\d])([A-Z])/g,"$1_$2").replace(/_/g,"-").toLowerCase()}function j(e){return e in a?a[e]:a[e]=new RegExp("(^|\\s)"+e+"(\\s|$)")}function F(e,t){return typeof t=="number"&&!l[B(e)]?t+"px":t}function I(e){var t,n;return u[e]||(t=o.createElement(e),o.body.appendChild(t),n=f(t,"").getPropertyValue("display"),t.parentNode.removeChild(t),n=="none"&&(n="block"),u[e]=n),u[e]}function q(n,r,i){for(t in r)i&&M(r[t])?(M(n[t])||(n[t]={}),q(n[t],r[t],i)):r[t]!==e&&(n[t]=r[t])}function R(t,r){return r===e?n(t):n(t).filter(r)}function U(e,t,n,r){return A(t)?t.call(e,n,r):t}function z(e,t,n){n==null?e.removeAttribute(t):e.setAttribute(t,n)}function W(e,t,r){var i=e%2?t:t.parentNode;i?i.insertBefore(r,e?e==1?i.firstChild:e==2?t:null:t.nextSibling):n(r).remove()}function X(e,t){t(e);for(var n in e.childNodes)X(e.childNodes[n],t)}var e,t,n,r,i=[],s=i.slice,o=window.document,u={},a={},f=o.defaultView.getComputedStyle,l={"column-count":1,columns:1,"font-weight":1,"line-height":1,opacity:1,"z-index":1,zoom:1},c=/^\s*<(\w+|!)[^>]*>/,h=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/ig,p=[1,3,8,9,11],d=["val","css","html","text","data","width","height","offset"],v=["after","prepend","before","append"],m=o.createElement("table"),g=o.createElement("tr"),y={tr:o.createElement("tbody"),tbody:m,thead:m,tfoot:m,td:g,th:g,"*":o.createElement("div")},b=/complete|loaded|interactive/,w=/^\.([\w-]+)$/,E=/^#([\w-]+)$/,S=/^[\w-]+$/,x={}.toString,T={},N,C,k=o.createElement("div");return T.matches=function(e,t){if(!e||e.nodeType!==1)return!1;switch(t){case":visible":return L(e)}var n=e.webkitMatchesSelector||e.mozMatchesSelector||e.oMatchesSelector||e.matchesSelector;if(n)return n.call(e,t);var r,i=e.parentNode,s=!i;return s&&(i=k).appendChild(e),r=~T.qsa(i,t).indexOf(e),s&&k.removeChild(e),r},N=function(e){return e.replace(/-+(.)?/g,function(e,t){return t?t.toUpperCase():""})},C=function(e){return e.filter(function(t,n){return e.indexOf(t)==n})},T.fragment=function(t,r,i){t.replace&&(t=t.replace(h,"<$1></$2>")),r===e&&(r=c.test(t)&&RegExp.$1),r in y||(r="*");var o,u,a=y[r];return a.innerHTML=""+t,u=n.each(s.call(a.childNodes),function(){a.removeChild(this)}),M(i)&&(o=n(u),n.each(i,function(e,t){d.indexOf(e)>-1?o[e](t):o.attr(e,t)})),u},T.Z=function(e,t){return e=e||[],e.__proto__=arguments.callee.prototype,e.selector=t||"",e},T.isZ=function(e){return e instanceof T.Z},T.init=function(t,r){if(!t)return T.Z();if(A(t))return n(o).ready(t);if(T.isZ(t))return t;var i;if(_(t))i=P(t);else if(M(t))i=[n.extend({},t)],t=null;else if(p.indexOf(t.nodeType)>=0||t===window)i=[t],t=null;else if(c.test(t))i=T.fragment(t.trim(),RegExp.$1,r),t=null;else{if(r!==e)return n(r).find(t);i=T.qsa(o,t)}return T.Z(i,t)},n=function(e,t){return T.init(e,t)},n.extend=function(e){var t,n=s.call(arguments,1);return typeof e=="boolean"&&(t=e,e=n.shift()),n.forEach(function(n){q(e,n,t)}),e},T.qsa=function(e,t){var n;return e===o&&E.test(t)?(n=e.getElementById(RegExp.$1))?[n]:i:e.nodeType!==1&&e.nodeType!==9?i:s.call(w.test(t)?e.getElementsByClassName(RegExp.$1):S.test(t)?e.getElementsByTagName(t):e.querySelectorAll(t))},n.isFunction=A,n.isObject=O,n.isArray=_,n.isPlainObject=M,n.isHtml=function(e){return c.test(e)},n.inArray=function(e,t,n){return i.indexOf.call(t,e,n)},n.trim=function(e){return e.trim()},n.uuid=0,n.map=function(e,t){var n,r=[],i,s;if(D(e))for(i=0;i<e.length;i++)n=t(e[i],i),n!=null&&r.push(n);else for(s in e)n=t(e[s],s),n!=null&&r.push(n);return H(r)},n.each=function(e,t){var n,r;if(D(e)){for(n=0;n<e.length;n++)if(t.call(e[n],n,e[n])===!1)return e}else for(r in e)if(t.call(e[r],r,e[r])===!1)return e;return e},window.JSON&&(n.parseJSON=JSON.parse),n.ajax=function(e){function a(){if(t.readyState!=4&&n){t.abort(),t=null;var i=e.dataType=="json"?{ok:0,msg:u}:u;e.success&&e.success.call(e.context?e.context:this,i),clearInterval(s);return}if(t.readyState==4){clearInterval(s),clearTimeout(o);if(t.status==200&&t.status<300||t.status==304){var i=e.dataType=="json"?r.parseJSON(t.responseText):t.responseText;e.success&&e.success.call(e.context?e.context:this,i)}else e.error&&e.error.call(e.context?e.context:this,t.statusText)}}var t=new XMLHttpRequest,n=!1,r=this,i=null,s,o,u="����ʱ�������ԣ�";t.onreadystatechange=a;if(!e.type||e.type=="GET")e.url=e.url+(e.data?(e.url.indexOf("?")>0?"":"&")+e.data:"");t.open(e.type?e.type:"GET",e.url,e.ayns?e.ayns:!0),t.setRequestHeader("Content-type","application/x-www-form-urlencoded"),t.send(e.type=="POST"?e.data:null),e.timeout&&(o=setTimeout(function(){n=!0},e.timeout),s=setInterval(a,13))},n.fn={forEach:i.forEach,reduce:i.reduce,push:i.push,indexOf:i.indexOf,concat:i.concat,map:function(e){return n.map(this,function(t,n){return e.call(t,n,t)})},slice:function(){return n(s.apply(this,arguments))},ready:function(e){return b.test(o.readyState)?e(n):o.addEventListener("DOMContentLoaded",function(){e(n)},!1),this},get:function(t){return t===e?s.call(this):this[t]},toArray:function(){return this.get()},size:function(){return this.length},remove:function(){return this.each(function(){this.parentNode!=null&&this.parentNode.removeChild(this)})},each:function(e){return this.forEach(function(t,n){e.call(t,n,t)}),this},filter:function(e){return A(e)?this.not(this.not(e)):n([].filter.call(this,function(t){return T.matches(t,e)}))},add:function(e,t){return n(C(this.concat(n(e,t))))},is:function(e){return this.length>0&&T.matches(this[0],e)},not:function(t){var r=[];if(A(t)&&t.call!==e)this.each(function(e){t.call(this,e)||r.push(this)});else{var i=typeof t=="string"?this.filter(t):D(t)&&A(t.item)?s.call(t):n(t);this.forEach(function(e){i.indexOf(e)<0&&r.push(e)})}return n(r)},eq:function(e){return e===-1?this.slice(e):this.slice(e,+e+1)},first:function(){var e=this[0];return e&&!O(e)?e:n(e)},last:function(){var e=this[this.length-1];return e&&!O(e)?e:n(e)},find:function(e){var t;return this.length==1?t=T.qsa(this[0],e):t=this.map(function(){return T.qsa(this,e)}),n(t)},closest:function(e,t){var r=this[0];while(r&&!T.matches(r,e))r=r!==t&&r!==o&&r.parentNode;return n(r)},parents:function(e){var t=[],r=this;while(r.length>0)r=n.map(r,function(e){if((e=e.parentNode)&&e!==o&&t.indexOf(e)<0)return t.push(e),e});return R(t,e)},parent:function(e){return R(C(this.pluck("parentNode")),e)},children:function(e){return R(this.map(function(){return s.call(this.children)}),e)},contents:function(){return n(this.map(function(){return s.call(this.childNodes)}))},siblings:function(e){return R(this.map(function(e,t){return s.call(t.parentNode.children).filter(function(e){return e!==t})}),e)},empty:function(){return this.each(function(){this.innerHTML=""})},pluck:function(e){return this.map(function(){return this[e]})},show:function(){return this.each(function(){this.style.display=="none"&&(this.style.display=null),f(this,"").getPropertyValue("display")=="none"&&(this.style.display=I(this.nodeName))})},replaceWith:function(e){return this.before(e).remove()},wrap:function(e){var t=A(e);if(this[0]&&!t)var r=n(e).get(0),i=r.parentNode||this.length>1;return this.each(function(s){n(this).wrapAll(t?e.call(this,s):i?r.cloneNode(!0):r)})},wrapAll:function(e){if(this[0]){n(this[0]).before(e=n(e)),e=e.get(0);while(e.children.length)e=e.children[0];n(e).append(this)}return this},wrapInner:function(e){var t=A(e);return this.each(function(r){var i=n(this),s=i.contents(),o=t?e.call(this,r):e;s.length?s.wrapAll(o):i.append(o)})},unwrap:function(){return this.parent().each(function(){n(this).replaceWith(n(this).children())}),this},clone:function(){return n(this.map(function(){return this.cloneNode(!0)}))},hide:function(){return this.css("display","none")},toggle:function(t){return this.each(function(){var r=n(this);(t===e?r.css("display")=="none":t)?r.show():r.hide()})},prev:function(e){return n(this.pluck("previousElementSibling")).filter(e||"*")},next:function(e){return n(this.pluck("nextElementSibling")).filter(e||"*")},html:function(t){return t===e?this.length>0?this[0].innerHTML:null:this.each(function(e){var r=this.innerHTML;n(this).empty().append(U(this,t,e,r))})},text:function(t){return t===e?this.length>0?this[0].textContent:null:this.each(function(){this.textContent=t})},attr:function(n,r){var i;return typeof n=="string"&&r===e?this.length==0||this[0].nodeType!==1?e:n=="value"&&this[0].nodeName=="INPUT"?this.val():!(i=this[0].getAttribute(n))&&n in this[0]?this[0][n]:i:this.each(function(e){if(this.nodeType!==1)return;if(O(n))for(t in n)z(this,t,n[t]);else z(this,n,U(this,r,e,this.getAttribute(n)))})},removeAttr:function(e){return this.each(function(){this.nodeType===1&&z(this,e)})},prop:function(t,n){return n===e?this[0]?this[0][t]:e:this.each(function(e){this[t]=U(this,n,e,this[t])})},data:function(t,n){var r=this.attr("data-"+B(t),n);return r!==null?r:e},val:function(t){return t===e?this.length>0?this[0].multiple?n(this[0]).find("option").filter(function(e){return this.selected}).pluck("value"):this[0].value:e:this.each(function(e){this.value=U(this,t,e,this.value)})},offset:function(){if(this.length==0)return null;var e=this[0].getBoundingClientRect();return{left:e.left+window.pageXOffset,top:e.top+window.pageYOffset,width:e.width,height:e.height}},css:function(n,r){if(arguments.length<2&&typeof n=="string")return this.length==0?e:this[0].style[N(n)]||f(this[0],"").getPropertyValue(n);var i="";for(t in n)!n[t]&&n[t]!==0?this.each(function(){this.style.removeProperty(B(t))}):i+=B(t)+":"+F(t,n[t])+";";return typeof n=="string"&&(!r&&r!==0?this.each(function(){this.style.removeProperty(B(n))}):i=B(n)+":"+F(n,r)),this.each(function(){this.style.cssText+=";"+i})},index:function(e){return e?this.indexOf(n(e)[0]):this.parent().children().indexOf(this[0])},hasClass:function(e){return this.length<1?!1:j(e).test(this[0].className)},addClass:function(e){return this.each(function(t){r=[];var i=this.className,s=U(this,e,t,i);s.split(/\s+/g).forEach(function(e){n(this).hasClass(e)||r.push(e)},this),r.length&&(this.className+=(i?" ":"")+r.join(" "))})},removeClass:function(t){return this.each(function(n){if(t===e)return this.className="";r=this.className,U(this,t,n,r).split(/\s+/g).forEach(function(e){r=r.replace(j(e)," ")}),this.className=r.trim()})},toggleClass:function(t,r){return this.each(function(i){var s=U(this,t,i,this.className);(r===e?!n(this).hasClass(s):r)?n(this).addClass(s):n(this).removeClass(s)})},serialize:function(){var e=[],t,r=this.data("submit"),i=this.data("prevent"),s;return this.get(0).tagName=="FORM"?s=n(Array.prototype.slice.call(this.get(0).elements)):s=this.find("input,select,textarea"),s.each(function(){t=n(this);if(r&&r.indexOf(t.attr("name"))<0)return;if(i&&i.indexOf(t.attr("name"))>=0)return;var s=t.attr("type");this.nodeName.toLowerCase()!="fieldset"&&!this.disabled&&s!="submit"&&s!="reset"&&s!="button"&&(s!="radio"&&s!="checkbox"||this.checked)&&e.push(encodeURIComponent(t.attr("name"))+"="+encodeURIComponent(t.val()))}),e.join("&")}},["width","height"].forEach(function(t){n.fn[t]=function(r){var i,s=t.replace(/./,function(e){return e[0].toUpperCase()});return r===e?this[0]==window?window["inner"+s]:this[0]==o?o.documentElement["offset"+s]:(i=this.offset())&&i[t]:this.each(function(e){var i=n(this);i.css(t,U(this,r,e,i[t]()))})}}),v.forEach(function(e,t){n.fn[e]=function(){var e=n.map(arguments,function(e){return O(e)?e:T.fragment(e)});if(e.length<1)return this;var r=this.length,i=r>1,s=t<2;return this.each(function(n,o){for(var u=0;u<e.length;u++){var a=e[s?e.length-u-1:u];X(a,function(e){e.nodeName!=null&&e.nodeName.toUpperCase()==="SCRIPT"&&(!e.type||e.type==="text/javascript")&&window.eval.call(window,e.innerHTML)}),i&&n<r-1&&(a=a.cloneNode(!0)),W(t,o,a)}})},n.fn[t%2?e+"To":"insert"+(t?"Before":"After")]=function(t){return n(t)[e](this),this}}),T.Z.prototype=n.fn,T.camelize=N,T.uniq=C,n.zepto=T,n}();window.Zepto=Zepto,"$"in window||(window.$=Zepto),function(e){function s(e){return e._zid||(e._zid=r++)}function o(e,t,r,i){t=u(t);if(t.ns)var o=a(t.ns);return(n[s(e)]||[]).filter(function(e){return e&&(!t.e||e.e==t.e)&&(!t.ns||o.test(e.ns))&&(!r||s(e.fn)===s(r))&&(!i||e.sel==i)})}function u(e){var t=(""+e).split(".");return{e:t[0],ns:t.slice(1).sort().join(" ")}}function a(e){return new RegExp("(?:^| )"+e.replace(" "," .* ?")+"(?: |$)")}function f(t,n,r){e.isObject(t)?e.each(t,r):t.split(/\s/).forEach(function(e){r(e,n)})}function l(t,r,i,o,a,l){l=!!l;var c=s(t),h=n[c]||(n[c]=[]);f(r,i,function(n,r){var i=a&&a(r,n),s=i||r,f=function(e){var n=s.apply(t,[e].concat(e.data));return n===!1&&e.preventDefault(),n},c=e.extend(u(n),{fn:r,proxy:f,sel:o,del:i,i:h.length});h.push(c),t.addEventListener(c.e,f,l)})}function c(e,t,r,i){var u=s(e);f(t||"",r,function(t,r){o(e,t,r,i).forEach(function(t){delete n[u][t.i],e.removeEventListener(t.e,t.proxy,!1)})})}function v(t){var n=e.extend({originalEvent:t},t);return e.each(d,function(e,r){n[e]=function(){return this[r]=h,t[e].apply(t,arguments)},n[r]=p}),n}function m(e){if(!("defaultPrevented"in e)){e.defaultPrevented=!1;var t=e.preventDefault;e.preventDefault=function(){this.defaultPrevented=!0,t.call(this)}}}var t=e.zepto.qsa,n={},r=1,i={};i.click=i.mousedown=i.mouseup=i.mousemove="MouseEvents",e.event={add:l,remove:c},e.proxy=function(t,n){if(e.isFunction(t)){var r=function(){return t.apply(n,arguments)};return r._zid=s(t),r}if(typeof n=="string")return e.proxy(t[n],t);throw new TypeError("expected function")},e.fn.bind=function(e,t){return this.each(function(){l(this,e,t)})},e.fn.unbind=function(e,t){return this.each(function(){c(this,e,t)})},e.fn.one=function(e,t){return this.each(function(n,r){l(this,e,t,null,function(e,t){return function(){var n=e.apply(r,arguments);return c(r,t,e),n}})})};var h=function(){return!0},p=function(){return!1},d={preventDefault:"isDefaultPrevented",stopImmediatePropagation:"isImmediatePropagationStopped",stopPropagation:"isPropagationStopped"};e.fn.delegate=function(t,n,r){var i=!1;if(n=="blur"||n=="focus")e.iswebkit?n=n=="blur"?"focusout":n=="focus"?"focusin":n:i=!0;return this.each(function(s,o){l(o,n,r,t,function(n){return function(r){var i,s=e(r.target).closest(t,o).get(0);if(s)return i=e.extend(v(r),{currentTarget:s,liveFired:o}),n.apply(s,[i].concat([].slice.call(arguments,1)))}},i)})},e.fn.undelegate=function(e,t,n){return this.each(function(){c(this,t,n,e)})},e.fn.live=function(t,n){return e(document.body).delegate(this.selector,t,n),this},e.fn.die=function(t,n){return e(document.body).undelegate(this.selector,t,n),this},e.fn.on=function(t,n,r){return n==undefined||e.isFunction(n)?this.bind(t,n||r):this.delegate(n,t,r)},e.fn.off=function(t,n,r){return n==undefined||e.isFunction(n)?this.unbind(t,n||r):this.undelegate(n,t,r)},e.fn.trigger=function(t,n){return typeof t=="string"&&(t=e.Event(t)),m(t),t.data=n,this.each(function(){"dispatchEvent"in this&&this.dispatchEvent(t)})},e.fn.triggerHandler=function(t,n){var r,i;return this.each(function(s,u){r=v(typeof t=="string"?e.Event(t):t),r.data=n,r.target=u,e.each(o(u,t.type||t),function(e,t){i=t.proxy(r);if(r.isImmediatePropagationStopped())return!1})}),i},"focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout change select keydown keypress keyup error".split(" ").forEach(function(t){e.fn[t]=function(e){return this.bind(t,e)}}),["focus","blur"].forEach(function(t){e.fn[t]=function(e){if(e)this.bind(t,e);else if(this.length)try{this.get(0)[t]()}catch(n){}return this}}),e.Event=function(e,t){var n=document.createEvent(i[e]||"Events"),r=!0;if(t)for(var s in t)s=="bubbles"?r=!!t[s]:n[s]=t[s];return n.initEvent(e,r,!0,null,null,null,null,null,null,null,null,null,null,null,null),n}}(Zepto),typeof define=="function"&&define(function(){return Zepto});