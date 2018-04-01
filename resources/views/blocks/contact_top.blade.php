<div class="our_contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center">{{ __('base.our_contact') }}</h2>
                <ul>
                    <li>{{ __('base.tel') }} : <a href="tel:{{ $phone1 }}">{{ $phone1 }}</a></li>
                    <li>{{ __('base.tel') }} : <a href="tel:{{ $phone2 }}">{{ $phone2 }}</a></li>
                    <li>{{ __('base.email') }} : <a href="malito:{{ $email }}">{{ $email }}</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                @include('blocks.social')
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contact_form">
                    <h2 class="text-center">{{ __('base.contact_form_title') }}</h2>
                    <p class="text-center">{{ __('base.contact_form_text') }}</p>
                    @include('blocks.contact_form')
                </div>
            </div>
        </div>
    </div>
</div>