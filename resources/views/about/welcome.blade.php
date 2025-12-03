@extends('layouts.web-layout')

@section('addStyle')
@endsection

@section('contents')
    <article class="sub-contents">
        <div class="sub-conbox inner-layer">
			<div class="page-tit-wrap">
				<h3 class="page-tit">Welcome Message</h3>
			</div>

            <div class="tab-wrap">
                <div class="sub-tab-wrap">
                    <ul class="sub-tab-menu js-tab-menu">
                        <li class="on"><a href="#n">Welcome Message from President of APKASS</a></li>
                        <li><a href="#n">Welcome Message from Congress Chairman</a></li>
                    </ul>
                </div>

                <div class="sub-tab-con js-tab-con" style="display: block;">
                    <div class="welcome-wrap">
                        <div class="text-con">
                            <p>Dear colleagues and distinguished guests,</p>
                            <p>As the president of APKASS (Asia-Pacific Knee, Arthroscopy, Arthroplasty, Shoulder, and Sports Medicine Society) and a proud Korean, it is my great honor to host this conference in Incheon. </p>
                            <p>APKASS has long been a leading organization in joint surgery, arthroscopy, and sports medicine, and our conference has become a key platform for advancing research and clinical practices. With the recent expansion to include Shoulder and Arthroplasty in 2025, APKASS continues to grow, addressing the diverse needs of our members and promoting advancements in musculoskeletal health.</p>
                            <p>This year’s conference will bring together experts from various specialties, further strengthening APKASS’s position as a global leader in our field. We are honored to have specialists from renowned organizations such as ISAKOS, SLARD, AOSSM, ESSKA, and ICRS whose presence will offer invaluable opportunities for collaboration and knowledge exchange.</p>
                            <p>I hope this conference provides you with opportunities for academic development, networking, and lasting connections. Once again, welcome to Incheon, and I look forward to the inspiring exchanges ahead.</p>
                        </div>
                        <div class="name-box text-right">
                            <div class="img-wrap">
                                <img src="/assets/image/sub/img_welcome01.png" alt="">
                            </div>
                            <p class="name">
                                <strong>Kyoung Ho Yoon, MD, PhD</strong><br>
                                President, APKASS
                            </p>
                        </div>
                    </div>
                </div>

                <div class="sub-tab-con js-tab-con">
                    <div class="welcome-wrap">
                        <div class="text-con">
                            <p>Dear Colleagues and Friends,</p>
                            <p>On behalf of the Organizing Committee, it is my great pleasure to welcome you to the APKASS 2026 conference, held in conjunction with the 2026 Annual International Congress of the Korean Arthroscopy Society (APKASS 2026 Korea & ICKAS 2026), co-hosted by Asia-Pacific Knee, Arthroscopy, Arthroplasty, Shoulder, and Sports Medicine Society and the Korean Arthroscopy Society. This event is particularly special as it marks the first time the APKASS Congress is being held in South Korea. </p>
                            <p>The theme of this year, <strong class="italic">'From Asia-Pacific Heritage to Global Horizons’</strong>, reflects our commitment to advancing joint surgery and sports medicine worldwide, fostering collaboration and sharing cutting-edge research across various disciplines.</p>
                            <p>In line with this vision, the APKASS 2026 will feature a diverse range of sessions, including joint-specific discussions on Knee, Shoulder, Hip & Pelvis, Foot & Ankle, Wrist & Elbow, and Spine. Attendees can expect in-depth insights into orthopedic research, encompassing arthroscopy, arthroplasty, and sports medicine. The scientific program will include Plenary and Keynote Lectures, ICL Sessions, Free Paper Presentations, and Poster Exhibitions, providing plentiful opportunities for knowledge exchange. This year marks our inaugural Live Surgery Symposium, and we will also hold combined sessions with international organizations such as ISAKOS, SLARD, ASSOM, ESSKA, AFSM, and ICRS facilitating collaboration with global experts. </p>
                            <p>As you participate in the APKASS 2026, we encourage you to experience the beauty of Incheon and the stunning autumn weather of Korea. The convention venue, located by the sea, offers an ideal setting for both academic discussions and relaxation.</p>
                            <p>We look forward to welcoming you to Incheon and hope you have a rewarding and memorable experience.</p>
                        </div>
                        <div class="name-box text-right">
                            <div class="img-wrap">
                                <img src="/assets/image/sub/img_welcome02.png" alt="">
                            </div>
                            <p class="name">
                                <strong>Joo Han Oh, MD, PhD</strong><br>
                                Congress Chairman, APKASS 2026 Korea
                            </p>
                        </div>
                    </div>
                </div>
            </div><!--// tab-wrap -->

        </div>
    </article>
@endsection

@section('addScript')

@endsection
