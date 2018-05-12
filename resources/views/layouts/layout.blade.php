<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('includes.meta')
    @include('includes.css')

</head>
<body>
<div id="site">

    @yield('content')

</div>

@section('script')

    @include('includes.script')

@show

</body>

@include('includes.footer')

</html>
