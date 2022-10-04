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

        <div class="input-group p-5 bg-info">
            <input type="search" class="form-control" placeholder="Recherche produit à partir du nom..." aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary bg-secondaire text-white rounded-2">Recherche</button>
        </div>

        <img src="/site_retro_game/img/retro arcade.webp" alt="RG1manette" class="w-100">



        <footer class="bg-opposition text-dark p-4 text-center">
            <div class="container">
                Retro Game. Tous droits réservés © 2022
            </div>
        </footer>
        
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>