<?php
   $bdd = new PDO('mysql:host=127.0.0.1;dbname=TPE;charset=utf8', 'root', '');

   if (isset($_GET['def'])) {
     $defAsk = $_GET['def'];

     $requdef = $bdd -> prepare('SELECT * FROM definition WHERE mot = ?');
     $requdef -> execute(array($defAsk));
     $def = $requdef->fetch();

     $mot = $def['mot'];
     $definition = $def['definition'];
   }
   else {
     header('Location: ..');
   }
?>
<html>
   <head>
      <title>Definition - <?php echo $mot; ?></title>
      <meta charset="utf-8">
      <link rel="icon" type="image/png" href="../img/icon/favicon.png" />
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <link rel="stylesheet" type="text/css" href="../materialize/css/materialize.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
      <script src="http://code.onion.com/fartscroll.js%22%3E"></script>
      <script src="../materialize/js/materialize.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
           $('.parallax').parallax();
           $('.tooltipped').tooltip({delay: 50});
         });
      </script>
   </head>
   <body>
      <header></header>
      <main>
         <div class="parallax-container">
            <div class="parallax"><img src="../img/parallax/fond-1.png"></div>
            <div class="section">
               <div class="container title" align="center">
                  <img class="logo" src="../img/icon/logo.png"></img>
                  <p align="center" class="subtitle">TPE réalisé par Paul, Denis et Alan en 623</p>
               </div>
            </div>
         </div>
         <div class="section white">
            <ul class="row container" align="center">
               <li><br></li>
               <li>
                  <a class="waves-effect waves-light btn-large grey darken-4" href="#!">Partie I</a>
                  <a class="waves-effect waves-light btn-large grey darken-4" href="#!">Partie II</a>
                  <a class="waves-effect waves-light btn-large grey darken-4" href="#!">Partie III</a>
               </li>
               <li><br></li>
               <li>
                  <div class="divider"></div>
               </li>
               <li>
                  <p style="font-size: 14pt">
                     <?php
                        echo "<b>" . $mot . "</b> : " . $definition;
                      ?>
                  </p>
               </li>
            </ul>
         </div>
         <div class="parallax-container">
            <div class="parallax"><img src="../img/parallax/fond-3.png"></div>
         </div>
      </main>
      <footer class="grey darken-3 page-footer">
         <div class="footer-copyright">
         <div class="container">
            Ce site a étais créé par Lord_All
            <div class="right">
               <a href="https://twitter.com/LordAll_" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @LordAll_</a>
               <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div>
         </div>
      </footer>
   </body>
</html>
