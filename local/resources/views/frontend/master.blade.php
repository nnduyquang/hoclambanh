<!DOCTYPE Html>
<Html lang="en-US" class="lang-en_US" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<meta http-equiv="content-type" content="text/Html;charset=UTF-8"/>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Anton|Baloo|Nunito+Sans|Roboto|Varela+Round"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asap+Condensed|Baloo+Chettan|Cuprum|Francois+One|Prompt|Saira+Semi+Condensed"
          rel="stylesheet">
    <link rel="shortcut icon" href="images/icon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/icon/favicon.ico" type="image/x-icon">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="@yield('keyword')">
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width">
    {{ Html::style('css/core.common.css') }}
    {{ Html::style('css/core.frontend.css') }}
    {{ Html::style('css/frontend.css') }}
    @yield('styles')
</head>
<body>
<div id="blurrMe">
    @include('frontend.common.menu.menu')
    @include('frontend.common.menu.m-menu')
    @yield('bodycontent')

    @include('frontend.common.footer')
</div>
@include('frontend.common.menu.m-sidebar')
</body>
{{ Html::script('js/core.common.js') }}
{{ Html::script('js/core.frontend.js') }}
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
{{ Html::script('js/scripts.js') }}
<div class="callback d-lg-none d-md-none">
    <div class="phone_animation">
        <div class="phone_animation_circle"></div>
        <div class="phone_animation_circle_fill"></div>
        <a href="tel:0989480048" class="phone_animation_circle_fill_img"><i class="fas fa-phone"
                                                                            aria-hidden="true"></i></a>
    </div>
</div>
<div class="callback d-none d-md-block" style="right: 150px;bottom: -30px;left:inherit">
    <div class="phone_animation">
        <div class="phone_animation_circle"></div>
        <div class="phone_animation_circle_fill"></div>
        <a href="tel:0989480048" class="phone_animation_circle_fill_img"><i class="fas fa-phone"
                                                                            aria-hidden="true"></i></a>
    </div>
</div>
<div class="mess_desk_bot d-none d-md-block" style="position: fixed;bottom:40px;right: 0px;">
    <a href="tel:0989480048"
       style="display: block;width: 260px;height: 56px;background: url({{URL::to('images/nenhot.png')}}) no-repeat;text-align: center;padding-top: 10px;color:#fff;font-size: 20px;font-family: 'roboto-bold'">
    </a>
</div>
</Html>