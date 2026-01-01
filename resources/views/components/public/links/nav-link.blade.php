@props(['route'])

@php

$classes = (request()->routeIs($route) ?? false)
? 'active header-link hstack gap-2 fs-7 fw-bold text-dark'
: 'header-link hstack gap-2 fs-7 fw-bold text-dark';
@endphp


<li></li>


<li class="header-item">
    <a href="{{ route($route) }}" aria-current="true" {{ $attributes->merge(['class' => $classes]) }}>

        <img src="{{ asset('static/assets/images/svgs/secondary-leaf.svg') }}" alt="" width="20" height="20"
            class="img-fluid animate-spin" />

        {{ $slot }}
    </a>
</li>
