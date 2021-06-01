<header id="header" class="fixed-top">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-10 d-flex align-items-center">
                <a href="/" class="logo mr-auto"><img src="/front/images/logo.png" alt="{{ config('app.name') }}"></a>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="#header">Home</a></li>
                        <li><a href="#movies">Películas</a></li>
                        <li><a href="#pricing">Precios</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav><!-- .nav-menu -->

                @auth
                    <a href="{{ route('user.logout') }}" class="get-started-btn scrollto">Logout</a>
                @else
                    <a href="{{ route('user.login') }}" class="get-started-btn scrollto">Login</a>
                @endauth
            </div>
        </div>

    </div>
</header>
