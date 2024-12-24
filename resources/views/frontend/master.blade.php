
<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>

    @include('frontend.partials.topbar')

    @include('frontend.partials.navbar')
    
    @yield('content')

    @include('frontend.partials.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    @include('frontend.partials.scripts')

</body>
</html>