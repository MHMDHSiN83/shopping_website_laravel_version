@include('layouts.header')

<body>
    @include('layouts.nav')
    @include('layouts.messages')
    @include('user.profile.layouts.menu')
    @yield('content')
    @include('layouts.footer')
</body>

</html>
