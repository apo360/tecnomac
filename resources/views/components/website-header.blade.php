<!-- Header Section -->
<header class="page-header --two-line">
    <!-- Linha superior do cabeçalho -->
    <div class="page-header__top-line">
        <div class="uk-container">
            <div class="page-header__inner">
                <!-- Informações de contato -->
                <div class="page-header__contacts-list">
                    <ul>
                        <li><a href="https://goo.gl/maps/RwFh5b8Po1pdxBS19" target="_blank"><span data-uk-icon="location"></span><span>{{ $header->address }}</span></a></li>
                        <li><a href="mailto:info@techmactrade.com"><span data-uk-icon="mail"></span><span>info@techmactrade.com</span></a></li>
                    </ul>
                </div>
                <!-- Redes Sociais -->
                <div class="page-header__social">
                    <ul class="social">
                        @foreach (['facebook', 'twitter', 'instagram', 'linkedin', 'youtube'] as $social)
                            @if (!empty($header->$social))
                                <li class="social__item">
                                    <a class="social__link" href="https://www.{{ $social }}.com/{{ e($header->$social) }}" target="_blank">
                                        <span data-uk-icon="{{ $social }}"></span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <!-- Botão de ligação -->
                <div class="page-header__contacts">
                    <a class="contacts-block" href="tel:{{ $header->contact }}">
                        <span data-i18n="contacts.needHelp">Need Help? Call Us</span>
                        <strong>{{ $header->contact }}</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Linha inferior do cabeçalho (fixada na parte superior) -->
    <div class="page-header__bottom-line" data-uk-sticky>
        <div class="uk-container">
            <div class="page-header__inner">
                <!-- Logo para desktop -->
                <div class="page-header__logo d-none d-lg-block me-auto">
                    <a class="logo" href="{{ route('welcome') }}">
                        <img src="{{ asset('public/img/logo.png') }}" alt="Technomac Logo" class="img-fluid">
                    </a>
                </div>
                <!-- Logo para smartphones -->
                <div class="page-header__logo d-block d-lg-none me-auto">
                    <a class="logo" href="{{ route('welcome') }}">
                        <img src="{{ asset('public/img/logo_phone.png') }}" alt="Technomac Logo" class="img-fluid">
                    </a>
                </div>
                <!-- Menu Principal -->
                <div class="page-header__mainmenu">
                    <ul class="uk-navbar-nav uk-nav" data-uk-navbar>
                        <li><a href="{{ route('welcome') }}"><span><i class="bx bx-home" style="color:#ff851b"></i> Home</span></a></li>
                        <li><a href="{{ route('page.equipment') }}"><span><i class="bx bx-cog" style="color:#ff851b"></i> Equipments</span></a></li>
                        <li><a href="{{ route('solution') }}"><span><i class="bx bx-briefcase" style="color:#ff851b"></i> {{ __('Our Solutions') }}</span></a></li>
                        <li><a href="{{ route('about') }}"><span><i class="bx bx-info-circle" style="color:#ff851b"></i> {{ __('About Us') }}</span></a></li>
                        <li><a href="{{ route('contact') }}"><span><i class="bx bx-envelope" style="color:#ff851b"></i> {{ __('Contact') }}</span></a></li>
                    </ul>
                </div>
                <!-- Botão de pesquisa -->
                <div class="page-header__search">
                    <div class="search-full">
                        <a class="uk-icon-button" href="#modal-search-full" data-uk-search-icon data-uk-toggle></a>
                        <div class="uk-modal-full uk-modal" id="modal-search-full" data-uk-modal>
                            <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" data-uk-height-viewport>
                                <button class="uk-modal-close-full" type="button" data-uk-close></button>
                                <form class="uk-search uk-search-large">
                                    <input class="uk-search-input uk-text-center" type="search" placeholder="Search" autofocus>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Botão de menu móvel -->
                <div class="page-header__mobile-menu-btn">
                    <button data-uk-toggle="target: #offcanvas" type="button">
                        <span data-uk-icon="menu"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main -->