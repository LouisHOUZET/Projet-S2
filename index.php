<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Projet S2</title>
</head>
<body>
<?php
if (extension_loaded ('PDO')) {
    echo 'PDO OK';
} else {
    echo 'PDO KO';
}
?>
<section id="list">
    <?php
    if (isset($_POST['list'])){ ?>
        <h2>Créer une liste</h2>
        <form action="page4.php" method="post">
            <p>Classe : <input id="class" type="text" name="class"></p>
            <input type="submit" name="list2" value="Créer">
        </form>
    <?php } ?>
</section>
<section id="add">
    <?php
    if (isset($_POST['add'])){?>
        <h2>Ajouter un élève</h2>
        <form action="index.php" method="post">
            <p>Nom : <input id="nom" type="text" name="nom"></p>
            <p>Prénom : <input id="prenom" type="text" name="prenom"></p>
            <p>Promo : <input id="promo" type="text" name="promo"></p>
            <p>Activité : <input id="act" type="text" name="act"></p>
            <input type="submit" name='add2' value="Créer">
        </form>
    <?php }

    $pdo = new PDO('mysql:host=localhost;dbname=projisen;charset=utf8', 'root', '');

    if (isset($_POST['add2'])){
        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $promo= $_POST['promo'];
        $activite= $_POST['act'];
        $requestInputRequest="INSERT INTO `utilisateurs`(`id`, `Login`, `Passwd`, `Promo`, `Nom`, `Prenom`, `Date_rendu`, `Activite`)
														VALUES ( ".[''].",".$_POST['nom'].",".$_POST['prenom'].", ".$_POST['promo'].",
														".$_POST['nom'].", ".$_POST['prenom'].",".[''].",".$_POST['act'].")";
        $response2 = $pdo->exec($requestInputRequest);//On inclut dans la base de donnée le compte utilisateur
        $msgError1=  "La personne ".$_POST['prenom']." a bien été ajouté";//On dit que l'utilisateur a été ajouté
        echo 'La base de donnée a été modifiée !';
    }
    else{
        $msgError1= "Il y a un problème avec l'entrée de la personne dans la base de donnée.";}
    ?>
</section>
</body>
</html>