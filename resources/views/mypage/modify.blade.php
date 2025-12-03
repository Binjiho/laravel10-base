@extends('layouts.web-layout')

@section('addStyle')
@endsection

@section('contents')
    <article class="sub-contents">
        <div class="sub-conbox inner-layer">

            <form action="" method="post" id="register-frm" enctype="multipart/form-data" data-case="user-{{ !empty($user->sid) ? 'modify' : 'create' }}" data-sid="{{ !empty($user) ? $user->sid : 0 }}">
                <fieldset>

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
        const dataUrl = '{{ route('mypage.data') }}';

        const boardSubmit = () => {
            let ajaxData = newFormData(form);

            callMultiAjax(dataUrl, ajaxData);
        }
    </script>

    @yield('reg-script')
@endsection
