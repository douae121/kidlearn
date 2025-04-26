<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Arbre des Lettres Magiques - Niveau 2</title>
    <link rel="stylesheet" href="/css/lettres.css">
    <style>
        .sound-icon {
            font-size: 2em;
            margin: 10px 0;
            color: #2196F3;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .sound-icon:hover {
            transform: scale(1.2);
        }

        .pronunciation {
            font-size: 1.2em;
            color: #666;
            margin: 5px 0;
        }

        .hibou-speaking {
            animation: speak 1s infinite;
        }

        @keyframes speak {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎵 Niveau 2 : Les Sons des Lettres 🎵</h1>
        <p>Écoute et répète les sons des lettres avec notre ami le hibou !</p>
        
        <div class="lettres-container">
            <div class="lettre-card" onclick="playLetterSound('A')">
                <div class="lettre">A</div>
                <div class="sound-icon">🔊</div>
                <div class="pronunciation">"ahhh"</div>
                <p>Comme dans "Avion" ✈️</p>
                <div class="image-container">
                    <img src="/images/avion.png" alt="Avion">
                </div>
            </div>

            <div class="lettre-card" onclick="playLetterSound('B')">
                <div class="lettre">B</div>
                <div class="sound-icon">🔊</div>
                <div class="pronunciation">"beu"</div>
                <p>Comme dans "Ballon" 🎈</p>
                <div class="image-container">
                    <img src="/images/ballon.png" alt="Ballon">
                </div>
            </div>

            <div class="lettre-card" onclick="playLetterSound('C')">
                <div class="lettre">C</div>
                <div class="sound-icon">🔊</div>
                <div class="pronunciation">"sss"</div>
                <p>Comme dans "Citron" 🍋</p>
                <div class="image-container">
                    <img src="/images/citron.png" alt="Citron">
                </div>
            </div>
        </div>

        <a href="{{ route('lettres.quiz2') }}" class="quiz-button">Passer au Quiz ! 🎯</a>
    </div>

    <div class="hibou-guide" id="hibou"></div>

    <audio id="sound-A" src="/sons/lettre-a-long.mp3"></audio>
    <audio id="sound-B" src="/sons/lettre-b-long.mp3"></audio>
    <audio id="sound-C" src="/sons/lettre-c-long.mp3"></audio>

    <script>
        function playLetterSound(lettre) {
            const audio = document.getElementById(`sound-${lettre}`);
            const hibou = document.getElementById('hibou');
            
            if (audio) {
                audio.currentTime = 0;
                audio.play();
                
                // Animation du hibou
                hibou.classList.add('hibou-speaking');
                
                // Retirer l'animation à la fin du son
                audio.onended = function() {
                    hibou.classList.remove('hibou-speaking');
                };
            }
        }
    </script>
</body>
</html> 