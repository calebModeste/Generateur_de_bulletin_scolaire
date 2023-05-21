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
    <ul class="list-group mt-5 mx-5 ">
        <?php foreach($allUser as $col):  ?>
            <li class="list-group-item ">
                <div>
                    <div class=" mx-2">
                        <b>nom :</b>  <?=$col['nom']?>
                    </div>
                    <div class=" mx-2">
                        <b>prenom :</b> <?=$col['prenom']?>
                    </div>
                    <div class=" mx-2">
                        <b>code etudiant:</b> <?=$col['code']?>
                    </div>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="./bulletin.php?code=<?=$col['code']?>" class="btn btn-primary active" aria-current="page">bulletin</a>
                    <a href="./note_add.php?code=<?=$col['code']?>" class="btn btn-primary">ajout note</a>
                    <a href="./renvoyer.php?code=<?=$col['code']?>" class="btn btn-primary">renvoyer</a>

                </div>
            </li>
        <?php endforeach ?>
    </ul>
    </main>

</body>
</html>
