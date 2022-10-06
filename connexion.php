<?php
session_start();

if(isset($_SESSION['connect'])){
    header('location: home_customer.php');
    exit();
} 

else if(isset($_SESSION['connectAdmin'])){
    header('location: home_admin.php');
    exit();
} 

else if(isset($_SESSION['connectSeller'])){
    header('location: home_seller.php');
    exit();
} 

require('src/connexion.php');

if(!empty($_POST['email']) && !empty($_POST['password'])){

    $email      = $_POST['email'];
    $password   = $_POST['password'];

    $password = "aq1".sha1($password."1254")."25";

    $req = $db->prepare('SELECT * FROM users WHERE email = ?');
    $req->execute(array($email));

    while($user = $req->fetch()){ 

        if($email == "admin@admin.fr" && $password == $user['password']){
            
            $_SESSION['connectAdmin'] = 1;
            $_SESSION['pseudo']  = $user['pseudo'];

            header('location: connexion.php?success=1');
            exit();
        }

        else if($email == "seller1@seller1.fr" && $password == $user['password']){
            
            $_SESSION['connectSeller'] = 1;
            $_SESSION['pseudo']  = $user['pseudo'];

            header('location: connexion.php?success=1');
            exit();
        }

        else if($password == $user['password']){
        
            $_SESSION['connect'] = 1;
            $_SESSION['pseudo']  = $user['pseudo'];

            header('location: connexion.php?success=1');
            exit();

        } 
        
    }

    header('location: connexion.php?error=1');

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/site_retro_game/design/default.css">
    <link rel="stylesheet" href="/site_retro_game/design/log.css">
</head>
<body>
    <header>
        <h1>Connexion</h1>
    </header>

    <div class="container py-4">
        <p id="info">Bienvenue sur mon site, si vous n'êtes pas inscrit, <a href="../site_retro_game/inscription.php">Inscrivez-vous</a><br>
        <a href="/site_retro_game/home.php" class="text-info">Retro game</a></p>
        

        <?php
            if(isset($_GET['error'])){
                echo '<p id="error">Authentification incorrecte.</p>';
            }
            else if(isset($_GET['success'])){
                echo '<p id="success">Vous êtes maintenant connecté</p>';
            }
        ?>
    
        <div id="form">
            <form method="post" action="connexion.php">
                <table>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" placeholder="example@gmail.com" required></td>
                    </tr>
                    <tr>
                        <td>Mot de passe</td>
                        <td><input type="password" name="password" placeholder="EX : *****" required></td>
                    </tr>
                </table>
                <div id="button">
                    <button>Connexion</button>
                </div>
        
            </form>
        </div>
    </div>

</body>
</html>