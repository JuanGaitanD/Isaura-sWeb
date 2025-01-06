<!DOCTYPE html>
<html lang="en">
<head>
    <x-head />
<body>
    <div class="min-h-screen bg-pink-50">
        <x-nav :title="'home'"/>        

        <main class="container mx-auto py-12 px-4 bg-white shadow-lg rounded-lg mt-8">
            <div class="ml-4 mb-8">
                <h2 class="text-4xl text-pink-400 mb-1 font-serif">Trozos de texto de corazon ❤</h2>
                <h3h class="text-gray-400 mb-6 text-l">Aquí encontrarás frases, texto y demás que me hacen pensar en ti. Mi margarita 🌼✨</h3h>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 p-6 items-center">
                <div class="bg-pink-50 rounded-lg p-6 shadow-md mb-6 flex items-center justify-between min-w-[200px] md:min-w-[400px] w-fit h-fit max-w-3xl">
                    @if (isset($texto))
                        <div>
                            <h3 class="text-xl text-pink-500 font-serif mb-2">{{ $texto[0]->titulo }}</h3>
                            <span class="text-gray-500 text-sm block mb-3">{{ $texto[0]->fecha }}</span>
                            <p class="text-gray-700">{{ $texto[0]->contenido }}</p>
                        </div>
                    @else
                        <div>
                            <h3 class="text-xl text-pink-500 font-serif mb-2">No hay notas</h3>
                            <span class="text-gray-500 text-sm block mb-3"></span>
                            <p class="text-gray-700 line-clamp-3">Bueno, no hay notas, vuelve por donde viniste</p>
                        </div>
                    @endif
                </div>
    
                <div class="flex justify-center items-center">
                    @if (isset($texto[0]->img))
                        <div class="hidden md:flex w-96 bg-white shadow-lg border-8 border-yellow-100 rounded-lg items-center justify-center">
                            <img src="{{ asset($texto[0]->img) }}" alt="imagen" class="object-cover rounded-lg" width="100%" height="100%">
                        </div>
                    @else
                        <x-isau_collage />
                    @endif
                </div>
            </div>


            <div class="text-center mt-4">
                <a href="{{ url()->previous() }}" class="bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded">
                    Volver
                </a>
            </div>
        </main>
    </div>
</body>
</html>