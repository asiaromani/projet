<?php
include_once('entete.php');
$id_tache = $_GET['id_tache'];

// Suppression de la tâche de la base de données
$db = new PDO('mysql:host=fdb1033.awardspace.net;dbname=4424373_todoapp', '4424373_todoapp', 'asiaromani2234');
$rq = 'DELETE FROM tache WHERE id = :id';
$v = array('id' => $id_tache);
$res = $db->prepare($rq);
$res->execute($v);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tache.css">
    <title>supprimer tache</title>
    <style>
    .choix1 {
        text-decoration: none;
        padding: 5px 15px;
        border-radius: 4px;
        color: #fff;
        background: #9481fd;
        /*background: linear-gradient(#9481fd,#571094);*/
    }

    .choix1:hover {
        background: #571094;
    }
    </style>
</head>
<body>
    <div class="task-container">
        <div class="box">
            <h1 class="supprimee">Tâche supprimée.</h1>
            <a href="index.php" class="choix1">Mes Tâches</a>
        </div>
    </div>
</body>
</html>
