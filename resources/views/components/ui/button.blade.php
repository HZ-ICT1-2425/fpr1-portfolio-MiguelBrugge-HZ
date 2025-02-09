<a href="{{ $link }}" target={{ ($targetBlank ?? '') ? '_blank' : ''}}>
    <button class="{{ ($ghostButton ?? false) ? 'ghost-button' : 'button' }} fw-bold rounded-pill px-5 py-2 border-none {{ $class ?? '' }}">{{ $slot }}</button>
</a>
