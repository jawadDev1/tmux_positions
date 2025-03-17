<x-layout>


    <div class="space-y-10">

        <section class="text-center space-y-4 py-5">
            <h1 class="text-4xl font-bold">Let's Find Your Next Job</h1>
            <x-forms.form action="/search">
                <x-forms.input name="q" :label="false" type="text" placeholder="Web Developer..." />
            </x-forms.form>
        </section>

        <section>
            <x-section-heading>
                Featured Jobs
            </x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featured_jobs as $job)
                    <x-job-card :$job />
                @endforeach

            </div>
        </section>


        <section>
            <x-section-heading>
                Tags
            </x-section-heading>

            <div class="space-1 mt-6">

                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach



            </div>



        </section>
        <section>
            <x-section-heading>
                Recent Jobs
            </x-section-heading>

            <div class="space-y-4 mt-6">

                @foreach ($jobs as $job)
                    <x-job-card :$job />
                @endforeach

            </div>



        </section>
    </div>

</x-layout>
