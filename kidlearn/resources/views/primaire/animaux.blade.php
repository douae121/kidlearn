<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animaux - Primaire</title>
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
            color: #43a047;
            font-size: 2.2em;
        }
        .animals-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }
        .animal-item {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1em;
            font-weight: bold;
            color: #fff;
            background: #8bc34a;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            flex-direction: column;
        }
        .animal-item img {
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
        <h1>Découvrons les animaux !</h1>
        <div class="animals-list">
            <div class="animal-item"><img src="{{ asset('images/animaux/lion.png') }}" alt="Lion">Lion</div>
            <div class="animal-item"><img src="{{ asset('images/animaux/elephant.png') }}" alt="Éléphant">Éléphant</div>
            <div class="animal-item"><img src="{{ asset('images/animaux/oiseau.png') }}" alt="Oiseau">Oiseau</div>
            <div class="animal-item"><img src="{{ asset('images/animaux/chien.png') }}" alt="Chien">Chien</div>
            <div class="animal-item"><img src="{{ asset('images/animaux/chat.png') }}" alt="Chat">Chat</div>
            <div class="animal-item"><img src="{{ asset('images/animaux/vache.png') }}" alt="Vache">Vache</div>
        </div>
    </div>
</body>
</html> 