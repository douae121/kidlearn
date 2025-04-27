<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="{{ asset('css/stylehome.css') }}">
    <style>
        .sound-button {
            position: fixed;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: linear-gradient(45deg,rgb(137, 244, 67),rgb(253, 231, 31));
            color: white;
            border: 3px solid #FFD700;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 40px;
            box-shadow: 0 0 25px rgba(115, 218, 18, 0.6);
            animation: bounce 1s infinite alternate, rotate 4s infinite linear;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .sound-button:hover {
            transform: translate(-50%, -50%) scale(1.2);
            animation: bounce 0.5s infinite alternate, rotate 2s infinite linear;
        }

        @keyframes bounce {
            0% {
                transform: translate(-50%, -50%) scale(1);
            }
            100% {
                transform: translate(-50%, -50%) scale(1.1);
            }
        }

        @keyframes rotate {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }
            100% {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        .sound-button::after {
            content: "";
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,255,255,0.8) 0%, rgba(255,255,255,0) 70%);
            opacity: 0.5;
            animation: shine 2s infinite;
        }

        @keyframes shine {
            0% {
                transform: scale(0.8);
                opacity: 0.5;
            }
            50% {
                transform: scale(1.2);
                opacity: 0.8;
            }
            100% {
                transform: scale(0.8);
                opacity: 0.5;
            }
        }
    </style>
</head>
<body>
    <button class="sound-button" onclick="playWelcomeSound()">🐣</button>

    <audio id="welcomeSound" src="{{ asset('sounds/Bienvenue chez KidLe.mp3') }}"></audio>
    <audio id="clickSound" src="{{ asset('sounds/clic.mp3') }}"></audio>

    <div class="header">
        <img src="{{ asset('image/logo.png') }}" alt="Logo du site" class="logo">
    </div>

    <div class="menu-button" onclick="toggleMenu()">⋮</div>

    <div id="menu-links">
        <a href="{{ url('/') }}">Accueil</a>
        <a href="{{ url('/enfant') }}">Espace enfants</a>
        <a href="{{ url('/inscription') }}">Espace parents</a>
        <a href="{{ url('/inscription') }}">Inscription</a>
    </div>

    <div class="btn-container">
        <button class="btn" id="startButton" onclick="afficherButtons()">Commencer</button>
    </div>

    <div id="newButtons" style="display: none">
        <p>Qui êtes-vous ?</p>
        <button class="btn" onclick="redirigerEnfant()">Enfant</button>
        <br><br>
        <button class="btn" onclick="redirigerInscription()">Parent</button>
    </div>

    <script src="{{ asset('js/global.js') }}"></script>

    <script>
        function playWelcomeSound() {
            const welcomeSound = document.getElementById("welcomeSound");
            const soundButton = document.querySelector('.sound-button');
            
            if (welcomeSound) {
                welcomeSound.play().then(() => {
                    console.log("Son joué avec succès");
                    soundButton.style.display = 'none';
                }).catch(error => {
                    console.error("Erreur lors de la lecture du son:", error);
                });
            }
        }

        function afficherButtons() {
            jouerSon();
            document.getElementById("startButton").style.display = "none";
            document.getElementById("newButtons").style.display = "block";
        }

        function redirigerInscription() {
            jouerSon();
            window.location.href = "{{ url('/inscription') }}";
        }

        function redirigerEnfant() {
            jouerSon();
            window.location.href = "{{ url('/enfant') }}";
        }

        function toggleMenu() {
            jouerSon();
            var menu = document.getElementById("menu-links");
            menu.classList.toggle("show");
        }

        document.addEventListener('click', function(event) {
            var menu = document.getElementById("menu-links");
            var bouton = document.querySelector(".menu-button");
            if (!menu.contains(event.target) && !bouton.contains(event.target)) {
                menu.classList.remove("show");
            }
        });

        function jouerSon() {
            const son = document.getElementById("clickSound");
            if (son) {
                son.currentTime = 0;
                son.play().catch(error => {
                    console.log("Erreur lors de la lecture du son :", error);
                });
            }
        }
    </script>
</body>
</html>
