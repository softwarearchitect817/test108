@extends('frontend.Default.layouts.app')

@section('page-title', $title)
@section('body', $body)
@section('keywords', $keywords)
@section('description', $description)

@section('content')
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
    <!-- BLOCK WITH GAMES -->
    <main class="carcass__body">
        <div class="main-content">
            <div class="contain">
                <!-- end ngIf: ['home'].includes(state.current.page_name) -->
                <div class="main-content__first-screen">
                    <div class="main-content__slider ng-isolate-scope">
                        <h6>You've viewed 30 of 6953 games</h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                aria-valuemax="100" style="width:2%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="providers ng-isolate-scope">
                <div class="providers__panel">
                    <div
                        style="overflow: auto; display:flex; justify-content:center;align-items:center;position: relative;">
                        <button class="providers__panel__tab-arrow providers__panel__tab-arrow-left">
                            <svg focusable="false" fill='#fff' aria-hidden="true" viewBox="0 0 24 24"
                                data-testid="KeyboardArrowLeftIcon">
                                <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"></path>
                            </svg>
                        </button>
                        <div class="providers__panel__main">
                            <div class="providers__panel__tab">
                                <button class="provider__btn provider__btn-active">
                                    <img class="fa-mg"
                                        src="/public/frontend/Default/img/provider/ce3442857abea000b53aeb933058b183.svg" />
                                    <span>Lobby</span>
                                </button>
                                <button class="provider__btn">
                                    <img class="fa-mg"
                                        src="/public/frontend/Default/img/provider/a05ea39da5b2e9a94eda052b077165b6.svg" />
                                    <span>Live Casino</span>
                                </button>
                                <button class="provider__btn">
                                    <img class="fa-mg"
                                        src="/public/frontend/Default/img/provider/1224542224dcf2249a53f0b623216f6d.svg" />
                                    <span>Slot Games</span>
                                </button>
                                <button class="provider__btn">
                                    <img class="fa-mg"
                                        src="/public/frontend/Default/img/provider/67123e64c2d8697d4833a833861dfd4e.svg" />
                                    <span>Table Games</span>
                                </button>
                                <button class="provider__btn">
                                    <img class="fa-mg"
                                        src="/public/frontend/Default/img/provider/0ff63b687a07e9c3f7a8af4f1eb1538d.svg" />
                                    <span>TV Games</span>
                                </button>
                                <button class="provider__btn">
                                    <img class="fa-mg"
                                        src="/public/frontend/Default/img/provider/05e1b721f49c6f3d582c0c4c79a5d628.svg" />
                                    <span>Virtual Games</span>
                                </button>
                            </div>
                        </div>
                        <button class="providers__panel__tab-arrow providers__panel__tab-arrow-right">
                            <svg fill='#fff' focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                data-testid="KeyboardArrowRightIcon">
                                <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="providers__panel__category">
                        @php
                            $providers = ['All', 'Vivo', 'Evolution', 'PragmaticPlayLive', 'AuthenticGaming', 'BoomingGames', 'AmaticDirect', 'PlaysonDirect', 'Microgaming', 'PragmaticPlay', 'PlaynGo', 'EGTInteractive', 'Spadegaming', 'Spribe', 'Live168', 'Tvgames', 'BetSoft', 'Spinomenal', 'BGaming', 'WeAreCasino', 'JetGames', 'Kalamba', 'SmartSoft', 'NetentOSS', 'Nice', 'PlayStar', 'Funta', 'Sagaming', 'Thunderkick', 'Booongo', 'BetSolutions', 'BeeFee', 'Apollo', 'NoLimitCity', 'PariPlay', 'PlayTech', 'Platipus', 'PushGaming', 'Spigo', 'TomHorn', 'WorldMatch', 'Yggdrasil', 'Leander', 'Kiron', 'ISoftBet', 'Igrosoft', 'Hacksaw', 'Habanero', 'Genii', 'GameArt', 'Evoplay', 'Red', 'Relax', 'Mascot', 'BetGames', 'EvoPlay', 'BeterLive', 'Fugaso', 'Wazdan', 'Ezugi', 'Push'];
                        @endphp
                        <select class="provider__select form-control-sm">
                            @for ($i = 0; $i < count($providers); $i++)
                                <option>{{ $providers[$i] }}</option>
                            @endfor
                        </select>
                        &nbsp;
                        &nbsp;
                        <div class="provider__search">
                            <input type="text" name="provider-search" class="provider__search-input"
                                placeholder="Search Game" />
                            <div class="provider__search-icon">
                                <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="SearchIcon">
                                    <path
                                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- uiView: -->
        <div class="main-game-content ng-scope">
            <!-- uiView: -->
            <div class="contain ng-scope">
                <section class="games-list ng-isolate-scope">
                    <div class="games-list__wrap ng-scope">
                        @if ($games && count($games))
                            @foreach ($games as $key => $game)
                                <div class="game-item ng-scope">
                                    <div class="game-item game-item--overflow ng-scope">
                                        <div class="game-item__block">
                                            <img class="game-item__img"
                                                src="{{ $game->name ? '/public/frontend/Default/ico/' . $game->name . '.jpg' : '' }}"
                                                casino-lazy-src="{{ $game->name ? '/public/frontend/Default/ico/' . $game->name . '.jpg' : '' }}"
                                                alt="{{ $game->title }}" loading="true" style="opacity: 1;">

                                            <!-- ngIf: game | gameJackpotByCurrency : $root.data.user.currency : 'EUR' -->
                                        </div>
                                        <div class="game-item__overlay ng-scope">
                                            <div class="game-item__actions">
                                                <p class="game-item__panel-provider ng-binding">
                                                    {{ isset($cat1->title) ? $cat1->title : lcfirst($category1) }}</p>
                                                <button class="open__game-btn ng-scope ng-binding"
                                                    onclick="openGame('{{ $game->id }}')">Open Game</button>
                                                <p class="game-item__panel-title ng-binding">{{ $game->title }}</p>
                                                {{-- @if (isset(auth()->user()->username))
                                                    <a href="{{ route('frontend.game.go', $game->name) }}?api_exit=/"
                                                        class="button button-primary ng-scope ng-binding">@lang('app.play_now')</a>
                                                @else
                                                    <!-- <a href="{{ route('frontend.game.go', $game->name) }}/prego?api_exit=/" class="button button-primary ng-scope ng-binding">Demo</a> -->
                                                    <a href="javascript:;" class="button button-primary ng-scope ng-binding"
                                                        ng-click="openModal($event, '#login-modal')">@lang('app.login')</a>
                                                @endif --}}
                                                <!-- <button class="button button-primary ng-scope ng-binding">@lang('play_now')</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </section>
            </div>
        </div>
        <div class="mobile-menu-content" style="display: none">
            <div class="mobile-menu__item ng-scope">
                <a class="mobile-menu__link mobile-menu__link--games" scroll-up="">
                    <img src="/public/frontend/Default/img/navbar/69ac823a3e3f3da13f38ad599111f718.svg" />
                    <span>@lang('app.home')</span> </a>
            </div>
            <div class="mobile-menu__item ng-scope">
                <a class="mobile-menu__link mobile-menu__link--games" scroll-up="">
                    <img src="/public/frontend/Default/img/navbar/89de24462cf869cc48c79973304ac121.svg" />
                    <span>@lang('app.sport')</span> </a>
            </div>
            <div class="mobile-menu__item ng-scope">
                <a class="mobile-menu__link mobile-menu__link--games" scroll-up="">
                    <img src="/public/frontend/Default/img/navbar/bd0f47fe765c8898e001138c8c13ba0b.svg" />
                    <span>@lang('app.live')</span> </a>
            </div>
            <div class="mobile-menu__item ng-scope active">
                <a class="mobile-menu__link mobile-menu__link--games" scroll-up="">
                    <img src="/public/frontend/Default/img/navbar/7da13915650dd8a73d3f2e6a8965c7c4.svg" />
                    <span>@lang('app.games')</span> </a>
            </div>
            <div class="mobile-menu__item ng-scope">
                <a class="mobile-menu__link mobile-menu__link--games" scroll-up="">
                    <img src="/public/frontend/Default/img/navbar/c10916867817cc453518a03f48bfe219.svg" />
                    <span>@lang('app.poker')</span> </a>
            </div>
            <div class="mobile-menu__item ng-scope">
                <a class="mobile-menu__link mobile-menu__link--games" scroll-up="">
                    <img src="/public/frontend/Default/img/navbar/ab5629123cee78b4e642ba6c734f3599.svg" />
                    <span>@lang('app.payment')</span> </a>
            </div>
            <div class="mobile-menu__item ng-scope">
                <a class="mobile-menu__link mobile-menu__link--games" scroll-up="">
                    <img src="/public/frontend/Default/img/navbar/edcf5da3ba7eaf96e5c81dedca79d33b.svg" />
                    <span>@lang('app.support')</span> </a>
            </div>
            <div class="mobile-menu__item ng-scope">
                <a class="mobile-menu__link mobile-menu__link--games" scroll-up="">
                    <img src="/public/frontend/Default/img/navbar/660d4671557687603e54c75d1a8f3309.svg" />
                    <span>@lang('app.vip-club')</span> </a>
            </div>
            <div class="mobile-menu__item ng-scope">
                <a class="mobile-menu__link mobile-menu__link--games" scroll-up="">
                    <img src="/public/frontend/Default/img/navbar/78e71cfac0d4b6b1b399d01cadc87abb.svg" />
                    <span>@lang('app.tournament')</span> </a>
            </div>
            <div class="mobile-menu__item ng-scope">
                <a class="mobile-menu__link mobile-menu__link--games" scroll-up="">
                    <img src="/public/frontend/Default/img/navbar/bd192847f70c923b02c98de6b042dd48.svg" />
                    <span>@lang('app.promotion')</span> </a>
            </div>
        </div>
    </main>
    <script>
        var timerHdle = null;

        function call_timer() {
            return setInterval(() => {
                $('.carousel-inner').each(function() {
                    if ($(this).find('.item.active').index() < 4) {
                        $(this).find('.item.active').removeClass('active').next().addClass('active');
                    } else {
                        $(this).find('.item.active').removeClass('active');
                        $(this).find('.item').eq(0).addClass('active');
                    }
                    if ($(this).find('.main-slider__promo.active').index() < 4) {
                        $(this).find('.main-slider__promo.active').removeClass('active').next().addClass(
                            'active');
                    } else {
                        $(this).find('.main-slider__promo.active').removeClass('active');
                        $(this).find('.main-slider__promo').eq(0).addClass('active');
                    }
                })
                $('.carousel-indicators').each(function() {
                    if ($(this).find('li.active').index() < 4) {
                        $(this).find('li.active').removeClass('active').next().addClass('active');
                    } else {
                        $(this).find('li.active').removeClass('active');
                        $(this).find('li').eq(0).addClass('active');
                    }
                })
            }, 5000);
        }
        timerHdle = call_timer()
        $('.carousel-indicators').find('li').click(function() {
            clearInterval(timerHdle)
            var index = $(this).index()
            $(this).parent().find('.active').removeClass('active')
            $(this).parent().find('li').eq(index).addClass('active');

            $(this).parent().parent().find('.carousel-inner .item.active').removeClass('active')
            $(this).parent().parent().find('.carousel-inner .item').eq(index).addClass('active')

            $(this).parent().parent().find('.carousel-inner .main-slider__promo.active').removeClass('active')
            $(this).parent().parent().find('.carousel-inner .main-slider__promo').eq(index).addClass('active')
            timerHdle = call_timer()
        })
        $('.providers__toggler').click(function() {
            $('.providers__dropdown').toggleClass('ng-hide');
        })
        // 5.31
        $('.providers__panel__tab-arrow').click(function() {
            var pos = $('.providers__panel__main').scrollLeft();
            if (pos > 0) {
                $('.providers__panel__tab-arrow-left').css('display', 'none');
                $('.providers__panel__tab-arrow-right').css('display', 'block');
                $('.providers__panel__main').scrollLeft(-600);
            } else if (pos == 0) {
                $('.providers__panel__tab-arrow-right').css('display', 'none');
                $('.providers__panel__tab-arrow-left').css('display', 'block');
                $('.providers__panel__main').scrollLeft(600);
            }
        })

        $('.mobile__menu-icon').click(function() {
            if ($('.mobile-menu-content').css('display') == 'flex') {
                $('.main-content').css('display', 'block');
                $('.main-game-content').css('display', 'block');
                $('.mobile-menu-content').css('display', 'none');
            } else {
                $('.main-content').css('display', 'none');
                $('.main-game-content').css('display', 'none');
                $('.mobile-menu-content').css('display', 'flex');
            }
        })

        function openGame(gameId) {
            location.href = "/open-game/" + gameId + "";
        }
    </script>
@stop

@section('scripts')
@stop
