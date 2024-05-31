<!-- (Component) Website-footer.blade.php -->
<style>
    .uk-nav i {
    font-size: 20px; /* Ajuste conforme necessário */
    margin-right: 8px; /* Espaço entre o ícone e o texto */
    vertical-align: middle; /* Alinhar verticalmente com o texto */
}

</style>
<div class="page-footer__top">
    <div class="uk-container uk-container-large">
        <div class="page-footer__inner">
            <div class="page-footer__contacts">
                <a class="footer-logo" href="{{ route('welcome') }}">
                    <img src="{{ asset('public/img/logo-white.png') }}" alt="Technomac Logo">
                </a>
                <p>{{ __('Need assistance or have any questions? Feel free to reach out to us. Our team is here to help!') }}</p>
                <ul class="contacts-list">
                    <li>
                        <a href="https://goo.gl/maps/XdgZbYX9V62UpBwc7" target="_blank">
                            <span data-uk-icon="location"></span>
                            <span>{{ e($footer->address) }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="tel:{{ e($footer->contact) }}">
                            <span data-uk-icon="receiver"></span>
                            <span>{{ e($footer->contact) }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:info@techmactrade.com">
                            <span data-uk-icon="mail"></span>
                            <span>info@techmactrade.com</span>
                        </a>
                    </li>
                </ul>
                <ul class="social">
                    @if(!empty($footer->facebook))
                    <li>
                        <a class="social__link" href="http://www.facebook.com/{{ e($footer->facebook) }}" target="_blank">
                            <span data-uk-icon="facebook"></span>
                        </a>
                    </li>
                    @endif
                    @if(!empty($footer->twitter))
                    <li class="social__item">
                        <a class="social__link" href="http://www.twitter.com/{{ e($footer->twitter) }}" target="_blank">
                            <span data-uk-icon="twitter"></span>
                        </a>
                    </li>
                    @endif
                    @if(!empty($footer->instagram))
                    <li class="social__item">
                        <a class="social__link" href="http://www.instagram.com/{{ e($footer->instagram) }}" target="_blank">
                            <span data-uk-icon="instagram"></span>
                        </a>
                    </li>
                    @endif
                    @if(!empty($footer->linkedin))
                    <li class="social__item">
                        <a class="social__link" href="http://www.linkedin.com/{{ e($footer->linkedin) }}" target="_blank">
                            <span data-uk-icon="linkedin"></span>
                        </a>
                    </li>
                    @endif
                    @if(!empty($footer->youtube))
                    <li class="social__item">
                        <a class="social__link" href="http://www.youtube.com/{{ e($footer->youtube) }}" target="_blank">
                            <span data-uk-icon="youtube"></span>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="page-footer__menu">
                <h4>{{ __('Our Solutions') }}</h4>
                <ul class="uk-nav">
                    <li><a href="#"><i class="bx bx-shield-quarter"></i> {{ __('Safe Walls System') }}</a></li>
                    <li><a href="#"><i class="bx bx-wind"></i> {{ __('Climate Control') }}</a></li>
                    <li><a href="#"><i class="bx bx-health"></i> {{ __('Health Care') }}</a></li>
                    <li><a href="#"><i class="bx bx-movie"></i> {{ __('Entertainment') }}</a></li>
                    <li><a href="#"><i class="bx bx-power-off"></i> {{ __('Power Generation') }}</a></li>
                    <li><a href="#"><i class="bx bx-bulb"></i> {{ __('Industrial Lighting') }}</a></li>
                </ul>
            </div>
            <div class="page-footer__menu">
                <h4>{{ __('Company Info') }}</h4>
                <ul class="uk-nav">
                    <li><a href="{{ route('about') }}"><i class="bx bx-info-circle"></i> {{ __('About Technomac') }}</a></li>
                    <li><a href="{{ route('solution') }}"><i class="bx bx-briefcase"></i> {{ __('Our Solutions') }}</a></li>
                    <li><a href="{{ route('terms') }}"><i class="bx bx-file"></i> {{ __('Terms & Conditions') }}</a></li>
                    <li><a href="{{ route('protections') }}"><i class="bx bx-shield"></i> {{ __('Protections & Coverages') }}</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/dashboard') }}"><i class="bx bx-dashboard">Dashboard</a></li>
                        @else
                            <li><a href="{{ route('login') }}"><i class="bx bx-log-in"></i> {{ __('Administrator') }}</a></li>
                        @endauth
                    @endif
                    
                </ul>
            </div>
            <div class="page-footer__news">
                <h4>{{ __('Latest News') }}</h4>
                <!-- Add latest news content here if available -->
            </div>

        </div>
    </div>
</div>
<div class="page-footer__bottom">
    <div class="uk-container uk-container-large">
        <div class="page-footer__copy">
            <span>&copy; {{ date('Y') }} <b>{{ __('Technomac - Trading and Services') }}</b> - {{ __('Heavy Equipment Rental Service') }}</span>
            <a href="{{ route('terms') }}">{{ __('Terms & Conditions') }}</a>
        </div>
    </div>
</div>
