<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
</head>
<body class="bg-gray-100">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </div>
                    <div class="hidden md:flex md:justify-between md:items-center ml-10">
                        <a href="{{ route('index') }}" class="menu-item {{ Request::route()->named('index') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Inicio</a>
                        @if (auth()->check() && auth()->user()->role_id == 1)
                            <a href="{{ route('view_form') }}" class="menu-item {{ Request::route()->named('view_form') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Registrar usuario</a>
                        @endif
                        <a href="{{route('red')}}" class="menu-item {{ Request::route()->named('red') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Red</a>
                    </div>
                </div>
                <div class="mr-10">
                    <a href="{{ route('logout') }}" class="menu-item bg-red-900 text-white rounded-md px-3 py-2 text-sm font-medium">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        {{$slot}}
    </main>
</body>
</html>
