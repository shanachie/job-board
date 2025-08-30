@props(['employer', 'width' => 90])

@php
    /** @var App\Models\Employer $employer */
@endphp

<img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}">
