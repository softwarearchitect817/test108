<link rel="stylesheet" href="/woocasino/css/appef20.css">
<style type="text/css">
    .info-value {
        color: grey;
    }

    .table__date {
        color: grey;
    }

    .table__game,
    .table__withdrawal,
    .table__wallet {
        color: grey;
    }

    .table__bet {
        color: grey;
    }

    .table__win {
        color: grey;
    }

    .table__deposit {
        color: grey;
    }

    .table__status {
        color: grey;
    }

    .table__num {
        color: grey;
    }

    .font-size-1-17 {
        font-size: 1.17em;
    }

    .navbar-logo {
        display: flex;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
        padding-bottom: 10px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.29);
        margin-bottom: 5px;
    }

    .navbar-collapse-icon {
        transform: rotateY(180deg);
        cursor: pointer;
        position: absolute;
        right: -20px;
        top: 15px;
        background: rgb(24, 27, 38);
        width: 40px;
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        border-radius: 100px;
        height: 30px;
        -webkit-box-align: center;
        align-items: center;
    }

    .css-vubbuv {
        user-select: none;
        width: 1em;
        height: 1em;
        display: inline-block;
        fill: currentcolor;
        flex-shrink: 0;
        transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        font-size: 1.5rem;
    }

    .navbar-menu-icon {
        width: 20px;
        margin-right: 10px;
        vertical-align: middle;
    }
</style>

<header class="header">
    <div class="header__container">
        <nav class="header-menu ng-scope ng-isolate-scope" type="main-menu">
            <div class="navbar-collapse-icon">
                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true"
                    viewBox="0 0 24 24" data-testid="ArrowForwardIcon" aria-label="Collapse Menu">
                    <path d="m12 4-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"></path>
                </svg>
            </div>
            <ul class="header-menu__list">
                <li class="header-menu__item ng-scope">
                    <h3 class="text-uppercase font-size-1-17 navbar-logo">For You</h3>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/69ac823a3e3f3da13f38ad599111f718.svg" />
                        <span class="header-menu__text ng-binding">@lang('app.home')</span> </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/89de24462cf869cc48c79973304ac121.svg" />
                        <span class="header-menu__text ng-binding">@lang('app.sport')</span> </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/bd0f47fe765c8898e001138c8c13ba0b.svg" />
                        <span class="header-menu__text ng-binding">@lang('app.live')</span> </a>
                </li>
                <li class="header-menu__item ng-scope active">
                    <a class="header-menu__link header-menu__link--games header-menu__link--current" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/7da13915650dd8a73d3f2e6a8965c7c4.svg" />
                        <span class="header-menu__text ng-binding">@lang('app.games')</span> </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/c10916867817cc453518a03f48bfe219.svg" />
                        <span class="header-menu__text ng-binding">@lang('app.poker')</span> </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/ab5629123cee78b4e642ba6c734f3599.svg" />
                        <span class="header-menu__text ng-binding">@lang('app.payment')</span> </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/edcf5da3ba7eaf96e5c81dedca79d33b.svg" />
                        <span class="header-menu__text ng-binding">@lang('app.support')</span> </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/660d4671557687603e54c75d1a8f3309.svg" />
                        <span class="header-menu__text ng-binding">@lang('app.vip-club')</span> </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/78e71cfac0d4b6b1b399d01cadc87abb.svg" />
                        <span class="header-menu__text ng-binding">@lang('app.tournament')</span> </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/bd192847f70c923b02c98de6b042dd48.svg" />
                        <span class="header-menu__text ng-binding">@lang('app.promotion')</span> </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <h3 class="text-uppercase font-size-1-17 navbar-logo">Games</h3>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/a05ea39da5b2e9a94eda052b077165b6.svg" />
                        <span class="header-menu__text ng-binding">@lang('app.livecasino')</span> </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/1224542224dcf2249a53f0b623216f6d.svg" />
                        <span class="header-menu__text ng-binding">@lang('app.slot-game')</span> </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/67123e64c2d8697d4833a833861dfd4e.svg" />
                        <span class="header-menu__text ng-binding">@lang('app.table-game')</span> </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/0ff63b687a07e9c3f7a8af4f1eb1538d.svg" />
                        <span class="header-menu__text ng-binding">@lang('app.tv-game')</span> </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/05e1b721f49c6f3d582c0c4c79a5d628.svg" />
                        <span class="header-menu__text ng-binding">@lang('app.virtual-game')</span> </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="header__container__mobile" style="display: none">
        <nav class="header-menu ng-scope ng-isolate-scope" type="main-menu">
            <ul class="header-menu__list header-menu__list__mobile">
                <li class="header-menu__item ng-scope">
                    <button class="header-menu__item__btn">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                            aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowForwardIcon"
                            aria-label="Extent Sidebar">
                            <path d="m12 4-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"></path>
                        </svg>
                    </button>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/69ac823a3e3f3da13f38ad599111f718.svg" />

                    </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/89de24462cf869cc48c79973304ac121.svg" />
                    </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/bd0f47fe765c8898e001138c8c13ba0b.svg" />
                    </a>
                </li>
                <li class="header-menu__item ng-scope active">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/7da13915650dd8a73d3f2e6a8965c7c4.svg" />
                    </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/c10916867817cc453518a03f48bfe219.svg" />
                    </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/ab5629123cee78b4e642ba6c734f3599.svg" />
                    </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/edcf5da3ba7eaf96e5c81dedca79d33b.svg" />
                    </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/660d4671557687603e54c75d1a8f3309.svg" />
                    </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/78e71cfac0d4b6b1b399d01cadc87abb.svg" />
                    </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/bd192847f70c923b02c98de6b042dd48.svg" />
                    </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/a05ea39da5b2e9a94eda052b077165b6.svg" />
                    </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/1224542224dcf2249a53f0b623216f6d.svg" />
                    </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/67123e64c2d8697d4833a833861dfd4e.svg" />
                    </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/0ff63b687a07e9c3f7a8af4f1eb1538d.svg" />
                    </a>
                </li>
                <li class="header-menu__item ng-scope">
                    <a class="header-menu__link header-menu__link--games" scroll-up="">
                        <img class="navbar-menu-icon"
                            src="/frontend/Default/img/navbar/05e1b721f49c6f3d582c0c4c79a5d628.svg" />
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<script>
    $('.navbar-collapse-icon').click(function() {
        $('.header__container').css('display', 'none');
        $('.header__container__mobile').css('display', '');
        $('.carcass').css('padding-left', '60px');
        $('.header').css('width', '60px');

    })

    $('.header-menu__item__btn').click(function() {
        $('.header__container').css('display', '');
        $('.header__container__mobile').css('display', 'none');
        $('.carcass').css('padding-left', '230px');
        $('.header').css('width', '230px');
    })
</script>
