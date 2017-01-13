<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.fragments.head')

</head>
<body>

    @include('layouts.fragments.nav')

    @yield('content')

    @include('layouts.fragments.scripts')

</body>
</html>
