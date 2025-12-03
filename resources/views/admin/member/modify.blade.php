@extends('layouts.popup-layout')

@section('addStyle')
@endsection

@section('contents')
    <div class="write-form-wrap" style="padding: 35px;">
        <form action="" method="post" id="register-frm" enctype="multipart/form-data" data-case="user-{{ !empty($user->sid) ? 'modify' : 'create' }}" data-sid="{{ !empty($user) ? $user->sid : 0 }}">
            <fieldset>
                @include("auth.signup.form.register-frm")

                <div class="btn-wrap text-center">
                    <a href="javascript:window.close();" class="btn btn-type1 color-type3">Cancel</a>
                    <button type="submit" class="btn btn-type1 color-type4">Moidfy</button>
                </div>
            </fieldset>
        </form>
    </div>
@endsection

@section('addScript')
    <script>
        const form = '#register-frm';
        const dataUrl = '{{ route('member.data') }}';

        const boardSubmit = () => {
            let ajaxData = newFormData(form);

            callMultiAjax(dataUrl, ajaxData);
        }
    </script>

    @yield('reg-script')
@endsection
