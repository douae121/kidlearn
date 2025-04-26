<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KidLearn - @yield('title', 'Apprendre en s\'amusant')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
</head>
<body>
    <header>
        <div class="logo">
            <a href="/">
                <h1>KidLearn</h1>
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/games">Jeux</a></li>
                <li><a href="/animaux">Animaux</a></li>
                <li><a href="/moyens">Moyens de transport</a></li>
                <li><a href="/niveau1math">Mathématiques</a></li>
            </ul>
        </nav>
        <div class="menu-button" onclick="toggleMenu()">⋮</div>
        <div id="menu-links">
            <a href="/login">Connexion</a>
            <a href="/register">Inscription</a>
            <a href="/about">À propos de nous</a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} KidLearn - Site d'apprentissage pour enfants</p>
    </footer>

    <audio id="clickSound" src="{{ asset('sounds/clic.mp3') }}" preload="auto"></audio>

    <script>
        function jouerSon() {
            const sound = document.getElementById("clickSound");
            sound.play().catch(function(error) {
                console.log("Erreur lors du chargement du son:", error);
            });
        }

        function toggleMenu() {
            jouerSon();
            var menu = document.getElementById("menu-links");
            if (menu.style.display === "none" || menu.style.display === "") {
                menu.style.display = "block";
            } else {
                menu.style.display = "none";
            }
        }
    </script>
    @yield('scripts')
</body>
</html> 