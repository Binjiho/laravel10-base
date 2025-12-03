@extends('layouts.web-layout')

@section('addStyle')
    <link href="/assets/css/board_notice.css" rel="stylesheet">
@endsection

@section('contents')
    <article class="sub-contents">
        <div class="sub-conbox inner-layer">
            <!-- s:board -->
            @include('layouts.include.sub-tit-wrap')

            <div id="board" class="board-wrap board-notice-type1">
                <ul class="board-list">
                    <li class="list-head">
                        <div class="bbs-no bbs-col-xs n-bar">번호</div>
                        <div class="bbs-tit n-bar">제목</div>
                        <div class="bbs-file bbs-col-xs">파일</div>
                        <div class="bbs-cate bbs-col-s n-bar">조회수</div>
                        <div class="bbs-name bbs-col-xl">작성자</div>
                        <div class="bbs-date bbs-col-m">작성일</div>
                        @if(isAdmin())
                        <div class="bbs-show bbs-col-s">공개여부</div>
                        <div class="bbs-admin bbs-col-s">관리</div>
                        @endif
                    </li>

                    @foreach($notice ?? [] as $row)
                        <!-- 공지 -->
                        <li class="active" data-sid="{{ $row->sid }}">
                            <div class="bbs-no bbs-col-xs n-bar">
                                <img src="/assets/image/board/notice/ic_notice.png" alt="공지" class="ic-notice">
                            </div>

                            <div class="bbs-tit n-bar">
                                <a href="{{ route('board.view', ['code' => $code, 'sid' => $row->sid]) }}" class="ellipsis">
                                    {{ $row->subject }}
                                </a>

                                {!! $row->isNew() !!}
                            </div>

                            <div class="bbs-file bbs-col-xs"><img src="/assets/image/board/notice/ic_attach_file.png" alt=""></div>

                            <div class="bbs-hit bbs-col-s n-bar">{{ number_format($row->ref) }}</div>
                            <div class="bbs-name bbs-col-xl">{{ $row->name ?? '' }}</div>
                            <div class="bbs-name bbs-col-m">{{ $row->created_at->format('Y-m-d') }}</div>

                            @if( isAdmin())
                                    <div class="bbs-show bbs-col-s">
                                        <select class="form-item hide-select">
                                            @foreach($boardConfig['options']['hide'] as $key => $val)
                                                <option value="{{ $key }}" {{ $key == $row->hide ? 'selected' : '' }}>{{ $val }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="bbs-admin bbs-col-s">
                                        <div class="btn-admin">
                                        <a href="{{ route('board.upsert', ['code' => $code, 'sid' => $row->sid]) }}" class="btn btn-modify"><span class="hide">수정</span></a>
                                        <a href="javascript:void(0);" class="btn btn-delete board-delete"><span class="hide">삭제</span></a>
                                        </div>
                                    </div>
                            @endif
                        </li>
                    @endforeach

                    @forelse($list ?? [] as $row)
                        <!-- 게시글 -->
                        <li data-sid="{{ $row->sid }}">
                            <div class="bbs-no bbs-col-xs n-bar">
                                {{ $row->seq }}
                            </div>

                            <div class="bbs-tit n-bar">
                                <a href="{{ route('board.view', ['code' => $code, 'sid' => $row->sid]) }}" class="ellipsis">
                                    {{ $row->subject }}
                                </a>

                                {!! $row->isNew() !!}
                            </div>

                            <div class="bbs-file bbs-col-xs"><img src="/assets/image/board/notice/ic_attach_file.png" alt=""></div>

                            <div class="bbs-hit bbs-col-s n-bar">{{ number_format($row->ref) }}</div>
                            <div class="bbs-name bbs-col-xl">{{ $row->name ?? '' }}</div>
                            <div class="bbs-name bbs-col-m">{{ $row->created_at->format('Y-m-d') }}</div>


                            @if( isAdmin())
                            <div class="bbs-show bbs-col-s">
                                <select class="form-item hide-select">
                                    @foreach($boardConfig['options']['hide'] as $key => $val)
                                        <option value="{{ $key }}" {{ $key == $row->hide ? 'selected' : '' }}>{{ $val }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="bbs-admin bbs-col-s">
                                <div class="btn-admin">
                                    <a href="{{ route('board.upsert', ['code' => $code, 'sid' => $row->sid]) }}" class="btn btn-modify"><span class="hide">수정</span></a>
                                    <a href="javascript:void(0);" class="btn btn-delete board-delete"><span class="hide">삭제</span></a>
                                </div>
                            </div>
                            @endif
                        </li>

                    @empty
                        @if(empty($notice) /* 리스트도 없고 공지사항도 없을때 */)
                            <!-- no data -->
                            <li class="no-data text-center">
                                <img src="/html/bbs/general/assets/image/ic_nodata.png" alt=""> <br>
                                등록된 게시글이 없습니다.
                            </li>
                        @endif
                    @endforelse
                </ul>


                @if( isAdmin())
                    <div class="btn-wrap text-right">
                        <a href="{{ route('board.upsert', ['code' => $code]) }}" class="btn btn-type1 btn-write">등록</a>
                    </div>
                @endif

                <div class="paging-wrap">
                    {{ $list->links('pagination::custom') }}
                </div>
            </div>
            <!-- //e:board -->
        </div>
    </article>
@endsection

@section('addScript')
    @include("board.default-script")

    @if(isAdmin())
        <script>
            $(document).on('change', '.hide-select', function() {
                const ajaxData = {
                    case: 'db-change',
                    sid: getPK(this),
                    column: 'hide',
                    value: $(this).val(),
                }

                callAjax(dataUrl, ajaxData);
            });

            $(document).on('click', '.board-delete', function() {
                const ajaxData = {
                    case: 'board-delete',
                    sid: getPK(this),
                }

                if (confirm('정말로 삭제 하시겠습니까?')) {
                    callAjax(dataUrl, ajaxData);
                }
            });


        </script>
    @endif
@endsection
