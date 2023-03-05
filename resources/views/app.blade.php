<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <link href="/assets/panel/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/panel/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    @inertia
    <script src="/assets/panel/plugins/global/plugins.bundle.js"></script>
    <script src="/assets/panel/js/scripts.bundle.js"></script>
</body>

</html>
