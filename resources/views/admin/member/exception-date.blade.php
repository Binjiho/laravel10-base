@extends('admin.layouts.admin-popup-layout')

@section('addStyle')
    <style>
        .sub-tit {
            font-size: 3rem !important;
        }

        .required {
            display: inline-block;
            padding: 3px;
            font-size: 1.5rem;
        }
    </style>
@endsection

@section('contents')
    <div style="padding: 30px;">
        <div class="sub-tit-wrap">
            <h3 class="sub-tit">기간 외 등록관리</h3>

            <div class="text-wrap" style="margin-top: 10px;">
                <strong class="required">초록접수, 사전등록 마감일과 상관없이 해당 팝업에서 지정한 시작, 마감일로 예외처리 됩니다.</strong><br>
                <strong class="required">2명 이상 지정 시 시작, 마감일 각각 선택 불가능 합니다. 각각 지정을 원하시는 경우 1명씩 지정해주세요.</strong>
            </div>
        </div>

        <form id="exception-date-frm" method="post" data-sid="{{ $exceptionDate->sid ?? 0 }}" data-case="exception-date-{{ empty($exceptionDate->sid) ? 'create' : 'update' }}">
            <div class="write-wrap" style="margin-top: 25px;">
                <dl>
                    <dt style="text-align: center;">설정 ID</dt>
                    @foreach($user as $row)
                        <dl>
                            <dd style="text-align: center;">
                                <span style="margin-left: 5px;">{{ $row->uid }}</span>
                                <input type="hidden" name="user_sid[]" value="{{ $row->sid }}" readonly>
                            </dd>
                        </dl>
                    @endforeach
                </dl>
            </div>

            <div class="write-wrap">
                <dl style="margin-bottom: 15px;">
                    <dt style="text-align: center;">등록 구분</dt>
                    <dd>
                        <div class="checkbox-wrap" style="display: flex; justify-content: center;">
                            <div class="checkbox-group" style="margin-right: 10px; margin-left: 10px;">
                                <input type="checkbox" name="abs_yn" id="abs_yn" value="Y" {{ ($exceptionDate->abs_yn ?? '') == 'Y' ? 'checked' : '' }} class="reg-gubun">
                                <label for="abs_yn">초록등록</label>
                            </div>

                            <div class="checkbox-group" style="margin-right: 10px; margin-left: 10px;">
                                <input type="checkbox" name="reg_yn" id="reg_yn" value="Y" {{ ($exceptionDate->reg_yn ?? '') == 'Y' ? 'checked' : '' }} class="reg-gubun">
                                <label for="reg_yn">사전등록</label>
                            </div>

                        </div>
                    </dd>
                </dl>
            </div>

            <div class="write-wrap" id="abs-wrap" style="display: {{ ($exceptionDate->abs_yn ?? '') == 'Y' ? 'block' : 'none' }};">
                <dl>
                    <dt style="text-align: center">초록접수 구분</dt>
                    <dd>
                        <div class="radio-wrap">
                            @foreach(config('site.abstract.round') as $key => $val)
                                <div class="radio-group">
                                    <input type="radio" name="abs_round" id="abs_round_{{ $key }}" value="{{ $key }}" {{ ($exceptionDate->abs_round ?? '') == $key ? 'checked' : '' }}>
                                    <label for="abs_round_{{ $key }}">{{ $val }}</label>
                                </div>
                            @endforeach
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt style="text-align: center">초록접수</dt>
                    <dd>
                        <div class="form-group form-group-text n2">
                            <div class="text-wrap">
                                <p>초록접수 시작일</p>
                                <input type="text" name="abs_sdate" id="abs_sdate" value="{{ $exceptionDate->abs_sdate ?? '' }}" class="form-item" readonly datetimepicker/>
                            </div>

                            <span>~</span>

                            <div class="text-wrap">
                                <p>초록접수 마감일</p>
                                <input type="text" name="abs_edate" id="abs_edate" value="{{ $exceptionDate->abs_edate ?? '' }}" class="form-item" readonly datetimepicker/>
                            </div>
                        </div>
                    </dd>
                </dl>
            </div>

            <div class="write-wrap" id="reg-wrap" style="display: {{ ($exceptionDate->reg_yn ?? '') == 'Y' ? 'block' : 'none' }};">
                <dl>
                    <dt style="text-align: center">사전등록접수 구분</dt>
                    <dd>
                        <div class="radio-wrap">
                            @foreach(config('site.registration.round') as $key => $val)
                                <div class="radio-group">
                                    <input type="radio" name="reg_round" id="reg_round_{{ $key }}" value="{{ $key }}" {{ ($exceptionDate->reg_round ?? '') == $key ? 'checked' : '' }}>
                                    <label for="reg_round_{{ $key }}">{{ $val }}</label>
                                </div>
                            @endforeach
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt style="text-align: center">사전등록</dt>
                    <dd>
                        <div class="form-group form-group-text n2">
                            <div class="text-wrap">
                                <p>사전등록 시작일</p>
                                <input type="text" name="reg_sdate" id="reg_sdate" value="{{ $exceptionDate->reg_sdate ?? '' }}" class="form-item" readonly datetimepicker/>
                            </div>

                            <span>~</span>

                            <div class="text-wrap">
                                <p>사전등록 마감일</p>
                                <input type="text" name="reg_edate" id="reg_edate" value="{{ $exceptionDate->reg_edate ?? '' }}" class="form-item" readonly datetimepicker/>
                            </div>
                        </div>
                    </dd>
                </dl>
            </div>

            <div class="write-wrap" id="presentation-wrap" style="display: {{ ($exceptionDate->presentation_yn ?? '') == 'Y' ? 'block' : 'none' }};">
                <dl>
                    <dt style="text-align: center">강의록</dt>
                    <dd>
                        <div class="form-group form-group-text n2">
                            <div class="text-wrap">
                                <p>강의록 시작일</p>
                                <input type="text" name="presentation_sdate" id="presentation_sdate" value="{{ $exceptionDate->presentation_sdate ?? '' }}" class="form-item" readonly datetimepicker/>
                            </div>

                            <span>~</span>

                            <div class="text-wrap">
                                <p>강의록 마감일</p>
                                <input type="text" name="presentation_edate" id="presentation_edate" value="{{ $exceptionDate->presentation_edate ?? '' }}" class="form-item" readonly datetimepicker/>
                            </div>
                        </div>
                    </dd>
                </dl>
            </div>

            <div class="btn-wrap text-center">
                <a href="javascript:window.close();" class="btn btn-type1 color-type3">닫기</a>
                <button type="submit" class="btn btn-type1 color-type1">저장</button>
            </div>
        </form>
    </div>
