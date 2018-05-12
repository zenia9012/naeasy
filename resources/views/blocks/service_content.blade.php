<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="active" id="marketing-tab" data-toggle="tab" href="#marketing" role="tab" aria-controls="home"
           aria-selected="true">
            <span>
                <img width="18px" src="{{ asset('img/service/marketing.png') }}" alt="marketing">
            </span>
            {{ __('service.service_marketing_title') }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="bisnes-tab" data-toggle="tab" href="#bisnes" role="tab" aria-controls="bisnes"
           aria-selected="false">
            <span>
                <img class="" src="{{ asset('img/service/bisnes.png') }}" alt="training">
            </span>
            {{ __('service.service_bisnes_title') }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="develop-tab" data-toggle="tab" href="#develop" role="tab" aria-controls="smm"
           aria-selected="false">
            <span>
                <img class="" src="{{ asset('img/service/web.png') }}" alt="develop">
            </span>
            {{ __('service.service_develop_title') }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="smm-tab" data-toggle="tab" href="#smm" role="tab" aria-controls="smm"
           aria-selected="false">
            <span>
                <img class="" src="{{ asset('img/service/smm.png') }}" alt="smm">
            </span>
            {{ __('service.service_smm_title') }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="email-tab" data-toggle="tab" href="#email" role="tab" aria-controls="email"
           aria-selected="false">
            <span>
                <img class="" src="{{ asset('img/service/smm.png') }}" alt="email">
            </span>
            {{ __('service.service_email_title') }}</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
        {!! $service['marketing']->all_text_ua !!}
    </div>
    <div class="tab-pane fade" id="bisnes" role="tabpanel" aria-labelledby="bisnes-tab">
        {!! $service['bisnes']->all_text_ua !!}
    </div>
    <div class="tab-pane fade" id="develop" role="tabpanel" aria-labelledby="develop-tab">
        {!! $service['develop']->all_text_ua !!}
    </div>
    <div class="tab-pane fade" id="smm" role="tabpanel" aria-labelledby="smm-tab">
        {!! $service['smm']->all_text_ua !!}
    </div>
    <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email-tab">
        {!! $service['email']->all_text_ua !!}
    </div>
</div>