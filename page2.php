<html>
	
	<body>
	<?php require_once('includes/header.php'); ?>
 <div id="content">
      <div id="content">
            <!-- tester si l'utilisateur est connecté-->
            <?php
               session_start();
              if(isset($_SESSION['username']))
              {
                 $user = $_SESSION['username'];
                    // afficher un message
                  // echo "Bonjour $user, vous êtes connecté";
                }
            ?>
  <?php require_once('includes/header.php'); ?>
        </div>
            <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>

            <!-- tester si l'utilisateur est connecté -->
            <?php
                /*session_start();*/
                if(isset($_GET['deconnexion']))
                {
                   if($_GET['deconnexion']==true)
                   {
                      session_unset();
                      header("location:login.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<br>Bonjour $user, vous êtes connectés";
                }
            ?>
        </div>

		<!--<iframe frameborder="0" width="50%" height="450" href="C:\wamp64\www\PROJET_S2\18_11_LACOMBLEZ.pdf">  
		</iframe> -->
		<!--<iframe src="18_11_LACOMBLEZ.pdf" width="50%" height="450" align="middle"></iframe>-->

		<form method="post" action="page2.php" enctype="multipart/form-data">
			<label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />
			<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
			<input type="file" name="mon_fichier" id="mon_fichier" /><br />
			<!--<label for="titre">Titre du fichier (max. 50 caractères) :</label><br />
			<input type="text" name="titre" value="Titre du fichier" id="titre" />--><br />
			<input type="submit" name="submit" value="Envoyer" />
		</form>
		
		<?php
	//$nom_fichier = "mon_fichier";
$nom_fichier = $_FILES['mon_fichier']['name'];     //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png). 

//$type = $_FILES['mon_fichier']['type']     //Le type du fichier. Par exemple, cela peut être « image/png ».
//$size = $_FILES['mon_fichier']['size']     //La taille du fichier en octets.
//$tmp_name = $_FILES['mon_fichier']['tmp_name'] //L'adresse vers le fichier uploadé dans le répertoire temporaire.
//$error = $_FILES['mon_fichier']['error']    //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.
echo $nom_fichier;
//$extensions_valides = array( 'pdf');
//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
//$extension_upload = strtolower(  substr(  strrchr($_FILES['icone']['name'], '.')  ,1)  );
//if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";
?>
		
			<iframe src="mon_fichier.pdf" width="50%" height="450" align="middle"></iframe>
			
          <?php require_once('includes/footer.php'); ?>
    </body>
</html>

	</body>
</html>