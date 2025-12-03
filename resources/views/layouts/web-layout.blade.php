<!DOCTYPE html>
<html lang="ko">
<head>
    @include('layouts.components.baseHead')
</head>
<body>

<div class="wrap @empty($main_key) main @endempty">

@include('layouts.include.header')

<section id="container" >
    @if(!empty($main_key))
        @include('layouts.include.sub-visual')
        @include('layouts.include.sub-menu-wrap')
    @endif

    @yield('contents')
</section>

</div>

@include('layouts.include.footer')

@include('layouts.components.spinner')

{{--addScript--}}
@yield('addScript')
</body>
</html>
