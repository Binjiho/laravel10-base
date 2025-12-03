@extends('layouts.web-layout')

@section('addStyle')
@endsection

@section('contents')
    <article class="sub-contents">
        <div class="sub-conbox inner-layer">

			<div class="page-tit-wrap">
				<h3 class="page-tit">Committee</h3>
			</div>

            <div class="sub-tit-wrap mt-0">
                <h4 class="sub-tit">President of APKASS </h4>
            </div>
            <div class="table-wrap">
                <table class="cst-table">
                    <caption class="hide">Committee</caption>
                    <colgroup>
                        <col>
                    </colgroup>
                    <thead>
                    <!-- <tr>
                        <th>President of APKASS</th>
                    </tr> -->
                    </thead>
                    <tbody>
                    <tr>
                        <th>Kyoung Ho Yoon</th>
						<td>Kyung Hee University</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            
			<div class="sub-tit-wrap">
                <h4 class="sub-tit">Organizing Committee of APKASS 2026 Korea & ICKAS 2026</h4>
            </div>
            <div class="table-wrap scroll-x touch-help">
                <table class="cst-table">
                    <caption class="hide">Committee</caption>
                    <colgroup>
                        <col style="width: 20%;">
                        <col style="width: 15%;">
                        <col style="width: 10%;">
                        <col style="width: 30%;">
                        <col>
                    </colgroup>
                    <thead>
                    <!-- <tr>
                        <th colspan="5">Organizing Committee of APKASS 2026 Korea &amp; ICKAS 2026</th>
                    </tr> -->
                    </thead>
                    <tbody>
                    <tr>
                        <th colspan="3">Congress Chairman</th>
                        <td>Joo Han Oh</td>
                        <td class="text-left">Seoul National University</td>
                    </tr>
                    <tr>
                        <th colspan="3" rowspan="4">Advisory Committee</th>
                        <td>Jin Goo Kim</td>
                        <td class="text-left">Myongji Hospital</td>
                    </tr>
                    <tr>
                        <td>Jin-Young Park</td>
                        <td class="text-left">NEON Orthopaedic Clinic</td>
                    </tr>
                    <tr>
                        <td>Myung Chul Lee</td>
                        <td class="text-left">SNU Seoul Hospital</td>
                    </tr>
                    <tr>
                        <td>Yong Girl Rhee</td>
                        <td class="text-left">Myongji Hospital</td>
                    </tr>
                    <tr>
                        <th colspan="3" rowspan="2">Secretary-General</th>
                        <td>Ki-Mo Jang</td>
                        <td class="text-left">Korea University</td>
                    </tr>
                    <tr>
                        <td>Seok Won Chung</td>
                        <td class="text-left">Konkuk University</td>
                    </tr>
                    <tr>
                        <th colspan="3" rowspan="2">Deputy Secretary-General</th>
                        <td>Sang-Gyun Kim</td>
                        <td class="text-left">National Medical Center</td>
                    </tr>
                    <tr>
                        <td>Seong Hun Kim</td>
                        <td class="text-left">NHIS ILSAN Hospital</td>
                    </tr>
                    <tr>
                        <th rowspan="48">Scientific Committee</th>
                        <th colspan="2">Chair</th>
                        <td>Jong-Keun Seon</td>
                        <td class="text-left">Chonnam National University</td>
                    </tr>
                    <tr>
                        <th colspan="2" rowspan="2">Vice Chair</th>
                        <td>Sae hoon Kim</td>
                        <td class="text-left">Seoul National University</td>
                    </tr>
                    <tr>
                        <td>Sang Hak Lee</td>
                        <td class="text-left">Kyung Hee University</td>
                    </tr>
                    <tr>
                        <th colspan="2" rowspan="2">Secretary</th>
                        <td>Sung Min Rhee</td>
                        <td class="text-left">Kyung Hee University</td>
                    </tr>
                    <tr>
                        <td>Jun-Ho Kim</td>
                        <td class="text-left">Hallym University</td>
                    </tr>
                    <tr>
                        <th rowspan="9">Knee Subcommittee</th>
                        <th>Chair</th>
                        <td>Sung-Hwan Kim</td>
                        <td class="text-left">Yonsei University</td>
                    </tr>
                    <tr>
                        <th rowspan="8">Member</th>
                        <td>Gi Beom Kim</td>
                        <td class="text-left">Yeungnam University</td>
                    </tr>
                    <tr>
                        <td>Dong Jin Ryu</td>
                        <td class="text-left">Inha University</td>
                    </tr>
                    <tr>
                        <td>Ki-Bong Park</td>
                        <td class="text-left">University of Ulsan</td>
                    </tr>
                    <tr>
                        <td>Doyoung Park</td>
                        <td class="text-left">Ajou University</td>
                    </tr>
                    <tr>
                        <td>Yong-beom Park</td>
                        <td class="text-left">Chung-Ang University</td>
                    </tr>
                    <tr>
                        <td>Sung-Sahn Lee</td>
                        <td class="text-left">Inje University </td>
                    </tr>
                    <tr>
                        <td>Sang Woo Jeon</td>
                        <td class="text-left">Ewha Womans University</td>
                    </tr>
                    <tr>
                        <td>Kwang Ho Chung</td>
                        <td class="text-left">Yonsei University</td>
                    </tr>
                    <tr>
                        <th rowspan="12">Shoulder and Elbow Subcommittee</th>
                        <th>Chair</th>
                        <td>Jong Pil Yoon</td>
                        <td class="text-left">Kyungpook National University</td>
                    </tr>
                    <tr>
                        <th rowspan="11">Member</th>
                        <td>Youngbok Kim</td>
                        <td class="text-left">Barungil Hospital</td>
                    </tr>
                    <tr>
                        <td>Yong Tae Kim</td>
                        <td class="text-left">Hallym University</td>
                    </tr>
                    <tr>
                        <td>JungHan Kim</td>
                        <td class="text-left">Inje University </td>
                    </tr>
                    <tr>
                        <td>Hyojune Kim</td>
                        <td class="text-left">Chung-Ang University</td>
                    </tr>
                    <tr>
                        <td>Sung Il Wang</td>
                        <td class="text-left">Jeonbuk National University</td>
                    </tr>
                    <tr>
                        <td>JI YOUNG Yoon </td>
                        <td class="text-left">National Police Hospital</td>
                    </tr>
                    <tr>
                        <td>Tae-Hwan Yoon</td>
                        <td class="text-left">Yonsei University</td>
                    </tr>
                    <tr>
                        <td>Sung-Min Rhee</td>
                        <td class="text-left">Kyung Hee University</td>
                    </tr>
                    <tr>
                        <td>Woo-Yong Lee</td>
                        <td class="text-left">Chungnam National University</td>
                    </tr>
                    <tr>
                        <td>Young Dae Jeon</td>
                        <td class="text-left">University of Ulsan</td>
                    </tr>
                    <tr>
                        <td>Ho-Seung Jeong</td>
                        <td class="text-left">Chungbuk National University</td>
                    </tr>
                    <tr>
                        <th rowspan="6">Hand Subcommittee</th>
                        <th>Chair</th>
                        <td>Yun-Rak Choi</td>
                        <td class="text-left">Yonsei University</td>
                    </tr>
                    <tr>
                        <th rowspan="5">Member</th>
                        <td>Ji-Sup Kim</td>
                        <td class="text-left">Ewha Womans University</td>
                    </tr>
                    <tr>
                        <td>Won-Taek Oh</td>
                        <td class="text-left">Yonsei University</td>
                    </tr>
                    <tr>
                        <td>Jung Il Lee</td>
                        <td class="text-left">Korea University</td>
                    </tr>
                    <tr>
                        <td>Hyun Il Lee</td>
                        <td class="text-left">Inje University </td>
                    </tr>
                    <tr>
                        <td>Soo-min Cha</td>
                        <td class="text-left">Chungnam National University</td>
                    </tr>
                    <tr>
                        <th rowspan="7">Foot and Ankle Subcommittee</th>
                        <th>Chair</th>
                        <td>Young Koo Lee</td>
                        <td class="text-left">Soon Chun Hyang University</td>
                    </tr>
                    <tr>
                        <th rowspan="6">Member</th>
                        <td>Woo Jong Kim</td>
                        <td class="text-left">Soon Chun Hyang Cheonan University</td>
                    </tr>
                    <tr>
                        <td>Kwang Hwan Park</td>
                        <td class="text-left">Yonsei University</td>
                    </tr>
                    <tr>
                        <td>Chul Hyun Park</td>
                        <td class="text-left">Yeungnam University</td>
                    </tr>
                    <tr>
                        <td>Gun-Woo Lee</td>
                        <td class="text-left">Chonnam National University</td>
                    </tr>
                    <tr>
                        <td>Sung Hyun Lee</td>
                        <td class="text-left">CHA University</td>
                    </tr>
                    <tr>
                        <td>Gi Won Choi</td>
                        <td class="text-left">Korea University</td>
                    </tr>
                    <tr>
                        <th rowspan="5">Hip Subcommittee</th>
                        <th>Chair</th>
                        <td>Jung-Mo Hwang</td>
                        <td class="text-left">Chungnam National University</td>
                    </tr>
                    <tr>
                        <th rowspan="4">Member</th>
                        <td>Kyungsoon Park</td>
                        <td class="text-left">Chonnam National University</td>
                    </tr>
                    <tr>
                        <td>Suk-kyoon Song</td>
                        <td class="text-left">Daegu Catholic University</td>
                    </tr>
                    <tr>
                        <td>Sun Jung Yoon</td>
                        <td class="text-left">Jeonbuk National University</td>
                    </tr>
                    <tr>
                        <td>Suenghwan Jo</td>
                        <td class="text-left">Chosun University</td>
                    </tr>
                    <tr>
                        <th rowspan="4">Spine Subcommittee</th>
                        <th>Chair</th>
                        <td>Sang-Min Park</td>
                        <td class="text-left">Seoul National University</td>
                    </tr>
                    <tr>
                        <th rowspan="3">Member</th>
                        <td>Ji-Won Kwon</td>
                        <td class="text-left">Yonsei University</td>
                    </tr>
                    <tr>
                        <td>Hyun-Jin Park</td>
                        <td class="text-left">Hallym University</td>
                    </tr>
                    <tr>
                        <td>Ho-Jin Lee</td>
                        <td class="text-left">Madi-son Orthopedics</td>
                    </tr>
                    <tr>
                        <th rowspan="6">Finance Committee</th>
                        <th colspan="2">Chair</th>
                        <td>Jae Chul Yoo</td>
                        <td class="text-left">Sungkyunkwan University</td>
                    </tr>
                    <tr>
                        <th colspan="2" rowspan="2">Vice Chair</th>
                        <td>Sang Hoon Lee</td>
                        <td class="text-left">SNU Seoul Hospital</td>
                    </tr>
                    <tr>
                        <td>Tae-Yon Rhie</td>
                        <td class="text-left">Nalgae Hospital</td>
                    </tr>
                    <tr>
                        <th colspan="2">Secretary</th>
                        <td>Moon Jong Chang</td>
                        <td class="text-left">Seoul National University College of Medicine, SMG-SNU BORAMAE MEDICAL CENTER</td>
                    </tr>
                    <tr>
                        <th colspan="2" rowspan="2">Assistant Secretary </th>
                        <td>Jae Hoo Lee</td>
                        <td class="text-left">Inje University </td>
                    </tr>
                    <tr>
                        <td>Man Soo Kim</td>
                        <td class="text-left">Catholic Univesrity of Korea</td>
                    </tr>
                    <tr>
                        <th rowspan="2">International Affairs Committee</th>
                        <th colspan="2">Chair</th>
                        <td>Joon Ho Wang</td>
                        <td class="text-left">Sungkyunkwan University</td>
                    </tr>
                    <tr>
                        <th colspan="2">Vice Chair</th>
                        <td>Min Jung</td>
                        <td class="text-left">Yonsei University</td>
                    </tr>
                    <tr>
                        <th rowspan="2">Public Relations Committee</th>
                        <th colspan="2">Chair</th>
                        <td>Chong Bum Chang</td>
                        <td class="text-left">Seoul National University</td>
                    </tr>
                    <tr>
                        <th colspan="2">Vice Chair</th>
                        <td>Won Chul Choi</td>
                        <td class="text-left">CHA University</td>
                    </tr>
                    <tr>
                        <th rowspan="2">Events &amp; Communications Committee</th>
                        <th colspan="2">Chair</th>
                        <td>Seung Hwan Han</td>
                        <td class="text-left">Yonsei University</td>
                    </tr>
                    <tr>
                        <th colspan="2">Vice Chair</th>
                        <td>Gi Won Choi</td>
                        <td class="text-left">Korea University</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </article>
@endsection

@section('addScript')

@endsection
