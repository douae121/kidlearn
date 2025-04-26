<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alphabets - Préscolaire</title>
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
            margin-bottom: 40px;
        }
        .alphabets-list {
            display: flex;
            flex-direction: column;
            gap: 60px;
            margin-top: 30px;
        }
        .alphabet-row {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 38px;
            justify-items: center;
        }
        .phrases-row {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 38px;
            justify-items: center;
            margin-bottom: 10px;
        }
        .alphabet-item {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background: linear-gradient(135deg, #aee1f9 60%, #fff7ae 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 3em;
            font-weight: bold;
            color: #43a047;
            box-shadow: 0 2px 8px rgba(0,0,0,0.12);
            position: relative;
            cursor: pointer;
            transition: transform 0.2s;
            overflow: visible;
        }
        .alphabet-item:hover {
            transform: scale(1.12);
        }
        .alphabet-item.jumping {
            animation: jump 0.5s cubic-bezier(.5,1.8,.5,1) 1;
        }
        @keyframes jump {
            0% { transform: scale(1) translateY(0); }
            30% { transform: scale(1.1,0.9) translateY(-30px); }
            50% { transform: scale(1.05,0.95) translateY(-40px); }
            70% { transform: scale(0.95,1.05) translateY(-10px); }
            100% { transform: scale(1) translateY(0); }
        }
        .alphabet-letter {
            z-index: 2;
            margin-top: 30px;
        }
        .arms-svg {
            position: absolute;
            bottom: 18px;
            left: 0;
            width: 140px;
            height: 60px;
            pointer-events: none;
            z-index: 1;
        }
        .arm-left, .arm-right {
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .arm-left {
            transform-origin: 30px 20px;
        }
        .arm-right {
            transform-origin: 110px 20px;
        }
        .alphabet-item.wave .arm-right {
            transform: rotate(-60deg);
        }
        .face-svg {
            position: absolute;
            top: 18px;
            left: 50%;
            transform: translateX(-50%);
            width: 48px;
            height: 32px;
            pointer-events: none;
            z-index: 3;
        }
        .cheek {
            fill: #ffb6b6;
        }
        .leg-svg {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 30px;
            z-index: 0;
        }
        .eye-shine {
            animation: blink 3s infinite;
        }
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
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
        .phrase-lettre {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 1.2em;
            max-width: 140px;
            text-align: center;
            flex-wrap: wrap;
            color: #333;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            min-height: 36px;
            opacity: 1;
            transition: none;
            will-change: transform;
        }
        .phrase-lettre.jumping {
            animation: jump 0.5s cubic-bezier(.5,1.8,.5,1) 1;
        }
        .phrase-lettre.hovered {
            transform: scale(1.12);
            transition: transform 0.2s;
        }
        .svg-icone-lettre {
            width: 26px;
            height: 26px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <a href="{{ route('primaire') }}" class="retour">← Retour</a>
    <div class="container">
        <h1>Découvrons les alphabets !</h1>
        <div class="alphabets-list">
            @php
            $svgIcones = [
                'A' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><ellipse cx="16" cy="20" rx="10" ry="8" fill="#ffe066"/><ellipse cx="16" cy="13" rx="7" ry="6" fill="#ffe066"/><ellipse cx="16" cy="13" rx="7" ry="6" fill="#ffe066" stroke="#e0a800" stroke-width="2"/><rect x="14" y="6" width="4" height="6" rx="2" fill="#8bc34a"/></svg>',
                'B' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><ellipse cx="16" cy="20" rx="8" ry="5" fill="#ffe066"/><ellipse cx="16" cy="13" rx="7" ry="6" fill="#ffe066"/><ellipse cx="16" cy="13" rx="7" ry="6" fill="#ffe066" stroke="#e0a800" stroke-width="2"/><rect x="14" y="6" width="4" height="6" rx="2" fill="#ffe066"/></svg>',
                'C' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><ellipse cx="16" cy="16" rx="10" ry="8" fill="#b2dfdb"/><ellipse cx="13" cy="16" rx="7" ry="6" fill="#fff"/><ellipse cx="13" cy="16" rx="7" ry="6" fill="none" stroke="#43a047" stroke-width="2"/></svg>',
                'D' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><ellipse cx="20" cy="18" rx="8" ry="6" fill="#90caf9"/><ellipse cx="14" cy="18" rx="4" ry="6" fill="#fff"/><ellipse cx="20" cy="18" rx="8" ry="6" fill="none" stroke="#1976d2" stroke-width="2"/></svg>',
                'E' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><ellipse cx="16" cy="18" rx="10" ry="8" fill="#e0e0e0"/><ellipse cx="16" cy="13" rx="7" ry="6" fill="#fff"/><ellipse cx="16" cy="13" rx="7" ry="6" fill="none" stroke="#757575" stroke-width="2"/><rect x="12" y="6" width="8" height="4" rx="2" fill="#90caf9"/></svg>',
                'F' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><ellipse cx="16" cy="20" rx="10" ry="8" fill="#f8bbd0"/><ellipse cx="16" cy="13" rx="7" ry="6" fill="#fff"/><ellipse cx="16" cy="13" rx="7" ry="6" fill="none" stroke="#c2185b" stroke-width="2"/></svg>',
                'G' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><ellipse cx="16" cy="20" rx="10" ry="8" fill="#ffe082"/><ellipse cx="16" cy="13" rx="7" ry="6" fill="#fffde7"/><ellipse cx="16" cy="13" rx="7" ry="6" fill="none" stroke="#ffb300" stroke-width="2"/></svg>',
                'H' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><ellipse cx="16" cy="20" rx="10" ry="8" fill="#a5d6a7"/><ellipse cx="16" cy="13" rx="7" ry="6" fill="#fff"/><ellipse cx="16" cy="13" rx="7" ry="6" fill="none" stroke="#388e3c" stroke-width="2"/></svg>',
                'I' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><rect x="10" y="10" width="12" height="12" rx="4" fill="#b3e5fc" stroke="#0288d1" stroke-width="2"/><rect x="14" y="6" width="4" height="4" rx="2" fill="#fff"/></svg>',
                'J' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><path d="M22 10 Q24 24 16 26 Q8 24 10 10" fill="#fff9c4" stroke="#fbc02d" stroke-width="2"/></svg>',
                'K' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><rect x="12" y="8" width="8" height="16" rx="4" fill="#ffe082" stroke="#ffb300" stroke-width="2"/><path d="M20 16 L28 24" stroke="#ffb300" stroke-width="2"/></svg>',
                'L' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><ellipse cx="16" cy="20" rx="10" ry="8" fill="#ffe082"/><rect x="14" y="6" width="4" height="8" rx="2" fill="#fffde7"/></svg>',
                'M' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><ellipse cx="12" cy="20" rx="4" ry="8" fill="#b2dfdb"/><ellipse cx="20" cy="20" rx="4" ry="8" fill="#b2dfdb"/><ellipse cx="16" cy="20" rx="4" ry="8" fill="#fff"/></svg>',
                'N' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><ellipse cx="16" cy="20" rx="10" ry="8" fill="#b3e5fc"/><rect x="14" y="6" width="4" height="8" rx="2" fill="#fff"/></svg>',
                'O' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><ellipse cx="16" cy="16" rx="10" ry="10" fill="#fffde7" stroke="#ffb300" stroke-width="2"/></svg>',
                'P' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><ellipse cx="16" cy="20" rx="10" ry="8" fill="#f8bbd0"/><ellipse cx="16" cy="13" rx="7" ry="6" fill="#fff"/><ellipse cx="16" cy="13" rx="7" ry="6" fill="none" stroke="#c2185b" stroke-width="2"/></svg>',
                'Q' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><ellipse cx="16" cy="16" rx="10" ry="10" fill="#fffde7" stroke="#ffb300" stroke-width="2"/><rect x="22" y="22" width="4" height="4" rx="2" fill="#ffb300"/></svg>',
                'R' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><ellipse cx="16" cy="20" rx="10" ry="8" fill="#a5d6a7"/><ellipse cx="16" cy="13" rx="7" ry="6" fill="#fff"/><ellipse cx="16" cy="13" rx="7" ry="6" fill="none" stroke="#388e3c" stroke-width="2"/></svg>',
                'S' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><path d="M8 16 Q16 8 24 16 Q16 24 8 16" fill="#fff9c4" stroke="#fbc02d" stroke-width="2"/></svg>',
                'T' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><rect x="10" y="10" width="12" height="12" rx="4" fill="#b3e5fc" stroke="#0288d1" stroke-width="2"/></svg>',
                'U' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><path d="M10 10 Q16 28 22 10" fill="#fffde7" stroke="#ffb300" stroke-width="2"/></svg>',
                'V' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><path d="M8 10 L16 28 L24 10" fill="#b2dfdb" stroke="#43a047" stroke-width="2"/></svg>',
                'W' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><path d="M6 10 L12 28 L16 18 L20 28 L26 10" fill="#ffe082" stroke="#ffb300" stroke-width="2"/></svg>',
                'X' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><path d="M8 8 L24 24 M24 8 L8 24" stroke="#c2185b" stroke-width="3"/></svg>',
                'Y' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><path d="M8 8 L16 16 L24 8 M16 16 L16 24" stroke="#388e3c" stroke-width="3"/></svg>',
                'Z' => '<svg class="svg-icone-lettre" viewBox="0 0 32 32"><path d="M8 8 L24 8 L8 24 L24 24" stroke="#0288d1" stroke-width="3"/></svg>',
            ];
            $phrases = [
                'A' => 'A comme Ananas 🍍',
                'B' => 'B comme Banane 🍌',
                'C' => 'C comme Chat 🐱',
                'D' => 'D comme Dauphin 🐬',
                'E' => 'E comme Éléphant 🐘',
                'F' => 'F comme Fleur 🌸',
                'G' => 'G comme Gâteau 🎂',
                'H' => 'H comme Hérisson 🦔',
                'I' => 'I comme Igloo 🧊',
                'J' => 'J comme Jouet 🧸',
                'K' => 'K comme Koala 🐨',
                'L' => 'L comme Lion 🦁',
                'M' => 'M comme Mouton 🐑',
                'N' => 'N comme Nuage ☁️',
                'O' => 'O comme Orange 🍊',
                'P' => 'P comme Papillon 🦋',
                'Q' => 'Q comme Quatre 4️⃣',
                'R' => 'R comme Renard 🦊',
                'S' => 'S comme Soleil ☀️',
                'T' => 'T comme Tigre 🐯',
                'U' => 'U comme Uniforme 👕',
                'V' => 'V comme Voiture 🚗',
                'W' => 'W comme Wagon 🚃',
                'X' => 'X comme Xylophone 🎶',
                'Y' => 'Y comme Yaourt 🥣',
                'Z' => 'Z comme Zèbre 🦓',
            ];
            $alphabet = range('A', 'Z');
            @endphp
            <div class="alphabets-list">
                @for($i = 0; $i < count($alphabet); $i += 4)
                    <div class="alphabet-row">
                        @for($j = $i; $j < $i + 4 && $j < count($alphabet); $j++)
                            @php $lettre = $alphabet[$j]; @endphp
                            <div class="alphabet-item" data-lettre="{{ $lettre }}">
                                <svg class="face-svg" viewBox="0 0 48 32">
                                    <ellipse cx="16" cy="14" rx="3" ry="5" fill="#222"/>
                                    <ellipse cx="32" cy="14" rx="3" ry="5" fill="#222"/>
                                    <path d="M16 22 Q24 28 32 22" stroke="#222" stroke-width="2" fill="none"/>
                                </svg>
                                <span class="alphabet-letter">{{ $lettre }}</span>
                            </div>
                        @endfor
                    </div>
                    <div class="phrases-row">
                        @for($j = $i; $j < $i + 4 && $j < count($alphabet); $j++)
                            @php $lettre = $alphabet[$j]; @endphp
                            <div class="phrase-lettre">{!! $phrases[$lettre] !!}</div>
                        @endfor
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <script>
        // Ajout des phrases et icônes pour chaque lettre
        const phrasesIcones = {
            A: { phrase: 'A comme Ananas', icone: 'ananas.png' },
            B: { phrase: 'B comme Banane', icone: 'banane.png' },
            C: { phrase: 'C comme Chat', icone: 'chat.png' },
            D: { phrase: 'D comme Dauphin', icone: 'dauphin.png' },
            E: { phrase: 'E comme Éléphant', icone: 'elephant.png' },
            F: { phrase: 'F comme Fleur', icone: 'fleur.png' },
            G: { phrase: 'G comme Gâteau', icone: 'gateau.png' },
            H: { phrase: 'H comme Hérisson', icone: 'herisson.png' },
            I: { phrase: 'I comme Igloo', icone: 'igloo.png' },
            J: { phrase: 'J comme Jouet', icone: 'jouet.png' },
            K: { phrase: 'K comme Koala', icone: 'koala.png' },
            L: { phrase: 'L comme Lion', icone: 'lion.png' },
            M: { phrase: 'M comme Mouton', icone: 'mouton.png' },
            N: { phrase: 'N comme Nuage', icone: 'nuage.png' },
            O: { phrase: 'O comme Orange', icone: 'orange.png' },
            P: { phrase: 'P comme Papillon', icone: 'papillon.png' },
            Q: { phrase: 'Q comme Quatre', icone: 'quatre.png' },
            R: { phrase: 'R comme Renard', icone: 'renard.png' },
            S: { phrase: 'S comme Soleil', icone: 'soleil.png' },
            T: { phrase: 'T comme Tigre', icone: 'tigre.png' },
            U: { phrase: 'U comme Uniforme', icone: 'uniforme.png' },
            V: { phrase: 'V comme Voiture', icone: 'voiture.png' },
            W: { phrase: 'W comme Wagon', icone: 'wagon.png' },
            X: { phrase: 'X comme Xylophone', icone: 'xylophone.png' },
            Y: { phrase: 'Y comme Yaourt', icone: 'yaourt.png' },
            Z: { phrase: 'Z comme Zèbre', icone: 'zebre.png' }
        };
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.alphabet-item').forEach(function(item) {
                item.addEventListener('click', function() {
                    // Animation saut
                    item.classList.add('jumping');
                    // Animation saut sur la phrase
                    const parentRow = item.parentElement.nextElementSibling;
                    if (parentRow && parentRow.classList.contains('phrases-row')) {
                        const index = Array.from(item.parentElement.children).indexOf(item);
                        const phrase = parentRow.children[index];
                        if (phrase) {
                            phrase.classList.add('jumping');
                            setTimeout(() => {
                                phrase.classList.remove('jumping');
                            }, 500);
                        }
                    }
                    setTimeout(() => {
                        item.classList.remove('jumping');
                    }, 500);
                    // Audio
                    const lettre = item.getAttribute('data-lettre');
                    // Chercher la phrase sans emoji pour le nom du fichier
                    const phrasesSansEmoji = {
                        A: 'A comme Ananas',
                        B: 'B comme Banane',
                        C: 'C comme Chat',
                        D: 'D comme Dauphin',
                        E: 'E comme Éléphant',
                        F: 'F comme Fleur',
                        G: 'G comme Gâteau',
                        H: 'H comme Hérisson',
                        I: 'I comme Igloo',
                        J: 'J comme Jouet',
                        K: 'K comme Koala',
                        L: 'L comme Lion',
                        M: 'M comme Mouton',
                        N: 'N comme Nuage',
                        O: 'O comme Orange',
                        P: 'P comme Papillon',
                        Q: 'Q comme Quatre',
                        R: 'R comme Renard',
                        S: 'S comme Soleil',
                        T: 'T comme Tigre',
                        U: 'U comme Uniforme',
                        V: 'V comme Voiture',
                        W: 'W comme Wagon',
                        X: 'X comme Xylophone',
                        Y: 'Y comme Yaourt',
                        Z: 'Z comme Zèbre',
                    };
                    const phraseAudio = phrasesSansEmoji[lettre];
                    if (phraseAudio) {
                        const audio = new Audio('/sons/' + phraseAudio + '.mp3');
                        audio.play();
                    }
                    // Affichage de la phrase et de l'icône
                    const phraseDiv = item.querySelector('.phrase-lettre');
                    if (phrasesIcones[lettre]) {
                        phraseDiv.innerHTML = `${phrasesIcones[lettre].phrase} <img class='icone-lettre' src='/icones/${phrasesIcones[lettre].icone}' alt='icone'>`;
                        phraseDiv.style.opacity = 1;
                        setTimeout(() => { phraseDiv.style.opacity = 0; }, 2500);
                    } else {
                        phraseDiv.innerHTML = '';
                        phraseDiv.style.opacity = 0;
                    }
                });
                // Survol : grossir la phrase
                item.addEventListener('mouseenter', function() {
                    const parentRow = item.parentElement.nextElementSibling;
                    if (parentRow && parentRow.classList.contains('phrases-row')) {
                        const index = Array.from(item.parentElement.children).indexOf(item);
                        const phrase = parentRow.children[index];
                        if (phrase) {
                            phrase.classList.add('hovered');
                        }
                    }
                });
                item.addEventListener('mouseleave', function() {
                    const parentRow = item.parentElement.nextElementSibling;
                    if (parentRow && parentRow.classList.contains('phrases-row')) {
                        const index = Array.from(item.parentElement.children).indexOf(item);
                        const phrase = parentRow.children[index];
                        if (phrase) {
                            phrase.classList.remove('hovered');
                        }
                    }
                });
            });
        });
    </script>
</body>
</html> 