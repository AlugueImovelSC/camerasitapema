<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>{{ $seo->title }}</title>
    <meta name="description" content="{{ $seo->description }}"/>
    <meta name="robots" content="index, follow"/>

    <link rel="base" href="{{ setting()->site_url }}"/>
    <link rel="canonical" href="{{ $seo->url }}"/>

    <meta itemprop="name" content="{{ $seo->title }}"/>
    <meta itemprop="description" content="{{ $seo->description }}"/>
    <meta itemprop="image" content="{{ $seo->image }}"/>
    <meta itemprop="url" content="{{ $seo->url }}"/>

    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{ $seo->title }}"/>
    <meta property="og:description" content="{{ $seo->description }}"/>
    <meta property="og:image" content="{{ $seo->image }}"/>
    <meta property="og:image:alt" content="{{ $seo->title }}"/>
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:url" content="{{ $seo->url }}"/>
    <meta property="og:site_name" content="{{ setting()->site_name }}"/>
    <meta property="og:locale" content="pt_BR"/>

    <meta property="twitter:card" content="summary_large_image"/>
    <meta property="twitter:domain" content="{{ setting()->site_url }}"/>
    <meta property="twitter:title" content="{{ $seo->title }}"/>
    <meta property="twitter:description" content="{{ $seo->description }}"/>
    <meta property="twitter:image" content="{{ $seo->image }}"/>
    <meta property="twitter:url" content="{{ $seo->url }}"/>

    <link rel="shortcut icon" href="/assets/img/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="/assets/icomoon/icomoon.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/maskinput.js"></script>
    <script src="/assets/js/scripts.js"></script>
</head>
<body>

@yield('template')

</body>
</html>