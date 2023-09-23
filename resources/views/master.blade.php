@include('layouts.header')

<body>

    @include('layouts.nav')
    @include('layouts.messages')
    @yield('content')

    @include('layouts.footer')

</body>

<script src="{{ asset('js/app.js') }}"></script>

</html>
