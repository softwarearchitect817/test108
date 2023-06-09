<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/png" href="/public/woocasino/images/favicon/spc.png">
    <link rel="icon" type="image/png" href="/public/woocasino/images/favicon/spc.png">
    <link rel="apple-touch-icon" href="/public/woocasino/images/favicon/spc-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/public/woocasino/images/favicon/spc-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/public/woocasino/images/favicon/spc-ipad2.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/public/woocasino/images/favicon/spc-ipad3.png">

    <meta name="msapplication-TileImage" content="/public/woocasino/mstile-144x144.png" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="HandheldFriendly" content="true" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="initial-scale=1,width=device-width,maximum-scale=2,minimum-scale=0.5,user-scalable=1" />


    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext"
        rel="stylesheet">

    <script src="/public/frontend/Default/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/public/woocasino/js/angular.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/public/woocasino/js/html5shiv.min.js"></script>
    <script src="/public/woocasino/js/respond.min.js"></script><![endif]-->

    <!-- DEFAULT CSS -->
    <link href="/public/woocasino/css/reset.css" rel="stylesheet" type="text/css" class="styles" />
    <!-- Flags -->
    <link rel="stylesheet" href="/public/woocasino//flag-icon-css/css/flag-icon.min.css">
    <!-- Perfect scrollbar css -->
    <link rel="stylesheet" type="text/css" href="/public/woocasino/css/perfect-scrollbar.css">
    <!-- zebra datepicker -->
    <link rel="stylesheet" type="text/css" href="/public/woocasino/css/zebra_datepicker.css">
    <!-- START OF ALL CUSTOM CSS + FONTS -->
    <link href="/public/woocasino/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/public/woocasino/css/regional.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/public/woocasino/css/oct7vfe.css">
    <link rel="stylesheet" href="/public/woocasino/css/appef20.css">


    <style type="text/css">
        @charset "UTF-8";

        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
    @php
        if (Auth::check() && auth()->user()->email == 'demo01@gmail.com') {
            \Auth::logout();
            echo '<script>
                location.reload()
            </script>';
        }
        if (Auth::check()) {
            $currency = auth()
                ->user()
                ->present()->shop
                ? auth()
                    ->user()
                    ->present()->shop->currency
                : '';
        } else {
            $currency = '';
        }
    @endphp

    <style>
        * {
            font-family: "omnes-pro",
                sans-serif,
                Helvetica,
                sans-serif !important;
            scrollbar-width: none !important;
        }

        body {
            margin: 0;
        }

        .open__game__header {
            background: rgb(32, 35, 48);
            width: 100%;
            min-height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.2%;
        }

        .open__game__header__title {}

        .open__game__header__title__name {
            color: rgb(255, 170, 0);
            font-weight: bold !important;
            user-select: none;
            font-size: 2rem !important;
            line-height: inherit !important;
            margin: 0px;
            line-height: 1.5 !important;
            letter-spacing: 0.00938em;
        }

        .open__game__header__title__category {
            user-select: none;
            margin-bottom: 0.5rem !important;
            font-size: 1.9rem !important;
            line-height: inherit !important;
            color: rgb(255, 255, 255) !important;
            margin-top: 1% !important;
            margin-bottom: 0 !important;
        }

        /* Logo */
        .open__game__header__logo {
            width: 40%;
            display: flex;
            justify-content: flex-end;
        }

        .open__game__header__logo img {
            width: 150px;
        }

        /* action */

        .open__game__header__action {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .open__game__fullscreen {
            background: transparent;
            border: none;
            cursor: pointer;
        }

        .open__game__back {
            background: transparent;
            border: none;
            cursor: pointer;
        }

        .open__game__fullscreen svg {
            width: 24px;
            height: 24px;
        }

        .open__game__back svg {
            width: 24px;
            height: 24px;
        }

        /* Main Container */
        .container {
            width: 100%;
            height: calc(100vh - 9rem);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2%;
        }

        .play-game {
            width: 80%;
            height: 100%;
            background: black;
        }

        .play-game-balance {
            margin: 0px;
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.5;
            letter-spacing: 0.00938em;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .play-game-actions {
            width: 100%;
            display: flex;
            height: 100%;
            flex-direction: column;
            justify-content: center;
        }

        .play-game-btns {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .play-game-login {
            font-size: 16px;
            width: auto;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            border: 1px solid transparent;
            text-align: center;
            text-shadow: rgba(0, 0, 0, 0.5) 0px 1px 1px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 4px 1px;
            color: rgb(255, 255, 255);
            cursor: pointer;
            background-image: url(/public/frontend/Default/img/header/btn_bg.png);
            background-size: 100% 100%;
            background-repeat: no-repeat;
            box-sizing: border-box;
            border-radius: 6px;
            transition: all 0.2s ease 0s;
            margin-left: 0.5rem !important;
            background-color: rgb(255, 170, 0) !important;
            width: 82px;
            height: 44px;
        }

        .play-game-demo {
            font-size: 16px;
            width: auto;
            margin: 0px;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            text-align: center;
            text-shadow: rgba(0, 0, 0, 0.5) 0px 1px 1px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 4px 1px;
            color: rgb(255, 255, 255);
            cursor: pointer;
            box-sizing: border-box;
            border-radius: 6px;
            transition: all 0.2s ease 0s;
            background-color: transparent !important;
            border: 2px solid rgb(255, 170, 0) !important;
            width: 112px;
            height: 44px
        }

        .play-game-button {
            font-size: 16px;
            width: auto;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            border: 1px solid transparent;
            text-align: center;
            text-shadow: rgba(0, 0, 0, 0.5) 0px 1px 1px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 4px 1px;
            color: rgb(255, 255, 255);
            cursor: pointer;
            background-image: url(/public/assets/img/btn_bg.png);
            background-size: 100% 100%;
            background-repeat: no-repeat;
            box-sizing: border-box;
            border-radius: 6px;
            transition: all 0.2s ease 0s;
            margin-left: 0.5rem !important;
            background-color: rgb(255, 170, 0) !important;
            width: 112px;
            height: 44px
        }

        .play-game-image {
            position: absolute;
            top: 30%;
            width: 100%;
        }

        #game-content {
            width: 100%;
            height: 100%;
            border: none;
            display: none
        }

        .open__game__header__mobile {
            display: none
        }

        .open__game__header__action__mobile {
            padding-right: 5%;
            padding-top: 2%;
            float: right
        }

        .open__game__header__title__mobile {
            text-align: center;
        }

        /* .play-game-actions__mobile {
            position: absolute;
            top: 70%;
            left: 20%;
            display: none
        } */

        #game-content__mobile {
            width: 100%;
            height: 100vh;
        }

        .container__mobile {
            display: none
        }

        /* Mobile */
        @media (max-width:767px) {
            .play-game-image {
                display: block
            }

            .container__mobile {
                display: block
            }

            .play-game-actions__mobile {
                display: block
            }

            .open__game__header {
                display: none
            }

            .container {
                display: none
            }

            .open__game__header__mobile {
                display: block
            }
        }
    </style>
</head>

<body style="background: url(/public/frontend/Default/img/background.gif)" class="en" ng-app="app"
    ng-controller="gameCtrl">
    <header class="open__game__header">
        <div class="open__game__header__title">
            <p class="open__game__header__title__name">{{ $game->title }}</p>
            <p class="open__game__header__title__category">BetSoft&nbsp;RTP: 96.21%</p>
        </div>
        <div class="open__game__header__logo">
            <img src="/public/frontend/Default/img/header/logo.png" />
        </div>
        <div class="open__game__header__action">
            @if (isset(auth()->user()->username))
                <div class="user__info" style="padding:2%;">
                    <span style="font-size:1.8rem">Balance</span>
                    &nbsp;
                    <img src="https://s2.coinmarketcap.com/static/cloud/img/fiat-flags/EUR.svg" />
                    <span class="user__balance">{{ auth()->user()->balance }}</span>
                    &nbsp;
                    <span style="font-size:1.8rem"> EUR</span>
                </div>
                &nbsp;
                &nbsp;
                <div class="user__info" style="padding:2%;">
                    <span style="font-size:1.8rem">Bonus</span>
                    &nbsp;
                    <img src="https://s2.coinmarketcap.com/static/cloud/img/fiat-flags/EUR.svg" />
                    <span class="user__balance">0</span>
                    &nbsp;
                    <span style="font-size:1.8rem"> EUR</span>
                    &nbsp;
                    &nbsp;
                    <button class="top-bar__sign-up button button-small ng-scope">DEPOSIT</button>
                </div>
            @endif
            <button class="open__game__fullscreen" onclick="openFullscreen()">
                <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="CropFreeIcon" fill='#fff'>
                    <path
                        d="M3 5v4h2V5h4V3H5c-1.1 0-2 .9-2 2zm2 10H3v4c0 1.1.9 2 2 2h4v-2H5v-4zm14 4h-4v2h4c1.1 0 2-.9 2-2v-4h-2v4zm0-16h-4v2h4v4h2V5c0-1.1-.9-2-2-2z">
                    </path>
                </svg>
            </button>
            <button class="open__game__back" onclick="goGamelist()">
                <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="CloseIcon" fill='#fff'>
                    <path
                        d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                    </path>
                </svg>
            </button>
        </div>
    </header>
    <section class="container">
        <div class="play-game">
            <iframe id="game-content"></iframe>
            <div class="play-game-actions">
                <div class="play-game-balance">
                    <span style="font-size: 1.8rem">Balace in</span>&nbsp;&nbsp;
                    <img src="/public/frontend/Default/img/EUR.svg" style="width:25px" />&nbsp;&nbsp;
                    <span style="font-size: 1.8rem">{{ auth()->user()->balance }}&nbsp;EUR</span>
                </div>
                <div class="play-game-btns">
                    @if (!isset(auth()->user()->username))
                        <button class="play-game-login" ng-click="openModal($event, '#login-modal')">LOGIN</button>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <button class="play-game-demo" onclick="playGame('fun','{{ $game->name }}','desktop')">FUN
                            PLAY</button>
                    @else
                        <button class="play-game-demo" onclick="playGame('fun','{{ $game->name }}','desktop')">FUN
                            PLAY</button>
                        <button class="play-game-button"
                            onclick="playGame('play','{{ $game->name }}','desktop')">PLAY
                            GAME</button>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <header class="open__game__header__mobile">
        <div class="open__game__header__action__mobile">
            <button class="open__game__back" onclick="goGamelist()">
                <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="CloseIcon"
                    fill='#fff'>
                    <path
                        d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                    </path>
                </svg>
            </button>
        </div>
        <br />
        <br />
        <div class="open__game__header__title__mobile">
            <p class="open__game__header__title__name">{{ $game->title }}</p>
            <p class="open__game__header__title__category">BetSoft</p>
        </div>
    </header>
    <section class="container__mobile">
        <div class="play-game__mobile">
            <iframe id="game-content__mobile"></iframe>
        </div>
        <div class="play-game-image">
            <div style="width:100%;display:flex;justify-content:center;align-items:center">
                <img src="/public/frontend/Default/ico/{{ $game->name }}.jpg" style="min-width: 400px" />
            </div>
            <br />
            <br />
            <div class="play-game-actions__mobile">
                <div class="play-game-balance">
                    <span style="font-size: 1.8rem">Balace in</span>&nbsp;&nbsp;
                    <img src="/public/frontend/Default/img/EUR.svg" style="width:25px" />&nbsp;&nbsp;
                    <span style="font-size: 1.8rem">{{ auth()->user()->balance }}&nbsp;EUR</span>
                </div>
                <div class="play-game-btns">
                    @if (!isset(auth()->user()->username))
                        <button class="play-game-login" ng-click="openModal($event, '#login-modal')">LOGIN</button>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <button class="play-game-demo" onclick="playGame('fun','{{ $game->name }}','mobile')">FUN
                            PLAY</button>
                    @else
                        <button class="play-game-demo" onclick="playGame('fun','{{ $game->name }}','mobile')">FUN
                            PLAY</button>
                        <button class="play-game-button"
                            onclick="playGame('play','{{ $game->name }}','mobile')">PLAY
                            GAME</button>
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{-- Mobile Menu --}}
    <div class="mobile__footer__menu" style="display: none">
        <ul class="mobile__footer__menu__list">
            <li>
                <a class="mobile__footer__menu__link" scroll-up="">
                    <img src="/public/frontend/Default/img/navbar/69ac823a3e3f3da13f38ad599111f718.svg" />
                    <br />
                    <span class="header-menu__text ng-binding">@lang('app.home')</span>
                </a>
            </li>
            <li>
                <a class="mobile__footer__menu__link" scroll-up="">
                    <img src="/public/frontend/Default/img/navbar/89de24462cf869cc48c79973304ac121.svg" />
                    <br />
                    <span class="header-menu__text ng-binding">@lang('app.sport')</span>
                </a>
            </li>
            @if (!isset(auth()->user()->username))
                <li>
                    <a class="mobile__footer__menu__link" scroll-up="">
                        <img src="/public/frontend/Default/img/navbar/90d9bca949db052d573621ea6028161c.svg" />
                        <br />
                        <span class="header-menu__text ng-binding">@lang('app.login')</span>
                    </a>
                </li>
            @else
                <li>
                    <a class="mobile__footer__menu__link" scroll-up="">
                        <img src="/public/frontend/Default/img/navbar/d9d8d8a25e4e951dbef8f3ba5dededfa.svg" />
                        <br />
                        <span class="header-menu__text ng-binding">Deposit</span>
                    </a>
                </li>
            @endif
            <li>
                <a class="mobile__footer__menu__link" style="color: rgb(255, 170, 0) !important" scroll-up="">
                    <img src="/public/frontend/Default/img/navbar/7da13915650dd8a73d3f2e6a8965c7c4.svg" />
                    <br />
                    <span class="header-menu__text ng-binding">@lang('app.game')</span>
                </a>
            </li>
            <li>
                <a class="mobile__footer__menu__link" scroll-up="">
                    <img src="/public/frontend/Default/img/navbar/c10916867817cc453518a03f48bfe219.svg" />
                    <br />
                    <span class="header-menu__text ng-binding">@lang('app.poker')</span>
                </a>
            </li>
        </ul>
    </div>
    {{-- End Mobile Menu --}}
    @include('frontend.Default.partials.popups')

