@props(['job'])

<div
    class="flex flex-col text-center rounded-xl bg-white/5 p-4 border border-transparent hover:border-blue-700 group cursor-pointer transition-colors duration-300 ">

    <div class="text-sm self-start">
        {{ $job->employer->name }}
    </div>
    <div class="font-bold py-8 ">
        <h3 class="group-hover:text-blue-700 text-xl transition-colors duration-300 ">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm mt-4">
            {{ $job->salary }}
        </p>
    </div>
    <div class="flex justify-between items-center mt">
        <div>

            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag />
            @endforeach






        </div>
        <x-employer-logo :employer="$job->employer" :width="42" />
    </div>

</div>
