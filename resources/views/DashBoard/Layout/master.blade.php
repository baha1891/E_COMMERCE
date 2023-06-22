<!DOCTYPE html>
<html lang="en">
    <head>
    @include('dashboard.layout.head')
    </head>
<body class="layout-boxed enable-secondaryNav">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl">

        @include('dashboard.layout.header')

    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('dashboard.layout.aside')
        <!--  END SIDEBAR  -->



        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">


{{-- ------------------------------------------------------- --}}
            {{-- the nav included inside main --}}
{{-- -------------------------------------------------------------- --}}


            @include('dashboard.layout.main')
            <!--  BEGIN FOOTER  -->
    @include('dashboard.layout.footer')
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    {{-- strat script --}}
    @include('dashboard.layout.script')

    {{-- end script --}}
    @include('sweetalert::alert')
</body>
</html>
