<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="navbar-header">

                    <!-- Branding Image -->
                    <div class="brand_footer text-center">
                        <a href="{{ route('main') }}"><img class="img-responsive" src="{{ asset('img/main/lamp-small.png') }}" alt="naeasy"></a>
                        <a href="{{ route('main') }}"><h2><span class="na">NA</span>EASY</h2></a>
                    </div>

                </div>

            </div>
            <div class="col-md-6">
                <div class="navbar" >

                    <!-- Right Side Of Navbar -->
                    <ul style="text-align: center;" class="nav navbar-nav menu_main menu_footer">

                        <li><a href="{{ route('main') }}">{{ __('base.menu_main') }}</a></li>
                        <li><a href="{{ route('services') }}">{{ __('base.menu_service') }}</a></li>
                        <li><a href="{{ route('about') }}">{{ __('base.menu_about') }}</a></li>
                        <li><a href="{{ route('contact') }}">{{ __('base.menu_contact') }}</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</nav>