<?php
include("MVC.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="styleaccueil.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="navbar">
        
            <a href="#">Accueil</a>
            <a href="#">Recherche</a>
            <a href="#">Mon Profil</a>

        
</div>
    <h1 class="utilisateurs">Profils</h1>
<section class="user">
                            <?php
                            foreach ($user as $key) {
                                echo "<div class='card'>
                                        <h1>{$key['firstname']}</h1>
                                        <h2>{$key['lastname']}</h2>
                                        <p>{$key['birthdate']}</p>
                                        <p>{$key['email']}</p>
                                        <p>{$key['city']}</p>
                                      </div>";
                            }?>
                       
                </section>
</body>
</html>