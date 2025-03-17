@props(['size' => 'base', 'tag'])

@php
    $classes = 'bg-white/10 rounded-lg  hover:bg-white/25  transition-colors duration-300 ';

    if ($size === 'small') {
        $classes .= 'text-tiny px-2 py-1';
    } elseif ($size === 'base') {
        $classes .= 'text-lg px-8 py-1';
    }

@endphp

<a class="{{ $classes }}" href="/tags/{{ strtolower($tag->name) }}">{{ $tag->name }}</a>