</body>


<script type="text/javascript" src="/public/woocasino/js/jquery.corsproxy.1.0.0.js"></script>
<script type="text/javascript" src="/public/woocasino/js/perfect-scrollbar.jquery.js"></script>
<script type="text/javascript" src="/public/woocasino/js/zebra_datepicker.min.js"></script>

<!-- Set CSRF token to each interaction -->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '<?php csrf_token(); ?>',
        }
    });
</script>
<script type="text/javascript" src="/public/woocasino/js/app.js"></script>
<script type="text/javascript" src="/public/woocasino/js/angular-lazy-img.min.js"></script>
<script type="text/javascript" src="/public/woocasino/js/gameController.js"></script>
<script type="text/javascript" src="/public/woocasino/js/sweetalert.min.js"></script>

<script>
    //Initialise lp config object
    var config = new LPConfig();
    //First parameter is the hero offer position, you can type "left", "right" or "center". the two colours are the H1 and H2 offer elements.
    config.heroOptions('left', ["#fff", "#fff"]);
    //Category to show in the Featured tab by default
    config.gameOptions('top', true);
</script>
<script>
    function playGame(para, game, device) {
        document.getElementsByClassName('play-game-actions')[0].style.display = 'none';
        $('.play-game-image').css('display', 'none');
        $('.play-game-actions').css('display', 'none');
        $('.play-game-actions__mobile').css('display', 'none');
        $('.open__game__header__mobile').css('display', 'none');
        if (para == "fun") {
            if (device == "mobile") {
                document.getElementById('game-content__mobile').src = "/game/" + game + "/prego?api_exit=/";
                $('.mobile__footer__menu').css('z-index', '-99');
            } else {
                $('#game-content').css('display', 'block');
                document.getElementById('game-content').src = "/game/" + game + "/prego?api_exit=/";
            }
        } else {
            if (device == "mobile") {
                document.getElementById('game-content__mobile').src = "/game/" + game + "?api_exit=/";
                $('.mobile__footer__menu').css('z-index', '-99');
            } else {
                $('#game-content').css('display', 'block');
                document.getElementById('game-content').src = "/game/" + game + "?api_exit=/";
            }
        }
    }

    function openFullscreen() {
        var elem = document.getElementsByClassName('play-game')[0];
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.webkitRequestFullscreen) {
            /* Safari */
            elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) {
            /* IE11 */
            elem.msRequestFullscreen();
        }
    }

    function goGamelist() {
        location.href = "/categories/all";
    }
</script>

</html>
