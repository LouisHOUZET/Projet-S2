<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->

            <form action="verification.php" method="POST">
                <h1>Connexion</h1>

                <label><b>Identifiant : </b></label>
                <input type="text" placeholder="Entrez votre identifiant" name="username" required>

                <label><b>Mot de passe : </b></label>
                <input type="password" placeholder="Entrez votre mot de passe" name="password" required>

                <input type="submit" id='submit' value='Se connecter' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Votre identifiant ou mot de passe est incorrect !</p>";
                }
                ?>
                <?php require_once('includes/footerlogin.php'); ?>
            </form>
        </div>
    </body>
</html>
