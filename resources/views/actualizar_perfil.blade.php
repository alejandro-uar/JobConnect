<x-layouts>
    <x-slot:title>Actualizar Profile</x-slot:title>
    <div class="">
        <form action="" method="POST"> 
            @csrf 
            <div class="w-full px-10 py-5 bg-indigo-500 relative">
                <div class="flex justify-between">
                    <h1 class="text-2xl">JobConnect</h1>
                    <select id="color_select" name="color" class="rounded p-1 bg-indigo-50">
                        <option value="red">Rojo</option>
                    </select>
                </div>

                <div class="h-30 flex flex-col items-center">
                    <img src="{{ asset('storage/images/' . $user->uri) }}" alt="user-profile" class="h-[150px] w-[150px] rounded-full">
                    <input type="file" name="uri">
                </div>
            </div>
            <div class="h-[400px] bg-indigo-200 p-10 flex justify-center gap-10">
                <div class="h-[300px] w-1/4 p-2 flex flex-col gap-1 border">
                    <h1 class="fuente-mono text-2xl">Nombre:</h1>
                    <input type="text" name="name" value="{{$user->name}}" class="p-1 fuente-mono">
                    <h1 class="fuente-mono text-2xl">Correo:</h1>
                    <input type="email" name="email" value="{{$user->email}}" class="p-1 fuente-mono">
                    <h1 class="fuente-mono text-2xl">Especialidad:</h1>
                    <input type="text" name="especialidad" value="{{$user->especialidad}}" class="p-1 fuente-mono">
                </div>
                <div class="h-[300px] w-1/2 overflow-auto border">
                    @forelse ($user->posts as $post)    
                        <div class="flex flex-col overflow-auto border p-5">
                            <strong>Titulo:</strong>
                            <input type="text" name="post_title[]" value="{{$post->title}}" class="fuente-mono">
                            <p class="text-justify">Descripción:</p>
                            <textarea name="post_description[]" class="text-justify fuente-mono">{{$post->description}}</textarea>
                            <span>Fecha de creación: {{$post->created_at}}</span>
                        </div>
                    @empty
                        <span>No hay posteos aun!</span>
                    @endforelse
                </div>
                            
            </div>
            <div class="flex justify-center p-2">
                <button type="submit" class="w-[200px] rounded bg-violet-600 p-2 text-white">Actualizar</button> 
            </div>
            
        </form>
    </div>
    
</x-layouts>
