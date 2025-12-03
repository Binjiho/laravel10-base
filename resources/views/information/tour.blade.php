@extends('layouts.web-layout')

@section('addStyle')
@endsection

@section('contents')
    <article class="sub-contents">
        <div class="sub-conbox inner-layer">

			<div class="page-tit-wrap">
				<h3 class="page-tit">Tour Informaiton</h3>
			</div>

            <div class="sub-tit-wrap mt-0">
                <h4 class="sub-tit">Useful websites to plan you own tour</h4>
            </div>

            <!-- <div class="information-title-wrap">
                <p>Useful website to plan you own tour</p>
            </div>
 -->
            <ul class="tour-list">
                <li>
                    <a href="https://eng-itour.incheon.go.kr/cmn/main/main.do?xndjdlscjs=1" target="_blank">
                        <div class="inner">
                            <img src="/assets/image/sub/img_tour01.png" class="logo" alt="Incheon TOUR">
                            <p>Incheon TOUR</p>
                            <img src="/assets/image/sub/ico_tour_arrow.png" class="ico" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="https://english.visitkorea.or.kr/svc/main/index.do" target="_blank">
                        <div class="inner">
                            <img src="/assets/image/sub/img_tour02.png" class="logo" alt="Visit Korea">
                            <p>Visit Korea</p>
                            <img src="/assets/image/sub/ico_tour_arrow.png" class="ico" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="https://www.hyatt.com/grand-hyatt/en-US/inche-grand-hyatt-incheon/events-and-attractions" target="_blank">
                        <div class="inner">
                            <img src="/assets/image/sub/img_tour03.png" class="logo" alt="Program suggested by GRAND HYATT">
                            <p>Program suggested by GRAND HYATT</p>
                            <img src="/assets/image/sub/ico_tour_arrow.png" class="ico" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://www.seoulmetro.co.kr/en/cyberStation.do?menuIdx=337" target="_blank">
                        <div class="inner">
                            <img src="/assets/image/sub/img_tour04.png" class="logo" alt="Seoul Metro">
                            <p>Seoul Metro</p>
                            <img src="/assets/image/sub/ico_tour_arrow.png" class="ico" alt="">
                        </div>
                    </a>
                </li>
            </ul>

        </div>
    </article>
@endsection

@section('addScript')

@endsection
