<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img class="navbar__logo" src="{{ asset('img/logo.png') }}">
            </a>
            <div class="navbar__icons d-flex flex-row align-items-center">
                <div class="navbar__icon"><i class="bi bi-search"></i></div>
                <div class="navbar__icon"><i class="bi bi-cart"></i></div>
                <div class="navbar__login">Zaloguj się</div>
            </div>
        </div>
    </nav>

   {{ $slot }}

    <footer>
        <div class="container-fluid d-flex flex-row justify-content-around pt-5 pb-3">
            <div class="footer__content d-flex flex-column">
                <h5 class="footer__header">Informacje</h5>
            <a href="" class="footer__link">O firmie</a>
            <a href="" class="footer__link">Wysyłka</a>
            <a href="" class="footer__link">Polityka Prywatności</a>
            <a href="" class="footer__link">Regulamin sklepu</a>
        </div>
        <div class="footer__content d-flex flex-column">
            <h5 class="footer__header">
                Biuro Obsługi Klienta
            </h5>
            <a href="" class="footer__link">Kontakt z nami</a>
            <a href="" class="footer__link">Zwroty</a>
            <a href="" class="footer__link">Mapa strony</a>
        </div>
        <div class="footer__content d-flex flex-column">
            <h5 class="footer__header">
                Dodatki
            </h5>
            <a href="" class="footer__link">Producenci</a>
            <a href="" class="footer__link">Zwroty</a>
            <a href="" class="footer__link">Mapa strony</a>
        </div>
        <div class="footer__content d-flex flex-column">
            <h5 class="footer__header">
                Moje konto
            </h5>
            <a href="" class="footer__link">Moje konto</a>
            <a href="" class="footer__link">Historia zamówień</a>
            <a href="" class="footer__link">Lista życzeń</a>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>