<!-- Meta Tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('front_title')</title>

<!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s) {
        if(f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1025587962548093');
    fbq('track', 'PageView');
</script>
<noscript>
    <img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1025587962548093&ev=PageView&noscript=1" />
</noscript>
<!-- End Meta Pixel Code -->

<!-- Snap Pixel Code -->
<script type='text/javascript'>
    (function(e, t, n) {
        if (e.snaptr) return;
        var a = e.snaptr = function() {
            a.handleRequest ? a.handleRequest.apply(a, arguments) : a.queue.push(arguments)
        };
        a.queue = [];
        var s = 'script';
        r = t.createElement(s);
        r.async = !0;
        r.src = n;
        var u = t.getElementsByTagName(s)[0];
        u.parentNode.insertBefore(r, u);
    })(window, document, 'https://sc-static.net/scevent.min.js');

    snaptr('init', '89f8d65b-4364-4595-a0b6-16a35cb84534', {
        'user_email': '_INSERT_USER_EMAIL_'
    });
    snaptr('track', 'PAGE_VIEW');
</script>
<!-- End Snap Pixel Code -->

<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11363655661"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-11363655661');
    </script>
<!-- Google tag (gtag.js) -->


<!-- Event snippet for مشاهدة الصفحة conversion page -->
    <script>
      gtag('event', 'conversion', {
          'send_to': 'AW-11363655661/ETmLCPCF_NIZEO2_zqoq',
          'value': 1.0,
          'currency': 'USD'
      });
    </script>


<!-- CSS Files -->
<link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/bootstrap.rtl.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/scrollCue.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/remixicon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/meanmenu.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/odometer.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/magnific.popup.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/responsive.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

@stack('css')
{{-- <link href="assets/images/favicon.png" type="image/x-icon" rel="icon"> --}}
