@extends('layouts.web-layout')

@section('addStyle')
@endsection

@section('contents')
    <article class="sub-contents">
        <div class="sub-conbox inner-layer">

{{--            <div class="sub-tab-wrap">--}}
{{--                <ul class="sub-tab-menu">--}}
{{--                    <li class="on"><a href="#n">Home</a></li>--}}
{{--                    <li><a href="#n">Personal Information</a></li>--}}
{{--                    <li><a href="#n">Registration</a></li>--}}
{{--                    <li><a href="#n">Abstract Submission</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}

            <div class="welcome-box">
                <p class="welcome-text">
                    Welcome <span class="user-name">{{ $user->first_name ?? '' }} {{ $user->last_name ?? '' }}</span>
                </p>
            </div>

            <div class="sub-tit-wrap">
                <h4 class="sub-tit">Personal Information</h4>
            </div>

            <ul class="write-wrap">
                <li class="n2">
                    <div class="form-tit">Country of Residence</div>
                    <div class="form-con">{{ $country_list[$user->country]['name'] }}</div>
                    <div class="form-tit">Name</div>
                    <div class="form-con">{{ $user->first_name ?? '' }} {{ $user->last_name ?? '' }}</div>
                </li>
                <li class="n2">
                    <div class="form-tit">ID (E-mail)</div>
                    <div class="form-con">{{ $user->uid ?? '' }}</div>
                    <div class="form-tit">Affiliation</div>
                    <div class="form-con">{{ $user->affi ?? '' }}</div>
                </li>
            </ul>
            <div class="btn-wrap text-center">
                <a href="{{ route('mypage.personal') }}" class="btn btn-type1 color-type5 btn-line">Review & Modify</a>
            </div>

        </div>
    </article>
@endsection

@section('addScript')

@endsection
