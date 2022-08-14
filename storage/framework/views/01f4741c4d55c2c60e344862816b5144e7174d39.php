<nav class="navbar wrapper container d-md-flex d-lg-flex d-xl-flex">
    <div class="logo col-">
    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
        <span class="hamburger-line transition duration-300 ease-in-out"></span>
        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
    </button>
        <a href="">Jogja News</a>
    </div>
    <div class="wrapper nav">
        <!-- menu utama -->
        <div class="navbar-nav flex-row flex-wrap ms-md-auto">
            <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                <?php if(Auth::check()): ?>
                    <li class="<?php echo e(request()->is('/') ? 'active' : ''); ?>">
                        <a href="/">Home</a>
                    </li>
                    <li class="<?php echo e(request()->is('investasi') ? 'active' : ''); ?>">
                        <a href="/investasi">Investasi</a>
                    </li>
                    <li class="<?php echo e(request()->is('pendidikan') ? 'active' : ''); ?>">
                        <a href="/pendidikan">Pendidikan</a>
                    </li>
                    <li class="<?php echo e(request()->is('kesehatan') ? 'active' : ''); ?>">
                        <a href="/kesehatan">Kesehatan</a>
                    </li>
                    <li class="<?php echo e(request()->is('teknologi') ? 'active' : ''); ?>">
                        <a href="/teknologi">Teknologi</a>
                    </li>
                    <li class="<?php echo e(request()->is('loker') ? 'active' : ''); ?>">
                        <a href="/toko">Toko Online</a>
                    </li>
                    <li>
                        <a href="/logout" class="btn-logout">Logout</a>
                        <a href="#profile" class="btn-signup"><?php echo e(Auth::user()->name); ?></a>
                    </li>
                <?php else: ?>
                    <li class="<?php echo e(request()->is('/') ? 'active' : ''); ?>">
                        <a href="/">Home</a>
                    </li>
                    <li class="<?php echo e(request()->is('investasi') ? 'active' : ''); ?>">
                        <a href="/investasi">Investasi</a>
                    </li>
                    <li class="<?php echo e(request()->is('pendidikan') ? 'active' : ''); ?>">
                        <a href="/pendidikan">Pendidikan</a>
                    </li>
                    <li class="<?php echo e(request()->is('kesehatan') ? 'active' : ''); ?>">
                        <a href="/kesehatan">Kesehatan</a>
                    </li>
                    <li class="<?php echo e(request()->is('teknologi') ? 'active' : ''); ?>">
                        <a href="/teknologi">Teknologi</a>
                    </li>
                    <li class="<?php echo e(request()->is('loker') ? 'active' : ''); ?>">
                        <a href="/toko">Toko Online</a>
                    </li>
                    <li>
                        <a href="/register" class="btn-signup">Sign Up</a>
                        <a href="/login" class="btn-signin">Sign In</a>
                    </li>
                <?php endif; ?>

            </ul>

        </div>
    </div>
</nav>
<nav class="navbar navbar-dark bg-red full-width h-100">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <div class="logo">
                <a href="<?php echo e('/'); ?>">Jogja News</a>
            </div>
        </button>
    </div>
</nav>
<nav class="collapse" id="navbarToggleExternalContent">
    <div class="bg-transparent p-4 mr-0 w-100">
        <?php if(Auth::check()): ?>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="list-group-horizontal-md" id="<?php echo e(request()->is('/') ? 'active' : ''); ?>">
                    <a href="/">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li id="<?php echo e(request()->is('investasi') ? 'active' : ''); ?>">
                    <a href="/investasi">Investasi</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li id="<?php echo e(request()->is('pendidikan') ? 'active' : ''); ?>">
                    <a href="/pendidikan">Pendidikan</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li id="<?php echo e(request()->is('kesehatan') ? 'active' : ''); ?>">
                    <a class="btn-block" href="/kesehatan">Kesehatan</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li id="<?php echo e(request()->is('teknologi') ? 'active' : ''); ?>">
                    <a href="/teknologi">Teknologi</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li id="<?php echo e(request()->is('loker') ? 'active' : ''); ?>">
                    <a href="/toko">Toko Online</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li>
                    <a href="/logout" class="btn-logout">Logout</a>
                    <a href="#profile" class="btn-signup"><?php echo e(Auth::user()->name); ?></a>
                </li>
            </ul>
        <?php else: ?>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li id="<?php echo e(request()->is('/') ? 'active' : ''); ?>">
                    <a href="/">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li id="<?php echo e(request()->is('investasi') ? 'active' : ''); ?>">
                    <a href="/investasi">Investasi</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li id="<?php echo e(request()->is('pendidikan') ? 'active' : ''); ?>">
                    <a href="/pendidikan">Pendidikan</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li id="<?php echo e(request()->is('kesehatan') ? 'active' : ''); ?>">
                    <a class="btn-block" href="/kesehatan">Kesehatan</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li id="<?php echo e(request()->is('teknologi') ? 'active' : ''); ?>">
                    <a href="/teknologi">Teknologi</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li id="<?php echo e(request()->is('loker') ? 'active' : ''); ?>">
                    <a href="/toko">Toko Online</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li>
                    <a href="/register" class="btn-signup">Sign Up</a>
                    <a href="/login" class="btn-signin">Sign In</a>
                </li>
            </ul>
        <?php endif; ?>

        </ul>
    </div>
    </div>
<?php /**PATH C:\Users\ASUS\Desktop\Program web\news-portal\resources\views/components/navnavbar.blade.php ENDPATH**/ ?>