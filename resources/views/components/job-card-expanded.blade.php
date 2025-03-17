@props(['job'])

<div
    class="flex gap-x-4 rounded-xl bg-white/5 p-4 border border-transparent hover:border-blue-700 group cursor-pointer transition-colors duration-300  ">
    <div class="">
        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="text-sm self-start text-gray-400">{{ $job->employer->name }}</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-700  transition-colors duration-300 ">
            {{ $job->title }}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>

    </div>

    <div class="">

        @foreach ($job->tags as $tag)
            <x-tag size="small" :$tag />
        @endforeach


    </div>

</div>
