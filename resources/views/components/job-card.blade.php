@props(['job'])

@php
    /** @var App\Models\Job $job */
@endphp

<x-panel class="flex flex-col">

    <div class="self-start w-full group/employer">
        <a class="flex space-x-3" href="/employers/{{ $job->employer->name }}">
            <x-employer-logo :employer="$job->employer" :width="36" />
            <div class="text-sm w-fit self-center group-hover/employer:text-gray-600 transition-colors duration-300">
                    {{ $job->employer->name }}
            </div>
        </a>
    </div>

    <div class="py-8 text-center">

        <h3 class="hover:text-blue-800 text-xl font-bold w-full transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>

        <p class="text-sm mt-4">{{ $job->location }}</p>
        <p class="text-sm">{{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag size="small" :tag="$tag" />
            @endforeach
        </div>
    </div>

</x-panel>
