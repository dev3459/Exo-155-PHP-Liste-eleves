<?php
function addListeEleves(){
    require_once('./includes/arrayEleve.php');
    $i = 0;
    foreach($eleves as $eleve){
        $el = $eleve['sexe']." ".$eleve['nom']." ".$eleve['prenom'];
        echo "<li><a href='profil.php?id=$i' title='$el'>-$el</a></li><br>";
        $i++;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des élèves</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="container">
        <div id="title">
            <h1>Les élèves :</h1>
        </div>
        <ol>
            <?php addListeEleves() ?>
        </ol>
    </div>
</body>
</html>