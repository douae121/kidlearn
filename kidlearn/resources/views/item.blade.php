@extends('layouts.app')

@section('title', $item->name)

@section('styles')
<style>
    .item-container {
        max-width: 900px;
        margin: 0 auto;
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        padding: 2rem;
    }

    .item-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .item-header h1 {
        color: #4CAF50;
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
    }

    .category-link {
        color: #888;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 1rem;
    }

    .category-link:hover {
        color: #4CAF50;
    }

    .item-content {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        align-items: flex-start;
    }

    .item-image {
        flex: 1;
        min-width: 300px;
        text-align: center;
    }

    .item-image img {
        max-width: 100%;
        border-radius: 15px;
        border: 3px solid #4CAF50;
    }

    .item-details {
        flex: 2;
        min-width: 300px;
    }

    .item-description {
        background-color: #f9f9f9;
        padding: 1.5rem;
        border-radius: 10px;
        margin-bottom: 2rem;
    }

    .media-controls {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-top: 1.5rem;
    }

    .media-btn {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 0.8rem 1.5rem;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s;
    }

    .media-btn:hover {
        background-color: #3d8b3d;
    }

    .media-btn i {
        font-size: 1.2rem;
    }

    .video-container {
        width: 100%;
        margin-top: 2rem;
    }

    video {
        width: 100%;
        border-radius: 10px;
        border: 2px solid #4CAF50;
    }

    .age-range {
        display: inline-block;
        background-color: #e9f7ef;
        color: #4CAF50;
        padding: 0.3rem 0.8rem;
        border-radius: 20px;
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }

    .sound-playing {
        animation: pulse 1s infinite;
    }

    .navigation {
        display: flex;
        justify-content: space-between;
        margin-top: 3rem;
    }

    .navigation a {
        color: #4CAF50;
        text-decoration: none;
    }

    .navigation a:hover {
        text-decoration: underline;
    }
</style>
@endsection

@section('content')
    <div class="item-container">
        <div class="item-header">
            <a href="{{ route('category', $category->slug) }}" class="category-link">
                &larr; Retour à {{ $category->name }}
            </a>
            <h1>{{ $item->name }}</h1>
            @if($item->age_min && $item->age_max)
                <span class="age-range">Pour les {{ $item->age_min }}-{{ $item->age_max }} ans</span>
            @endif
        </div>

        <div class="item-content">
            <div class="item-image">
                @if($item->image)
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" id="item-image">
                @else
                    <img src="{{ asset('images/placeholder.jpg') }}" alt="{{ $item->name }}" id="item-image">
                @endif

                <div class="media-controls">
                    @if($item->sound)
                        <button class="media-btn" onclick="playSound()">
                            <i class="fas fa-volume-up"></i> Écouter
                        </button>
                    @endif
                </div>
            </div>

            <div class="item-details">
                @if($item->description)
                    <div class="item-description">
                        <p>{{ $item->description }}</p>
                    </div>
                @endif

                @if($item->video)
                    <div class="video-container">
                        <video controls>
                            <source src="{{ asset('storage/' . $item->video) }}" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture vidéo.
                        </video>
                    </div>
                @endif
            </div>
        </div>

        <div class="navigation">
            <div>
                {{-- Lien vers l'élément précédent (à implémenter) --}}
            </div>
            <div>
                {{-- Lien vers l'élément suivant (à implémenter) --}}
            </div>
        </div>
    </div>

    @if($item->sound)
        <audio id="audio-sound" src="{{ asset('storage/' . $item->sound) }}"></audio>
    @endif
@endsection

@section('scripts')
<script>
    function playSound() {
        const audio = document.getElementById('audio-sound');
        const image = document.getElementById('item-image');
        
        if (audio) {
            // Si l'audio est en pause ou terminé, le jouer
            if (audio.paused) {
                audio.play();
                image.classList.add('sound-playing');
                
                // Retirer l'animation lorsque le son est terminé
                audio.onended = function() {
                    image.classList.remove('sound-playing');
                };
            } else {
                // Sinon, mettre en pause
                audio.pause();
                audio.currentTime = 0;
                image.classList.remove('sound-playing');
            }
        }
    }
</script>
@endsection 