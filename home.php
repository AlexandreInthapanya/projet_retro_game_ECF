<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="/site_retro_game/design/default.css">
        <link rel="stylesheet" href="/site_retro_game/design/style.css">
        <title>Retro game</title>
    </head>
    <body>

        <header class="sticky-top">
            <nav class="navbar navbar-dark bg-principal navbar-expand-md">
                <div class="container">
                    <div class="navbar-brand">
                        <img src="/site_retro_game/img/retro_game_trois_manettes" alt="logoRetroGame1" class="img_retro_game_1">
                        RETRO GAME
                    </div>

                    <div class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menuDeroulant">
                        <span class="navbar-toggler-icon"></span>
                    </div>

                    <div class="collapse navbar-collapse" id="menuDeroulant">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/site_retro_game/home.php" class="nav-link">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a href="/site_retro_game/search.php" class="nav-link">Recherche</a>
                            </li>
                            <li class="nav-item">
                                <a href="/site_retro_game/account.php" class="nav-link">Mon compte</a>
                            </li>
                            <li class="nav-item">
                                <a href="/site_retro_game/admin.php" class="nav-link">Admin</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </header>

        <section>

            <button class="btn btn-primary w-100" disabled>Nouveautés</button>

            <div id="monCarousel" class="carousel slide carousel-fade bg-opposition p-5" data-bs-ride="carousel">

                <ul class="carousel-indicators">
                    <li data-bs-target="#monCarrousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#monCarrousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#monCarrousel" data-bs-slide-to="2"></li>
                </ul>

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="/site_retro_game/img/Jojo's bizarre adventure all star battle PS5.jpg" alt="Jojo's bizarre adventure all star battle PS5" class="w-100 img-">
                    </div>

                    <div class="carousel-item">
                        <img src="/site_retro_game/img/Stray PS5.jpg" alt="Stray PS5" class="w-100">
                    </div>

                    <div class="carousel-item">
                        <img src="/site_retro_game/img/The ascent PS5.jpg" alt="Stray PS5" class="w-100">
                    </div>

                </div>
                
                <a class="carousel-control-prev" href="#monCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#monCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Suivant</span>
                </a>

            </div>

            <button class="btn btn-primary w-100" disabled>Tous les jeux disponibles</button>
            <div class="btn-group m-3">
                <button type="button" class="btn btn-primary bg-warning">Trier</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" ></button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item bg-opposition" href="">Pertinence</a></li>
                    <li><a class="dropdown-item bg-opposition" href="">Nouveautés</a></li>
                    <li><a class="dropdown-item bg-opposition" href="">Prix</a></li>
                    <li><a class="dropdown-item bg-opposition" href="">Dates d'ajout</a></li>
                </ul>

            </div>

            <div class="row">

                <div class="card mx-auto my-5 col-4 col-sm-5 col-md-4 bg-secondaire">
                    <div class="card-body">
                        <img src="/site_retro_game/img/Jojo's bizarre adventure all star battle PS5.jpg" alt="Jojo's bizarre adventure all star battle PS5" class="card-img-top mb-4 mt-2">
                        <h5 class="card-title text-white">Jojo's bizarre adventure all star battle PS5</h5>
                        <h6></h6>
                        <p class="card-text mt-4">69,99€</p>
                        <a href="#" class="card-link">En savoir plus</a>
                        <button>Ajouter au panier</button>
                    </div>
                </div>

                <div class="card mx-auto my-5 col-4 col-sm-5 col-md-4 bg-secondaire">
                    <div class="card-body">
                        <img src="/site_retro_game/img/Stray PS5.jpg" alt="Jojo's bizarre adventure all star battle PS5" class="card-img-top mb-4 mt-2">
                        <h5 class="card-title text-white">Jojo's bizarre adventure all star battle PS5</h5>
                        <h6></h6>
                        <p class="card-text mt-4">69,99€</p>
                        <a href="#" class="card-link">En savoir plus</a>
                        <button>Ajouter au panier</button>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="card mx-auto my-5 col-4 col-sm-5 col-md-4 bg-secondaire">
                    <div class="card-body">
                        <img src="/site_retro_game/img/The ascent PS5.jpg" alt="Jojo's bizarre adventure all star battle PS5" class="card-img-top mb-4 mt-2">
                        <h5 class="card-title text-white">Jojo's bizarre adventure all star battle PS5</h5>
                        <h6></h6>
                        <p class="card-text mt-4">69,99€</p>
                        <a href="#" class="card-link">En savoir plus</a>
                        <button>Ajouter au panier</button>
                    </div>
                </div>
    
                <div class="card mx-auto my-5 col-4 col-sm-5 col-md-4 bg-secondaire">
                    <div class="card-body">
                        <img src="/site_retro_game/img/The last of us PS5.jpg" alt="Jojo's bizarre adventure all star battle PS5" class="card-img-top mb-4 mt-2">
                        <h5 class="card-title text-white">Jojo's bizarre adventure all star battle PS5</h5>
                        <h6></h6>
                        <p class="card-text mt-4">69,99€</p>
                        <a href="#" class="card-link">En savoir plus</a>
                        <button>Ajouter au panier</button>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="card mx-auto my-5 col-4 col-sm-5 col-md-4 bg-secondaire">
                    <div class="card-body">
                        <img src="/site_retro_game/img/White day a labyrinth named school PS5.jpg" alt="Jojo's bizarre adventure all star battle PS5" class="card-img-top mb-4 mt-2">
                        <h5 class="card-title text-white">Jojo's bizarre adventure all star battle PS5</h5>
                        <h6></h6>
                        <p class="card-text mt-4">69,99€</p>
                        <a href="#" class="card-link">En savoir plus</a>
                        <button>Ajouter au panier</button>
                    </div>
                </div>
    
                <div class="card mx-auto my-5 col-4 col-sm-5 col-md-4 bg-secondaire">
                    <div class="card-body">
                        <img src="/site_retro_game/img/Fifa 23 PS5.jpg" alt="Jojo's bizarre adventure all star battle PS5" class="card-img-top mb-4 mt-2">
                        <h5 class="card-title text-white">Jojo's bizarre adventure all star battle PS5</h5>
                        <h6></h6>
                        <p class="card-text mt-4">69,99€</p>
                        <a href="#" class="card-link">En savoir plus</a>
                        <button>Ajouter au panier</button>
                    </div>
                </div>

            </div>

        </section>

        <footer class="bg-opposition text-dark p-4 text-center">
            <div class="container">
                Retro Game. Tous droits réservés © 2022
            </div>
        </footer>
        
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>
    