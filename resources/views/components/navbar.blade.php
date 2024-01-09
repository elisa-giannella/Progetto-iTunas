<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">iTunas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('artists.index')}}">Artisti</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('live.index')}}">Concerti</a>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register')}}">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login')}}">Accedi</a>
                </li>
                @else
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link">Esci</button>
                    </form>
                </li>
                @endguest

            </ul>
            @auth
            <div>
                <a href="{{ route('artists.create') }}" class="btn btn-warning">Aggiungi artista</a>
                <a href="{{ route('live.create') }}" class="btn btn-warning">Aggiungi concerto</a>
            </div>
            @endauth
        </div>
    </div>
</nav>

<div class="spacing"></div>