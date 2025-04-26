<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préscolaire - KidLearn</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background: url('/images/arplan3.png') center center/cover no-repeat fixed;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #fff;
            font-size: 4em;
            margin-bottom: 40px;
            font-family: 'Comic Sans MS', 'Baloo 2', 'Fredoka One', cursive, sans-serif;
            letter-spacing: 2px;
            text-shadow:
                -2px -2px 0 #43a047,
                2px -2px 0 #43a047,
                -2px 2px 0 #43a047,
                2px 2px 0 #43a047,
                0 0 12px #43a047,
                0 2px 4px #0002;
        }

        .categories {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 40px;
            padding: 40px 0;
        }

        .category {
            background: white;
            border-radius: 20px;
            padding: 30px 20px 20px 20px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
            width: 220px;
            min-height: 260px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        .category:hover {
            transform: translateY(-10px);
        }

        .category svg {
            width: 90px;
            height: 90px;
            margin-bottom: 18px;
            display: block;
        }

        .category h2 {
            color: #2196F3;
            margin: 10px 0;
            font-size: 1.5em;
        }

        .category p {
            color: #666;
            margin: 0;
            font-size: 1.1em;
        }

        .couleurs { background-color: #ffebee; }
        .animaux { background-color: #e8f5e9; }
        .transport { background-color: #e3f2fd; }

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
    <a href="{{ route('acceuil') }}" class="retour">← Retour</a>
    
    <div class="container">
        <h1>Espace Préscolaire</h1>
        
        <div class="categories">
            <a href="{{ route('prescolaire.animaux') }}" class="category animaux">
                <svg viewBox="0 0 90 90">
                    <ellipse cx="45" cy="55" rx="25" ry="20" fill="#ffe0b2"/>
                    <ellipse cx="25" cy="38" rx="7" ry="10" fill="#ffe0b2"/>
                    <ellipse cx="65" cy="38" rx="7" ry="10" fill="#ffe0b2"/>
                    <ellipse cx="35" cy="62" rx="3" ry="2" fill="#ffb6b6"/>
                    <ellipse cx="55" cy="62" rx="3" ry="2" fill="#ffb6b6"/>
                    <ellipse cx="38" cy="55" rx="2" ry="3" fill="#222"/>
                    <ellipse cx="52" cy="55" rx="2" ry="3" fill="#222"/>
                </svg>
                <h2>Animaux</h2>
                <p>Découvrir les animaux et leurs cris</p>
            </a>

            <a href="{{ route('prescolaire.transport') }}" class="category transport">
                <svg viewBox="0 0 90 90">
                    <rect x="20" y="50" width="50" height="18" rx="8" fill="#aee1f9"/>
                    <rect x="32" y="54" width="26" height="10" rx="4" fill="#fff"/>
                    <circle cx="32" cy="72" r="6" fill="#ffd1dc"/>
                    <circle cx="58" cy="72" r="6" fill="#ffd1dc"/>
                </svg>
                <h2>Moyens de transport</h2>
                <p>Explorer les différents véhicules</p>
            </a>

            <a href="{{ route('prescolaire.couleurs') }}" class="category couleurs">
                <svg viewBox="0 0 90 90">
                    <circle cx="45" cy="45" r="38" fill="#ffd1dc"/>
                    <circle cx="32" cy="38" r="12" fill="#aee1f9"/>
                    <circle cx="60" cy="60" r="10" fill="#b6e2a1"/>
                    <circle cx="60" cy="30" r="8" fill="#fff7ae"/>
                </svg>
                <h2>Couleurs</h2>
                <p>Apprendre les couleurs en s'amusant</p>
            </a>
        </div>
    </div>
</body>
</html> 