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
                <img class="Titre" src="design2/TITRE.svg">
                <img class="titre_logo" src="design2/DARK_ROOM_petit_logo.svg" alt="">
                <img class="background" src="design2/Ellipse_36.svg" alt="">
                <img class="video" src="design2/VIDEO.svg" alt="">
                <div class="container">
                    <img src="design2/Polygon_3.svg" alt="Image" onclick="afficherEtLancer()">
                    <div class="popup" id="popupVideo">
                        <span class="fermer" onclick="fermerPopup()">&times;</span>
                        <video id="videoPlayer" width="1500" height="auto" controls autoplay onended="fermerPopup()">
                            <source src="Trailer_The_Sense.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture de la vidéo.
                        </video>
                    </div>
                </div>
               
                

                <p> Vous pensez ne pas avoir peur du noir ? Que rien ne pourra vous effrayer ? Vous avez tord. Avec la DARK ROOM, toutes vos peurs deviendront réelles et en rien de temps, il ne 
                    vous restera plus que vos jambes pour vous enfuir. Vous vous penser suffisamment fort pour affronter vos peurs ? Franchissez donc le seuil de la DARK ROOM. Vous avez
                    hâte d’y entrer mais dans le noir... Personne ne vous verra mourir.
                </p>

                <p class="warning">*Les expériences proposées dans cette salle ne conviennent pas à un public mineur ou sensible.</p>
    </div>


    <div class="Partie_2">
        <p class ="Titre">REVEILLEZ LA PEUR QUI SOMMEILLE EN VOUS</p>
        <img src="design2/image_46.svg" alt="image Shangri-La : la cité perdue de Z" class="ImacceuilContainer">
        <div class="center">
                <p class="Titre1">THE CONJURING EXPERIENCE</p>
                <img src="design2/Line_12.svg" alt="" class="Titre2">
                <p class="Titre3">DARK ROOM</p> 
                <p class="text">
                Revivez l'histoire d'un chef d'oeuvre cinématographique au travers d’une expérience aussi bien réaliste qu'immersive. Rassemblez
                ce qu'il vous reste de courage, les inspecteurs Ed et Loren Warren ont besoin de vous. Un malheur hante la maison de ces
                derniers et vous ne pouvez vous en échapper sans sacrifices. Serez-vous à la hauteur de ce qui vous attend ? Bonne chance,
                vous en aurez besoin !
                </p>
            
                <a href="reservation.html" class="Bouton-Container"><img src="design2/reserv.svg" title="bouton réservation" alt="lien pour une réservation sur le site"></a>
        </div>
        
        <img src="design2/image_58.svg" alt="" class="ImacceuilContainer2">
        <div class="center2">
            <p class="Titre1">NAMELESS</p>
            <img src="design2/Line_12.svg" alt="" class="Titre2">
            <p class="Titre3">DARK ROOM</p> 
            <p class="text">
            De retour de soirée avec vos amis, votre voiture tombe soudainement en panne au beau milieu des bois. Coïncidence,
            c’est dans cette forêt que l’on a signalé de mystérieuses disparitions. Après un long moment à tenter d’appeller une dépanneuse,
            vous vous rendez compte que vous ne pouvez compter que sur vous-même pour vous en sortir. Mais dans le froid de la nuit 
            et les recoins de la forêt, quelque chose rôde. Travaillez en équipe car sans vos amis, vous n’aurez aucune chance,
            survivrez-vous assez longtemps ?
            </p>
        
                
            <a href="reservation.html" class="Bouton-Container"><img src="design2/reserv.svg" title="bouton réservation" alt="lien pour une réservation sur le site"></a>
            
                
        </div>
    </div>



    <div class="GALERIE">
                      
        <div class="C">
            <p class="com">
            “Avec mes fils nous avons tenté l’expérience “NAMELESS”, moi qui pensais avoir tout vu dans le domaine de l’horreur, je ne me suis jamais autant trompé. Si vous êtes à la recherche de sensation forte et de frissons, la DARK ROOM est faite pour vous”
            - Nicolas, 3 Septembre 2020 -
            </p> 
        </div>
        <img class="Cercle1" src="design2/Cercle 1.svg" alt="">
        <img class="Cercle2" src="design2/Cercle 2.svg" alt="">

                    
        <img class="Rectangle1" src="design2/Rectangle_129.svg" alt="">
        <img class="Rectangle2" src="design2/Rectangle_129.svg" alt="">
        <img class="Rectangle3" src="design2/Rectangle_129.svg" alt="">
        <img class="Rectangle4" src="design2/Rectangle_129.svg" alt="">
        <img class="Rectangle5" src="design2/Rectangle_129.svg" alt="">
        <img class="Rectangle6" src="design2/Rectangle_129.svg" alt="">

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
    <script src="test.js"></script>
</body>

</html>
