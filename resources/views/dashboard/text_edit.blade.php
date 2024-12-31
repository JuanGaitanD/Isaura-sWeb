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

                    <form action="{{ route('text.update', ['id' => $texto->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="text" name="titulo" class="w-full border-2 border-pink-300 rounded-lg p-2 mb-4" placeholder="Escribe aquí el nombre" value="{{ $texto->titulo }}" required>
                        <input type="date" name="fecha" class="w-full border-2 border-pink-300 rounded-lg p-2 mb-4" value="{{ $texto->fecha }}" required>
                        <textarea name="contenido" class="w-full border-2 border-pink-300 rounded-lg p-2 mb-4" placeholder="Escribe aquí el contenido" rows="1" oninput="adjustHeight(this)" id="contentTextarea" required>{{ $texto->contenido}}</textarea>
                        

                        <button class="bg-pink-300 text-white px-6 py-2 rounded-full hover:bg-pink-400 w-fit" >
                            Editar!
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <script>
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