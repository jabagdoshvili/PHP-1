<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Nooic Title')</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="@yield('theme','light')">

    <!-- Header -->

    @include('includes.header')

    <!-- End eader -->

    <!-- Main -->

    @yield('content')

    <!-- End Main -->

    <!-- Footer -->
    @if(isset($showFooter) && $showFooter)
        @yield('footer')
    @endif
    <!-- End Footer -->

</body>

</html>