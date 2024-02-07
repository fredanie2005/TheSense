<!DOCTYPE html>
<html>
<head>
    <title>Dark Room</title>
    <link rel="icon" type="image/png" href="ico.ico">
    <link rel="stylesheet" href="Dark Room.css">
</head>
<body>
<header role="header">
        <script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>

        <a href="accueil.php" id="accueil"><img src="design2/Logo.svg" alt="logo" class="logo"></a>
        <nav class="menu" role="navigation">
            <div class="header-text">
                <a href='news.php'>NEWS</a>
                <div class="ligne-verticale"></div>
                <a href='news.php'>NOS EXPERIENCES</a>
                <div class="ligne-verticale"></div>
                <a href='news.php'>A PROPOS DE NOUS</a>
                <div class="ligne-verticale"></div>
                <a href='news.php'>NOS EQUIPEMENTS</a>
                <div class="ligne-verticale"></div>
                <a href='news.php' class="bold" id="bold">MON COMPTE</a>
            </div>
            <ul class="menu">
            </ul>
        </nav>
    </header>

    <div class="titre">
            <img src="design2/Dark_Room_Logo.svg" alt="Logo de l'expérience et au dessus les trois autres expériences en plus petit">
    </div> 

    <button><a href="">DÉCOUVRIR</a></button>

    <div class="DESCRIPTION">
                <img class="Titre" src="design/TITRE.svg">
                <img class="titre_logo" src="design2/Light_Room_petit_logo.svg" alt="">
                <img class="background" src="design2/Ellipse_36.svg" alt="">
                <img class="video" src="design2/VIDEO.svg" alt="">
                <div class="container">
                    <img src="design/Polygon_3.svg" alt="Image" onclick="afficherEtLancer()">
                    <div class="popup" id="popupVideo">
                        <span class="fermer" onclick="fermerPopup()">&times;</span>
                        <video id="videoPlayer" width="1500" height="auto" controls autoplay onended="fermerPopup()">
                            <source src="Trailer_The_Sense.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture de la vidéo.
                        </video>
                    </div>
                </div>
               
                

                <p> Voyagez, explorez, découvrez LIGHT ROOM ! Découvrez des paysages somptueux et des histoires palpipante dans cette salle accessible pour toute la famille. 
                    Ici tout n’est qu’affaire d’émotions et de beauté, explorer les décors de nos expériences et partez à l’aventure en famille ou entre amis à partir de 12 ans. 
                    Il ne vous reste plus qu’à franchir le seuil de la LIGHT ROOM et à vous laissez transporter dans un voyage époustouflant. Vos émotions n’attendent que vous !
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
                <p id='Copyright'>© THE SENSE, SAS. Tous droits réservés</p>
            </div>

            <div class='Regles'>
                <a href='Modalites.php' id='Modalités'>Modalités</a>
                <div class="ligne-verticale-ft"></div>
                <a href='Confidentialite.php' id='Confidentialité'>Politique de confidentialité</a>
                <a href='Youtube.com/The_Sense' id='Youtube'><img src="design2/Youtube.svg" alt="Youtube" class="Yb" id="Yb"></a>
                <a href='Instagram.com/The_Sense' id='Insta'><img src="design2/Instagram.svg" alt="Instagram" class="Ig" id="Ig"></a>
                <a href='Twiiter.com/The_Sense' id='Twitter'><img src="design2/Twitter.svg" alt="Twitter" class="Tw" id="Tw"></a>
                <a href='Faxebook.com/The_Sense' id='Facebook'><img src="design2/Facebook.svg" alt="Facebook" class="Fb" id="Fb"></a>
            </div>
        </div>
    </footer>
</body>

</html>
