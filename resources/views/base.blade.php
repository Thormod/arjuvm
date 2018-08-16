<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ArjuVM - Fitness Coach</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- /Plugins CSS Files -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/animate.min.css">
        <link rel="stylesheet" href="/css/slick.css"/>
        <link rel="stylesheet" href="/css/jquery-ui.min.css">
        <link rel="stylesheet" href="/css/magnific-popup.css">
        <!-- /Template CSS Files -->
        <link rel="stylesheet" href="/css/app.css">

        <!-- ==== Font Awesome ==== -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <!--Include Google Fonts Montserrat-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">


        <!-- /JS -->
        <script src="/js/vendor/modernizr-custom.js"></script>

        <!-- /Add favicon -->
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        @yield('content')
        <a id="back-to-top" href="#" class="btn btn-lg back-to-top" role="button">
            <i class="fas fa-angle-up"></i>
        </a>
        @include('layouts.footer')
        <!-- Include JS -->
        <script src="/js/jquery-3.2.0.min.js"></script>
        <script src="/js/modernizr-custom.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/slick.min.js"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/app.js"></script>
        <script src="/js/scroll.js"></script>
    </body>
</html>