<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Projet S2</title>
  </head>
  <body>
  <section id="list">
      <?php
      if (isset($_POST['list'])){ ?>
          <h2>Créer une liste</h2>
      <form action="page4.php" name="list2" method="post">
          <p>Classe : <input type="textarea"></p>
          <input type="submit" value="Créer">
      </form>
      <?php } ?>
  </section>
<section id="add">
    <?php
    if (isset($_POST['add'])){?>
    <h2>Ajouter un élève</h2>
    <form action="page4.php" name="add2" method="post">
        <p>Nom : <input type="textarea" name="nom"></p>
        <p>Prénom : <input type="textarea" name="prenom"></p>
        <input type="submit" value="Créer">
    </form>
    <?php } ?>
</section>
  </body>
</html>
