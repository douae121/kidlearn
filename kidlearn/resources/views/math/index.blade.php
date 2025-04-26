@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Les Mathématiques</h1>
    
    <div class="row">
        @foreach($levels as $level)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                @if($level->image)
                    <img src="{{ asset('storage/' . $level->image) }}" class="card-img-top" alt="{{ $level->title }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">Niveau {{ $level->level_number }}: {{ $level->title }}</h5>
                    <p class="card-text">{{ $level->description }}</p>
                    <div class="progress mb-3">
                        @php
                            $completedExercises = $level->exercises->where('is_completed', true)->count();
                            $totalExercises = $level->exercises->count();
                            $progress = $totalExercises > 0 ? ($completedExercises / $totalExercises) * 100 : 0;
                        @endphp
                        <div class="progress-bar" role="progressbar" style="width: {{ $progress }}%">
                            {{ $completedExercises }}/{{ $totalExercises }}
                        </div>
                    </div>
                    <a href="{{ route('math.level', $level->id) }}" class="btn btn-primary">Commencer</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection 