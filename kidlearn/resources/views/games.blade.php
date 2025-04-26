@extends('layouts.app')

@section('title', 'Jeux Éducatifs')

@section('styles')
<style>
    .games-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .games-header h1 {
        color: #4CAF50;
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }

    .games-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    .game-card {
        background-color: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .game-card:hover {
        transform: translateY(-10px);
    }

    .game-img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }

    .game-content {
        padding: 1.5rem;
    }

    .game-content h3 {
        color: #4CAF50;
        margin-bottom: 0.8rem;
        font-size: 1.4rem;
    }

    .game-content p {
        color: #666;
        margin-bottom: 1.5rem;
    }

    .game-content .btn {
        display: block;
        width: 100%;
        text-align: center;
    }

    .game-badge {
        display: inline-block;
        background-color: #e9f7ef;
        color: #4CAF50;
        padding: 0.3rem 0.8rem;
        border-radius: 20px;
        font-size: 0.8rem;
        margin-bottom: 0.8rem;
    }

    .age-group {
        font-size: 0.9rem;
        color: #888;
        margin-bottom: 0.5rem;
    }
</style>
@endsection

@section('content')
    <div class="games-header">
        <h1>Jeux Éducatifs</h1>
        <p>Découvrez notre collection de jeux éducatifs pour apprendre en s'amusant !</p>
    </div>

    <div class="games-grid">
        <div class="game-card">
            <img src="{{ asset('images/math-game.jpg') }}" alt="Jeu de mathématiques" class="game-img">
            <div class="game-content">
                <span class="game-badge">Mathématiques</span>
                <h3>Quiz de mathématiques</h3>
                <p class="age-group">Âge: 5-7 ans</p>
                <p>Testez vos connaissances en mathématiques avec ce quiz amusant !</p>
                <a href="/quiz1math" class="btn">Jouer</a>
            </div>
        </div>

        <div class="game-card">
            <img src="{{ asset('images/animals-game.jpg') }}" alt="Jeu des animaux" class="game-img">
            <div class="game-content">
                <span class="game-badge">Nature</span>
                <h3>Sons des animaux</h3>
                <p class="age-group">Âge: 3-6 ans</p>
                <p>Découvrez les différents cris des animaux et apprenez à les reconnaître.</p>
                <a href="/animaux" class="btn">Jouer</a>
            </div>
        </div>

        <div class="game-card">
            <img src="{{ asset('images/transport-game.jpg') }}" alt="Jeu des transports" class="game-img">
            <div class="game-content">
                <span class="game-badge">Transports</span>
                <h3>Moyens de transport</h3>
                <p class="age-group">Âge: 4-7 ans</p>
                <p>Explorez les différents moyens de transport et apprenez leurs noms.</p>
                <a href="/moyens" class="btn">Jouer</a>
            </div>
        </div>

        <div class="game-card">
            <img src="{{ asset('images/memory-game.jpg') }}" alt="Jeu de mémoire" class="game-img">
            <div class="game-content">
                <span class="game-badge">Mémoire</span>
                <h3>Jeu de mémoire</h3>
                <p class="age-group">Âge: 4-8 ans</p>
                <p>Exercez votre mémoire en retrouvant les paires d'images identiques.</p>
                <a href="/memory" class="btn">Jouer</a>
            </div>
        </div>

        <div class="game-card">
            <img src="{{ asset('images/alphabet-game.jpg') }}" alt="Apprendre l'alphabet" class="game-img">
            <div class="game-content">
                <span class="game-badge">Langue</span>
                <h3>Apprentissage de l'alphabet</h3>
                <p class="age-group">Âge: 3-5 ans</p>
                <p>Apprenez l'alphabet de façon ludique avec des images et des sons.</p>
                <a href="/alphabet" class="btn">Jouer</a>
            </div>
        </div>

        <div class="game-card">
            <img src="{{ asset('images/color-game.jpg') }}" alt="Jeu des couleurs" class="game-img">
            <div class="game-content">
                <span class="game-badge">Couleurs</span>
                <h3>Les couleurs</h3>
                <p class="age-group">Âge: 2-4 ans</p>
                <p>Découvrez les couleurs en vous amusant avec des activités interactives.</p>
                <a href="/colors" class="btn">Jouer</a>
            </div>
        </div>
    </div>
@endsection