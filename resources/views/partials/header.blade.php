<header class=" d-flex justify-content-around" id="site_header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('comics') }}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo" width="80"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5" id="navbarNavAltMarkup">
                <div class="navbar-nav text-uppercase fw-bolder">
                    <a class="nav-link" aria-current="page" href="#">Characters</a>
                    <a class="nav-link" href="#">Comics</a>
                    <a class="nav-link" href="#">Movies</a>
                    <a class="nav-link" href="#">TV</a>
                    <a class="nav-link" href="#">Games</a>
                    <a class="nav-link" href="#">Collectibles</a>
                    <a class="nav-link" href="#">Videos</a>
                    <a class="nav-link" href="#">Fans</a>
                    <a class="nav-link" href="#">News</a>
                    <a class="nav-link" href="#">Shop</a>
                    <a class="nav-link" href="{{ route('comics.index') }}">Admin Panel</a>
                </div>
            </div>
        </div>
    </nav>
</header>
