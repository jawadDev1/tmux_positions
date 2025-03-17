<x-layout>

    <h1 class="text-2xl text-bold ">Login</h1>

    <x-forms.form method="POST" action="/login">


        <x-forms.input name="email" label="Email" />
        <x-forms.input name="password" label="Password" type="password" />


        <x-forms.button>
            Login
        </x-forms.button>


    </x-forms.form>

</x-layout>
