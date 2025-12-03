<script>
    const dataUrl = '{{ route('member.data') }}';
    const getPK = (_this) => {
        return $(_this).closest('tr').data('sid');
    }

    $(document).on('click', '#exptionDate', function () {
        if ($('.chk-user:checked').length <= 0) {
            alert('기간 외 등록관리를 설정할 회원을 선택 해주세요.');
            return false;
        }

        let selectedValues = [];
        $('.chk-user:checked').each(function(){
            selectedValues.push($(this).val());
        });

        const popupHeight = 700;
        const popupWidth = 800;
        const popName = 'exception-date';
        const popupY = (window.screen.height / 2) - (popupHeight / 2);
        const popupX = (window.screen.width / 2) - (popupWidth / 2);
        const url = '{{ route('member.exception-date', ['case' => 'multi']) }}?user_sid=' + encodeURIComponent(selectedValues);

        window.open(url, popName, 'status=no, height=' + popupHeight + ', width=' + popupWidth + ', left=' + popupX + ', top=' + popupY);
    });
    
    $(document).on('click', '#chk-all', function () {
        $('.chk-user').prop('checked', $(this).is(':checked'));
    });

    $(document).on('click', '.chk-user', function () {
        const length = $('.chk-user').length;
        const chkLength = $('.chk-user:checked').length
        $('#chk-all').prop('checked', (length == chkLength));
    });

    $(document).on('click', '.isAdmin', function() {
        callAjax(dataUrl, {
            'case': 'db-change',
            'sid': getPK(this),
            'field': 'is_admin',
            'value': $(this).is(':checked') ? 'Y' : 'N',
        });
    });

    $(document).on('click', '.isFree', function() {
        callAjax(dataUrl, {
            'case': 'db-change',
            'sid': getPK(this),
            'field': 'is_free',
            'value': $(this).is(':checked') ? 'Y' : 'N',
        });
    });

    $(document).on('click', '.isAuthor', function() {
        callAjax(dataUrl, {
            'case': 'db-change',
            'sid': getPK(this),
            'field': 'is_author',
            'value': $(this).is(':checked') ? 'Y' : 'N',
        });
    });

    $(document).on('click', '.user-login', function() {
        callAjax(dataUrl, {
            'case': 'user-login',
            'sid': getPK(this),
        });
    });

    $(document).on('click', '.pw-reset', function() {
        callAjax(dataUrl, {
            'case': 'pw-reset',
            'sid': getPK(this),
        });
    });
</script>
