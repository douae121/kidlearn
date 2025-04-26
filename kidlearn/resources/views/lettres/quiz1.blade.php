<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Niveau 1 des Lettres</title>
    <link rel="stylesheet" href="/css/lettres.css">
</head>
<body>
    <div class="container">
        <h1>🎯 Quiz Niveau 1 🎯</h1>
        <p>Trouve la bonne lettre !</p>

        <div class="question" id="question">
            Touche la lettre A !
        </div>

        <div class="options">
            <div class="option" onclick="checkAnswer('A')">A</div>
            <div class="option" onclick="checkAnswer('B')">B</div>
            <div class="option" onclick="checkAnswer('C')">C</div>
        </div>

        <div class="feedback" id="feedback"></div>

        <a href="{{ route('lettres.niveau2') }}" class="next-button" id="nextButton">
            Niveau suivant ! 🌟
        </a>
    </div>

    <div class="hibou-guide"></div>

    <script>
        let currentQuestion = 0;
        const questions = [
            { question: "Touche la lettre A !", answer: "A" },
            { question: "Touche la lettre B !", answer: "B" },
            { question: "Touche la lettre C !", answer: "C" }
        ];

        function checkAnswer(selected) {
            const options = document.querySelectorAll('.option');
            const feedback = document.getElementById('feedback');
            const nextButton = document.getElementById('nextButton');
            
            options.forEach(option => {
                option.style.pointerEvents = 'none';
            });

            if (selected === questions[currentQuestion].answer) {
                feedback.textContent = "Bravo ! 🎉";
                feedback.className = "feedback success";
                document.querySelector(`.option:contains('${selected}')`).classList.add('correct');
            } else {
                feedback.textContent = "Essaie encore ! 💪";
                feedback.className = "feedback error";
                document.querySelector(`.option:contains('${selected}')`).classList.add('wrong');
            }

            currentQuestion++;
            if (currentQuestion < questions.length) {
                setTimeout(() => {
                    document.getElementById('question').textContent = questions[currentQuestion].question;
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
    </script>
</body>
</html> 