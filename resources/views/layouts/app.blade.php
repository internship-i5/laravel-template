<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') | Designer Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/node_modules/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('/node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href=" {{ asset('/node_modules/magnific-popup/dist/magnific-popup.css') }} " rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/freelancer.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

@include('partials.navigation')
@include('partials.header')
@yield('content')
@include('partials.footer')

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('/node_modules/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/node_modules/bootstrap/dist/js/bootstrap.bundle.js') }} "></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('/node_modules/jquery-easing/dist/jquery.easing.1.3.umd.min.js') }}"></script>
<script src="{{ asset('/node_modules/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>

<!-- Contact Form JavaScript -->
<script src="{{ asset('/js/jqBootstrapValidation.js')}}"></script>
<script src="{{ asset('/js/contact_me.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('/js/freelancer.min.js') }}"></script>

</body>

</html>
