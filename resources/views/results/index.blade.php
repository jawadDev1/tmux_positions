<x-layout>


    <h1 class="text-4xl font-bold">Results</h1>

    <div class="space-y-4 mt-6">

        @foreach ($jobs as $job)
            <x-job-card-expanded :$job />
        @endforeach

    </div>

</x-layout>
