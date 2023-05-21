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
        <div class="card my-5 mx-5 py-4 px-2">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="row ">
                    <div class="col">
                        <input type="text" name="nom" class="form-control" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col">
                        <input type="text" name="prenom" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                    <div class="row-sm mt-3">
                        <input type="text" name="code" class="form-control" placeholder="code etudiant votre code est contituer de 6 charactere exemple 'L2I256'" aria-label="Code"  maxlength="6">
                    </div>

                </div>
                <div class="mt-5">
                    <input type="submit" class="btn btn-primary" value="inscription">
                </div>
            </form>
        </div>
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $name=$filter->test_input($_POST["nom"]) ;
                $lastname=$filter->test_input($_POST["prenom"]);
                $code=$filter->test_input($_POST["code"]);

                if (!empty($name) && !empty($lastname) && !empty($code)) {
                    
                    echo "<h3>LES ENVOIE</h3>";
                    echo $name."</br>";
                    
                    echo $lastname."</br>";
                    echo $code."</br>";

                    
                    try{
                        $result= $connect->exePrepaQuery($user->setUser($code ,$name ,$lastname));

                    }
                    catch(PDOException $ex){
                        echo $ex->getMessage();
                    }
                }
                
            }
            



        ?>

    </main>

</body>
</html>
