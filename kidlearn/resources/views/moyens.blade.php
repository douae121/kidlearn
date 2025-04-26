<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les Moyens de transports</title>
    <style>
        body {
            font-family: 'Comic Sans MS', sans-serif;
            background-image: url('images/arplan2.png');
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
        
        .moyens-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        
        .moyens {
            background-color: white;
            border-radius: 15px;
            padding: 15px;
            width: 180px;
            cursor: pointer;
            transition: transform 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .moyens:hover {
            transform: scale(1.05);
        }
        
        .moyens img {
            width: 150px;
            height: 150px;
            border-radius: 20px;
            border: 2px solid #4CAF50;
            object-fit: cover;
        }
        
        .moyens p {
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
        <a href="{{ route('primaire') }}" class="retour">← Retour</a>
        <h1>Cliquez !</h1>
        
        <div class="moyens-container">
            <div class="moyens" onclick="playSound('avion')">
                <img src="/images/avion.png" alt="avion" id="img-avion">
                <p>Avion</p>
            </div>
            
            <div class="moyens" onclick="playSound('bateau')">
                <img src="/images/bateau.png" alt="bateau" id="img-bateau">
                <p>Bateau</p>
            </div>
            
            <div class="moyens" onclick="playSound('ambilance')">
                <img src="/images/ambilance.png" alt="ambilance" id="img-ambilance">
                <p>Ambilance</p>
            </div>
            
            <div class="moyens" onclick="playSound('bus')">
                <img src="/images/bus.png" alt="bus" id="img-bus">
                <p>Bus</p>
            </div>
            
            <div class="moyens" onclick="playSound('camion')">
                <img src="/images/camion.png" alt="camion" id="img-camion">
                <p>Camion</p>
            </div>
            
            <div class="moyens" onclick="playSound('moto')">
                <img src="/images/moto.png" alt="moto" id="img-moto">
                <p>Moto</p>
            </div>

            <div class="moyens" onclick="playSound('pompier')">
                <img src="/images/pompier.png" alt="pompier" id="img-pompier">
                <p>Camion de pompiers</p>
            </div>
            
            <div class="moyens" onclick="playSound('sous-marin')">
                <img src="/images/sousmarin.png" alt="sous-marin" id="img-sous-marin">
                <p>Sous-marin</p>
            </div>
            
            <div class="moyens" onclick="playSound('tracteur')">
                <img src="/images/tracteur.png" alt="tracteur" id="img-tracteur">
                <p>Tracteur</p>
            </div>
            
            <div class="moyens" onclick="playSound('train')">
                <img src="/images/train.png" alt="train" id="img-train">
                <p>Train</p>
            </div>
            
            <div class="moyens" onclick="playSound('velo')">
                <img src="/images/velo.png" alt="velo" id="img-velo">
                <p>Velo</p>
            </div>

            <div class="moyens" onclick="playSound('voiture')">
                <img src="/images/voiture.png" alt="voiture" id="img-voiture">
                <p>Voiture</p>
            </div>

            <div class="moyens" onclick="playSound('tram')">
                <img src="/images/tram.png" alt="tram" id="img-tram">
                <p>Tram</p>
            </div>


            
        </div>
        
        
    </div>
    
    <!-- Audio elements for animal sounds -->
    <audio id="audio-avion" src="/sons/avion.mp3"></audio>
    <audio id="audio-bateau" src="/sons/bateau.mp3"></audio>
    <audio id="audio-ambilance" src="/sons/ambilance.mp3"></audio>
    <audio id="audio-bus" src="/sons/bus.mp3"></audio>
    <audio id="audio-camion" src="/sons/camion.mp3"></audio>
    <audio id="audio-moto" src="/sons/moto.mp3"></audio>
    <audio id="audio-pompier" src="/sons/pompier.mp3"></audio>
    <audio id="audio-sous-marin" src="/sons/sousmarin.mp3"></audio>
    <audio id="audio-tracteur" src="/sons/tracteur.mp3"></audio>
    <audio id="audio-train" src="/sons/train.mp3"></audio>
    <audio id="audio-velo" src="/sons/velo.mp3"></audio>
    <audio id="audio-voiture" src="/sons/voiture.mp3"></audio>
    <audio id="audio-tram" src="/sons/tram.mp3"></audio>
    

    <script>
        // Définir l'arrière-plan dès le chargement de la page
        document.addEventListener('DOMContentLoaded', function() {
            // Le sélecteur de placeholder utilise une taille plus grande pour une meilleure qualité
            document.body.style.backgroundImage = "url('/images/arplan2.png')";
        });

        function playSound(moyens) {
            // Stop any currently playing sounds
            document.querySelectorAll('audio').forEach(audio => {
                audio.pause();
                audio.currentTime = 0;
            });
            
            // Remove animation from all animal containers
            document.querySelectorAll('.moyens').forEach(div => {
                div.classList.remove('sound-playing');
            });
            
            // Play the selected animal sound
            const audio = document.getElementById('audio-' + moyens);
            audio.play();
            
            // Add animation to the clicked animal
            const moyensDiv = document.querySelector(`.moyens img[id="img-${moyens}"]`).parentNode;
            moyensDiv.classList.add('sound-playing');
            
            // Remove animation when sound ends
            audio.onended = function() {
                moyensDiv.classList.remove('sound-playing');
            };
        }
    </script>
</body>
</html>