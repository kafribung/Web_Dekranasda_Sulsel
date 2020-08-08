<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    @include('includes.page_css')
</head>

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay
    data-plugin-options="{'hideDelay': 500}">
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="body">
        {{-- Navbar --}}
        @include('layouts.page_navbar')
        {{-- Content --}}
        @yield('content')
        {{-- Footer --}}
        @include('layouts.page_footer')
    </div>
    @include('includes.page_script')
</body>

</html>