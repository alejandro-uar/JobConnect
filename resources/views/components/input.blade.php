@props(['type','name', 'email', 'pass'])

<div class="flex flex-col space-y-4">
    @switch($type)
        @case('search')
            <input type="text" name="id" value="" placeholder="Search by ID" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
            @break
        @case('registrar')
            <input type="file" name="uri" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
            <input type="text" name="name" value="" placeholder="Name" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
            <input type="text" name="email" value="" placeholder="Email" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
            @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            <select name="role_id" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
                <option value="1">Admin</option>
                <option value="2">Usuario</option>
              </select>
              
            <input type="password" name="password" placeholder="Password" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
            @error('password')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            @break
        @case('actualizar')
            <input type="file" name="uri" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
            <input type="text" name="name" value="{{ $name }}" placeholder="Name" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
            <input type="text" name="email" value="{{ $email }}" placeholder="Email" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
            @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            <select name="role_id" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
                <option value="1">Admin</option>
                <option value="2">Usuario</option>
              </select>
            @break
        @default
            
    @endswitch
</div>

