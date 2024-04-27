<x-layouts>
  <x-slot:title>Home</x-slot:title>
    @if (auth()->check() && auth()->user()->role_id == 1)    
      <div class="flex flex-row justify-between items-center">
        <p class="flex-grow">Usuarios registrados: {{$max}}</p>
        <x-form type="search">
          <x-input type="search"></x-input>
        </x-form>
      </div>
      @foreach ($users as $user)
        <x-lista :user="$user">
          <a href="{{ route('view_edit',['id'=>$user->id]) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 rounded">Editar</a>
          <a href="{{ route('eliminar',['id'=>$user->id]) }}" class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold px-2 rounded">Eliminar</a>
        </x-lista>
      @endforeach
    @else  
      <x-perfil :user="$currentUser"></x-perfil>
    @endif
</x-layouts>

