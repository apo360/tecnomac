
<!-- (Component) Website.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Fonts -->
        <meta content="" name="author">
        <meta content="Technomac Trading - Top-Of-The-Line Equipment" name="description">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="HandheldFriendly" content="true">
        <meta name="format-detection" content="telephone=no">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <link rel="shortcut icon" href="{{ asset('public/img/favicon.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('public/css/libs.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
        <link href="{{ asset('public/css/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/css/uikit.min.css" />

        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
            }

            .preloader {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #ffffff;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column; /* Adiciona uma coluna para a mensagem de carregamento */
                z-index: 9999; /* Garante que o preloader fique acima de todo o conteúdo */
    
            }

            .spinner {
                width: 70px;
                height: 70px;
                position: relative; /* Adiciona posição relativa para que possamos posicionar as camadas de rotação */
            }

            .spinner:before,
            .spinner:after {
                content: '';
                position: absolute;
                width: inherit;
                height: inherit;
                border: 5px solid transparent;
                border-top-color: #ff851b;
                border-radius: 50%;
                animation: spin 1s linear infinite; /* Animação de rotação */
            }

            .spinner:before {
                animation-delay: -0.5s; /* Atrasa a animação da camada inferior */
            }

            .spinner img {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 40px; /* Largura do favicon */
                height: 40px; /* Altura do favicon */
            }

            .loading-message {
                margin-top: 40px; /* Espaçamento superior para a mensagem */
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }

            /* Adiciona uma mudança de cor ao spinner */
            @keyframes changeColor {
                0% { border-top-color: #3498db; }
                50% { border-top-color: #e74c3c; }
                100% { border-top-color: #3498db; }
            }

            .content {
                display: none; /* Oculta o conteúdo da página até que o preloader seja removido */
            }

        </style>
    </head>
    <body class="page-home, page-rent, page-categories, page-about">
        <div class="page-wrapper">
            <!-- Preloader -->
            <div class="preloader">
                <div class="spinner"> 
                    <img src="{{ asset('public/img/logo_phone.png') }}" alt="Tec"> 
                </div>
                <div class="loading-message">loading...</div>
            </div>

            <!-- Page Heading -->
            <header class="page-header --two-line">
                <x-WebsiteHeader :header="$headerData['header']" />
            </header>

            <!-- Main (Page Content) -->
            <main class="page-main">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="page-footer animate">
                <x-WebsiteFooter :footer="$footerData['footer']" />
            </footer>

            <!-- Offcanvas -->
            <div id="offcanvas" data-uk-offcanvas="mode: reveal; overlay: true">
                <div class="uk-offcanvas-bar uk-flex uk-flex-column uk-flex-between"><button class="uk-offcanvas-close" type="button" data-uk-close></button>
                    <div class="uk-margin-bottom"><a class="logo uk-margin-bottom" href="{{ route('welcome')}}"><img src="{{ asset('public/img/logo-white.png') }}" alt="image"></a>
                        <ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
                            <li class=""><a href="{{ route('welcome')}}"><span>Home</span></a></li>
                            <li><a href="{{ route('page.equipment')}}"><span>Equipments</span></a></li>
                            <li><a href="{{ route('solution')}}"><span>Our Solutions</span></a></li>
                            <li><a href="{{ route('about')}}"><span>About Us</span></a></li>
                            <li><a href="{{ route('contact')}}"><span>Contact</span></a></li>
                        </ul>
                    </div>
                    <div class="uk-margin"><a class="contacts-block" href="tel:"><span>Need Help? Call Us</span><strong></strong></a></div>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script>window.gtranslateSettings = {"default_language":"en","native_language_names":true,"languages":["en","ar","pt","ru"],"wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"right"}</script>
        <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <script src="{{ asset('public/js/libs.js') }}"></script>
        <script src="{{ asset('public/js/main.js') }}"></script>
        <!--  -->
        <div class="elfsight-app-e2e0a5b4-53b5-4c73-a11b-07ef7a8e51f0" data-elfsight-app-lazy style="display: none;"></div>

        <script>
            AOS.init({
                duration: 1000, // Define a duração da animação em milissegundos
                easing: 'ease-in-out', // Define o tipo de animação (suave)
                once: true, // Garante que a animação ocorra apenas uma vez
                mirror: false
            });

            window.addEventListener('load', function() {
                var preloader = document.querySelector('.preloader');
                var content = document.querySelector('.content');

                // Remove o preloader e mostra o conteúdo da página
                preloader.style.display = 'none';
                content.style.display = 'block';
            });

            $(document).ready(function() {
            // Manipulador de eventos para os links
                $('.s-about__btns a').click(function(e) {
                    e.preventDefault(); // Impede o comportamento padrão do link
                    var target = $(this).data('target'); // Obtém o valor do atributo data-target
                    $('.section-content-item').hide(); // Oculta todos os elementos
                    $(target).show(); // Exibe o elemento alvo correspondente
                });
                // Exibe o primeiro elemento ao carregar a página
                $('#content-about').show();
            });

        </script>

