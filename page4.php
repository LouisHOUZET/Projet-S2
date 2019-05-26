<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Projet S2</title>
</head>
<body>
    <h1>Suivi des élèves</h1>
        <form action="page4.php" method="post">
         <input type="submit" name="add" value="Ajouter un élève">
        </form>
    <?php if (isset($_POST['add'])){ ?>
            <fieldset>
                <legend>Ajouter un élève</legend>
                <form action="page4.php">
                    <label for="nom">Nom </label><input id="nom" type="text" name="nom"><br>
                    <label for="prenom">Prénom </label><input id="prenom" type="text" name="prenom"><br>
                    <label for="class">Promo </label><select name="class" id="class">
                        <option value="">-- Veuillez faire un choix --</option>
                        <option value="CNB1"> CNB1 </option>
                        <option value="CNB2"> CNB2 </option>
                        <option value="CNB3"> CNB3 </option>
                        <option value="CNB4"> CNB4 </option>
                        <option value="CNB5"> CNB5 </option>
                    </select><br>
                    <label for="id">Identifiant </label><input id="id" type="text" name="id"><br>
                    <label for="psswd">Mot de Passe </label><input id="psswd" type="text" name="psswd"><br>
                    <input id="créer" type="submit" name="créer" value="Ajouter">
                </form>
            </fieldset>
    <?php } ?>
        <form action="page4.php" method="post">
            <input type="submit" name="del" value="Supprimer un élève">
        </form>
    <form action="page4.php" method="post">
        <input type="submit" name="list" value="Créer nouvelle liste">
    </form>
    <?php if (isset($_POST['list'])){?>
        <fieldset>
            <legend>Créer une liste</legend>
            <form action="page4.php">
                <label for="promo">Promo </label><select name="promo" id="promo">
                    <option value="">-- Veuillez faire un choix --</option>
                    <option value="CNB1"> CNB1 </option>
                    <option value="CNB2"> CNB2 </option>
                    <option value="CNB3"> CNB3 </option>
                    <option value="CNB4"> CNB4 </option>
                    <option value="CNB5"> CNB5 </option>
                </select>
                <input id="add list" type="submit" name="add list" value="Ajouter une liste"><br>
                <input id="crea" type="submit" name="crea" value="Créer">
            </form>
        </fieldset>
    <?php }?>
</body>
</html>

