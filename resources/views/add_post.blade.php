<x-layouts>
    <x-slot:title>Add Post</x-slot:title>
    <div class="flex justify-center items-center h-screen">
      <form action="{{ route('post') }}" method="POST" class="max-w-md bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          @csrf
          <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Título:</label>
            <input type="text" id="title" name="title" placeholder="Backend developer..." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="des" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
            <textarea id="des" name="des" rows="4" cols="50" placeholder="Agencia busca..." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>
        <div class="mb-4">
            <label for="pais" class="block text-gray-700 text-sm font-bold mb-2">País:</label>
            <input type="text" id="pais" name="pais" required placeholder="Argentina" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="ciudad" class="block text-gray-700 text-sm font-bold mb-2">Ciudad:</label>
            <input type="text" id="ciudad" name="ciudad" required placeholder="Salta" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="requisitos" class="block text-gray-700 text-sm font-bold mb-2">Requisitos:</label>
            <textarea id="requisitos" name="requisitos" placeholder="Java Spring..." rows="4" cols="50" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>
        <div class="mb-4">
            <label for="formato" class="block text-gray-700 text-sm font-bold mb-2">Formato:</label>
            <input type="text" id="formato" name="formato" placeholder="Full-time" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="modalidad" class="block text-gray-700 text-sm font-bold mb-2">Modalidad:</label>
            <input type="text" id="modalidad" name="modalidad" placeholder="Remoto" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="salario" class="block text-gray-700 text-sm font-bold mb-2">Salario:</label>
            <input type="text" id="salario" name="salario" placeholder="$120k" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="cierre" class="block text-gray-700 text-sm font-bold mb-2">Fecha de Cierre:</label>
            <input type="date" id="cierre" name="cierre" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Registrar</button>
      </form>
    </div>
  </x-layouts>
  
      