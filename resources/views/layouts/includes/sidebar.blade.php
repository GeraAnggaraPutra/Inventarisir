<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                    <img src="{{ asset('assets/img/logo-lpkia2.png')}}" alt="IDE LPKIA" class="mt-3" />
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="{{ Request::is('admin') ? 'active' : '' }}">
                        <a href="{{ route('admin')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="{{ Request::is('admin/barang*') ? 'active' : '' }}">
                            <a href="{{ route('barang.index')}}">
                                <i class="fas fa-chart-bar"></i>Barang</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>