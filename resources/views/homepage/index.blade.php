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

</head>

<body>

<!-- Navigation -->
@include('homepage.navbar')

@include('homepage.header')


<!-- Page Content -->
<div class="container">

    <h3 class="my-5" align="center">Trip Internasional</h3>

    <div class="row">
        @foreach($countries as $country)
        <div class="col-lg-4 col-sm-6 portfolio-item text-center">

            <div class="card h-100">
                <a href="{{ route('list_trip', $country->slug) }}"><img class="card-img-top" src="{{ asset('storage/internasional/' . $country->code . '.jpg') }}" alt="Gambar" height="200px"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{ route('list_trip', $country->slug) }}">{{ $country->name }}</a>
                    </h4>
                    <p class="card-text ">Traveller {{ $country->TripInternational->count() }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

<div class="center">
    {{ $countries->onEachSide(1)->links() }}
</div>

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('frontend/homepage/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/homepage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
