@extends('layouts.web-layout')

@section('addStyle')
@endsection

@section('contents')
    <article class="sub-contents">
        <div class="sub-conbox inner-layer">

            <!-- s:login -->
            <div class="login-wrap">
                <div class="login-form">
                    <form id="forget-frm" action="" method="post" data-case="forget-uid">
                        <fieldset>
                            <legend class="hide">Forgotten your ID (E-mail) </legend>
                            <div class="login-tit-wrap">
                                <span class="icon">
                                    <img src="/assets/image/sub/ic_find_id.png" alt="">
                                </span>
                                <h3 class="login-tit">Forgotten your ID (E-mail) </h3>
                            </div>
                            <div class="input-box">
                                <p>Last Name</p>
                                <input type="text" name="last_name" id="last_name" class="form-item" placeholder="" enname>
                                <p class="mt-10">The last 4 digits of your phone number</p>
                                <input type="text" name="mobile" id="mobile" class="form-item" placeholder="" maxlength="4" onlyNumber>
                                <button type="submit" class="btn btn-find color-type1">Search</button>
                            </div>

                            <div class="result-conbox text-center" style="display: none;">
                                <dd id="result_text">

                                </dd>
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
        const frm = '#forget-frm';
        const dataUrl = '{{ route('auth.data') }}';

        $(document).on('submit', frm, function () {

            const last_name = $('#last_name');
            if (isEmpty(last_name.val())) {
                alert('Please enter Last Name');
                last_name.focus();
                return false;
            }

            const mobile = $('#mobile');
            if (isEmpty(mobile.val())) {
                alert('Please enter mobile');
                mobile.focus();
                return false;
            }

            callAjax(dataUrl, formSerialize(frm));
        });
    </script>
@endsection
