<!DOCTYPE html>
<html lang="en" @yield('html_attribute')>

<head>

    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('shared.partials/head-css')

</head>

<body @yield('body_attribute')>

@yield('content')

@include('shared.partials/footer-scripts')

</body>

</html>
