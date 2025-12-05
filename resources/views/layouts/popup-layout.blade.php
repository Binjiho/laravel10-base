<!DOCTYPE html>
<html lang="ko">
<head>
    @include('layouts.components.baseHead')
</head>
<body>

<div id="popup-wrap">
    <div style="padding: 20px;">
        @yield('contents')
    </div>
</div>

@include('layouts.components.spinner')

{{--addScript--}}
@yield('addScript')
</body>
</html>
