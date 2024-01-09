<?php
include_once('entete.php');
$id_tache = $_GET['id_tache'];
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
            <strong><span class="assurer">Voulez-vous vraiment supprimer cette tache? </span></strong><br>
            <div class="choix">
                <a href="index.php" class="choix1" >Non</a> 
                <a href="supprimer_tache.php?id_tache=<?php echo $id_tache; ?>" class="choix1" >Oui</a>
            </div>
        </div>
    </div>
</body>
</html>
