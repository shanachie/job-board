@props(['employer', 'width' => 90])

@php
    /** @var App\Models\Employer $employer */
@endphp

<div class="flex-none min-w-[{{ $width }}px]">
    <img src="{{ asset($employer->logo) }}" alt="" class="rounded-lg object-fit" width="{{ $width }}">
</div>
