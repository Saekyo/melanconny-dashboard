<!DOCTYPE html>
<html lang="id">

<head>
    @include('layout.head')
    @yield('head')
    <title>
        @hasSection('title')
            @yield('title') -
        @endif
        Melanconny Dashboard
    </title>
</head>

<body class="theme-cyan font-montserrat light_version">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
            <div class="bar5"></div>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">
        @include('layout.navbar')
        @include('layout.sidebar.index')
    </div>
    @yield('content')
    @include('layout.script')
    @yield('script')
</body>

</html>
