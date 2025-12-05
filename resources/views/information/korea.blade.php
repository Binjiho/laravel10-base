@extends('layouts.web-layout')

@section('addStyle')
@endsection

@section('contents')
    <article class="sub-contents">
        <div class="sub-conbox inner-layer">
			<div class="page-tit-wrap">
				<h3 class="page-tit">About Korea</h3>
			</div>

            <div class="sub-tit-wrap mt-0">
                <h4 class="sub-tit">About Korea</h4>
            </div>
            <div class="korea-flex-wrap">
                <div class="img-wrap">
                    <img src="/assets/image/sub/img_korea5.jpg" alt="">
                </div>
                <div class="text-wrap">
                    <p>
                        The Republic of Korea (hereafter Korea) is a country visited by approximately ten million international travelers annually. With its long history in culture and 
                        tradition, the country has a lot to offer to travelers.
                    </p>
                    <p>
                        The Korean Peninsula, roughly 1,030 km long and 175 km at its narrowest point, has a total land area of 100,033 km<sup>2</sup>. Korea is Located at the center of Northeast 
                        Asia, the Korean Peninsula neighbors China, Russia, and Japan.
                    </p>
                    <div class="btn-wrap">
                        <a href="https://english.visitkorea.or.kr/svc/main/index.do" target="_blank" class="btn btn-type1 color-type5 btn-line">More Details + </a>
                    </div>
                </div>
            </div>

            <div class="sub-tit-wrap">
                <h4 class="sub-tit">Top Destinations Outside Seoul</h4>
            </div>
            <ul class="korea-wrap">
                <li>
                    <a href="https://www.visitbusan.net/en/index.do" target="_blank">
                        <img src="/assets/image/sub/img_korea1.jpg" alt="Busan">
                        <div class="text-overlay">
                            <p>Busan</p>
                            <span>2<sup>nd</sup> largest city and number one trading hub in Korea</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="https://www.gyeongju.go.kr/tour/eng/index.do" target="_blank">
                        <img src="/assets/image/sub/img_korea2.jpg" alt="Gyeongju">
                        <div class="text-overlay">
                            <p>Gyeongju</p>
                            <span>City with historical and cultural heritage</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="https://tour.jeonju.go.kr/eng/index.jeonju" target="_blank">
                        <img src="/assets/image/sub/img_korea3.jpg" alt="Jeonju">
                        <div class="text-overlay">
                            <p>Jeonju</p>
                            <span>The heart of Korean traditional house and food</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="https://www.visitjeju.net/en/" target="_blank">
                        <img src="/assets/image/sub/img_korea4.jpg" alt="Jeju">
                        <div class="text-overlay">
                            <p>Jeju</p>
                            <span>The largest and most beautiful Island in Korea,<br>and the best destination for a vacation.</span>
                        </div>
                    </a>
                </li>
            </ul>

        </div>
    </article>
@endsection

@section('addScript')

@endsection
