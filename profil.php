
<?php
include("MVC.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <span>Bienvenue sur votre profil</span>
        </div>
    </header>

    <div class="main">
        <div class="card-profil">
            <h2>Informations du Profil</h2>
         
            <p>Nom d'utilisateur: <?php echo $_SESSION['username']; ?></p>
            
        </div>
        <div class="logout-button">
            <a href="#">Déconnexion</a>
        </div>
    </div>
</body>
</html>
