<!-- header -->
<div id="dim" class="js-dim"></div>
<header id="header" class="js-header">
    <div class="header-wrap inner-layer">

        <h1 class="header-logo">
            <a href="{{ route('main') }}">헤더 로고</a>
        </h1>

        <div class="util-wrap">
            <div class="dday-wrap type-w">

                <div class="dday-inner">
                    <img src="/assets/image/common/bell.svg" alt="">
                    <div class="text-wrap">
                        @php
                            $target = strtotime("2026-09-10");   // 목표 날짜
                            $today = strtotime(date("Y-m-d"));   // 오늘 0시 기준
                            $diff = ($target - $today) / 86400;   // 86400 = 하루(초)

                            $ddayText = ($diff >= 0) ? "D - " . $diff : "END";
                        @endphp
                        <p class="dday">{{ $ddayText ?? '' }}</p>
                        <p class="today">Today, {{ date('Y-m-d') }}</p>
                    </div>
                </div>
            </div>

            <ul class="util-menu">
                <li><a href="#n"><img src="/assets/image/common/ic_home.svg" alt="">HOME</a></li>
                @guest('web')
                    <li><a href="{{ route('auth.signup') }}"><img src="/assets/image/common/ic_signup.svg" alt="">SIGN-UP</a></li>
                    <li><a href="{{ route('login') }}"><img src="/assets/image/common/ic_login.svg" alt="">LOGIN</a></li>
                @else
                    <li><a href="{{ route('mypage') }}"><img src="/assets/image/common/ic_signup_m.png" alt="">MYPAGE</a></li>
                    <li><a href="javascript:logout();"><img src="/assets/image/common/ic_login_m.png" alt="">LOGOUT</a></li>
                    @if(isAdmin())
                    <li><a href="{{ env('APP_URL') }}/admin" class="admin"><img src="/assets/image/common/ic_admin.svg" alt="">ADMIN</a></li>
                    @endif
                @endguest
            </ul>
        </div>

        <button type="button" class="btn btn-menu-open js-btn-menu-open">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>

    <nav id="gnb">
        <div class="m-gnb-header">
            <div class="dday-wrap type-m">
                <div class="dday-inner">
                    <img src="/assets/image/common/bell.svg" alt="">
                    <div class="text-wrap">
                        <p class="dday">D - 000</p>
                        <p class="today">Today YYYY-MM-DD</p>
                    </div>
                </div>
            </div>
            <ul class="util-menu">
                <li><a href="#n"><img src="/assets/image/common/ic_home.svg" alt="">HOME</a></li>
                @guest('web')
                    <li><a href="{{ route('auth.signup') }}"><img src="/assets/image/common/ic_signup.svg" alt="">SIGN-UP</a></li>
                    <li><a href="{{ route('login') }}"><img src="/assets/image/common/ic_login.svg" alt="">LOGIN</a></li>
                @else
                    <li><a href="{{ route('mypage') }}"><img src="/assets/image/common/ic_signup_m.png" alt="">MYPAGE</a></li>
                    <li><a href="javascript:logout();"><img src="/assets/image/common/ic_login_m.png" alt="">LOGOUT</a></li>
                    @if(isAdmin())
                    <li><a href="{{ env('APP_URL') }}/admin" class="admin"><img src="/assets/image/common/ic_admin.svg" alt="">ADMIN</a></li>
                    @endif
                @endguest
            </ul>
        </div>

        <div class="gnb-wrap inner-layer">
            <ul class="gnb js-gnb">
                @foreach($menu['main'] as $key => $val)
                    @if($val['continue']) @continue @endif
                    @if($val['dev'] && !isDev()) @continue @endif

                    <li>
                        <a href="{{ empty($val['url']) ? route($val['route'], $val['param']) : $val['url'] }}" @if($val['blank']) target="_blank" @endif>
                            <span>{{ $val['name'] }}</span>
                        </a>

                        @if(!empty($menu['sub'][$key]))
                            <ul>
                                @foreach($menu['sub'][$key] ?? [] as $subKey => $subVal)
                                    @if($subVal['continue']) @continue @endif
                                    @if($subVal['dev'] && !isDev()) @continue @endif

                                    <li>
                                        <a href="{{ empty($subVal['url']) ? route($subVal['route'], $subVal['param']) : $subVal['url'] }}" @if($subVal['blank']) target="_blank" @endif>
                                            {{ $subVal['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>

        <button type="button" class="btn btn-menu-close js-btn-menu-close"><span class="hide">메뉴 닫기</span></button>
        
        </nav>

</header>
<!-- //header -->