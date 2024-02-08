<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="creation.css">
</head>

<body>
    <header role="header">
        <div class="haut"><a href="aa.php" id="accueil"><img src="Logo.svg" alt="logo" class="logo" id="logo"></a>
        <img src="Burger.svg" alt="menu" class="burger" id="burger"></div>
        <nav class="menu" role="navigation">
            <div class="header-text">
                <a href='news.php'>NEWS</a>
                <div class="ligne-verticale"></div>
                <a href='news.php'>NOS EXPERIENCES</a>
                <div class="ligne-verticale"></div>
                <a href='news.php'>À PROPOS DE NOUS</a>
                <div class="ligne-verticale"></div>
                <a href='EQUIPEMENT/equipement.php'>NOS EQUIPEMENTS</a>
                <div class="ligne-verticale"></div>
                <a class="bold" id="bold" onclick="openPopup()">MON COMPTE</a>
            </div>
        </nav>
    </header>

    <?php
// Vérifier si l'utilisateur est connecté
if(isset($_SESSION['prenom'])) {
    // Récupérer le prénom de l'utilisateur depuis la session
    $prenom = $_SESSION['prenom'];
    // Afficher le message de bienvenue avec le prénom de l'utilisateur
    echo "<nav class='pop-up' role='connexion' id='pop-up'>
            Bonjour, $prenom <a href='deconnexion.php'>Déconnexion</a>
        </nav>";

} else {
    // Afficher la fenêtre contextuelle de connexion si l'utilisateur n'est pas connecté
?>


    <nav class="pop-up" role="connexion" id="pop-up">
        <div class="text" id="text">
            <button class='accept-button' onclick="closePopup()">❌</button>
            <h2>CONNEXION</h2>
            <form method="post" action="">
                <div class="espace"><p>Identifiant</p> <input type="email"  name="email" required></div>
                <div class="espace"><p>Mot de passe</p> <input type="password" name="mdp" required></div>
                <label for="remember_me">Se souvenir de moi 
                    <input type="checkbox" id="remember_me" name="remember_me" value="1">
                </label><br>
                <div class="espace"><a href="Nouveau dossier/creation.php" id="Creer">Créer un compte</a>
                <button type="submit" id="conn-button">Connexion</button></div>
            </form>
            <?php if(isset($error)) { echo "<p>$error</p>"; } ?>
        </div>
    </nav>
    <?php } ?>

    <img class="SENSE" src="image 42.svg" alt="">                  
    <h1>MON COMPTE</h1> 
    </div>

    <img class="img" src="TRUCS COOL15.svg" alt="">
    
    <div class="Compte">
        <p class="Titre">Créer un compte </p>
        <form method="post" action="register.php" onsubmit="return validatePassword()">
            <div class="NP">
                <label>Nom prénom</label> <input type="text" class="username" name="new_username" placeholder="Nom prénom" required>
            </div>
            <div class="mail">
                <label>Mon adresse mail </label> <input type="email" class="email" name="new_email" placeholder="Adresse mail" required>
            </div>
            <div class="MDP">
                <label>Mot de Passe</label> <input type="password" class="password" name="new_password" placeholder="Mot de passe" required>
            </div>
            <div class="Confirmation">
                <label>Confirmer le mot de passe </label> <input type="password" class="confirm" name="confirm_password" placeholder="Mot de passe" required>
            </div>
            <div class="Newsletter">
                <input type="checkbox" class="letter" name="confirm_password"> <label>Se désabonner de la newsletter </label>
            </div>
            <div class="Envoie"><button type="submit" class="inscription">Valider</button></div>
        </form>
    </div>

    <footer>
        <nav class="footer" role="informations">
            <div class="footer-text">
                <div class='pages'>
                    <a href='Contact.php' id='Contact'>Nous contacter</a>
                    <a href='Reservation.php' id='Reservation'>Réservation</a>
                    <a href='FAQ.php' id='FAQ'>FAQ</a>
                </div>
                <div class='Copyright'>
                    <p id='Copyright'>© THE SENSE, SAS. Tous droits réservés</p>
                </div>
                <div class='Regles'>
                    <a href='Modalites.php' id='Modalités'>Modalités</a>
                    <div class="ligne-verticale-ft"></div>
                    <a href='Confidentialite.php' id='Confidentialité'>Politique de confidentialité</a>
                    <a href='Youtube.com/The_Sense' id='Youtube'><img src="Youtube.svg" alt="Youtube" class="Yb" id="Yb"></a>
                    <a href='Instagram.com/The_Sense' id='Insta'><img src="Instagram.svg" alt="Instagram" class="Ig" id="Ig"></a>
                    <a href='Twiiter.com/The_Sense' id='Twitter'><img src="Twitter.svg" alt="Twitter" class="Tw" id="Tw"></a>
                    <a href='Faxebook.com/The_Sense' id='Facebook'><img src="Facebook.svg" alt="Facebook" class="Fb" id="Fb"></a>
                </div>
            </div>
        </nav>
    </footer>

    <script>
        function openPopup() {
            var popup = document.getElementById("pop-up");
            popup.style.display = "block";
        }

        function closePopup() {
            var popup = document.getElementById("pop-up");
            popup.style.display = "none";
        }
    </script>
</body>
</html>
