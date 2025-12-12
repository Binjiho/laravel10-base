@extends('layouts.web-layout')

@section('addStyle')
@endsection

@section('contents')
    <section id="container">
        <article class="main-visual">
            <div class="main-visual-wrap js-main-visual cf">
                <div class="main-visual-con">
                    <picture>
                        <source srcset="/assets/image/main/key_visual_m.png" media="(max-width: 1024px)">
                        <img src="/assets/image/main/key_visual.png" alt="">
                    </picture>
                </div>
                <div class="main-visual-con">
                    <picture>
                        <source srcset="/assets/image/main/key_visual_m.png" media="(max-width: 1024px)">
                        <img src="/assets/image/main/key_visual.png" alt="">
                    </picture>
                </div>
            </div>
            <ul class="main-visual-menu">
                <li>
                    @php
                        $target = strtotime("2026-01-05");   // 목표 날짜
                        $today = strtotime(date("Y-m-d"));   // 오늘 0시 기준
                        $diff = ($target - $today) / 86400;   // 86400 = 하루(초)

                        $ddayText = ($diff >= 0) ? "D - " . $diff : "END";
                    @endphp

                    <p class="title">
                        Abstract Submission Opens
                        <span>January 5, 2026</span>
                    </p>
                    <p class="dday">{{ $ddayText ?? '' }}</p>
                </li>
                <li>
                    @php
                        $target = strtotime("2026-04-30");   // 목표 날짜
                        $today = strtotime(date("Y-m-d"));   // 오늘 0시 기준
                        $diff = ($target - $today) / 86400;   // 86400 = 하루(초)

                        $ddayText = ($diff >= 0) ? "D - " . $diff : "END";
                    @endphp
                    <p class="title">
                        Acceptance Notice
                        <span>April 30, 2026</span>
                    </p>
                    <p class="dday">{{ $ddayText ?? '' }}</p>
                </li>
                <li>
                    @php
                        $target = strtotime("2026-02-02");   // 목표 날짜
                        $today = strtotime(date("Y-m-d"));   // 오늘 0시 기준
                        $diff = ($target - $today) / 86400;   // 86400 = 하루(초)

                        $ddayText = ($diff >= 0) ? "D - " . $diff : "END";
                    @endphp
                    <p class="title">
                        Registration Opens
                        <span>February 2, 2026</span>
                    </p>
                    <p class="dday">{{ $ddayText ?? '' }}</p>
                </li>
            </ul>
        </article>

        <article class="main-contents main-quick" id="section2">
            <ul class="main-quick-menu inner-layer">
                <li>
                    <a href="#n">
                        <p>ABSTRACT</p>
                        <div class="icon">
                            <img src="/assets/image/main/ico_quick01.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#n">
                        <p>REGISTRATION</p>
                        <div class="icon">
                            <img src="/assets/image/main/ico_quick02.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#n">
                        <p>PROGRAM</p>
                        <div class="icon">
                            <img src="/assets/image/main/ico_quick03.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/mypage/">
                        <p>MY PAGE</p>
                        <div class="icon">
                            <img src="/assets/image/main/ico_quick04.png" alt="">
                        </div>
                    </a>
                </li>
            </ul>
        </article>

        <article class="main-contents inner-layer" id="section3">
            <div class="main-board">
                <div class="main-title-wrap">
                    <h3>NEWS & NOTICE</h3>
                </div>
                <ul class="main-board-list">
                    @forelse($notice_list as $row)
                    <li>
                        <a href="{{ route('board.view', ['code' => 'news', 'sid' => $row->sid]) }}">
                            <p class="subject subject ellipsis">{{ $row->subject }}</p>
                            <p class="date">{{ $row->created_at->format('Y-m-d') }}</p>
                        </a>
                    </li>
                    @empty
                    @endforelse
                </ul>
            </div>
            <div class="main-video-wrap">
                <div class="main-video">
                    <iframe src="https://player.vimeo.com/video/1143287179?h=2350c541e6" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </article>

        <!-- <article class="main-contents inner-layer" id="section4">
            <div class="main-title-wrap">
                <h3>Key Speakers</h3>
                <a -href="/" class="more-view">More View +</a>
            </div>
            <div class="speaker-rolling-wrap">
                <div class="speaker-rolling js-speaker-rolling">
                    <div>
                        <div class="img-wrap">
                            <img src="/assets/image/main/img_thum_speaker.png" alt="">
                        </div>
                        <div class="text-wrap">
                            <p class="title">TBD</p>
                            <p class="des">TBD</p>
                        </div>
                    </div>
                    <div>
                        <div class="img-wrap">
                            <img src="/assets/image/main/img_thum_speaker.png" alt="">
                        </div>
                        <div class="text-wrap">
                            <p class="title">TBD</p>
                            <p class="des">TBD</p>
                        </div>
                    </div>
                    <div>
                        <div class="img-wrap">
                            <img src="/assets/image/main/img_thum_speaker.png" alt="">
                        </div>
                        <div class="text-wrap">
                            <p class="title">TBD</p>
                            <p class="des">TBD</p>
                        </div>
                    </div>
                    <div>
                        <div class="img-wrap">
                            <img src="/assets/image/main/img_thum_speaker.png" alt="">
                        </div>
                        <div class="text-wrap">
                            <p class="title">TBD</p>
                            <p class="des">TBD</p>
                        </div>
                    </div>
                    <div>
                        <div class="img-wrap">
                            <img src="/assets/image/main/img_thum_speaker.png" alt="">
                        </div>
                        <div class="text-wrap">
                            <p class="title">TBD</p>
                            <p class="des">TBD</p>
                        </div>
                    </div>
                    <div>
                        <div class="img-wrap">
                            <img src="/assets/image/main/img_thum_speaker.png" alt="">
                        </div>
                        <div class="text-wrap">
                            <p class="title">TBD</p>
                            <p class="des">TBD</p>
                        </div>
                    </div>
                </div>
                <div class="slide-arrow">
                    <a href="#n" class="slick-prev slick-arrow">이전</a>
                    <a href="#n" class="slick-next slick-arrow">다음</a>
                </div>
            </div>
        </article>
    </section> -->

    <!-- <section class="sponsor-wrap  inner-layer main-contents">
        <div class="main-title-wrap">
            <h3>SPONSORED BY</h3>
        </div>
        <div class="sponsor-rolling-wrap">
            <div class="sponsor-rolling js-sponsor-rolling">
                <a href="#n" target="_blank"><img src="/assets/image/main/sponsor.png" alt=""></a>
                <a href="#n" target="_blank"><img src="/assets/image/main/sponsor.png" alt=""></a>
                <a href="#n" target="_blank"><img src="/assets/image/main/sponsor.png" alt=""></a>
                <a href="#n" target="_blank"><img src="/assets/image/main/sponsor.png" alt=""></a>
                <a href="#n" target="_blank"><img src="/assets/image/main/sponsor.png" alt=""></a>
                <a href="#n" target="_blank"><img src="/assets/image/main/sponsor.png" alt=""></a>
                <a href="#n" target="_blank"><img src="/assets/image/main/sponsor.png" alt=""></a>
            </div>
        </div>
    </section> -->
@endsection

@section('addScript')
    @isset($layerPopups)
        @include('popup.board.layer-popup')
        @include('popup.board.layer-popup-script')
    @endisset

    @isset($rollingPopups)
        @include('popup.board.rolling-popup')
        @include('popup.board.rolling-popup-script')
    @endisset
@endsection
