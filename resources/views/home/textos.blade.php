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

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @if (isset($texto) && count($texto) == 0)
                    <a href="" class="transform transition duration-300 hover:scale-105">
                        <div class="bg-pink-50 rounded-lg shadow-sm p-6 hover:shadow-md">
                            <h3 class="text-xl text-pink-500 font-serif mb-2">No hay notas</h3>
                            <span class="text-gray-500 text-sm block mb-3"></span>
                            <p class="text-gray-700 line-clamp-3">Bueno, no hay notas, vuelve por donde viniste</p>
                        </div>
                    </a>
                @else
                    @foreach($texto as $nota)
                        <x-card_text :nota="$nota"/>
                    @endforeach
                @endif
            </div>
        </main>
    </div>
</body>
</html>