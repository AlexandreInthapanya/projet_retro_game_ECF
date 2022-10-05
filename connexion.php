<?php
session_start();

if(isset($_SESSION['connect'])){
    header('location: home.php');
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

        if($password == $user['password']){
        
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="/site_retro_game/design/login.css">
</head>
<body>
    <header>
        <h1>Connexion</h1>
    </header>

    <div class="container">
        <p id="info">Bienvenue sur mon site, si vous n'êtes pas inscrit, <a href="../site_retro_game/inscription.php">Inscrivez-vous</a></p>

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