<div id="sidebar" class="app-sidebar">

    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

        <div class="menu">
            <div class="menu-header">Navigation</div>
            <div class="menu-item nav-item {{Route::is('arsip.index') || Route::is('arsip.create') || Route::is('arsip.show') || Route::is('arsip.edit') ? 'active' : ''}}">>
                <a href="{{route('arsip.index')}}" class="menu-link">
                    <span class="menu-icon"><i class="fa-solid fa-house"></i></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </div>
            <div class="menu-divider"></div>
            <div class="menu-header">Users</div>
            <div class="menu-item nav-item {{Route::is('about') ? 'active' : ''}}">
                <a href="{{route('about')}}" class="menu-link">
                    <span class="menu-icon"><i class="fa-solid fa-user"></i></i></span>
                    <span class="menu-text">Profile</span>
                </a>
            </div>
        </div>

        <!-- <div class="p-3 px-4 mt-auto">
            <a class="btn d-block btn-outline-theme" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>>
                <i class="fa fa-code-branch me-2 ms-n2 opacity-5"></i> Logout
            </a>
        </div> -->
    </div>

</div>


<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>