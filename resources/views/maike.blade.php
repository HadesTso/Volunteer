<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>中华遗嘱库</title>
    <!-- 样式 -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="{{ route_class() }}-page">
    </div>
    <!-- JS 脚本 -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script charset="UTF-8" defer>(function(h){function n(a){return null===a?null:a.scrollHeight>a.clientHeight?a:n(a.parentNode)}function t(b){if(b.data){var f=JSON.parse(b.data);!f.height||p||q||(d.style.height=+f.height+"px");if(f.getter){b={};var f=[].concat(f.getter),k,h=f.length,m,c,g,e;for(k=0;k<h;k++){m=k;c=f[k]||{};c.n&&(m=c.n);g=null;try{switch(c.t){case "window":e=window;break;case "scrollParent":e=n(a)||window;break;default:e=a}if(c.e)if("rect"===c.v){g={};var l=e.getBoundingClientRect();g={top:l.top,left:l.left,width:l.width,height:l.height}}else g=e[c.v].apply(e,[].concat(c.e))||!0;else c.s?(e[c.v]=c.s,g=!0):g=e[c.v]||!1}catch(u){}b[m]=g}b.innerState=!p&&!q;a.contentWindow.postMessage(JSON.stringify({queryRes:b}),"*")}}}for(var r=h.document,b=r.documentElement;b.childNodes.length&&1==b.lastChild.nodeType;)b=b.lastChild;var d=b.parentNode,a=r.createElement("iframe");d.style.overflowY="auto";d.style.overflowX="hidden";var p=d.style.height&&"auto"!==d.style.height,q="absolute"===d.style.position||window.getComputedStyle&&"absolute"===window.getComputedStyle(d,null).getPropertyValue("position")||d.currentStyle&&"absolute"===d.currentStyle.position;h.addEventListener&&h.addEventListener("message",t,!1);a.src="http://zhonghuayizhuku321.mikecrm.com/9qNyZOs";a.id="mkin9qNyZOs";a.onload=function(){a.contentWindow.postMessage(JSON.stringify({cif:1}),"*")};a.frameBorder=0;a.scrolling="no";a.style.display="block";a.style.minWidth="100%";a.style.width="100px";a.style.height="100%";a.style.border="none";a.style.overflow="auto";d.insertBefore(a,b)})(window);</script>
</body>
</html>