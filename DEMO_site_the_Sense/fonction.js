function afficherEtLancer() {
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