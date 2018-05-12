<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('includes.meta')

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
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
