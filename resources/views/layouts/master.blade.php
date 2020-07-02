<!doctype html>
<html class="no-js" lang="">

    <head>
        <title>@yield('title')</title>

        @include('includes.meta')

        @include('includes.css')
        
    </head>

    <body>
        
        @include('layouts._sidebar')

        <!-- Right Panel -->
        <div id="right-panel" class="right-panel">
        
            @include('layouts._navbar')

            @yield('content')

            <div class="clearfix"></div>

            @include('layouts._footer')
        </div>
        <!-- /#right-panel -->

        @include('includes.script')
        @stack('after_script')
    </body>

</html>