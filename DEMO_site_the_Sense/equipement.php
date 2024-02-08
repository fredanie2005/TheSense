<?php
session_start();

// Vérifier si l'utilisateur est déjà connecté

// Connexion à la base de données
$servername = "mysql-quizlofl.alwaysdata.net";
$username = "quizlofl";
$password = "GC50TECH";
$dbname = "quizlofl_rrr";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Vérifier si le formulaire de connexion a été soumis
if(isset($_POST['email']) && isset($_POST['mdp'])) {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['mdp'];

    // Requête SQL pour vérifier l'existence de l'utilisateur
    $sql = "SELECT * FROM USER WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // L'utilisateur existe, vérifier le mot de passe
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Mot de passe correct, connecter l'utilisateur
            $_SESSION['user_email'] = $user['email'];
            // Récupérer le prénom de l'utilisateur
            $prenom = $user['user']; // Récupérer le prénom en supposant que le nom complet est stocké dans le champ 'user'
            // Stocker le prénom dans la session
            $_SESSION['prenom'] = $prenom;
            // Rediriger vers la page d'accueil
            header("Location: $_SERVER[HTTP_REFERER]");
            exit();
        } else {
            // Mot de passe incorrect
            $error = "Mot de passe incorrect";
        }
    } else {
        // Utilisateur non trouvé
        $error = "Utilisateur non trouvé";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<header>

<title>Nos Equipements</title>
<meta charset = utf-8>
<meta name="Nom de l’élement" content="une description de la page "/>

<link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
<link rel="stylesheet" href="equipement.css">
</header>

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
                <a href='equipement.php'>NOS EQUIPEMENTS</a>
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
            Bonjour, $prenom <a href='../deconnexion.php'>Déconnexion</a>
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
    <h1>NOS EQUIPEMENTS</h1> 
            
            <button class="button"><a href="">Découvrir</a></button>

            <div class="DESCRIPTION">
                <img class="fond" src="design/Ellipse 36.svg" alt="">
                <img class="video" src="design/VIDEO_equipement.svg" alt="">
                <div class="container">
                    <img src="design/Polygon 3.svg" alt="Image" onclick="afficherEtLancer()">
                    <div class="popup" id="popupVideo">
                        <span class="fermer" onclick="fermerPopup()">&times;</span>
                        <video id="videoPlayer" width="1500" height="auto" controls autoplay onended="fermerPopup()">
                            <source src="design/Copie de Trailer - The Sense.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture de la vidéo.
                        </video>
                    </div>
                </div>
               
                
                <p class="Titre">LA VR, UNE AFFAIRE D’EXCELLENCE</p>

                <p>Pour une expérience aussi bien virtuelle que réelle nous avons besoin d’équipements de hautes qualités prêt à vous suivre là où vous irez ! 
                    Pour nous, la garantie d’une expérience réussie passe forcément par la qualité de notre matériel. 
                    C’est pourquoi nous cherchons constamment les dernières technologies sur le marché pour pouvoir vous proposer le meilleur de la Réalité Virtuelle. 
                    Nous travaillons également directement avec les marques leaders du marchés pour vous proposer du matériels adaptés à vos besoins 
                    (Lunettes, coiffures, fauteuil roulant, petits et grands, ...). Chez The Sense, l’excellence de nos outils vous garantissent la qualité de votre voyage dans 
                    une autre dimension.</p>
            </div>
           

            <div  class="EQUIPEMENTS">
                <p class="Titre">DÉCOUVREZ NOS ÉQUIPEMENTS</p>

                <p>
                Car nous croyons que l’excellence de nos expériences et votre confort passe avant tout, nous n’achetons que les meilleurs produits du marché, 
                et sommes directement en contact avec les marques pour proposer des outils adaptés à tous.
                </p>

                <div class="Casque">                    
                <img src="design/image 122.svg" alt="">

                <p class="Titre">CASQUE HTC VIVE COSMOS</p>

                <p>
                Concernant notre casque VR, nous avons choisit d’optimiser vos expériences grâce à l'HTC VIVE COSMOS ! 
                Chaque casque possède un écran LCD, offrant une qualité optimale pour une meilleure immersion. 
                Car nous avons à coeur votre satisfaction, The Sense vous offre la meilleure technologie du marché actuel pour encore plus d’émotions et d’immersion.
                </p>
                </div>

                <div class="BAGPACK">
                <img src="design/image 123.svg" alt="">

                <p class="Titre">BAGPACK HAPTIQUE RAPTURE</p>

                <p>
                Haptique Rapture est une combinaison spécialisée pour l’utilisation VR, cette “armure” vous permettra de vous mouvoir sans problème et avec fluidité dans le jeu 
                comme dans la réalité. Votre confort est également assuré grâce à son mantient et sa légéreté impressionnante (à peine 5kg), qualitées vous assurera 
                une expérience réussie. 
                </p>
                </div>

                <div class="COMPLEXE">                    
                <img src="design/image 124.svg" alt="">

                <p class="Titre">COMPLEXE THE SENSE</p>

                <p>
                Notre complexe d’une taille de 2 hectare vous permettra de vous amuser sans vous soucier des limites du terrain. 
                Toutes nos expériences possèdent une salle dédiée d’environ 50m², y compris la CREATIVE ROOM que nous pouvons aménager selon vos goûts. 
                Nous avons également souhaité rendre vos parties les plus immersives possible c’est nous mélons VR et Réalité Augmenté, vous permettant d’agir dans la vrai vie 
                avec l’environnement de votre immersion.
                </p>
                </div>
            </div>


            <div  class="AVIS">
                <p class="Titre">ILS SONT SATISFAITS DE NOS ÉQUIPEMENTS</p>

                <p>
                Ceux qui en parlent le mieux, ce sont vous. Pour finir de vous convaincre de la qualité et de l’excellence de nos équipements, rien de mieux que d’écouter 
                les retours que vous nous faites à chaque fin de sessions. <br>
                Le taux satisfaction de nos clients concernant nos outils d’immersion est de 90%. 
                </p>

                <div  class="GALERIE">
        <div class="carousel-container">
            <div class="carousel">
                <img src="design/Rectangle 94.svg" alt="Image 1">
                <img src="design/image 130.svg" alt="Image 2">
                <img src="design/image 129.svg" alt="Image 3">
                <img src="design/image 128.svg" alt="Image 4">
                <img src="design/image 127.svg" alt="Image 5">
            </div>
        </div>


        <div>
            <button onclick="previousSlide()" class="gauche">
                <img src="design/Cercle 1.svg" alt="Précédent">
            </button>
            <button onclick="nextSlide()" class="droite">
                <img src="design/Cercle 2.svg" alt="Suivant">
            </button>
        </div>

        <p class="com1">
            “C’est dingue, j’ai vraiment eu l’impression d’être transporté dans un autre monde. Avant je ne faisais pas d’expérience VR car je ne croyais pas en la 
            qualité mais grâce à The Sense, j’ai pu traverser la frontière du réel.”<br>
                    - Denise, 23 Octobre 2020 - 
        </p>
        <p class="com2">
            “Avec mes fils nous avons tenté l’expérience “NAMELESS”, moi qui pensais 
            avoir tout vu dans le domaine de l’horreur, je ne me suis jamais autant 
            trompé. Si vous êtes à la recherche de sensation forte et de frissons, 
            la DARK ROOM est faite pour vous”<br>
            - Nicolas, 3 Septembre 2020 -
        </p>
    </div>
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
                    <p id='Copyright'>© THE SENSE, SAS. Tous droits réservés</p></div>
                <div class='Regles'>
                    <a href='Modalites.php' id='Modalités'>Modalités</a>
                    <div class="ligne-verticale-ft"></div>
                    <a href='Confidentialite.php' id='Confidentialité'>Politique de confidentialité</a>
                    <a href='Youtube.com/The_Sense' id='Youtube'><img src="design/Youtube.svg" alt="Youtube" class="Yb" id="Yb"></a>
                    <a href='Instagram.com/The_Sense' id='Insta'><img src="design/Instagram.svg" alt="Instagram" class="Ig" id="Ig"></a>
                    <a href='Twiiter.com/The_Sense' id='Twitter'><img src="design/Twitter.svg" alt="Twitter" class="Tw" id="Tw"></a>
                    <a href='Faxebook.com/The_Sense' id='Facebook'><img src="design/Facebook.svg" alt="Facebook" class="Fb" id="Fb"></a>
                </div>
            </div>
        </div>
</footer>
    
<script>function afficherEtLancer() {
    afficherPopup();
    var videoPlayer = document.getElementById("videoPlayer");
    videoPlayer.play();
}

function afficherPopup() {
    var popup = document.getElementById("popupVideo");
    popup.style.display = "block";
}

function fermerPopup() {
    var popup = document.getElementById("popupVideo");
    popup.style.display = "none";
}
        function openPopup() {
            var popup = document.getElementById("pop-up");
            popup.style.display = "block";
        }

        function closePopup() {
            var popup = document.getElementById("pop-up");
            popup.style.display = "none";
        }


        
        
    const carousel = document.querySelector('.carousel');
const images = document.querySelectorAll('.carousel img');
const com1 = document.querySelector('.com1');
const com2 = document.querySelector('.com2');

let currentIndex = 0;
let currentComment = 1; // Variable pour suivre l'état actuel du commentaire affiché
const totalImages = images.length;

function updateCarousel() {
    const itemWidth = images[0].clientWidth;
    carousel.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
}

function updateComments() {
    // Alternance entre com1 et com2 en fonction de la valeur de currentComment
    if (currentComment === 1) {
        com1.style.display = 'block';
        com2.style.display = 'none';
    } else {
        com1.style.display = 'none';
        com2.style.display = 'block';
    }
}

function previousSlide() {
    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
    currentComment = currentComment === 1 ? 2 : 1; // Changement de commentaire
    updateCarousel();
    updateComments(); // Mettre à jour l'affichage des commentaires
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % totalImages;
    currentComment = currentComment === 1 ? 2 : 1; // Changement de commentaire
    updateCarousel();
    updateComments(); // Mettre à jour l'affichage des commentaires
}

</script>
</body>

</html>
