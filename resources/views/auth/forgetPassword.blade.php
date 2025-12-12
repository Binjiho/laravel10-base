@extends('layouts.web-layout')

@section('addStyle')
@endsection

@section('contents')
    <article class="sub-contents">
        <div class="sub-conbox inner-layer">

            <!-- s:login -->
            <div class="login-wrap">
                <div class="login-form">
                    <form id="forget-frm" action="" method="post" data-case="forget-password">
                        <fieldset>
                            <legend class="hide">Forgotten your password?</legend>
                            <div class="login-tit-wrap">
                                <span class="icon">
                                    <img src="/assets/image/sub/ic_find_pw.png" alt="">
                                </span>
                                <h3 class="login-tit">Forgotten your password?</h3>
                            </div>
                            <p>
                                If you do not remember your password, please enter your ID(Email).<br>
                                Temporary password will be sent out to your e-mail. <br>
                                After logging in with the temporary password, you can change it under My Page &gt; Personal Information.
                            </p>
                            <div class="input-box mt-20">
                                <p>ID (E-mail)</p>
                                <input type="text" name="uid" id="uid" class="form-item" placeholder="ID (E-mail)" emailOnly>
                                <button type="submit" class="btn btn-find color-type1">Find Password</button>
                            </div>
                            <p class="mt-10 help-text">- If you do not remember your e-mail address, please proceed with the “Find ID” step first.</p>
                            <!-- 25.12.10 -->
                            <div class="btn-wrap type-pw mt-10">
                                <a href="{{ route('auth.forget-id') }}" class="btn btn-small btn-line color-type1">Find ID </a>
                            </div>
                            <!--// 25.12.10 -->

                            {{-- 비밀번호 카운팅 메세지 --}}
                            <div class="result-conbox text-center" style="display: none;">
                                <p>The temporary password is <span class="text-blue" id="tempPassword">oooo</span>.</p>
                                The displayed password will disappear after 5 minutes (<span class="count">00:05:00</span>).
                                <br>
                                You may also check the temporary password sent to your email.
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

        defaultVaildation();

        $(frm).validate({
            rules: {
                uid: {
                    isEmpty: true,
                },
            },
            messages: {
                uid: {
                    isEmpty: 'Please enter ID (E-mail).',
                },

            },
            submitHandler: function () {
                boardSubmit();
            }
        });

        const boardSubmit = () => {

            let ajaxData = {
                'uid': $("#uid").val(),
                'case': 'forget-password',
            };

            callbackAjax(dataUrl, ajaxData, function(data, error) {
                if (data) {
                    $(".result-conbox").hide();

                    if (data.result['res'] == 'NOT') {
                        alert(data.result['msg']);
                    }else{
                        alert(data.result['msg']);

                        $(".result-conbox").show();
                        $("#tempPassword").html(data.result['tempPassword']);

                        timeCountStart();
                    }

                }

            }, true);
        }

        function timeCountStart() {
            let timeText = $(".count").text().match(/\d{2}:\d{2}:\d{2}/)[0]; // 00:05:00 가져오기
            let timeParts = timeText.split(":").map(Number); // [0, 5, 0]

            let totalSeconds = timeParts[0] * 3600 + timeParts[1] * 60 + timeParts[2]; // 전체 초 계산

            let interval = setInterval(function () {
                if (totalSeconds <= 0) {
                    clearInterval(interval);
                    $(".result-conbox").fadeOut(); // 시간 종료 후 숨기기
                    return;
                }

                totalSeconds--; // 1초 감소

                let h = String(Math.floor(totalSeconds / 3600)).padStart(2, "0");
                let m = String(Math.floor((totalSeconds % 3600) / 60)).padStart(2, "0");
                let s = String(totalSeconds % 60).padStart(2, "0");

                $(".count").text(`${h}:${m}:${s}`);
            }, 1000);
        }
    </script>
@endsection
