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

        <button class="btn btn-primary w-100 mb-3" disabled>Mes commandes</button>

        <div class="container">
            <h4 class="bg-secondaire p-2 mt-2 text-center rounded-5">Vos commandes en cours</h5>
        </div>

        <div class="container">
            <p class="m-6">
                Pas de commande en cours...
            </p>
        </div>

        <button class="btn btn-primary w-100 mb-3" disabled>Mes informations personnelles</button>

        <div class="container">
            <h4 class="bg-secondaire p-2 mt-2 text-center rounded-5">Vos informations personnelles</h4>
        </div>

        <div class="container">
            <h5 class=" my-4 text-center text-white bg-danger rounded-4 p-1">Changez l'adresse mail</h5>
            <p class="text-center text-info">Choisissez une adresse mail pour vous connecter</p>
            <p class="text-center m-2 fw-bold">Adresse mail actuelle</p>
            <p class="text-center text-warning">prout@gmail.com</p>
            <form>
                <p>
                    <label for="email" class="form-label"></label>
                    <div class="input-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Nouvelle adresse mail...">
                        <span class="input-group-text">@</span>
                    </div>
                </p>
                <p>
                    <label for="password" class="form-label"></label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Veuillez saisir votre mot de passe...">
                </p>
            </form>

            <button type="button" class="btn btn-secondaire text-white my-5 d-grid gap-2 col-6 mx-auto">Changez l'adresse mail</button>

        </div>

        <div class="container mt-6">
            <h5 class=" my-4 text-center text-white bg-danger rounded-4 p-1">Changez le mot de passe</h5>
            <p class="text-center text-info">Choisissez un mot de passe unique pour assurer la sécurité de votre compte</p>
            <form>
                <p>
                    <label for="password" class="form-label"></label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe actuel...">
                </p>
                <p>
                    <label for="password" class="form-label"></label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Nouveau mot de passe...">
                </p>
                <p>
                    <label for="password" class="form-label"></label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Confirmer votre mot de passe...">
                </p>
            </form>
            
                <button type="button" class="btn btn-secondaire text-white my-5 d-grid gap-2 col-6 mx-auto">Changez le mot de passe</button>
            
        </div>
        


        <footer class="bg-opposition text-dark p-4 text-center">
            <div class="container">
                Retro Game. Tous droits réservés © 2022
            </div>
        </footer>
        
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>