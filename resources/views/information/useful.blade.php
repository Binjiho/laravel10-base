@extends('layouts.web-layout')

@section('addStyle')
@endsection

@section('contents')
    <article class="sub-contents">
        <div class="sub-conbox inner-layer">
			<div class="page-tit-wrap">
				<h3 class="page-tit">Useful Information</h3>
			</div>

            <!-- <div class="sub-tit-wrap mt-0">
                <h4 class="sub-tit">Useful Information</h4>
            </div> -->
            <ul class="useful-info-wrap">
                <li>
                    <div class="img-wrap">
                        <img src="/assets/image/sub/img_info01.png" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="title">Weather and Clothing</p>
                        <p class="des">
                           September marks the beginning of autumn in Korea, with pleasant weather and clear skies. The average temperature ranges from 18°C to 26°C (64°F to 79°F). <br>
						   Light long-sleeve shirts or a thin jacket are recommended, especially for cooler mornings and evenings.
                        </p>
                    </div>
                    <a href="https://www.kma.go.kr/neng/index.do" target="_blank" class="btn btn-type3 color-type7">More</a>
                </li>
                <li>
                    <div class="img-wrap">
                        <img src="/assets/image/sub/img_info02.png" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="title">Time Difference</p>
                        <p class="des">
                            Korea is in the Korea Standard Time Zone (UTC+9). There is no daylight saving time.
                        </p>
                    </div>
                    <a href="https://timezonewizard.com/" target="_blank" class="btn btn-type3 color-type7">More</a>
                </li>
                <li>
                    <div class="img-wrap">
                        <img src="/assets/image/sub/img_info03.png" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="title">Monetary System & Currency</p>
                        <p class="des">
                            There are currently 4 banknotes (1,000 / 5,000 / 10,000 / 50,000) and 4 coins (10 / 50 / 100 / 500) in circulations in Korea.
                            The current exchange rate is approximately 1 USD= 1,434 KRW as of October 2025.<BR>
                            Click the 'View More' button below to check the current exchange rate.
                        </p>
                    </div>
                    <a href="https://www.xe.com/" target="_blank" class="btn btn-type3 color-type7">More</a>
                </li>
                <li>
                    <div class="img-wrap">
                        <img src="/assets/image/sub/img_info04.png" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="title">Credit Card</p>
                        <p class="des">
                            Visa, Mastercard and American Express credit cards are accepted throughout much of South Korea. Most of the businesses widely use and accept
                            payment by credit cards, including at major hotels, department stores, and general shops. However, check the service availability before making
                            purchases as some stores may not provide this service.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="img-wrap">
                        <img src="/assets/image/sub/img_info05.png" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="title">Business Hours</p>
                        <p class="des">
                            Banks and Public Institutions: 09:00 - 16:00 <br>
                            Tourist Information Centers: 09:30 - 22:00 (Varies by location) <br>
                            Restaurants & Cafes: Varies by location <br>
                            <!-- In keeping with Jeju Island’s relaxed pace, many shops and restaurants may close on certain days without fixed schedules. <br>
                            <strong>We highly recommend confirming their operating hours in advance to ensure a smooth visit. </strong> --><br>
                            <strong>Transportation</strong> <br>
                            Subway: 05:00 - 24:00 <br>
                            Bus: 05:00 - 22:00 (Select routes operate until 25:00) <br>
                            Taxi: 24 hours (20% late-night surcharge from 24:00 - 28:00)
                        </p>
                    </div>
                </li>
                <li>
                    <div class="img-wrap">
                        <img src="/assets/image/sub/img_info06.png" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="title">Tax and Tipping</p>
                        <p class="des">
                            Korea is basically a no-tip culture. Value-added tax is levied on most goods and services at a standard rate of 10% and is included in the retail
                            price. Sometimes, expensive restaurants and luxury hotels may add a service charge of 10%. Thus, you do not necessarily have to prepare for extra
                            charges since it will be included in the bill.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="img-wrap">
                        <img src="/assets/image/sub/img_info07.png" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="title">eSIM, SIM Card, and WiFi Devices</p>
                        <p class="des">
                            You can pre-purchase an eSIM online before your trip. Alternatively, SIM cards are available for pickup at Gimpo or Incheon Airport, and portable WiFi devices (“WiFi eggs”) can also be rented. For detailed information on fees and the exact pickup locations within the airports, click on “More”.
                        </p>
                    </div>
                    <a href="https://krsim.net/" target="_blank" class="btn btn-type3 color-type7">More</a>
                </li>
                <li>
                    <div class="img-wrap">
                        <img src="/assets/image/sub/img_info08.png" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="title">Electricity</p>
                        <p class="des">
                            The standard voltage in Korea is 220 volts at 60 Hertz, and the outlet has two round holes.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="img-wrap">
                        <img src="/assets/image/sub/img_info09.png" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="title">Emergency Call</p>
                        <p class="des">
                            Police: 112 / +82‑112<br>
							Fire, Rescue, and Ambulance: 119 / +82‑119<br>
							Lost and Found Center: 182 / +82‑2‑182<br>
							Tourist Assistance (multiple languages): 1330 / +82‑2‑1330<br>
							Languages supported: English, Japanese, Chinese, Russian, Vietnamese, Thai, Indonesian<br>
							Infectious Disease Emergencies: 1339 / +82‑1339		
                        </p>
                    </div>
                </li>
            </ul>

        </div>
    </article>
@endsection

@section('addScript')

@endsection
