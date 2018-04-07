<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->

                <li><a href="{{ route('services') }}">{{ __('base.menu_service') }}</a></li>
                <li><a href="{{ route('about') }}">{{ __('base.menu_about') }}</a></li>
                {{--<li><a href="#">{{ __('base.menu_kp') }}</a></li>--}}
                <li><a href="{{ route('contact') }}">{{ __('base.menu_contact') }}</a></li>

            </ul>
        </div>
    </div>
</nav>