<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('frontend/homepage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset('frontend/homepage/css/modern-business.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('font/css/fontawesome.css') }}">

<body>
    <div class="content" style="margin-top: 20px">
    @yield('content')

    @stack('footer')
</div>
</body>

<!-- Bootstrap core JavaScript -->


<script src="{{ asset('frontend/homepage/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/homepage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

@stack('script')


</html>