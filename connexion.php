<?php


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
    
        <div id="form">
            <form method="post" action="connexion.php">
                <table>
                    <tr>
                        <td>Pseudo</td>
                        <td><input type="text" name="pseudo" placeholder="Ex : Nicolas"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" placeholder="example@gmail.com"></td>
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