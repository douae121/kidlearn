function jouerSon() {
    const sound = document.getElementById("clickSound");
    if (sound) {
        sound.play().catch(function(error) {
            console.log("Erreur lors du chargement du son:", error);
        });
    }
}