<x-layout>

    <h1 class="text-2xl text-bold ">New Job</h1>

    <x-forms.form method="POST" action="/jobs" enctype="multipart/form-data">

        <x-forms.input name="title" label="Title" />
        <x-forms.input name="salary" label="Salary" />
        <x-forms.input name="location" label="Location" />
        <x-forms.input name="url" label="URL" />

        <x-forms.select label="Schedule" label="schedule">
            <option value="Part Time">Part Time</option>
            <option value="Full Time">Full Time</option>
        </x-forms.select>

        <x-forms.input name="tags" label="Tags" placeholder="commad seperated tags" />

        <x-forms.checkbox label="Featured" name="featured" />

        <x-forms.button>
            Publish
        </x-forms.button>


    </x-forms.form>

</x-layout>
