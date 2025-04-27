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

        .form-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 500px;
            animation: slideIn 0.5s ease-out;
        }

        .form-page {
            display: none;
            text-align: center;
        }

        .form-page.active {
            display: block;
            animation: fadeIn 0.5s ease-out;
        }

        .form-page h2 {
            color: #FF6B6B;
            margin-bottom: 30px;
            font-size: 28px;
        }

        .form-input {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 2px solid #FFD700;
            border-radius: 15px;
            font-size: 18px;
            transition: all 0.3s;
        }

        .form-input:focus {
            border-color: #FF6B6B;
            box-shadow: 0 0 10px rgba(255, 107, 107, 0.3);
            outline: none;
        }

        .next-button {
            background: linear-gradient(45deg, #FF6B6B, #FF8E53);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 25px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
        }

        .next-button:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(255, 107, 107, 0.4);
        }

        .next-button:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        @keyframes slideIn {
            from {
                transform: translate(-50%, -100%);
                opacity: 0;
            }
            to {
                transform: translate(-50%, -50%);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .progress-bar {
            width: 100%;
            height: 10px;
            background: #f0f0f0;
            border-radius: 5px;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .progress {
            height: 100%;
            background: linear-gradient(45deg, #FF6B6B, #FF8E53);
            width: 0%;
            transition: width 0.5s ease-out;
        }
    </style>
</head>
<body>
    <button class="sound-button" onclick="playWelcomeSound()">🐣</button>

    <div class="form-container" id="formContainer">
        <div class="progress-bar">
            <div class="progress" id="progressBar"></div>
        </div>
        
        <div class="form-page active" id="page1">
            <h2>Quel est ton prénom ?</h2>
            <input type="text" class="form-input" id="prenom" placeholder="Écris ton prénom ici...">
            <button class="next-button" onclick="nextPage(1)">Suivant</button>
        </div>

        <div class="form-page" id="page2">
            <h2>Quel âge as-tu ?</h2>
            <input type="number" class="form-input" id="age" placeholder="Écris ton âge ici...">
            <button class="next-button" onclick="nextPage(2)">Suivant</button>
        </div>

        <div class="form-page" id="page3">
            <h2>Quelle est ta couleur préférée ?</h2>
            <input type="text" class="form-input" id="couleur" placeholder="Écris ta couleur préférée ici...">
            <button class="next-button" onclick="nextPage(3)">Suivant</button>
        </div>

        <div class="form-page" id="page4">
            <h2>Quel est ton animal préféré ?</h2>
            <input type="text" class="form-input" id="animal" placeholder="Écris ton animal préféré ici...">
            <button class="next-button" onclick="nextPage(4)">Terminer</button>
        </div>
    </div>

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
        <button class="btn" id="startButton" onclick="showForm()">Commencer</button>
    </div>

    <div id="newButtons" style="display: none">
        <p>Qui êtes-vous ?</p>
        <button class="btn" onclick="redirigerEnfant()">Enfant</button>
        <br><br>
        <button class="btn" onclick="redirigerInscription()">Parent</button>
    </div>

    <script src="{{ asset('js/global.js') }}"></script>

    <script>
        let currentPage = 1;
        const totalPages = 4;

        function showForm() {
            document.getElementById('formContainer').style.display = 'block';
            updateProgress();
        }

        function nextPage(pageNumber) {
            if (pageNumber < totalPages) {
                document.getElementById(`page${pageNumber}`).classList.remove('active');
                document.getElementById(`page${pageNumber + 1}`).classList.add('active');
                currentPage = pageNumber + 1;
                updateProgress();
                jouerSon();
            } else {
                // Formulaire terminé
                alert('Bravo ! Tu as terminé le formulaire !');
                document.getElementById('formContainer').style.display = 'none';
            }
        }

        function updateProgress() {
            const progress = (currentPage / totalPages) * 100;
            document.getElementById('progressBar').style.width = `${progress}%`;
        }

        // Vérification des champs avant de passer à la page suivante
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('input', function() {
                const nextButton = this.parentElement.querySelector('.next-button');
                nextButton.disabled = !this.value.trim();
            });
        });

        function playWelcomeSound() {
            const welcomeSound = document.getElementById("welcomeSound");
            const soundButton = document.querySelector('.sound-button');
            
            if (welcomeSound) {
                welcomeSound.play().then(() => {
                    console.log("Son joué avec succès");
                    // Cacher le bouton après avoir joué le son
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