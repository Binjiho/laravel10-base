@extends('layouts.web-layout')

@section('addStyle')
@endsection

@section('contents')
    <article class="sub-contents">
        <div class="sub-conbox inner-layer">

            <!-- s:login -->
            <div class="login-wrap">
                <div class="login-form">
                    <form id="login-frm" method="post">
                        <fieldset>
                            <legend class="hide">LOGIN</legend>
                            <div class="login-tit-wrap">
                                <span class="icon">
                                    <img src="/assets/image/sub/ic_login.png" alt="">
                                </span>
                                <h3 class="login-tit">Login</h3>
                            </div>
                            <p class="info-text m-hide">If you have already signed up, please log in with your ID(E-mail) and password.</p>
                            <div class="input-box">
                                <input type="text" name="uid" id="uid" class="form-item" placeholder="ID (E-mail)">
                                <input type="password" name="password" id="password" class="form-item mt-10" placeholder="Password">
                                <button type="submit" class="btn btn-login color-type1">LOGIN</button>
                            </div>
                            <div class="btn-wrap">
                                <p class="m-show">* Forgotten your ID (E-mail)?</p>
                                <a href="{{ route('auth.forget-id') }}" class="btn btn-login-link btn-line color-type1">Find ID (E-mail)</a>
                                <p class="m-show">* Forgotten your password?</p>
                                <a href="{{ route('auth.forget-password') }}" class="btn btn-login-link btn-line color-type1">Find Password</a>
                            </div>
                            <div class="btn-wrap mt-10">
                                <p class="text-pink help-text">* Please sign up if this is your first visit.</p>
                                <a href="{{ route('auth.signup') }}" class="btn btn-login-link btn-link color-type2">Sign up</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!-- //e:login-->

        </div>
    </article>
@endsection

@section('addScript')
    <script>
        const form = '#login-frm';
        const dataUrl = '{{ route('login') }}';

        $(document).on('submit', form, function () {

            const uid = $('#uid');
            if (isEmpty(uid.val())) {
                alert('Please enter ID(E-mail)');
                uid.focus();
                return false;
            }

            const password = $('#password');
            if (isEmpty(password.val())) {
                alert('Please enter Password');
                password.focus();
                return false;
            }

            callAjax(dataUrl, formSerialize(form));
        });
    </script>
@endsection
