<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Niveau 2 des Lettres</title>
    <link rel="stylesheet" href="/css/lettres.css">
    <style>
        .sound-button {
            background: #2196F3;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.5em;
            cursor: pointer;
            margin: 20px;
            transition: all 0.3s;
        }

        .sound-button:hover {
            transform: scale(1.1);
            background: #1976D2;
        }

        .option img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        .option {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 150px;
            height: 150px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎵 Quiz Niveau 2 🎵</h1>
        <p>Écoute le son et trouve la bonne lettre !</p>

        <button class="sound-button" onclick="playCurrentSound()">
            Écouter le son 🔊
        </button>

        <div class="options">
            <div class="option" onclick="checkAnswer('A')">
                <img src="/images/avion.png" alt="Avion">
                <div class="lettre">A</div>
            </div>
            <div class="option" onclick="checkAnswer('B')">
                <img src="/images/ballon.png" alt="Ballon">
                <div class="lettre">B</div>
            </div>
            <div class="option" onclick="checkAnswer('C')">
                <img src="/images/citron.png" alt="Citron">
                <div class="lettre">C</div>
            </div>
        </div>

        <div class="feedback" id="feedback"></div>

        <a href="{{ route('lettres.niveau3') }}" class="next-button" id="nextButton">
            Niveau suivant ! 🌟
        </a>
    </div>

    <div class="hibou-guide" id="hibou"></div>

    <audio id="sound-A" src="/sons/lettre-a-long.mp3"></audio>
    <audio id="sound-B" src="/sons/lettre-b-long.mp3"></audio>
    <audio id="sound-C" src="/sons/lettre-c-long.mp3"></audio>

    <script>
        let currentQuestion = 0;
        const questions = [
            { sound: 'A', answer: 'A', image: 'avion' },
            { sound: 'B', answer: 'B', image: 'ballon' },
            { sound: 'C', answer: 'C', image: 'citron' }
        ];

        function playCurrentSound() {
            const audio = document.getElementById(`sound-${questions[currentQuestion].sound}`);
            const hibou = document.getElementById('hibou');
            
            if (audio) {
                audio.currentTime = 0;
                audio.play();
                hibou.classList.add('hibou-speaking');
                
                audio.onended = function() {
                    hibou.classList.remove('hibou-speaking');
                };
            }
        }

        function checkAnswer(selected) {
            const options = document.querySelectorAll('.option');
            const feedback = document.getElementById('feedback');
            const nextButton = document.getElementById('nextButton');
            
            options.forEach(option => {
                option.style.pointerEvents = 'none';
            });

            if (selected === questions[currentQuestion].answer) {
                feedback.textContent = "Bravo ! C'est la bonne lettre ! 🎉";
                feedback.className = "feedback success";
                document.querySelector(`.option:contains('${selected}')`).classList.add('correct');
            } else {
                feedback.textContent = "Ce n'est pas la bonne lettre. Écoute encore ! 💪";
                feedback.className = "feedback error";
                document.querySelector(`.option:contains('${selected}')`).classList.add('wrong');
                
                // Permettre de réessayer
                setTimeout(() => {
                    options.forEach(option => {
                        option.className = "option";
                        option.style.pointerEvents = "auto";
                    });
                    feedback.textContent = "";
                    feedback.className = "feedback";
                }, 1500);
                return;
            }

            currentQuestion++;
            if (currentQuestion < questions.length) {
                setTimeout(() => {
                    options.forEach(option => {
                        option.className = "option";
                        option.style.pointerEvents = "auto";
                    });
                    feedback.textContent = "";
                    feedback.className = "feedback";
                }, 1500);
            } else {
                nextButton.classList.add('visible');
            }
        }

        // Jouer le premier son au chargement
        window.onload = function() {
            setTimeout(playCurrentSound, 1000);
        };
    </script>
</body>
</html> 