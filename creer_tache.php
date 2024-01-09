<?php
    include_once('entete.php');
    // recuperation des données du formulaire de creation de nouvelle tâche
    $description = $_POST['description'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];

    if(empty($description))
    {
        echo "Il faut remplir la description";
        echo '<a href="nouvelle_tache.php"> Recommencer</a>';
    }
    else
    {
        // enregistrer la tâche dans la base de données
        $db = new PDO('mysql:host=fdb1033.awardspace.net;dbname=4424373_todoapp', '4424373_todoapp', 'asiaromani2234');

        $rq = 'INSERT INTO tache VALUES(null, :des, :dd, :df)';
        $v = array(
            'des' => $description,
            'dd' => $date_debut,
            'df' => $date_fin
        );

        $res = $db->prepare($rq);
        $res->execute($v);

        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="tache.css">
            <title>Tâche créée</title>
        </head>
        <body>
            <div class="task-container">
                <div class="box">
                    <h1 class="supprimee">Tâche créée</h1>
                    <a href="index.php" class="choix1">Afficher mes tâches</a>
                </div>
            </div>
        </body>
        </html>';
    }
?>
