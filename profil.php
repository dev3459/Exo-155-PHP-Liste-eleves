<?php
require_once('./includes/arrayEleve.php');

if(!isset($_GET['id']) || $_GET['id'] > count($eleves) -1){
    header('Location: error.php?infos=errorURL');
}

$eleve = $eleves[$_GET['id']];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Élève : <?= $eleve['nom']. " " .$eleve['prenom'] ?></title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div id="container">
        <a href="./index.php">Retour à la liste</a>
        <h1><?= $eleve['sexe']." ".$eleve['nom']." ".$eleve['prenom'] ?></h1>
        <h3><?= "L'élève a ".$eleve['age']." ans" ?></h3>
        <p><?= $eleve['sexe']." habite à ".$eleve['ville'] ?></p>
        <p><?= "Ses passions sont :" ?></p>
        <ol><?php
            for($i = 0; $i < count($eleve['passions']); $i++){?>
                <li><?= ucfirst($eleve['passions'][$i]) ?></li><?php
            }?>
        </ol>
    </div>
</body>
</html>