    <?php
    include("MVC.php");
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page d'inscription</title>
        <link href="css.css" rel="stylesheet" type="text/css" />
        <script src="inscription.js"></script>
    </head>
    <body>
        <header>
            <div class="navbar">
                <a href="connexion.php">Se connecter</a>
            </div>
        </header>
        <section class="partie1">
            <h1>Inscription</h1>
            <form id="monFormulaire" method="post" action="index.php">
                <div>
                    <label for="name">
                        Nom
                    </label>
                    <input type="text" id="name" name="name_user"/>
                </div>
                <div>
                    <label for="lastname">
                        Prenom
                    </label>
                    <input type="text" id="lastname" name="lastname"/>
                </div>
                <div>
                    <label for="date">
                        Date de naissance
                    </label>
                    <input type="date" id="date" name="date"/><br>
                </div>
                <div>
                <label for="city">Ville</label>
        <select id="city" name="city">
            <option value="1">Toulouse</option>
            <option value="2">Paris</option>
            <option value="3">Nice</option>
            <option value="3">Lille</option>
            <option value="3">Nante</option>
            <option value="3">canne</option>
        </select>
                </div>
                <div>
                    <label for="email">
                        Email
                    </label>
                    <input type="text" id="email" name="email" placeholder="Adresse e-mail">
                </div>
                <div>
                    <label for="password">
                        Mot de passe
                    </label>
                    <input type="password" id="password" name="password" placeholder="Mot de passe">
                </div>
                <div>
                <label for="genre">Genre</label>
        <select id="genre" name="genre">
            <option value="1">Homme</option>
            <option value="2">Femme</option>
        
        </select>
                </div>
                <div>
                <label for="loisir">Loisir</label>
        <select id="loisir" name="loisir">
            <option value="1">sport</option>
            <option value="2">Animaux</option>
            <option value="3">Jeux Video</option>
            <option value="3">Voyage</option>
        </select>
                
                </div>
                
                <button type="submit">Envoyer</button>
            </form>
        </section>
    </body>
    </html>
