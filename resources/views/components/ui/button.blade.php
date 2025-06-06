@props([
    'link' => '#',
    'ghostButton' => false,
    'class' => '',
])

<a href="{{ $link }}" target="{{ $targetBlank ?? false ? '_blank' : '' }}">
    <button
        {{ $attributes->merge(['class' => trim(($ghostButton ? 'ghost-button' : 'button') . ' fw-bold rounded-pill px-5 py-2 border-none ' . $class)]) }}>
        {{ $slot }}
    </button>
</a>
