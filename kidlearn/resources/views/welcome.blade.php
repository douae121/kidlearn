<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KidLearn - Bienvenue</title>
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
            background: linear-gradient(135deg, #FF69B4, #87CEEB);
            overflow: hidden;
        }

        .container {
            text-align: center;
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        h1 {
            color: #333;
            font-size: 4em;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            animation: bounce 2s infinite;
        }

        .welcome-text {
            font-size: 1.5em;
            color: #444;
            margin-bottom: 40px;
            animation: fadeIn 2s;
        }

        .start-button {
            padding: 20px 40px;
            font-size: 1.8em;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            background: linear-gradient(45deg, #FFD700, #FFA500);
            color: white;
            text-decoration: none;
            transition: transform 0.3s, box-shadow 0.3s;
            animation: pulse 2s infinite;
        }

        .start-button:hover {
            transform: scale(1.1);
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.6);
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: float 15s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-100px) rotate(180deg); }
            100% { transform: translateY(0) rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="floating-shapes">
        <div class="shape" style="width: 50px; height: 50px; left: 10%; top: 20%;"></div>
        <div class="shape" style="width: 30px; height: 30px; left: 20%; top: 60%;"></div>
        <div class="shape" style="width: 40px; height: 40px; left: 80%; top: 30%;"></div>
        <div class="shape" style="width: 25px; height: 25px; left: 70%; top: 70%;"></div>
    </div>
    <div class="container">
        <h1>🌟 KidLearn 🌟</h1>
        <p class="welcome-text">Découvre le monde merveilleux de l'apprentissage !</p>
        <a href="{{ route('acceuil') }}" class="start-button">Commencer l'aventure</a>
    </div>
</body>
</html>
