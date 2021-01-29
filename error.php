<?php
    $message = "";
    if(isset($_GET['infos']) && is_string($_GET['infos'])){
        $get = $_GET['infos'];
        if($get === "errorURL"){
            $message = "Une erreur s'est produite merci de ne pas modifier les urls !";
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur</title>
</head>
<body>
    <div id="container">
        <div id="error">
            <p><?= $message ?></p>
        </div>
    </div>
</body>
</html>