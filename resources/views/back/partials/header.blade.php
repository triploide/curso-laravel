<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <header class="container">
        <a class="navbar-brand" href="#"><img src="/front/images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
            aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">{{ __('backoffice.nav.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/movies">{{ __('backoffice.nav.movies') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('backoffice.nav.sitcoms') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/backoffice/language">{{ __('backoffice.nav.lang') }}</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Buscar">
            </form>
        </div>
    </header>
</nav>