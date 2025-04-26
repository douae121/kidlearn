<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moyens de Transport - Primaire</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background: url('{{ asset('images/primaire-bg.jpg') }}') center center/cover no-repeat fixed;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: rgba(255,255,255,0.8);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #1976d2;
            font-size: 2.2em;
        }
        .transports-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }
        .transport-item {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1em;
            font-weight: bold;
            color: #fff;
            background: #64b5f6;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            flex-direction: column;
        }
        .transport-item img {
            width: 60px;
            height: 60px;
            margin-bottom: 8px;
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
        }
        .retour:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <a href="{{ route('primaire') }}" class="retour">← Retour</a>
    <div class="container">
        <h1>Découvrons les moyens de transport !</h1>
        <div class="transports-list">
            <div class="transport-item"><img src="{{ asset('images/transport/voiture.png') }}" alt="Voiture">Voiture</div>
            <div class="transport-item"><img src="{{ asset('images/transport/bus.png') }}" alt="Bus">Bus</div>
            <div class="transport-item"><img src="{{ asset('images/transport/train.png') }}" alt="Train">Train</div>
            <div class="transport-item"><img src="{{ asset('images/transport/avion.png') }}" alt="Avion">Avion</div>
            <div class="transport-item"><img src="{{ asset('images/transport/bateau.png') }}" alt="Bateau">Bateau</div>
            <div class="transport-item"><img src="{{ asset('images/transport/velo.png') }}" alt="Vélo">Vélo</div>
        </div>
    </div>
</body>
</html> 