<div class="@if(url()->current() == env('APP_URL') . '/contact')social @else social container @endif">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>{{ __('about.social_title') }}</h2>
            <p class="">{{ __('about.social_text') }}</p>
            <div class="social_link">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-telegram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>