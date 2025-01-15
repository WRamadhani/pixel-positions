@props(['job'])
<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>
    <div class="flex flex-col flex-1">
        <a class="self-start text-sm text-grey-400">{{ $job->employer->name }}</a>
        <h3 class="mt-3 text-xl font-bold transition-colors duration-200 group-hover:text-blue-600">
            <a href="{{ $job->url }}">{{ $job->title }}</a>
        </h3>
        <p class="mt-auto text-sm text-grey-400">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>
    <div class="">
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>
