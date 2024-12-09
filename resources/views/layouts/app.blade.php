<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Education Online')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta Description -->
    <meta name="description" content="@yield('meta_description', 'Unicat Project')">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link href="{{ asset('plugins/video-js/video-js.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('styles/main_styles.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/colorbox/colorbox.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/course.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/course_responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/course.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/course_responsive.css') }}">"
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contact.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/contact_responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/blog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/blog_responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/blog_single.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/blog_single_responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/about.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/about_responsive.css') }}">

</head>
<body>
    <div class="super_container">
        <!-- Include Header -->
        @include('components.header')

        <!-- Main Content -->
        @yield('content')

        <!-- Include Footer -->
        @include('components.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/TimelineMax.min.js') }}"></script>
    <script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ asset('plugins/colorbox/jquery.colorbox-min.js') }}"></script>
    <script src="{{ asset('https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA') }}"></script>
    <script src="{{ asset('plugins/marker_with_label/marker_with_label.js') }}"></script>
    <script src="{{ asset('plugins/video-js/video.min.js') }}"></script>
    <script src="{{ asset('plugins/masonry/masonry.js') }}"></script>
    <script src="{{ asset('js/about.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/blog_single.js') }}"></script>
    <script src="{{ asset('js/blog.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/courses.js') }}"></script>

</body>
</html>
