@php
    $routeName = request()->route()->getName()
@endphp

@extends('admin.layouts.admin-layout')

@section('addStyle')
@endsection

@section('contents')
    <section id="container" class="inner-layer">
        <div class="sub-contents">
            @include('admin.member.include.sub-tab-wrap', ['routeName' => $routeName])

            @include('admin.member.include.sch-form-wrap', ['routeName' => $routeName])

            <div class="list-contop text-right cf">
                <span class="cnt full-left">
                    [총 <strong>{{ $list->total() }}</strong>명]
                </span>

                <a href="javascript:void(0);" class="btn btn-type1 color-type20" id="exptionDate">
                    기간 외 등록관리 설정
                </a>
                
                @include('admin.components.li_page')
                개씩 보기
            </div>

            <div class="table-wrap">
                <table class="cst-table list-table">
                    <caption class="hide">목록</caption>
                    <colgroup>
                        <col style="width: 3%;">
                        <col style="width: 4%;">
                        <col style="width: 5%;">
                        <col style="width: 6%;">
                        <col style="width: 13%;">
                        <col style="width: 5%;">
                        <col>
                        <col style="width: 7%;">
                        <col style="width: 6%;">
                        <col style="width: 6%;">
                        <col style="width: 5%;">
                        <col style="width: 4%;">
                        <col style="width: 4%;">
                        <col style="width: 4%;">
                        <col style="width: 5%;">
                        <col style="width: 5%;">
                        <col style="width: 4%;">
                    </colgroup>
                    <thead>
                    <tr>
                        <th scope="col">
                            <div class="checkbox-wrap">
                                <div class="checkbox-group">
                                    <input type="checkbox" id="chk-all">
                                    <label for="chk-all"></label>
                                </div>
                            </div>
                        </th>
                        <th scope="col">No</th>
                        <th scope="col">Reg Num</th>
                        <th scope="col">Country</th>
                        <th scope="col">ID</th>

                        <th scope="col">Name <br>(Kor)</th>
                        <th scope="col">Affiliation <br>(Kor)</th>
                        <th scope="col">Mobile Phone</th>
                        <th scope="col">Join Date</th>
                        <th scope="col">Registration</th>

                        <th scope="col">Abstract</th>
                        <th scope="col">관리자</th>
                        <th scope="col">무료 <br>등록자</th>
                        <th scope="col">임원진/<br>연자/좌장</th>
                        <th scope="col">기간 외 <br>등록 관리</th>

                        <th scope="col">비밀번호 <br>초기화</th>
                        <th scope="col">관리</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($list as $row)
                        <tr data-sid="{{ $row->sid }}">
                            <td>
                                <div class="checkbox-wrap">
                                    <div class="checkbox-group">
                                        <input type="checkbox" class="chk-user" id="chk-user-{{ $row->sid }}" value="{{ $row->sid }}">
                                        <label for="chk-user-{{ $row->sid }}"></label>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $row->seq }}</td>
                            <td>
                                <a href="{{ route('member.modify', ['sid' => $row->sid]) }}" class="call-popup" data-width="900" data-height="1200" style="color: #5a5ad7;">
                                    S-{{ str_pad($row->sid ?? 1, 4, '0', STR_PAD_LEFT) }}
                                </a>
                            </td>
                            <td>{{ $row->getCountry() }}</td>
                            <td>{{ $row->uid }}</td>

                            <td>
                                {{ $row->first_name ?? '' }} {{ $row->last_name ?? '' }}
                                @if($row->country == '1')
                                    <br>({{ $row->name_kr ?? '' }})
                                @endif
                            </td>
                            <td>
                                {{ $row->affi ?? '' }}
                                @if($row->country == '1')
                                    <br>({{ $row->sosok_kr ?? '' }})
                                @endif
                            </td>
                            <td>{{ $row->ccode ?? '' }} {{ $row->mobile ?? '' }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>X</td>

                            <td>X</td>
                            <td>
                                <div class="checkbox-wrap">
                                    <div class="checkbox-group">
                                        <input type="checkbox" class="isAdmin" id="is_admin_{{ $row->sid }}" {{ $row->is_admin == 'Y' ? 'checked' : '' }}>
                                        <label for="is_admin_{{ $row->sid }}"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox-wrap">
                                    <div class="checkbox-group">
                                        <input type="checkbox" class="isFree" id="is_free_{{ $row->sid }}" {{ $row->is_free == 'Y' ? 'checked' : '' }}>
                                        <label for="is_free_{{ $row->sid }}"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox-wrap">
                                    <div class="checkbox-group">
                                        <input type="checkbox" class="isAuthor" id="is_author_{{ $row->sid }}" {{ $row->is_author == 'Y' ? 'checked' : '' }}>
                                        <label for="is_author_{{ $row->sid }}"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{ $row->adminMyExceptionDateText() }}<br>
                                <a href="{{ route('member.exception-date', ['case' => 'one', 'user_sid' => $row->sid]) }}" class="btn btn-small color-type17 call-popup" data-width="800" data-height="700" data-popup_name="exception-date">
                                    설정
                                </a>
                            </td>


                            <td>
                                <a href="javascript:void(0);" class="btn btn-small color-type18 pw-reset">초기화</a>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="btn-admin restore">
                                    <img src="/assets_admin/image/restore.png" alt="복원" style="width: 27px; height: 27px;">
                                </a>

                                <a href="javascript:void(0);" class="btn-admin btn-del force-delete">
                                    <img src="/assets_admin/image/ic_del.png" alt="삭제">
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="17">등록된 회원이 없습니다.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

            {{ $list->links('pagination::custom') }}
        </div>
    </section>
@endsection

@section('addScript')
    @include('admin.member.include.member-script')

    <script>
        $(document).on('click', '.restore', function () {
            if (confirm('복원 하시겠습니까?')) {
                callAjax(dataUrl, {
                    'case': 'user-restore',
                    'sid': getPK(this),
                });
            }
        });

        $(document).on('click', '.force-delete', function () {
            if (confirm('회원정보가 완전히 삭제됩니다.\n삭제 하시겠습니까?')) {
                callAjax(dataUrl, {
                    'case': 'user-forceDelete',
                    'sid': getPK(this),
                });
            }
        });
    </script>
@endsection

