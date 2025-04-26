<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Arbre des Lettres Magiques - Niveau 1</title>
    <link rel="stylesheet" href="/css/lettres.css">
</head>
<body>
    <div class="container">
        <h1>🌟 Niveau 1 : Les Premières Lettres 🌟</h1>
        <p>Apprenons à reconnaître les lettres A, B et C !</p>
        
        <div class="lettres-container">
            <div class="lettre-card" onclick="playSound('A')">
                <div class="lettre">A</div>
                <div class="image-container">
                    <img src="/images/arbre.png" alt="Arbre">
                </div>
                <p>A comme Arbre 🌳</p>
            </div>

            <div class="lettre-card" onclick="playSound('B')">
                <div class="lettre">B</div>
                <div class="image-container">
                    <img src="/images/banane.png" alt="Banane">
                </div>
                <p>B comme Banane 🍌</p>
            </div>

            <div class="lettre-card" onclick="playSound('C')">
                <div class="lettre">C</div>
                <div class="image-container">
                    <img src="/images/chat.png" alt="Chat">
                </div>
                <p>C comme Chat 🐱</p>
            </div>
        </div>

        <a href="{{ route('lettres.quiz1') }}" class="quiz-button">Passer au Quiz ! 🎯</a>
    </div>

    <div class="hibou-guide"></div>

    <audio id="sound-A" src="/sons/lettre-a.mp3"></audio>
    <audio id="sound-B" src="/sons/lettre-b.mp3"></audio>
    <audio id="sound-C" src="/sons/lettre-c.mp3"></audio>

    <script>
        function playSound(lettre) {
            const audio = document.getElementById(`sound-${lettre}`);
            if (audio) {
                audio.currentTime = 0;
                audio.play();
            }
        }
    </script>
</body>
</html> 