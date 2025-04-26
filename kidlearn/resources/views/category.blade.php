@extends('layouts.app')

@section('title', $category->name)

@section('styles')
<style>
    .category-header {
        text-align: center;
        margin-bottom: 3rem;
        background-color: #e9f7ef;
        padding: 2rem;
        border-radius: 10px;
    }

    .category-header h1 {
        color: #4CAF50;
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }

    .category-header p {
        max-width: 800px;
        margin: 0 auto;
        color: #555;
    }

    .items-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-top: 2rem;
    }

    .item {
        background-color: white;
        border-radius: 15px;
        padding: 15px;
        width: 220px;
        cursor: pointer;
        transition: transform 0.3s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .item:hover {
        transform: scale(1.05);
    }

    .item img {
        width: 180px;
        height: 180px;
        border-radius: 20px;
        border: 2px solid #4CAF50;
        object-fit: cover;
    }

    .item p {
        font-size: 1.2em;
        margin: 10px 0 5px;
        color: #333;
        font-weight: bold;
    }

    .sound-playing {
        animation: pulse 1s infinite;
    }
</style>
@endsection

@section('content')
    <div class="category-header">
        <h1>{{ $category->name }}</h1>
        @if($category->description)
            <p>{{ $category->description }}</p>
        @endif
    </div>

    <div class="items-container">
        @forelse($items as $item)
            <div class="item" onclick="playSound('{{ $item->id }}')">
                @if($item->image)
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" id="img-{{ $item->id }}">
                @else
                    <img src="{{ asset('images/placeholder.jpg') }}" alt="{{ $item->name }}" id="img-{{ $item->id }}">
                @endif
                <p>{{ $item->name }}</p>
            </div>
        @empty
            <p>Aucun élément trouvé dans cette catégorie.</p>
        @endforelse
    </div>

    <!-- Audio elements -->
    @foreach($items as $item)
        @if($item->sound)
            <audio id="audio-{{ $item->id }}" src="{{ asset('storage/' . $item->sound) }}"></audio>
        @endif
    @endforeach
@endsection

@section('scripts')
<script>
    function playSound(itemId) {
        // Stop any currently playing sounds
        document.querySelectorAll('audio').forEach(audio => {
            audio.pause();
            audio.currentTime = 0;
        });
        
        // Remove animation from all items
        document.querySelectorAll('.item').forEach(div => {
            div.classList.remove('sound-playing');
        });
        
        // Play the selected sound if it exists
        const audio = document.getElementById('audio-' + itemId);
        if (audio) {
            audio.play();
            
            // Add animation to the clicked item
            const itemDiv = document.querySelector(`.item img[id="img-${itemId}"]`).parentNode;
            itemDiv.classList.add('sound-playing');
            
            // Remove animation when sound ends
            audio.onended = function() {
                itemDiv.classList.remove('sound-playing');
            };
        }
    }
</script>
@endsection 