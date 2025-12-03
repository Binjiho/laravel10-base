<div class="con-tit-wrap">
    <h4 class="con-tit">Personal Information</h4>
</div>
<ul class="write-wrap">
    @if (request()->routeIs('mypage*'))
        <li>
            <div class="form-tit"><strong class="required">*</strong> Country of Residence</div>
            <div class="form-con">
                {{ $country_list[$user->country]['name'] }}
            </div>
        </li>
        <li class="kr_li" style="{{ ($user->country ?? '') == '1' ? '' : 'display:none;' }}">
            <div class="form-tit"><strong class="required">*</strong> Nationality</div>
            <div class="form-con">
                {{ $country_list[$user->nationality]['name'] }}
            </div>
        </li>
    @else
        <li>
            <div class="form-tit"><strong class="required">*</strong> Country of Residence</div>
            <div class="form-con">
                <select name="country" id="country" class="form-item">
                    <option value="">Country Choice</option>
                    @foreach($country_list as $key => $val)
                        <option value="{{ $val['sid'] }}" {{ ($user->country ?? '') == $val['sid'] ? 'selected' : '' }}>{{ $val['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </li>
        <li class="kr_li" style="{{ ($user->country ?? '') == '1' ? '' : 'display:none;' }}">
            <div class="form-tit"><strong class="required">*</strong> Nationality</div>
            <div class="form-con">
                <select name="nationality" id="nationality" class="form-item">
                    <option value="">Nationality Choice</option>
                    @foreach($country_list as $key => $val)
                        <option value="{{ $val['sid'] }}" {{ ($user->nationality ?? '') == $val['sid'] ? 'selected' : '' }}>{{ $val['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </li>
    @endif

    @if(empty($user))
    <li>
        <div class="form-tit"><strong class="required">*</strong> ID (E-mail)</div>
        <div class="form-con">
            <div class="form-group has-btn">
                <input type="text" class="form-item" name="uid" id="uid" data-chk="N" emailOnly>
                <a href="javascript:;" id="uid_chk" class="btn btn-small color-type3">Check ID</a>
            </div>
        </div>
    </li>
    <li>
        <div class="form-tit"><strong class="required">*</strong> Password</div>
        <div class="form-con">
            <input type="password" name="password" id="password" class="form-item">
        </div>
    </li>
    <li>
        <div class="form-tit"><strong class="required">*</strong> Verify Password</div>
        <div class="form-con">
            <input type="password" name="repassword" id="repassword" class="form-item">
        </div>
    </li>
    @endif

    <li>
        <div class="form-tit"><strong class="required">*</strong> Name</div>
        <div class="form-con">
            <div class="form-group n2">
                <input type="text" name="first_name" id="first_name" value="{{ $user->first_name ?? '' }}" class="form-item" placeholder="First Name" enname>
                <input type="text" name="last_name" id="last_name" value="{{ $user->last_name ?? '' }}" class="form-item" placeholder="Last Name" enname>
            </div>
        </div>
    </li>
    <li class="kr_li" style="{{ ($user->country ?? '') == '1' ? '' : 'display:none;' }}">
        <div class="form-tit"><strong class="required">*</strong> 성명 (국문)</div>
        <div class="form-con">
            <input type="text" name="name_kr" id="name_kr" value="{{ $user->name_kr ?? '' }}" class="form-item" onlyKo>
        </div>
    </li>
    <li>
        <div class="form-tit"><strong class="required">*</strong> Affiliation</div>
        <div class="form-con">
            <input type="text" name="affi" id="affi" value="{{ $user->affi ?? '' }}" class="form-item" enname>
        </div>
    </li>
    <li class="kr_li" style="{{ ($user->country ?? '') == '1' ? '' : 'display:none;' }}">
        <div class="form-tit"><strong class="required">*</strong> 소속</div>
        <div class="form-con">
            <input type="text" name="sosok_kr" id="sosok_kr" value="{{ $user->sosok_kr ?? '' }}" class="form-item" onlyKo>
        </div>
    </li>
    <li>
        <div class="form-tit"><strong class="required">*</strong> Mobile</div>
        <div class="form-con">
            <div class="form-group-text">
                <div>
                    <p>+Country Code</p>
                    <input type="text" name="ccode" id="ccode" value="{{ $user->ccode ?? '' }}" class="form-item" readonly>
                </div>
                <span class="text country">-</span>
                <div>
                    <p>Phone Number</p>
                    <div class="form-group-text">
                        @php
                            $target_arr = array();
                            if(!empty($user) && !empty($user->mobile)){
                                $target_arr = explode('-',$user->mobile);
                            }
                        @endphp
                        <input type="text" name="mobile1" id="mobile1" value="{{ $target_arr[0] ?? '' }}" onlyNumber class="form-item">
                        <span class="text">-</span>
                        <input type="text" name="mobile2" id="mobile2" value="{{ $target_arr[1] ?? '' }}" onlyNumber class="form-item">
                        <span class="text">-</span>
                        <input type="text" name="mobile3" id="mobile3" value="{{ $target_arr[2] ?? '' }}" onlyNumber class="form-item">
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="form-tit"><strong class="required">*</strong> Title</div>
        <div class="form-con">
            <div class="radio-wrap cst">
                @foreach($userConfig['title'] as $key => $val)
                    <label class="radio-group"><input type="radio" name="title" id="title_{{ $key }}" value="{{ $key }}" {{ ($user->title ?? '') == $key ? 'checked' : '' }}>{{ $val }}</label>
                @endforeach
                    <input type="text" name="title_etc" id="title_etc" value="{{ $user['title_etc'] ?? '' }}" class="form-item" {{ ($user['title'] ?? '') == 'Z' ? '' : 'disabled' }} enname>
            </div>
        </div>
    </li>
    <li>
        <div class="form-tit"><strong class="required">*</strong> Degree</div>
        <div class="form-con">
            <div class="radio-wrap cst">
                @foreach($userConfig['degree'] as $key => $val)
                    <label class="radio-group"><input type="radio" name="degree" id="degree_{{ $key }}" value="{{ $key }}" {{ ($user->degree ?? '') == $key ? 'checked' : '' }}>{{ $val }}</label>
                @endforeach
                <input type="text" name="degree_etc" id="degree_etc" value="{{ $user['degree_etc'] ?? '' }}" class="form-item" {{ ($user['degree'] ?? '') == 'Z' ? '' : 'disabled' }}>
            </div>
        </div>
    </li>
    <li>
        <div class="form-tit"><strong class="required">*</strong> Gender</div>
        <div class="form-con">
            <div class="radio-wrap cst">
                @foreach($userConfig['gender'] as $key => $val)
                    <label class="radio-group"><input type="radio" name="gender" id="gender_{{ $key }}" value="{{ $key }}" {{ ($user->gender ?? '') == $key ? 'checked' : '' }}>{{ $val }}</label>

                    @if(($key ?? '') == 'Z')
                        <input type="text" name="gender_etc" id="gender_etc" value="{{ $user['gender_etc'] ?? '' }}" class="form-item" {{ ($user['gender'] ?? '') == 'Z' ? '' : 'disabled' }}>
                    @endif
                @endforeach
            </div>
        </div>
    </li>

    @if (request()->routeIs('mypage*'))
        <li class="kr_li" style="{{ ($user->country ?? '') == '1' ? '' : 'display:none;' }}">
            <div class="form-tit"><strong class="required">*</strong> 의사면허번호</div>
            <div class="form-con">
                <div class="form-group has-btn">
                    {{ ($user->license_yn ?? '') == 'N' ? '면허번호 없음' : $user->license_number ?? '' }}
                </div>
            </div>
        </li>

    @else
        <li class="kr_li" style="{{ ($user->country ?? '') == '1' ? '' : 'display:none;' }}">
            <div class="form-tit"><strong class="required">*</strong> 의사면허번호</div>
            <div class="form-con">
                <div class="form-group has-btn">
                    <input type="text" class="form-item" name="license_number" id="license_number" value="{{ $user->license_number ?? '' }}" data-chk="N" onlyNumber>
                    <a href="javascript:;" id="license_chk" class="btn btn-small color-type3">중복확인</a>
                </div>
                <div class="checkbox-wrap cst mt-10">
                    <label class="checkbox-group"><input type="checkbox" name="license_yn" id="license_yn" value="N" {{ ($user->license_yn ?? '') == 'N' ? 'checked' : '' }}>면허번호 없음</label>
                </div>
            </div>
        </li>
    @endif

    <li>
        <div class="form-tit"><strong class="required">*</strong> Address</div>
        <div class="form-con">
            <input type="text" name="address" id="address" value="{{ $user->address ?? '' }}" class="form-item">
        </div>
    </li>
    <li>
        <div class="form-tit"><strong class="required">*</strong> City</div>
        <div class="form-con">
            <input type="text" name="city" id="city" value="{{ $user->city ?? '' }}" class="form-item">
        </div>
    </li>
    <li>
        <div class="form-tit"><strong class="required">*</strong> Emergency Contact</div>
        <div class="form-con">
            <ul class="write-wrap">
                <li>
                    <div class="form-tit"><strong class="required">*</strong> Name</div>
                    <div class="form-con">
                        <div class="form-group n2">
                            <input type="text" name="contact_first_name" id="contact_first_name" value="{{ $user->contact_first_name ?? '' }}" class="form-item" placeholder="First Name">
                            <input type="text" name="contact_last_name" id="contact_last_name" value="{{ $user->contact_last_name ?? '' }}" class="form-item" placeholder="Last Name">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="form-tit"><strong class="required">*</strong> Relation</div>
                    <div class="form-con">
                        <input type="text" name="contact_relation" id="contact_relation" value="{{ $user->contact_relation ?? '' }}" class="form-item">
                    </div>
                </li>
                <li>
                    <div class="form-tit"><strong class="required">*</strong> Email</div>
                    <div class="form-con">
                        <input type="text" name="contact_email" id="contact_email" value="{{ $user->contact_email ?? '' }}" class="form-item" emailOnly>
                    </div>
                </li>
            </ul>
        </div>
    </li>
</ul>

<div class="con-tit-wrap">
    <h4 class="con-tit">How did you hear?</h4>
</div>
<ul class="write-wrap">
    <li>
        <div class="form-tit"><strong class="required">*</strong> Source</div>
        <div class="form-con">
            <div class="checkbox-wrap cst full">

                @foreach($userConfig['source'] as $key => $val)
                    <label class="checkbox-group">
                        <input type="checkbox" name="source[]" id="source_{{ $key }}" value="{{ $key }}" {{ !empty($user) && strpos($user->source, $key) !== false ? 'checked' : '' }}>
                        {{ $val }}
                    </label>
                @endforeach
                    <input type="text" name="source_etc" id="source_etc" value="{{ $user['source_etc'] ?? '' }}" class="form-item" {{ ($user['source'] ?? '') == 'Z' ? '' : 'disabled' }}>
            </div>
        </div>
    </li>
</ul>

@section('reg-script')
    <script>
        $(document).on('change', "[name='country']" , function() {
            const _val = $(this).val();

            if(_val == '1' /*kr_li*/){
                $(".kr_li").show();
            }else{
                $(".kr_li").hide();
                $("[name='nationality']").val('');
                $("[name='name_kr']").val('');
                $("[name='sosok_kr']").val('');
                $("[name='license_number']").val('');
                $("[name='license_yn']").val('');
            }

            callAjax(dataUrl, {
                'case': 'change-country',
                'country': _val,
            });
        });

        $(document).on('change', "[name='title']" , function() {
            const _val = $(this).val();

            if(_val == 'Z' /*직접입력*/){
                $("#title_etc").prop('disabled',false);
            }else{
                $("#title_etc").val('');
                $("#title_etc").prop('disabled',true);
            }
        });

        $(document).on('change', "[name='degree']" , function() {
            const _val = $(this).val();

            if(_val == 'Z' /*직접입력*/){
                $("#degree_etc").prop('disabled',false);
            }else{
                $("#degree_etc").val('');
                $("#degree_etc").prop('disabled',true);
            }
        });

        $(document).on('change', "[name='gender']" , function() {
            const _val = $(this).val();

            if(_val == 'Z' /*직접입력*/){
                $("#gender_etc").prop('disabled',false);
            }else{
                $("#gender_etc").val('');
                $("#gender_etc").prop('disabled',true);
            }
        });

        $(document).on('change', '#source_Z', function () {
            if ($(this).is(':checked')) {
                $("#source_etc").prop('disabled', false);
            } else {
                $("#source_etc").val('');
                $("#source_etc").prop('disabled', true);
            }
        });

        //아이디체크
        $(document).on('keyup', 'input[name=uid]', function() {
            $(this).data('chk', 'N');
        });

        $(document).on('click', '#uid_chk', function() {
            const uid = $('input[name=uid]').val();

            let obj = {
                'case': true,
                'focus': 'input[name=uid]'
            };
            if(isEmpty(uid)) {
                obj.msg = '아이디를 입력해주세요.';
                return;
            }
            callAjax(dataUrl, {
                'case': 'uid-check',
                'id': uid,
            });
        });

        $(document).on('click', 'input[name=license_yn]', function() {
            if ( $("#license_yn").is(":checked") ) {
                $("#license_number").val('');
                $("#license_number").prop('disabled',true);
            }else{
                $("#license_number").prop('disabled',false);
            }
        });

        //면허번호체크
        $(document).on('keyup', 'input[name=license_number]', function() {
            $(this).data('chk', 'N');
        });

        $(document).on('click', '#license_chk', function() {
            const license_number = $('input[name=license_number]').val();
            const _user_sid = $("#register-frm").data("sid");
            let obj = {
                'case': true,
                'focus': 'input[name=license_number]'
            };
            if(isEmpty(license_number)) {
                obj.msg = '의사면허번호를 입력해주세요.';
                return;
            }
            callAjax(dataUrl, {
                'case': 'license-check',
                'license_number': license_number,
                'user_sid': _user_sid,
            });
        });

        $(document).on('keyup', '#captcha_input', function() {
            const _captcha_input = $(this).val();
            callNoneSpinnerAjax(dataUrl, {
                'case': 'captcha-compare',
                'captcha_input': _captcha_input,
            });
        });


        $(document).on('submit', form, function(e) {
            @if( empty($user) )
            if ($("input[name='agree']:checked").length < 1) {
                alert('Please agree to the collection and Privacy Policy.');
                $("input[name='agree']").focus();
                return false;
            }
            @endif
            @if (request()->routeIs('mypage*') === false)
                if (isEmpty($("select[name='country']").val())) {
                    alert('Please select your country.');
                    $("input[name='country']").focus();
                    return false;
                }
                if ( $("select[name='country']").val() == '1' ) {
                    if (isEmpty($("select[name='nationality']").val())) {
                        alert('Please select your country.');
                        $("input[name='nationality']").focus();
                        return false;
                    }
                }
            @endif
            @if( empty($user) )
            if (isEmpty($("input[name='uid']").val())) {
                alert('Please enter ID.');
                $("input[name='uid']").focus();
                return false;
            }
            if ( $("input[name='uid']").data('chk') == 'N' ) {
                alert('Please check ID.');
                $("input[name='uid']").focus();
                return false;
            }

            if (isEmpty($("#password").val())) {
                alert('Please enter Password.');
                $("#password").focus();
                return false;
            }
            // if (isValidPassword($("#password").val()) === false) {
            //     alert("Please check Password.");
            //     $("#password").focus();
            //     return false;
            // }
            // if ( $("#password").val().length < 4 ) {
            //     alert('비밀번호는 최소 4자로 입력해주세요.');
            //     $("#password").focus();
            //     return false;
            // }
            // if ( $("#password").val().length > 12 ) {
            //     alert('비밀번호는 최대 12자로 입력해주세요.');
            //     $("#password").focus();
            //     return false;
            // }
            if (isEmpty($("#repassword").val())) {
                alert('Please enter Verify Password.');
                $("#repassword").focus();
                return false;
            }
            if ( $("#password").val() != $("#repassword").val()) {
                alert('Please enter the same password you entered.');
                $("#repassword").focus();
                return false;
            }
            @endif


            if (isEmpty($("#first_name").val())) {
                alert('Please enter First Name.');
                $("#first_name").focus();
                return false;
            }
            if (isEmpty($("#last_name").val())) {
                alert('Please enter First Name.');
                $("#last_name").focus();
                return false;
            }

            if ( $("select[name='country']").val() == '1' ) {
                if (isEmpty($("#name_kr").val())) {
                    alert('Please enter 성명.');
                    $("#name_kr").focus();
                    return false;
                }
            }
            if (isEmpty($("#affi").val())) {
                alert('Please enter Affiliation.');
                $("#affi").focus();
                return false;
            }
            if ( $("select[name='country']").val() == '1' ) {
                if (isEmpty($("#sosok_kr").val())) {
                    alert('Please enter 소속.');
                    $("#sosok_kr").focus();
                    return false;
                }
            }
            if (isEmpty($("#mobile1").val())) {
                alert('Please enter Phone Number.');
                $("#mobile1").focus();
                return false;
            }
            if (isEmpty($("#mobile2").val())) {
                alert('Please enter Phone Number.');
                $("#mobile2").focus();
                return false;
            }
            if (isEmpty($("#mobile3").val())) {
                alert('Please enter Phone Number.');
                $("#mobile3").focus();
                return false;
            }


            if ($("input[name='title']:checked").length < 1) {
                alert('Please choose Title.');
                $("input[name='title']").focus();
                return false;
            }
            if ( $("input[name='title']:checked").val() == 'Z' ) {
                if (isEmpty($("#title_etc").val())) {
                    alert('Please enter Title Etc.');
                    $("#title_etc").focus();
                    return false;
                }
            }
            if ($("input[name='degree']:checked").length < 1) {
                alert('Please choose Degree.');
                $("input[name='degree']").focus();
                return false;
            }
            if ( $("input[name='degree']:checked").val() == 'Z' ) {
                if (isEmpty($("#degree_etc").val())) {
                    alert('Please enter Degree Etc.');
                    $("#degree_etc").focus();
                    return false;
                }
            }
            if ($("input[name='gender']:checked").length < 1) {
                alert('Please choose Gender.');
                $("input[name='gender']").focus();
                return false;
            }
            if ( $("input[name='gender']:checked").val() == 'Z' ) {
                if (isEmpty($("#gender_etc").val())) {
                    alert('Please enter Gender Etc.');
                    $("#gender_etc").focus();
                    return false;
                }
            }

            @if (request()->routeIs('mypage*') === false)
            if ( $("select[name='country']").val() == '1' ) {
                if ( $("#license_yn").is(":checked") === false ) {
                    if (isEmpty($("input[name='license_number']").val())) {
                        alert('Please enter LicenseNumber.');
                        $("input[name='license_number']").focus();
                        return false;
                    }
                    if ( $("input[name='license_number']").data('chk') == 'N' ) {
                        alert('Please check LicenseNumber.');
                        $("input[name='license_number']").focus();
                        return false;
                    }
                }
            }
            @endif

            if (isEmpty($("#address").val())) {
                alert('Please enter Address.');
                $("#address").focus();
                return false;
            }


            if (isEmpty($("#city").val())) {
                alert('Please enter City.');
                $("#city").focus();
                return false;
            }
            if (isEmpty($("#contact_first_name").val())) {
                alert('Please enter Emergency Contact First Name.');
                $("#contact_first_name").focus();
                return false;
            }
            if (isEmpty($("#contact_last_name").val())) {
                alert('Please enter Emergency Contact Last Name.');
                $("#contact_last_name").focus();
                return false;
            }
            if (isEmpty($("#contact_relation").val())) {
                alert('Please enter Emergency Contact Relation.');
                $("#contact_relation").focus();
                return false;
            }
            if (isEmpty($("#contact_email").val())) {
                alert('Please enter Emergency Contact Email.');
                $("#contact_email").focus();
                return false;
            }

            if ( $("input[name='source[]']:checked").length < 1) {
                alert('Please check Source.');
                $("input[name='source[]']").focus();
                return false;
            }
            if ( $("#source_Z").is(":checked") === true ) {
                if (isEmpty($("input[name='source_etc']").val())) {
                    alert('Please enter Source Others.');
                    $("input[name='source_etc']").focus();
                    return false;
                }
            }

            //캡챠
            @if(checkUrl() != 'admin')
            if (isEmpty($("#captcha_input").val())) {
                alert('Please enter Security Check.');
                $("#captcha_input").focus();
                return false;
            }
            if ( $("#captcha_input").data('chk') == 'N' ) {
                alert('Please check Security Check.');
                $("#captcha_input").focus();
                return false;
            }
            @endif

            boardSubmit();
        });
    </script>
@endsection