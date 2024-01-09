<?php
include_once('entete.php');

// Modifiez ces informations avec les détails spécifiques à votre compte Awardspace
$dbHost = 'fdb1033.awardspace.net';
$dbName = '4424373_todoapp';
$dbUser = '4424373_todoapp';
$dbPassword = 'asiaromani2234';

try {
    $db = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    die();
}

$rq = 'SELECT * FROM tache';
$v = array();
$res = $db->prepare($rq);
$res->execute($v);

// Initialisez $i avant la boucle
$i = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="tache.css">
    <title>Liste des taches</title>
    <style>
        /* Votre style ici... */
    </style>
</head>
<body>
    <div class="task-container">
        <div class="box">
            <h1>Liste de mes taches (<?php echo $i; ?>)</h1>

            <?php
            while ($t = $res->fetch(PDO::FETCH_OBJ)) {
                echo '<p class="liste">
                    <strong><span class="description">' . $i . '_' . $t->description . '</span></strong><br>
                    <div class="dates">
                        <span class="date">du ' . $t->date_debut . '</span>
                        <span class="date">   au ' . $t->date_fin . '</span><br>
                    </div>
                    <div class="faire">
                        <a href="conf_sup_tache.php?id_tache=' . $t->id . '" class="tache">Supprimer</a>
                        <a href="modif_tache.php?id_tache=' . $t->id . '" class="tache">Modifier cette tache</a>
                    </div>
                </p>';
                $i++;
            }
            ?>
        </div>
    </div>
</body>
</html>


