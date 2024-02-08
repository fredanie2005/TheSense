<?php 
session_start(); 

$host = 'mysql-pfptime.alwaysdata.net';
$dbname = 'pfptime_2';
$username = 'pfptime';
$password = 'Mathis2005_';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit;
}

$type = 'video';

$type2 = 'mainnews';

$type3 = 'news';

$stmtVideo = $conn->prepare("SELECT `link`, `title`, `text` FROM `NEWS` WHERE `id` = (SELECT MAX(`id`) FROM `NEWS` WHERE `type` = :type)");
$stmtVideo->bindParam(':type', $type);
$stmtVideo->execute();
$video = $stmtVideo->fetch(PDO::FETCH_ASSOC);

$stmtMain = $conn->prepare("SELECT `link`, `title`, `text` FROM `NEWS` WHERE `id` = (SELECT MAX(`id`) FROM `NEWS` WHERE `type` = :type)");
$stmtMain->bindParam(':type', $type2);
$stmtMain->execute();
$main = $stmtMain->fetch(PDO::FETCH_ASSOC);

$stmtNews = $conn->prepare("SELECT `link`, `title`, `text` FROM `NEWS` WHERE `id` = (SELECT MAX(`id`) FROM `NEWS` WHERE `type` = :type)");
$stmtNews->bindParam(':type', $type3);
$stmtNews->execute();
$news = $stmtNews->fetch(PDO::FETCH_ASSOC);

$stmtVideo2 = $conn->prepare("SELECT `title` FROM `NEWS` WHERE `id` = (SELECT MAX(`id`) FROM `NEWS` WHERE `type` = :type)");
$stmtVideo2->bindParam(':type', $type);
$stmtVideo2->execute();
$VideoTitle = $stmtVideo2->fetch(PDO::FETCH_ASSOC);

$stmtVideo3 = $conn->prepare("SELECT `text` FROM `NEWS` WHERE `id` = (SELECT MAX(`id`) FROM `NEWS` WHERE `type` = :type)");
$stmtVideo3->bindParam(':type', $type);
$stmtVideo3->execute();
$VideoText = $stmtVideo3->fetch(PDO::FETCH_ASSOC);

$stmtMain2 = $conn->prepare("SELECT `title` FROM `NEWS` WHERE `id` = (SELECT MAX(`id`) FROM `NEWS` WHERE `type` = :type)");
$stmtMain2->bindParam(':type', $type2);
$stmtMain2->execute();
$MainTitle = $stmtMain2->fetch(PDO::FETCH_ASSOC);

$stmtMain3 = $conn->prepare("SELECT `text` FROM `NEWS` WHERE `id` = (SELECT MAX(`id`) FROM `NEWS` WHERE `type` = :type)");
$stmtMain3->bindParam(':type', $type2);
$stmtMain3->execute();
$MainText = $stmtMain3->fetch(PDO::FETCH_ASSOC);

$stmtNews2 = $conn->prepare("SELECT `title` FROM `NEWS` WHERE `id` = (SELECT MAX(`id`) FROM `NEWS` WHERE `type` = :type)");
$stmtNews2->bindParam(':type', $type3);
$stmtNews2->execute();
$NewsTitle = $stmtNews2->fetch(PDO::FETCH_ASSOC);

$stmtNews3 = $conn->prepare("SELECT `text` FROM `NEWS` WHERE `id` = (SELECT MAX(`id`) FROM `NEWS` WHERE `type` = :type)");
$stmtNews3->bindParam(':type', $type3);
$stmtNews3->execute();
$NewsText = $stmtNews3->fetch(PDO::FETCH_ASSOC);


?>

<html>
<head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="new.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

</head>

<body>
    <img class="FORME" src="design/TRUCS COOL11.svg" alt="">
    <header role="header">
        <div class="haut"><a href="aa.php" id="accueil"><img src="design/LogoBig.svg" alt="logo" class="logo" id="logo"></a>
        <img src="Burger.svg" alt="menu" class="burger" id="burger"></div>
        <nav class="menu" role="navigation">
            <div class="header-text">
                <a href='news.php'>NEWS</a>
                <div class="ligne-verticale"></div>
                <a href='news.php'>NOS EXPERIENCES</a>
                <div class="ligne-verticale"></div>
                <a href='news.php'>À PROPOS DE NOUS</a>
                <div class="ligne-verticale"></div>
                <a href='news.php'>NOS EQUIPEMENTS</a>
                <div class="ligne-verticale"></div>
                <a class="bold" id="bold" onclick="openPopup()">MON COMPTE</a>
            </div>
        </nav>
    </header>



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
   
        <img class="SENSE" src="design/ÉQUIPEMENTS1.svg" alt="">  
        <h1>LES NEWS</h1>  

    <div>
        <p class="Titre">SUIVEZ TOUTE L’ACTUALITÉ DE THE SENSE</p>
    
        <p class="paragraphe">
            Nous souhaitons vous offrir toujours plus d’expériences immersive, c’est pourquoi nous avons à coeur de vous proposer de plus en plus de nouvelles aventures. 
            Toute l’année, The Sense vous invite à rejoindre ces rooms événements et à découvrir celles qui arriveront plus tard. 
        </p>
    </div>


    <div class="new1">
        <?php 
        echo '<iframe class="fond" src="'.$video['link'].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
        echo '<div class="info">';
        echo '<p class="Titre">' . $video['title'] . '</p>'; 
        echo '<p class="text">' . $video['text'] . '</p>'; 
        echo '</div>';
        ?>
    </div>


    <div class="container">
    <div class="new2">
        <?php 
        echo '<img class="fond" src="'.$news['link'].'" alt="">';
        echo '<div class="info">';
        echo '<p class="Titre">' . $NewsTitle['title'] . '</p>'; 
        echo '<p class="text">' . $NewsText['text'] . '</p>'; 
        echo '</div>';
        ?>
    </div>

    <div class="new3">
        <?php 
        echo '<img class="fond" src="'.$news['link'].'" alt="">';
        echo '<div class="info">';
        echo '<p class="Titre">' . $NewsTitle['title'] . '</p>'; 
        echo '<p class="text">' . $NewsText['text'] . '</p>'; 
        echo '</div>';
        ?>
    </div>
</div>



    <div class="new4">
        <?php 
        echo '<img class="fond" src="'.$main['link'].'" alt="">';
        echo '<div class="info">';
        echo '<p class="Titre">' . $MainTitle['title'] . '</p>'; 
        echo '<p class="text">' . $MainText['text'] . '</p>'; 
        echo '</div>';
        ?>
    </div>



    
    <div  class="AVIS">
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

    
    <script>
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
    
