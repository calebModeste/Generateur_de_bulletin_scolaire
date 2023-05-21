
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
            <?php  $tableNote= $connect->exePrepaQuery($bulletin->allNoteUser($_GET['code'])); ?>

        <table class="table table-striped mt-5">
            <th>matiere</th>
            <th>note</th>
            <th>coef</th>
            <th> mention</th>
            <?php foreach($tableNote as $row):  ?>
                <tr>
                    <td><?=$row['matiere'] ?></td>
                    <td><?=$row['note'] ?>/20</td>
                    <td><?=$row['coef'] ?></td>
                    <?php if($row['note']>=18): ?>
                        <td>Tres bien</td>
                    <?php endif ?>
                    <?php if($row['note']>=15 && $row['note']<18): ?>
                        <td>Bien</td>
                    <?php endif ?>
                    <?php if($row['note']>=13 && $row['note']<15): ?>
                        <td> Assez bien</td>
                    <?php endif ?>
                    <?php if($row['note']>=10 && $row['note']<13): ?>
                        <td> Passable</td>
                    <?php endif ?>
                    <?php if($row['note']>=0 && $row['note']<10): ?>
                        <td> Mauvais</td>
                    <?php endif ?>
                    
                </tr>
            <?php endforeach ?>
            
        </table>

        </main>
    
    </body>
    </html>
    