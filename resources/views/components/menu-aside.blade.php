<style>
  /* Estilo para os itens da lista */
li {
    color: #fff;
    transition: color 0.3s, background-color 0.3s;
}

li:hover {
    color: #ff851b;
}

li i {
    color: #ff851b;
}

/* Estilo para o item ativo */
.active {
    background-color: #ff851b;
    color: #000; /* texto preto */
}

.active i {
    color: #000; /* ícone preto */
}

/* Estilo para o item de logout */
.logout {
    background-color: darkred;
}

.logout a {
    color: #ff851b;
}

.logout a:hover {
    color: #fff;
}

</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('welcome') }}" class="brand-link">
        <img src="{{ asset('public/img/favicon.png') }}" alt="Technomac Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Technomac</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('page-config.index') }}" class="nav-link {{ request()->routeIs('page-config') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Page Config</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link {{ request()->routeIs('categories') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('equipments.index') }}" class="nav-link {{ request()->routeIs('equipments') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Equipments</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('employees.index') }}" class="nav-link {{ request()->routeIs('employees') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Employees</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link {{ request()->routeIs('users') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('partners.index') }}" class="nav-link {{ request()->routeIs('partners') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>Partners</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('brands.index') }}" class="nav-link {{ request()->routeIs('brands') ? 'active' : '' }}">
                        <i class="nav-icon fab fa-squarespace"></i>
                        <p>Brands</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox & Social Media
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('mailbox') }}" class="nav-link {{ request()->routeIs('mailbox') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('mailbox.compose') }}" class="nav-link {{ request()->routeIs('mailbox.compose') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compose</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('mailbox.read') }}" class="nav-link {{ request()->routeIs('mailbox.read') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('mailbox.whatsapp') }}" class="nav-link {{ request()->routeIs('mailbox.whatsapp') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>WhatsApp</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link ">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Configure
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item logout">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
