<!DOCTYPE html>
<?php ini_set('display_errors', true); ?>
<html>
<link rel="stylesheet" href="../css/postevent.css">

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
    <div class="row">
      <?php

      include 'connect.php';

      $bdd = connectToSQL();

      $reponse = $bdd->query('SELECT * FROM event');
      // $donnees = $reponse->fetch();
?>

      <div class="container">
    <div class="row">
      <?php while ($donnees = $reponse->fetch())
      {
        $date = date_create_from_format('Y-m-d', "$donnees[dateevent]");
        $hdebut = DateTime::createFromFormat('H:i:s', "$donnees[hdebut]");
        $hfin = DateTime::createFromFormat('H:i:s', "$donnees[hfin]");
        $pathimg = "../imgevent/";
        $nom = $donnees['nom'];
        $description = $donnees['description'];
        $imgrugby = "rugby-event.jpg";
        $imgfoot = "football.jpg";

      	?>
        <div class="col-sm-4">
            <div class="panel panel-primary event-primary">
                <div class="panel-heading"><h2><a href="#"><?php echo $nom .'</h2></a> ('. date_format($date, 'd/m/y').') - '. $donnees[sport] ?></a></h2></div>
                <div class="panel-body nopadding">
              <?php
              if ($donnees[sport]== 'Football') {
                $img = $imgfoot;
              }
              else {
                $img = $imgrugby;
              }

              echo '<img src="' . $pathimg . $imgfoot.'" alt="event image" class="img-responsive" />';?>
                    <div class="row nopadding">
                        <div class="col-sm-6 nopadding">
                            <time class="start pink">
                                Début <span class="day"><?php echo $hdebut->format('H:i'); ?></span>
                            </time>
                        </div>
                        <div class="col-sm-6 nopadding">
                            <time class="end purple">
                                Fin <span class="day"><?php echo $hfin->format('H:i'); ?></span>
                            </time>
                        </div>
                    </div>
                </div>
                <div class="panel-footer panel-primary">
                    <p><?php echo $description; ?>
                    </p>
                    <a href="http://ulurudaytours.com.au/" class="btn btn-success">Contacter</a>
                </div>
            </div>
        </div>
        <?php
        }

        $reponse->closeCursor();

        ?>
    </div>
</div>

  </body>
</html>
