<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test Bouton</title>
    <link rel="stylesheet" href="{{ asset('css/stylehome.css') }}">
</head>
<body>

    <!-- Bouton "trois points" en haut à droite -->
    <div class="menu-button" onclick="toggleMenu()">⋮</div>

    <!-- Liens du menu -->
    <div id="menu-links">
        <a href="inscription.html">Inscription</a>
        <a href="a-propos.html">À propos de nous</a>
    </div>

    <div class="btn-container">
        <button class="btn" id="startButton" onclick="afficherButtons()">Commencer</button>
        <div id="message"></div>
    </div>

    <!-- Deux nouveaux boutons qui apparaîtront à la place du bouton "Commencer" -->
    <div id="newButtons">
        <p>Qui êtes-vous ?</p>
        <button class="btn" onclick="redirigerEnfant()">Enfant</button>
        <br>
        <br>
        <button class="btn" onclick="redirigerParent()">Parent</button>
    </div>

    <audio id="clickSound" src="{{ asset('sounds/clic.mp3') }}" preload="auto"></audio>

    <script>
        function jouerSon() {
            const sound = document.getElementById("clickSound");
            sound.play().catch(function(error) {
                console.log("Erreur lors du chargement du son:", error);
            });
        }

        function afficherButtons() {
            // Jouer le son de clic
            jouerSon();

            // Masquer le bouton "Commencer"
            document.getElementById("startButton").style.display = "none";

            // Afficher les deux nouveaux boutons
            document.getElementById("newButtons").style.display = "block";
        }

        function redirigerEnfant() {
            jouerSon();  // Joue le son de clic
            window.location.href = "enfant.php"; // Remplace par l'URL de la première page
        }

        function redirigerParent() {
            jouerSon();  // Joue le son de clic
            window.location.href = "parent.php"; // Remplace par l'URL de la deuxième page
        }

        // Fonction pour afficher/masquer les liens du menu
        function toggleMenu() {
            jouerSon();
            var menu = document.getElementById("menu-links");
            if (menu.style.display === "none" || menu.style.display === "") {
                menu.style.display = "block"; // Affiche le menu
            } else {
                menu.style.display = "none"; // Masque le menu
            }
        }
    </script>

</body>
</html>
