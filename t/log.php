<?php
  session_start();
  if (isset($_POST['formDone'])) {
    if (!empty($_POST['identif']) AND !empty($_POST['pwd'])) {
      $iden = $_POST['identif'];
      $pwd = $_POST['pwd'];

      if ($iden == "admin") {
        if ($pwd == "adminadmin") {
          $_SESSION['iden'] = $iden;
          header('Location: addDef.php');
        }
      }
    }
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Log</title>
  </head>
  <body>
    <div align="center" style="padding-top: 100px;">
      <form method="post">
        <input type="text" name="identif"> <br><br>
        <input type="password" name="pwd"> <br><br>
        <input type="submit" name="formDone">
      </form>
    </div>
  </body>
</html>
