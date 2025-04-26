<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formes - Primaire</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background: url('/images/arplan3.png') center center/cover no-repeat fixed;
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
            font-size: 3em;
            margin-top: 0;
            margin-bottom: 30px;
            text-shadow:
                -2px -2px 0 #fff,
                2px -2px 0 #fff,
                -2px 2px 0 #fff,
                2px 2px 0 #fff,
                0 0 12px #fff,
                0 2px 4px #0002;
        }
        .shapes-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }
        .shape-item {
            width: 180px;
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3em;
            font-weight: bold;
            color: #333;
            background: transparent;
            box-shadow: none;
            flex-direction: column;
        }
        .shape-item svg {
            width: 120px;
            height: 120px;
            margin-bottom: 12px;
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
        <h1>Découvrons les formes !</h1>
        <div class="shapes-list">
            <div class="shape-item">
                <svg viewBox="0 0 60 60">
                    <circle cx="30" cy="30" r="28" fill="#ffe082" stroke="#ffb300" stroke-width="3"/>
                    <!-- Visage mignon -->
                    <ellipse cx="22" cy="28" rx="3" ry="4" fill="#fff"/>
                    <ellipse cx="38" cy="28" rx="3" ry="4" fill="#fff"/>
                    <ellipse cx="22" cy="30" rx="1" ry="2" fill="#222"/>
                    <ellipse cx="38" cy="30" rx="1" ry="2" fill="#222"/>
                    <path d="M25 40 Q30 45 35 40" stroke="#222" stroke-width="2" fill="none"/>
                </svg>
                Cercle
            </div>
            <div class="shape-item">
                <svg viewBox="0 0 60 60">
                    <rect x="8" y="8" width="44" height="44" rx="10" fill="#b2dfdb" stroke="#43a047" stroke-width="3"/>
                    <!-- Visage mignon -->
                    <ellipse cx="22" cy="28" rx="3" ry="4" fill="#fff"/>
                    <ellipse cx="38" cy="28" rx="3" ry="4" fill="#fff"/>
                    <ellipse cx="22" cy="30" rx="1" ry="2" fill="#222"/>
                    <ellipse cx="38" cy="30" rx="1" ry="2" fill="#222"/>
                    <path d="M25 40 Q30 45 35 40" stroke="#222" stroke-width="2" fill="none"/>
                </svg>
                Carré
            </div>
            <div class="shape-item">
                <svg viewBox="0 0 60 60">
                    <rect x="12" y="20" width="36" height="20" rx="8" fill="#fff7ae" stroke="#e0a800" stroke-width="3"/>
                    <!-- Visage mignon -->
                    <ellipse cx="22" cy="32" rx="3" ry="4" fill="#fff"/>
                    <ellipse cx="38" cy="32" rx="3" ry="4" fill="#fff"/>
                    <ellipse cx="22" cy="34" rx="1" ry="2" fill="#222"/>
                    <ellipse cx="38" cy="34" rx="1" ry="2" fill="#222"/>
                    <path d="M25 44 Q30 49 35 44" stroke="#222" stroke-width="2" fill="none"/>
                </svg>
                Rectangle
            </div>
            <div class="shape-item">
                <svg viewBox="0 0 60 60">
                    <polygon points="30,8 52,52 8,52" fill="#f8bbd0" stroke="#c2185b" stroke-width="3"/>
                    <!-- Visage mignon -->
                    <ellipse cx="30" cy="35" rx="3" ry="4" fill="#fff"/>
                    <ellipse cx="25" cy="38" rx="1" ry="2" fill="#222"/>
                    <ellipse cx="35" cy="38" rx="1" ry="2" fill="#222"/>
                    <path d="M28 44 Q30 47 32 44" stroke="#222" stroke-width="2" fill="none"/>
                </svg>
                Triangle
            </div>
            <div class="shape-item">
                <svg viewBox="0 0 60 60">
                    <ellipse cx="30" cy="30" rx="24" ry="16" fill="#b3e5fc" stroke="#0288d1" stroke-width="3"/>
                    <!-- Visage mignon -->
                    <ellipse cx="22" cy="30" rx="3" ry="4" fill="#fff"/>
                    <ellipse cx="38" cy="30" rx="3" ry="4" fill="#fff"/>
                    <ellipse cx="22" cy="32" rx="1" ry="2" fill="#222"/>
                    <ellipse cx="38" cy="32" rx="1" ry="2" fill="#222"/>
                    <path d="M25 40 Q30 45 35 40" stroke="#222" stroke-width="2" fill="none"/>
                </svg>
                Ovale
            </div>
            <div class="shape-item">
                <svg viewBox="0 0 60 60">
                    <polygon points="30,8 38,24 56,24 42,36 48,52 30,42 12,52 18,36 4,24 22,24" fill="#fff" stroke="#ffb300" stroke-width="3"/>
                    <!-- Visage mignon -->
                    <ellipse cx="30" cy="30" rx="3" ry="4" fill="#fff"/>
                    <ellipse cx="25" cy="33" rx="1" ry="2" fill="#222"/>
                    <ellipse cx="35" cy="33" rx="1" ry="2" fill="#222"/>
                    <path d="M28 39 Q30 42 32 39" stroke="#222" stroke-width="2" fill="none"/>
                </svg>
                Étoile
            </div>
            <div class="shape-item">
                <svg viewBox="0 0 120 120">
                    <!-- Cœur très arrondi, rose pastel -->
                    <path d="M60 105 Q30 80 30 55 Q30 35 50 35 Q60 35 60 50 Q60 35 70 35 Q90 35 90 55 Q90 80 60 105" fill="#ffb6c1" stroke="#e57399" stroke-width="4"/>
                    <!-- Yeux grands -->
                    <ellipse cx="50" cy="70" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="70" cy="70" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="50" cy="73" rx="2.5" ry="3.5" fill="#222"/>
                    <ellipse cx="70" cy="73" rx="2.5" ry="3.5" fill="#222"/>
                    <!-- Sourire large -->
                    <path d="M54 85 Q60 95 66 85" stroke="#d84315" stroke-width="3" fill="none"/>
                    <!-- Pommettes -->
                    <ellipse cx="45" cy="78" rx="2.5" ry="1.5" fill="#f8bbd0"/>
                    <ellipse cx="75" cy="78" rx="2.5" ry="1.5" fill="#f8bbd0"/>
                </svg>
                Cœur
            </div>
            <div class="shape-item">
                <svg viewBox="0 0 120 120">
                    <polygon points="60,20 100,60 60,100 20,60" fill="#ffd54f" stroke="#ffb300" stroke-width="4"/>
                    <ellipse cx="50" cy="60" rx="7" ry="10" fill="#fff"/>
                    <ellipse cx="70" cy="60" rx="7" ry="10" fill="#fff"/>
                    <ellipse cx="50" cy="63" rx="2" ry="4" fill="#222"/>
                    <ellipse cx="70" cy="63" rx="2" ry="4" fill="#222"/>
                    <path d="M55 80 Q60 85 65 80" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                Losange
            </div>
            <div class="shape-item">
                <svg viewBox="0 0 120 120">
                    <polygon points="60,20 100,55 85,100 35,100 20,55" fill="#b39ddb" stroke="#512da8" stroke-width="4"/>
                    <ellipse cx="50" cy="70" rx="7" ry="10" fill="#fff"/>
                    <ellipse cx="70" cy="70" rx="7" ry="10" fill="#fff"/>
                    <ellipse cx="50" cy="73" rx="2" ry="4" fill="#222"/>
                    <ellipse cx="70" cy="73" rx="2" ry="4" fill="#222"/>
                    <path d="M55 90 Q60 95 65 90" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                Pentagone
            </div>
            <div class="shape-item">
                <svg viewBox="0 0 120 120">
                    <polygon points="60,20 100,45 100,95 60,120 20,95 20,45" fill="#4fc3f7" stroke="#0288d1" stroke-width="4"/>
                    <ellipse cx="50" cy="80" rx="7" ry="10" fill="#fff"/>
                    <ellipse cx="70" cy="80" rx="7" ry="10" fill="#fff"/>
                    <ellipse cx="50" cy="83" rx="2" ry="4" fill="#222"/>
                    <ellipse cx="70" cy="83" rx="2" ry="4" fill="#222"/>
                    <path d="M55 100 Q60 105 65 100" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                Hexagone
            </div>
            <div class="shape-item">
                <svg viewBox="0 0 120 120">
                    <path d="M80 30 Q110 60 80 90 Q50 120 40 80 Q30 40 80 30" fill="#fff59d" stroke="#fbc02d" stroke-width="4"/>
                    <ellipse cx="70" cy="70" rx="7" ry="10" fill="#fff"/>
                    <ellipse cx="90" cy="70" rx="7" ry="10" fill="#fff"/>
                    <ellipse cx="70" cy="73" rx="2" ry="4" fill="#222"/>
                    <ellipse cx="90" cy="73" rx="2" ry="4" fill="#222"/>
                    <path d="M75 90 Q80 95 85 90" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                Lune
            </div>
            <div class="shape-item">
                <svg viewBox="0 0 120 120">
                    <ellipse cx="60" cy="70" rx="40" ry="25" fill="#b2ebf2" stroke="#0097a7" stroke-width="4"/>
                    <ellipse cx="45" cy="70" rx="7" ry="10" fill="#fff"/>
                    <ellipse cx="75" cy="70" rx="7" ry="10" fill="#fff"/>
                    <ellipse cx="45" cy="73" rx="2" ry="4" fill="#222"/>
                    <ellipse cx="75" cy="73" rx="2" ry="4" fill="#222"/>
                    <path d="M55 90 Q60 95 65 90" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                Nuage
            </div>
            <div class="shape-item">
                <svg viewBox="0 0 120 120">
                    <path d="M60 20 Q80 60 60 100 Q40 60 60 20" fill="#80cbc4" stroke="#00695c" stroke-width="4"/>
                    <ellipse cx="60" cy="70" rx="7" ry="10" fill="#fff"/>
                    <ellipse cx="60" cy="80" rx="2" ry="4" fill="#222"/>
                    <path d="M55 90 Q60 95 65 90" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                Goutte
            </div>
            <div class="shape-item">
                <svg viewBox="0 0 120 120">
                    <polygon points="20,60 100,60 70,90 70,70 50,70 50,90" fill="#ffccbc" stroke="#d84315" stroke-width="4"/>
                    <ellipse cx="60" cy="80" rx="7" ry="10" fill="#fff"/>
                    <ellipse cx="60" cy="90" rx="2" ry="4" fill="#222"/>
                    <path d="M55 100 Q60 105 65 100" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                Flèche
            </div>
        </div>
    </div>
</body>
</html> 