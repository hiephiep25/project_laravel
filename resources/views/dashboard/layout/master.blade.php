<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{asset('/')}}">
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    {{-- <link rel="stylesheet" href="https://unpkg.com/taiwindcss@^1.0/dist/taiwind.min.css"> --}}
    <link rel="stylesheet" href="front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">
</head>
<body>
{{-- Body --}}
@yield('body')
   <!-- Js Plugins -->
   <script src="front/js/jquery-3.3.1.min.js"></script>
   <script src="front/js/bootstrap.min.js"></script>
   <script src="front/js/jquery-ui.min.js"></script>
   <script src="front/js/jquery.countdown.min.js"></script>
   <script src="front/js/jquery.nice-select.min.js"></script>
   <script src="front/js/jquery.zoom.min.js"></script>
   <script src="front/js/jquery.dd.min.js"></script>
   <script src="front/js/jquery.slicknav.js"></script>
   <script src="front/js/owl.carousel.min.js"></script>
   <script src="front/js/owlcarousel2-filter.min.js"></script>
   <script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
   <script src="front/js/main.js"></script>
</body>

</html>