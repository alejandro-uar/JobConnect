@props(['type','key'])

@php
function determinar_form($tipo){
    if ($tipo == 'search') { return "flex flex-row justify-between items-center";}
    if ($tipo == 'registrar' || $tipo == 'actualizar')  { return "flex flex-col justify-center items-center";}
}

$valor="";
$url="";
$clase="";
switch ($type) {
    case 'search':
        $valor='Buscar';
        $url=route('search');
        $clase= determinar_form($type);
        break;
    case 'registrar':
        $valor='Registrar';
        $url=route('add');
        $clase= determinar_form($type);
        break;
    case 'actualizar':
        $valor='Actualizar';
        $url=route('edit',['id'=>$key]);
        $clase= determinar_form($type);
        break;
    default:
        echo 'error';
        break;
}
@endphp

<div>
    <form action="{{$url}}" method="post" class="{{$clase}}" enctype="multipart/form-data">
        @csrf
        {{$slot}}
        <button type="submit" class="bg-indigo-500 text-white px-2 py-2  rounded hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">{{$valor}}</button>
    </form>
</div>
