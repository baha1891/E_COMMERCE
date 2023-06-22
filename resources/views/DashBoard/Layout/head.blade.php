
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <title>CORK Admin| @yield('title') </title>

    <link rel="icon" type="image/x-icon" href={{asset('AdminAssets/src/assets/img/favicon.ico')}}>

    <link href={{asset('AdminAssets/vertical-light-menu/css/light/loader.css')}} rel="stylesheet" type="text/css" />

    <script src={{asset('AdminAssets/vertical-light-menu/loader.js')}}></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

@if(LaravelLocalization::getCurrentLocale()=='en')
    <link href={{asset('AdminAssets/src/bootstrap/css/bootstrap.min.css')}} rel="stylesheet" type="text/css" />
    <link href={{asset('AdminAssets/vertical-light-menu/css/light/plugins.css')}} rel="stylesheet" type="text/css" />
    <link href={{asset('AdminAssets/src/assets/css/light/dashboard/dash_1.css')}} rel="stylesheet" type="text/css" />
@else
<link href={{asset('AdminAssets/rtl/bootstrap.rtl.min.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('AdminAssets/rtl/plugins.css')}} rel="stylesheet" type="text/css" />
<link href={{asset('AdminAssets/rtl/dash_1.css')}} rel="stylesheet" type="text/css" />
@endif

    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href={{asset('AdminAssets/src/plugins/src/apex/apexcharts.css')}} rel="stylesheet" type="text/css">

    <link rel="stylesheet" href={{asset('AdminAssets/src/plugins/src/sweetalerts2/sweetalerts2.css')}}>
    @yield('style')

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

