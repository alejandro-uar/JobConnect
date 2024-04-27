
@php
    $color = 'bg-indigo-50';
    switch ($user->color) {
        case 'blue':
            $color = 'bg-indigo-600';
            break;
        case 'rose':
            $color = 'bg-indigo-600';
            break;
        default:
            # code...
            break;
    }
@endphp

<div>
    <div class="w-full px-10 py-5 {{$color}} relative">
        <h1 class="text-xl">JobConnect</h1>
        <a href="{{route('view_edit_p',['id'=>$user->id])}}">Actualizar perfi</a>
        <div class="h-30 flex justify-center">
            <img src="{{ asset('storage/images/' . $user->uri) }}" alt="user-profile" class="h-25 rounded-full">
        </div>
    </div>
    <div class="h-screen bg-indigo-200 p-10 flex justify-center gap-10">
        <div class="h-1/4 w-1/4 border">
            <h1 class="fuente-mono text-2xl">{{$user->name}}</h1>
            <p class="fuente-mono">{{$user->gmail}}</p>
            <p class="fuente-mono">especialidad</p>
        </div>
        <div class="h-1/2 w-1/2 overflow-auto border">
            @forelse ($user->posts as $post)    
                <div class="flex flex-col overflow-auto border p-5">
                    <strong class="text-xl">{{ $post->title }}</strong>
                    <p class="text-justify">{{ $post->des }}</p>
                    <span>{{ $post->created_at }}</span>
                </div>
            @empty
                <span>No hay posteos aún.</span>
            @endforelse
        </div>            
    </div>
</div>