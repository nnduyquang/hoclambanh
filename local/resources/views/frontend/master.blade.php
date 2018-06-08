<!DOCTYPE Html>
<Html lang="en-US" class="lang-en_US" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<meta http-equiv="content-type" content="text/Html;charset=UTF-8"/>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Anton|Baloo|Nunito+Sans|Roboto|Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asap+Condensed|Baloo+Chettan|Cuprum|Francois+One|Prompt|Saira+Semi+Condensed" rel="stylesheet">
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

@include('frontend.layouts.fe_layout_topinfor_socialnw')
@include('frontend.layouts.fe_layout_topmenu_logo')

@yield('bodycontent')

@include('frontend.layouts.layout_master_footer')

</body>

</Html>