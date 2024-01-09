<?php
include_once('entete.php');
    $id_tache = $_GET['id_tache'];

    //modification de la tache de base de données

    $db = new PDO('mysql:host=fdb1033.awardspace.net;dbname=4424373_todoapp', '4424373_todoapp', 'asiaromani2234');
    $rq = 'UPDATE FROM tache WHERE id = :id';
    $v = array('id' => $id_tache);
    $res = $db->prepare($rq);
    $res->execute($v);
    
    echo Tache modifiée. ;
    echo <a href="index.php">Terminer</a>;
?>