<div class="popup-wrap" style="display: block;">
    <div class="popup-rolling-wrap js-popup-rolling n3 inner-layer">
        @foreach($rollingPopups as $board /* 게시판 팝업 */)
            @php($popup = $board->popups)

            @switch($popup->popup_skin)
                @case('1')
                    <div class="popup-contents type1" id="board-popup-{{ $board->sid ?? 0 }}">
                        @include("popup.board.template1")
                    </div>
                    @break

                @case('2')
                    <div class="popup-contents type2" id="board-popup-{{ $board->sid ?? 0 }}">
                        @include("popup.board.template2")
                    </div>
                    @break

                @case('3')
                    <div class="popup-contents type3" id="board-popup-{{ $board->sid ?? 0 }}">
                        @include("popup.board.template3")
                    </div>
                    @break

                @case('4')
                    <div class="popup-contents type4" id="board-popup-{{ $board->sid ?? 0 }}">
                        @include("popup.board.template4")
                    </div>
                    @break

                @default
                    @break
            @endswitch
        @endforeach
    </div>
</div>