@endsection

@section('addScript')
    <script>
        const dataUrl = '{{ route('member.data') }}';
        const form = '#exception-date-frm';

        $(document).on('click', ".reg-gubun", function() {
            let target = null;
            const name = $(this).attr('name');
            const display = $(this).is(':checked') ? 'block' : 'none';

            switch (name) {
                case 'abs_yn':
                    target = $('#abs-wrap');
                    break;

                case 'reg_yn':
                    target = $('#reg-wrap');
                    break;

                case 'presentation_yn':
                    target = $('#presentation-wrap');
                    break;

                default:
                    alert('잘못된 접근입니다.');
                    return;
            }

            target.css('display', display);

            if (display == 'none') {
                target.find('input[type=text]').val('');
                target.find('input[type=radio]').prop('checked', false);
            }
        });

        $(document).on('submit', form, function() {
            if ($(".reg-gubun:checked").length <= 0) {
                alert('등록 구분을 선택해주세요.');
                return false;
            }

            // 초록등록
            if ($('input[name=abs_yn]').is(':checked')) {
                const abs_sdate = $('#abs_sdate');
                const abs_edate = $('#abs_edate');

                if($('input[name=abs_round]:checked').length <= 0) {
                    alert('초록접수 구분을 선택해주세요.');
                    $('input[name=abs_round]').focus();
                    return false;
                }

                if(isEmpty(abs_sdate.val())) {
                    alert('초록접수 시작일을 선택해주세요.');
                    abs_sdate.focus();
                    return false;
                }

                if(isEmpty(abs_edate.val())) {
                    alert('초록접수 마감일을 선택해주세요.');
                    abs_edate.focus();
                    return false;
                }
            }

            // 사전등록
            if ($('input[name=reg_yn]').is(':checked')) {
                const reg_sdate = $('#reg_sdate');
                const reg_edate = $('#reg_edate');

                if($('input[name=reg_round]:checked').length <= 0) {
                    alert('사전등록접수 구분을 선택해주세요.');
                    $('input[name=reg_round]').focus();
                    return false;
                }

                if(isEmpty(reg_sdate.val())) {
                    alert('사전등록 시작일을 선택해주세요.');
                    reg_sdate.focus();
                    return false;
                }

                if(isEmpty(reg_edate.val())) {
                    alert('사전등록 마감일을 선택해주세요.');
                    reg_edate.focus();
                    return false;
                }
            }


            // 강의록
            if ($('input[name=presentation_yn]').is(':checked')) {
                const presentation_sdate = $('#presentation_sdate');
                const presentation_edate = $('#presentation_edate');

                if(isEmpty(presentation_sdate.val())) {
                    alert('강의록 시작일을 선택해주세요.');
                    presentation_sdate.focus();
                    return false;
                }

                if(isEmpty(presentation_edate.val())) {
                    alert('강의록 마감일을 선택해주세요.');
                    presentation_edate.focus();
                    return false;
                }
            }

            callMultiAjax(dataUrl, newFormData(form));
        });
    </script>
@endsection
