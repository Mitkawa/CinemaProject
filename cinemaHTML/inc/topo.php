<nav class="navbar navbar-expand-lg bg-black fixed-top">
    <div class="container-fluid text-white">
        <a class="navbar-brand text-white" href="index.php">
            <img src="img/LogoAtt.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="index.php">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="em-cartaz.php">
                        Em Cartaz
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="filmes.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Info
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="atores.php">Atores</a></li>
                        <li><a class="dropdown-item" href="produtores.php">Produtores</a></li>
                        <li><a class="dropdown-item" href="cinemas.php">Cinemas</a></li>
                        <li><a class="dropdown-item" href="filmes.php">Filmes</a></li>
                    </ul>
                </li>
            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Pesquisar">
                <button class="btn btn-outline-light" type="submit">
                    <i class="fa-solid fa-magnifying-glass bg"></i>
                </button>
            </form>
        </div>
    </div>
</nav>