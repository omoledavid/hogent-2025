<header id="header-main" class="header style-3 header-fixed">
    <div class="header-inner bg-1">
        <div class="tf-container lg">
            <div class="row">
                <div class="col-12">
                    <div class="header-inner-wrap">
                        <div class="header-logo">
                            <a href="{{route('home')}}" class="site-logo">
{{--                                <img class="img-default" alt="" src="{{asset('assets/images/logo/logo-6%402x.png')}}">--}}
                                <img class="img-default" alt="" src="{{logo()}}">
                                <img class="img-is-fixed" alt="" src="{{logo()}}">
{{--                                <img class="img-is-fixed" alt="" src="{{asset('assets/images/logo/logo-6.2%402x.png')}}">--}}
                            </a>
                        </div>
                        <nav class="main-menu">
                            @include('partials.nav')
                        </nav>
                        <div class="header-right">
                            <div class="phone-number">
                                <div class="icons">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.875 5.625C1.875 12.5283 7.47167 18.125 14.375 18.125H16.25C16.7473 18.125 17.2242 17.9275 17.5758 17.5758C17.9275 17.2242 18.125 16.7473 18.125 16.25V15.1067C18.125 14.6767 17.8325 14.3017 17.415 14.1975L13.7292 13.2758C13.3625 13.1842 12.9775 13.3217 12.7517 13.6233L11.9433 14.7008C11.7083 15.0142 11.3025 15.1525 10.935 15.0175C9.57073 14.5159 8.33179 13.7238 7.30398 12.696C6.27618 11.6682 5.48406 10.4293 4.9825 9.065C4.8475 8.6975 4.98583 8.29167 5.29917 8.05667L6.37667 7.24833C6.67917 7.0225 6.81583 6.63667 6.72417 6.27083L5.8025 2.585C5.75178 2.38225 5.63477 2.20225 5.47004 2.07361C5.30532 1.94498 5.10234 1.87507 4.89333 1.875H3.75C3.25272 1.875 2.77581 2.07254 2.42417 2.42417C2.07254 2.77581 1.875 3.25272 1.875 3.75V5.625Z"
                                            stroke="black" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                                <p>{{format_phone_number($general->phone)}}</p>
                            </div>
                            <div class="box-user tf-action-btns">
                                <div class="user ">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.749 6C15.749 6.99456 15.3539 7.94839 14.6507 8.65165C13.9474 9.35491 12.9936 9.75 11.999 9.75C11.0044 9.75 10.0506 9.35491 9.34735 8.65165C8.64409 7.94839 8.249 6.99456 8.249 6C8.249 5.00544 8.64409 4.05161 9.34735 3.34835C10.0506 2.64509 11.0044 2.25 11.999 2.25C12.9936 2.25 13.9474 2.64509 14.6507 3.34835C15.3539 4.05161 15.749 5.00544 15.749 6ZM4.5 20.118C4.53213 18.1504 5.33634 16.2742 6.73918 14.894C8.14202 13.5139 10.0311 12.7405 11.999 12.7405C13.9669 12.7405 15.856 13.5139 17.2588 14.894C18.6617 16.2742 19.4659 18.1504 19.498 20.118C17.1454 21.1968 14.5871 21.7535 11.999 21.75C9.323 21.75 6.783 21.166 4.5 20.118Z"
                                            stroke="#2C2E33" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="name">
                                    @if(auth()->check())
                                    <p class="text-color-primary">Omole Kessiena</p>
                                    @endif
                                </div>
                                @if(auth()->check())
                                    <x-user-menu status="true"></x-user-menu>
                                @else
                                    <x-user-menu status="false"></x-user-menu>
                                @endif

                            </div>
                            <div class="btn-add">
                                <a class="tf-btn style-border pd-23" href="">Add property</a>
                            </div>
                            <div class="mobile-button" data-bs-toggle="offcanvas" data-bs-target="#menu-mobile"
                                 aria-controls="menu-mobile">
                                <i class="icon-menu"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
