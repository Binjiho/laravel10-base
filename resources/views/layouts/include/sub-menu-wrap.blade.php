<article class="sub-menu-wrap">
    <div class="sub-menu inner-layer">
        <ul class="sub-menu-list js-sub-menu-list">
            <li class="sub-menu-depth02">
                <a href="javascript:void(0);" class="btn-sub-menu js-btn-sub-menu">{{ $menu['sub'][$main_key][$sub_key ?? '']['name'] ?? '' }}</a>

                <ul>
                    @foreach($menu['sub'][$main_key] ?? [] as $subKey => $subVal)
                        @if($subVal['continue']) @continue @endif
                        @if($subVal['dev'] && !isDev()) @continue @endif

                        <li @if($subKey == ($sub_key ?? '')) class="on" @endif>
                            <a href="{{ empty($subVal['url']) ? route($subVal['route'], $subVal['param']) : $subVal['url'] }}">
                                {{ $subVal['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
</article>
