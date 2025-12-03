@extends('layouts.web-layout')

@section('addStyle')
@endsection

@section('contents')
    <article class="sub-contents">
        <!-- 25.12.01 page tit 추가 -->
        <div class="page-tit-wrap">
            <h3 class="page-tit">Transportation</h3>
        </div>
        <!--// 25.12.01 page tit 추가 -->

        <div class="sub-conbox inner-layer">

            <div class="sub-tab-wrap">
                <ul class="sub-tab-menu">
                    <li ><a href="{{ route('info.transportation') }}">From Airport / Station to the Venue</a></li>
                    <li class="on"><a href="{{ route('info.transportation',['tab'=>'2']) }}">Transportation Guide</a></li>
                </ul>
            </div>


            <div class="sub-tit-wrap">
                <h4 class="sub-tit">Useful Korean Map Application</h4>
            </div>
            <div class="bd-box type-qr">
                <div class="text-con">
                    <a href="https://mkt.naver.com/navermapapp" target="_blank"><img src="/assets/image/sub/img_trans_naver_map_v2.png" alt="Naver Map Icon" class=""></a>
                    <p class="text">
                        'Naver Map' is a widely used navigation platform in Korea, offering directions for public transport, driving, walking, and cycling.
                    </p>
                </div>
                <div class="qr-con">
                    <div class="qr-item">
                        <img src="/assets/image/sub/img_trans_qr_google.png" alt="Google Play Store QR" class="qr-img-lg">
                        <span class="tit">Google Play Store</span>
                    </div>
                    <div class="qr-item">
                        <img src="/assets/image/sub/img_trans_qr_app.png" alt="App Store QR" class="qr-img-lg">
                        <span class="tit">App Store</span>
                    </div>
                </div>
            </div>

            <div class="trans-flex-wrap">
                <div class="trans-flex-conbox">
                    <div class="img-wrap"><img src="/assets/image/sub/ic_subway.png" alt=""></div>
                    <div class="text-wrap">
                        <div class="tit-box">
                            <p class="tit">Subway</p>
                            <a href="http://www.seoulmetro.co.kr/en/cyberStation.do?menuIdx=337" target="_blank" class="btn btn-small color-type1 btn-trans-more">About subway map</a>
                        </div>
                        <p class="desc">Incheon’s subway system connects major areas of the city and provides easy access to Seoul and neighboring regions. It’s a convenient and affordable way to travel around the city.</p>
                    </div>
                </div>
                <div class="trans-flex-conbox">
                    <div class="img-wrap"><img src="/assets/image/sub/ic_bus.png" alt=""></div>
                    <div class="text-wrap">
                        <div class="tit-box">
                            <p class="tit">Buses</p>
                        </div>
                        <p class="desc">The local bus network covers almost every district in Incheon, offering frequent service to residential, commercial, and coastal areas. Both regular and express buses are available.</p>
                    </div>
                </div>
                <div class="trans-flex-conbox">
                    <div class="img-wrap"><img src="/assets/image/sub/ic_taxi.png" alt=""></div>
                    <div class="text-wrap">
                        <div class="tit-box">
                            <p class="tit">Taxi</p>
                            <a href="https://kride.kakaomobility.com/?lang=en#kride-qr-code" target="_blank" class="btn btn-small color-type1 btn-trans-more">More</a>
                        </div>
                        <p class="desc">Taxis are widely available throughout Incheon and offer a comfortable option for direct travel. Fares vary depending on distance and time of day.</p>
                    </div>
                </div>
            </div>

            <div class="btn-wrap text-center">
                <a href="https://english.seoul.go.kr/service/movement/public-transportation/" target="_blank" class="btn btn-type1 color-type1 btn-useful-more">More Useful Information for using transportation</a>
            </div>

        </div>
    </article>
@endsection

@section('addScript')

@endsection
