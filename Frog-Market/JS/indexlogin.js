function deshabilitaRetroceso() {
    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button"; // Para Chrome
    window.onhashchange = function() {
        window.location.hash="no-back-button";
    }
}