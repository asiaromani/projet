<?php
include_once('entete.php');
?>

<?php
$id = $_GET['id_tache'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="nouvelleTache.css" rel="stylesheet">
    <title>TO_DO_LIST</title>
    <style>
        /* Ajoutez vos styles ici... */
    </style>
</head>
<body>
    <div class="box">
        <h2>MODIFICATION DE TACHES<img src="1.png"></h2>
        <div class="add_task">
            <?php echo '<form method="post" action="modif.php?id_tache=' . $id . '">'; ?>
                <input type="text" placeholder="Add your text" class="input_task" name="description"><br>
                <input type="text" placeholder="Add your text" class="input_task" name="description"><br>
                <input type="date" name="date_debut" placeholder="Date debut" class="date"/><br>
                <input type="date" name="date_fin" placeholder="Date fin" class="date"/><br>
                <input type="submit" value="Add" class="submit_task">
            </form>
        </div>
    </div>
</body>
</html>