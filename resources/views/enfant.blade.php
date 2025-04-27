<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace enfants</title>
    <link rel="stylesheet" href="{{ asset('css/enfant.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="enfant-name" content="{{ session('enfant_name', 'Enfant') }}">
    <script src="{{ asset('js/activity-tracker.js') }}"></script>
</head>
<body>

    <audio id="clickSound" src="{{ asset('sounds/clic.mp3') }}" preload="auto"></audio>

    <a href="{{ url('/activite1') }}" class="activity-link" data-activity="Lecture">
        <img src="{{ asset('image/an.png') }}" alt="Activité 1" class="img-1" onclick="jouerSon()">
    </a>

    <a href="{{ url('/activite2') }}" class="activity-link" data-activity="Mathématiques">
        <img src="{{ asset('image/math.png') }}" alt="Activité 2" class="img-2" onclick="jouerSon()">
    </a>

    <a href="{{ url('/activite3') }}" class="activity-link" data-activity="Écriture">
        <img src="{{ asset('image/abc.png') }}" alt="Activité 3" class="img-3" onclick="jouerSon()">
    </a>

    <a href="{{ url('/activite4') }}" class="activity-link" data-activity="Sciences">
        <img src="{{ asset('image/tran.png') }}" alt="Activité 4" class="img-4" onclick="jouerSon()">
    </a>

    <script>
        function jouerSon() {
            const son = document.getElementById("clickSound");
            if (son) {
                son.currentTime = 0;
                son.play().catch(error => {
                    console.log("Erreur lors de la lecture du son :", error);
                });
            }
        }

        // Exemple d'utilisation pour un exercice complété
        function exerciceComplet(typeActivite, score, niveau) {
            const event = new CustomEvent('exerciseCompleted', {
                detail: {
                    type_activite: typeActivite,
                    score: score,
                    niveau: niveau
                }
            });
            document.dispatchEvent(event);
        }

        // Exemple d'utilisation pour un changement de niveau
        function niveauSuivant(typeActivite, nouveauNiveau) {
            const event = new CustomEvent('levelUp', {
                detail: {
                    type_activite: typeActivite,
                    niveau: nouveauNiveau
                }
            });
            document.dispatchEvent(event);
        }

        // Exemple d'utilisation dans une activité :
        // Lorsqu'un exercice est complété :
        // exerciceComplet('Lecture', 85, 'Niveau 2');
        
        // Lorsque l'enfant passe au niveau suivant :
        // niveauSuivant('Lecture', 'Niveau 3');
    </script>
</body>
</html>
