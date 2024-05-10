<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-indigo-900">
    <div class="h-screen flex items-center justify-center">
        <form class="w-80 p-6 bg-white rounded-lg shadow-lg"  action="{{route('sing_in')}}" method="POST">
            @csrf
            <h1 class="text-2xl text-center font-bold text-indigo-900 mb-4">JobConnect In</h1>

            <label for="email" class="text-indigo-900">
                <span>Email</span>
                <input type="text" name="email" id="email" class="p-2 mt-1 block w-full rounded-md text-black">
            </label>

            <label for="password" class="text-indigo-900 mt-4">
                <span>Password</span>
                <input type="password" name="password" id="password" class="p-2 mt-1 block w-full rounded-md">
            </label>
            <button type="submit" class="mt-6 w-full bg-indigo-900 text-white hover:bg-indigo-800 py-2 rounded-md transition duration-300">Sign in</button>
        </form>
    </div>
</body>

</html>
