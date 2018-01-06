<?php
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=TPE;charset=utf8', 'root', '');

  if (isset($_SESSION['iden'])) {
    header('Location: ..');
  }
  else {
    if (isset($_POST['formDef'])) {
      if (!empty($_POST['Mot']) AND !empty($_POST['def'])) {
        $mot = $_POST['Mot'];
        $def = $_POST['def'];

        $requdef = $bdd -> prepare('INSERT INTO definition(mot, definition) VALUES (?, ?)');
        $requdef -> execute(array($mot, $def));

      }
      else {
        $error = "Vous devez remplir tous les champs";
      }
    }
  }
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajouter une definition</title>
  </head>
  <body>
    <div align="center" style="padding-top: 100px;">
      <form method="post" id="formID">
        <input type="text" name="Mot" placeholder="Mot"> <br><br>
        <textarea form="formID" name="def" placeholder="Definition..." rows="10" cols="70"></textarea> <br><br>
          <input type="submit" name="formDef" value="Ajouter">
      </form>
      <br><br>
      <a href="deconnect.php"><button>Déconnexion</button></a>
      <br><br>
      <?php if (isset($error)) {
        echo $error;
      } ?>
    </div>
  </body>
</html>
