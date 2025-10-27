<!DOCTYPE html>
<html data-layout="topnav" @yield('html_attribute')>

<head>
    @include('shared.partials/title-meta')

    @include('shared.partials/head-css')
</head>

<body>

<div class="wrapper">

    @include('shared.partials/topbar')

    @include('shared.partials/horizontal-nav')

    <div class="content-page">

        <div class="container-fluid">

            @yield('content')

        </div>

        @include('shared.partials/footer')

    </div>

    @include('shared.partials/customizer')

</div>

@include('shared.partials/footer-scripts')

</body>

</html>
