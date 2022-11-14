<html>
  <head>
    <title>Devine mon nombre</title>
  </head>
  <body>
    <h1>Pense à un nombre entre 1 et 50 !</h1>
    <?php 
      $nombre = 30; //Le nombre à trouver 
      $nombreDeTentatives = 50; //Le nombre de tentatives autorisées

      if ($nombre < 0 || $nombre > 50) {
        echo 'hey, tu triches ! On avait dit entre 0 et 50 !';
      } else {
    ?> 
    <p>J'essaye de le deviner...</p>
    <?php
          $essais = 0;
          do {
            $tentative = rand(0, 50);
            echo 'Est-ce que c\est' . $tentative . ' ? ';
            
            if ($tentative == $nombre) {
              echo'<h2>OUI !</h2>';
              break;
            } else {
              echo 'Non...<br>';
            }
            $essais++;
          } while ($essais < $nombreDeTentatives);
          if ($tentative != $nombre) {
            echo '<br>Je n\'ai pas trouvé =(';
          }
        }
    ?>      
  </body>
</html>