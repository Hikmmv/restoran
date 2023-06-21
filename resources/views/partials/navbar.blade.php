    <header id="header" class="fixed-top d-flex align-items-center">
        <h1 class="logo me-auto me-lg-0">
            <a href="/home">Carmellow s</a>
        </h1>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li class="nav-item {{ '$active === "home"' ? 'active' : '' }}">
                    <a class="nav-link scrollto active" href="/home">home</a>
                </li>
                <li class="nav-item {{ '$active === "menu"' ? 'active' : '' }}"><a class="nav-link scrollto"
                        href="/menu">menu</a></li>
                <li class="nav-item {{ '$active === "specials"' ? 'active' : '' }}"><a class="nav-link scrollto"
                        href="/specials">specials</a></li>
                <li class="dropdown">
                    <a href="#"><span>Order</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="nav-item {{ '$active === "meal"' ? 'active' : '' }}">
                            <a class="nav-link scrollto" href="/order_meal">order_meal</a>
                        </li>
                        <li class="nav-item {{ '$active === "table"' ? 'active' : '' }}">
                            <a class="nav-link scrollto" href="/order_table">order_dining_table</a>
                        </li>
                    </ul>
                <li class="nav-item {{ '$active === "contact"' ? 'active' : '' }}">
                    <a class="nav-link scrollto" href="/contact">contact</a>
                </li>
                <li class="nav-item {{ '$active === "dashboard"' ? 'active' : '' }}">
                    <a class="nav-link scrollto" href="/dashboard">dashboard</a>
                </li>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
        <div class="dropdown ms-auto">
            <button class="btn btn-secondary dropdown-toggle" type="submit" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                Action
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <li><a onclick="this.closest('form').submit();" class="dropdown-item nav-link"
                                href="#">Logout</a>
                        </li>
                        <li><a onclick="this.closest('form').submit();" class="dropdown-item nav-link"
                            href="#">MY Profile</a>
                    </li>
                    </form>
                @else
                    <li><a class="dropdown-item nav-link" href="/login">Login</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item nav-link" href="/register">Register</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                @endauth


            </ul>
        </div>
        </div>
    </header>
