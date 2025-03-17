@props(['width' => 90, 'employer'])


<img src="{{ asset($employer->logo) }}" width="{{ $width }}" alt="Image" class="rounded-xl shrink-0">
