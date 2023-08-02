<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}" media="all">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}" media="all">
    @php $dir; @endphp
    @if($dir != 'home')
      <link rel="stylesheet" href="{{ asset('assets/css/under.css') }}" media="all">
    @endif
    @yield('style')
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    <link rel="canonical" href="" >
    <meta name="description" content="サイト説明文">
    <meta name="keywords" content="サイトキーワード">
    <meta property="og:title" content="タイトル" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="サイト説明文" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta name="twitter:card" content="photo">
    <meta name="twitter:image" content="">
  </head>
  <body>
    <div id="wrapper">
      @include('inc.header')
      @yield('main')
      @include('inc.footer')
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js" defer></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js" defer></script>
    <script src="{{ asset('assets/js/base.js') }}" defer></script>
    @yield('script')
  </body>
</html>
