
@php
    $color = 'bg-indigo-50';
    if (!empty($user)) {
        switch ($user->color) {
            case 'Black':
                $color = 'bg-slate-950';
                break;
            case 'Blue':
                $color = 'bg-indigo-600';
                break;
            default:
                $color = 'bg-slate-950';
                break;
        }
    }
@endphp

<div>
    <div class="w-full px-10 py-5 {{$color}} relative rounded-lg">
        @if($user->color=='Black')
            <h1 class="text-2xl text-white">JobConnect</h1>
            <a href="{{route('view_edit_p',['id'=>$user->id])}}" class="text-white absolute top-4 right-4 rounded-lg bg-violet-600 px-1 py-2">Actualizar perfil</a>
        @else
            <h1 class="text-2xl text-white">JobConnect</h1>
            <a href="{{route('view_edit_p',['id'=>$user->id])}}" >Actualizar perfil</a>
        @endif
        <div class="h-30 flex justify-center">
            <img src="{{ asset('storage/images/' . $user->uri) }}" alt="user-profile" class="h-[150px] rounded-full">
        </div>
    </div>
    <div class="h-screen bg-indigo-100 p-10 flex justify-center gap-10">
        <div class="h-1/4 w-1/4 p-2 border bg-indigo-100">
            <h2 class="fuente-mono text-2xl">{{$user->name}}</h2>
            <p class="fuente-mono">{{$user->email}}</p>
            <p class="fuente-mono">especialidad</p>
        </div>
        <div class="h-1/2 w-1/2 overflow-auto border">
            <h2 class="text-xl text-center">Mis posteos</h2>
            @forelse ($user->posts as $post)
                <div class="flex flex-col overflow-auto rounded-lg bg-indigo-200 p-5">
                    <strong class="text-xl">#{{ $post->title }}</strong>
                    <p class="text-justify">{{ $post->des }}</p>
                    <span>{{ $post->created_at }}</span>
                </div>
            @empty
                <span>No hay posteos aún.</span>
            @endforelse
        </div>
    </div>
</div>
