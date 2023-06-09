<!DOCTYPE html>
<!--[if lte IE 8]>
<html class="ie ie8" lang="ru"><![endif]-->
<!--[if lte IE 9]>
<html class="ie ie9" lang="ru"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="ie9up" lang="de">
<!--<![endif]-->

<head>

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title') - {{ settings('app_name') }}</title>

    <!-- META TAGS -->
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

    <!-- DEFAULT JS SCRIPTS -->
    <!--[if lt IE 9]>
    <script src="/public/woocasino/js/html5-shiv.js" type="text/javascript"></script>
    <![endif]-->
</head>

<body style="background: url(/public/frontend/Default/img/background.gif)" class="en" ng-app="app"
    ng-controller="gameCtrl">
    {{-- <div class="init-loading">
        <img src="/public/frontend/Default/img/loading.gif" />
    </div> --}}

    <style>
        @-webkit-keyframes lights {
            0% {
                background-image: url("/public/woocasino/images/cobranded_board.png");
            }

            100% {
                background-image: url("/public/woocasino/images/cobranded_board_1.png");
            }
        }

        @-webkit-keyframes lightsMobile {
            0% {
                background-image: url("/public/woocasino/images/cobranded_board_mobile.png");
            }

            100% {
                background-image: url("/public/woocasino/images/cobranded_board_mobile_1.png");
            }
        }

        @-moz-keyframes lights {
            0% {
                background-image: url("/public/woocasino/images/cobranded_board.png");
            }

            100% {
                background-image: url("/public/woocasino/images/cobranded_board_1.png");
            }
        }

        @-moz-keyframes lightsMobile {
            0% {
                background-image: url("/public/woocasino/images/cobranded_board_mobile.png");
            }

            100% {
                background-image: url("/public/woocasino/images/cobranded_board_mobile_1.png");
            }
        }

        @keyframes lights {
            0% {
                background-image: url("/public/woocasino/images/cobranded_board.png");
            }

            100% {
                background-image: url("/public/woocasino/images/cobranded_board_1.png");
            }
        }

        @keyframes lightsMobile {
            0% {
                background-image: url("/public/woocasino/images/cobranded_board_mobile.png");
            }

            100% {
                background-image: url("/public/woocasino/images/cobranded_board_mobile_1.png");
            }
        }

        .games__hero__wrapper {
            background-image: url("/public/woocasino/images/spin-mobile.jpg");
            padding-bottom: 123vw;
            position: relative;
        }

        .games__hero__offer__wrapper .bonus-breakdown {
            font-size: .75em;
            max-width: 90%;
            margin: 5px auto;
        }

        .cobranded_board_mobile {
            animation-name: lightsMobile;
            animation-duration: 0.75s;
            animation-iteration-count: infinite;
            position: absolute;
            background-image: url("/public/woocasino/images/cobranded_board_mobile.png");
            background-size: 100%;
            background-repeat: no-repeat;
            right: 2vw;
            display: block;
            width: 70vw;
            height: 39vw;
            top: -13vw;
            text-align: center;
            padding-top: 2.5vw;
            left: 50%;
            transform: translate(-50%);
        }

        .cobranded_board {
            animation-name: lights;
            animation-duration: 0.75s;
            animation-iteration-count: infinite;
            position: absolute;
            background-image: url("/public/woocasino/images/cobranded_board.png");
            background-size: 100%;
            background-repeat: no-repeat;
            right: 2vw;
            display: none;
            width: 32vw;
            height: 25vw;
            top: 1vw;
            text-align: center;
            padding-top: 4vw;
        }

        .cobranded_board {
            display: none;
        }

        .games__hero__offer__wrapper h1 {
            font-size: 6vw;
        }

        .games__hero__offer__wrapper h2 {
            font-size: 11vw;
        }

        .cobranded_board img,
        .cobranded_board_mobile img {
            width: 65%;
        }

        .games__offer__text {
            top: 14vw;
            position: relative;
        }

        .es .games__hero__offer__wrapper h1,
        .es-ar .games__hero__offer__wrapper h1,
        .es-mx .games__hero__offer__wrapper h1 {
            font-size: 7vw;
            line-height: 9vw;
        }

        .pt-br .games__hero__offer__wrapper h1 {
            font-size: 5vw;
            line-height: 6vw;
        }

        .pt-br .games__hero__offer__wrapper h2 {
            font-size: 11vw;
            line-height: 14vw;
        }

        .es .games__hero__offer__wrapper h2,
        .es-ar .games__hero__offer__wrapper h2,
        .es-mx .games__hero__offer__wrapper h2 {
            font-size: 12vw;
            line-height: 14vw;
        }

        .es .button-hero,
        .pt-br .button-hero,
        .de .button-hero,
        .es-ar .button-hero,
        .es-mx .button-hero,
        .fr-ca .button-hero {
            margin-top: 3vw;
        }

        .fr-ca .button-hero {
            font-size: 5vw;
        }

        .de .games__hero__offer__wrapper h1 {
            font-size: 5.5vw;
        }

        .de .games__hero__offer__wrapper h2,
        .fr-ca .games__hero__offer__wrapper h2 {
            font-size: 10vw;
        }

        @media screen and (min-width: 760px) {
            .games__offer__text {
                top: 10vw;
                position: relative;
            }

            .games__hero__wrapper {
                padding-bottom: 75vw;
            }

            .en-ca .button-hero,
            .en-nz .button-hero,
            .fr-ca .button-hero,
            .button-hero {
                font-size: 3.2vw;
                padding: 25px 45px 30px 66px;
                margin-top: 1vw;
            }

            .fr-ca .button-hero {
                font-size: 2.5vw;
            }

            .es .games__hero__offer__wrapper h1,
            .pt-br .games__hero__offer__wrapper h1,
            .es-ar .games__hero__offer__wrapper h1,
            .es-mx .games__hero__offer__wrapper h1 {
                font-size: 5vw;
                line-height: 9vw;
            }

            .es .games__hero__offer__wrapper h2,
            .es-ar .games__hero__offer__wrapper h2,
            .es-mx .games__hero__offer__wrapper h2 {
                font-size: 10vw;
                line-height: 10vw;
            }

            .fr-ca .games__hero__offer__wrapper h1 {
                font-size: 2.5vw;
            }

            .fr-ca .games__hero__offer__wrapper h2 {
                font-size: 8vw;
            }

            .es .games__hero__offer__wrapper h1,
            .pt-br .games__hero__offer__wrapper h1,
            .es-ar .games__hero__offer__wrapper h1,
            .es-mx .games__hero__offer__wrapper h1 {
                font-size: 5vw;
                line-height: 7vw;
            }

            .pt-br .games__hero__offer__wrapper h2 {
                font-size: 9vw;
                line-height: 11vw;
            }

            .cobranded_board_mobile {
                width: 55vw;
                top: -9vw;
            }
        }

        @media screen and (min-width: 1020px) {
            .games__hero__offer__wrapper .bonus-breakdown {
                font-size: 1em;
                max-width: 45%;
                margin: 10px 0 0 0;
            }

            .games__hero__offer__wrapper h1 {
                font-size: 2.5vw;
            }

            .games__hero__offer__wrapper h2 {
                font-size: 5vw;
            }

            .games__hero__wrapper {
                background-image: url("/public/woocasino/images/spin-desktop.jpg");
                padding-bottom: 31vw;
            }

            .games__hero__offer__wrapper {
                text-align: left;
            }

            .games__offer__text {
                top: 0;
            }

            .cobranded_board {
                display: block;
            }

            .cobranded_board_mobile {
                display: none;
            }

            .games__hero__offer__wrapper h1 {
                line-height: 0.8;
            }

            .button-hero {
                margin-top: 2vw;
            }

            .es .games__hero__offer__wrapper h1,
            .es-ar .games__hero__offer__wrapper h1,
            .es-mx .games__hero__offer__wrapper h1 {
                font-size: 2.5vw;
                line-height: 3vw;
            }

            .pt-br .games__hero__offer__wrapper h1 {
                font-size: 3vw;
                line-height: 5vw;
            }

            .es .games__hero__offer__wrapper h2 {
                font-size: 5vw;
                line-height: 6vw;
            }

            .es-ar .games__hero__offer__wrapper h2,
            .es-mx .games__hero__offer__wrapper h2 {
                font-size: 4.8vw;
                line-height: 6vw;
            }

            .pt-br .games__hero__offer__wrapper h2,
            .fr-ca .games__hero__offer__wrapper h2 {
                font-size: 3.5vw;
                line-height: 6vw;
            }

            .es .button-hero,
            .pt-br .button-hero,
            .de .button-hero,
            .es-ar .button-hero,
            .es-mx .button-hero {
                font-size: 2.3vw;
                margin-top: 0;
            }

            .de .games__hero__offer__wrapper h2 {
                font-size: 5vw;
                line-height: 6vw;
            }

            .de .games__hero__offer__wrapper h1 {
                font-size: 2.5vw;
                line-height: 3vw;
            }
        }
    </style>
    <div class="overlay"></div>
    <div class="pop-container" style="display:none">

        <div class="pop-wrapper">
            <a class="close-pop">x</a>
            <div class="pop-content clear">
                <p style="font-size: 22px; font-weight: bold">@lang('app.cond_title1') </p>
                <br>
                <p style="font-weight: bold;"></p>@lang('app.cond_title2')<br>
                <p style="font-weight: bold;">@lang('app.cond_title3')</p><br>
                <ol style="list-style-type: decimal;margin-left: 15px;">
                    <li>@lang('app.cond_title4')
                    </li>
                    <li>@lang('app.cond_par1')
                    </li>
                    <li>@lang('app.cond_par2')
                    </li>
                    <li>@lang('app.cond_par3')
                    </li>
                    <li>@lang('app.cond_par4')
                    </li>
                    <li>@lang('app.cond_par5')
                    </li>
                    <li>@lang('app.cond_par6')
                    </li>
                    <li>@lang('app.cond_par7')
                    </li>
                    <li>@lang('app.cond_par8')
                    </li>
                    <li>@lang('app.cond_par9')
                    </li>
                    <li>@lang('app.cond_par10')
                    </li>
                    <li>@lang('app.cond_par11')
                    </li>
                    <li>@lang('app.cond_par12')
                    </li>
                </ol>
                <ul style="list-style-type: disc; margin-left: 25px;">
                    <li> @lang('app.cond_par13')
                    </li>
                    @lang('app.cond_par14')
                    </li>
                    <li>@lang('app.cond_par15')
                    </li>
                </ul>
                <ol style="list-style-type: decimal;margin-left: 15px;" start="14">
                    <li>@lang('app.cond_par16')
                    </li>
                    <li>@lang('app.cond_par17')
                    </li>
                    <li>@lang('app.cond_par18')
                    </li>
                    <li>@lang('app.cond_par19')
                    </li>
                    <li>@lang('app.cond_par20')
                    </li>
                    <li>@lang('app.cond_par21')
                    </li>
                    <li>@lang('app.cond_par22')
                    </li>
                    <li>@lang('app.cond_par23')
                    </li>
                    <li>@lang('app.cond_par24')
                    </li>
                    <li>@lang('app.cond_par25')
                    </li>
                    <li>@lang('app.cond_par26')
                    </li>
                </ol>
                <br>
                <p style="font-weight: bold;">@lang('app.cond_par27')</p>
            </div>
        </div>
    </div>
    <!-- END OF TERMS POP -->

    @include('frontend.Default.partials.navbar')

    <section class="section section_main"
        style="background: url(/public/frontend/Default/img/background.gif);padding-left:1%">
        @yield('content')

    </section>
    <!-- Footer -->
    <div class="footer">
        <div class="col-12 footer-menu__item">
            <div class="col-3 footer-menu__item-text">
                Privacy Policy
            </div>
            <div class="col-3 footer-menu__item-text">
                Responsible Gambling Policy
            </div>
            <div class="col-3 footer-menu__item-text">
                Promotions General Terms And Conditions
            </div>
            <div class="col-3 footer-menu__item-text">
                AML & KYC Policy
            </div>
        </div>
        <div class="col-12 footer-menu__item">
            <div class="col-4 footer-menu__item-text">
                About Us
            </div>
            <div class="col-4 footer-menu__item-text">
                Terms & Conditions
            </div>
            <div class="col-4 footer-menu__item-text">
                Contact Us
            </div>
        </div>
        <div class="about-support">
            test108.com&nbsp;is operated by Solar Storm Gaming N.V. (reg. number 158393 ), with address at Abraham de
            Veerstraat 9, Curaçao. The official number of the license is GLH-OCCHKTW0710042021 issued on 8th day of
            October 2022 and valid until 8th day of August 2023. Solar Storm Gaming N.V. is licensed by the Gaming
            Services Provider N.V. These Terms and Conditions in a part, which relates to your participation in the
            Games, shall be governed by the Laws of Curaçao. You acknowledge that, unless stated otherwise, the Games
            are organized in Curaçao and your participation in these Games takes place within the aforementioned
            territory. Any contractual relationships between you and Solar Storm Gaming N.V. shall be deemed to have
            been entered into and performed by the parties in Curaçao, at the registered address of Abraham de
            Veerstraat 9, Curaçao. The parties agree that any dispute, controversy or claim arising out of or in
            connection with these Terms and Conditions, or the breach, termination or invalidity thereof, shall be
            submitted to the exclusive jurisdiction of courts of Curaçao. APEXIA GROWTH LTD, a company registered at
            Georgiou Gennadiou 10, Agathangelos Court, Flat/Office 203, 3041 Limassol, Cyprus with registered company
            number HE430669 acts as payment processor.
        </div>
        <div class="col-1">
            <div class="games__footer__icons">
                <a target="_blank" href="#" style="display:inline-block;">
                    <img src="/public/woocasino/images/footer_icons_1.png" />
                </a>
                <a target="_blank" href="#" style="display:inline-block;">
                    <img src="/public/woocasino/images/footer_icons_2.png" />
                </a>
                <a target="_blank" href="#" style="display:inline-block;">
                    <img src="/public/woocasino/images/footer_icons_4.png" />
                </a>
                <a target="_blank" href="#" style="display:inline-block;">
                    <img src="/public/woocasino/images/en18logo.png" />
                </a>
                <a target="_blank" href="#" style="display:inline-block;">
                    <img src="/public/woocasino/images/gambleaware.png" />
                </a>
                <a target="_blank" href="#" style="display:inline-block;">
                    <img src="/public/woocasino/images/microgaming.png" />
                </a>
                <a target="_blank" href="#" style="display:inline-block;">
                    <img src="/public/woocasino/images/footer_icons_5.png" />
                </a>
                <a target="_blank" href="#" style="display:inline-block;">
                    <img src="/public/woocasino/images/footer_icons_6.png" />
                </a>
                <a target="_blank" href="#" style="display:inline-block;">
                    <img src="/public/woocasino/images/footer_icons_7.png" />
                </a>
                <a target="_blank" href="#" style="display:inline-block;">
                    <img src="/public/woocasino/images/footer_icons_8.png" />
                </a>
            </div>
            <div class="about-support">Gambling can be addictive. Play responsibly. Play for fun and stop when you
                realise this causes problems for you. Keep track of the money you spend on online gaming and if needed
                take action, get in touch with us should you have any concerns.</div>
            <div class="games__footer__btns">
                <div class="games__footer__btns__item">
                    <img src="/public/frontend/Default/img/footer/18plus.svg" />
                </div>
                <div class="games__footer__btns__item">
                    <img src="/public/frontend/Default/img/footer/gamecare.png" />
                </div>
                <div class="games__footer__btns__item">
                    <img src="/public/frontend/Default/img/footer/111.png" />
                </div>
                <div class="games__footer__btns__item">
                    <img src="/public/frontend/Default/img/footer/Gaming-Curacao-ClickToVerify.png" />
                </div>
            </div>
            <div class="games__footer__btns">
                <span>@2020 - 2023 SOLAR STORM GAMING N.V. All rights reserved.</span>
            </div>
        </div>
    </div>
    <!-- END Footer -- -->

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
    </section>

    @include('frontend.Default.partials.popups')

    <!-- Lock screen -->
    <div id="lock__screen"></div>
    <!-- Preconnect CSS -->
    <style>
        body.no-scroll {
            overflow: hidden;
        }

        .enable-form {
            opacity: 1 !important;
            z-index: 999 !important;
            transition: opacity .4s ease;
        }


        .frame__cont_log,
        .frame__cont_reg {
            transition: opacity .4s ease;
            z-index: -999;
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            padding-top: 50px;
            text-align: center;
            background: rgba(0, 0, 0, .75);
            background-repeat: repeat;
            opacity: 0;
        }

        .frame__inner_log,
        .frame__inner_reg {
            position: absolute;
            text-align: center;
            width: 100%;
            max-width: 680px;
            height: 100%;
            margin: 0 auto;
            left: 0;
            right: 0;
        }

        .reg-close {
            color: #773d4f;
            font-size: 47px;
            font-weight: 300;
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            top: 2px;
            z-index: 9999;
            cursor: pointer;
            right: 50px;
        }

        .log-close {
            color: #773d4f;
            font-size: 47px;
            font-weight: 300;
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            top: 3px;
            z-index: 9999;
            cursor: pointer;
            right: 176px;
        }

        .reg {
            width: 641px !important;
            height: 100% !important;
            margin: 0 auto;
        }

        .log {
            width: 408px !important;
            height: 100% !important;
            margin: 0 auto;
        }

        .close {
            color: #ffffff;
        }

        .sps-close {
            color: #156644;
        }

        .spc-close {
            color: #3f4a74;
        }

        .rfc-close {
            color: #773d4f;
        }

        .ccc-close {
            color: #7a334f;
        }
    </style>
    <!-- <script type="text/javascript" src="/public/woocasino/js/jquery-1.7.1.min.js"></script> -->
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
</body>

</html>
