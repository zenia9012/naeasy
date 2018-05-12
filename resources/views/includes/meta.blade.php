<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

{{--seo tags--}}
<meta name="title" content="{{ $seo_title }}">
<meta name="description" content="{{ $seo_description }}">
<meta name="keywords" content="{{ $seo_keywords }}">

<meta name="og:url" content="{{ env('APP_URL') }}">
<meta name="og:type" content="website">
<meta name="og:site_name" content="{{ env('APP_NAME') }}">
<meta name="og:title" content="{{ $og_title }}">
<meta name="og:description" content="{{ $og_description }}">
<meta name="og:image" content="{{ $og_image }}">
<title>{{ $seo_title }}</title>

{{--<link rel="shortcut icon" href="/img/fav.png" type="image/x-icon">--}}

