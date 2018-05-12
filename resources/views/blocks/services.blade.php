<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="features">
                <h3 class="text-center">{{ $service['smm']->title }}</h3>
                <p>
                    {!! str_limit($service['smm']->ua, $service['smm']->length,'....') !!}
                    <a href="{{ route('services') }}?active=smm">{{ __('base.read_more') }}</a>
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 hidden-xs">
            <div style="border: none" class="features">
                <img class="img-responsive lamp_big" src="{{ asset('img/main/lamp-big.png') }}" alt="lamp">
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="features">
                <h3 class="text-center">{{ $service['marketing']->title }}</h3>
                <p>
                    {!! str_limit($service['marketing']->ua, $service['marketing']->length,'....') !!}
                    <a href="{{ route('services') }}?active=marketing">{{ __('base.read_more') }}</a>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="features">
                <h3 class="text-center">{{ $service['develop']->title }}</h3>
                <p>
                    {!! str_limit($service['develop']->ua, $service['develop']->length,'....') !!}
                    <a href="{{ route('services') }}?active=develop">{{ __('base.read_more') }}</a>
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="features">
                <h3 class="text-center">{{ $service['email']->title }}</h3>
                <p>
                    {!! str_limit($service['email']->ua, $service['email']->length,'....') !!}
                    <a href="{{ route('services') }}?active=email">{{ __('base.read_more') }}</a>
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="features">
                <h3 class="text-center">{{ $service['bisnes']->title }}</h3>
                <p>
                    {!! str_limit($service['bisnes']->ua, $service['bisnes']->length,'....') !!}
                    <a href="{{ route('services') }}?active=bisnes">{{ __('base.read_more') }}</a>
                </p>
            </div>
        </div>
    </div>
</div>