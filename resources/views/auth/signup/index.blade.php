@extends('layouts.web-layout')

@section('addStyle')
@endsection

@section('contents')
    <article class="sub-contents">
        <div class="sub-conbox inner-layer">

            <div class="sub-tit-wrap">
                <h4 class="sub-tit">Sign-Up</h4>
            </div>
            <form action="" method="post" id="register-frm" enctype="multipart/form-data" data-case="user-{{ !empty($user->sid) ? 'modify' : 'create' }}" data-sid="{{ !empty($user) ? $user->sid : 0 }}">
                <fieldset>

                    <legend class="hide">Privacy Policy</legend>
                    <div class="con-tit-wrap mt-0">
                        <h4 class="con-tit">Privacy Policy</h4>
                    </div>
					<div>
                        <p>
                            This privacy policy sets out how APKASS 2026 Korea & ICKAS 2026 uses and protects any information when you use this website.
                        </p>
                        <p>
                            APKASS 2026 Korea & ICKAS 2026 is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which 
                            you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement.
                        </p>
                        <p>
                            This website is operated by APKASS 2026 Korea & ICKAS 2026, and this privacy policy applies to this website only.
                        </p>
                    </div>
                    <div class="term-wrap scroll-y mt-10">
                        <div class="term-conbox">
                           
                            <p><strong>Purposes</strong></p>
                            <p>
                                The APKASS 2026 Korea & ICKAS 2026 website provides essential services for the operation of the scientific meeting, including online abstract submission,
                                online pre-registration, and the distribution of promotional newsletters.<br>
                                The personal information you provide will be collected and used solely for the purpose of ensuring smooth service delivery, such as abstract submission,
                                registration fee payment, conference notifications, and promotional newsletter distribution.
                            </p>
                            <p><strong>Items of Personal Information Collection</strong></p>
                            <p>
                                To complete online pre-registration or abstract submission, you are required to provide certain personal information. The following details will be
                                collected: Country of Residence, Nationality, E-mail, Name, Mobile Number, Affiliation, Title, Degree, Gender, Address, City, and Emergency Contact.
                            </p>
                            <p><strong>Retention and Use of Personal Information</strong></p>
                            <p>
                                APKASS 2026 Korea & ICKAS 2026 will retain your personal information to provide you with relevant services, including conference updates and newsletters.
                            </p>
                        </div>
                    </div>
                    <div class="checkbox-wrap cst text-center">
                        <label class="checkbox-group">
                            <input type="checkbox" name="agree" id="agree" value="Y" {{ ($user->agree ?? '') == 'Y' ? 'checked' : '' }}>I agree to the collection and use of my personal information.
                        </label>
                    </div>
                    <p class="text-blue text-right">* All fields marked an asterisk(<span class="required">*</span>) should be completed.</p>

                    @include("auth.signup.form.register-frm")

                    @if(checkUrl() != 'admin')
                    <div class="con-tit-wrap">
                        <h4 class="con-tit">Security Check</h4>
                    </div>
                    <ul class="write-wrap">
                        <li>
                            <div class="form-con">
                                @include('components.captcha')
                                <p class="text-blue mt-10">* For information security, you can register as a member after entering the text written below.</p>
                            </div>
                        </li>
                    </ul>
                    @endif

                    <div class="btn-wrap text-center">
                        <a href="{{ route('main') }}" class="btn btn-type1 color-type4 btn-line">Cancel</a>
                        <button type="submit" class="btn btn-type1 color-type2">{{ !empty($user->sid) ? 'Modify' : 'Submit' }}</button>
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
