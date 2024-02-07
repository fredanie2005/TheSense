<!DOCTYPE html>
<html>
<head>
    <title>Light Room</title>
    <link rel="icon" type="image/png" href="ico.ico">
    <link rel="stylesheet" href="Light_Room.css">
</head>
<body>
<header role="header">
        <script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>

        <a href="accueil.php" id="accueil"><img src="design/Logo.svg" alt="logo" class="logo"></a>
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
            <img src="design/Light_Room_logo.svg" alt="Logo de l'expérience et au dessus les trois autres expériences en plus petit">
    </div> 

    <button><a href="">DÉCOUVRIR</a></button>

    <div class="DESCRIPTION">
                <img class="Titre" src="design/TITRE.svg">
                <img class="titre_logo" src="design/Light_Room_petit_logo.svg" alt="">
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
               
                

                <p> Voyagez, explorez, découvrez LIGHT ROOM ! Découvrez des paysages somptueux et des histoires palpipante dans cette salle accessible pour toute la famille. 
                    Ici tout n’est qu’affaire d’émotions et de beauté, explorer les décors de nos expériences et partez à l’aventure en famille ou entre amis à partir de 12 ans. 
                    Il ne vous reste plus qu’à franchir le seuil de la LIGHT ROOM et à vous laissez transporter dans un voyage époustouflant. Vos émotions n’attendent que vous !
                </p>
    </div>

    <div class="Partie_2">
        <p class ="Titre">PRENEZ PART AU VOYAGE</p>
        <img src="design/image_44.svg" alt="image Shangri-La : la cité perdue de Z" class="ImacceuilContainer">
        <div class="center">
                <p class="Titre1">SHANGRI-LA : LA CITÉ PERDUE DE Z</p>
                <img src="design/Line_12.svg" alt="" class="Titre2">
                <p class="Titre3">LIGHT ROOM</p> 
                <p class="text">
                    Shangri-La la cité mythique, symbole de paix, de prospérité et de magnificence. Personne n'a apparemment pu se rendre en ce lieu
                    depuis des décennies ou prouver son existence, du moins depuis votre découverte ! Aventurez-vous au plus profond des légendes,
                    entrez dans la cité de Z avec votre équipe et explorez les lieux à la recherche de Percy Fawcett.
                </p>
            
                <a href="reservation.html" class="Bouton-Container"><img src="design/reserv.svg" title="bouton réservation" alt="lien pour une réservation sur le site"></a>
        </div>
        
        <img src="design/image_65.svg" alt="" class="ImacceuilContainer2">
        <div class="center2">
            <p class="Titre1">NORDRËNN : LA LÉGENDE DE GLACE</p>
            <img src="design/Line_12.svg" alt="" class="Titre2">
            <p class="Titre3">LIGHT ROOM</p> 
            <p class="text">
                Dans le froid du royaume de Nordrënn, il est une légende qui raconte comment un guerrier obtint la force de l’ours et la
                clairvoyance du corbeau. Il est dit que pour conquérir la femme qu’il aimait, cet homme parti à la recherche du trône d’Odin,
                artefact perdu depuis des années, qui offrait, disait-on, le pouvoir du Père de Toute Chose. Le guerrier parti et ne revint jamais ;
                on raconte qu’il aurait trouvé le trône mais, qu’avide de son pouvoir il ne le quitta plus. Partez à la découverte du royaume glacé
                de Nordrënn et retrouvez le guerrier de la légende.
            </p>
        
                
            <a href="reservation.html" class="Bouton-Container"><img src="design/reserv.svg" title="bouton réservation" alt="lien pour une réservation sur le site"></a>
            
                
        </div>
    </div>

    <div class="GALERIE">
                      
        <div class="C">
            <p class="com">
                “C’est dingue, j’ai vraiment eu l’impression d’être transporté dans un autre monde. Avant je ne faisais pas d’expérience VR car je ne croyais pas en la 
                qualité mais grâce à The Sense, j’ai pu traverser la frontière du réel.”<br>
                - Denise, 23 Octobre 2020 - 
            </p> 
        </div>
        <img class="Cercle1" src="design/Cercle 1.svg" alt="">
        <img class="Cercle2" src="design/Cercle 2.svg" alt="">

                    
        <img class="Rectangle1" src="design/Rectangle_129.svg" alt="">
        <img class="Rectangle2" src="design/Rectangle_129.svg" alt="">
        <img class="Rectangle3" src="design/Rectangle_129.svg" alt="">
        <img class="Rectangle4" src="design/Rectangle_129.svg" alt="">
        <img class="Rectangle5" src="design/Rectangle_129.svg" alt="">
        <img class="Rectangle6" src="design/Rectangle_129.svg" alt="">

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
    </footer>
</body>

</html>
