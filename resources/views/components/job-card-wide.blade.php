@props(['job'])

@php
    /** @var App\Models\Job $job */
@endphp

<x-panel class="flex gap-x-6">

    <div>
        <a href="/employers/{{ $job->employer->name }}">
            <x-employer-logo :employer="$job->employer"/>
        </a>
    </div>


    <div class="flex-1 flex flex-col">
        <a href="/employers/{{ $job->employer->name }}" class="self-start text-sm text-gray-600">{{ $job->employer->name }}</a>

        <h3 class="font-bold text-xl mt-3 hover:text-blue-800 transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>

        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
    </div>

    <div>
        @foreach($job->tags as $tag)
            <x-tag :tag="$tag" />
        @endforeach
    </div>

</x-panel>
