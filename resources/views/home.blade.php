@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center p-6">
    <h1 class="text-3xl font-bold mb-6">Bienvenue sur le site de réservation</h1>

    {{-- Composant Livewire --}}
    <livewire:booking-manager />

    <div class="container mx-auto px-4 py-6">
        <h2 class="text-2xl font-bold mb-4">Liste des propriétés</h2>

        @foreach($properties as $property)
            <div class="mb-4 p-4 border rounded shadow">
                <h3 class="text-xl font-semibold">{{ $property->name }}</h3>
                <p class="text-gray-600">{{ $property->description }}</p>
                <p class="text-blue-600 font-bold mt-2">{{ $property->price_per_night }} €/nuit</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
