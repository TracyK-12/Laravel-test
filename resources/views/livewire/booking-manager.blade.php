<div class="bg-white p-6 rounded shadow">
    @if (session()->has('message'))
        <div class="mb-4 text-green-700">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="submit">
    <label class="block mb-2">Choisir une propriété</label>
<select wire:model="propertyId" class="border p-2 mb-4 w-full">
    <option value="">-- Sélectionner une propriété --</option>
    @foreach(\App\Models\Property::all() as $property)
        <option value="{{ $property->id }}">{{ $property->name }}</option>
    @endforeach
</select>
        <label class="block mb-2">Date de début</label>
        <input type="date" wire:model="startDate" class="border p-2 mb-4 w-full">

        <label class="block mb-2">Date de fin</label>
        <input type="date" wire:model="endDate" class="border p-2 mb-4 w-full">

        <x-button type="submit">Réserver</x-button>
    </form>
</div>
