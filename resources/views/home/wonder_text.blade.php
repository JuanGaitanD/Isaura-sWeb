<!DOCTYPE html>
<html lang="en">
<head>
    <x-head />
<body>
    <div class="min-h-screen bg-pink-50">
        <x-nav :title="'home'"/>        

        <main class="container mx-auto py-12 px-4 bg-white shadow-lg rounded-lg mt-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col justify-center px-6">
                    <h2 class="text-4xl text-pink-400 mb-1 font-serif">¡Wonder! de corazon ❤</h2>
                    <h3h class="text-gray-400 mb-6 text-l">Aquí podrás ver aleatoriamente frases, texto y demás que me hacen pensar en ti. Mi margarita 🌼✨</h3h>

                    @if (isset($nota))
                        @if ($nota == 1)
                            @php
                                $nota = [];
                                $objeto = json_encode(['titulo' => 'Se acabaron las notas! :D', 'fecha' => '', 'contenido' => 'No hay más notas para ti, pero siempre puedes volver a verlas.']);
                                array_push($nota, json_decode($objeto));
                            @endphp
                        @endif

                        <div class="p-4 mb-6 bg-pink-50 rounded-lg shadow-sm">
                            <div class="mb-4">
                                <h4 class="text-2xl text-pink-500 font-serif">{{ $nota[0]->titulo }}</h4>
                                <span class="text-gray-500 text-sm">{{ $nota[0]->fecha }}</span>
                            </div>
                            <p class="text-gray-700 italic">
                                {{ $nota[0]->contenido }}
                            </p>
                        </div>
                    @else
                        <div class="p-4 mb-6 bg-pink-50 rounded-lg shadow-sm">
                            <div class="mb-4">
                                <h4 class="text-2xl text-pink-500 font-serif">Aquí van los textos que he escrito para ti</h4>
                                <span class="text-gray-500 text-sm"></span>
                            </div>
                            <p class="text-gray-700 italic">
                                Pues, escribir sobre ti se hace fácil. Fácil por tu belleza y por tu intelecto que me hacen soñar con vivir ✨
                            </p>
                        </div>
                    @endif

                    <form action="{{route('wonder.get')}}" method="get">
                        @csrf
                        <button class="bg-pink-300 text-white px-6 py-2 rounded-full hover:bg-pink-400 w-fit" type="submit">
                            ¡Wonder!
                        </button>
                    </form>
                </div>
                <div class="flex justify-center items-center">
                    <div class="hidden md:flex w-96 h-96 bg-white shadow-lg border-8 border-yellow-100 items-center justify-center">
                        <x-isau_collage />
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>