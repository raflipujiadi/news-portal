<nav>
    <div class="wrapper">
        <div class="logo">
            <a href="">Jogja News</a>
        </div>
        <!-- menu utama -->
        <div class="menu">
            <ul>
                @if (Auth::check())
                    <li class="{{ request()->is('/') ? 'active' : '' }}">
                        <a href="/">Home</a>
                    </li>
                    <li class="{{ request()->is('investasi') ? 'active' : '' }}">
                        <a href="/investasi">Investasi</a>
                    </li>
                    <li class="{{ request()->is('pendidikan') ? 'active' : '' }}">
                        <a href="/pendidikan">Pendidikan</a>
                    </li>
                    <li class="{{ request()->is('kesehatan') ? 'active' : '' }}">
                        <a href="/kesehatan">Kesehatan</a>
                    </li>
                    <li class="{{ request()->is('teknologi') ? 'active' : '' }}">
                        <a href="/teknologi">Teknologi</a>
                    </li>
                    <li class="{{ request()->is('loker') ? 'active' : '' }}">
                        <a href="/toko">Toko Online</a>
                    </li>
                    <li>
                        <a href="/logout" class="btn-logout">Logout</a>
                        <a href="#profile" class="btn-signup">{{ Auth::user()->name }}</a>
                    </li>
                @else
                    <li class="{{ request()->is('/') ? 'active' : '' }}">
                        <a href="/">Home</a>
                    </li>
                    <li class="{{ request()->is('investasi') ? 'active' : '' }}">
                        <a href="/investasi">Investasi</a>
                    </li>
                    <li class="{{ request()->is('pendidikan') ? 'active' : '' }}">
                        <a href="/pendidikan">Pendidikan</a>
                    </li>
                    <li class="{{ request()->is('kesehatan') ? 'active' : '' }}">
                        <a href="/kesehatan">Kesehatan</a>
                    </li>
                    <li class="{{ request()->is('teknologi') ? 'active' : '' }}">
                        <a href="/teknologi">Teknologi</a>
                    </li>
                    <li class="{{ request()->is('loker') ? 'active' : '' }}">
                        <a href="/toko">Toko Online</a>
                    </li>
                    <li>
                        <a href="/register" class="btn-signup">Sign Up</a>
                        <a href="/login" class="btn-signin">Sign In</a>
                    </li>
                @endif

            </ul>

        </div>
    </div>
</nav>
