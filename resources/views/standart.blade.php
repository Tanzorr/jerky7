<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>

<body>
@include('partials.header')
@include('partials.nav')

<div class="contant">

    @yield('content')

    @include('partials.footer')

</div> <!-- end of .container -->

@include('partials.javascript')

{{--JS for all pages --}}
@yield('scripts')

</body>
</html>