<!DOCTYPE html>
<html lang="en">
<head>
    <x-head />
</head>
<body>
    <div class="min-h-screen bg-pink-50">
        <x-nav :title="'Dashboard'"/>
    
        <main class="container mx-auto py-12 px-4 bg-white shadow-lg rounded-lg mt-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col justify-center px-6">
                    <h2 class="text-4xl text-pink-400 mb-1 font-serif">Textos</h2>
                    <h3h class="text-gray-400 mb-6 text-l">Aquí podemos agregar, editar y eliminar las notas.</h3h>
    

                    <button class="bg-pink-300 text-white px-6 py-2 rounded-full hover:bg-pink-400 w-fit" onclick="index(1)">
                        Crear!
                    </button>
                </div>
                <div class="flex justify-center items-center">
                    <div id="operaciones"></div>
                </div>
            </div>

            <div class="overflow-x-auto mt-8">
                <table class="min-w-full bg-white rounded-lg overflow-hidden">
                    <thead class="bg-pink-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-pink-500 uppercase tracking-wider">Nombre</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-pink-500 uppercase tracking-wider">Fecha</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-pink-500 uppercase tracking-wider">Contenido</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-pink-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-pink-100">
                        @if (isset($texto) && count($texto) > 0)
                            @foreach ($texto as $text)
                                <tr class="hover:bg-pink-50">
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $text->titulo }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $text->fecha}}</td>
                                    <td class="px-6 py-4">{{ $text->contenido}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('text.load_edit', ['id' => $text->id]) }}">
                                                <button class="text-blue-500 hover:text-blue-700" type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                    </svg>
                                                </button>
                                            </a>
                                            
                                            <form action="{{ route('text.delete', $text->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>    
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="hover:bg-pink-50">
                                <td class="px-6 py-4 whitespace-nowrap">Titulo</td>
                                <td class="px-6 py-4 whitespace-nowrap">DD/MM/YYYY</td>
                                <td class="px-6 py-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus facilis iste eum expedita! Qui quas ipsa corrupti natus dolorem debitis vitae aliquid, deserunt minus molestias reprehenderit eius error facere cupiditate aperiam? Voluptatibus cupiditate, esse neque, earum voluptates at doloremque illo libero ex consequatur blanditiis unde, debitis vel et dolorem omnis.</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex space-x-2">
                                        <button class="text-blue-500 hover:text-blue-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                            </svg>
                                        </button>
                                        
                                        <button class="text-red-500 hover:text-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </button></svg>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script>
        function index(n) {
            switch (n) {
                case 1:
                    document.querySelector('#operaciones').innerHTML = `
                        <form action="{{route('text.store')}}" method="POST">
                            @csrf

                            <input type="text" name="titulo" class="w-full border-2 border-pink-300 rounded-lg p-2 mb-4" placeholder="Escribe aquí el nombre" required>
                            <input type="date" name="fecha" class="w-full border-2 border-pink-300 rounded-lg p-2 mb-4" required>
                            <textarea id="contentTextarea" name="contenido" class="w-full border-2 border-pink-300 rounded-lg p-2 mb-4" placeholder="Escribe aquí el contenido" oninput="adjustHeight(this)" required></textarea>
                            
                            <button type="submit" class="bg-pink-300 text-white px-6 py-2 rounded-full hover:bg-pink-400 w-fit">
                                Guardar
                            </button>
                        </form>
                    `;
                    break;

                default:
                    document.querySelector('#operaciones').innerHTML = '';
                    break;
            }
        }

        function adjustHeight(element) {
            element.style.height = '';
            element.style.height = element.scrollHeight + 'px';
        }
        // Adjust height on page load
        window.onload = function() {
            adjustHeight(document.getElementById('contentTextarea'));
        }
    </script>
</body>
</html>