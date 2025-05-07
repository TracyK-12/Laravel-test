@props(['class' => ''])
<button {{ $attributes->merge(['class' => 'bg-secondary text-black px-4 py-2 rounded hover:bg-purple-700']) }}>
    {{ $slot }}
</button>
