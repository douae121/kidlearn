<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiffres - Primaire</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background: url('/images/arplan2.png') no-repeat center center fixed;
            background-size: cover;
            position: relative;
            overflow-x: hidden;
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 20%),
                radial-gradient(circle at 90% 80%, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 20%),
                radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0) 30%);
            z-index: 0;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: rgba(255,255,255,0.8);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            position: relative;
            z-index: 1;
        }
        h1 {
            text-align: center;
            color: #43a047;
            font-size: 2.5em;
        }
        .cloud-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
        }
        .cloud-svg {
            width: 700px;
            height: 350px;
            display: block;
        }
        .cloud-numbers {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -55%);
            width: 700px;
            height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            pointer-events: none;
        }
        .cloud-row {
            display: flex;
            justify-content: center;
            gap: 50px;
            margin-bottom: 30px;
        }
        .cloud-number {
            font-size: 3.5em;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            color: #0d47a1;
            font-weight: bold;
            text-shadow: 0 2px 8px #fff8;
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
        <h1>Découvrons les chiffres !</h1>
        <div class="numbers-list">
            @php
                $formes = [
                    1 => 'etoile',
                    2 => 'coeur',
                    3 => 'nuage',
                    4 => 'losange',
                    5 => 'goutte',
                    6 => 'fleur',
                    7 => 'lune',
                    8 => 'carre',
                    9 => 'triangle',
                    10 => 'hexagone',
                ];
                // On complète les formes jusqu'à 30 en répétant le tableau
                for ($k = 11; $k <= 30; $k++) {
                    $formes[$k] = $formes[($k-1)%10+1];
                }
            @endphp
            @for($i = 1; $i <= 30; $i += 4)
                <div class="numbers-row" style="display: flex; justify-content: center; gap: 60px; margin-bottom: 60px;">
                    @for($j = $i; $j < $i + 4 && $j <= 30; $j++)
                        <div class="number-item" style="font-size: 5em; color: #0d47a1; font-weight: bold; border-radius: 20px; width: 120px; height: 120px; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px #0001; background: none; margin: 0 15px;">
                            {{ $j }}
                        </div>
                    @endfor
                </div>
            @endfor
        </div>
    </div>
</body>
</html> 