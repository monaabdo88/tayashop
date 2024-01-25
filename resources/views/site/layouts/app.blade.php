
<!DOCTYPE html>
<html lang="en">
<head>
<title>OneTech</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/plugins/fontawesome-all.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/plugins/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/plugins/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/plugins/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/plugins/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/responsive.css') }}">
</head>
<body>
<div class="super_container">

@include('site.includes.header')
@include('site.includes.banner')
@include('site.includes.bottom_banner')
@yield('content')
@include('site.includes.brands')

@include('site.includes.newsletter')

@include('site.includes.footer')

<div class="copyright">
<div class="container">
<div class="row">
<div class="col">
<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
<div class="copyright_content">
Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>

</div>
<div class="logos ml-sm-auto">
<ul class="logos_list">
<li><a href="#"><img src="assets/front/images/logos_1.png" alt></a></li>
<li><a href="#"><img src="assets/front/images/logos_2.png" alt></a></li>
<li><a href="#"><img src="assets/front/images/logos_3.png" alt></a></li>
<li><a href="#"><img src="assets/front/images/logos_4.png" alt></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<script src="{{ asset('assets/front/js/popper.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/front/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('assets/front/js/TimelineMax.min.js') }}"></script>
<script src="{{ asset('assets/front/js/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('assets/front/js/animation.gsap.min.js') }}"></script>
<script src="{{ asset('assets/front/js/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('assets/front/js/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/front/js/slick.js') }}"></script>
<script src="{{ asset('assets/front/js/easing.js') }}"></script>
<script src="{{ asset('assets/front/js/custom.js') }}"></script>

</body>
</html>
