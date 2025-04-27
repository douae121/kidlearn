<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>pageparent</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url("/image/enfants.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }

        .wrapper {
            max-width: 800px;
            background: rgba(255, 249, 229, 0.7);
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            padding: 20px;
            text-align: center;
            max-height: 90vh;
            overflow-y: auto;
        }

        h1 {
            font-size: 2em;
            color:rgb(36, 132, 7);
            margin-bottom: 15px;
        }

        .alert-success {
            background-color:rgb(223, 240, 216);
            color: #3c763d;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .content {
            font-size: 1.1em;
            line-height: 1.5;
            text-align: left;
            padding-left: 15px;
            margin-bottom: 15px;
        }

        .content p {
            margin-bottom: 10px;
        }

        .intro {
            text-align: right;
            font-weight: bold;
            padding-right: 20px;
        }

        .progress-section {
            margin-top: 20px;
            background: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 15px;
        }

        .enfant-card {
            background: #fff;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .enfant-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .enfant-name {
            font-size: 1.2em;
            font-weight: bold;
            color: #2c3e50;
        }

        .activity-progress {
            margin-top: 10px;
        }

        .activity-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px;
            border-bottom: 1px solid #eee;
        }

        .activity-name {
            font-weight: bold;
            color: #34495e;
        }

        .activity-level {
            background: #e8f4f8;
            padding: 3px 8px;
            border-radius: 12px;
            font-size: 0.9em;
        }

        .activity-stats {
            display: flex;
            gap: 15px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-label {
            font-size: 0.8em;
            color: #7f8c8d;
        }

        .stat-value {
            font-weight: bold;
            color: #2c3e50;
        }

        .last-activity {
            font-size: 0.8em;
            color: #7f8c8d;
            margin-top: 5px;
        }

        .add-progress-form {
            margin-top: 15px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            margin-bottom: 3px;
            font-weight: bold;
            font-size: 0.9em;
        }

        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 6px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 0.9em;
        }

        .form-group textarea {
            height: 60px;
        }

        .btn-add {
            background-color: #4CAF50;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9em;
        }

        .btn-add:hover {
            background-color: #45a049;
        }

        .btn-home {
            margin-top: 15px;
        }

        .btn-home a button {
            padding: 8px 15px;
            font-size: 0.9em;
            background-color:rgb(14, 156, 10);
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .btn-home a button:hover {
            background-color:rgb(23, 113, 5);
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1>Bienvenue sur notre site éducatif 🌟</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="content">
            <p class="intro">Bonjour Madame/Monsieur <strong>{{ Auth::user()->nom_de_parent }}</strong> !</p>
            <p>Voici le suivi des activités de vos enfants 👧👦</p>
        </div>

        <div class="progress-section">
            @foreach($enfants as $enfant)
                <div class="enfant-card">
                    <div class="enfant-header">
                        <span class="enfant-name">{{ $enfant->nom_enfant }}</span>
                    </div>
                    
                    <div class="activity-progress">
                        @foreach($enfant->activities as $activity)
                            <div class="activity-item">
                                <div class="activity-info">
                                    <span class="activity-name">{{ $activity->type_activite }}</span>
                                    <span class="activity-level">Niveau {{ $activity->niveau }}</span>
                                </div>
                                <div class="activity-stats">
                                    <div class="stat-item">
                                        <div class="stat-label">Score</div>
                                        <div class="stat-value">{{ $activity->score }}/100</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-label">Exercices</div>
                                        <div class="stat-value">{{ $activity->exercices_completes }}</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-label">Temps</div>
                                        <div class="stat-value">{{ $activity->temps_passe }} min</div>
                                    </div>
                                </div>
                            </div>
                            <div class="last-activity">
                                Dernière activité : {{ $activity->derniere_activite->format('d/m/Y H:i') }}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <div class="btn-home">
            <a href="{{ url('/') }}" style="text-decoration: none;">
                <button>🏠 Retour à l'accueil</button>
            </a>
        </div>
    </div>

    <audio id="welcomeSound" src="{{ asset('sounds/welcome.mp3') }}" preload="auto"></audio>

    <script>
    window.addEventListener('load', function() {
        const welcomeSound = document.getElementById("welcomeSound");
        if (welcomeSound) {
            welcomeSound.play().catch(error => {
                console.log("Erreur lors de la lecture du son de bienvenue :", error);
            });
        }
    });
    </script>
</body>
</html>
