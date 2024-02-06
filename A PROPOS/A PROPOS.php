<!DOCTYPE html>
<html lang="fr">
<header>

<title>A PROPOS DE NOUS</title>
<meta charset = utf-8>
<meta name="Nom de l’élement" content="une description de la page "/>

<link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="A PROPOS.css">
</header>

<body>
    <div class="en_tete">
        <header role="header">
                <script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>

                <img src="Logo.svg" alt="logo" class="logo">
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
        <img class="SENSE" src="THE SENSE.svg" alt="">                  
    </div>
    
            <button><a href="">DÉCOUVRIR</a></button>

            <div class="DESCRIPTION">
                <img class="fond" src="Ellipse 36.svg" alt="">
                <img class="video" src="VIDEO.svg" alt="">
                <div class="container">
                    <img src="Polygon 3.svg" alt="Image" onclick="afficherEtLancer()">
                    <div class="popup" id="popupVideo">
                        <span class="fermer" onclick="fermerPopup()">&times;</span>
                        <video id="videoPlayer" width="1500" height="auto" controls autoplay onended="fermerPopup()">
                            <source src="Copie de Trailer - The Sense.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture de la vidéo.
                        </video>
                    </div>
                </div>
               
                
                <p class="Titre">THE SENSE, UNE IDÉE NOVATRICE</p>

                <p>
                The Sense est né d’un projet d’école de quatre étudiants en école de commerce. Se basant sur une idée originaire des États-Unis, 
                les quatre amis décidèrent d’adapter ce concept inédit au marché français en y ajoutant leurs idées novatrices. Mélant deux activités attractives, 
                la Réalité Virtuel et les Escape Game, THE SENSE joint le meilleur des deux mondes pour vous proposer des expériences inédites et époustouflantes. 
                N’hésitez plus et franchisser la frontière du réel.
                </p>
            </div>
           

            <div  class="QUI">
                <div class="infos">
                    <p class="Titre">QUI SOMMES-NOUS ?</p>

                    <p>
                    The Sense est une société formée par quatre étudiants en école de commerce qui détiennent la majorité des parts. 
                    Le restant étant la propriété de DreamAway, entreprise française spécialiste du milieu de la VR.
                    </p>
                </div>
                

                <div class="Nous">  
                    <div class="Colin">
                        <img src="image 116.svg" alt="">
                        <p>CORDIER <br><span>Colin</span> </p>

                    </div>

                    <div class="Thibault">
                        <img src="image 117.svg" alt="">
                        <p>VANBORRE <br><span>Thibault</span></p>

                    </div>

                    <div class="Elo">
                        <img src="image 119.svg" alt="">
                        <p>URBAIN <br><span>Eloëne</span> </p>

                    </div>

                    <div class="Bryce">
                        <img src="image 118.svg" alt="">
                        <p>ZAABAT <br><span>Bryce</span></p>

                    </div>

                    <div class="infos">
                        <p class="Colin">
                        <span>Co-Fondateur THE SENSE et Directeur Général</span> <br><br>

                        “Nous avons décidé de réaliser notre rêve de gosse : rendre réel ce qui ne l’est pas.”
                        <br>- Colin CORDIER - 
                        </p>

                        <p class="Thibault">
                        <span>Co-Fondateur THE SENSE et Responsable RH</span> <br><br>

                        “The Sense représente, pour moi, la concrétisation de 4 ans de travails et de passion”
                        <br>- Thibault VANBORRE - 
                        </p>

                        <p class="Elo">
                        <span>Co-Fondatrice THE SENSE et Responsable Communication</span><br><br>

                        “Je pense qu’il est important de rêver dans la vie et The Sense permet de vivre ces rêves.”
                        <br>- Eloëne URBAIN - 
                        </p>

                        <p class="Bryce">
                        <span>Co-Fondateur THE SENSE et Responsable Marketing</span> <br><br>

                        “The Sense permet à nos joueurs de vivrent une expérience époustouflante qui les marquera longtemps. Croyez-moi.”
                        <br>- Bryce ZAABAT -
                        </p>
                    </div>
                </div>
            </div>


            <div  class="OU">
                <p class="Titre">OÙ NOUS RETROUVER ?</p>

                <p>
                The Sense se trouve, pour le moment, exclusivement à Lyon (France) dans le 3ème arrondissement. Pour nous rejoindre, il suffit de prendre 
                la ligne T2 du Tram arrêt Rue de l’Université ou bien prendre le Métro B station Jecéplus (100m à pied).
                </p>

                <div class="Map">
                    <img src="image 74.svg" alt="">
                    <div class="adresse"><span>207 Rue Duguesclin <br> 69003 Lyon</span></div>
                    <img class="point" src="image 78.svg" alt="">
                </div>

                <div class="horaire">
                    <p class="Titre">NOS HORAIRES</p>

                    <div class="info">
                        <p class="date">
                        <span>Lundi</span> <br>

                        Mardi

                        Mercredi

                        Jeudi

                        Vendredi

                        Samedi

                        Dimanche
                        </p>
                        <p class="heure">
                        <span>FERMÉ</span>

                        10:00-22:00

                        10:00-22:00

                        10:00-22:00

                        10:00-01:00

                        10:00-01:00

                        10:00-22:00
                        </p>

                    </div>

                </div>

            </div>



            <div class="CONTACT">
                <p class="Titre">NOUS CONTACTER</p>

                <form method="get" action="">
                <input type="text" class="nom" id="nom" placeholder="Votre nom" size="30" maxlength="20" required>
                <input type="text" class="prenom" id="prenom" placeholder="Votre prénom" size="30" maxlength="20" required>    
                <input type="email" class="email" id="email" placeholder="Votre adresse email" required />


                <textarea class="demande" id="demande" placeholder="Votre message / Avis" required></textarea>

                <input type="submit" class="envoie" value="Envoyer" />


                </form>
                
                <p>
                    ou <br>
                    par téléphone au : <br>
                    <span id="num">01 23 45 67 89</span>
                </p>

            </div>





<div class="TRUCS COOL">
    <img class="FORME" src="BRYCE FORME.svg" alt="">
    <img class="Logo1" src="Logo1.svg" alt="">
    <img class="V37" src="Vector 37.svg" alt="">
    <img class="V38" src="Vector 38.svg" alt="">
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
                    <a href='Youtube.com/The_Sense' id='Youtube'><img src="Youtube.svg" alt="Youtube" class="Yb" id="Yb"></a>
                    <a href='Instagram.com/The_Sense' id='Insta'><img src="Instagram.svg" alt="Instagram" class="Ig" id="Ig"></a>
                    <a href='Twiiter.com/The_Sense' id='Twitter'><img src="Twitter.svg" alt="Twitter" class="Tw" id="Tw"></a>
                    <a href='Faxebook.com/The_Sense' id='Facebook'><img src="Facebook.svg" alt="Facebook" class="Fb" id="Fb"></a>
                </div>
            </div>
        </div>
</footer>
    
    <script src="test.js"></script>
</body>

</html>