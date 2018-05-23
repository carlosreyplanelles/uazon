<!doctype html>
<html lang="es">
<head>
    <!-- Charset -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <title>{{ $seo_title }} | Uazon</title>
    <meta name="description" content="Lo primero que he de decir de esta novela es que se trata sin duda de la peor del autor, al menos para mi gusto.">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{ asset('/images/favicon16x16.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/images/favicon32x32.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/images/favicon96x96.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/images/favicon128x128.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/images/favicon196x196.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/images/favicon120x120.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/images/favicon180x180.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/images/favicon152x152.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/images/favicon167x167.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/review.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/list.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/detail.css') }}">
    <link rel="stylesheet" href{{asset('assets/styles/commonHeader.css')}}

<!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Uazon">
    <meta property="og:url" content="uazon.com">
    <meta property="og:title" content="Crítica de Origen de Dan Brown">
    <meta property="og:description" content="Lo primero que he de decir de esta novela es que se trata sin duda de la peor del autor, al menos para mi gusto.">
    <meta property="og:image" content="../uploads/reviews/origen-dan-brown-open-graph.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpg">

</head>
<body>

<!-- Main Header -->
@include('common.header')

<!-- Main Content -->
<main>

    @yield('content')

    @stack('list')
</main>

<!-- Main Footer -->
@include('common.footer')

<script type="text/javascript" src="{{asset('assets/scripts/scripts-third.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/scripts/scripts.js')}}"></script>
</body>
</html>

