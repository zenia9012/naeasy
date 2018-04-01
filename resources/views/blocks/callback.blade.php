<div class="callback">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="kp text-center">
                    <h3>{{ __('main.kp_title') }}</h3>
                    <p>{{ __('main.kp_text') }}</p>
                    @include('blocks.modal_send_kp')
                </div>
            </div>
            <div class="col-md-6">
                <div class="call text-center">
                    <h3>{{ __('main.call_title') }}</h3>
                    <p>{{ __('main.call_text') }}</p>
                    <p>{{ __('main.call_text2') }}</p>
                    @include('blocks.modal_callback')
                </div>
            </div>
        </div>
    </div>
</div>