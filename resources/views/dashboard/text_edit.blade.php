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
                    <div class="w-full border-2 border-pink-300 rounded-lg p-2 mb-4">
                        <img src="{{ asset('img/text_inspiracion.jpg') }}" alt="Inspiración" class="max-w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>

                <div class="flex flex-col justify-center px-6">
                    <h2 class="text-4xl text-pink-400 mb-1 font-serif">Editar</h2>

                    @if ($errors->any())
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                            <p class="font-bold">Error</p>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('text.update', ['id' => $texto->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="text" name="titulo" class="w-full border-2 border-pink-300 rounded-lg p-2 mb-4" placeholder="Escribe aquí el nombre" value="{{ $texto->titulo }}" required>
                        <input type="date" name="fecha" class="w-full border-2 border-pink-300 rounded-lg p-2 mb-4" value="{{ $texto->fecha }}" required>
                        <textarea name="contenido" class="w-full border-2 border-pink-300 rounded-lg p-2 mb-4" placeholder="Escribe aquí el contenido" rows="1" oninput="adjustHeight(this)" id="contentTextarea" required>{{ $texto->contenido}}</textarea>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                            <div class="mt-4">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Vista previa:</label>
                                <div id="imagePreview" class="w-full h-48 border-2 border-pink-300 rounded-lg flex items-center justify-center bg-gray-50">
                                    @if (isset($texto->img))
                                        <img src="{{ asset($texto->img) }}" class="w-full h-48 object-cover rounded-lg" alt="Imagen seleccionada">
                                    @else
                                        <p class="text-gray-400">No hay imagen seleccionada</p>
                                    @endif
                                </div>
                            </div>

                            <div class="relative mb-4 flex flex-col items-center justify-center">
                                <input type="file" 
                                    name="img" 
                                    accept="image/*" 
                                    class="block w-full text-sm text-pink-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-pink-100 file:text-pink-500
                                        hover:file:bg-pink-200
                                        border-2 border-pink-300 rounded-lg p-2">
                                <p class="mt-1 text-sm text-gray-500">Máximo 10MB</p>
                            </div>
                        </div>

                        <button class="bg-pink-300 text-white px-6 py-2 rounded-full hover:bg-pink-400 w-fit" type="submit">
                            Editar!
                        </button>

                        <a href="{{ url()->previous() }}" class="bg-gray-300 text-white px-6 py-2 rounded-full hover:bg-gray-400 w-fit">Volver</a>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <script>
        document.querySelector('input[type="file"]').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                if (file.size > 10 * 1024 * 1024) {
                    alert('La imagen no debe superar los 10MB');
                    document.querySelector('input[type="file"]').value = '';
                    return;
                }

                const reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('imagePreview').innerHTML = `
                        <img src="${event.target.result}" class="w-full h-full object-cover rounded-lg" alt="Imagen seleccionada">
                    `;
                }
                reader.readAsDataURL(file);
            }
        });

        function adjustHeight(element) {
            element.style.height = '';
            element.style.height = element.scrollHeight + 'px';
        }
        // Adjust height on page load
        window.onload = function() {
            adjustHeight(document.getElementById('contentTextarea'));
            document.querySelector('input[type="file"]').value = '';
        }
    </script>
</body>
</html>