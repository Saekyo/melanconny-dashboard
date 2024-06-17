<ul id="main-menu" class="metismenu">
    <li class="header">Main</li>
    <li><a href="../html/index.html"><i class="icon-home"></i><span>Home</span></a></li>
    <li class="{{ Route::currentRouteName() === 'category'  ? 'active open' : '' }}"><a href="{{ route('category') }}"><i class="icon-user"></i><span>Category</span></a></li>
</ul>
