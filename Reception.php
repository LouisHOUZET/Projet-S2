<!DOCTYPE html>
<html>
    <head>
        <!-- Inclure fichier .css pour styliser le .html -->
        <!--link rel="stylesheet" href="../css/"-->
        <!-- Titre de la page dans l'onglet -->
        <title> </title>
    </head>
    
    <body>



<?php
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
		<iframe frameborder="0" width="50%" height="450" src="C:\Stockage_fichier\nom_fichier">  
		</iframe> 
 </body>
 </html>
