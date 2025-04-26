<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les Animaux et Leurs Sons</title>
    <style>
        body {
            font-family: 'Comic Sans MS', sans-serif;
            background-image: url('images/arplan.png');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            text-align: center;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
        
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        
        h1 {
            color: #4CAF50;
            text-shadow: 1px 1px 2px #fff;
            font-size: 2.5em;
            margin-bottom: 30px;
        }
        
        .animals-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        
        .animal {
            background-color: white;
            border-radius: 15px;
            padding: 15px;
            width: 180px;
            cursor: pointer;
            transition: transform 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .animal:hover {
            transform: scale(1.05);
        }
        
        .animal img {
            width: 150px;
            height: 150px;
            border-radius: 20px;
            border: 2px solid #4CAF50;
            object-fit: cover;
        }
        
        .animal p {
            font-size: 1.2em;
            margin: 10px 0 5px;
            color: #333;
            font-weight: bold;
        }
        
        .sound-playing {
            animation: pulse 1s infinite;
        }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(76, 175, 80, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(76, 175, 80, 0); }
            100% { box-shadow: 0 0 0 0 rgba(76, 175, 80, 0); }
        }
        
        .footer {
            margin-top: 30px;
            font-size: 0.9em;
            color: #555;
        }
        
        .retour {
            position: fixed;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            background: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            transition: transform 0.3s;
            z-index: 1000;
        }
        .retour:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('prescolaire') }}" class="retour">← Retour</a>
        <h1>Cliquez sur un animal pour entendre son cri !</h1>
        
        <div class="animals-container">
            <div class="animal" onclick="playSound('chat')">
                <img src="/images/chat.png" alt="Chat" id="img-chat">
                <p>Chat</p>
            </div>
            
            <div class="animal" onclick="playSound('chien')">
                <img src="/images/chien.png" alt="Chien" id="img-chien">
                <p>Chien</p>
            </div>
            
            <div class="animal" onclick="playSound('vache')">
                <img src="/images/vache.png" alt="Vache" id="img-vache">
                <p>Vache</p>
            </div>
            
            <div class="animal" onclick="playSound('lion')">
                <img src="/images/lion.png" alt="Lion" id="img-lion">
                <p>Lion</p>
            </div>
            
            <div class="animal" onclick="playSound('singe')">
                <img src="/images/singe.png" alt="singe" id="img-singe">
                <p>Singe</p>
            </div>
            
            <div class="animal" onclick="playSound('mouton')">
                <img src="/images/mouton.png" alt="Mouton" id="img-mouton">
                <p>Mouton</p>
            </div>

            <div class="animal" onclick="playSound('cheval')">
                <img src="/images/cheval.png" alt="cheval" id="img-cheval">
                <p>Cheval</p>
            </div>
            
            <div class="animal" onclick="playSound('oiseau')">
                <img src="/images/oiseau.png" alt="oiseau" id="img-oiseau">
                <p>Oiseau</p>
            </div>
            
            <div class="animal" onclick="playSound('hibou')">
                <img src="/images/hibou.png" alt="Hibou" id="img-hibou">
                <p>Hibou</p>
            </div>
            
            <div class="animal" onclick="playSound('abeille')">
                <img src="/images/abeille.png" alt="abeille" id="img-abeille">
                <p>Abeille</p>
            </div>
            
            <div class="animal" onclick="playSound('elephant')">
                <img src="/images/elephant.png" alt="elephant" id="img-elephant">
                <p>Elephant</p>
            </div>

            <div class="animal" onclick="playSound('grenouille')">
                <img src="/images/grenouille.png" alt="grenouille" id="img-grenouille">
                <p>Grenouille</p>
            </div>

            <div class="animal" onclick="playSound('loup')">
                <img src="/images/loup.png" alt="loup" id="img-loup">
                <p>Loup</p>
            </div>

            <div class="animal" onclick="playSound('ane')">
                <img src="/images/ane.png" alt="ane" id="img-ane">
                <p>Ane</p>
            </div>

            <div class="animal" onclick="playSound('dauphin')">
                <img src="/images/dauphin.png" alt="dauphin" id="img-dauphin">
                <p>Dauphin</p>
            </div>
        </div>
    </div>
    
    <!-- Audio elements for animal sounds -->
    <audio id="audio-chat" src="/sons/catsons.mp3"></audio>
    <audio id="audio-chien" src="/sons/chien.mp3"></audio>
    <audio id="audio-vache" src="/sons/vache.mp3"></audio>
    <audio id="audio-lion" src="/sons/lion.mp3"></audio>
    <audio id="audio-singe" src="/sons/singe.mp3"></audio>
    <audio id="audio-mouton" src="/sons/mouton.mp3"></audio>
    <audio id="audio-abeille" src="/sons/abeille.mp3"></audio>
    <audio id="audio-dauphin" src="/sons/dauphin.mp3"></audio>
    <audio id="audio-loup" src="/sons/loup.mp3"></audio>
    <audio id="audio-elephant" src="/sons/elephant.mp3"></audio>
    <audio id="audio-oiseau" src="/sons/oiseau.mp3"></audio>
    <audio id="audio-hibou" src="/sons/hibou.mp3"></audio>
    <audio id="audio-grenouille" src="/sons/grenouille.mp3"></audio>
    <audio id="audio-ane" src="/sons/ane.mp3"></audio>
    <audio id="audio-cheval" src="/sons/cheval.mp3"></audio>
    
    <script>
        // Définir l'arrière-plan dès le chargement de la page
        document.addEventListener('DOMContentLoaded', function() {
            // Le sélecteur de placeholder utilise une taille plus grande pour une meilleure qualité
            document.body.style.backgroundImage = "url('/images/arplan.png')";
        });

        function playSound(animal) {
            // Stop any currently playing sounds
            document.querySelectorAll('audio').forEach(audio => {
                audio.pause();
                audio.currentTime = 0;
            });
            
            // Remove animation from all animal containers
            document.querySelectorAll('.animal').forEach(div => {
                div.classList.remove('sound-playing');
            });
            
            // Play the selected animal sound
            const audio = document.getElementById('audio-' + animal);
            audio.play();
            
            // Add animation to the clicked animal
            const animalDiv = document.querySelector(`.animal img[id="img-${animal}"]`).parentNode;
            animalDiv.classList.add('sound-playing');
            
            // Remove animation when sound ends
            audio.onended = function() {
                animalDiv.classList.remove('sound-playing');
            };
        }
    </script>
</body>
</html> 