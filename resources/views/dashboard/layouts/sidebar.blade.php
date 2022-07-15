<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <style type="text/css">
                #layoutSidenav {
                    background-color: black;
                    color: white;
                }
            </style>
            <!-- Navbar Samping -->
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link collapsed" href="{{ url('/dashboard/products') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard Produk
                    </a>
                    <a class="nav-link collapsed" href="{{ url('/dashboard/categories') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>Kategori Produk
                    </a>
                    @can('superadmin')                        
                    <a class="nav-link collapsed" href="{{ url('/dashboard/users') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>Member
                    </a>
                    @endcan
                    <form action="/logout" method="post" class="nav-link collapsed">
                        @csrf
                        <button>logout</button>
                    </form>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                @if (auth()->check())
                {{ (auth()->user()->user_email) }}
                @endif
                <p>Admin</p>
            </div>
        </nav>
    </div>