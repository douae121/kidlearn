@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">{{ $level->title }}</h1>
    
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Description du niveau</h5>
                    <p class="card-text">{{ $level->description }}</p>
                </div>
            </div>

            <div class="list-group">
                @foreach($level->exercises as $exercise)
                <a href="{{ route('math.exercise', ['level' => $level->id, 'exercise' => $exercise->id]) }}" 
                   class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="mb-1">{{ $exercise->question }}</h5>
                        <small class="text-muted">{{ ucfirst($exercise->type) }}</small>
                    </div>
                    @if($exercise->is_completed)
                        <span class="badge bg-success">Complété</span>
                    @else
                        <span class="badge bg-primary">À faire</span>
                    @endif
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection 