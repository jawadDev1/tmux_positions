<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tmux Positions</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>

<body class="bg-primary-black text-white">

    <div class="px-10">
        <nav class="flex justify-between items-center py-3 px-2 border-b border-white/10 ">


            <div>
                <a class="text-white text-xl font-semibold" href="/">
                    TmuxP
                </a>
            </div>
            <div class="font-bold space-x-3">
                <a class="hover:text-gray-400" href="#">Jobs</a>
                <a class="hover:text-gray-400" href="#">Careers</a>
                <a class="hover:text-gray-400" href="#">Salaries</a>
                <a class="hover:text-gray-400" href="#">Companies</a>
            </div>
            <div>
                
                @auth
                    <a href="/jobs/create">Post a Job</a>
                @endauth

                @guest
                <div class="font-bold space-x-3">
                    <a class="hover:text-gray-400" href="/register">Register</a>
                    <a class="hover:text-gray-400" href="/login">Login</a>
                    
                </div>
                @endguest

            </div>

        </nav>
        <main class="mt-10 max-w-[968px] mx-auto pb-8">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
