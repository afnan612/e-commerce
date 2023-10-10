<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    @include('Site.Layout.assets.css')
</head>

<body>
@include('Site.Layout.inc.header')


{{--@include('Site.Layout.inc.header')--}}

@yield('content')

<!-- Start Footer Area  -->
@include('Site.Layout.inc.footer')
<!-- End Footer Area  -->

@include('Site.Layout.assets.js')
</body>

</html>
