<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KidLearn - Apprentissage pour enfants</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background: url('/images/arplan3.png') center center/cover no-repeat fixed;
        }

        .container {
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #fff;
            font-size: 4.5em;
            margin-top: 0;
            margin-bottom: 30px;
            text-shadow:
                -2px -2px 0 #43a047,
                2px -2px 0 #43a047,
                -2px 2px 0 #43a047,
                2px 2px 0 #43a047,
                0 0 12px #43a047,
                0 2px 4px #0002;
        }

        .buttons {
            display: flex;
            gap: 30px;
            justify-content: center;
        }

        .button {
            padding: 20px 40px;
            font-size: 1.5em;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            text-decoration: none;
            color: white;
        }

        .primaire {
            background-color: #4CAF50;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.4);
        }

        .prescolaire {
            background-color: #2196F3;
            box-shadow: 0 4px 15px rgba(33, 150, 243, 0.4);
        }

        .button:hover {
            transform: scale(1.1);
        }

        .rainbow-text {
            background: linear-gradient(45deg, 
                #FF0000, #FF7F00, #FFFF00, #00FF00, 
                #0000FF, #4B0082, #8B00FF);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: rainbow 5s linear infinite;
        }

        @keyframes rainbow {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur KidLearn</h1>
        <div class="buttons">
            <a href="{{ route('primaire') }}" class="button primaire">Primaire</a>
            <a href="{{ route('prescolaire') }}" class="button prescolaire">Préscolaire</a>
        </div>
    </div>
</body>
</html> 