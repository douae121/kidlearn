@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">{{ $exercise->question }}</h2>

                    @if($exercise->image)
                        <div class="text-center mb-4">
                            <img src="{{ asset('storage/' . $exercise->image) }}" class="img-fluid" alt="Exercise image">
                        </div>
                    @endif

                    @if($exercise->type === 'counting')
                        <div class="counting-exercise">
                            <div class="fruits-container mb-4">
                                <!-- Les fruits seront ajoutés dynamiquement via JavaScript -->
                            </div>
                            <div class="basket-container mb-4">
                                <div class="basket" id="basket">
                                    <!-- Le panier sera affiché ici -->
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary" id="checkAnswer">Vérifier</button>
                            </div>
                        </div>
                    @elseif($exercise->type === 'quiz')
                        <div class="quiz-exercise">
                            <div class="options-container">
                                @foreach(json_decode($exercise->options) as $option)
                                    <button class="btn btn-outline-primary m-2 option-btn" data-value="{{ $option }}">
                                        {{ $option }}
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div id="result" class="alert mt-3" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const exercise = @json($exercise);
    const resultDiv = document.getElementById('result');

    if (exercise.type === 'counting') {
        // Logique pour l'exercice de comptage
        const fruitsContainer = document.querySelector('.fruits-container');
        const basket = document.getElementById('basket');
        let selectedFruits = [];

        // Ajouter les fruits
        for (let i = 0; i < exercise.correct_answer; i++) {
            const fruit = document.createElement('div');
            fruit.className = 'fruit';
            fruit.innerHTML = '🍎';
            fruit.draggable = true;
            fruit.addEventListener('dragstart', handleDragStart);
            fruitsContainer.appendChild(fruit);
        }

        // Gérer le drag and drop
        basket.addEventListener('dragover', handleDragOver);
        basket.addEventListener('drop', handleDrop);

        document.getElementById('checkAnswer').addEventListener('click', function() {
            const isCorrect = selectedFruits.length === exercise.correct_answer;
            showResult(isCorrect);
        });
    } else if (exercise.type === 'quiz') {
        // Logique pour le quiz
        document.querySelectorAll('.option-btn').forEach(button => {
            button.addEventListener('click', function() {
                const selectedValue = parseInt(this.dataset.value);
                const isCorrect = selectedValue === exercise.correct_answer;
                showResult(isCorrect);
            });
        });
    }

    function showResult(isCorrect) {
        resultDiv.style.display = 'block';
        resultDiv.className = `alert ${isCorrect ? 'alert-success' : 'alert-danger'}`;
        resultDiv.textContent = isCorrect ? 'Bravo ! C\'est correct !' : 'Essayez encore !';

        if (isCorrect) {
            // Envoyer la réponse au serveur
            fetch(`/math/exercise/${exercise.id}/check`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ answer: exercise.correct_answer })
            });
        }
    }
});
</script>
@endpush

@push('styles')
<style>
.fruits-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
}

.fruit {
    font-size: 2em;
    cursor: move;
}

.basket {
    width: 200px;
    height: 150px;
    border: 2px dashed #ccc;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    padding: 10px;
}

.option-btn {
    min-width: 100px;
}
</style>
@endpush
@endsection 