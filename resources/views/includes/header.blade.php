<nav class="navbar navbar-static-top" style="background-color: #e3e3e3">
    <div class="container">
        <div class="row">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse2" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse2">

                <!-- Right Side Of Navbar -->
                <ul class="nav nav-pills nav-justified menu_main">

                    <li class="nav-item"><a href="{{ route('services') }}">{{ __('base.menu_service') }}</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}">{{ __('base.menu_about') }}</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}">{{ __('base.menu_contact') }}</a></li>

                </ul>
            </div>
        </div>
    </div>
</nav>