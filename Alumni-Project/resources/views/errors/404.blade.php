<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>@yield('title','Alumni Network Platform')</title>
      <link rel="stylesheet" href="{{asset('assets//css/main.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets//css/style.css')}}">
      <link rel="stylesheet" href="{{asset('assets//css/color.css')}}">
      <link rel="stylesheet" href="{{asset('assets//css/responsive.css')}}">
      @include('layouts.includes.javascripts')
   </head>
   <body>
      <div class="theme-layout">
         <body>
                  <section>
                     <div class="ext-gap bluesh high-opacity">
                        <div class="content-bg-wrap" style="background: url('{{ asset('assets/images/animated-bg2.png') }}')"></div>
                        <div class="container-fluid">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="top-banner">
                                    <h1>404</h1>
                                    <nav class="breadcrumb">
                                       <span class="breadcrumb-item active">Page Not Found</span>
                                    </nav>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
                  <section>
                     <div class="gap100">
                        <div class="container">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="page-eror">
                                    <img src="images/resources/404.svg" alt="">
                                    <div class="error-meta">
                                       <h1>whoops! 404</h1>
                                       <span>we couldn't find that page </span>
                                       <a href="javascript:history.back()" title="" data-ripple="">Go Back</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 10px; right: 5px; opacity: 0; cursor: pointer;"><i class="fa fa-angle-up"></i></div>
            </div>
            <script src="js/main.min.js" type="text/javascript"></script>
            <script src="js/script.js" type="text/javascript"></script>
            <script>(function(){if (!document.body) return;var js = "window['__CF$cv$params']={r:'87c790df0dde2a85',t:'MTcxNDQ4MDQ2NS45MjIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/d0ff3ebede6b/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script><iframe height="1" width="1" style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe><!-- Code injected by live-server -->
            <script>
               if ('WebSocket' in window) {
                   (function () {
                       function refreshCSS() {
                           var sheets = [].slice.call(document.getElementsByTagName("link"));
                           var head = document.getElementsByTagName("head")[0];
                           for (var i = 0; i < sheets.length; ++i) {
                               var elem = sheets[i];
                               var parent = elem.parentElement || head;
                               parent.removeChild(elem);
                               var rel = elem.rel;
                               if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                                   var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                                   elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                               }
                               parent.appendChild(elem);
                           }
                       }
                       var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                       var address = protocol + window.location.host + window.location.pathname + '/ws';
                       var socket = new WebSocket(address);
                       socket.onmessage = function (msg) {
                           if (msg.data == 'reload') window.location.reload();
                           else if (msg.data == 'refreshcss') refreshCSS();
                       };
                       if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                           console.log('Live reload enabled.');
                           sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                       }
                   })();
               }
               else {
                   console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
               }
               // ]]>
            </script>
            <div id="mm-blocker" class="mm-slideout"></div>
   </body>
   @stack('bodycontent','')
   </div>
   </body>
</html>