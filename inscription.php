<?php
session_start();

require('src/connexion.php');

if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm'])){

    
    $pseudo            = $_POST['pseudo'];
    $email             = $_POST['email'];
    $password          = $_POST['password'];
    $pass_confirm      = $_POST['password_confirm'];

    
    if($password != $pass_confirm){
        header('location: inscription.php?error=1&pass=1');
        exit();
    }

    $req = $db->prepare("SELECT count(*) as numberEmail 
                         FROM users WHERE email = ?");
    $req->execute(array($email));

    while($email_verification = $req->fetch()){
        if($email_verification['numberEmail'] != 0){
            header('location: inscription.php?error=1&email=1');
            exit();
        }
    }

    $secret = sha1($email).time();
    $secret = sha1($secret).time().time();

    $password = "aq1".sha1($password."1254")."25";

    $req = $db->prepare("INSERT INTO users(pseudo, email, password, secret) VALUES(?, ?, ?, ?)");
    $req->execute(array($pseudo, $email, $password, $secret));

    header('location: inscription.php/?success=1');
    exit();

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP et MySQL : la formation ultime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/site_retro_game/design/default.css">
    <link rel="stylesheet" href="/site_retro_game/design/log.css">
</head>
<body>
    <header>
        <h1>Inscription</h1>
    </header>

    <div class="container py-4">

        <?php
            if(!isset($_SESSION['connect'])){ ?>
                <p id="info">Bienvenue sur mon site, pour en voir plus, inscrivez-vous. Sinon, <a href="../site_retro_game/connexion.php">Connectez-vous</a><br>
                <a href="/site_retro_game/index.php" class="text-info">Retro game</a></p>

            <?php 

            if(isset($_GET['error'])){
                                            
                if(isset($_GET['pass'])){
                    echo '<p id="error">Les mots de passe ne correspondent pas.</p>';
                }
                else if(isset($_GET['email'])){
                    echo '<p id="error">Cette adresse email est d??j?? utilis??e.</p>';
                }
            }
            else if(isset($_GET['success'])){
                echo '<p id="success">Inscription prise correctement en compte.</p>';
            }
  
            ?> 

            <div id="form">
                <form method="post" action="inscription.php">
                    <table>
                        <tr>
                            <td>Pseudo</td>
                            <td><input type="text" name="pseudo" placeholder="Ex : Nicolas"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" placeholder="example@gmail.com"></td>
                        </tr>
                        <tr>
                            <td>Mot de passe</td>
                            <td><input type="password" name="password" placeholder="Ex : *****"></td>
                        </tr>
                        <tr>
                            <td>Ressaisir mot de passe</td>
                            <td><input type="password" name="password_confirm" placeholder="Ex : *****"></td>
                        </tr>
                    </table>
                    <div id="button">
                        <button>Inscription</button>
                    </div>
        
                </form>
            </div>
        <?php }  else { ?>

            <p id="info">
            Bonjour <?= $_SESSION['pseudo'] ?><br>
            <a href="disconnexion.php">D??connexion</a>
        </p>

        <?php } ?>
    </div>

</body>
</html>