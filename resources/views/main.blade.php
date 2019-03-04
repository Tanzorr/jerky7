<!doctype html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>


    <div id="app">
        <router-view></router-view>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    @include('partials.javascript')

    {{--JS for all pages --}}
    @yield('scripts')

</body>
</html>
