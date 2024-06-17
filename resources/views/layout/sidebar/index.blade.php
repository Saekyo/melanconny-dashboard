<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href=""><img src="{{asset('img/logo-dark.png')}}" alt="Melanconny Logo" class="img-fluid logo"><span>Melanconny</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <nav id="left-sidebar-nav" class="sidebar-nav">
            @include('layout.sidebar._menu')
        </nav>
    </div>
</div>
