<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

            <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <legend>Création d'un événement</legend>
            <form action="assets/inc/addevent.php" enctype="multipart/form-data" method="post">
            <input class="form-control" name="nom" placeholder="Nom" type="text" />
            <input class="form-control" name="adresse" placeholder="Adresse" type="text" />
            <input class="form-control" name="centre" placeholder="Nom du centre" type="text" />
            <textarea name="description" class="form-control" rows="9" cols="25" required="required" placeholder="Description"></textarea>
                  <label for="">Date</label>
                  <input class="form-control" name="dateevent" type="date" />
            <label for="">Heure</label>
            <div class="row">
                <div class="col-xs-4 col-md-4">
                  <label for="">Début</label>
                  <input class="form-control" name="hdebut" placeholder="Début" type="time" />
                </div>
                <div class="col-xs-4 col-md-4">
                  <label for="">Fin</label>
                <input class="form-control" name="hfin" placeholder="Fin" type="time" />
                </div>
            </div>
            <label>Sport</label>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <select class="form-control" name="sport" required="required">
                        <option value="Football">Football</option>
                        <option value="Rugby">Rugby</option><br>
                    </select>
                </div>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Créer</button>
            </form>
        </div>
    </div>

  </body>
</html>
