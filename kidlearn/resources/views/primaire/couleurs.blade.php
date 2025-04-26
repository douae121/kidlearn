<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Couleurs - Préscolaire</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background: url('{{ asset('images/arplan2.png') }}') center center/cover no-repeat fixed;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: rgba(255,255,255,0.7);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #43a047;
            font-size: 3em;
            font-family: 'Comic Sans MS', 'Baloo 2', 'Fredoka One', cursive, sans-serif;
            text-shadow: 2px 2px 8px #b2dfdb, 0 2px 4px #0002;
            letter-spacing: 2px;
        }
        .colors-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-top: 40px;
        }
        .color-item {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5em;
            font-weight: bold;
            color: #fff;
            box-shadow: 0 2px 12px rgba(0,0,0,0.18);
            position: relative;
            flex-direction: column;
            cursor: pointer;
            transition: transform 0.2s;
        }
        .jaune {
            background: #fbc02d;
            color: #333;
            border: 3px solid #bfa000;
        }
        .blanc {
            background: #fff;
            color: #333;
            border: 3px solid #bbb;
        }
        .gris {
            background: #bdbdbd;
            color: #333;
            border: 3px solid #888;
        }
        .marron { background: #8d5524; }
        .noir { background: #222; }
        .turquoise {
            background: #1de9b6;
            color: #333;
            border: 3px solid #009688;
        }
        .rouge { background: #e53935; }
        .bleu { background: #1e88e5; }
        .vert { background: #43a047; }
        .orange { background: #fb8c00; }
        .violet { background: #8e24aa; }
        .rose { background: #f06292; }
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
        .face-svg {
            position: absolute;
            top: 35px;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 70px;
            pointer-events: none;
        }
        .color-label {
            margin-top: 110px;
            font-size: 1.2em;
            font-weight: bold;
            text-shadow: 1px 1px 2px #0002;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const couleurs = ['rouge', 'bleu', 'vert', 'jaune', 'orange', 'violet', 'rose', 'marron', 'noir', 'blanc', 'gris', 'turquoise'];
            couleurs.forEach(function(couleur) {
                const el = document.querySelector('.color-item.' + couleur);
                if (el) {
                    el.addEventListener('click', function() {
                        // Animation
                        el.style.transform = 'scale(1.2)';
                        setTimeout(() => { el.style.transform = 'scale(1)'; }, 200);
                        // Audio
                        const audio = new Audio('/sons/' + couleur + '.mp3');
                        audio.play();
                    });
                }
            });
        });
    </script>
</head>
<body>
    <a href="{{ route('primaire') }}" class="retour">← Retour</a>
    <div class="container">
        <h1>Découvrons les couleurs !</h1>
        <div class="colors-list">
            <div class="color-item rouge">
                <svg class="face-svg" viewBox="0 0 70 70">
                    <circle cx="35" cy="35" r="34" fill="none"/>
                    <ellipse cx="25" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="45" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="25" cy="34" rx="2" ry="3" fill="#222"/>
                    <ellipse cx="45" cy="34" rx="2" ry="3" fill="#222"/>
                    <path d="M25 48 Q35 58 45 48" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                <span class="color-label">Rouge</span>
            </div>
            <div class="color-item bleu">
                <svg class="face-svg" viewBox="0 0 70 70">
                    <circle cx="35" cy="35" r="34" fill="none"/>
                    <ellipse cx="25" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="45" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="25" cy="34" rx="2" ry="3" fill="#222"/>
                    <ellipse cx="45" cy="34" rx="2" ry="3" fill="#222"/>
                    <path d="M25 48 Q35 58 45 48" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                <span class="color-label">Bleu</span>
            </div>
            <div class="color-item vert">
                <svg class="face-svg" viewBox="0 0 70 70">
                    <circle cx="35" cy="35" r="34" fill="none"/>
                    <ellipse cx="25" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="45" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="25" cy="34" rx="2" ry="3" fill="#222"/>
                    <ellipse cx="45" cy="34" rx="2" ry="3" fill="#222"/>
                    <path d="M25 48 Q35 58 45 48" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                <span class="color-label">Vert</span>
            </div>
            <div class="color-item jaune">
                <svg class="face-svg" viewBox="0 0 70 70">
                    <circle cx="35" cy="35" r="34" fill="none" stroke="#bfa000" stroke-width="3"/>
                    <ellipse cx="25" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="45" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="25" cy="34" rx="2" ry="3" fill="#222"/>
                    <ellipse cx="45" cy="34" rx="2" ry="3" fill="#222"/>
                    <path d="M25 48 Q35 58 45 48" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                <span class="color-label">Jaune</span>
            </div>
            <div class="color-item orange">
                <svg class="face-svg" viewBox="0 0 70 70">
                    <circle cx="35" cy="35" r="34" fill="none"/>
                    <ellipse cx="25" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="45" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="25" cy="34" rx="2" ry="3" fill="#222"/>
                    <ellipse cx="45" cy="34" rx="2" ry="3" fill="#222"/>
                    <path d="M25 48 Q35 58 45 48" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                <span class="color-label">Orange</span>
            </div>
            <div class="color-item violet">
                <svg class="face-svg" viewBox="0 0 70 70">
                    <circle cx="35" cy="35" r="34" fill="none"/>
                    <ellipse cx="25" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="45" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="25" cy="34" rx="2" ry="3" fill="#222"/>
                    <ellipse cx="45" cy="34" rx="2" ry="3" fill="#222"/>
                    <path d="M25 48 Q35 58 45 48" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                <span class="color-label">Violet</span>
            </div>
            <div class="color-item rose">
                <svg class="face-svg" viewBox="0 0 70 70">
                    <circle cx="35" cy="35" r="34" fill="none"/>
                    <ellipse cx="25" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="45" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="25" cy="34" rx="2" ry="3" fill="#222"/>
                    <ellipse cx="45" cy="34" rx="2" ry="3" fill="#222"/>
                    <path d="M25 48 Q35 58 45 48" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                <span class="color-label">Rose</span>
            </div>
            <div class="color-item marron">
                <svg class="face-svg" viewBox="0 0 70 70">
                    <circle cx="35" cy="35" r="34" fill="none"/>
                    <ellipse cx="25" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="45" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="25" cy="34" rx="2" ry="3" fill="#222"/>
                    <ellipse cx="45" cy="34" rx="2" ry="3" fill="#222"/>
                    <path d="M25 48 Q35 58 45 48" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                <span class="color-label">Marron</span>
            </div>
            <div class="color-item noir">
                <svg class="face-svg" viewBox="0 0 70 70">
                    <circle cx="35" cy="35" r="34" fill="none"/>
                    <ellipse cx="25" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="45" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="25" cy="34" rx="2" ry="3" fill="#222"/>
                    <ellipse cx="45" cy="34" rx="2" ry="3" fill="#222"/>
                    <path d="M25 48 Q35 58 45 48" stroke="#fff" stroke-width="3" fill="none"/>
                </svg>
                <span class="color-label">Noir</span>
            </div>
            <div class="color-item blanc">
                <svg class="face-svg" viewBox="0 0 70 70">
                    <circle cx="35" cy="35" r="34" fill="none" stroke="#bbb" stroke-width="3"/>
                    <ellipse cx="25" cy="32" rx="6" ry="8" fill="#222"/>
                    <ellipse cx="45" cy="32" rx="6" ry="8" fill="#222"/>
                    <ellipse cx="25" cy="34" rx="2" ry="3" fill="#fff"/>
                    <ellipse cx="45" cy="34" rx="2" ry="3" fill="#fff"/>
                    <path d="M25 48 Q35 58 45 48" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                <span class="color-label">Blanc</span>
            </div>
            <div class="color-item gris">
                <svg class="face-svg" viewBox="0 0 70 70">
                    <circle cx="35" cy="35" r="34" fill="none" stroke="#888" stroke-width="3"/>
                    <ellipse cx="25" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="45" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="25" cy="34" rx="2" ry="3" fill="#222"/>
                    <ellipse cx="45" cy="34" rx="2" ry="3" fill="#222"/>
                    <path d="M25 48 Q35 58 45 48" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                <span class="color-label">Gris</span>
            </div>
            <div class="color-item turquoise">
                <svg class="face-svg" viewBox="0 0 70 70">
                    <circle cx="35" cy="35" r="34" fill="none" stroke="#009688" stroke-width="3"/>
                    <ellipse cx="25" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="45" cy="32" rx="6" ry="8" fill="#fff"/>
                    <ellipse cx="25" cy="34" rx="2" ry="3" fill="#222"/>
                    <ellipse cx="45" cy="34" rx="2" ry="3" fill="#222"/>
                    <path d="M25 48 Q35 58 45 48" stroke="#222" stroke-width="3" fill="none"/>
                </svg>
                <span class="color-label">Turquoise</span>
            </div>
        </div>
    </div>
</body>
</html> 