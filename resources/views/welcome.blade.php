<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="navbar__logo" src="{{ asset('img/logo.png') }}">
            </a>
            <div class="navbar__icons d-flex flex-row align-items-center">
                <div class="navbar__icon"><i class="bi bi-search"></i></div>
                <div class="navbar__icon"><i class="bi bi-cart"></i></div>
                <div class="navbar__login">Zaloguj się</div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="menu d-flex flex-row justify-content-center">
            @foreach ($category as $cat)
            <div class="menu__category">
                <button class="menu__btn" data-dropdown="category{{$cat->id}}">{{$cat->category}}</button>
                @if ($cat->amount > 0)
                    <ul class="menu__list" id="category{{$cat->id}}">
                
                        @foreach ($subcategory as $sub)
                            @if ($sub->category_id == $cat->id)
                                <li>{{$sub->name}}</li>
                            @endif
                        @endforeach
                @endif
                    </ul>
                
                
                    <!-- <ul class="menu__list" id="kat1">
                        <li class="menu__item">
                            <a href="#" class="menu__link">Item 1</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Item 1</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Item 1</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Item 1</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Item 1</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Item 1</a>
                        </li>
                    </ul> -->
            </div>
            @endforeach
        </div>
    </div>

</body>
</html>