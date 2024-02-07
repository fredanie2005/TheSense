<!DOCTYPE html>
<html lang="fr">
<head>
<title>The SENSE Project</title>
<meta charset = utf-8>
<meta name="Nom de l’élement" content="une description de la page "/>
<meta name="viewport" content="width=500, initial-scale=1" />
<link rel="stylesheet" href="style.css">
</head>


<body>
        
            <header role="header">
                <script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>

                <img src="design/Logo.svg" alt="logo" class="logo">
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
            <img src="design/LOGO_ROOM.svg" alt="Logo de l'expérience et au dessus les trois autres expériences en plus petit">
        </div> 
        <button><a href="">DÉCOUVRIR</a></button>


       




        <div class="DESCRIPTION">
                <img class="Titre" src="design/TITRE.svg">
                <img class="titre_logo" src="design/CREATIVE.svg" alt="">
                <img class="background" src="design/Ellipse_36.svg" alt="">
                <img class="video" src="design/VIDEO.svg" alt="">
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
               
                

                <p> Notre catalogue ne vous suffit pas ? Vous aimeriez laisser parler votre imagination ? 
                    Grâce à la CREATIVE ROOM, concept inédit en France, la créativité est votre seule limite, 
                    créez de toute pièce l'univers dans lequel vous voyagerez par la suite. Que ce soit dans la 
                    jungle ou en haut de montagnes enneigées, pour affronter des démons ou enquêter sur la 
                    disparition de bébés licornes roses fluos, le choix vous appartient. Alors tester votre
                    imagination dans la CREATIVE ROOM et entraîner vos amis ou votre famille dans votre 
                    univers.
                </p>
         </div>
        
        <div class="Partie_Principale">
            <p class="Titre">VOTRE EXPÉRIENCE ENTRE VOS MAINS</p>
            <p class="Texte"> Suivez les étapes pour créer votre propre aventure. Nous mettons à votre disposition la possibilité de choisir tous les éléments 
                de votre room dans le but de vous offrir l'expérience ultime qui VOUS correspond. Basculez entre chaque étape, modifier vos
                choix à tout moment pour que ceux-ci correspondent à vos besoins.
            </p>
            <div class="DARK_ROOM">
                <img src="design/image_84.svg" alt="" class="image1">
                <img src="design/DARK_ROOMdar.svg" alt="" class="logo1">
            </div>
            
            
            
            <div class="LIGHT_ROOM">
                <img src="design/image 89img_light.svg" alt="" class="image2">
                <img src="design/LIGHT_ROOM.svg" alt="" class="logo2">
            </div>
            
            
            <img src="design/BATTLE_ROOM.svg" alt="" class="Battle_Room">
            
        </div>    
        
        <div class="Aléatoire">
            <p class="Titre">OU CONFIEZ VOTRE DESTIN AU HASARD</p>
            <p class="Texte">Vous pensez pouvoir tout affronter sans problème, laisser le hasard décider de votre room et choisissez simplement la difficulté. 
            </p>
            <img src="design/Aléatoire.svg" alt="" class="image">
            <img src="design/Unionlogo_rand.svg" alt="" class="logo">
            
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
                    <a href='Youtube.com/The_Sense' id='Youtube'><img src="design/Youtube.svg" alt="Youtube" class="Yb" id="Yb"></a>
                    <a href='Instagram.com/The_Sense' id='Insta'><img src="design/Instagram.svg" alt="Instagram" class="Ig" id="Ig"></a>
                    <a href='Twiiter.com/The_Sense' id='Twitter'><img src="design/Twitter.svg" alt="Twitter" class="Tw" id="Tw"></a>
                    <a href='Faxebook.com/The_Sense' id='Facebook'><img src="design/Facebook.svg" alt="Facebook" class="Fb" id="Fb"></a>
                </div>
            </div>
        </div>
    </footer>
         
    <script src="test.js"></script>
</body>
</html>
