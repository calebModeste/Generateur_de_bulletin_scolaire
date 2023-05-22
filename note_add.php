<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generateur Bulletin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <?php include('./callback.php') ?>
</head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <!-- header -->
    <?php require('./public/template/header.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addNote'])) {      
      $setnotes =$connect->exePrepaQuery($bulletin->setNote($_POST['code'],$_POST['matiere'],$_POST['coef'],$_POST['note']));
      echo "<b> ajout reussi</b>";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addMatiere'])) {
        $setmatiere= $connect->exePrepaQuery($bulletin->setMatiere($_POST['matiere']));
        header('location: ./note_add.php');
    }
    ?>

    <!-- main -->
    <main>
        <div class="card py-5 mt-5">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div>
              
              <label for="code">Code etudiant</label>
                <input type="text" name="code" value="<?php echo $retVal = (!empty($_GET['code'])) ? $_GET['code'] : "" ; ?>" placeholder="Code etudiant" maxlength="6" >
                <select name="matiere" id="matiere" >
                  <option value="">matiere</option>
                  <?php
                    foreach ($matieres as $matiere):
                  ?>
                  <option value="<?=$matiere['id'] ?>"><?=$matiere['matiere'] ?></option>
                  <?php
                    endforeach
                  ?>
                </select>
                <label for="note"> note</label>
                <input type="number" name="note"  min="0" max="20">
              <label for="coef"> coef</label>
                <input type="number" name="coef"  min="1" max="4">
              
                <input type="submit" name="addNote" class="btn btn-primary" value="add">
              
            </div>

          </form>
        </div>
        <div class="row col-5 m-3">
                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div class="input-group flex-nowrap">
                      <span class="input-group-text" id="addon-wrapping">matière</span>
                      <input type="text" name="matiere" class="form-control" placeholder="ajouté matière" >
                      <input type="submit" name="addMatiere" class="btn btn-primary" value="add">
                    </div>
                  </form>
        </div>
    </main>


</body>
</html>
