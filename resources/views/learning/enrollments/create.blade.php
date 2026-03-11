@extends('layouts.base')

@section('content')
<div class="container">
    <h1>S'inscrire au cours : {{ $course->title }}</h1>
    
    <p>{{ $course->description }}</p>
    
    <form method="POST" action="{{ route('learning.enrollments.store', $course) }}">
        @csrf
        
        <button type="submit" class="btn btn-primary">
            Confirmer l'inscription
        </button>
        
        <a href="{{ route('learning.courses.index') }}" class="btn btn-secondary">
            Annuler
        </a>
    </form>
</div>
@endsection