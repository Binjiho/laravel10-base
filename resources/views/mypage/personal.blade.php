@extends('layouts.web-layout')

@section('addStyle')
@endsection

@section('contents')
    <article class="sub-contents">
        <div class="sub-conbox inner-layer">

{{--            <div class="sub-tab-wrap">--}}
{{--                <ul class="sub-tab-menu">--}}
{{--                    <li class="{{ ($sub_key ?? '') == 'S1' ? 'on' : '' }}"><a href="#n">Home</a></li>--}}
{{--                    <li class="{{ ($sub_key ?? '') == 'S2' ? 'on' : '' }}"><a href="#n">Personal Information</a></li>--}}
{{--                    <li class="{{ ($sub_key ?? '') == 'S3' ? 'on' : '' }}"><a href="#n">Registration</a></li>--}}
{{--                    <li class="{{ ($sub_key ?? '') == 'S4' ? 'on' : '' }}"><a href="#n">Abstract Submission</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}

            <ul class="write-wrap">
                <li>
                    <div class="form-tit"><strong class="required">*</strong> Country of Residence</div>
                    <div class="form-con">{{ $country_list[$user->country]['name'] }}</div>
                </li>
                @if(($user->country ?? '') =='1')
                    <li>
                        <div class="form-tit"><strong class="required">*</strong> Nationality</div>
                        <div class="form-con">{{ $country_list[$user->nationality]['name'] }}</div>
                    </li>
                @endif
                <li>
                    <div class="form-tit"><strong class="required">*</strong> ID (E-mail)</div>
                    <div class="form-con">{{ $user->uid ?? '' }}</div>
                </li>

                <li>
                    <div class="form-tit"><strong class="required">*</strong> Name</div>
                    <div class="form-con">{{ $user->first_name ?? '' }} {{ $user->last_name ?? '' }}</div>
                </li>

                @if(($user->country ?? '') =='1')
                    <li>
                        <div class="form-tit"><strong class="required">*</strong> 성명 (국문)</div>
                        <div class="form-con">{{ $user->name_kr ?? '' }}</div>
                    </li>
                @endif
                <li>
                    <div class="form-tit"><strong class="required">*</strong> Mobile</div>
                    <div class="form-con">{{ $user->mobile ?? '' }}</div>
                </li>
                <li>
                    <div class="form-tit"><strong class="required">*</strong> Title</div>
                    <div class="form-con">
                        {{ $userConfig['title'][$user->title] ?? '' }}
                        @if( ($user->title ?? '') == 'Z' )
                            {{ $user->title_etc ?? '' }}
                        @endif
                    </div>
                </li>
                <li>
                    <div class="form-tit"><strong class="required">*</strong> Degree</div>
                    <div class="form-con">
                        {{ $userConfig['degree'][$user->degree] ?? '' }}
                        @if( ($user->degree ?? '') == 'Z' )
                            {{ $user->degree_etc ?? '' }}
                        @endif
                    </div>
                </li>
                <li>
                    <div class="form-tit"><strong class="required">*</strong> Gender</div>
                    <div class="form-con">
                        {{ $userConfig['gender'][$user->gender] ?? '' }}
                        @if( ($user->gender ?? '') == 'Z' )
                            {{ $user->gender_etc ?? '' }}
                        @endif
                    </div>
                </li>
                @if(($user->country ?? '') =='1')
                    <li>
                        <div class="form-tit"><strong class="required">*</strong> 의사면허번호</div>
                        <div class="form-con">{{ $user->license_number ?? '' }}</div>
                    </li>
                @endif
                <li>
                    <div class="form-tit"><strong class="required">*</strong> Address</div>
                    <div class="form-con">{{ $user->address ?? '' }}</div>
                </li>
                <li>
                    <div class="form-tit"><strong class="required">*</strong> City</div>
                    <div class="form-con">{{ $user->city ?? '' }}</div>
                </li>
                <li>
                    <div class="form-tit"><strong class="required">*</strong> Emergency Contact</div>
                    <div class="form-con">
                        <ul class="write-wrap">
                            <li>
                                <div class="form-tit"><strong class="required">*</strong> Name</div>
                                <div class="form-con">
                                    <div class="form-group n2">
                                        {{ $user->contact_first_name ?? '' }}
                                        {{ $user->contact_last_name ?? '' }}
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-tit"><strong class="required">*</strong> Relation</div>
                                <div class="form-con">
                                    {{ $user->contact_relation ?? '' }}
                                </div>
                            </li>
                            <li>
                                <div class="form-tit"><strong class="required">*</strong> Email</div>
                                <div class="form-con">
                                    {{ $user->contact_email ?? '' }}
                                </div>
                            </li>
                        </ul>

                    </div>
                </li>
                <li>
                    <div class="form-tit"><strong class="required">*</strong> Source</div>
                    <div class="form-con">
                        @php
                            if(!empty($user)){
                                $selected = explode(',', $user->source);
                                $labels = [];
                                foreach ($selected as $code) {
                                    $label = $userConfig['source'][$code] ?? $code;
                                    if ($code === 'Z' && !empty($user->source_etc)) {
                                       $label .= ' (' . $user->source_etc . ')';
                                    }
                                    $labels[] = $label;
                                }
                            }
                        @endphp
                        {{ implode(', ', $labels) }}
                    </div>
                </li>
            </ul>

            <div class="btn-wrap text-center">
                <a href="{{ route('mypage.modify') }}" class="btn btn-type1 color-type5 btn-line">Modify</a>
            </div>

        </div>
    </article>
@endsection

@section('addScript')

@endsection
