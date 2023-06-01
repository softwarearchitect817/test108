<?php if(isset($_GET['merchant_id'])):?>

<div class="modal" id="restore-password-success" style="display: block;">
    <header class="modal__header">
        <div class="span modal__title"> @lang('app.pay_ok_title')</div>
        <span ng-click="closeModal($event)" class="modal__icon icon icon_cancel js-close-popup"></span>
    </header>
    <div class="modal__content">
        <div id="restore-password-success-text" class="modal-text">@lang('app.pay_ok_desk')</div>
    </div>
    <div class="popup__footer">
        <input type="submit" ng-click="openModal($event, '#my-account')" value="OK <?php echo $_GET['merchant_id']; ?>"
            class="popup__button button" />
    </div>
</div>

<script>
    history.pushState('', '', '/');
</script>
<?php endif;?>

<!-- MENU MOBILE -->
@include('frontend.partials.messages')
<!-- Games -->
<style>
    /* Marquee  */
    .marquee {
        height: 48px;
        overflow: hidden;
        position: relative;
        background: #333;
        color: #333;
        border: 1px solid #4a4a4a;


    }

    .image {
        /* height: 50px; */
        width: overflow: hidden;
        position: absolute;
        background: #;
        background: -moz-linear-gradient(97deg, #e6c85d 0%, #c39232 100%);
        background: -webkit-gradient(linear, 97deg, color-stop(0%, #e6c85d), color-stop(100%, #c39232));
        background: -webkit-linear-gradient(97deg, #e6c85d 0%, #c39232 100%);
        background: -o-linear-gradient(97deg, #e6c85d 0%, #c39232 100%);
        background: -ms-linear-gradient(97deg, #e6c85d 0%, #c39232%);
        background: linear-gradient(97deg, #e6c85d 0%, #c39232 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#001c10', endColorstr='#00673c', GradientType=0);
        z-index: 9;
        font-size: 26px;
        padding: 7px;
        text-transform: uppercase;
    }

    .marquee p:nth-child {
        color: red;
        transform: translateX(-50%);
        position: absolute;
        width: 100%;
        height: 100%;
        margin: 0;
        line-height: 50px;
        text-align: center;

        animation: scroll-left 25s linear infinite;
    }

    .marquee p {
        position: absolute;
        width: 100%;
        height: 100%;
        margin: 0;
        line-height: 50px;
        text-align: center;
        color: #999999;
        font-family: helvetica;

        animation: scroll-left 20s linear infinite;
    }

    @keyframes scroll-left {
        0% {
            transform: translateX(55%);
        }

        100% {
            transform: translateX(-55%);
        }
    }
</style>
<section id="woocasino" class="carcass">
    @include('frontend.Default.partials.header_logged')

    <div class="top-bar">
        <div class="mobile__menu-icon">
            <svg class="mobile__menu-icon-svg" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                data-testid="DehazeIcon" fill='#D8D8D8'>
                <path d="M2 15.5v2h20v-2H2zm0-5v2h20v-2H2zm0-5v2h20v-2H2z"></path>
            </svg>
        </div>
        <!-- jackpot -->
        <div class="top-bar__logo-container">
            <img class="top-bar__logo" src="/frontend/Default/img/header/logo.png" />
        </div>
        <!-- jackpot -->

        <div class="top-bar__content">
            @if (!isset(auth()->user()->username))
                <div class="top-bar__anon ng-scope" ng-if="!$root.data.user.email">
                    <button class="top-bar__sign-in button button-secondary button-small ng-scope"
                        ng-click="openModal($event, '#login-modal')">@lang('app.log_in')</button>
                    <button class="top-bar__sign-up button button-small ng-scope"
                        {{-- ng-click="openModal($event, '#registration-confirm')" --}}>@lang('app.register')</button>
                </div>
            @else
                <button class="notification__btn">
                    <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="NotificationsNoneIcon"
                        fill='#fff'>
                        <path
                            d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z">
                        </path>
                    </svg>
                </button>
                &nbsp;
                <div class="user__info">
                    <span class="user__balance">{{ auth()->user()->balance }}</span>
                    &nbsp;
                    <span> EUR</span>
                    &nbsp;
                    &nbsp;
                    <img src="https://s2.coinmarketcap.com/static/cloud/img/fiat-flags/EUR.svg" />
                    &nbsp;
                    <button class="top-bar__sign-up button button-small ng-scope">DEPOSIT</button>
                </div>
                <a class="user__avatar" onclick="" href="{{ route('frontend.auth.logout') }}">
                    <img src="/frontend/Default/img/default.ico" />
                </a>
                {{-- <link rel="stylesheet" href="/woocasino/css/payment.css">
                <div class="header-auth__anon-btn-wrp">
                    <a class="modal-btn button button-primary ng-scope"
                        ng-click="openModal($event, '#my-account')">{{ trans('app.my_profile') }}</a>
                    <a href="{{ route('frontend.auth.logout') }}"
                        class="modal-btn button button-secondary ng-scope">@lang('app.logout')</a>
                </div> --}}
            @endif
            @php
                $lang = [
                    'en' => 'English',
                    'it' => 'Italiano',
                    'ka' => 'Georgia',
                ];
                if (isset($_COOKIE['language'])) {
                    $laut = htmlspecialchars($_COOKIE['language']);
                } else {
                    $laut = 'en';
                }
            @endphp
            <div class="language-select top-bar__locale locale-selector--small locale-selector ng-isolate-scope"
                dropdown="">
                <button class="locale-selector__selector">
                    <img class="locale-selector__img" alt="{{ $lang[$laut] }}"
                        src="https://cdn2.softswiss.net/flags/square/{{ $laut }}.svg">
                    <span class="locale-selector__name">{{ strtoupper($laut) }}</span>
                </button>
                <ul role="menu" class="locale-selector__dropdown">
                    @foreach ($lang as $k => $v)
                        <li class="locale-selector__item" style="margin: 4px 6px;">
                            <i data-lang-code="{{ $k }}" role="button">
                                <img class="locale-selector__img" alt="{{ $v }}"
                                    src="https://cdn2.softswiss.net/flags/square/{{ $k }}.svg"> <span
                                    class="locale-selector__dropdown-name ng-binding">{{ $v }}</span>
                            </i>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="mobile-menu ng-scope">
        <div class="mobile-menu__wrap ng-scope">
            <div class="header-auth ng-isolate-scope">
                <div class="header-auth__anon ng-scope">
                    <div class="header-auth__anon-status">
                        <img class="header-auth__anon-img" src="/woocasino/resources/images/status/anon.svg"
                            alt="">
                    </div>
                    @if (!Auth::check())
                        <div class="header-auth__anon-btn-wrp">
                            <button class="button button-primary header-auth__reg-btn ng-scope"
                                ng-click="openModal($event, '#registration-confirm')">@lang('app.register')</button>
                            <button class="button button-secondary header-auth__login-btn ng-scope"
                                ng-click="openModal($event, '#login-modal')">@lang('app.log_in')</button>
                        </div>
                    @else
                        <div class="statuses-panel">
                            <div class="statuses-panel__wrp">
                                <a class="statuses-panel__wrp-img ng-scope">
                                    <img class="statuses-panel__img ng-scope" alt="statuses"
                                        src="/woocasino/resources/images/status/w1.svg">
                                </a>
                                <div class="balance-info ng-isolate-scope" type="balance-selector">

                                    <p class="balance-info__elem ng-scope">
                                    <div> <span style=" font-size:26px;color:#ffbb39;"
                                            class="info-value balanceValue">{{ number_format(auth()->user()->balance, 2, '.', '') }}
                                            {{ isset($currency) ? $currency : 'EUR' }}</span></div>
                                    </p>
                                </div>
                            </div>
                            <div class="statuses-panel__wrp-status">
                                <button class="statuses-panel__btn button button-primary button-pay"
                                    ng-click="openModal($event, '#my-account')">@lang('app.depositb')</button>

                                <div class="ng-hide">
                                    <p class="statuses-panel__name-status ng-binding">W1</p>
                                    <div class="statuses-panel__points ng-scope">
                                        <div class="status-line">
                                            <div class="status-line__progress">
                                                <div class="status-line__progress-full"style="width: 0%;"></div>
                                            </div>
                                            <p class="status-line__text ng-binding">0/25 (0%)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="mobile-menu__nav">
                <nav class="mobile-menu__nav-menu header-menu ng-scope ng-isolate-scope">
                    <ul class="header-menu__list">
                        <li class="header-menu__item">
                            <!-- ngIf: $root.data.user.email -->
                        </li>
                        <li class="header-menu__item ng-scope">
                            <a class="header-menu__link header-menu__link--games"
                                href="{{ route('frontend.game.list.category', 'all') }}">
                                <i class="header-menu__icon icon-woo-menu-default icon-woo-all"></i>
                                <span class="header-menu__text ng-binding">@lang('app.all')</span>
                            </a>
                        </li>
                        <li class="header-menu__item ng-scope">
                            <a class="header-menu__link header-menu__link--games"
                                href="{{ route('frontend.game.list.category', 'hot') }}">
                                <i class="header-menu__icon icon-woo-menu-default icon-woo-poker"></i>
                                <span class="header-menu__text ng-binding">@lang('app.hot_game')</span>
                            </a>
                        </li>
                        <li class="header-menu__item ng-scope">
                            <a class="header-menu__link header-menu__link--games"
                                href="{{ route('frontend.game.list.category', 'new') }}">
                                <i class="header-menu__icon icon-woo-menu-default icon-woo-new-games"></i>
                                <span class="header-menu__text ng-binding">@lang('app.new')</span>
                            </a>
                        </li>
                        <li class="header-menu__item ng-scope">
                            <a class="header-menu__link header-menu__link--games"
                                href="{{ route('frontend.game.list.category', 'slots') }}"> <i
                                    class="header-menu__icon icon-woo-menu-default icon-woo-video-slots"></i> <span
                                    class="header-menu__text ng-binding">@lang('app.slots')</span> </a>
                        </li>
                        <li class="header-menu__item ng-scope">
                            <a class="header-menu__link header-menu__link--games"
                                href="{{ route('frontend.game.list.category', 'jackpot') }}"> <i
                                    class="header-menu__icon icon-woo-menu-default  icon-woo-blackjack"></i> <span
                                    class="header-menu__text ng-binding">@lang('app.jackpots_menu')</span> </a>
                        </li>
                        <li class="header-menu__item ng-scope">
                            <a class="header-menu__link header-menu__link--games"
                                href="{{ route('frontend.game.list.category', 'roulette') }}"> <i
                                    class="header-menu__icon icon-woo-menu-default icon-woo-roulette"></i> <span
                                    class="header-menu__text ng-binding">@lang('app.roulette_meu')</span> </a>
                        </li>
                    </ul>
                </nav>
                @php
                    $lang = [
                        'en' => 'ENG',
                        'de' => 'DEU',
                        'it' => 'ITA',
                        'fr' => 'FRA',
                        'ka' => 'GEO',
                        'es' => 'ESP',
                    ];
                    if (isset($_COOKIE['language'])) {
                        $laut = htmlspecialchars($_COOKIE['language']);
                    } else {
                        $laut = 'de';
                    }
                @endphp
                <div class="mobile-menu__nav-btn">
                    <div class="language-select mobile-menu__locale locale-selector ng-isolate-scope" dropdown="">
                        <button class="locale-selector__selector" aria-haspopup="true" aria-expanded="false"
                            data-toggle="dropdown">
                            <img class="locale-selector__img"
                                src="https://cdn.softswiss.net//flags/square/{{ $laut }}.svg">
                            <span class="locale-selector__name ng-binding">{{ $lang[$laut] }}</span>
                        </button>
                        <ul role="menu" class="locale-selector__dropdown">
                            @foreach ($lang as $k => $v)
                                <li class="locale-selector__item ng-scope">
                                    <i data-lang-code="{{ $k }}" role="button">
                                        <img class="locale-selector__img" alt="{{ $v }}"
                                            src="https://cdn.softswiss.net//flags/square/{{ $k }}.svg">
                                        <span
                                            class="locale-selector__dropdown-name ng-binding">{{ $v }}</span>
                                    </i>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.locale-selector__selector').click(function() {
            $(this).parent().toggleClass('open');
        })
        $('.providers-mob__btn').click(function() {
            $(this).parent().toggleClass('open')
        })
        $(document).on('change', '.search', function() {
            var query = $(this).val().toLowerCase();
            doSearch(query);
        });

        function OnSearch(input) {
            var query = input.value.toLowerCase();
            doSearch(query);
        }

        $(document).on('click', '#woocasino game-item__actions>a', function() {
            $('#login-modal').show()
        })

        function doSearch(query) {
            $.getJSON('{{ route('frontend.game.search') }}?category1={{ $category1 }}&q=' + query, function(data) {
                $('#woocasino > section > main > div.ng-scope > div > section > div.games-list__wrap.ng-scope')
                    .html(data.data);
            });
        }
    </script>
