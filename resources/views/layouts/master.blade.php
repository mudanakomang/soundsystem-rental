
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="webthemez.com">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Best - Music Event Website Template html5 bootstrap</title>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}} ">
<link rel="stylesheet" href="{{ asset('css/flexslider.css')}} ">
<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css') }}"> 
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-icon.css') }}">
<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
</head>

<body>
<!-- header section -->
@include('layouts.header')
<!-- header section --> 
<!-- intro section -->
@yield('intro')
<!-- intro section --> 
<!-- services section -->
@yield('services')
@yield('event')
<!-- gallery section -->
@yield('gallery')
<!-- gallery section --> 

<!-- our team section -->
@yield('team')
<!-- our team section --> 
<!-- Testimonials section -->
@yield('testimonials')
<!-- Testimonials section --> 

<!-- contact section -->
@yield('contact')
<!-- contact section --> 
<!-- Footer section -->
@include('layouts.footer')
<!-- Footer section --> 
<!-- JS FILES --> 
<script src="{{ asset('js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script> 
<script src="{{ asset('js/jquery.fancybox.pack.js')}} "></script>  
<script src="{{ asset('js/modernizr.js') }}"></script> 
<script src="{{ asset('js/main.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/jquery.countdown.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/global.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.contact.js') }}"></script> 
@yield('scripts')

</body>
</html>