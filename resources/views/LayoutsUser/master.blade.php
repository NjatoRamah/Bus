<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sass/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/css/all.min.css')}}">
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <!-- End WOWSlider.com HEAD section -->
    <title>Taxibrousse</title>
</head>
<body style="background:#ececec">
    @include('LayoutsUser/header')
    @yield('contenue')
    @include('LayoutsUser/footer')

    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/slide.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wowslider.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>