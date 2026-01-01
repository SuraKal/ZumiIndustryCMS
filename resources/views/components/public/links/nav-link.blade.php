@props(['route'])

<a href="{{ route($route) }}"
    @class([
        'active' => request()->routeIs($route),
    ])
    aria-current="page"
    >
    {{ $slot }}
</a>

