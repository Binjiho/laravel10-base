@extends('layouts.web-layout')

@section('addStyle')
@endsection

@section('contents')
    <article class="sub-contents">
        <div class="sub-conbox inner-layer">
			<div class="page-tit-wrap">
				<h3 class="page-tit">Venue</h3>
			</div>

            <div class="sub-tit-wrap mt-0">
                <h4 class="sub-tit">GRAND HYATT INCHEON</h4>
            </div>

            <!-- <div class="information-title-wrap">
                <p>GRAND HYATT INCHEON</p>
            </div> -->
            <div class="venue-wrap">
                <div class="venue-slider-wrap">
                    <div class="venue-rolling js-venue-rolling">
                        <img src="/assets/image/sub/img_venue01.jpg" alt="">
                        <img src="/assets/image/sub/img_venue02.jpg" alt="">
                        <img src="/assets/image/sub/img_venue03.jpg" alt="">
                        <img src="/assets/image/sub/img_venue04.jpg" alt="">
                    </div>
                    <div class="btn-wrap">
                        <a href="https://www.hyatt.com/grand-hyatt/en-US/inche-grand-hyatt-incheon" target="_blank" class="btn btn-type1 color-type6">View More About the Hotel</a>
                    </div>
                </div>
                <div class="text-wrap">
                    <!-- <p class="title">Grand Hyatt Incheon is a premium five-star hotel located just minutes from Incheon International Airport.</p> -->
                    <p>Grand Hyatt Incheon, a premier five-star hotel located just minutes away from Incheon International Airport, offers world-class comfort and convenience for international travelers. The hotel features two iconic towers connected by a sky bridge, housing over 1,000 elegantly designed guest rooms and suites. With its sophisticated event facilities, including spacious ballrooms and modern meeting rooms, Grand Hyatt Incheon serves as an ideal venue for international conferences, business events, and private gatherings.</p>
					<p>Guests can enjoy a wide range of premium amenities such as an indoor swimming pool, fitness center, spa, and multiple dining options offering global cuisine. The hotel’s proximity to Incheon Airport ensures seamless access, while complimentary shuttle services provide easy transportation between the terminals and the hotel.</p>

                </div>
                <!-- <div class="info-wrap">
                    <dl>
                        <dt>
                            <img src="/assets/image/sub/ico_venue_address.png" alt="">
                            <p>Address</p>
                        </dt>
                        <dd>208, Yeongjonghaeannam-ro 321beon-gil, Jung-gu, Incheon, 22382</dd>
                    </dl>
                    <dl>
                        <dt>
                            <img src="/assets/image/sub/ico_venue_tel.png" alt="">
                            <p>Tel</p>
                        </dt>
                        <dd>+82-32-745-1234</dd>
                    </dl>
                    <dl>
                        <dt>
                            <img src="/assets/image/sub/ico_venue_web.png" alt="">
                            <p>Website</p>
                        </dt>
                        <dd>
                            <a href="https://www.hyatt.com/grand-hyatt/en-US/inche-grand-hyatt-incheon" target="_blank" class="link">
                                https://www.hyatt.com/grand-hyatt/en-US/inche-grand-hyatt-incheon
                            </a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <img src="/assets/image/sub/ico_venue_location.png" alt="">
                            <p>Location</p>
                        </dt>
                        <dd>Near Incheon International Airport with shuttle access.</dd>
                    </dl>
                </div> -->
                <div class="table-wrap mt-30 mb-30">
                    <table class="cst-table">
                        <caption class="hide">Venue</caption>
                        <colgroup>
                            <col style="width: 25%;">
                            <col>
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="row">Address</th>
                                <td class="text-left">208, Yeongjonghaeannam-ro 321beon-gil, Jung-gu, Incheon, 22382</td>
                            </tr>
                            <tr>
                                <th scope="row">Tel</th>
                                <td class="text-left"><a href="tel:+82-32-745-1234" target="_blank">+82-32-745-1234</a></td>
                            </tr>
                            <tr>
                                <th scope="row">Website</th>
                                <td class="text-left"><a href="https://www.hyatt.com/grand-hyatt/en-US/inche-grand-hyatt-incheon" target="_blank" class="link">https://www.hyatt.com/grand-hyatt/en-US/inche-grand-hyatt-incheon</a></td>
                            </tr>
                            <tr>
                                <th scope="row">Location</th>
                                <td class="text-left">Near Incheon International Airport with shuttle access.</td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="map-wrap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3167.8564102014243!2d126.45487587629236!3d37.440496731344844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b9a678d098055%3A0xfeedb6966dec5a74!2sGrand%20Hyatt%20Incheon!5e0!3m2!1sen!2skr!4v1764226337437!5m2!1sen!2skr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>


        </div>
    </article>
@endsection

@section('addScript')

@endsection
