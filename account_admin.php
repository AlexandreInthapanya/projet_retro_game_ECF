<?php include('/MAMP/htdocs/site_retro_game/include/header_admin.php') ?>

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
        
<?php include('/MAMP/htdocs/site_retro_game/include/footer.php') ?>