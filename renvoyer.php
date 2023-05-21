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
        <?php require('./public/template/header.php') ?>
    
        <!-- main -->
        <main>
          <div class="card my-5 mx-5">
            <div class="card-header">
              <b>attention</b> 
            </div>
            <div class="card-body">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <p class="card-title">Procédure de renvoie de l'étudiant de matricule : <b><?= " ".$_GET['code']?></b></p>

                <p class="card-text">ce processusse est définitif voulez-vous vraiment le faire?</p>

                <input type="submit" value="renvoyer" class="btn btn-danger">

              </form>
            </div>
          </div>
        </main>
        <?php 
            $delete = ($_SERVER["REQUEST_METHOD"] == "POST") ? $connect->exePrepaQuery($user->deleteUser($_GET['code'])): "desolée imppossible" ;
            header('https://www.php.net/manual/fr/pdo.query.php')
        ?>
    
    </body>
    </html>
    