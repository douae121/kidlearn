<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion / Inscription</title>
    <link rel="stylesheet" href="{{ asset('css/styleinscrire.css') }}">
    <script>
        function showForm(formId) {
            document.getElementById('inscriptionForm').classList.remove('active');
            document.getElementById('connexionForm').classList.remove('active');
            document.getElementById(formId).classList.add('active');

            document.getElementById('tabInscription').classList.remove('active');
            document.getElementById('tabConnexion').classList.remove('active');
            document.getElementById('tab' + formId.charAt(0).toUpperCase() + formId.slice(1)).classList.add('active');
        }
    </script>
</head>
<body>
    <div class="wrapper">
        <h1>Suivez le progrès de votre enfant</h1>

        <div class="tabs">
            <span id="tabInscription" class="tab active" onclick="showForm('inscriptionForm')">S'inscrire</span>
            <span id="tabConnexion" class="tab" onclick="showForm('connexionForm')">Se connecter</span>
        </div>

        <div id="inscriptionForm" class="form-container active">
            <form action="{{ route('inscription') }}" method="POST">
                @csrf
                <input type="text" name="nom_de_parent" placeholder="Nom et prénom" required>
                <input type="email" name="votre_email" placeholder="Votre email" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <button type="submit">S'inscrire</button>
            </form>
        </div>

        <div id="connexionForm" class="form-container">
            <form action="{{ route('connexion') }}" method="POST">
                @csrf
                <input type="email" name="votre_email" placeholder="Votre email" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <button type="submit">Se connecter</button>
            </form>
        </div>

        @if(session('msg'))
            <div class="alert alert-danger">
                {{ session('msg') }}
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
</body>
</html>
