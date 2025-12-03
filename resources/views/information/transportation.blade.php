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
                    <li class="on"><a href="{{ route('info.transportation') }}">From Airport / Station to the Venue</a></li>
                    <li><a href="{{ route('info.transportation',['tab'=>'2']) }}">Transportation Guide</a></li>
                </ul>
            </div>

            <div class="tab-wrap">
                <div class="sub-tab-wrap">
                    <ul class="sub-tab-menu type-trans js-tab-menu">
                        <li class="on"><a href="#n">Incheon International Airport Terminal 1</a></li>
                        <li><a href="#n">Incheon International Airport Terminal 2</a></li>
                        <li><a href="#n">Gimpo International Airport</a></li>
                        <li><a href="#n">Seoul Station</a></li>
                    </ul>
                </div>

                <!-- tab menu 1 -->
                <div class="sub-tab-con js-tab-con" style="display: block;">
                    <div class="sub-tit-wrap mt-0">
                        <h4 class="sub-tit">Free Hotel Shuttle Service</h4>
                        <a href="https://www.hyatt.com/grand-hyatt/en-US/inche-grand-hyatt-incheon/parking-and-transportation" target="_blank" class="btn btn-small color-type1 btn-trans-more">More</a>
                    </div>
                    <div class="table-wrap scroll-x touch-help">
                        <table class="cst-table">
                            <caption class="hide">Free Hotel Shuttle Service</caption>
                            <colgroup>
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                                <col>
                            </colgroup>
                            <thead>
                            <tr>
                                <th>Bus Stop Location </th>
                                <th>Fare </th>
                                <th>Interval </th>
                                <th>Operating Hour </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><strong>3C, Gate 3, 1st Floor, Terminal 1</strong></td>
                                <td>Free </td>
                                <td>Every 30 minutes </td>
                                <td>05:35 - 22:05 </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="sub-tit-wrap">
                        <h4 class="sub-tit">Free Airport Shuttle Service</h4>
                        <a href="https://www.airport.kr/ap_en/1518/subview.do" target="_blank" class="btn btn-small color-type1 btn-trans-more">More</a>
                    </div>
                    <div class="table-wrap scroll-x touch-help">
                        <table class="cst-table">
                            <caption class="hide">Free Airport Shuttle Service</caption>
                            <colgroup>
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                                <col>
                            </colgroup>
                            <thead>
                            <tr>
                                <th>Bus NO. </th>
                                <th>Bus Stop Location </th>
                                <th>Fare </th>
                                <th>Travel Time </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td rowspan="2"><strong>AIRPORT03</strong></td>
                                <td>
                                    Terminal 1 East<br>
                                    (3<sup>rd</sup> Floor, Gate 3)
                                </td>
                                <td rowspan="2">Free </td>
                                <td rowspan="2">3 minutes </td>
                            </tr>
                            <tr>
                                <td>
                                    Terminal 1 West<br>
                                    (3<sup>rd</sup> Floor, Gate 12)
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="sub-tit-wrap">
                        <h4 class="sub-tit">BUS</h4>
                    </div>
                    <div class="table-wrap scroll-x touch-help">
                        <table class="cst-table">
                            <caption class="hide">BUS</caption>
                            <colgroup>
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                                <col>
                            </colgroup>
                            <thead>
                            <tr>
                                <th>Bus NO. </th>
                                <th>Bus stop location </th>
                                <th>
                                    Fare<br>
                                    (as of October 29, 2025)
                                </th>
                                <th>Travel Time </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><strong>111</strong></td>
                                <td rowspan="2">Gate 13<sup>th</sup>, 3<sup>rd</sup> Floor, Terminal 1 </td>
                                <td rowspan="2">KRW 1,900 </td>
                                <td rowspan="2">7 minutes </td>
                            </tr>
                            <tr>
                                <td><strong>306</strong></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="sub-tit-wrap">
                        <h4 class="sub-tit">TAXI</h4>
                        <a href="https://kride.kakaomobility.com/?lang=en#kride-qr-code" target="_blank" class="btn btn-small color-type1 btn-trans-more">More</a>
                    </div>
                    <div class="table-wrap scroll-x touch-help">
                        <table class="cst-table">
                            <caption class="hide">TAXI</caption>
                            <colgroup>
                                <col style="width: 50%;">
                                <col>
                            </colgroup>
                            <thead>
                            <tr>
                                <th>Travel Time </th>
                                <th>
                                    Fare<br>
                                    (as of October 29, 2025)
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>4 minutes </td>
                                <td>KRW 5,300 </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- //tab menu 1 -->


                <!-- tab menu 2 -->
                <div class="sub-tab-con js-tab-con">
                    <div class="sub-tit-wrap mt-0">
                        <h4 class="sub-tit">Free Hotel Shuttle Service</h4>
                        <a href="https://www.hyatt.com/grand-hyatt/en-US/inche-grand-hyatt-incheon/parking-and-transportation" target="_blank" class="btn btn-small color-type1 btn-trans-more">More</a>
                    </div>
                    <div class="table-wrap scroll-x touch-help">
                        <table class="cst-table">
                            <caption class="hide">Free Hotel Shuttle Service</caption>
                            <colgroup>
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                                <col>
                            </colgroup>
                            <thead>
                            <tr>
                                <th>Bus Stop Location </th>
                                <th>Fare </th>
                                <th>Interval </th>
                                <th>Operating Hour </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><strong>Gate 4A, 1<sup>st</sup> Floor, Terminal 2</strong></td>
                                <td>Free </td>
                                <td>Every 30 minutes </td>
                                <td>06:10 - 22:40 </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="sub-tit-wrap">
                        <h4 class="sub-tit">Free Airport Shuttle Service</h4>
                        <a href="https://www.airport.kr/ap_en/1518/subview.do" target="_blank" class="btn btn-small color-type1 btn-trans-more">More</a>
                    </div>
                    <div class="table-wrap scroll-x touch-help">
                        <table class="cst-table">
                            <caption class="hide">Free Airport Shuttle Service</caption>
                            <colgroup>
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                                <col>
                            </colgroup>
                            <thead>
                            <tr>
                                <th>Bus NO. </th>
                                <th>Bus Stop Location </th>
                                <th>Fare </th>
                                <th>Travel Time </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><strong>AIRPORT03</strong></td>
                                <td>
                                    Terminal 2 East<br>
                                    (3<sup>rd</sup> Floor, Gate 6)
                                </td>
                                <td>Free </td>
                                <td>14 minutes </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="sub-tit-wrap">
                        <h4 class="sub-tit">BUS</h4>
                    </div>
                    <div class="table-wrap scroll-x touch-help">
                        <table class="cst-table">
                            <caption class="hide">BUS</caption>
                            <colgroup>
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                                <col>
                            </colgroup>
                            <thead>
                            <tr>
                                <th>Bus NO. </th>
                                <th>Bus stop location </th>
                                <th>
                                    Fare<br>
                                    (as of October 29, 2025)
                                </th>
                                <th>Travel Time </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><strong>303-1</strong></td>
                                <td>Gate 8B, 1<sup>st</sup> Floor, Termianl 2 </td>
                                <td>KRW 2,000 </td>
                                <td>16 minutes </td>
                            </tr>
                            <tr>
                                <td><strong>310</strong></td>
                                <td>Gate 11, 3<sup>rd</sup> Floor, Terminal 2 </td>
                                <td>KRW 2,000 </td>
                                <td>20 minutes </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="sub-tit-wrap">
                        <h4 class="sub-tit">TAXI</h4>
                        <a href="https://kride.kakaomobility.com/?lang=en#kride-qr-code" target="_blank" class="btn btn-small color-type1 btn-trans-more">More</a>
                    </div>
                    <div class="table-wrap scroll-x touch-help">
                        <table class="cst-table">
                            <caption class="hide">TAXI</caption>
                            <colgroup>
                                <col style="width: 50%;">
                                <col>
                            </colgroup>
                            <thead>
                            <tr>
                                <th>Travel Time </th>
                                <th>
                                    Fare<br>
                                    (as of October 29, 2025)
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>11 minutes </td>
                                <td>KRW 13,000 </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- //tab menu 2 -->


                <!-- tab menu 3 -->
                <div class="sub-tab-con js-tab-con">
                    <div class="sub-tit-wrap mt-0">
                        <h4 class="sub-tit">Subway (to Incheon International Airport Terminal 1)</h4>
                    </div>
                    <div class="table-wrap scroll-x touch-help">
                        <table class="cst-table">
                            <caption class="hide">Subway (to Incheon International Airport Terminal 1)</caption>
                            <colgroup>
                                <col style="width: 25%;">
                                <col style="width: 20%;">
                                <col style="width: 20%;">
                                <col style="width: 35%;">
                            </colgroup>
                            <thead>
                            <tr>
                                <th>Transportation </th>
                                <th>Travel Time </th>
                                <th>Fare<br> (as of October 29, 2025) </th>
                                <th>Route </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <span class="btn btn-small trans-step type1">STEP 1</span><br>
                                    <strong>Subway</strong><br>
                                    Airport Railroad Express Route(ARER)
                                </td>
                                <td rowspan="2">39 minutes </td>
                                <td rowspan="2">KRW<br> 4,850 </td>
                                <td class="text-left">
                                    <span class="route-info"><img src="/assets/image/sub/ic_subway_sm.png" alt=""> Subway: Airport Railroad Express Route(ARER)</span>
                                    <div class="img-wrap">
                                        <img src="/assets/image/sub/img_trans_route01.png" alt="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="https://apkass2026korea.org/transportation" class="btn btn-small trans-step type2">STEP 2</a><br>
                                    <strong>Incheon International Airport Terminal 1 <br class="m-hide">to the Hotel</strong>
                                </td>
                                <td class="text-left">
                                    <span class="route-info"><img src="/assets/image/sub/ic_bus_sm.png" alt=""> Bus</span>
                                    <div class="img-wrap">
                                        <img src="/assets/image/sub/img_trans_route02.png" alt="">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="sub-tit-wrap">
                        <h4 class="sub-tit">TAXI</h4>
                        <a href="https://kride.kakaomobility.com/?lang=en#kride-qr-code" target="_blank" class="btn btn-small color-type1 btn-trans-more">More</a>
                    </div>
                    <div class="table-wrap scroll-x touch-help">
                        <table class="cst-table">
                            <caption class="hide">TAXI</caption>
                            <colgroup>
                                <col style="width: 50%;">
                                <col>
                            </colgroup>
                            <thead>
                            <tr>
                                <th>Travel Time </th>
                                <th>Fare<br> (as of October 29, 2025) </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>32 minutes </td>
                                <td>KRW 43,000 </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- //tab menu 3 -->


                <!-- tab menu 4 -->
                <div class="sub-tab-con js-tab-con">
                    <div class="sub-tit-wrap mt-0">
                        <h4 class="sub-tit">Subway (to Incheon International Airport Terminal 1)</h4>
                    </div>
                    <div class="table-wrap scroll-x touch-help">
                        <table class="cst-table">
                            <caption class="hide">Subway (to Incheon International Airport Terminal 1)</caption>
                            <colgroup>
                                <col style="width: 25%;">
                                <col style="width: 20%;">
                                <col style="width: 20%;">
                                <col style="width: 35%;">
                            </colgroup>
                            <thead>
                            <tr>
                                <th>Transportation </th>
                                <th>Travel Time </th>
                                <th>
                                    Fare<br>
                                    (as of October 29, 2025)
                                </th>
                                <th>Route </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <span class="btn btn-small trans-step type1">STEP 1</span><br>
                                    <strong>Subway</strong><br>
                                    Airport Railroad Express Route(ARER)
                                </td>
                                <td rowspan="2">63 minutes </td>
                                <td rowspan="2">
                                    KRW<br>
                                    4,850
                                </td>
                                <td class="text-left">
                                    <span class="route-info"><img src="/assets/image/sub/ic_subway_sm.png" alt=""> Subway: Airport Railroad Express Route(ARER)</span>
                                    <div class="img-wrap">
                                        <img src="/assets/image/sub/img_trans_route03.png" alt="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="https://apkass2026korea.org/transportation" class="btn btn-small trans-step type2">STEP 2</a><br>
                                    <strong>Incheon International Airport Terminal 1 <br>to the Hotel</strong>
                                </td>
                                <td class="text-left">
                                    <span class="route-info"><img src="/assets/image/sub/ic_bus_sm.png" alt=""> Bus</span>
                                    <div class="img-wrap">
                                        <img src="/assets/image/sub/img_trans_route02.png" alt="">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="sub-tit-wrap">
                        <h4 class="sub-tit">TAXI</h4>
                        <a href="https://kride.kakaomobility.com/?lang=en#kride-qr-code" target="_blank" class="btn btn-small color-type1 btn-trans-more">More</a>
                    </div>
                    <div class="table-wrap scroll-x touch-help">
                        <table class="cst-table">
                            <caption class="hide">TAXI</caption>
                            <colgroup>
                                <col style="width: 50%;">
                                <col>
                            </colgroup>
                            <thead>
                            <tr>
                                <th>Travel Time </th>
                                <th>
                                    Fare<br>
                                    (as of October 29, 2025)
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1 hour </td>
                                <td>KRW 58,250 </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- //tab menu 4 -->
            </div>

            <div class="info-conbox">
                <p class="tit"><img src="/assets/image/sub/ic_info.png" alt="">Taxi Destination Instructions for Driver</p>
                <p>If you are taking a taxi from the Airport or Subway Station, please show this message to the taxi driver. The following means “Please take me to GRAND HYATT INCHEON” in Korean.</p>
                <div class="bg-box type-taxi">
                    <div class="text-box">
                        <p class="text">“그랜드 하얏트 인천”으로 가주세요.</p>
                        <p class="address"><span class="badge">주소</span> <span class="underline">인천 중구 영종해안남로321번길 208</span></p>
                    </div>
                </div>
            </div>

            <div class="bg-box type-kride">
                <div class="img-wrap">
                    <img src="/assets/image/sub/img_trans_kride01.png" alt="">
                    <img src="/assets/image/sub/img_trans_qr_kride.png" alt="">
                </div>
                <div class="text-box">
                    <p class="tit">About K.ride – a helpful app for taxi users</p>
                    <p>Please note that Uber is still being introduced, so availability is limited, and Grab doesn’t operate in Seoul or any other region of South Korea.</p>
                    <p>Instead, we recommend using the K.ride application, which is well-suited for international visitors traveling to Seoul and other parts of the country.</p>
                    <p>K.ride offers multilingual support, including Chinese, English, Japanese, and Korean, and allows payment with internationally issued credit cards. Additionally, many of the drivers are able to communicate in basic English, which can enhance convenience for non-Korean speakers. We encourage you to download the application in advance of your trip to Korea.</p>
                    <p class="em">Scan the QR code to download k.ride app</p>
                </div>
            </div>
        </div>
    </article>
@endsection

@section('addScript')

@endsection
