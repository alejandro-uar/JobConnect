<x-layouts>
    <x-slot:title>Actualizar</x-slot:title>
    <x-form type="actualizar" key="{{$user->id}}">
        <x-input type="actualizar" 
                name="{{$user->name}}"
                email="{{$user->email}}"
                pass="{{$user->role_id}} "
        >
        </x-input>
    </x-form>
</x-layouts>

