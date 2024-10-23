<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Remodeling - Services</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Transform your home with our expert remodeling services. From kitchens to bathrooms, we create spaces you'll love.">
                
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="{{ asset('assets/css/vendors.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/icon.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/demos/hotel-and-resort/hotel-and-resort.css') }}"/>

    </head>
    <body data-mobile-nav-style="classic">
        <!-- start header -->
        @include('remodeling.partials.header')
        <!-- end header -->
        @yield('content')
        <!-- start footer -->
        @include('remodeling.partials.footer')
        <!-- end footer -->
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/vendors.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

    </body>
</html>