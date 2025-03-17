@props(['width' => 90])

<img src="http://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }}" alt="Image" class="rounded-xl shrink-0">
