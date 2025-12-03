@extends('layouts.web-layout')

@section('addStyle')
@endsection

@section('contents')
    <article class="sub-contents">
        <div class="sub-conbox inner-layer">

            <div class="sub-tit-wrap">
                <h4 class="sub-tit">Sign-Up</h4>
            </div>
            <form action="" method="">
                <fieldset>
                    <legend class="hide">Sign-Up</legend>

                    <div class="complete-box">
                        <img src="/assets/image/sub/img_complete.png" alt="">
                        <h2 class="title">Thank you for filling out your information.</h2>
                        <p class="des">Below is what we have received from you.<br>Please check if everything is correct.</p>
                    </div>

                    <ul class="write-wrap w-800">
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
                            <div class="form-con">                  {{ ($user->license_yn ?? '') == 'N' ? '면허번호 없음' : $user->license_number ?? '' }}</div>
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
                            <div class="form-con">{{ $user->contact_first_name ?? '' }} {{ $user->contact_last_name ?? '' }} {{ $user->contact_relation ?? '' }} {{ $user->contact_email ?? '' }}</div>
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
                        <a href="{{ env("APP_URL") }}/main" class="btn btn-type1 color-type4 btn-line">HOME</a>
                        <a href="{{ route('mypage') }}" class="btn btn-type1 color-type1">My page</a>
                        <a href="javascript:;" class="btn btn-type1 color-type5">Go to Abstract Submission</a>
                        <a href="javascript:;" class="btn btn-type1 color-type2">Go to Online Registration</a>
                    </div>

                </fieldset>
            </form>

        </div>
    </article>
@endsection

@section('addScript')
    <script>
        const form = '#register-frm';
        const dataUrl = '{{ route('auth.data') }}';

        const boardSubmit = () => {
            let ajaxData = newFormData(form);

            callMultiAjax(dataUrl, ajaxData);
        }
    </script>

    @yield('reg-script')
@endsection
